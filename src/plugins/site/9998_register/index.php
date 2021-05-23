<?php include_once '../../../base/0_head.php'; ?>

    <h1>Register</h1>

<?php include_once '../../../base/1_menu.php'; ?>

    <div class="container position-absolute top-50 start-50 translate-middle">
        <!-- Content here -->
        <form id="form" action="./php/register.php" method="post">

            <div class="row my-auto">

                <div class="col-12 mb-3">
                    
                    <?php

                        require_once '../../../inc/msg.php';

                    ?>

                </div>
                <div class="col-12 col-lg-6 mb-3">

                    <div class="form-floating rounded border border-primary">

                        <input class="form-control" id="name" type="text" name="name" placeholder require>
                        <label for="name">Name...</label>

                    </div>

                </div>
                <div class="col-12 col-lg-6 mb-3">

                    <div class="form-floating rounded border border-primary">

                        <input class="form-control" id="email" type="text" name="email" placeholder require>
                        <label for="email">Email...</label>

                    </div>

                </div>
                <div class="col-12 col-lg-6 mb-3">

                    <div class="form-floating rounded border border-primary">

                        <input class="form-control" id="pass" type="password" name="pwd" placeholder require>
                        <label for="pass">Password...</label>

                    </div>

                </div>
                <div class="col-12 col-lg-6 mb-3">
                
                    <div class="form-floating rounded border border-primary">

                        <input class="form-control" id="pwdrepeat" type="password" name="pwdrepeat" placeholder require>
                        <label for="pwdrepeat">Repeat Password...</label>

                    </div>

                </div>
                <div class="col-6">

                    <div class="btn-group">
                    
                        <button class="btn btn-outline-primary text-dark" type="submit" name="submit">Register</button>
                        <div class="btn btn-primary"></div>

                    </div>

                </div>
                <div class="col-6 text-end">

                    <div class="btn-group">
                    
                        <div class="btn btn-primary"></div>
                        <a class="btn btn-outline-primary text-dark" href="../9997_login/index.php">Login</a>

                    </div>

                </div>

            </div>

        </form>
        <form action="./php/login.php" method="post">
            
            <div class="row">


            </div>

        </form>

    </div>

<?php include_once '../../../base/2_footer.php'; ?>

