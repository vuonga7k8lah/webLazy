<?php

use webLazy\Core\URL;

require_once 'views/Admin/header.php';
?>
    <body id="id" style=" margin: 0;
        padding: 0;">
<div class="QR" style=" width: 300px;
        height: 500px;
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);">
    <div class="card" style="width: 28rem;text-align: center;display: inline-block;">
        <img src="<?= $url ?>" class="card-img-top" alt="..."
             style="text-align: center;<?= $enable ? 'display:none;' : '' ?>">
        <div class="card-body" style="text-align: center;">
            <h5 class="card-title">Quét Mã Để Xác Thực</h5>
            <form class="row g-3" style="text-align: center;display: block" action="<?= URL::uri('qrcode')
            ?>" method="post" autocomplete="off">
                <div class="col-auto">
                    <label for="inputPassword2" class="visually-hidden" style="text-align: center;">Nhập
                        OTP:</label>
                    <input type="text" class="form-control" id="inputPassword2" placeholder="Hãy Nhập Mã OTP"
                           name="otp">
                    <input type="hidden" name="secret" value="<?= $qrcode ?>">
                    <input type="hidden" name="action" value="<?= $data['action'] ?>">
                    <input type="hidden" name="id" value="<?= $data['id'] ?>">
                    <input type="hidden" name="data" value='<?php echo $data['data'] ?>'>
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-3" style="margin-top: 5px; ">Gửi</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
require_once 'views/Admin/footer.php';
