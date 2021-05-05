<?php

    // used for login and registration
    function invalidUsername($name) {

        if (!preg_match("/^[a-zA-Z0-9]*$/", $name)) {

            $result = true;
            return $result;

        } else {

            $result = false;
            return $result;

        }

    }

    // used for registration (could be used when receiving messages on contact page or something)
    function invalidEmail($email) {

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

            $result = true;
            return $result;

        } else {

            $result = false;
            return $result;

        }

    }

    // used for registration (could also be used when resetting password)
    function invalidPassRepeat($pass, $passRepeat) {

        if ($pass !== $passRepeat) {

            $result = true;
            return $result;

        } else {

            $result = false;
            return $result;

        }

    }

    // user for login and registration (could also be used when changing profile/username)
    function usernameExists($conn, $name) {

        $sql = "SELECT * FROM users WHERE uId = ?;";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {

            header("location: ../index.php?error=stmtfailed");
            exit();

        }

        mysqli_stmt_bind_param($stmt, "s", $name);
        mysqli_stmt_execute($stmt);

        $resultData = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_assoc($resultData)) {

            return $row;

        } else {

            $result = false;
            return $result; 
            
        }

        mysqli_stmt_close($stmt);

    }

    // used for login (could be used for several things)
    function userExists($conn, $rowId) {

        $sql = "SELECT * FROM `users` WHERE `id` = ?;";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {

            header("location: ../index.php?error=stmtfailed");
            exit();

        }

        mysqli_stmt_bind_param($stmt, "s", $rowId);
        mysqli_stmt_execute($stmt);

        $resultData = mysqli_stmt_get_result($stmt);

        if (mysqli_fetch_assoc($resultData)) {

            return true;

        } else {

            return false;

        }

        mysqli_stmt_close($stmt);

    }

    // gets all the plugin folders used for the cms
    function getPlugins($plugins_directory) {

        $plugins = scandir($plugins_directory);

        $plugin_folders_array = array_diff($plugins, array('.', '..'));

        return $plugin_folders_array;

    }

    function includeCmsMenuButtons($exclude) {
        $cms_plugins_folder = '../cms/plugins/';

        foreach (getPlugins($cms_plugins_folder) as $key => $plugin_folder_name) {
            if (!in_array($plugin_folder_name, $exclude)) {
                include $cms_plugins_folder . $plugin_folder . '/menu.btn.php';
            } else {
                continue;
            }
        }
    }

    // gets all the plugin folders used for the site
    function includeSiteMenuButtons($exclude) {
        $site_plugins_folder = '../cms/plugins/';

        foreach (getPlugins($site_plugins_folder) as $key => $plugin_folder_name) {
            if (!in_array($plugin_folder_name, $exclude)) {
                include $site_plugins_folder . $plugin_folder . '/menu.btn.php';
            } else {
                continue;
            }
        }
    }
