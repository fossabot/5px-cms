<?php

    require_once '../../../../inc/functions.inc.php';

    function createUser($conn, $name, $email, $pass, $role) {
        
        $sql = "INSERT INTO users (uId, uEmail, uPass, uRole) VALUES (?, ?, ?, ?);";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {

            header("location: ../index.php?msg=stmtfailed");
            exit();

        }

        $hashedPass = password_hash($pass, PASSWORD_DEFAULT);

        mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $hashedPass, $role);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);

        header("location: ../../9997_login/index.php");

    }