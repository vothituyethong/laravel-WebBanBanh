@extends('user.layout')
@section('content')

		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-center">Đăng Nhập</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">

						<?php

							$customer_id=Session::get('id');

							if($customer_id!=NULL){
						?>	
							<form action="{{URL::to('/login-customer')}}" method="post">

						<?php
							}else{
						?>

							<form action="{{URL::to('/login-customer-shop')}}" method="post">
						<?php
							}		
						?>	
						{{csrf_field()}}
						<div class="form-group">
							<label class="col-form-label">Tên Tài Khoản (Email)</label>
							<input type="text" class="form-control" placeholder=" " name="Name" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Mật Khẩu</label>
							<input type="password" class="form-control" placeholder=" " name="Password" required="">
						</div>
						<div class="right-w3l">
							<input type="submit" class="form-control" value="Log in">
						</div>
						<div class="sub-w3l">
							<div class="custom-control custom-checkbox mr-sm-2">
								<input type="checkbox" class="custom-control-input" id="customControlAutosizing">
								<label class="custom-control-label" for="customControlAutosizing">Remember me?</label>
							</div>
						</div>
						<p class="text-center dont-do mt-3">Bạn Không có tài khoản?
							<a href="{{URL::to('/register')}}" data-target="#exampleModal2">
								Đăng Ký Ngay</a>
						</p>
					</form>
				</div>
			</div>
		</div>

@stop