<?php include_once '../../../base/0_head.php'; ?>

        <title>5 Pixel CMS</title>

    </head>
    <body class="bg-secondary">
        <div class="row bg-dark text-white me-0">
            <div class="col-6 py-2 ps-4" id="header">
                <h1>5 Pixel CMS - Login Page</h1>
            </div>
            <div class="col-6">
                <?php include_once '../../../inc/err.msg.php'; ?>  
            </div>
        </div>
        <section class="row justify-content-around bg-warning me-0">

            <div class="col-12 py-5 text-center">

                <h2>Login</h2>

            </div>
            <div class="col-3 pb-5">

                <form class="row mb-4" action="./php/login.php" method="post">
                    
                    <input class="form-control mb-4" type="text" name="username" placeholder="Username">
                    <input class="form-control mb-4" type="password" name="pwd" placeholder="Password...">

                    <div class="col-12 mb-4">

                        <div class="row justify-content-around">

                            <button class="col-3 btn btn-outline-dark" type="submit" name="submit">Login</button>
                            <a href="../register/index.php" class="col-3 btn btn-outline-dark">Register</a>
                            <a href="../home/index.php" class="col-3 btn btn-outline-dark">Home</a>

                        </div>
                        
                    </div>

                </form>

            </div>

        </section>
    </body>
</html>