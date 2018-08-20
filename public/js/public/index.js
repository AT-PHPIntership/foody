$(document).ready(function() {
    $.ajax({
        url: "/api/categories/show-menu",
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
                generateProductsHomePage(category);
            });
            $('#js-menu').append(html);
        }
    });
    $.ajax({
        url: "/api/products/show-newest?number_products=8",
        type: "get",
        success: function(result) {
            let html = '';
            let i = 1;
            result.result.forEach(product => {
                $('#img-pro-newest-' + i).attr('src', 'images/products/'+ product.images[1].path);
                $('#name-pro-newest-' + i).html(product.name);
                $('#store-pro-newest-' + i + ' span').html(product.store.name);
                $('#price-pro-newest-' + i + ' span').html(product.price +' đ');
                i++;
            });
        }
    });
    function generateProductsHomePage(category) {
        $("#products-hot-"+ (category.id-1)).clone().attr({'id':'products-hot-'+category.id}).insertBefore(".bottom-banner");
        console.log(1);
        $.ajax({
            url: "/api/products/show-index-products" +"?category_id=" +category.id,
            type: "get",
            success: function(result) {
                console.log(result);
                
                // let html = '';
                // let i = 1;
                // result.result.forEach(product => {
                //     $('#img-pro-newest-' + i).attr('src', 'images/products/'+ product.images[1].path);
                //     $('#name-pro-newest-' + i).html(product.name);
                //     $('#store-pro-newest-' + i + ' span').html(product.store.name);
                //     $('#price-pro-newest-' + i + ' span').html(product.price +' đ');
                //     i++;
                // });
            }
        });
    }
    
});
