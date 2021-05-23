<?php include_once '../../../base/0_head.php'; ?>

<h1>Login</h1>

<?php include_once '../../../base/1_menu.php'; ?>

    <div class="container position-absolute top-50 start-50 translate-middle">

        <form id="form" action="./php/login.php" method="post">
            
            <div class="row">

                <div class="col-12 mb-3">
                    
                    <?php

                        require_once '../../../inc/msg.php';

                    ?>

                </div>
                <div class="col-12 col-lg-6 my-3">
                
                    <div class="form-floating rounded border border-primary">

                        <input class="form-control" id="username" type="text" name="username" placeholder require>
                        <label for="username">Username</label>

                    </div>

                </div>
                <div class="col-12 col-lg-6 mb-3 mt-lg-3">
                
                    <div class="form-floating rounded border border-primary">

                        <input class="form-control" id="pass" type="password" name="pwd" placeholder require>
                        <label for="pass">Password...</label>

                    </div>

                </div>
                <div class="col-6">
                
                    <div class="btn-group">
                    
                        <button class="btn btn-outline-primary text-dark" type="submit" name="submit">Login</button>
                        <div class="btn btn-primary"></div>

                    </div>

                </div>
                <div class="col-6 text-end">
                
                    <div class="btn-group">
                    
                        <div class="btn btn-primary"></div>
                        <a class="btn btn-outline-primary text-dark" href="../9998_register/index.php" >Register</a>

                    </div>

                </div>

            </div>

        </form>

    </div>

<?php include_once '../../../base/2_footer.php'; ?>
