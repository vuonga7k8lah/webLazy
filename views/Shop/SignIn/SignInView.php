<?php use webLazy\Controllers\LoginFBController;
use webLazy\Core\Session;
use webLazy\Core\URL;

require_once 'views/Shop/header.php' ?>
<?php //checkCookie(); ?>
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li class="active">Login Register</li>
            </ul>
        </div>
    </div>
</div>
<!-- Li's Breadcrumb Area End Here -->
<!-- Begin Login Content Area -->
<div class="page-section mb-60">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-xs-12 col-lg-6 mb-30">
                <!-- Login Form s-->
                <form action="<?= URL::uri('signInLogin') ?>" method="post">
                    <div class="error" style="color:red;">
                        <?php if (isset($_SESSION['error_validateLogin'])) {
                                    echo $_SESSION['error_validateLogin'];
                                    echo "<br>";
                        } ?>
                    </div>
                    <div class="success" style="color: #4cae4c">
                        <?php if (isset($_SESSION['success_Register'])) {
                            echo $_SESSION['success_Register'];
                        } ?>
                    </div>
                    <div class="success" style="color: red">
                        <?php if (isset($_SESSION['isLoginCart'])) {
                            echo $_SESSION['isLoginCart'];
                        } ?>
                    </div>
                    <div class="success" style="color: #4cae4c">
                        <?php if (isset($_SESSION['success_updatePassword'])) {
                            echo $_SESSION['success_updatePassword'];
                        } ?>
                    </div>
                    <div class="login-form">
                        <h4 class="login-title">Login</h4>
                        <div class="row">
                            <div class="error" style="color:red;">
                                <?php if (isset($_SESSION['error_login'])) {
                                    echo $_SESSION['error_login'];
                                } ?>
                            </div>
                            <div class="col-md-12 col-12 mb-20">
                                <label>Email Address*</label>
                                <input class="mb-0" type="email" name="Email" placeholder="Email Address">
                            </div>
                            <div class="col-12 mb-20">
                                <label>Password</label>
                                <input class="mb-0" type="password" name="Password" placeholder="Password">
                            </div>
                            <div class="col-md-8">
                                <div class="check-box d-inline-block ml-0 ml-md-2 mt-10">
                                    <input type="checkbox" id="remember_me" name="remember_me">
                                    <label for="remember_me">Remember me</label>
                                </div>
                            </div>
                            <div class="col-md-4 mt-10 mb-20 text-left text-md-right">
                                <a href="<?= URL::uri('forgot') ?>"> Forgotten pasward?</a>
                            </div>
                            <div class="col-md-12">
                                <label>Đăng Nhập Bằng Tài Khoản Xã Hội:</label>
                                <div class="col-md-6">
                                    <a href="https://accounts.google.com/o/oauth2/auth?response_type=code&access_type=online&client_id=652963584525-0rufikmbipgvm40qu36pa60sptn18hin.apps.googleusercontent.com&redirect_uri=http%3A%2F%2F127.0.0.1%2FwebLazy%2FloginAPIGoogle&state&scope=email%20profile&approval_prompt=auto"><img
                                                src="./assets/images/google.png" alt='Google Login'
                                                title="Google Login"
                                                style="height:50px;width: 250px"/></a>
                                </div>
                                <div class="col-md-6">
                                    <a href="<?php echo LoginFBController::URL_FB(); ?>"><img
                                                src="./assets/images/facebook.png" alt='FaceBook Login'
                                                title="FaceBook Login"
                                                style="height:50px;width: 250px"/></a>
                                </div>
                            </div>
                            <div class="col-md-12" style="margin-top: 10px;">
                                <button class="register-button mt-0">Login</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                <form action="<?= URL::uri('signInRegister') ?>" method="post">
                    <div class="login-form">
                        <?php if (isset($_SESSION['error'])) {
                            foreach ($_SESSION['error'] as $key => $value) {
                                ?>
                                <div class="danger" style="color: red;">
                                    <?= $value ?>
                                </div>
                                <br>
                                <?php
                            }

                        } ?>
                        <div class="error" style="color:red;">
                            <?php if (isset($_SESSION['error_validateRegister'])) {
                                        echo $_SESSION['error_validateRegister'];
                            } ?>
                        </div>
                        <div class="error" style="color:red;">
                            <?php if (isset($_SESSION['error_SDT'])) {
                                echo $_SESSION['error_SDT'];
                            } ?>
                        </div>
                        <div class="error" style="color:red;">
                            <?php if (isset($_SESSION['cPassword'])) {
                                echo $_SESSION['cPassword'];
                            } ?>
                        </div>
                        <div class="error" style="color:red;">
                            <?php if (isset($_SESSION['errorEmail'])) {
                                echo $_SESSION['errorEmail'];
                            } ?>
                        </div>
                        <h4 class="login-title">Register</h4>
                        <div class="row">
                            <div class="col-md-12 mb-20">
                                <label>Full Name</label>
                                <input class="mba-0" type="text" name="TenKH" placeholder="Full Name">
                            </div>
                            <div class="col-md-12 mb-20">
                                <label>Address</label>
                                <input class="mb-0" type="text" name="DiaChi" placeholder="Address">
                            </div>
                            <div class="col-md-12 mb-20">
                                <label>Number Phone</label>
                                <input class="mb-0" type="text" name="SDT" placeholder="Number Phone">
                            </div>
                            <div class="col-md-12 mb-20">
                                <label>Email Address*</label>
                                <input class="mb-0" type="email" name="Email" placeholder="Email Address">
                            </div>
                            <div class="col-md-6 mb-20">
                                <label>Password</label>
                                <input class="mb-0" id="Password" type="password" name="Password"
                                       placeholder="Password">
                            </div>
                            <div class="col-md-6 mb-20">
                                <label>Confirm Password</label>
                                <div class="pass"></div>
                                <input class="mb-0" id="cPassword" type="password" name="cPassword"
                                       placeholder="Confirm Password">
                            </div>
                            <div class="col-12">
                                <button class="register-button mt-0">Register</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
Session::checkReloadPage([
    'success_Register',
    'error_validateLogin',
    'error_login',
    'cPassword',
    'errorEmail',
    'error_SDT',
    'error_validateRegister',
    'error_login',
    'success_updatePassword',
    'isLoginCart'
]);

require_once 'views/Shop/footer.php' ?>
