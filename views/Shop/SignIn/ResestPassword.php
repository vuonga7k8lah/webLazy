<?php require_once 'views/Shop/header.php'?>
<?php //checkCookie(); ?>
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li class="active">New Password</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Li's Breadcrumb Area End Here -->
    <!-- Begin Login Content Area -->
    <div class="page-section mb-60">
        <div class="container">
            <div class="row">
                <!-- Login Form s-->
                <form action="<?=\webLazy\Core\URL::uri('repass')?>" method="post">
                    <div class="error" style="color: red">
                        <?php if (isset($_SESSION['errors_password'])){echo$_SESSION['errors_password'];}?>
                    </div>
                    <div class="login-form">
                        <h4 class="login-title">New PassWord</h4>
                        <div class="row">
                            <input type="hidden" name="MaKH" value="<?=$_SESSION['forgot_id']?>">
                            <div class="error" style="color:red;">
                                <?php if (isset($_SESSION['error_login'])){echo $_SESSION['error_login'];}?>
                            </div>
                            <div class="col-md-12 mb-20">
                                <label>Password</label>
                                <input class="mb-0" id="Password" type="password"name="Password" required placeholder="Password">
                            </div>
                            <div class="col-md-12 mb-20">
                                <label>Confirm Password</label><div class="pass"></div>
                                <input class="mb-0" id="cPassword" type="password" name="cPassword" required placeholder="Confirm Password">
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
<?php require_once 'views/Shop/footer.php'?>