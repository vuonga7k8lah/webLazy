$(document).ready(function(){

        // === JS1
        $('#captcha').change(function () {
            var captcha = $(this).val();
            $.ajax({
                type: "post",
                url: "http://127.0.0.1/webLazy/commentCaptcha",
                data: "captcha=" + captcha,
                success: function (response) {
                    var oResponse = JSON.parse(response);
                    var msgClass = oResponse.isValid === 'yes' ? 'avai' : 'not-avai';
                    $('#available').html('<span class="' + msgClass + '">' + oResponse.msg + '</span>');
                }
            });

        });

        // === JS 2
        $('#email').change(function () {
            var email = $(this).val();
            $.ajax({
                type: "post",
                url: "http://127.0.0.1/webLazy/commentEmail",
                data: "email=" + email,
                success: function (response) {
                    var oResponse = JSON.parse(response);
                    var msgClass = oResponse.isValid === 'yes' ? 'avai' : 'not-avai';
                    $('#availableEmail').html('<span class="' + msgClass + '">' + oResponse.msg + '</span>');
                }
            });
        });
    }
);
addToWishList

// === JS Tuan
function addToCard(id) {
    $.ajax({
        type: "post",
        url: "http://127.0.0.1/webLazy/AllToCart",
        data: "MaSP=" + id,
        success: function (response) {
            var oResponse = JSON.parse(response);
            alert(oResponse.msg);
        }
    });
}

function addToWishList(id) {
    $.ajax({
        type: "post",
        url: "http://127.0.0.1/webLazy/addWishList",
        data: "MaSP=" + id,
        success: function (response) {
            var oResponse = JSON.parse(response);
            alert(oResponse.msg);
        }
    });
}

