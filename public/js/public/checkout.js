$(document).ready(function() {
    checkLogin('/checkout/cart');
    $.ajax({
        url: "/api/users/info",
        type: "get",
        headers: {
            'Accept': 'application/json',
            'Authorization': 'Bearer ' + token
        },
        success: function(response) {
            var user = response.result;
          $('#NGUOINHAN').val(user.full_name);
          $('#EMAIL').val(user.email);
          $('#DIENTHOAI').val(user.phone);
        }
      });
});