<?php

    $serverName = "127.0.0.1";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "5pixel_cms";

    $conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

    if ( !$conn ) {
        die( "Connection failed: " . mysqli_connect_error() );
    }