<?php

    if (isset($_POST["submit"])) {

        $username = $_POST["username"];
        $pass = $_POST["pwd"];
        
        require_once '../../../../inc/dbh.inc.php';
        require_once './functions.php';
        require_once '../../../../inc/functions.inc.php';

        if (emptyLoginInput($username, $pass) !== false) {

            header("location: ../index.php?error=emptyinput");
            exit();

        }

        loginUser($conn, $username, $pass);

    } else {

        header("location: ../index.php");
        
    }