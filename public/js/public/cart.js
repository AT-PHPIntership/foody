var cart = JSON.parse(localStorage.getItem('cart'));
$(document).ready(function() {
    if(!cart){
        cart = [];
    }else{
        showCart(cart);
    }
    $('.shopping-cart-show').click(function () {
        $('.box-cart').toggleClass("active");
    });
    $('.thugon-cart').click(function () {
        $('.box-cart').toggleClass("active");
    });
});
function addToCart(idProduct) {
    if(!cart){
        $('.box-cart').addClass("active");
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
    $('.box-cart').addClass("active");
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
        $('#total-money b').html(formatNumber(total)+ ' ');
        changeNumberCart(cart);
        $('.popup-cart table tbody').html(html);
    }else {
        $('.box-cart').removeClass("active");
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
        $('.box-cart').removeClass("active");
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
