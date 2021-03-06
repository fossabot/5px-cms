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

    $pluginFolderContent = scandir(getcwd());

    if (in_array('scripts', $pluginFolderContent)) {

        $scriptsArray = scandir(getcwd().'/scripts/');

    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- BS v5 beta 3 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>


        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <!-- FontAwesome -->
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

        <!-- General Styling -->
        <link rel="stylesheet" href="../../../assets/style.css">

        <script src="../../../assets/remove-form.js"></script>

        <!-- automatically adds css link tags, js script tags & includes php files once -->
        <?php 
            
            if (isset($scriptsArray)) {
                foreach ($scriptsArray as $key => $value) {
                
                    $extension = explode('.', $value);
    
                    switch ($extension[1]) {
                        case 'css':
                            echo '<link rel="stylesheet" href="./scripts/'.$value.'">';
                        break;
                        case 'js':
                            echo '<script src="./scripts/'.$value.'"></script>';
                        break;
                        case 'php':
                            include_once './scripts/'.$value;
                        break;
                    }
    
                }
            }

        ?>

        <title>5 Pixel CMS</title>

    </head>
    <body class="container-fluid p-0 bg-secondary">
    
        <nav class="navbar navbar-expand-xl navbar-primary bg-dark ps-3 text-light">