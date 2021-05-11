<?php include_once '../../../base/0_head.php'; ?>

        <title>5 Pixel CMS</title>

    </head>
    <body class="bg-secondary">
        <div class="row bg-dark text-white me-0">
            <div class="col-12 py-2 ps-4" id="header">
                <h1>5 Pixel CMS - Register Page</h1>
            </div>
            <div class="col-12">
                <?php include_once '../../../inc/err.msg.php'; ?>
            </div>
        </div>
        <section class="row justify-content-around bg-warning me-0">

            <div class="col-12 py-5 text-center">

                <h2>Register</h2>

            </div>
            <div class="col-3 pb-5">

                <form class="row" action="./php/register.php" method="post">

                    <input class="form-control mb-4" type="text" name="name" placeholder="Username...">
                    <input class="form-control mb-4" type="text" name="email" placeholder="Email...">
                    <input class="form-control mb-4" type="password" name="pwd" placeholder="Password...">
                    <input class="form-control mb-4" type="password" name="pwdrepeat" placeholder="Repeat Password...">

                    <div class="col-12 mb-4">

                        <div class="row justify-content-around">

                            <button class="col-3 btn btn-outline-dark" type="submit" name="submit">Register</button>
                            <a href="../1_login/index.php" class="col-3 btn btn-outline-dark">Login</a>
                            <a href="../0_home/index.php" class="col-3 btn btn-outline-dark">Home</a>

                        </div>
                        
                    </div>

                </form>

            </div>

        </section>
    </body>
</html>