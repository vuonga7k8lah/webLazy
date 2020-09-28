<?php require_once 'views/Shop/header.php'?>
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
                    <form action="<?=\webLazy\Core\URL::uri('signInLogin')?>" method="post">
                        <div class="success" style="color: #4cae4c">
                            <?php if (isset($_SESSION['success_Register'])){echo $_SESSION['success_Register'];}?>
                        </div>
                        <div class="login-form">
                            <h4 class="login-title">Login</h4>
                            <div class="row">
                                <div class="error" style="color:red;">
                                    <?php if (isset($_SESSION['error_login'])){echo $_SESSION['error_login'];}?>
                                </div>
                                <div class="col-md-12 col-12 mb-20">
                                    <label>Email Address*</label>
                                    <input class="mb-0" type="email" name="Email" placeholder="Email Address" required>
                                </div>
                                <div class="col-12 mb-20">
                                    <label>Password</label>
                                    <input class="mb-0" type="password" name="Password" placeholder="Password" required>
                                </div>
                                <div class="col-md-8">
                                    <div class="check-box d-inline-block ml-0 ml-md-2 mt-10">
                                        <input type="checkbox" id="remember_me" name="remember_me">
                                        <label for="remember_me">Remember me</label>
                                    </div>
                                </div>
                                <div class="col-md-4 mt-10 mb-20 text-left text-md-right">
                                    <a href="<?=\webLazy\Core\URL::uri('forgot')?>"> Forgotten pasward?</a>
                                </div>
                                <div class="col-md-12">
                                    <button class="register-button mt-0">Login</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                    <form action="<?=\webLazy\Core\URL::uri('signInRegister')?>" method="post">
                        <div class="login-form">
                            <?php if (isset($_SESSION['error'])){
                                foreach ($_SESSION['error'] as $key=>$value){?>
                                    <div class="danger" style="color: red;">
                                        <?=$value?>
                                    </div>
                                    <br>
                                    <?php
                                }

                            } ?>
                            <div class="error" style="color:red;">
                            <?php if (isset($_SESSION['cPassword'])){echo $_SESSION['cPassword'];}?>
                            </div>
                            <div class="error" style="color:red;">
                                <?php if (isset($_SESSION['errorEmail'])){echo $_SESSION['errorEmail'];}?>
                            </div>
                            <h4 class="login-title">Register</h4>
                            <div class="row">
                                <div class="col-md-12 mb-20">
                                    <label>Full Name</label>
                                    <input class="mba-0" type="text" name="TenKH" required placeholder="Full Name">
                                </div>
                                <div class="col-md-12 mb-20">
                                    <label>Address</label>
                                    <input class="mb-0" type="text" name="DiaChi" required placeholder="Address">
                                </div>
                                <div class="col-md-12 mb-20">
                                    <label>Number Phone</label>
                                    <input class="mb-0" type="text" name="SDT" required placeholder="Number Phone">
                                </div>
                                <div class="col-md-12 mb-20">
                                    <label>Email Address*</label>
                                    <input class="mb-0" type="email" name="Email" required placeholder="Email Address">
                                </div>
                                <div class="col-md-6 mb-20">
                                    <label>Password</label>
                                    <input class="mb-0" id="Password" type="password"name="Password" required placeholder="Password">
                                </div>
                                <div class="col-md-6 mb-20">
                                    <label>Confirm Password</label><div class="pass"></div>
                                    <input class="mb-0" id="cPassword" type="password" name="cPassword" required placeholder="Confirm Password">
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
<?php require_once 'views/Shop/footer.php'?>