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
                generateProductsHomePage(category);
            });
            $('#js-menu').append(html);
        }
    });
    $.ajax({
        url: "/api/products?newest_products=8",
        type: "get",
        success: function(result) {
            let i = 1;
            result.result.forEach(product => {
                $('#img-pro-newest-' + i).attr('src', 'images/products/'+ product.images[0].path);
                $('#name-pro-newest-' + i).html(product.name);
                $('#store-pro-newest-' + i + ' span').html(product.store.name);
                $('#price-pro-newest-' + i + ' span').html(product.price +' đ');
                i++;
            });
        }
    });
    function generateProductsHomePage(category) {
        $.ajax({
            url: "/api/products?index_category_id=" +category.id,
            type: "get",
            success: function(result) {
                let i = 1;
                html ='';
                    html+='<div id="products-hot-0" class="product product-home product-wrapper">'+
                    '<div class="title border-bottom">'+
                      '<i class="fa fa-fire"></i>'+
                      '<h1 class="distance-none text-uppercase">'+
                        '<span>'+category.name+'</span>'+
                        '<a href="thuc-don-mon-ga-sp-a49b241015103551773.html" class="btn btn-danger btn-sm">See More</a>'+
                      '</h1>'+
                    '</div>';
                    if(result.result) {
                    result.result.forEach(product => {
                    html += '<div id="item-wrapper-0-0" class="item-wrapper">'+
                    '<div class="item">'+
                      '<div class="item-img">'+
                        '<a href="">'+
                          '<img src="images/products/'+product.images[0].path+'" alt="" />'+
                        '</a>'+
                      '</div>'+
                      '<div class="item-name">'+
                        '<a href="">'+
                          '<h2 class="text-center text-uppercase distance-none" title="">'+product.name+'</h2>'+
                        '</a>'+
                        '<div class="store text-center">'+
                          '<a href=""><span>'+product.store.name+'</span></a>'+
                        '</div>'+
                        '<div class="price text-center">'+
                        '<span>'+product.price+' đ</span>'+
                        '</div>'+
                      '</div>'+
                      '<div class="item-addCart-hover">'+
                        '<span class="item-addCart btn btn-default btn-lg text-capitalize" onclick="">'+
                            '<i class="fa fa-shopping-cart"></i>Buy Now'+
                        '</span>'+
                        '<div class="row">'+
                          '<div class="col-lg-12">'+
                            '<div class="col-lg-4" data-toggle="tooltip" data-placement="top" title="" data-original-title="Lượt xem">'+
                              '<p><i class="fa fa-eye"></i></p>'+
                              '<p>126</p>'+
                            '</div>'+
                            '<div class="col-lg-4" data-toggle="tooltip" data-placement="top" title="" data-original-title="Lượt mua">'+
                              '<p><i class="fa fa-tags"></i></p>'+
                              '<p>28</p>'+
                            '</div>'+
                            '<a href="javascript:;">'+
                              '<div class="col-lg-4" data-toggle="tooltip" data-placement="top" title="" data-original-title="Chia sẻ">'+
                                '<p><i class="fa fa-share-alt"></i></p>'+
                                '<p>Share</p>'+
                              '</div>'+
                            '</a>'+
                          '</div>'+
                       ' </div>'+
                      '</div>'+
                    '</div>'+
                  '</div>';
                    });
                }
                html+='</div>';
                $(html).insertBefore('.bottom-banner');
            }
        });
    }
    
});
