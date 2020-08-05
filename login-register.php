<?php
$error_msg = '';
?>

<!-- Begin Uren's Breadcrumb Area -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <h2>Other</h2>
            <ul>
                <li><a href="?page=main">Home</a></li>
                <li class="active">Login & Register</li>
            </ul>
        </div>
    </div>
</div>
<!-- Uren's Breadcrumb Area End Here -->

<!-- Begin Uren's Login Register Area -->
<div class="uren-login-register_area">
    <div class="container-fluid">
        <div class="row">
            <?php
            if ($error_msg != '') {
                echo "<div class=\"alert alert-danger\" role=\"alert\">
                                $error_msg
                               </div>";
            }
            ?>
            <div class="col-sm-12 col-md-12 col-xs-12 col-lg-6">
                <!-- Login Form s-->
                <form action="?page=login-register" method="post">
                    <div class="login-form">
                        <h4 class="login-title">Login</h4>
                        <div class="row">
                            <div class="col-md-12 col-12">
                                <label>Email Address*</label>
                                <input name="email" type="email" placeholder="Email Address">
                            </div>
                            <div class="col-12 mb--20">
                                <label>Password</label>
                                <input name="password" type="password" placeholder="Password">
                            </div>
                            <!--                            <div class="col-md-8">-->
                            <!--                                <div class="check-box">-->
                            <!--                                    <input type="checkbox" id="remember_me">-->
                            <!--                                    <label for="remember_me">Remember me</label>-->
                            <!--                                </div>-->
                        </div>
                        <div class="col-md-12">
                            <button class="uren-login_btn">Login</button>
                        </div>
                    </div>
            </div>
            <input type="hidden" name="login-register" value="login">
            </form>
            <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                <form action="?page=login-register" method="post">
                    <div class="login-form">
                        <h4 class="login-title">Register</h4>
                        <div class="row">
                            <div class="col-md-6 col-12 mb--20">
                                <label>Name</label>
                                <input name="name" type="text" placeholder="First Name">
                            </div>
                            <div class="col-md-6 col-12 mb--20">
                                <label>Surname</label>
                                <input name="surname" type="text" placeholder="Last Name">
                            </div>
                            <div class="col-md-12">
                                <label>Email Address*</label>
                                <input name="email" type="email" placeholder="Email Address">
                            </div>
                            <div class="col-md-6">
                                <label>Password</label>
                                <input name="password" type="password" placeholder="Password">
                            </div>
                            <div class="col-md-6">
                                <label>Confirm Password</label>
                                <input name="conf_password" type="password" placeholder="Confirm Password">
                            </div>
                            <div class="col-12">
                                <button class="uren-register_btn">Register</button>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="login-register" value="register">
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Uren's Login Register Area  End Here -->