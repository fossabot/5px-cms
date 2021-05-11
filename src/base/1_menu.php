<?php

    // name of the main file within a plugin folder
    $mainFile = '/index.php">';

    // html of the button
    $startBtn = '<li class="nav-item"><a class="nav-link btn btn-outline-dark me-md-3" aria-current="page" href="';
    $endBtn = '</a></li>';

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
    $removeForVisitor = array('register', 'login', 'logout', 'template');

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

    // the code that creates the menu with the variables & function above
    switch ($id) {
        case $loggedIn:
            switch ($role) {
                case $isAdmin:
                    foreach ($pluginDirs as $pluginsDirKey => $pluginDir) {
                        switch ($pluginsDirKey) {
                            case $cmsDir:

                                foreach ($plugins = getPlugins($pluginDir) as $pluginKey => $plugin) {

                                    $displayName = removeFirst($plugin);

                                    $currentLocation = getCurrentPluginFolder();
                                    if ($currentLocation == 'site' && $displayName !== 'dashboard') continue;

                                    $removeCheck = in_array($displayName, $removeForUser);
                                    if ($removeCheck == $dontAddPlugin) continue;
        
                                    $link = $pluginDir . $plugin . $mainFile;
                                    $completeButton = $startBtn . $link . $displayName . $endBtn;
        
                                    echo $completeButton;
        
                                }

                            break;
                            case $siteDir:

                                foreach ($plugins = getPlugins($pluginDir) as $pluginKey => $plugin) {

                                    $displayName = removeFirst($plugin);

                                    $currentLocation = getCurrentPluginFolder();
                                    if ($currentLocation == 'cms' && $displayName !== 'home') continue;

                                    $removeCheck = in_array($displayName, $removeForUser);
                                    if ($removeCheck == $dontAddPlugin) continue;
        
                                    $link = $pluginDir . $plugin . $mainFile;
                                    $completeButton = $startBtn . $link . $displayName . $endBtn;
        
                                    echo $completeButton;
        
                                }
                                
                            break;
                        }
                    }
                break;
                case $isUser:
                    foreach ($pluginDirs as $pluginDirKey => $pluginDir) {
                        if ($pluginDirKey == $cmsDir) continue;

                        foreach ($plugins = getPlugins($pluginDir) as $pluginKey => $plugin) {

                            $displayName = removeFirst($plugin);

                            $removeCheck = in_array($displayName, $removeForUser);
                            if ($removeCheck == $dontAddPlugin) continue;

                            $link = $pluginDir . $plugin . $mainFile;
                            $completeButton = $startBtn . $link . $displayName . $endBtn;

                            echo $completeButton;

                        }
                    }
                break;
            }
        break;
        case $loggedOut:
            foreach ($pluginDirs as $pluginDirKey => $pluginDir) {
                if ($pluginDirKey == $cmsDir) continue;

                foreach ($plugins = getPlugins($pluginDir) as $pluginKey => $plugin) {

                            $displayName = removeFirst($plugin);

                            $removeCheck = in_array($displayName, $removeForVisitor);
                            if ($removeCheck == $dontAddPlugin) continue;

                            $link = $pluginDir . $plugin . $mainFile;
                            $completeButton = $startBtn . $link . $displayName . $endBtn;
                            
                            echo $completeButton;

                }
            }
        break;
    }