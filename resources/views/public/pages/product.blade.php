@extends('public.layout.master')
@section('breadcrumb')
<div class="breadcrumb distance-none">
  <ul class="list-inline text-uppercase distance-none">
    <li>
      <a href="/"><i class="fa fa-home"></i></a>
      <i class="fa fa-angle-double-right"></i>
    </li>
      <li>
      <a href="/san-pham.html">{{ __('user/product.title')}}</a>
      <i class="fa fa-angle-double-right"></i>
    </li>
    <li>
      <a href="javascript:;"><h1 style="font-size:14px;padding:0;margin:0;">Thực đơn món gà</h1></a>
    </li>
  </ul>
</div>
@endsection
@section('banner-ad')
<div class="banner_home_sm">
  <a href="don-tet-ron-rang-cung-flyfood-goi-y-thuc-don-tiec-nhanh-nhan-dip-tet-den-xuan-ve--detail-0efb230118141528294.html">
    <img src="user/Files/admin/23012018/BANNER&#32;TIEC&#32;NHANH&#32;2018.png" />
  </a>
  <a href="index.html">
    <img src="user/Files/admin/10042018/1-mon-cung-giao-610x180.gif" />
  </a>
</div>
@endsection
@section('content')
<div class="left-banner">
  <a href="http://tiectrongoi.vn/trang-chu.html">
    <img src="user/Files/admin/19042018/baner-dung-flyfood.gif" />
  </a>


</div>
<div class="right-banner">
  <a href="dang-ky-loc-xoay-happy-birthday-loc-coc-leng-keng-5-con-so-1-detail-fdb7020418135808910.html">
    <img src="user/Files/admin/27042018/banner-phai.gif" />
  </a>
</div>
<div class="product product-home product-wrapper">
    <div class="col-lg-12 full left distance-none">
      <div class="col-lg-5 left spdetail distance-none">
        <section class="product product-home">
          <div class="slider-mobile">
            <div class="carousel_new carousel_buys owl-carousel owl-theme">
              <div class="item">
                <div class="item-img">
                  <a href="javascript:;">
                    <img src="user/Files/admin/08082018/avt-ga-hap-nuoc-mam.png" alt="/Files/admin/08082018/avt-ga-hap-nuoc-mam.png" />
                  </a>
                </div>
              </div>
            </div>
          </div>
        </section>
          <!--show product images-->
        <div class="bzoom_wrap">
          <ul id="bzoom">
            <li>
              <img class="bzoom_thumb_image" src="user/Files/admin/08082018/avt-ga-hap-nuoc-mam.png" />
              <img class="bzoom_big_image" src="user/Files/admin/08082018/avt-ga-hap-nuoc-mam.png" />
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-7 left spdetail chitiet-wrapper distance-none">
        <!--show product detail-->
        <div class="panel panel-default">
          <div class="panel-heading">
            <h2>
              G&#192; HẤP NƯỚC MẮM
            </h2>
            <ul class="list-inline distance-none spdetail">
              <li>
                <i class="fa fa-tags"></i>29 {{ __('user/product.number_orders')}}
              </li>
              <li>
                <i class="fa fa-eye"></i>156 {{ __('user/product.views')}}
              </li>
            </ul>
          </div>
          <div class="panel-body none-border">
            <p>
              Ngon kh&#244;ng cưỡng nổi vị g&#224; hấp nước mắm nhĩ đậm đ&#224;, thơm ngon c&#249;ng x&#244;i 3 m&#224;u, 3 vị đẹp mắt, ngon miệng. M&#243;n mới của Flyfood G&#224; hấp nước mắm sẽ để lại dấu ấn kh&#243; qu&#234;n với c&#225;c t&#237;n đồ m&#234; G&#224; n&#243;i chung v&#224; m&#234; G&#224; b&#243; x&#244;i của Flyfood n&#243;i ri&#234;ng bao l&#226;u nay. 
            </p>
            <div class="price left">
              <span class="only-price">390.000 {{ __('user/product.currency')}}</span>
            </div>
            <div class="right social text-right">
              <p style="color:#ff0000">
                <strong>{{ __('user/product.VAT')}}</strong>
              </p>
              <p>
                <div class="ic">
                  <div class="g-plusone" data-annotation="inline" data-href="http://flyfood.vn/ga-hap-nuoc-mam-spdetail-dfd0080818181107251.html" data-width="300"></div>
                </div>
                <div class="fb-like"
                  data-href="http://flyfood.vn/ga-hap-nuoc-mam-spdetail-dfd0080818181107251.html"
                  data-layout="button_count"
                  data-action="like"
                  data-show-faces="false"
                  data-share="true">
                </div>
              </p>
            </div>
            <br style="clear:both" />
            <div class="col-lg-12 distance-none left">
              <div class="col-lg-6 left spdetail distance-none">
                <p>
                  <b>{{ __('user/product.choose')}}</b>
                  <span class="size active" data-val="1">Chuẩn</span>
                </p>
                <div>
                  <label class="sl-validate field-validation-error"></label>
                  <div class="form-group input-group col-lg-12">
                    <span class="input-group-addon">{{ __('user/product.quantity')}}</span>
                    <input id="Soluong" type="text" class="form-control" placeholder="Số lượng" value="1" onchange="CheckNumber(this);" />
                  </div>
                </div>
                <div>
                  <div class="form-group col-lg-12 distance-none">
                    <button id="btn-muangay" onclick="addToCart('dfd0080818181107251');" type="button" class="btn btn-lg btn-primary btn-block btn-success text-capitalize">
                      <i class="fa fa-shopping-cart"></i>{{ __('user/product.buy_now')}}
                    </button>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 spdetail moto left distance-none">
                <img src="user/Files/Images/moto-hotline.png" style="width:200px;float:right;" alt="giao hang" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br style="clear:both" />
    <div class="col-lg-12 full distance-none">
        <div class="col-lg-8 spcontent distance-none">
          <div class="title border-bottom">
            <h1 class="distance-none text-uppercase" style="margin-left:0;">{{ __('user/product.detail')}}</h1>
          </div>
          <span class="show-more fa fa-angle-double-down" onclick="showcontent(this);"></span>
          <section class="left full">
            M&oacute;n<strong> G&agrave; hấp nước mắm </strong>một phi&ecirc;n bản mới lạ so với G&agrave; b&oacute; x&ocirc;i truyền thống, vừa mới được Flyfood cho ra mắt mấy ng&agrave;y gần đ&acirc;y th&ocirc;i m&agrave; đ&atilde; hot rần rần, được kh&aacute;ch order li&ecirc;n tục. Chỉ tại nh&igrave;n hấp dẫn thế kia, th&igrave; ai m&agrave; cầm l&ograve;ng được cơ chứ.&nbsp;<br />
            <br />
            M&oacute;n n&agrave;y Flyfood sử dụng G&agrave; ta ch&iacute;nh gốc n&ecirc;n thịt dai v&agrave; ngọt khỏi phải n&oacute;i. Chưa hết, sau đ&oacute; c&ograve;n phải ướp với nước mắm v&agrave; c&aacute;c loại gia vị đặc trưng kh&aacute;c sau đ&oacute; đem đi hấp để g&agrave; thật thấm gia vị đậm đ&agrave;, g&agrave; c&oacute; m&agrave;u v&agrave;ng c&aacute;nh gi&aacute;n b&oacute;ng bẩy, đẹp mắt, nh&igrave;n th&ocirc;i l&agrave; muốn ăn ngay rồi.&nbsp;<br />
            <br />
            <img alt="" src="user/Files/images/ga-gap-nuoc-mam-flyfood-13.png" style="height:100%; width:100%" /><br />
            <br />
            <img alt="" src="user/Files/images/ga-gap-nuoc-mam-flyfood-9.png" style="height:100%; width:100%" /><br />
            <br />
            Tiếp đến l&agrave; phần x&ocirc;i, x&ocirc;i c&oacute; 3 m&ugrave;i vị l&agrave; x&ocirc;i gấc, l&aacute; dứa, l&aacute; cải với m&agrave;u sắc bắt mắt, x&ocirc;i dẻo, mềm, ăn chung với g&agrave; l&agrave; bộ đ&ocirc;i ho&agrave;n hảo lu&ocirc;n. Đặc biệt l&agrave; x&ocirc;i của Flyfood sử dụng từ m&agrave;u tự nhi&ecirc;n của gấc, l&aacute; cải v&agrave; l&aacute; dứa tuyệt đối kh&ocirc;ng d&ugrave;ng phẩm m&agrave;u n&ecirc;n kh&aacute;ch h&agrave;ng c&oacute; thể y&ecirc;n t&acirc;m nh&eacute;.&nbsp;<br />
            <br />
            <img alt="" src="user/Files/images/ga-gap-nuoc-mam-flyfood-7.png" style="height:100%; width:100%" />
            <div style="text-align: center;">Trứng non bắt mắt ăn k&egrave;m, l&agrave;m cho m&oacute;n g&agrave; th&ecirc;m phần hấp dẫn kh&ocirc;ng cưỡng nổi.&nbsp;</div>
            <br />
            <img alt="" src="user/Files/images/ga-gap-nuoc-mam-flyfood-1.png" style="height:100%; width:100%" />
            <div style="text-align: center;">Chấm v&agrave;o nước sốt g&agrave; v&agrave; thưởng thức vị ngon nhớ m&atilde;i kh&ocirc;ng qu&ecirc;n n&agrave;y đi bạn ơi&nbsp;</div>
            <br />
            <img alt="" src="user/Files/images/ga-gap-nuoc-mam-flyfood-2.png" style="height:100%; width:100%" /><br />
            <br />
            <img alt="" src="user/Files/images/ga-gap-nuoc-mam-flyfood-5.png" style="height:100%; width:100%" /><br />
            <br />
            <img alt="" src="user/Files/images/ga-gap-nuoc-mam-flyfood-16.png" style="height:100%; width:100%" /><br />
            &nbsp;
            <p style="text-align:justify"><span style="font-family:open sans,arial; font-size:small">C&aacute;c m&oacute;n ăn tại Flyfood được chế biến vừa ngon miệng, hấp dẫn vừa an to&agrave;n vệ sinh đảm bảo dinh dưỡng v&agrave; sức khỏe cho thực kh&aacute;ch. H&atilde;y nhấc điện thoại l&ecirc;n, gọi cho Flyfood để c&oacute; một bữa ăn ngon miệng c&ugrave;ng gia đ&igrave;nh hay bạn b&egrave; với m&oacute;n G&agrave; hấp nước mắm si&ecirc;u ngon n&agrave;y nh&eacute; !&nbsp;</span><br />
            <br />
            &nbsp;</p>
            <div style="box-sizing: border-box; color: rgb(71, 71, 71); font-family: &quot;Open Sans&quot;, Arial; font-size: 14px; line-height: 20px; text-align: justify; clear: both;">&nbsp;</div>
            <p style="text-align:center"><strong>{{ __('user/product.line_1')}}</strong></p>
            <p style="text-align:center"><span style="color:rgb(255, 0, 0)"><strong>{{ __('user/product.line_2')}}</strong></span></p>
            <p style="text-align:center"><span style="color:rgb(255, 0, 0)"><strong>{{ __('user/product.line_3')}}</strong></span></p>
            <p style="text-align:center">&nbsp;</p>
            <p style="text-align:center"><strong><img alt="" src="image/data/card&#32;qua&#32;tang.png" style="border:0px; box-sizing:border-box; height:76px; vertical-align:middle; width:113.297px" /></strong></p>
            <p style="text-align:center"><span style="font-size:22px"><span style="color:rgb(255, 0, 0)"><strong>{{ __('user/product.line_4')}}</strong></span></span></p>
            <p style="text-align:center">&nbsp;</p>
            <p style="text-align:right"><span style="color:rgb(255, 0, 0)"><strong>{{ __('user/product.domain')}}</strong></span></p>
          </section>
        </div>
        <div class="col-lg-4 sprelation">
          <div class="title border-bottom">
            <h1 class="distance-none text-uppercase" style="margin-left:0;">{{ __('user/product.newest_products')}}</h1>
          </div>
          <section class="product product-home">
            <ul id="bestbuy" class="left full distance-none" >
              <li class="full">
                <div class="item full">
                  <div class="item-img">
                    <a href="ga-hap-nuoc-mam-spdetail-dfd0080818181107251.html">
                      <img src="user/Files/admin/08082018/avt-ga-hap-nuoc-mam.png" alt="G&#192; HẤP NƯỚC MẮM" />
                    </a>
                  </div>
                  <div class="item-name">
                    <a href="ga-hap-nuoc-mam-spdetail-dfd0080818181107251.html"><h2 class="text-center text-uppercase distance-none" title="G&#192; HẤP NƯỚC MẮM">G&#192; HẤP NƯỚC MẮM</h2></a>
                    <div class="price text-center">
                      <span>390.000 đ</span>
                    </div>
                  </div>
                </div>
              </li>
              <li class="full">
                <div class="item full">
                  <div class="item-img">
                    <a href="ga-bo-xoi-3-mau-om-trung-non-hat-sen-spdetail-c1e9290618102459696.html">
                      <img src="user/Files/admin/29062018/avt-gbx3mau.jpg" alt="G&#192; B&#211; X&#212;I 3 M&#192;U &#212;M TRỨNG NON HẠT SEN" />
                    </a>
                  </div>
                  <div class="item-name">
                    <a href="ga-bo-xoi-3-mau-om-trung-non-hat-sen-spdetail-c1e9290618102459696.html"><h2 class="text-center text-uppercase distance-none" title="G&#192; B&#211; X&#212;I 3 M&#192;U &#212;M TRỨNG NON HẠT SEN">G&#192; B&#211; X&#212;I 3 M&#192;U &#212;M TRỨNG NON HẠT SEN</h2></a>
                    <div class="price text-center">
                      <span>450.000 đ</span>
                    </div>
                  </div>
                </div>
              </li>
              <li class="full">
                <div class="item full">
                  <div class="item-img">
                    <a href="ga-bo-xoi-2-mau-om-trung-hat-sen-�%2580%2593-vi-tieu-xanh-spdetail-eb91230418180811629.html">
                      <img src="user/Files/admin/23042018/ga-bo-xoi-sot-tieu-xanh-flyfood.jpg" alt="G&#192; B&#211; X&#212;I 2 M&#192;U &#212;M TRỨNG HẠT SEN – VỊ TI&#202;U XANH" />
                    </a>
                  </div>
                  <div class="item-name">
                    <a href="ga-bo-xoi-2-mau-om-trung-hat-sen-�%2580%2593-vi-tieu-xanh-spdetail-eb91230418180811629.html"><h2 class="text-center text-uppercase distance-none" title="G&#192; B&#211; X&#212;I 2 M&#192;U &#212;M TRỨNG HẠT SEN – VỊ TI&#202;U XANH">G&#192; B&#211; X&#212;I 2 M&#192;U &#212;M TRỨNG HẠT SEN – VỊ TI&#202;U XANH</h2></a>
                    <div class="price text-center">
                      <span>430.000 đ</span>
                    </div>
                  </div>
                </div>
              </li>
              <li class="full">
                <div class="item full">
                  <div class="item-img">
                    <a href="chao-chan-gio-heo-�%2580%2593-la-dinh-lang-spdetail-0522271217140143459.html">
                      <img src="user/Files/admin/22032018/chao-chan-gio-heo-la-dinh-lang-flyfood-1200x1200-01.png" alt="CHẠO CH&#194;N GI&#210; HEO – L&#193; ĐINH LĂNG" />
                    </a>
                      
                  </div>
                  <div class="item-name">
                    <a href="chao-chan-gio-heo-�%2580%2593-la-dinh-lang-spdetail-0522271217140143459.html"><h2 class="text-center text-uppercase distance-none" title="CHẠO CH&#194;N GI&#210; HEO – L&#193; ĐINH LĂNG">CHẠO CH&#194;N GI&#210; HEO – L&#193; ĐINH LĂNG</h2></a>
                    <div class="price text-center">
                      <span>350.000 đ</span>
                    </div>
                  </div>
                </div>
              </li>
              <li class="full">
                <div class="item full">
                  <div class="item-img">
                    <a href="dui-de-dut-lo-spdetail-3d49081116164609399.html">
                      <img src="user/Files/admin/09112016/dui-de-dut-lo-flyfood-1200x1200-01.png" alt="Đ&#217;I D&#202; Đ&#218;T L&#210;" />
                    </a>
                      
                  </div>
                  <div class="item-name">
                    <a href="dui-de-dut-lo-spdetail-3d49081116164609399.html"><h2 class="text-center text-uppercase distance-none" title="Đ&#217;I D&#202; Đ&#218;T L&#210;">Đ&#217;I D&#202; Đ&#218;T L&#210;</h2></a>
                    <div class="price text-center">
                      <span>495.000 đ</span>
                    </div>
                  </div>
                </div>
              </li>
              <li class="full">
                <div class="item full">
                  <div class="item-img">
                    <a href="salad-tom-spdetail-ed21270416000933186.html">
                      <img src="user/Files/admin/27042016/salad-tom-flyfood-01.png" alt="SALAD T&#212;M" />
                    </a>
                      
                  </div>
                  <div class="item-name">
                    <a href="salad-tom-spdetail-ed21270416000933186.html"><h2 class="text-center text-uppercase distance-none" title="SALAD T&#212;M">SALAD T&#212;M</h2></a>
                    <div class="price text-center">
                      <span>495.000 đ</span>
                    </div>
                  </div>
                </div>
              </li>
              <li class="full">
                <div class="item full">
                  <div class="item-img">
                    <a href="lau-vit-xiem-nau-chao-spdetail-5b4e25111517291177.html">
                      <img src="user/Files/admin/25112015/lau-vit-nau-chao-flyfood-010.png" alt="LẨU VỊT XI&#202;M NẤU CHAO" />
                    </a>
                  </div>
                  <div class="item-name">
                    <a href="lau-vit-xiem-nau-chao-spdetail-5b4e25111517291177.html"><h2 class="text-center text-uppercase distance-none" title="LẨU VỊT XI&#202;M NẤU CHAO">LẨU VỊT XI&#202;M NẤU CHAO</h2></a>
                    <div class="price text-center">
                      <span>280.000 đ</span>
                    </div>
                  </div>
                </div>

              </li>
              <li class="full">
                <div class="item full">
                  <div class="item-img">
                    <a href="ca-loc-quay-me-banh-hoi-spdetail-19c2251115165824689.html">
                      <img src="user/Files/admin/23042018/avt-ca-loc-quay-me.png" alt="C&#193; L&#211;C QUAY ME - B&#225;nh hỏi" />
                    </a>
                  </div>
                  <div class="item-name">
                    <a href="ca-loc-quay-me-banh-hoi-spdetail-19c2251115165824689.html"><h2 class="text-center text-uppercase distance-none" title="C&#193; L&#211;C QUAY ME - B&#225;nh hỏi">C&#193; L&#211;C QUAY ME - B&#225;nh hỏi</h2></a>
                    <div class="price text-center">
                      <span>220.000 đ</span>
                    </div>
                  </div>
                </div>
              </li>
              <li class="full">
                <div class="item full">
                  <div class="item-img">
                    <a href="lau-ga-tiem-ot-hiem-it-cay-spdetail-90e9031115181218947.html">
                        <img src="user/Files/admin/03112015/ga-tiem-ot-hiem-Flyfood&#32;(07).png" alt="LẨU G&#192; TIỀM ỚT HIỂM (&#237;t cay)" />
                    </a>
                  </div>
                  <div class="item-name">
                    <a href="lau-ga-tiem-ot-hiem-it-cay-spdetail-90e9031115181218947.html"><h2 class="text-center text-uppercase distance-none" title="LẨU G&#192; TIỀM ỚT HIỂM (&#237;t cay)">LẨU G&#192; TIỀM ỚT HIỂM (&#237;t cay)</h2></a>
                    <div class="price text-center">
                      <span>380.000 đ</span>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </section>
        </div>
    </div>
    <br style="margin-bottom:15px;" />
  </div>
  <section class="bottom-banner">
    <a href="ban-muon-dat-tiec-flyfood-cung-cap-mon-an-cuc-nhanh-detail-fe4d181215170131137.html">
      <img src="user/Files/admin/02072016/Banner-flyfood-footer.png" />
    </a>
  </section>
@endsection