@extends('public.layout.master')
@section('breadcrumb')
<div class="breadcrumb distance-none">
  <ul class="list-inline text-uppercase distance-none">
    <li>
      <a href="/"><i class="fa fa-home"></i></a>
      <i class="fa fa-angle-double-right"></i>
    </li>
      <li>
      <a href="/san-pham.html">{{ __('user/category.title')}}</a>
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
  {{-- <div class="banner" style="margin-top:10px; display:block !important;">
    <p class="message full left text-center">You are not login!</p>
  </div> --}}
  <div class="banner" style="margin-top:10px; display:block !important;">
    <p class="message full left text-center">Vui lòng điền đầy đủ thông tin</p>
    <div class="row">
      <div class="col-lg-12 left full">
        <div class="panel panel-default">
          <div class="panel-body">
            <div class="row">
              <div class="col-lg-6" style="width:100%;">
                <form action="" data-ajax="true" data-ajax-failure="checkMember" data-ajax-method="Post" data-ajax-success="checkMember" enctype="multipart/form-data" id="profileForm" method="post"><input name="__RequestVerificationToken" type="hidden" value="yww00Ex6YO3dupzkgwNRAnPbiYtjRaJ_nJ-wJJ9MSUrjGhPsUNgzUiZ5JJ3LuGNdY91BWk3WYp4RAWgTC-LzLV1JnILJJEnPWrOjax4hSpg1" />                                        <div class="row">
                  <div class="col-lg-4">
                    <span class="field-validation-valid" data-valmsg-for="TENDANGNHAP" data-valmsg-replace="true"></span>
                    <div class="form-group">
                      <label for="disabledSelect">Tên đăng nhập</label>
                      <input class="form-control" data-val="true" data-val-length="chiều dài 1-100" data-val-length-max="100" data-val-regex="Tên đăng nhập phải là chữ hoặc số" data-val-regex-pattern="([a-zA-Z0-9 .&amp;&#39;-]+)" data-val-required="Vui lòng nhập tên đăng nhập" id="userNameInfo" name="TENDANGNHAP" placeholder="Tên đăng nhập" readonly="readonly" type="text" value="" />
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <input data-val="true" data-val-length="chiều dài 8-50" data-val-length-max="50" data-val-length-min="8" data-val-required="Vui lòng nhập mật khẩu" id="MATKHAU" name="MATKHAU" type="hidden" value="caa7e39f15498ebc6d1cabf992d78929f46f91c3" />
                    <span class="field-validation-valid" data-valmsg-for="_MATKHAU" data-valmsg-replace="true"></span>
                    <div class="form-group">
                      <label>Mật khẩu</label>
                      <input class="form-control" name="_MATKHAU" placeholder="Mật khẩu mới" type="password" />
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <span class="field-validation-valid" data-valmsg-for="HOTEN" data-valmsg-replace="true"></span>
                    <div class="form-group">
                      <label for="disabledSelect">Họ tên</label>
                      <input class="form-control" data-val="true" data-val-length="Chiều dài 1-100" data-val-length-max="100" data-val-required="Vui lòng nhập họ tên" id="fullNameInfo" name="HOTEN" placeholder="Họ tên" type="text"/>
                    </div>
                  </div>
                    </div>
                <div class="row">
                  <div class="col-lg-4">
                    <span class="field-validation-valid" data-valmsg-for="GIOITINH" data-valmsg-replace="true"></span>
                    <div class="form-group">
                      <label for="disabledSelect">Giới tính</label>
                      <select class="form-control" data-val="true" data-val-required="Vui lòng chọn giới tính" id="genderInfo" name="GIOITINH"><option value="">Chọn giới t&#237;nh</option>
                        <option selected="selected" value=""></option></option>
                        <option value=""></option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <span class="field-validation-valid" data-valmsg-for="DIENTHOAI" data-valmsg-replace="true"></span>
                    <div class="form-group">
                      <label for="disabledSelect">Điện thoại</label>
                      <input class="form-control" data-val="true" data-val-length="Chiều dài 1-20" data-val-length-max="20" data-val-regex="Điện thoại không đúng định dạng" data-val-regex-pattern="^(0[1-9]{1}\d{8,9})$" id="phoneN" name="DIENTHOAI" placeholder="Điện thoại" type="text" value="0905123456" />
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <span class="field-validation-valid" data-valmsg-for="EMAIL" data-valmsg-replace="true"></span>
                    <div class="form-group">
                      <label for="disabledSelect">Email</label>
                      <input class="form-control" data-val="true" data-val-regex="Email không đúng định dạng" data-val-regex-pattern="^([\w\.\-]+)@([\w\-]+)((\.(\w){2,3})+)$" data-val-required="Vui lòng nhập Email" id="email" name="EMAIL" placeholder="Email" type="text" value="hien@gmail.com" />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <span class="field-validation-valid" data-valmsg-for="DIACHI" data-valmsg-replace="true"></span>
                    <div class="form-group">
                      <label for="disabledSelect">Địa chỉ</label>
                      <textarea class="form-control" cols="20" data-val="true" data-val-length="Chiều dài 1-200" data-val-length-max="200" data-val-required="Vui lòng nhập Địa chỉ" id="DIACHI" name="DIACHI" placeholder="Địa chỉ" rows="3">
                          </textarea>
                    </div>
                  </div>
                  <input data-val="true" data-val-required="The TRANGTHAI field is required." id="TRANGTHAI" name="TRANGTHAI" type="hidden" value="True" />
                </div>
                  <button type="submit" class="btn btn btn-success"><i class="fa fa-sign-in" ></i>Cập nhật</button>
                  <a href="/thong-tin-tai-khoan.html" class="btn btn btn-danger"><i class="fa fa-close"></i>Hủy</a>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<section class="bottom-banner">
  <a href="ban-muon-dat-tiec-flyfood-cung-cap-mon-an-cuc-nhanh-detail-fe4d181215170131137.html">
    <img src="user/Files/admin/02072016/Banner-flyfood-footer.png" />
  </a>
</section>
@endsection
@section('js')
  <script src="/js/public/category.js"></script>
  <script src="/js/public/userInfo.js"></script>
@endsection
