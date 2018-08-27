$(document).ready(function() {
  $.ajax({
    url: "/api/products",
    type: "get",
    success: function(result){
      html = '';

      result.result.forEach(product => {
        console.log(product);
        $('#productName').html(product.name);
        $('#details').html(product.describe);
        $('#productPrice').html(product.price + ' VND');
        // html+= '<div class="panel-body none-border">' + '<p id="details">' + product.describe + '</p></div>';
    });
      
    }
  })
});