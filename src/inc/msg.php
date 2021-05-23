<?php

    if (isset($_GET["msg"])) {
        
        $err = $_GET["msg"];

    } else {

        $err = '';

    }

    switch ($err) {

        // global error messages
        case "nope":
            echo "<div class='alert alert-danger' role='alert'><p class='mb-0'>Nice try MF!!!</p></div>";
        break;
        case "emptyinput":
            echo "<div class='alert alert-danger' role='alert'><p class='mb-0'>Fill in all fields!</p></div>";
        break;
        case "stmtfailed":
            echo "<div class='alert alert-danger' role='alert'><p class='mb-0'>Something went wrong, try again!</p></div>";
        break;
        case "none":
            echo "<div class='alert alert-danger' role='alert'><p class='mb-0'>Action successfully done!</p></div>";
        break;
        case "invalidemail":
            echo "<div class='alert alert-danger' role='alert'><p class='mb-0'>Email is incorrect!</p></div>";
        break;

        // contact error messages
        case "invalidphonenumber":
            echo "<div class='alert alert-danger' role='alert'><p class='mb-0'>This phone number is not allowed!</p></div>";
        break;
        case "messagesend":
            echo "<div class='alert alert-success' role='alert'><p class='mb-0'>Your message has been send. we will respond asap!</p></div>";
        break;
        // login error messages
        case "nouser":
            echo "<div class='alert alert-danger' role='alert'><p class='mb-0'>Couldn't find user!</p></div>";
        break;
        case "wrongpass":
            echo "<div class='alert alert-danger' role='alert'><p class='mb-0'>Wrong password!</p></div>";
        break;

        // register error messages
        case "invalidusername":
            echo "<div class='alert alert-danger' role='alert'><p class='mb-0'>This username is nog allowed!</p></div>";
        break;
        case "passdontmatch":
            echo "<div class='alert alert-danger' role='alert'><p class='mb-0'>Passwords don't match!</p></div>";
        break;
        case "usernametaken":
            echo "<div class='alert alert-danger' role='alert'><p class='mb-0'>Username is taken!</p></div>";
        break;
        
    }