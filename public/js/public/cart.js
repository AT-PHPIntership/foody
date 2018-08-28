var cart = JSON.parse(localStorage.getItem('cart'));
$(document).ready(function() {
    if(!cart){
        $('.box-cart').html('<p class="title text-uppercase">Your Cart is empty</p>');
        cart = [];
    }else{
        showCart(cart);
    }
    $('.shopping-cart-show').click(function () {
        $('.box-cart').toggleClass("active");
    });
});
function addToCart(idProduct) {
    if(!cart){
        cart = [];
    }
    var img = $('#item-product-' + idProduct +' .item .item-img a img').attr('src');
    var name = $('#item-product-' + idProduct +' .item .item-name a h2').text();
    var price = $('#item-product-' + idProduct +' .item .item-name .price span').text();
    var cartItem;
    if(cart.length > 0){
        var resultObject = searchById(idProduct, cart);
        if(!resultObject){
            cartItem = {id:idProduct, name:name, img:img, price:price, quanlity: 1};
            cart.push(cartItem);
        }else{
          for (var j = 0; j < cart.length; j++) {
            if(idProduct === cart[j].id){
                cart[j].quanlity += 1;
            }
          }
        }
    }else {
    cartItem  = {id:idProduct, name:name, img:img, price:price, quanlity: 1};
    cart.push(cartItem);
    }
    localStorage.setItem("cart", JSON.stringify(cart));
    showCart(cart);
    expandCart();
}
function searchById(id, data){
    for (var i=0; i < data.length; i++) {
        if (data[i].id === id) {
          return data[i];
        }
    }
}
function showCart(cart) {
    var html = '', total = 0;
    if(cart.length){
        html += '<div class="box-cart-detail">'+
              '<p class="title text-uppercase">'+Lang.get('user/index.cart.your_cart')+
              '</p>'+
              '<div class="popup-cart box-cart-scroll">'+
                '<table class="table">'+
                 ' <tbody>';
        cart.forEach(cartItem => {
            total += cartItem.price * cartItem.quanlity;
            html += '<tr>' +
            '<td rowspan="2" width="50">'+
            '<img src="'+cartItem.img+'" alt="" width="50" height="50">'+
            '</td>'+
            '<td colspan="3" class="cart-name bold">'+
            '<span>'+cartItem.name+'</span>'+
            '<i class="fa fa-trash-o delete_pro_in_cart_top" title="Xoá khỏi giỏ hàng" onclick="modifyCart('+cartItem.id+',\'delete\')"></i>'+
            '</td>'+
        '</tr>'+
        '<tr>'+
            '<td width="100" class="text-right td_soluong">'+
            '<i class="fa fa-minus " onclick="modifyCart('+cartItem.id+',\'subone\')"></i> <span><input id="number-product-'+cartItem.id+'" type="number" style="width:40px" onchange="modifyCart('+cartItem.id+',\'change\')" value="'+cartItem.quanlity+'"></span><i class="fa fa-plus " onclick="modifyCart('+cartItem.id+',\'addone\')"></i>'+
            '</td>'+
            '<td class="text-right">'+formatNumber(cartItem.price)+' VNĐ</td>'+
            '<td class="text-right bold">'+formatNumber(cartItem.price*cartItem.quanlity)+' VNĐ</td>'+
        '</tr>';
        });
        html += '</tbody>'+
                '</table>'+
              '</div>'+
              '<table class="table">'+
                '<tfoot>'+
                  '<tr>'+
                    '<td colspan="3" class="bold"><b>'+Lang.get('user/index.cart.total')+'</b></td>'+
                    '<td id="total-money" class="text-right"><b class="bold" style="color:#f00;font-size:15px;">'+formatNumber(total)+' </b>VNĐ</td>'+
                  '</tr>'+
                '</tfoot>'+
              '</table>'+
              '<p class="cart-options">'+
                '<a href="javascript:;" class="thugon-cart btn btn-sm btn-primary btn-warning text-capitalize" onclick="collapseCart();"><i class="fa fa-close"></i>'+Lang.get('user/index.cart.exit')+' </a>'+
                '<a href="javascript:;" onclick="modifyCart(0,\'clear\');" class="btn btn-sm btn-primary btn-danger text-capitalize"><i class="fa fa-trash"></i>'+Lang.get('user/index.cart.cancel')+'</a>'+
                '<a href="/thong-tin-gio-hang.html" class="btn btn-sm btn-primary btn-success text-capitalize"><i class="fa fa-shopping-cart"></i>'+Lang.get('user/index.cart.order')+'</a>'+
              '</p>'+
            '</div>';
        changeNumberCart(cart);
        $('.box-cart').html(html);
    }else {
        collapseCart();
        $('.box-cart').html('<p class="title text-uppercase">Your Cart is empty</p>');
        changeNumberCart(cart);
    }
}
function changeNumberCart(cart) {
    $('.shopping-cart .shopping-cart-show').html('Cart ('+cart.length+')');
}
function modifyCart(id, option) {
    if(option == 'clear') {
        localStorage.removeItem('cart');
        cart = null;
        $('.shopping-cart .shopping-cart-show').html('Cart (0)');
        collapseCart();
        $('.box-cart').html('<p class="title text-uppercase">Your Cart is empty</p>');
    } else {
        for (var j = 0; j < cart.length; j++) {
            if(id === cart[j].id){
                switch (option) {
                    case 'addone':
                        cart[j].quanlity += 1;
                        break;
                    case 'subone':
                        cart[j].quanlity -= 1;
                        if(cart[j].quanlity == 0) {
                            modifyCart(id, 'delete');
                        }
                        break;
                    case 'delete':
                        cart.splice(j, 1);
                        break;
                    case 'change':
                        var number = $('#number-product-' + id).val();
                        if(number <=0) modifyCart(id, 'delete');
                        cart[j].quanlity = number;
                        break;
                }
            }
        }
        localStorage.setItem("cart", JSON.stringify(cart));
        showCart(cart);
    }
}
function collapseCart() {
    $('.box-cart').removeClass("active");
}
function expandCart() {
    $('.box-cart').addClass("active");
}
