<?php

    if (isset($_GET["error"])) {
        
        $err = $_GET["error"];

    } else {

        $err = '';

    }

    switch ($err) {

        // global error messages
        case "emptyinpunt":

            echo "<div class='alert alert-danger' role='alert'><p class='mb-0'>Fill in all fields!</p></div>";
            break;

        case "stmtfailed":

            echo "<p class='mb-0'>Something went wrong, try again!</p>";
            break;

        case "none":

            echo "<p class='mb-0'>Action successfully done!</p>";
            break;
    
        // login error messages
        case "nouser":

            echo "<p class='mb-0'>Couldn't find user!</p>";
            break;

        case "wrongpass":

            echo "<p class='mb-0'>Wrong password!</p>";
            break;

        // register error messages
        case "invalidusername":

            echo "<p class='mb-0'>This username is nog allowed!</p>";
            break;

        case "invalidemail":

            echo "<p class='mb-0'>Email is incorrect!</p>";
            break;

        case "passdontmatch":

            echo "<p class='mb-0'>Passwords don't match!</p>";
            break;

        case "usernametaken":
            
            echo "<p class='mb-0'>Username is taken!</p>";
            break;

    }

?>