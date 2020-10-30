$(document).ready(function(){
    $('#captcha').change(function() {
        var captcha = $(this).val();
            $.ajax({
                type: "post",
                url: "http://127.0.0.1/webLazy/commentCaptcha",
                data: "captcha="+ captcha,
                success: function(response) {
                    var oResponse = JSON.parse(response);
                    var msgClass = oResponse.isValid === 'yes' ? 'avai' : 'not-avai';
                    $('#available').html('<span class="'+msgClass+'">'+oResponse.msg+'</span>');
                }
            });

    });
});
$(document).ready(function(){
    $('#email').change(function() {
        var email = $(this).val();
        $.ajax({
            type: "post",
            url: "http://127.0.0.1/webLazy/commentEmail",
            data: "email="+ email,
            success: function(response) {
                var oResponse = JSON.parse(response);
                var msgClass = oResponse.isValid === 'yes' ? 'avai' : 'not-avai';
                $('#availableEmail').html('<span class="'+msgClass+'">'+oResponse.msg+'</span>');
            }
        });

    });
});

