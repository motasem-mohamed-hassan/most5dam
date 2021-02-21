@extends('layouts.master')

@section('panner')
<!-- banner -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<!-- Indicators-->
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1" class=""></li>
		<li data-target="#myCarousel" data-slide-to="2" class=""></li>
		<li data-target="#myCarousel" data-slide-to="3" class=""></li>
	</ol>
	<div class="carousel-inner" >
		<div class="item active item1" >
			<div class="container">
				<div class="carousel-caption">
					{{-- <h3>حفظ
						<span>كبير</span>
					</h3>
					<p>احصل علي شقة
						<span>10%</span> كاش
					</p>
					<a class="button2" href="{{ asset('frontend/') }}product.html">تسوق الان </a> --}}
				</div>
			</div>
		</div>
		<div class="item item2" >
			<div class="container">
				<div class="carousel-caption">
					{{-- <h3>ادخار
						<span>صحي</span>
					</h3>
					<p>اعلي من
						<span>30%</span> خصم
					</p>
					<a class="button2" href="{{ asset('frontend/') }}product.html"> تسوق الان</a> --}}
				</div>
			</div>
		</div>
		<div class="item item3" >
			<div class="container">
				<div class="carousel-caption">
					{{-- <h3>صفقة
						<span>كبيرة</span>
					</h3>
					<p>احصل علي خصم
						<span>20%</span> خصم
					</p>

					<a class="button2" href="{{ asset('frontend/') }}product.html">تسوق الان </a> --}}
				</div>
			</div>
		</div>
		<div class="item item4"  >
			<div class="container">
				<div class="carousel-caption">
					{{-- <h3>خصم
						<span>اليوم</span>
					</h3>
					<p>احصل الان
						<span>40%</span> خصم
					</p>
					<a class="button2" href="{{ asset('frontend/') }}product.html"> تسوق الان</a> --}}
				</div>
			</div>
		</div>
	</div>

	<a class="left carousel-control" href="{{ asset('frontend/') }}#myCarousel" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="{{ asset('frontend/') }}#myCarousel" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>
@endsection

@section('content')

	<!-- top Products -->
	<div class="ads-grid">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">جميع المنتجات
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
            <!-- //tittle heading -->
            <div>
                <div class="agileinfo-ads-display col-md-9">
                    <div class="wrapper">
                        @foreach ($products->chunk(3) as $chunk)
                            <div class="product-sec1">
                                @foreach ($chunk as $product)
                                <div class="col-md-4 product-men">
                                    <div class="men-pro-item simpleCart_shelfItem">
                                        <div class="men-thumb-item">
                                            <img src="{{ asset('storage/products/'.$product->first_image->url) }}" style="width: 100%; height:40vh">
                                            <div class="men-cart-pro">
                                                <div class="inner-men-cart-pro">
                                                    <a href="{{ route('profile', $product->user_id) }}" class="link-product-add-cart">تواصل مع البائع</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-info-product text-center border-top mt-4">
                                            <h4 class="pt-1">
                                                <a href="{{ route('singleProduct', $product->id) }}">{{ $product->name }}</a>
                                            </h4>
                                            <div class="info-product-price my-2">
                                                <span class="item_price">${{ $product->price }}</span>
                                            </div>
                                            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                                    <fieldset >
                                                        <a href="{{ route('singleProduct', $product->id) }}" class="btn btn-success" id="product-page" >صفحة المنتج</a>
                                                    </fieldset>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        @endforeach
                        <div class="clearfix"></div>
                    </div>
                @endforeach
                </div>
            </div>
            <!-- //product right -->

            <!-- product left -->
            <div class="side-bar col-md-3">
                <form action="{{ route('home') }}" method="GET">
                    <button type="submit" class="col-md-4" style="width: 30%;border-radius:0.5rem">تأكيد</button>
                    <select class="col-md-8" name="sortby" style="width: 65%;border-radius:0.5rem;padding:0.1rem;direction:rtl">
                        <option disabled disabled selected>ترتيب حسب ..</option>
                        <option value="asc">الأقل سعر</option>
                        <option value="desc">الأعلى سعر</option>
                        <option value="newest">الأحدث</option>
                    </select>
                </form>
                <br>

                <form action="{{ route('home') }}" method="get" style="direction: rtl">
                    <div class="search-hotel">
                        <h3 class="agileits-sear-head">بحث في الصفحة</h3>
                            <input type="search" name="search" placeholder="اسم المنتج" style="width: 100%;border-radius:1rem">
                            <button type="submit" class="btn btn-primary" style="width: 100%" id="submitToRange">نفذ</button>
                    </div>
                </form>

                <!-- price range -->
                <form style="direction: rtl">
                    <div class="range">
                        <h3 class="agileits-sear-head">تحديد السعر</h3>
                        <ul class="dropdown-menu6">
                            <li>
                                <div id="slider-range"></div>
                                <input type="text"  id="amount" name="pricerange" style="border: 0; color: #ffffff; font-weight: normal;" />
                            </li>
                        </ul>
                    </div>
                    <button type="submit" class="btn btn-primary" style="width: 100%" id="submitToRange">نفذ</button>
                </form>
                <hr>
                <!-- //price range -->
                <!-- cuisine -->
                <div class="left-side" style="direction: rtl">
                    <h3 class="agileits-sear-head">الاقسام الرئيسية</h3>
                    <ul>
                        @foreach($categories as $category)
                        <li>
                            <div id="index-items">
                            <a  href="{{ route('categoryPage', $category->id) }}" class="span" style="text-decoration: none">{{ $category->الاسم }}</a>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <!-- //deals -->
            </div>
        </div>
        <!-- //top products -->
    </div>
    @endsection




