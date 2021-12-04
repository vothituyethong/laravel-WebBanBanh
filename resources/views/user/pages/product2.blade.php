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
                <li>Trang Sản Phẩm</li>
            </ul>
        </div>
    </div>
</div>
<!-- //page -->

<!-- top Products -->
<div class="ads-grid py-sm-5 py-4">
    <div class="container py-xl-4 py-lg-2">
        <!-- tittle heading -->
        <h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
        @foreach($loaisp as $loai)
            <span>{{$loai->tenloai}}</span>
            @endforeach</h3>

        <!-- //tittle heading -->
        <div class="row">
            <!-- product left -->
            <div class="agileinfo-ads-display col-lg-9">
                <div class="wrapper">
                    <!-- first section -->
                   
                    <div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
                        <div class="row">
                        @foreach($sanphams as $sanpham)
                            <div style="margin-bottom: 20px;" class="col-md-4 product-men">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item text-center" style="height:230px">
                                        <img src="{!! asset('image/'.$sanpham->Image) !!}" alt="" style="height:230px;">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                            <a href="{{route('user.single', $sanpham->id)}}"  class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info-product text-center border-top mt-4">
                                        <h4 class="pt-1" style="height:60px">
                                        <a href="{{route('user.single', $sanpham->id)}}">{{$sanpham->TenSP}}</a>
                                        </h4>
                                        <div class="info-product-price my-2" style="height:50px">
                                            <span class="item_price">{{number_format($sanpham->GiaMoi).' '.'VNĐ'}}</span>
                                            <del>{{number_format($sanpham->Gia).' '.'VNĐ'}}</del>
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
          
                    <!-- //first section -->
                    <!-- second section -->
                   
                </div>
            </div>
            <!-- //product left -->
            <!-- product right -->
            <div class="col-lg-3 mt-lg-0 mt-4 p-lg-0">
					<div class="side-bar p-sm-4 p-3">
						<div class="search-hotel border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Tìm Kiếm Ở Đây..</h3>
							<form action="#" method="post">
								<input type="search" placeholder="Tên sản phẩm..." name="search" required="">
								<input type="submit" value=" ">
							</form>
						</div>
						<!-- price -->
						<div class="range border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Giá</h3>
							<div class="w3l-range">
								<ul>
									<li>
										<a href="{{route('user.index')}}">Dưới 1 000 000 VNĐ</a>
									</li>
									<li class="my-1">
										<a href="{{route('user.index')}}">$1,000 - $5,000</a>
									</li>
									<li>
										<a href="{{route('user.index')}}">$5,000 - $10,000</a>
									</li>
									<li class="my-1">
										<a href="{{route('user.index')}}">$10,000 - $20,000</a>
									</li>
									<li>
										<a href="{{route('user.index')}}">$20,000 $30,000</a>
									</li>
									<li class="mt-1">
										<a href="{{route('user.index')}}">Over $30,000</a>
									</li>
								</ul>
							</div>
						</div>
						<!-- //price -->
						<!-- discounts -->
						<div class="left-side border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Giảm giá</h3>
							<ul>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">5% trở lên</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">10% trở lên</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">20% trở lên</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">30% trở lên</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">50% trở lên</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">60% trở lên</span>
								</li>
							</ul>
						</div>
						<!-- //discounts -->
						<!-- reviews -->
						<div class="customer-rev border-bottom left-side py-2">
							<h3 class="agileits-sear-head mb-3">Đánh giá của khách hàng</h3>
							<ul>
								<li>
									<a href="{{route('user.index')}}">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<span>5.0</span>
									</a>
								</li>
								<li>
									<a href="{{route('user.index')}}">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<span>4.0</span>
									</a>
								</li>
								<li>
									<a href="{{route('user.index')}}">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star-half"></i>
										<span>3.5</span>
									</a>
								</li>
								<li>
									<a href="{{route('user.index')}}">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<span>3.0</span>
									</a>
								</li>
								<li>
									<a href="{{route('user.index')}}">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star-half"></i>
										<span>2.5</span>
									</a>
								</li>
							</ul>
						</div>
						<!-- //reviews -->
						<!-- electronics -->
						<div class="left-side border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Thiết bị điện tử</h3>
							<ul>
								
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Wearable Technology</span>
								</li>
							</ul>
						</div>
						<!-- //electronics -->
						<!-- delivery -->
						<div class="left-side border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Thanh toán khi giao hàng</h3>
							<ul>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Đủ điều kiện nhận tiền mặt khi giao hàng</span>
								</li>
							</ul>
						</div>
						<!-- //delivery -->
						<!-- arrivals -->
						
						<!-- //arrivals -->
						<!-- best seller -->
						<div class="f-grid py-2">
							<h3 class="agileits-sear-head mb-3">Bán Chạy</h3>
							<div class="box-scroll">
								<div class="scroll">
									<div class="row">
										<div class="col-lg-3 col-sm-2 col-3 left-mar">
											<img src="{!! asset('user/images/k1.jpg')!!}" alt="" class="img-fluid">
										</div>
										<div class="col-lg-9 col-sm-10 col-9 w3_mvd">
											<a href="">Samsung Galaxy On7 Prime (Gold, 4GB RAM + 64GB Memory)</a>
											<a href="" class="price-mar mt-2">3.500.000 VNĐ</a>
										</div>
									</div>
									<div class="row my-4">
										<div class="col-lg-3 col-sm-2 col-3 left-mar">
											<img src="{!! asset('user/images/k2.jpg')!!}" alt="" class="img-fluid">
										</div>
										<div class="col-lg-9 col-sm-10 col-9 w3_mvd">
											<a href="">Haier 195 L 4 Star Direct-Cool Single Door Refrigerator</a>
											<a href="" class="price-mar mt-2">12.499.000 VNĐ</a>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-3 col-sm-2 col-3 left-mar">
											<img src="{!! asset('user/images/k3.jpg')!!}" alt="" class="img-fluid">
										</div>
										<div class="col-lg-9 col-sm-10 col-9 w3_mvd">
											<a href="">Ambrane 13000 mAh Power Bank (P-1310 Premium)</a>
											<a href="" class="price-mar mt-2">11.199.000 VNĐ </a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- //best seller -->
					</div>
					<!-- //product right -->
				</div>
        </div>
    </div>
</div>
@stop