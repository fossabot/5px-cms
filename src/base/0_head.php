<?php
    session_start();

    // returns the directory name 
    function getCurrentPluginFolder() {
        $currentDir = array_reverse(explode('\\', getcwd()));
        return $currentDir[1];
    }

    // assigns bool, true when client is logged in
    $id = isset($_SESSION['id']);
    $loggedIn = true;
    $loggedOut = false;

    // assigns bool, true when client role is higher then 0
    $role = isset($_SESSION['uRole']);
    $isUser = false;

    $currentPluginDir = getCurrentPluginFolder();
    $cmsPlugins = 'cms';
    
    switch ($id) {
        case $loggedIn:
            if ($role == $isUser) {
                if ($currentPluginDir == $cmsPlugins) header('location: ../../site/home/index.php');
            }
        break;
        case $loggedOut:
            if ($currentPluginDir == $cmsPlugins) header('location: ../../site/login/index.php');
        break;
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- BS v5 beta 3 -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css"/>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <!-- FontAwesome -->
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

        <!-- General Styling -->
        <link rel="stylesheet" href="../../../assets/style.css">