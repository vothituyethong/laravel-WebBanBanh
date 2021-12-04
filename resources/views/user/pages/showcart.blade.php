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
					<li>Giỏ Hàng</li>
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
				<span>GIỎ HÀNG</span>
			</h3>
			<!-- //tittle heading -->
			<div class="checkout-right">
				<h4 class="mb-sm-4 mb-3">Sản phẩm hiện có trong giỏ hàng: 
				<?php
				$content=Cart::content();
				$soluong=0;
				foreach($content as $v_content)
					{
						$soluong=$soluong+$v_content->qty;
					}
						echo $soluong;
				?>
				</h4>

				
				<div class="table-responsive">
					<table class="timetable_sub">
						<thead>
							<tr>
								<th>Tên Sản Phẩm</th>
								<th>Hình Ảnh</th>
								<th>Số Lượng</th>
								<th>Giá</th>
								<th>Tổng Tiền</th>
								<th>Xóa</th>
							</tr>
						</thead>
						<tbody>
						@foreach($content as $v_content)
							<tr class="rem1">
								<td class="invert">{{$v_content->name}}</td>
								<td class="invert-image">
									<a href="single.html">
										<img src="{!! asset('image/'.$v_content->options->image) !!}" alt=" " class="img-responsive">
									</a>
								</td>
								<td class="invert">
									<div class="quantity">
										<div class="quantity-select">
										<form action="{{URL::to('/update-cart-quantity')}}" method="POST">
										{{csrf_field()}}
											
											<input style="text-align:center; width:50px;" type="text" value="{{$v_content->qty}}" name="cart_quantity">
											<input type="submit" value="Cập Nhật" name="update_qty" class="button">
											<input type="hidden" value="{{$v_content->rowId}}" name="rowId_cart" class="form-control">
										</form>
										</div>
									</div>
								</td>
								<td class="invert"><p>{{number_format($v_content->price).' '.'VNĐ'}}</p></td>
								<td class="invert"><p>
								<?php
									$tong=$v_content->price*$v_content->qty;
									Session::put('tongtien',$tong);
									echo number_format($tong).' '.'VNĐ';
									
								?>
								</p></td>
								<td class="invert">
									<div class="rem">
										<button ><a href="{{URL::to('/delete-to-cart/'.$v_content->rowId)}}" >Xóa</a></button>
									</div>
								</td>
							</tr>
						@endforeach
						</tbody>
					</table>
				</div>
			</div>
			<div class="checkout-left">
				<div class="address_form_agile mt-sm-5 mt-4">
					
				
					

					<?php

						$customer_id=Session::get('id');

						if($customer_id!=NULL){
					?>	
					<div class="checkout-right-basket">
						<a href="{{URL::to('/checkout')}}">Thực Hiện Thanh Toán
							<span class="far fa-hand-point-right"></span>
						</a>
					</div>

					<div class="checkout-right-basket">
						<a href="{{URL::to('user/index')}}">Tiếp tục mua hàng
							<span class="far fa-hand-point-right"></span>
						</a>
					</div>
					<?php
 					}else{
					?>

					<div class="checkout-right-basket">
						<a href="{{URL::to('/login-checkout')}}">Thực Hiện Thanh Toán
							<span class="far fa-hand-point-right"></span>
						</a>
					</div>

					<div class="checkout-right-basket">
					<a href="{{URL::to('user/index')}}">Tiếp tục mua hàng
							<span class="far fa-hand-point-right"></span>
						</a>
					</div>
					<?php
						}
					?>	




				</div>
			</div>
		</div>
	</div>
@stop