@extends('user.layout')
@section('content')
<div class="page-head_agile_info_w3l">

	</div>
	<!-- //banner-2 -->
	<!-- page -->
	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="{{URL::to('index')}}">TRANG CHỦ</a>
						<i>|</i>
					</li>
					<li>Về Chúng Tôi</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->

	<!-- about -->
	<div class="welcome py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>V</span>ề
				<span>C</span>húng
                <span>T</span>ôi</h3>
			<!-- //tittle heading -->
			<div class="row">
				<div class="col-lg-6 welcome-left">
					<h3>Chào mừng đến với H Bakery</h3>
					<h4 class="my-sm-3 my-2">Trải qua hơn 5 năm hình thành và phát triển,
H Bakery đã liên tục gặt hái được rất nhiều thành công và không ngừng lớn mạnh.</h4>
					<p>Niềm tự hào chúng tôi là thành công trong việc kết hợp những công nghệ hiện đại vào quy trình sản xuất để có thể đảm bảo sức khoẻ cho người dùng nhưng vẫn giữ được hương vị truyền thống của những chiếc bánh. H Bakery không ngừng nghiên cứu và cho ra đời nhiều loại sản phẩm bánh kẹo khác nhau để phù hợp với thị hiếu của tất cả khách hàng ở khắp mọi nơi.</p>
				</div>
				
				<div class="col-lg-6 welcome-right-top mt-lg-0 mt-sm-5 mt-4">
					
					<img src="images/abc2.jpg" class="img-fluid" alt=" ">
				</div>
			</div>
		</div>
	</div>
	<!-- //about -->

	<!-- testimonials -->
	<div class=" py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>Đ</span>ánh
				<span>G</span>ía
				<span>T</span>ừ
				<span>K</span>hách
				<span>H</span>àng
			</h3>
			<!-- tittle heading -->
			<div class="row gallery-index">
				<div class="col-sm-6 med-testi-grid">
					<div class="med-testi test-tooltip rounded p-4">
						<p>"Bánh mềm, ngon, độ ngọt vừa phải. Thanks shop nhé!"</p>
					</div>
					<div class="row med-testi-left my-5">
						<div class="col-lg-2 col-3 w3ls-med-testi-img">
							<img src="images/user.jpg" alt=" " class="img-fluid rounded-circle" />
						</div>
						<div class="col-lg-10 col-9 med-testi-txt">
							<h4 class="font-weight-bold mb-lg-1 mb-2">Tyson</h4>
							<p>fames ac turpis</p>
						</div>
					</div>
				</div>
				<div class="col-sm-6 med-testi-grid">
					<div class="med-testi test-tooltip rounded p-4">
						<p>"Tớ nhận được bánh rồi. Ngon lắm. Cảm ơn ạ!"</p>
					</div>
					<div class="row med-testi-left my-5">
						<div class="col-lg-2 col-3 w3ls-med-testi-img">
							<img src="images/user.jpg" alt=" " class="img-fluid rounded-circle" />
						</div>
						<div class="col-lg-10 col-9 med-testi-txt">
							<h4 class="font-weight-bold mb-lg-1 mb-2">Alejandra</h4>
							<p>fames ac turpis</p>
						</div>
					</div>
				</div>
				<div class="col-sm-6 med-testi-grid">
					<div class="med-testi test-tooltip rounded p-4">
						<p>"Bánh mở ra rất xinh nhé. Ăn ngon vừa miệng"</p>
					</div>
					<div class="row med-testi-left mt-sm-5 my-5">
						<div class="col-lg-2 col-3 w3ls-med-testi-img">
							<img src="images/user.jpg" alt=" " class="img-fluid rounded-circle" />
						</div>
						<div class="col-lg-10 col-9 med-testi-txt">
							<h4 class="font-weight-bold mb-lg-1 mb-2">Charles</h4>
							<p>fames ac turpis</p>
						</div>
					</div>
				</div>
				<div class="col-sm-6 med-testi-grid">
					<div class="med-testi test-tooltip rounded p-4">
						<p>"Cả nhà ăn ai cũng khen bánh ngon lại xinh nữa."</p>
					</div>
					<div class="row med-testi-left mt-5">
						<div class="col-lg-2 col-3 w3ls-med-testi-img">
							<img src="images/user.jpg" alt=" " class="img-fluid rounded-circle" />
						</div>
						<div class="col-lg-10 col-9 med-testi-txt">
							<h4 class="font-weight-bold mb-lg-1 mb-2">Jessie</h4>
							<p>fames ac turpis</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    @stop