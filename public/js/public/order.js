$(document).ready(function(){
    
var totalMoney = 0;
  $('#warningMsg').hide();
  $.ajax({
    url: 'api/orders',
    type: "get",
    headers: {
        'Accept': 'application/json',
        'Authorization': 'Bearer ' + token
    },
    success: function(response) {
      orderHtml = '';
      orders = response.result.data;
      console.log(orders);
      if (orders.length == 0) {
        $('#productInfo').hide();
        $('#warningMsg').show().text('aaassss');
      } else {
        orders.forEach(order => {
          console.log(order.order_details);
          console.log(order.processing_status)
          orderHtml += '<div class="panel-heading left full"><div class="col-lg-12 distance-none">\
            <div class="col-lg-3">\
                <p>\
                    <i class="fa fa-barcode"></i>\
                    <b data-toggle="tooltip" data-placement="top" title="" data-original-title="Mã đơn hàng">#\
                    '+order.id+'</b>\
                </p>\
            </div>\
            <div class="col-lg-3">\
                  <p>\
                      <i class="fa fa-money"></i>\
                      <b data-toggle="tooltip" data-placement="top" title="" data-original-title="Tổng tiền">\
                      '+ order.money_ship+'</b>\
                  </p>\
              </div>\
              <div class="col-lg-3">\
                  <p>\
                      <i class="fa fa-calendar"></i>\
                      <b data-toggle="tooltip" data-placement="top" title="" data-original-title="Ngày mua">\
                      '+ order.submit_time+'</b>\
                  </p>\
              </div>\
              <div class="col-lg-3">';
              if(order.processing_status == 3) {
                orderHtml += '<p>\
                    <b style="cursor:pointer;"  data-toggle="tooltip" data-placement="top" title="" data-original-title="Hủy đơn hàng">\
                    <i class="fa fa-trash"></i>'+Lang.get('user/cart.orders.delete_order')+'</b><button id="cancel">aaa</button></p>\
                    </div></div></div>';
              } else if(order.processing_status == 2) {
                orderHtml += '<p>\
                    <i class="fa fa-info-circle"></i>\
                    <b data-toggle="tooltip" data-placement="top" title="" data-original-title="Trạng thái">\
                        <span >'+Lang.get('user/cart.orders.deleted_order')+'</span>\
                    </b></p></div></div></div>';
              }
                order.order_details.forEach(products => {
                    orderHtml+='<div class="panel-body distance-none">\
                                <div class="col-lg-12 border-none distance-none">\
                                <div class="col-lg-4" style="padding-left:0">\
                                <img src="images/products/'+products.product.images[0].path +'"/>\
                                </div>\
                                <div class="col-lg-8"><h2>'+Lang.get('user/cart.orders.product_name')+': '+products.product.name+'</h2>\
                                <p class="col-lg-12">'+Lang.get('user/cart.orders.quantity')+': <b>'+ products.quantity+'</b></p>\
                                <p class="col-lg-12">'+Lang.get('user/cart.orders.price')+': <b>'+ formatNumber(products.product.price) +' VND</b></p>\
                                <p class="col-lg-12">'+Lang.get('user/cart.orders.total')+': <b>'+ formatNumber(products.product.price*products.quantity) +' VND</b></p>\
                                </div></div></div>';
                                totalMoney += products.product.price*products.quantity;
                });
                orderHtml += '<div class="panel-footer left full none-border none-background">\
                            <div class="col-lg-12"><p><b>'+name+'</b></p><p><b>'+order.address+'</b></p>\
                            <div class="col-lg-6 right text-right"><p>'+Lang.get('user/cart.orders.payments')+': <b>CARD</b></p>\
                            <p>'+Lang.get('user/cart.orders.money_ship')+': <b>' + formatNumber(order.money_ship) + ' VND</b></p>\
                            <p>'+Lang.get('user/cart.orders.total')+': <b>' + formatNumber(order.money_ship+totalMoney) + ' VND</b></p></div></div></div>';
                $('#cancel').on('click', function(){
                $.ajax({
                    url: 'api/orders/' + order.id,
                    type: "put",
                    headers: {
                        'Accept': 'application/json',
                        'Authorization': 'Bearer ' + token
                    },
                    success: function(response) {

                    }
                });
                });
        $('#productInfo').html(orderHtml);

    });
      }
    }
  });
});


