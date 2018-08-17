$(document).ready(function () {
  if (localStorage.getItem('token-login')) {
    $('#userLogin').hide();
    $('#userLogout').show();
    $('#userSignin').hide();
  } else {
    $('#userLogin').show();
    $('#userLogout').hide();
    $('#userSignin').show();
    $('#userName').hide();
    $('.user-mame').hide();
  }
  $(document).on('click', '#loginBtn', function (event) {
    event.preventDefault();
    $.ajax({
      url: "/api/login",
      type: "post",
      headers: {
        'Accept': 'application/json',
      },
      data: {
        username: $('.login-form input[name="username"]').val(),
        password: $('.login-form input[type="password"]').val()
      },
      success: function (response) {
        if((response.code == 200)) {
          $('.login-form').html('You have login successfully!')
          $('.login-form').css('color', 'green');
          $('.login-form').show();
          $('.modal').fadeOut(10000,function() { 
            $(this).remove();
            $("body").removeClass("modal-open");
          });
          localStorage.setItem('token-login', response.result.token);
          localStorage.setItem('username', response.result.user.username)
          $('#userName').html(response.result.user.username);
          window.location.href = 'http://' + window.location.hostname;
        }
      },
      statusCode: {
        401: function (response) {
          errors = Object.keys(response.responseJSON.error);
          errors.forEach(error => {
            $('#valmsg-' + error).html(response.responseJSON.errors[error]);
            $('#valmsg-' + error).css('color', 'red');
            $('#valmsg-' + error).show();
          });
          $('.login-form input[type="password"]').val('');
        }
      }
      });
  })
  name = localStorage.getItem("username");
  $('#userName').html(name);
})
