<?php

    // this file contains als the cdn's used for the cms
    include_once '../../../base/0_head.php';
    
?>
    <!-- optional custom js file -->
    <script src="./js/app.js"></script>

    <!-- optional custom css file -->
    <link rel="stylesheet" href="./css/style.css">

    <title>5 Pixel CMS</title>

    </head>
    <body class="container-fluid bg-secondary">

        <div class="row bg-dark text-white">

            <div class="col-12 p-2" id="header">

                <h1>5 Pixel CMS - Plugin Name</h1>

            </div>
        
        </div>
        <div class="row">

            <?php
                include_once '../../../base/1_menu.php';
            ?>
            <div class="col-10">

                <!-- contents of plugin -->

            </div>
        
        </div>

    </body>

</html>