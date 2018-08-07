@extends('admin.layout.master')
@section('title', __('order.admin.detail_title'))
@section('body')
<div class="row clearfix">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="card">
			<div class="header">
				<h2>
					<i class="material-icons">add</i>{{__('order.admin.show.title')}}
				</h2>
			</div>
			<div class="body">
				<form id="form_advanced_validation">
					<div class="form-group form-float">
						<div class="form-line">
							<input type="text" class="form-control" disabled="disabled"
								value="{{ $order->user->username }}"> <label class="form-label">{{__('user.admin.username')}}</label>
						</div>
					</div>
					<div class="form-group form-float">
						<div class="form-line">
							<input type="text" class="form-control" disabled="disabled"
								value="{{ $order->user->full_name }}"> <label class="form-label">{{__('user.admin.fullname')}}</label>
						</div>
					</div>
					<div class="form-group form-float">
						<div class="form-line">
							<input type="text" class="form-control" disabled="disabled"
								value="{{ $order->address }}"> <label class="form-label">{{__('order.admin.address')}}</label>
						</div>
					</div>
					<div class="form-group form-float">
						<div class="form-line">
							<input type="text" class="form-control" disabled="disabled"
								value="{{ $order->user->phone }}"> <label class="form-label">{{__('user.admin.phone')}}</label>
						</div>
					</div>
					<div class="form-group form-float">
						<div class="form-line">
							<input type="text" class="form-control" disabled="disabled"
								value="{{ $order->user->email }}"> <label class="form-label">{{__('user.admin.email')}}</label>
						</div>
					</div>
					<div class="form-group form-float">
						<div class="form-line">
							<input type="text" class="form-control" disabled="disabled"
								value="{{ $order->money_ship }}"> <label
								class="form-label">{{__('order.admin.money_ship')}}</label>
						</div>
					</div>
					<div class="form-group form-float">
						<div class="form-line">
							<input type="text" class="form-control" disabled="disabled"
								value="${objOrder.name_payment }"> <label
								class="form-label">{{__('order.admin.show.title')}}</label>
						</div>
					</div>
					<div class="form-group form-float">
						<div class="form-line">
							<select class="form-control show-tick" name="status">
									<option <c:if test="${objOrder.status ==0 }">selected</c:if> value="0">Chưa giao</option>
									<option <c:if test="${objOrder.status ==1 }">selected</c:if> value="1">Đã giao</option>
							</select> 
						 <label class="form-label" style="top: -19px">Trạng
								thái giao hàng</label>
						</div>
					</div>

					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="card">
							<div class="header">
								<h2>
									DANH SÁCH CÁC SẢN PHẨM ĐÃ MUA <small></small>
								</h2>
							</div>
							<div class="body table-responsive">
								<table class="table table-striped">
									<thead>
										<tr>
											<th>Tên Sách</th>
											<th>Số lượng</th>
											<th>Giá trên bìa</th>
											<th>Giá khuyến mãi</th>
											<th>Tổng</th>
										</tr>
									</thead>
									<tbody>
										<c:forEach items="${alDetailOrders }" var="objDetail">
											<c:choose>
												<c:when test="${objDetail.promo_price ne 0 }">
													<c:set var="sum"
														value="${objDetail.promo_price*objDetail.quantity }"></c:set>
												</c:when>
												<c:otherwise>
													<c:set var="sum"
														value="${objDetail.price*objDetail.quantity }"></c:set>
												</c:otherwise>
											</c:choose>
											<tr>
												<th scope="row">${objDetail.name_book }</th>
												<td>${objDetail.quantity }</td>
												<td>${objDetail.price }</td>
												<td>${objDetail.promo_price }</td>
												<th scope="row">${sum }</th>
											</tr>
										</c:forEach>
									</tbody>
									<c:if test="${objOrder.coupon_id ne 0 }">
										<tfoot>
											<tr>
												<th></th>
												<th></th>
												<th></th>
												<th>Mã giảm giá</th>
												<th>-${objCoupon.percent } %</th>
											</tr>
										</tfoot>
									</c:if>
								</table>
							</div>
							<div class="align-right">
								<h3 style="margin-right: 126px; padding-bottom: 25px;">
									Thành tiền: ${total} VND</h3>
							</div>
						</div>
					</div>
					<button class="btn btn-success waves-effect" type="submit">SỬA</button>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection
