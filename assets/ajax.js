$(document).ready(function () {

  // === JS1
  $('#captcha').change(function () {
    var captcha = $(this).val();
    $.ajax({
      type: "post",
      url: "http://0.0.0.0:9021/commentCaptcha",
      data: "captcha=" + captcha,
      success: function (response) {
        var oResponse = JSON.parse(response);
        var msgBackground = oResponse.isValid === 'yes' ? '#d1e7dd' : '#f8d7da';
        $('#available').html('<span style="background-color: ' + msgBackground + '">' + oResponse.msg + '</span>');
      }
    });

  });

  // === JS 2
  $('#email').change(function () {
    var email = $(this).val();
    $.ajax({
      type: "post",
      url: "http://0.0.0.0:9021/commentEmail",
      data: "email=" + email,
      success: function (response) {
        var oResponse = JSON.parse(response);
        var msgBackground = oResponse.isValid === 'yes' ? '#d1e7dd' : '#f8d7da';
        $('#availableEmail').html('<span style="background-color: ' + msgBackground + '">' + oResponse.msg + '</span>');
      }
    });
  });

  //
  edenTogleModal();
  feedBackSP();
});


//
function edenTogleModal() {
  const btnOpen = document.getElementById('edenOpenModal');
  const panel = document.getElementById('edenModal');
  const edenContent = document.getElementById('edenContent');
  const edenCloseModal = document.getElementById('edenCloseModal');

  if (!btnOpen || !panel) return;
  btnOpen.addEventListener('click', (event) => {
    event.preventDefault();
    panel.classList.toggle('show');
  });
  edenCloseModal.addEventListener('click', (event) => {
    event.preventDefault();
    panel.classList.remove('show');
  })


}

//


// === JS
function addToCard(id) {
  $.ajax({
    type: "post",
    url: "http://0.0.0.0:9021/AllToCart",
    data: "MaSP=" + id,
    success: function (response) {
      var oResponse = JSON.parse(response);
      alert(oResponse.msg);
      document.getElementById('cartProduct').innerHTML=oResponse.numberSP;
    }
  });
}

function addToWishList(id) {
  $.ajax({
    type: "post",
    url: "http://0.0.0.0:9021/addWishList",
    data: "MaSP=" + id,
    success: function (response) {
      var oResponse = JSON.parse(response);
      alert(oResponse.msg);
      document.getElementById('wishlishcount').innerHTML=oResponse.numberSP;

    }
  });
}

function viewProduct(id) {
  $.ajax({
    type: "post",
    url: "http://0.0.0.0:9021/viewProduct",
    data: "MaSP=" + id,
    success: function (response) {

    }
  });
}

function checkCaptcha() {
  let data = $('#available').val();
  let xdata = document.getElementsByClassName('available');
  console.log(xdata);
}

function feedBackSP() {
  $('#formSubmit').click(event => {
    event.preventDefault();
    let rating = $('select[name="rating"]').val();
    let email = $('input[name="email"]').val();
    let MaSP = $('input[name="MaSP"]').val();
    let name = $('input[name="name"]').val();
    let content = $('textarea[name="content"]').val();
    $.ajax({
      type: "post",
      url: "http://0.0.0.0:9021/feedback",
      data: {"rating": rating, "email": email, "name": name, "content": content, "MaSP": MaSP},
      success: function (response) {
        var oResponse = JSON.parse(response);
        window.location = "http://0.0.0.0:9021/ctsp/"+oResponse.MaSP;
        alert(oResponse.Status);
      }
    })
  })
}
