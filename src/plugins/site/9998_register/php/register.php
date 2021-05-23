<?php

    if (isset( $_POST[ "submit" ])) {

        $name       = $_POST["name"];
        $email      = $_POST["email"];
        $pass       = $_POST["pwd" ];
        $passRepeat = $_POST["pwdrepeat"];
        $role       = 0;

        require_once '../../../../inc/dbh.inc.php';
        require_once '../../../../inc/functions.inc.php';
        require_once './functions.php';

        if (emptyInput($_POST) == true) {

            header("location: ../index.php?msg=emptyinput");
            exit();

        }

        if (invalidUsername($name) !== false ) {

            header("location: ../index.php?msg=invalidusername");
            exit();

        }
        
        if (invalidEmail($email) !== false ) {

            header("location: ../index.php?msg=invalidemail");
            exit();

        }
        
        if (invalidPassRepeat($pass, $passRepeat) !== false) {

            header("location: ../index.php?msg=passdontmatch");
            exit();

        }
        
        if (usernameExists($conn, $name) !== false) {

            header("location: ../index.php?msg=usernametaken");
            exit();

        }

        createUser($conn, $name, $email, $pass, $role);

    } else {

        header("location: ../index.php");
    
    }