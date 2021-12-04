@extends('user.layout')
@section('content')
	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="index.html">Trang Chủ</a>
						<i>|</i>
					</li>
					<li>Hóa Đơn Đang Giao</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
	<!-- checkout page -->
	<div class="privacy py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>Hóa Đơn Đang Giao</span>
			</h3>
			<!-- //tittle heading -->
			<div class="checkout-right">
				
				<?php
				$content=Cart::content();
				$soluong=0;
				foreach($content as $v_content)
					{
						$soluong=$soluong+$v_content->qty;
					}
						
				?>
			

				
				<div class="table-responsive">
					<table class="timetable_sub">
						<thead>
							<tr>
								<th>Tên Khách Hàng</th>
								<th>Địa Chỉ Giao</th>
                                <th>Số Điện Thoại</th>
								<th>Tổng Tiền</th>
							</tr>
						</thead>
						<tbody>
						@foreach($hoadons as $hoadon)
							<tr class="rem1">
								<td class="invert">{{$hoadon->hoten}}</td>
								<td class="invert">{{$hoadon->diachi}}</td>
                                <td class="invert">{{$hoadon->sdt}}</td>
								<td class="invert">{{number_format($hoadon->thanhtien)}} VNĐ</td>
							</tr>
						@endforeach
						</tbody>
					</table>
				</div>

				<div class="checkout-left">
				<div class="address_form_agile mt-sm-5 mt-4">
					
				
					

				<div class="checkout-right-basket">
						<a href="{{route('user.index')}}">Tiếp Tục Mua Hàng
							<span class="far fa-hand-point-right"></span>
						</a>
					</div>




				</div>
			</div>
			</div>
			
		</div>
	</div>
@stop