<?php

    session_start();
    session_unset();
    session_destroy();

    header("location: ../0_home/index.php");
    exit();