<?php
    
    require_once '../../../../inc/functions.inc.php';

    function loginUser($conn, $username, $pass) {

        $usernameExists = usernameExists($conn, $username);
        
        if ($usernameExists == false) {
            header("location: ../index.php?msg=nouser");
            exit();
        }

        $hashedPass = $usernameExists["uPass"];
        $checkPass = password_verify($pass, $hashedPass);

        if ($checkPass === false) {

            header("location: ../index.php?msg=wrongpass");
            exit();

        } else if ($checkPass === true) {

            session_start();

            $_SESSION["id"] = $usernameExists["id"];
            $_SESSION["uId"] = $usernameExists["uId"];

            if ($usernameExists["uRole"] !== 0) {

                $_SESSION["uRole"] = $usernameExists["uRole"];

            }

            header("location: ../../0_home/index.php");
            exit();

        }

    }