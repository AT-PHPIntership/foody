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
                        //url = api.products_index+"?category="+childsCategory.id;
                        childsHtml += '<li><a href="">'+ childsCategory.name +'</a></li>';
                    });
                    childsHtml += '</ul>' +
                                '</div>';
                }
                
                if (category.children) {
                    html += '<li class="menu-top">' +
                                '<a href="">'+category.name+'</a>';
                                if (category.children) {
                                    html += childsHtml;
                                }
                    html +=  '</li>';
                }else {
                    html += '<li>' +
                                '<a href="">'+category.name+'</a>';
                    html +=  '</li>';
                }
                
            });
            $('#js-menu').append(html);
        }
    });
});