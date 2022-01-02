<?php

use webLazy\Core\Redirect;
use webLazy\Core\Session;
use webLazy\Core\URL;

require_once 'views/Admin/header.php';
if (isset($_SESSION['countLoginError']) && $_SESSION['countLoginError'] == 3) {
    Redirect::to('unlock-Login');
}
?>
    <div class="container">
        <div class="row ">
            <div class="col-md-4 col-md-offset-4 ">
                <div class="login-panel panel panel-default ">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <div class="error" style="color: red">
                            <?php if (isset($_SESSION['error_adminLogin'])) {
                                echo $_SESSION['error_adminLogin'];
                            } ?>
                        </div>
                        <form role="form" action="<?= URL::uri('login') ?>" method="POST">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="Email" type="email"
                                           autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="Password" type="password">
                                </div>
                                <button type="submit" class="btn btn-lg btn-success btn-block">Login</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
Session::checkReloadPage(['error_adminLogin']);
require_once 'views/Admin/footer.php';
