<?php

    /**
     * Within this script all the globally used functions are placed
     */

    function emptyInput($posted) {
        $empty = false;
        foreach ($posted as $key => $value) {
            if ($key == 'submit') continue;
            if ($value !== '') {
                continue;
            } else {
                $empty = true;
                return $empty;
            }
        }
        return $empty;
    }
    
    function validateInput($inputValue) {
        $inputValue = htmlspecialchars($inputValue);
        $inputValue = stripslashes($inputValue);
        return $inputValue;
    }

    function invalidUsername($name) {
        if (!preg_match("/^[a-zA-Z0-9]*$/", $name)) {
            $result = true;
            return $result;
        } else {
            $result = false;
            return $result;
        }
    }

    function invalidEmail($email) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $result = true;
            return $result;
        } else {
            $result = false;
            return $result;
        }
    }

    function invalidPhoneNumber($phoneNumber) {
        $length = strlen($phoneNumber);
        if ($length !== 10) return true;
    
        $validCharacterArray = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
        $phoneNumberArray = str_split($phoneNumber);
    
        foreach ($phoneNumberArray as $key => $value) {
            if (!in_array($value, $validCharacterArray)) return true; 
        }

        return false;
    }

    function invalidPassRepeat($pass, $passRepeat) {
        if ($pass !== $passRepeat) {
            $result = true;
            return $result;
        } else {
            $result = false;
            return $result;
        }
    }

    function usernameExists($conn, $name) {

        $sql = "SELECT * FROM users WHERE uId = ?;";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        mysqli_stmt_bind_param($stmt, "s", $name);
        mysqli_stmt_execute($stmt);

        $resultData = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_assoc($resultData)) {
            return $row;
        } else {
            $result = false;
            return $result; 
        }

        mysqli_stmt_close($stmt);
    }

    function userExists($conn, $rowId) {

        $sql = "SELECT * FROM `users` WHERE `id` = ?;";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        mysqli_stmt_bind_param($stmt, "s", $rowId);
        mysqli_stmt_execute($stmt);

        $resultData = mysqli_stmt_get_result($stmt);

        if (mysqli_fetch_assoc($resultData)) {
            return true;
        } else {
            return false;
        }

        mysqli_stmt_close($stmt);
    }