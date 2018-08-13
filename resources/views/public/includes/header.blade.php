<header>
  <div class="container wrapper distance-none header-top-wrapper">
    <section class="header-top">
      <div class="logo">
        <a href="index.html">
            <img src="Files/Images/logo-flyfood-2017.png" alt="FlyFood" />
        </a>
      </div>
      <div class="search">
        <div class="form-group input-group distance-none">
          <input id="txtsearchFull" type="text" class="form-control" placeholder="Từ khóa tìm kiếm...">
          <span class="input-group-btn">
            <button class="btn btn-default" type="button" onclick="Search('/');">
              <i class="fa fa-search"></i>
            </button>
          </span>
        </div>
      </div>
      <div class="right header-info">
        <ul class="list-inline">
          <li>
            <img src="Files/Images/hotro.png">
            <h2>Tổng đài đặt hàng</h2>
            <p>Vui lòng gọi: (028)39.911.911</p>
          </li>
          <li>
            <img src="Files/Images/vanchuyen.png">
            <h2>Khu vực giao hàng</h2>
            <p>Đơn hàng từ 1000k - Miễn phí giao hàng</p>
          </li>
        </ul>
      </div>
    </section>
  </div>
  <div class="header-line container distance-none full">
    <div class="container wrapper">
      <ul class="menu-right list-inline right distance-none">
        <li class="login" onclick="LoginPopup();">
            <i class="fa fa-sign-in"></i>Đăng nhập
        </li>
        <li class="singin" onclick="SinginPopup();">
            <i class="fa fa-edit"></i>Đăng ký
        </li>
        <li class="shopping-cart" id="shopping-cart">
          <i class="fa fa-shopping-cart"></i>
          <span class="shopping-cart-show"> Giỏ hàng (0)</span>
          <script>
            $('.shopping-cart-show').click(function () {
              $('.box-cart').toggleClass("active");
            });
            $('.thugon-cart').click(function () {
              $('.box-cart').toggleClass("active");
            });
          </script>
        </li>
      </ul>
    </div>
  </div>
  <section class="header-bottom container-fluid">
    <div class="container distance-none wrapper">
      <div class="menu-top">
        <i style="font-size:20px;" class="fa fa-navicon"></i><a class="danhmuc" style="color:#fff;" href="san-pham.html"><span>Chọn danh mục sản phẩm</span></a>
        <div class="list-menu">
          <ul class="list-inline">
            <li>
                <a href="thuc-don-mon-ga-sp-a49b241015103551773.html">Thực đơn m&#243;n g&#224;</a>
            </li>
            <li>
                <a href="thuc-don-mon-lau-sp-caff241015103610505.html">Thực đơn m&#243;n lẩu</a>
            </li>
            <li>
                <a href="thuc-don-mon-bo-heo-de-sp-bc74040516113328973.html">Thực đơn m&#243;n B&#242;, Heo, D&#234;</a>
            </li>
            <li>
                <a href="thuc-don-mon-khai-vi-sp-acb1241115180300482.html">Thực đơn m&#243;n khai vị</a>
            </li>
            <li>
                <a href="thuc-don-mon-sup-sp-29a4290816095253904.html">Thực đơn m&#243;n s&#250;p</a>
            </li>
            <li>
                <a href="thuc-don-mon-goi-sp-87cc290816095207553.html">Thực đơn m&#243;n gỏi</a>
            </li>
            <li>
                <a href="thuc-don-mon-ca-sp-1170241015103603808.html">Thực đơn m&#243;n c&#225;</a>
            </li>
            <li>
                <a href="thuc-don-gia-re-sp-4ad4140418114644336.html">THỰC ĐƠN GI&#193; RẺ</a>
            </li>
            <li>
                <a href="thuc-don-tiec-nho-nhanh.html">Thực đơn tiệc nhanh</a>
            </li>
            <li>
                <a href="thuc-don-mon-tiec-tron-goi.html">Tiệc trọn gói</a>
            </li>
            <li>
                <a href="bang-gia-cap-nhat-tat-ca-cac-mon-an-tiec-tai-flyfood-detail-830629061616161182.html">Bảng giá món ăn</a>
            </li>
            <li>
                <a href="thong-tin-lien-he.html">Liên hệ</a>
            </li>
            <li class="show-menu" onclick="showmenu(this);">
                <span class="fa fa-angle-double-down"></span>
                <a href="index.html#">Tin tức - Sự kiện</a>
                <ul class="list-inline">
                  <li>
                      <a href="tin-tuc-flyfood-news-6d67291015091916974.html">Tin tức FlyFood</a>
                  </li>
                  <li>
                      <a href="goc-su-kien-news-5063291015091911202.html">G&#243;c Sự kiện</a>
                  </li>
                  <li>
                      <a href="goc-am-thuc-news-8288291015091904494.html">G&#243;c ẩm thực</a>
                  </li>
                  <li>
                      <a href="goc-bao-chi-news-0916291015091858129.html">G&#243;c b&#225;o ch&#237;</a>
                  </li>
                  <li>
                      <a href="tuyen-dung-news-cd11291015091853152.html">Tuyển dụng</a>
                  </li>
                  <li>
                      <a href="goc-cam-nhan.html">Góc cảm nhận</a>
                  </li>
                </ul>
            </li>
            <li class="show-menu" onclick="showmenu(this);">
              <span class="fa fa-angle-double-down"></span>
              <a href="index.html#">Chính sách - Điều khoản</a>
              <ul class="list-inline">
                <li>
                  <a href="khu-vuc-giao-hang-detail-195a011115171657805.html">Khu vực giao hàng</a>
                </li>
                <li>
                  <a href="quy-trinh-huong-dan-dat-hang-online-tai-flyfoodvn-detail-81d1180116115450489.html">Hướng dẫn mua hàng</a>
                </li>
                <li>
                  <a href="dieu-khoan-su-dung-website-flyfood-detail-28cf180116111951153.html">Điều khoản sử dụng</a>
                </li>
                <li>
                  <a href="chinh-sach-bao-mat-flyfood-detail-4ed3180116110956315.html">Chính sách bảo mật</a>
                </li>
                <li>
                  <a href="nhan-dien-thuong-hieu-flyfood-detail-86ef180116110049580.html">Nhận diện thương hiệu</a>
                </li>
              </ul>
            </li>
            <li class="show-menu" onclick="showmenu(this);">
              <span class="fa fa-angle-double-down"></span>
              <a href="index.html#">Tài khoản - Đơn hàng</a>
              <ul class="list-inline">
                <li>
                  <a href="thong-tin-tai-khoan.html">Thông tin tài khoản</a>
                </li>
                <li>
                  <a href="thong-tin-don-hang.html">Thông tin đơn hàng</a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="search-mobile">
          <div class="form-group input-group distance-none">
            <input id="txtsearchMobile" type="text" class="form-control" placeholder="Từ khóa tìm kiếm...">
            <span class="input-group-btn">
              <button style="margin-top:-11px;" class="btn btn-default" type="button" onclick="Search('/');">
                <i class="fa fa-search"></i>
              </button>
            </span>
          </div>
        </div>
      </div>
      <ul class="menu list-inline left distance-none">
        <li>
          <a href="Home/Index.html"><i style="font-size:20px;" class="fa fa-home"></i></a>
        </li>
        <li>
          <a href="gioi-thieu.html">Giới thiệu</a>
        </li>
        <li>
          <a href="thuc-don-tiec-nho-nhanh.html">Món ăn mỗi ngày</a>
        </li>
        <li>
          <a href="thuc-don-mon-tiec-tron-goi.html">Tiệc trọn gói</a>
        </li>
        <li>
          <a href="tin-tuc-flyfood.html">Tin tức</a>
        </li>
        <li>
          <a href="khu-vuc-giao-hang-detail-195a011115171657805.html">Khu vực giao hàng</a>
        </li>
        <li>
          <a href="thong-tin-lien-he.html">Liên hệ</a>
        </li>
      </ul>
    </div>
  </section>
</header>