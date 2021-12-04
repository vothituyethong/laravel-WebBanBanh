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
						<a href="index.html">Trang Chủ</a>
						<i>|</i>
					</li>
					<li>Trang chi tiết</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->

	<!-- Single Page -->
	<div class="banner-bootom-w3-agileits py-5">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>TRANG CHI TIẾT SẢN PHẨM</span></h3>
			<!-- //tittle heading -->
			<div class="row">
				<div class="col-lg-5 col-md-8 single-right-left ">
					<div class="grid images_3_of_2">
						<div class="flexslider">		
									<div class="thumb-image">
										<img style="height:450px;" src="{!! asset('image/'.$sanpham->Image) !!}" data-imagezoom="true" class="img-fluid" alt=""> </div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>

				<div class="col-lg-7 single-right-left simpleCart_shelfItem">
					<h3 class="mb-3">{{$sanpham->TenSP}}</h3>
					<p class="mb-3">
						<span class="item_price">{{number_format($sanpham->GiaMoi).' '.'VNĐ'}} </span>
						<del class="mx-2 font-weight-light">{{number_format($sanpham->Gia).' '.'VNĐ'}}</del>
						<label>Giao hàng miễn phí</label>
					</p>
					<div class="single-infoagile">
						<ul>
							<li class="mb-3">
							Tiền mặt khi giao hàng đủ điều kiện.
							</li>
							<li class="mb-3">
							Tốc độ vận chuyển đến giao hàng.
							</li>
							<li class="mb-3">
							Ưu đãi Ngân hàng Giảm giá đặc biệt 5% * với Thẻ tín dụng Axis Bank BuzzT & C
							</li>
						</ul>
					</div>
					<div class="product-single-w3l">
						<p class="my-3">
							<i class="far fa-hand-point-right mr-2"></i>
							<label>1 Year</label>Manufacturer Warranty</p>
						<ul>
							<li class="mb-1">
								3 GB RAM | 16 GB ROM | Expandable Upto 256 GB
							</li>
							<li class="mb-1">
								5.5 inch Full HD Display
							</li>
							<li class="mb-1">
								13MP Rear Camera | 8MP Front Camera
							</li>
							<li class="mb-1">
								3300 mAh Battery
							</li>
							<li class="mb-1">
								Exynos 7870 Octa Core 1.6GHz Processor
							</li>
						</ul>
						<p class="my-sm-4 my-3">
							<i class="fas fa-retweet mr-3"></i>Net banking & Credit/ Debit/ ATM card
						</p>
					</div>
					<div class="occasion-cart">
						<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
						<form action="{{URL::to('/save-cart')}}" method="POST">
						{{csrf_field()}}
								<fieldset>
									<input type="hidden" name="qty" value="1" />
									<input name="productid_hidden"  type="hidden" value="{{$sanpham->id}}"/>
									<input type="submit" name="submit" value="Add to cart" class="button" />
								</fieldset>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
							<h3 class="heading-tittle text-center font-italic">Sản Phẩm Liên Quan</h3>
							<div class="row">
							@foreach($sanpham_lienquan as $sanpham)
								<div class="col-md-4 product-men mt-5">
									<div class="men-pro-item simpleCart_shelfItem">
										<div class="men-thumb-item text-center">
											<img style="height:200px"; src="{!! asset('image/'.$sanpham->Image) !!}" alt="">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="{{route('user.single', $sanpham->id)}}"  class="link-product-add-cart">Quick View</a>
												</div>
											</div>
										</div>
										<div class="item-info-product text-center border-top mt-4">
											<h4 class="pt-1">
											<a href="{{route('user.single', $sanpham->id)}}">{{$sanpham->TenSP}}</a>
											</h4>
											<div class="info-product-price my-2">
												<span class="item_price">{{$sanpham->GiaMoi}} VNĐ</span>
												<del>{{$sanpham->Gia}} VNĐ</del>
											</div>
											<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
											<form action="{{URL::to('/save-cart')}}" method="POST">
											{{csrf_field()}}
											<fieldset>
												<input type="hidden" name="qty" value="1" />
												<input name="productid_hidden"  type="hidden" value="{{$sanpham->id}}"/>
												<input type="submit" name="submit" value="Add to cart" class="button" />
											</fieldset>
											</form>
											</div>
										</div>
									</div>
								</div>
							@endforeach
							</div>
						</div>
	
   @stop