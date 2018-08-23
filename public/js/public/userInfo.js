function showUserInfo(response) {
  let user = response.result;
  token = localStorage.getItem('token-login');
  if(token) {
    if (user.gender == 0) {
      $('#genderInfo option[value=0]').attr('selected','selected');
    } else {
      $('#genderInfo option[value=1]').attr('selected','selected');
    }
    $('.text-center').text('Please fill in all information');
    $('#userNameInfo').val(user.username);
    $('#fullNameInfo').val(user.full_name);
    $('#genderInfo').attr(user.gender);
    $('#phoneNumberInfo').val(user.phone);
    $('#emailInfo').val(user.email);
  }

}

function editUserInfo() {
  formData = new FormData();
  formData.append('form',$('#profileForm'));
  formData.append('_method', 'put');
    $.ajax({
      url: "/api/users/profile",
      type: "post",
      contentType: false,
      processData: false,
      headers: {
          'Accept': 'application/json',
          'Authorization': 'Bearer ' + token
      },
      data: formData,
      success: function(response) {
        showUserInfo(response);
      },
      error: function (response) {
        alert(response.responseJSON.message);
      }
    });
  }

$(document).ready(function () {
  token = localStorage.getItem('token-login');
  if(token) {
    $.ajax({
      url: "/api/users/info",
      type: "get",
      headers: {
          'Accept': 'application/json',
          'Authorization': 'Bearer ' + token
      },
      success: function(response) {
        showUserInfo(response);
      }
    });
  
    $(document).on('click', '#btnUpdateInfo', function(event) {
      event.preventDefault();
      editUserInfo();
    });
  } else {
    $('.text-center').text('You are not sign in or do not have account. Please sign in or sign up account!');
    $('#profileForm').hide();
  } 
});
