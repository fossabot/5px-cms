<?php
    
    require_once '../../../../inc/functions.inc.php';

    function emptyLoginInput($username, $pass) {

        if (empty($username) || empty($pass)) {

            $result = true;
            return $result;

        } else {

            $result = false;
            return $result;

        }

    }

    function loginUser($conn, $username, $pass) {

        $usernameExists = usernameExists($conn, $username);
        
        if ($usernameExists == false) {
            header("location: ../index.php?error=nouser");
            exit();
        }

        $hashedPass = $usernameExists["uPass"];
        $checkPass = password_verify($pass, $hashedPass);

        if ($checkPass === false) {

            header("location: ../index.php?error=wrongpass");
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