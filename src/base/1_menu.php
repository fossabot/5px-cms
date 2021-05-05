<div class="col-2">

    <div class="row text-center justify-content-center py-3 bg-dark">

        <?php
            
            // array with plugins directory paths
            $pluginDirs = array('../../cms/', '../../site/');

            if (isset($_SESSION['id'])) {

                $remove = array('register', 'login', 'template');

                if (isset($_SESSION['uRole'])) {
    
                    // do something for each plugins directory
                    foreach ($pluginDirs as $pluginsDirKey => $pluginDir) {
                        
                        // scan current plugin directory
                        $dirScanResult = scandir($pluginDir);
        
                        // remove the . & .. from the start of the array
                        $dirScanResult = array_diff($dirScanResult, array('.', '..'));
                        
                        // switch if case matches key of current plugin directory
                        switch ($pluginsDirKey) {
        
                            case 0:
        
                                echo '<h3 class="text-light">CMS Plugins</h3>';
        
                                // do something for each plugin
                                foreach ($dirScanResult as $cmsPluginKey => $cmsPlugin) {
                                    
                                    if (!in_array($cmsPlugin, $remove)) {

                                        echo '<div class="col-11">';
                                            // change this line to change the button style
                                            echo '<a class="btn btn-warning w-100 mb-2" href="../../cms/' . $cmsPlugin . '/index.php">' . $cmsPlugin . '</a>';
                                        echo '</div>';
                    
                                    } else {

                                        continue;

                                    }
                
                                }
        
                            break;
                            case 1:
        
                                echo '<h3 class="text-light">Site Plugins</h3>';
        
                                // do something for each plugin
                                foreach ($dirScanResult as $sitePluginKey => $sitePlugin) {
                                        
                                    if (!in_array($sitePlugin, $remove)) {

                                        echo '<div class="col-11">';
                                            // change this line to change the button style
                                            echo '<a class="btn btn-warning w-100 mb-2" href="../../site/' . $sitePlugin . '/index.php">' . $sitePlugin . '</a>';
                                        echo '</div>';
                    
                                    } else {

                                        continue;

                                    }

                                }
        
                            break;
        
                        }
        
                    }
    
                } else {
    
                    // do something for each plugins directory
                    foreach ($pluginDirs as $pluginsDirKey => $pluginDir) {
                        
                        // scan current plugin directory
                        $dirScanResult = scandir($pluginDir);
        
                        // remove the . & .. from the start of the array
                        $dirScanResult = array_diff($dirScanResult, array('.', '..'));
                        
                        // switch if case matches key of current plugin directory
                        switch ($pluginsDirKey) {
        
                            case 0:
                                break;
                            case 1:
        
                                echo '<h3 class="text-light">Site Plugins</h3>';
        
                                // do something for each plugin
                                foreach ($dirScanResult as $sitePluginKey => $sitePlugin) {
                                    
                                    if (!in_array($sitePlugin, $remove)) {

                                        echo '<div class="col-11">';
                                            // change this line to change the button style
                                            echo '<a class="btn btn-warning w-100 mb-2" href="../../site/' . $sitePlugin . '/index.php">' . $sitePlugin . '</a>';
                                        echo '</div>';
                    
                                    } else {

                                        continue;

                                    }
                    
                                }
        
                            break;
        
                        }
        
                    }
    
                }

            } else {

                $remove = array('logout', 'template');

                // do something for each plugins directory
                foreach ($pluginDirs as $pluginsDirKey => $pluginDir) {
                    
                    // scan current plugin directory
                    $dirScanResult = scandir($pluginDir);
    
                    // remove the . & .. from the start of the array
                    $dirScanResult = array_diff($dirScanResult, array('.', '..'));
                    
                    // switch if case matches key of current plugin directory
                    switch ($pluginsDirKey) {
    
                        case 0:
                            break;
                        case 1:
    
                            echo '<h3 class="text-light">Site Plugins</h3>';
    
                            // do something for each plugin
                            foreach ($dirScanResult as $sitePluginKey => $sitePlugin) {
                                
                                if (!in_array($sitePlugin, $remove)) {

                                    echo '<div class="col-11">';
                                        // change this line to change the button style
                                        echo '<a class="btn btn-warning w-100 mb-2" href="../../site/' . $sitePlugin . '/index.php">' . $sitePlugin . '</a>';
                                    echo '</div>';
                
                                } else {

                                    continue;

                                }

                            }
    
                        break;
    
                    }
    
                }

            }
            
        ?>
    
    </div>
    
</div>

    