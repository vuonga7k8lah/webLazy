<?php use webLazy\Core\Session;

require_once 'views/Shop/header.php'?>
<?php //checkCookie(); ?>
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Forgot Password</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Li's Breadcrumb Area End Here -->
    <!-- Begin Login Content Area -->
    <div class="page-section mb-60">
        <div class="container">
            <div class="row">
                <div class="col-6" style="display: block;margin: 0 auto">
                    <!-- Login Form s-->
                    <form action="<?=\webLazy\Core\URL::uri('forgot')?>" method="post">
                        <div class="error" style="color: red">
                            <?php if (isset($_SESSION['errors'])){echo$_SESSION['errors'];}?>
                        </div>
                        <div class="login-form">
                            <h4 class="login-title">Forgot Password</h4>
                            <div class="row">
                                <div class="error" style="color:red;">
                                    <?php if (isset($_SESSION['error_login'])){echo $_SESSION['error_login'];}?>
                                </div>
                                <div class="col-md-12 col-12 mb-20">
                                    <label>Email Address*</label>
                                    <input class="mb-0" type="email" name="Email" placeholder="Email Address" required>
                                </div>
                                <div class="col-md-12">
                                    <button class="register-button mt-0">Submit</button>
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
    'error_login',
    'errors'
]);

require_once 'views/Shop/footer.php'?>
