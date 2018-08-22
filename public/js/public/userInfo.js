function showUserProfile(response) {
  let user = response.result;
  console.log(user);
  if (user.gender == 0) {
    // gender = Lang.get('user.index.male');
    $('#gender option[value=0]').attr('selected','selected');
  } else {
    // gender = Lang.get('user.index.female');
    $('#gender option[value=1]').attr('selected','selected');
  }

  $('#userNameInfo').val(user.username);
  $('#fullName').val(user.full_name);
  $('#gender').val(user.gender);
  $('#phoneNumber').val(user.phone);
  $('#email').val(user.email);
}

// function editProfile() {
//   formData = new FormData($('#profileForm'));
//   formData.append('_method', 'put');

//   $.ajax({
//     url: "/api/users/profile",
//     type: "post",
//     contentType: false,
//     processData: false,
//     headers: {
//         'Accept': 'application/json',
//         'Authorization': 'Bearer ' + accessToken
//     },
//     data: formData,
//     success: function(response) {
//       showUserProfile(response);
//     //   $("#edit_profile").modal('hide');
//     },
//     error: function (response) {
//       alert(response.responseJSON.message);
//       if (response.responseJSON.errors) {
//         errors = Object.keys(response.responseJSON.errors);
//         errors.forEach(error => {
//             $('#edit_profile .modal-body .form-group #' + error + '_error').html(response.responseJSON.errors[error]);
//             $('#edit_profile .modal-body .form-group #' + error + '_error').show();
//         });
//       }
//     }
//   });
// }

$(document).ready(function () {
  accessToken = localStorage.getItem('token-login');
  $.ajax({
    url: "/api/users/info",
    type: "get",
    headers: {
        'Accept': 'application/json',
        'Authorization': 'Bearer ' + accessToken
    },
    success: function(response) {
      showUserProfile(response);
      
    }
  });

  // $(document).on('click', '#test', function(event) {
    // event.preventDefault();
    // // editProfile();
    // $.ajax({
    //     url: "/api/users/info",
    //     type: "get",
    //     headers: {
    //         'Accept': 'application/json',
    //         'Authorization': 'Bearer ' + accessToken
    //     },
    //     success: function(response) {
    //       showUserProfile(response);
    //     }
    //   });
  // });
});
