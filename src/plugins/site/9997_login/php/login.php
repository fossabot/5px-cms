<?php

    if (isset($_POST["submit"])) {

        $username = $_POST["username"];
        $pass = $_POST["pwd"];
        
        require_once '../../../../inc/dbh.inc.php';
        require_once '../../../../inc/functions.inc.php';
        require_once './functions.php';

        if (emptyInput($_POST) == true) {

            header("location: ../index.php?msg=emptyinput");
            exit();

        }

        loginUser($conn, $username, $pass);

    } else {

        header("location: ../index.php");
        
    }