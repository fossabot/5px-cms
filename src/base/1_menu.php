    <button class="btn btn-outline-dark navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        menu <i class="fal fa-arrow-alt-circle-down"></i>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
            <?php

                // assigns bool, true when client is logged in
                $id = isset($_SESSION['id']);
                $loggedIn = true;
                $loggedOut = false;

                // assigns bool, true when client role is higher then 0
                $role = isset($_SESSION['uRole']);
                $isAdmin = true;
                $isUser = false;

                // array with plugins directory paths
                $pluginDirs = array('../../cms/', '../../site/');
                $cmsDir = 0;
                $siteDir = 1;

                // array with plugin names it need to ignore when client is user or admin
                $removeForUser = array('register', 'login', 'template');

                // array with plugin names it need to ignore when client is visitor
                $removeForVisitor = array('logout', 'template');

                $dontAddPlugin = true;

                // gets all the plugin folders from given directory
                function getPlugins($pluginDir) {
                    $plugins = scandir($pluginDir);
                    $plugins = array_diff($plugins, array('.', '..'));

                    return $plugins;
                }

                function removeFirst($plugin) {
                    $arr = explode('_', $plugin);
                    return $arr[1];
                }
                
                function addIcon($pluginName) {

                    switch ($pluginName) {
                        case 'home':
                            $icon = '<i class="fas fa-home"></i>';
                        break;
                        case 'dashboard':
                            $icon = '<i class="fas fa-tachometer-alt-fast"></i>';
                        break;
                        case 'contact':
                            $icon = '<i class="far fa-address-book"></i>';
                        break;
                        case 'messages':
                            $icon = '<i class="far fa-comments"></i>';
                        break;
                        case 'login':
                            $icon = '<i class="fas fa-sign-in-alt"></i>';
                        break;
                        case 'register':
                            $icon = '<i class="far fa-user-plus"></i>';
                        break;
                        case 'logout':
                            $icon = '<i class="fas fa-sign-out-alt"></i>';
                        break;
                        default:
                            $icon = '';
                        break;
                    }

                    return $icon;

                }

                function constructButton($plugin, $pluginDir, $displayName) {

                    $navItem = '<li class="nav-item mb-2 me-0 mb-xl-0 me-xl-3">';

                    $reTagPart1 = '<a class="nav-link text-light" href="';
                    $reTagPart2 = $pluginDir . $plugin;
                    $reTagPart3 = '/index.php">';

                    $redirectTag = $reTagPart1 . $reTagPart2 . $reTagPart3;

                    $buttonGroup = '<div class="btn-group">';

                    $nBtnPart1 = '<div class="btn btn-outline-primary">';
                    $nBtnPart2 = $displayName;
                    $nBtnPart3 = '</div>';

                    $nameButton = $nBtnPart1 . $nBtnPart2 . $nBtnPart3;

                    $iBtnPart1 = '<div class="btn btn-primary">';
                    $iBtnPart2 = addIcon($displayName);
                    $iBtnPart3 = '</div></div>';

                    $iconButton = $iBtnPart1 . $iBtnPart2 . $iBtnPart3;

                    $navItemClose = '</a></li>';
                    
                    switch (strlen($iBtnPart2)) {
                        case 0:
                            $navItemToReturn = $navItem . $redirectTag . $nameButton . $navItemClose;
                        break;
                        default:
                            $navItemToReturn = $navItem . $redirectTag . $buttonGroup . $nameButton . $iconButton . $navItemClose;
                        break;
                    }

                    return $navItemToReturn;

                }

                // the code that creates the menu with the variables & function above
                switch ($id) {
                    case $loggedIn:
                        switch ($role) {
                            case $isAdmin:
                                foreach ($pluginDirs as $pluginsDirKey => $pluginDir) {
                                    switch ($pluginsDirKey) {
                                        case $cmsDir:
                                            
                                            $plugins = getPlugins($pluginDir);

                                            foreach ($plugins as $pluginKey => $plugin) {

                                                $displayName = removeFirst($plugin);

                                                $currentLocation = getCurrentPluginFolder();

                                                if ($currentLocation == 'site' && $displayName !== 'dashboard') continue;

                                                $removeCheck = in_array($displayName, $removeForUser);
                                                if ($removeCheck == $dontAddPlugin) continue;
                
                                                $completeButton = constructButton($plugin, $pluginDir, $displayName);
                                                
                                                echo $completeButton;

                                            }

                                        break;
                                        case $siteDir:
                                            
                                            $plugins = getPlugins($pluginDir);

                                            foreach ($plugins as $pluginKey => $plugin) {

                                                $displayName = removeFirst($plugin);

                                                $currentLocation = getCurrentPluginFolder();

                                                if ($currentLocation == 'cms' && $displayName !== 'home') continue;

                                                $removeCheck = in_array($displayName, $removeForUser);

                                                if ($removeCheck == $dontAddPlugin) continue;
                
                                                $completeButton = constructButton($plugin, $pluginDir, $displayName);
                                                
                                                echo $completeButton;

                                            }

                                        break;
                                    }
                                }
                            break;
                            case $isUser:

                                foreach ($pluginDirs as $pluginDirKey => $pluginDir) {
        
                                    if ($pluginDirKey == $cmsDir) continue;

                                    $plugins = getPlugins($pluginDir);
        
                                    foreach ($plugins as $pluginKey => $plugin) {
        
                                        $displayName = removeFirst($plugin);
        
                                        $removeCheck = in_array($displayName, $removeForUser);
                                        if ($removeCheck == $dontAddPlugin) continue;
        
                                        $completeButton = constructButton($plugin, $pluginDir, $displayName);
                                        
                                        echo $completeButton;

                                    }

                                }

                            break;

                        }

                    break;
                    case $loggedOut:
                        
                        foreach ($pluginDirs as $pluginDirKey => $pluginDir) {

                            $plugins = getPlugins($pluginDir);

                            if ($pluginDirKey == $cmsDir) continue;

                            foreach ($plugins as $pluginKey => $plugin) {

                                $displayName = removeFirst($plugin);

                                $removeCheck = in_array($displayName, $removeForVisitor);

                                if ($removeCheck == $dontAddPlugin) continue;

                                $completeButton = constructButton($plugin, $pluginDir, $displayName);
                                
                                echo $completeButton;

                            }

                        }

                    break;
                }
            ?>
        </ul>
    </div>
</nav>