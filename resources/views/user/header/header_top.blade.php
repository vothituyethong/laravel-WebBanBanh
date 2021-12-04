<div class="agile-main-top">
		<div class="container-fluid">
			<div class="row main-top-w3l py-2">
				<div class="col-lg-4 header-most-top">
					<p class="text-white text-lg-left text-center">Ưu đãi và giảm giá hàng đầu
						<i class="fas fa-shopping-cart ml-1"></i>
					</p>
				</div>
				<div class="col-lg-8 header-right mt-lg-0 mt-2">
					<!-- header lists -->
					<ul>
						
						<li class="text-center border-right text-white">
							
						</li>
						<li class="text-center border-right text-white">
							
						</li>

						<li class="text-center border-right text-white">
						<?php

						$customer_id=Session::get('id');

						if($customer_id!=NULL){
						?>	

							
							
							</li>
						
							<li class="text-center text-white">
							<a href="{{URL::to('/logout-checkout')}}" data-target="#exampleModal2" class="text-white">
							<i class="fas fa-sign-in-alt mr-2"></i> Đăng Xuất  </a>
							</li>

						<?php
						}else{
						?>
						
							<a href="#" data-toggle="modal" data-target="#exampleModal" class="text-white">
							<i class="fas fa-sign-in-alt mr-2"></i> Đăng Nhập </a>	
						</li>

						<li class="text-center text-white">
							<a href="#" data-toggle="modal" data-target="#exampleModal2" class="text-white">
								<i class="fas fa-sign-out-alt mr-2"></i>Đăng kí </a>
						</li>
						<?php
						}
						?>	
					</ul>
					<!-- //header lists -->
				</div>
			</div>
		</div>
	</div>

	
	<!-- //shop locator (popup) -->

	<!-- modals -->
	<!-- log in -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-center">Đăng Nhập</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
				<form action="{{URL::to('/login-customer-shop')}}" method="post">
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
	</div>
	<!-- register -->
	<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Đăng Ký</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
				<form action="{{URL::to('/add-user-shop')}}" method="POST">
					{{csrf_field()}}
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
							<label class="col-form-label">Mật Khẩu</label>
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
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- //modal -->
	<!-- //top-header -->

	<!-- header-bottom-->
	<div class="header-bot">
		<div class="container">
			<div class="row header-bot_inner_wthreeinfo_header_mid">
				<!-- logo -->
				<div class="col-md-3 logo_agile">
					<h1 class="text-center">
						<a href="{{route('user.index')}}" class="font-weight-bold font-italic">
							<img style="width:120px; height:80px;" src="{!!asset('user/images/logo.jpg')!!}" alt=" " class="img-fluid">H Bakery
						</a>
					</h1>
				</div>
				<!-- //logo -->
				<!-- header-bot -->
				<div class="col-md-9 header mt-4 mb-md-0 mb-4">
					<div class="row">
						<!-- search -->
						<div class="col-10 agileits_search">
							<form class="form-inline" action="#" method="post">
								<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" required>
								<button class="btn my-2 my-sm-0" type="submit">Tìm Kiếm</button>
							</form>
						</div>
						<!-- //search -->
						<!-- cart details -->
						<div class="col-2 top_nav_right text-center mt-sm-0 mt-2">
							<div class="wthreecartaits wthreecartaits2 cart cart box_1">
								<form action="{{URL::to('/show_cart')}}"  class="last">
								
									<button class="btn w3view-cart" type="submit" name="submit" value="">
										<i class="fas fa-cart-arrow-down"></i>
									</button>
								</form>
							</div>
						</div>
						<!-- //cart details -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- shop locator (popup) -->
	<!-- //header-bottom -->
	<!-- navigation -->
	<div class="navbar-inner">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="agileits-navi_search">
			
				</div>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				    aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto text-center mr-xl-5">
						<li class="nav-item active mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="{{route('user.index')}}">Trang Chủ
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Danh Mục Sản Phẩm
							</a>
							<div class="dropdown-menu">
								<div class="agile_inner_drop_nav_info p-4">
									<h5 class="mb-3">Sảm Phẩm Của Web</h5>
									<div class="row">
										<div class="col-sm-6 multi-gd-img">
											<ul class="multi-column-dropdown">
												<li>
													<a href="{{route('user.product1',1)}}">Sản phẩm mới</a>
												</li>
												<li>
													<a href="{{route('user.product1',3)}}">Sản phẩm bán chạy</a>
												</li>
											</ul>
										</div>
								
									</div>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Danh sách sản phẩm
							</a>
							<div class="dropdown-menu">
								<div class="agile_inner_drop_nav_info p-4">
									<h5 class="mb-3"><a href="{{route('user.product')}}">Điện Thoại</h5>
									<div class="row">
										<div class="col-sm-6 multi-gd-img">
											<ul class="multi-column-dropdown">
												<li>
													<a href="{{route('user.product2',1)}}">SamSung</a>
												</li>
												<li>
													<a href="{{route('user.product2',2)}}">iPhone</a>
												</li>
												<li>
													<a href="{{route('user.product2',3)}}">Xiaomi</a>
												</li>
												<li>
													<a href="{{route('user.product2',4)}}">Oppo</a>
												</li>
											</ul>
										</div>
								
									</div>
								</div>
							</div>
						</li>
						<li class="nav-item mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="{{route('user.about')}}">Thông tin về trang web</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="{{route('user.contact')}}">Liên Hệ</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>