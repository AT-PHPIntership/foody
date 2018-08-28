var cart = JSON.parse(sessionStorage.getItem('cart'));
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
        var cartItem;
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
    sessionStorage.setItem("cart", JSON.stringify(cart));
    showCart(cart);
    $('.box-cart').addClass("active");
}
function searchById(nameKey, myArray){
    for (var i=0; i < myArray.length; i++) {
        if (myArray[i].id === nameKey) {
          return myArray[i];
        }
    }
}
function showCart(cart) {
    var html = '', total = 0;
    if(cart){
        cart.forEach(cartItem => {
            total += cartItem.price * cartItem.quanlity;
            html += '<tr>' +
            '<td rowspan="2" width="50">'+
            '<img src="'+cartItem.img+'" alt="" width="75" height="75">'+
            '</td>'+
            '<td colspan="3" class="cart-name bold">'+
            '<span>'+cartItem.name+'</span>'+
            '<i class="fa fa-trash-o delete_pro_in_cart_top" title="Xoá khỏi giỏ hàng" onclick="modifyCart('+cartItem.id+',\'delete\')"></i>'+
            '</td>'+
        '</tr>'+
        '<tr>'+
            '<td width="100" class="text-right td_soluong">'+
            '<i class="fa fa-minus " onclick="modifyCart('+cartItem.id+',\'subone\')"></i> <span><input class="number-product-'+cartItem.id+'" id="number-product-'+cartItem.id+'" type="number" style="width:40px" onchange="modifyCart('+cartItem.id+',\'change\')" value="'+cartItem.quanlity+'"></span><i class="fa fa-plus " onclick="modifyCart('+cartItem.id+',\'addone\')"></i>'+
            '</td>'+
            '<td class="text-right">'+formatNumber(cartItem.price)+' VNĐ</td>'+
            '<td class="text-right bold">'+formatNumber(cartItem.price*cartItem.quanlity)+' VNĐ</td>'+
        '</tr>';
        });
        $('#total-money b').html(formatNumber(total)+ ' ');
        changeNumberCart(cart.length);
        $('.box-cart-scroll table tbody').html(html);
    }else {
        $('.box-cart').removeClass("active");
        $('.cart-detail-wrapper').remove();
        changeNumberCart(0);
    }
}
function changeNumberCart(length) {
    $('.shopping-cart .shopping-cart-show').html('Cart ('+length+')');
}
function modifyCart(id, option) {
    if(option == 'clear') {
        sessionStorage.removeItem('cart');
        console.log(1);
        cart = null;
        $('.shopping-cart .shopping-cart-show').html('Cart (0)');
        $('.box-cart').removeClass("active");
        $('.cart-detail-wrapper').remove();
        showCart(cart);
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
                        var number, numberCheckout, numberCart;
                        if(window.location.pathname == '/checkout/cart') {
                            numberCheckout = parseInt($('#cart-detail-checkout tbody tr td span .number-product-' +id).val());
                        }
                        numberCart = parseInt($('#number-product-' +id).val());
                        number = numberCart != cart[j].quanlity ? numberCart : numberCheckout;
                        console.log('a '+numberCheckout+ ' ' +numberCart);
                        if(number <=0) modifyCart(id, 'delete'); 
                        cart[j].quanlity = number;
                        break;
                }
            }
        }
        sessionStorage.setItem("cart", JSON.stringify(cart));
        showCart(cart);
    }
}
