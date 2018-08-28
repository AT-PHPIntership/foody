@extends('public.layout.master')
@section('breadcrumb')
<div class="breadcrumb distance-none">
  <ul class="list-inline text-uppercase distance-none">
    <li>
      <a href="/"><i class="fa fa-home"></i></a>
      <i class="fa fa-angle-double-right"></i>
    </li>
    <li>
      <a href="">{{ __('user/category.title')}}</a>
      <i class="fa fa-angle-double-right"></i>
    </li>
    <li>
      <a href=""><h1 style="font-size:14px;padding:0;margin:0;"></h1></a>
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

        <p class="message full left text-center">Vui lòng điền các thông tin yêu cầu</p>
        <div class="dat-hang col-sm-12 distance-none" style="margin-bottom:10px;">
<form action="/thong-tin-gio-hang.html?Length=6" data-ajax="true" data-ajax-failure="hideMark" data-ajax-method="Post" data-ajax-success="checkOrder" enctype="multipart/form-data" id="_loginForm" method="post" novalidate="novalidate">                    <div class="chi-tiet-gh col-sm-4">
                    <h3 class="title text-capitalize">
                        <i class="fa fa-shopping-cart"></i>
                        Thông tin giỏ hàng
                    </h3>
                    <div class="cart-detail-wrapper">
                            <div class="box-cart cart-detail">
    <div class="box-cart-detail">
        <div class="box-cart-scroll">
            <table class="table">
                <tbody>
                        <tr>
                            <td rowspan="2" width="50">
                                <img src="/Files/admin/23042018/ga-bo-xoi-sot-tieu-xanh-flyfood.jpg" alt="GÀ BÓ XÔI 2 MÀU ÔM TRỨNG HẠT SEN – VỊ TIÊU XANH" width="50" height="50">
                            </td>
                            <td colspan="3" class="cart-name bold">
                                <span>GÀ BÓ XÔI 2 MÀU ÔM TRỨNG HẠT SEN – VỊ TIÊU XANH</span>
                                <i class="fa fa-trash-o delete_pro_in_cart_top" title="Xoá khỏi giỏ hàng" onclick="ModifyCartDetail('eb912304181808116291','delete');"></i>
                            </td>
                        </tr>
                        <tr>
                            <td width="80" class="text-right td_soluong">
                                <i class="fa fa-minus " onclick="ModifyCartDetail('eb912304181808116291','subone');"></i> <span> 1 x</span> <i class="fa fa-plus " onclick="ModifyCartDetail('eb912304181808116291','addone');"></i>
                            </td>
                            <td class="text-right">430.000 VNĐ</td>
                            <td class="text-right bold">430.000 VNĐ</td>
                        </tr>
                        <tr>
                            <td rowspan="2" width="50">
                                <img src="/Files/admin/04122015/w754-h510.jpg" alt="GÀ BÓ XÔI TRUYỀN THỐNG " width="50" height="50">
                            </td>
                            <td colspan="3" class="cart-name bold">
                                <span>GÀ BÓ XÔI TRUYỀN THỐNG </span>
                                <i class="fa fa-trash-o delete_pro_in_cart_top" title="Xoá khỏi giỏ hàng" onclick="ModifyCartDetail('d2870412151723358121','delete');"></i>
                            </td>
                        </tr>
                        <tr>
                            <td width="80" class="text-right td_soluong">
                                <i class="fa fa-minus " onclick="ModifyCartDetail('d2870412151723358121','subone');"></i> <span> 1 x</span> <i class="fa fa-plus " onclick="ModifyCartDetail('d2870412151723358121','addone');"></i>
                            </td>
                            <td class="text-right">370.000 VNĐ</td>
                            <td class="text-right bold">370.000 VNĐ</td>
                        </tr>
                </tbody>
            </table>
        </div>
        <table class="table">
            <tfoot>
                <tr>
                    <td colspan="3" class="bold"><b>Tổng cộng</b></td>
                    <td class="text-right"><b id="total-cart" class="bold" style="color:#f00;font-size:15px;" data-val="800000">800.000 VNĐ</b></td>
                </tr>
            </tfoot>
        </table>
        
    </div>
</div>

                    </div>

                </div>
<input name="__RequestVerificationToken" type="hidden" value="DD4GbsqOUBs1BT-xPYgx-cnDC5Dkv0G0P6XvVmb2K7v4WzOIAYnNRh8gHV3n0Upoi6G1NiRpUPzYuDcyG_omS4XoOjkeVTjIz9TELQz5mSs1"><input id="MAHD" name="MAHD" type="hidden" value="1F68280818093610642">                    <div class="thong-tin col-sm-4">

                    <h3 class="title text-capitalize">
                        <i class="fa fa-edit"></i>
                        Thông tin người nhận
                    </h3>
                    <span class="field-validation-valid" data-valmsg-for="DIENTHOAI" data-valmsg-replace="true"></span>
                    <div class="form-group">
                        <input class="form-control" data-val="true" data-val-length="Chiều dài 1-20" data-val-length-max="20" data-val-regex="Điện thoại không đúng định dạng" data-val-regex-pattern="^(0[1-9]{1}\d{8,9})$" data-val-required="Vui lòng nhập điện thoại" id="DIENTHOAI" name="DIENTHOAI" placeholder="Nhập điện thoại" type="text" value="">
                    </div>
                    <span class="field-validation-valid" data-valmsg-for="NGUOINHAN" data-valmsg-replace="true"></span>
                    <div class="form-group">
                        <input class="form-control" data-val="true" data-val-length="Chiều dài 1-100" data-val-length-max="100" data-val-required="Vui lòng nhập người nhận" id="NGUOINHAN" name="NGUOINHAN" placeholder="Tên người nhận" type="text" value="">
                    </div>
                    <span class="field-validation-valid" data-valmsg-for="DIACHI" data-valmsg-replace="true"></span>
                    <div class="form-group">
                        <input class="form-control" data-val="true" data-val-length="Chiều dài 1-300" data-val-length-max="300" data-val-required="Vui lòng nhập địa chỉ" id="DIACHI" name="DIACHI" placeholder="Số nhà - Tên đường" type="text" value="">
                    </div>
                    <span class="field-validation-valid" data-valmsg-for="PHUONGXA" data-valmsg-replace="true"></span>
                    <div class="form-group">
                        <input class="form-control" data-val="true" data-val-length="Chiều dài 1-300" data-val-length-max="300" data-val-required="Vui lòng nhập phường (xã)" id="PHUONGXA" name="PHUONGXA" placeholder="Phường(xã)" type="text" value="">
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <span class="field-validation-valid" data-valmsg-for="TINHTHANH" data-valmsg-replace="true"></span>
                            <div class="form-group input-group">
                                <select class="form-control" data-val="true" data-val-required="Vui lòng chọn tỉnh thành" id="TINHTHANH" name="TINHTHANH"><option value="">Chọn tỉnh thành</option>
<option value="TPHCM">TP. Hồ Chí Minh</option>
</select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <span class="field-validation-valid" data-valmsg-for="QUANHUYEN" data-valmsg-replace="true"></span>
                            <div class="form-group input-group">
                                <select class="form-control" data-val="true" data-val-required="Vui lòng chọn Quận (Huyện)" id="QUANHUYEN" name="QUANHUYEN"><option value="">Chọn Quận (Huyện)</option>
</select>
                            </div>
                        </div>
                    </div>

                    <span class="field-validation-valid" data-valmsg-for="EMAIL" data-valmsg-replace="true"></span>
                    <div class="form-group">
                        <input class="form-control" data-val="true" data-val-regex="Email không đúng định dạng" data-val-regex-pattern="^([\w\.\-]+)@([\w\-]+)((\.(\w){2,3})+)$" id="EMAIL" name="EMAIL" placeholder="Nhập email" type="text" value="">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" cols="20" id="GHICHU" name="GHICHU" placeholder="Ghi chú đơn hàng" rows="3"></textarea>
                    </div>

                </div>
                <div class="hinh-thuc col-sm-4">

                    <h3 class="title text-capitalize">
                        <i class="fa fa-money"></i>
                        Hình thức thanh toán
                    </h3>
                    <span class="field-validation-valid" data-valmsg-for="NGAYGIAO" data-valmsg-replace="true"></span>
                    <div class="form-group">
                        <div class="input-group date" id="NgayGiao">
                            <input value="" class="form-control" data-val="true" data-val-date="The field NGAYGIAO must be a date." data-val-required="Vui lòng nhập chính xác NGÀY VÀ GIỜ giao hàng" id="NGAYGIAO" name="NGAYGIAO" placeholder="Ngày giao hàng" type="text">
                            <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                        </div>
                    </div>
                    <span class="field-validation-valid" data-valmsg-for="HINHTHUC" data-valmsg-replace="true"></span>
                    <div class="form-group">
                        <select class="form-control" data-val="true" data-val-required="Vui lòng chọn hình thức thanh toán" id="HINHTHUC" name="HINHTHUC"><option value="">Chọn hình thức thanh toán</option>
<option value="COD">Thanh toán khi nhận hàng</option>
<option value="Online">Chuyển khoản ATM Online</option>
</select>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group input-group">
                                <b>Tổng tiền</b>
                            </div>
                        </div>
                        <div class="col-sm-6 text-right">
                            <span id="thanhtien" class="bold" data-val="800000">800.000</span> VNĐ
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group input-group">
                                Phí vận chuyển
                            </div>
                        </div>
                        <div class="col-sm-6 text-right">
                            <span id="phivc" class="bold">-</span> VNĐ
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group input-group">
                                Khấu trừ
                            </div>
                        </div>
                        <div class="col-sm-6 text-right">
                            <span id="khautru" class="bold">-</span> VNĐ
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group input-group">
                                <b>Tổng thanh toán</b>
                            </div>
                        </div>
                        <div class="col-sm-6 text-right">
                            <span id="tongthanhtoan" data-val="800000" class="bold">800.000</span> VNĐ
                        </div>
                    </div>
                    <div class="form-group">
                        <button onclick="showMark();" type="submit" class="right btn btn-sm btn-block btn-success text-capitalize text-center">
                            Xác nhận đơn hàng
                        </button>
                        <a href="/san-pham.html" class="right btn btn-sm btn-block btn-warning text-capitalize text-center">
                            Mua thêm hàng
                        </a>
                        <button type="button" onclick="ModifyCart('clear','clear');" class="right btn btn-sm btn-block btn-danger text-capitalize text-center">
                            Hủy đơn hàng
                        </button>                         
                    </div>
                </div>
</form>            </div>

</div>
<div class="modal fade" id="modalbank" tabindex="-1" role="dialog" aria-labelledby="modalbank" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            <h3 class="modal-title text-center text-uppercase lead" id="modalbank">Thông tin chuyển khoản</h3>
        </div>
        <div class="modal-body">

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <p id="modal-message">Quý khách thanh toán ATM Online, vui lòng chuyển khoản theo thông tin sau</p>
                            <p>
                                <b>1. Ngân hàng Vietcombank</b><br>
                                Số Tài Khoản: 0441000696530<br>
                                Chủ Tài Khoản: Trần Thị Phương Diễm<br>
                                Chi nhánh: Vietcombank Lê Văn Sỹ - Tân Bình - TP.HCM<br>
                            </p>
                            <p>
                                <b>2. Ngân hàng Sacombank</b><br>
                                Số Tài Khoản: 060091907197<br>
                                Chủ Tài Khoản: Trần Thị Phương Diễm<br>
                                Chi nhánh: Sacombank Lê Văn Sỹ - Tân Bình - TP.HCM<br>
                            </p>
                            <p>
                                <b>3. Ngân hàng Techcombank</b><br>
                                Số Tài Khoản: 19032522344011<br>
                                Chủ Tài Khoản: Trần Thị Phương Diễm<br>
                                Chi nhánh: Techcombank Tân Bình - TP.HCM<br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


    <section class="bottom-banner">
            <a href="http://flyfood.vn/ban-muon-dat-tiec-flyfood-cung-cap-mon-an-cuc-nhanh-detail-fe4d181215170131137.html">
                <img src="/Files/admin/02072016/Banner-flyfood-footer.png">
            </a>
    </section>
@endsection
@section('js')
<script src="/js/public/product.js"></script>
@endsection