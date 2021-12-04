@extends('user.layout')
@section('content')


		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Register</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
				<?php

					$customer_id=Session::get('id');

					if($customer_id!=NULL){
				?>	
					<form action="{{URL::to('/add-user')}}" method="POST">

				<?php
				}else{
				?>

					<form action="{{URL::to('/add-user-shop')}}" method="POST">
				<?php
				}		
				?>				
					
						<div class="form-group">
							<label class="col-form-label">Họ và tên</label>
							<input type="text" class="form-control" placeholder=" " name="HoTen" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Địa chỉ</label>
							<input type="text" class="form-control" placeholder=" " name="DiaChi" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Số điện thoại</label>
							<input type="text" class="form-control" placeholder=" " name="SDT" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Email</label>
							<input type="email" class="form-control" placeholder=" " name="Email" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Password</label>
							<input type="password" class="form-control" placeholder=" " name="Password" id="password1" required="">
							<input type="hidden" class="form-control" placeholder=" " name="Loai" id="password1" required="">
							<input type="hidden" class="form-control" placeholder=" " name="TrangThai" id="password1" required="">
						</div>
						
						
						<div class="right-w3l">
							<input type="submit" class="form-control" value="Register">
						</div>
						<div class="sub-w3l">
							<div class="custom-control custom-checkbox mr-sm-2">
								<input type="checkbox" class="custom-control-input" id="customControlAutosizing2">
								<label class="custom-control-label" for="customControlAutosizing2">I Accept to the Terms & Conditions</label>
							</div>
						</div>
						{{csrf_field()}}
					</form>
				</div>
			</div>
		</div>

@stop