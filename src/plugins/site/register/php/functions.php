<?php

    require_once '../../../../inc/functions.inc.php';

    function emptyRegisterInput($name, $email, $pass, $passRepeat) {

        if (empty($name) || empty($email) || empty($pass) || empty($passRepeat) ) {

            $result = true;
            return $result;

        } else {

            $result = false;
            return $result;

        }

    }

    function createUser($conn, $name, $email, $pass, $role) {
        
        $sql = "INSERT INTO users (uId, uEmail, uPass, uRole) VALUES (?, ?, ?, ?);";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {

            header("location: ../index.php?error=stmtfailed");
            exit();

        }

        $hashedPass = password_hash($pass, PASSWORD_DEFAULT);

        mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $hashedPass, $role);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);

        header("location: ../../login/index.php");

    }