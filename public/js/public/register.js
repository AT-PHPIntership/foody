$(document).ready(function () {
  if (localStorage.getItem('login-token')) {
      window.location.href = 'http://' + window.location.hostname;
  }
  $('#test-sm').submit(function(event) {
    event.preventDefault();
      $.ajax({
          url: "/api/register",
          type: "POST",
          headers: {
            'Accept': 'application/json',
          },
          data: {
            full_name: $('.register-form input[name="full_name"]').val(),
            username: $('.register-form input[name="username"]').val(),
            gender: $('.register-form #gender').val(),
            phone: $('.register-form input[name="phone"]').val(),
            email: $('.register-form input[name="email"]').val(),
            password: $('.register-form input[name="password"]').val(),
            birthday: '1980-07-07',
            role_id: 3,
          },
          success: function (response) {
            // $('.register-form').html('Registration is successful, please login');
            // $('.register-form').css('color', 'green');
            // $('.register-form').show();
            // $('.modal').fadeOut(3000,function() { 
            //   $(this).remove();
            //   $("body").removeClass("modal-open");
            // });
            console.log(response);
          },
          error: function (response) {
            errors = Object.keys(response.responseJSON.error);
            //code = Object.keys(response.responseJSON.code);
            //console.log(code);
            console.log(response);
            errors.forEach(error => {
                // $('#valmsg-' + error).html(response.responseJSON.errors[error]);
                // $('#valmsg-' + error).css('color', 'red');
                // $('#valmsg-' + error).show();
                //console.log(response.responseJSON.code);
            });
        }
      });
     
  });
  // $('#singinForm').submit(function(event) {

  //     });

  // $('#singinForm').submit(function(event) {
  //   event.preventDefault();
  //   //console.log(1);
  //   // $.ajaxSetup({
  //   //   headers: {
  //   //     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  //   //   }
  //   // });
  //     // event.preventDefault();
  //     $.ajax({
  //         url: "/api/register",
  //         type: "post",
  //         headers: {
  //           'Accept': 'application/json',
  //           // 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  //           // $token = $('meta[name="csrf-token"]').attr('content'),

  //           // if (token) {
  //           //       return xhr.setRequestHeader('X-CSRF-TOKEN', token);
  //           // }
  //         },
  //         data: {
  //             full_name: $('.register-form input[name="full_name"]').val(),
  //             username: $('.register-form input[name="username"]').val(),
  //             gender: $('.register-form #gender').val(),
  //             phone: $('.register-form input[name="phone"]').val(),
  //             email: $('.register-form input[name="email"]').val(),
  //             password: $('.register-form input[name="password"]').val(),
  //             // full_name: 1,
  //             // username: 2,
  //             // gender: 3,
  //             // phone: 4,
  //             // email: 5,
  //             // password: 6,
  //         },
  //         success: function (response) {
  //           console.log(response.result.token);
  //             //localStorage.setItem('login-token', response.result.token);
  //            // window.location.href = 'http://' + window.location.hostname;
  //         },
  //       //   error: function (response) {
  //       //       errors = Object.keys(response.responseJSON.errors);
  //       //       errors.forEach(error => {
  //       //           $('.register-form #' + error + '_error').html(response.responseJSON.errors[error]);
  //       //           $('.register-form #' + error + '_error').show();
  //       //       });
  //       //   }
  //     });
     
  // });
  
})
