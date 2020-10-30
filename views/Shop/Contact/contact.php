<?php
require_once 'views/Shop/header.php';
?>
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="<?=\webLazy\Core\URL::uri('home')?>">Home</a></li>
                <li class="active">Contact</li>
            </ul>
        </div>
    </div>
</div>
<!-- Li's Breadcrumb Area End Here -->
<!-- Begin Contact Main Page Area -->
<div class="contact-main-page mt-60 mb-40 mb-md-40 mb-sm-40 mb-xs-40">
    <div class="container mb-60">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.3149951871624!2d105.79349141442565!3d20.980006794817868!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135acc51191abcb%3A0x47247696a51de226!2zMTQxIENoaeG6v24gVGjhuq9uZywgVMOibiBUcmnhu4F1LCBIw6AgxJDDtG5nLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1601534778585!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-5 offset-lg-1 col-md-12 order-1 order-lg-2">
                <div class="contact-page-side-content">
                    <h3 class="contact-page-title">Contact Us</h3>
                    <p class="contact-page-message mb-25">
                        Hệ Thống Bán Hàng Điện Tử Shop Money Uy Tín Số Một Việt Nam
                    </p>
                    <div class="single-contact-block">
                        <h4><i class="fa fa-fax"></i> Address</h4>
                        <p>141 Chiến Thắng-Văn Quán-Hà Đông-Hà Nội</p>
                    </div>
                    <div class="single-contact-block">
                        <h4><i class="fa fa-phone"></i> Phone</h4>
                        <p>Mobile: (+84) 88 888 888</p>
                        <p>Hotline: 1800 666 888</p>
                    </div>
                    <div class="single-contact-block last-child">
                        <h4><i class="fa fa-envelope-o"></i> Email</h4>
                        <p>Vuonga7k8kma@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 order-2 order-lg-1">
                <div class="contact-form-content pt-sm-55 pt-xs-55">
                    <h3 class="contact-page-title">Tell Us Your Message</h3>
                    <div class="error">
                        <?php if (isset($_SESSION['error_captcha'])){echo $_SESSION['error_captcha'];}?>
                    </div>
                    <div class="contact-form">
                        <form action="<?=\webLazy\Core\URL::uri('contact')?>" method="post">
                            <div class="form-group">
                                <label>Your Name <span class="required">*</span></label>
                                <input type="text" name="Name" id="customername" required>
                            </div>
                            <div class="form-group">
                                <label>Your Email <span class="required">*</span></label>
                                <input type="email" name="Email" id="customerEmail" required>
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" name="DiaChi" id="contactSubject">
                            </div>
                            <div class="form-group mb-30">
                                <label>Your Message</label>
                                <textarea name="comment" id="contactMessage" ></textarea>
                            </div>
                            <div class="form-group">
                                <label for="captcha" style="color: red">Phiền bạn điền vào giá trị số cho câu hỏi sau: <?php echo captcha(); ?><span
                                        class="required">*</span></label>
                                <input type="text" required  id="captcha" value="" size="20" maxlength="5" tabindex="4"/>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="li-btn-3" >send</button>
                            </div>
                        </form>
                    </div>
<!--                    <p class="form-messege"></p>-->
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require_once 'views/Shop/footer.php';
