$(document).ready(function () {
  if(localStorage.getItem('token-login')) {
    $.ajax({
      type: 'GET',
      url: '/api/checkLoginToken',
      headers: ({
        Accept: 'application/json',
        Authorization: 'Bearer ' + localStorage.getItem('token-login'),
      }),
      success: function(response) {
        if(response.code == 200) {
          $('#userLogin').hide();
          $('#userLogout').show();
          $('#userSignup').hide();
        }
      },
      error: function (response) {
        window.localStorage.removeItem('token-login');
        $('#userLogin').show();
        $('#userLogout').hide();
        $('#userSignup').show();
        $('#userName').hide();
        $('.user-name').hide();
      }
    });
  } else {
    $('#userLogin').show();
    $('#userLogout').hide();
    $('#userSignup').show();
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
