$(document).ready(function () {
  if (localStorage.getItem('login-token')) {
      window.location.href = 'http://' + window.location.hostname;
  }
  $('#test-sm').submit(function(event) {
    event.preventDefault();
      $.ajax({
          url: "/api/register",
          type: "post",
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
            console.log(response.result.token);
          },
      });
     
  });

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
