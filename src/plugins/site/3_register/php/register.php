<?php

    if (isset( $_POST[ "submit" ])) {

        $name       = $_POST["name"];
        $email      = $_POST["email"];
        $pass       = $_POST["pwd" ];
        $passRepeat = $_POST["pwdrepeat"];
        $role       = 0;

        require_once '../../../../inc/dbh.inc.php';
        require_once './functions.php';
        require_once '../../../../inc/functions.inc.php';

        if (emptyRegisterInput($name, $email, $pass, $passRepeat) !== false) {

            header("location: ../index.php?error=emptyinput");
            exit();

        }

        if (invalidUsername($name) !== false ) {

            header("location: ../index.php?error=invalidusername");
            exit();

        }
        
        if (invalidEmail($email) !== false ) {

            header("location: ../index.php?error=invalidemail");
            exit();

        }
        
        if (invalidPassRepeat($pass, $passRepeat) !== false) {

            header("location: ../index.php?error=passdontmatch");
            exit();

        }
        
        if (usernameExists($conn, $name) !== false) {

            header("location: ../index.php?error=usernametaken");
            exit();

        }

        createUser($conn, $name, $email, $pass, $role);

    } else {

        header("location: ../index.php");
    
    }