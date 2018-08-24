$(document).ready(function() {
  $.ajax({
    url: "/api/categories",
    type: "get",
    success: function(result) {
      let html = '';
      result.result.forEach(category => {
        let childsHtml = '';
        if (category.children) {
          childsHtml += '<div class="list-menu">' +
                          '<ul class="list-inline">';
          category.children.forEach(childsCategory => {
            childsHtml += '<li><a href="'+api.products_index+"?category_id="+childsCategory.id+'">'+ childsCategory.name +'</a></li>';
          });
          childsHtml += '</ul>' +
                      '</div>';
        }
        if (category.children) {
          html += '<li class="menu-top">' +
                      '<a href="'+api.products_index+"?category_id="+category.id+'">'+category.name+'</a>';
          if (category.children) {
            html += childsHtml;
          }
          html +=  '</li>';
        }else {
          html += '<li>' +
                      '<a href="'+api.products_index+"?category_id="+category.id+'">'+category.name+'</a>';
          html +=  '</li>';
        }
      });
      $('#js-menu').append(html);
    }
  });
});
function formatNumber(number) {
  return new Intl.NumberFormat('de-DE').format(number);
}
