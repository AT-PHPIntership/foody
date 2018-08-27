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
    $('.user-name').hide();
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
        $('.login-form').html(Lang.get('user/login.login_success'));
        $('.login-form').css('color', 'green');
        localStorage.setItem('token-login', response.result.token);
        localStorage.setItem('username', response.result.user.username);
        $('#userName').html(response.result.user.username);
        window.location.href = 'http://' + window.location.hostname;
      },
      error: function (response) {
        alert(response.responseJSON.error);
        $('.login-form input[type="password"]').val('');
      }
    });
  })
  name = localStorage.getItem("username");
  $('#userName').html(name);
})
