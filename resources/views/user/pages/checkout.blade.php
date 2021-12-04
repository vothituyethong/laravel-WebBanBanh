@extends('user.layout')
@section('content')
<div class="privacy py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>KIỂM TRA ĐƠN HÀNG</span>
			</h3>
			<!-- //tittle heading -->
		
			<div class="checkout-left">
				<div class="address_form_agile mt-sm-5 mt-4">
					<h4 class="mb-sm-4 mb-3">Điền thông tin giao hàng</h4>
					<form action="{{URL::to('/save-checkout-customer')}}" method="post" class="creditly-card-form agileinfo_form">
                    {{csrf_field()}}
						<div class="creditly-wrapper wthree, w3_agileits_wrapper">
							<div class="information-wrapper">
								<div class="first-row">
									<div class="controls form-group">
                                    <?php
									$customer_id=Session::get('id_user');
									$tongtien=Session::get('tongtien');

                                    ?>
                                        <input type="hidden" class="form-control" value="{{$customer_id}}"  name="id" required="">
										<input type="hidden" class="form-control" value="1"  name="trangthai" required="">
										<input type="hidden" class="form-control" value="{{$tongtien}}"  name="tongtien" required="">
										<input class="billing-address-name form-control" type="text" name="hoten" placeholder="Họ và tên" required="">
									</div>
									<div class="w3_agileits_card_number_grids">
										<div class="w3_agileits_card_number_grid_left form-group">
											<div class="controls">
												<input type="text" class="form-control" placeholder="Số điện thoại" name="sdt" required="">
											</div>
										</div>
										<div class="w3_agileits_card_number_grid_right form-group">
											<div class="controls">
												<input type="text" class="form-control" placeholder="Địa chỉ" name="diachi" required="">
											</div>
										</div>
									</div>
									
									<div class="controls form-group">
										
									</div>
								</div>
								<button class="submit check_out btn" name="send_oder">Giao hàng đến địa chỉ này</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
    @stop