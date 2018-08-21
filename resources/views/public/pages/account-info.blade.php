@extends('public.layout.master')
<div class="banner" style="margin-top:10px; display:block !important;">
  <p class="message full left text-center">Vui lòng điền đầy đủ thông tin</p>
  <div class="row">
    <div class="col-lg-12 left full">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="row">
            <div class="col-lg-6" style="width:100%;">
              <form action="/TaiKhoan/CapNhatTaiKhoan?Length=8" data-ajax="true" data-ajax-failure="checkMember" data-ajax-method="Post" data-ajax-success="checkMember" enctype="multipart/form-data" id="_loginForm" method="post"><input name="__RequestVerificationToken" type="hidden" value="yww00Ex6YO3dupzkgwNRAnPbiYtjRaJ_nJ-wJJ9MSUrjGhPsUNgzUiZ5JJ3LuGNdY91BWk3WYp4RAWgTC-LzLV1JnILJJEnPWrOjax4hSpg1" />                                        <div class="row">
                <div class="col-lg-4">
                  <span class="field-validation-valid" data-valmsg-for="TENDANGNHAP" data-valmsg-replace="true"></span>
                  <div class="form-group">
                    <label for="disabledSelect">Tên đăng nhập</label>
                    <input class="form-control" data-val="true" data-val-length="chiều dài 1-100" data-val-length-max="100" data-val-regex="Tên đăng nhập phải là chữ hoặc số" data-val-regex-pattern="([a-zA-Z0-9 .&amp;&#39;-]+)" data-val-required="Vui lòng nhập tên đăng nhập" id="TENDANGNHAP" name="TENDANGNHAP" placeholder="Tên đăng nhập" readonly="readonly" type="text" value="hienat" />
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
                    <input class="form-control" data-val="true" data-val-length="Chiều dài 1-100" data-val-length-max="100" data-val-required="Vui lòng nhập họ tên" id="HOTEN" name="HOTEN" placeholder="Họ tên" type="text" value="minh hien" />
                  </div>
                </div>
                  </div>
              <div class="row">
                <div class="col-lg-4">
                  <span class="field-validation-valid" data-valmsg-for="GIOITINH" data-valmsg-replace="true"></span>
                  <div class="form-group">
                    <label for="disabledSelect">Giới tính</label>
                    <select class="form-control" data-val="true" data-val-required="Vui lòng chọn giới tính" id="GIOITINH" name="GIOITINH"><option value="">Chọn giới t&#237;nh</option>
                      <option selected="selected" value="False">Nữ</option>
                      <option value="True">Nam</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-4">
                  <span class="field-validation-valid" data-valmsg-for="DIENTHOAI" data-valmsg-replace="true"></span>
                  <div class="form-group">
                    <label for="disabledSelect">Điện thoại</label>
                    <input class="form-control" data-val="true" data-val-length="Chiều dài 1-20" data-val-length-max="20" data-val-regex="Điện thoại không đúng định dạng" data-val-regex-pattern="^(0[1-9]{1}\d{8,9})$" id="DIENTHOAI" name="DIENTHOAI" placeholder="Điện thoại" type="text" value="0905123456" />
                  </div>
                </div>
                <div class="col-lg-4">
                  <span class="field-validation-valid" data-valmsg-for="EMAIL" data-valmsg-replace="true"></span>
                  <div class="form-group">
                    <label for="disabledSelect">Email</label>
                    <input class="form-control" data-val="true" data-val-regex="Email không đúng định dạng" data-val-regex-pattern="^([\w\.\-]+)@([\w\-]+)((\.(\w){2,3})+)$" data-val-required="Vui lòng nhập Email" id="EMAIL" name="EMAIL" placeholder="Email" type="text" value="hien@gmail.com" />
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