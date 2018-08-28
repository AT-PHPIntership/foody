$(document).ready(function() {
  $.ajax({
    url: "/api" + window.location.pathname,
    type: "get",
    success: function(response){
      $('#productName').html(response.result.name);
      $('#details').html(response.result.describe);
      $('#productPrice').html(response.result.price + ' VND');
      let i = 1;
        response.result.images.forEach(image => {
          $('#bzoom-thumb-image-' + i).attr('src', 'images/products/'+ image.path);
          $('#bzoom-big-image-' + i).attr('src', 'images/products/'+ image.path);
          smallImg=$('.bzoom_smallthumb_active').parent().find( "li" ).children()[i-1];
          $(smallImg).attr('src','images/products/'+ image.path);
          i++;
        });
    }
  });
});
