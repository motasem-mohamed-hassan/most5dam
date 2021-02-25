@extends('layouts.master')


@section('content')

	<!-- Single Page -->
	<div class="banner-bootom-w3-agileits">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">{{ $product->category->الاسم }}
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<div class="col-md-5 single-right-left ">
				<div class="grid images_3_of_2">
					<div class="flexslider">
						<ul class="slides">
                            @foreach ($images as $image)
                            <li data-thumb="{{ asset('storage/products/'.$image->url) }}">
								<div class="thumb-image">
									<img src="{{ asset('storage/products/'.$image->url) }}" data-imagezoom="true" class="img-responsive" alt=""> </div>
							</li>

                            @endforeach
						</ul>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<div class="col-md-7 single-right-left simpleCart_shelfItem" style="direction: rtl">
				<h3>{{ $product->model }}</h3>
				<p>
                    <span class="item_price">${{ $product->price }}</span>
				</p>
				<div class="product-single-w3l">
                    @foreach($product->category->filters as $key => $filter)
                    @if($key > 1)
					<ul>
                        <p>
                            <i class="fa fa-hand-o-left" aria-hidden="true"></i>{{ $filter->الاسم }} :
                            {{ $product->{$filter->name} }}
                        </p>
                    </ul>
                    @endif
                    @endforeach
                </div>
                @if($product->user_id == Auth::id())
                <div>
                    <form action="{{ route('edit_product', $product->id) }}" method="get" style="display: inline-block">
                        <button type="submit" class="btn btn-info">تعديل</button>
                    </form>

                    <form action="{{ route('delete_product', $product->id) }}" method="POST" style="display: inline-block">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">مسح</button>
                    </form>

                </div>
                @else
                <div>
                    <button class="btn btn-success">تواصل مع البائع</button>
                </div>
                @endif
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
    <!-- //Single Page -->

    <!--End review cart -->

	<!-- more products -->
	<div class="featured-section" id="projects">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Add More
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<div class="content-bottom-in">
				<ul id="flexiselDemo1">

                    @foreach ($product->category->products as $pro)
                    <li>
						<div class="w3l-specilamk">
							<div class="speioffer-agile">
								<a href="{{ route('singleProduct', $pro->id) }}">
									<img src="{{ asset('storage/products/'.$pro->first_image->url) }}" style="width: 100px">
								</a>
							</div>
							<div class="product-name-w3l">
								<h4>
									<a href="{{ route('singleProduct', $pro->id) }}">{{ $pro->name }}</a>
								</h4>
								<div class="w3l-pricehkj">
                                    <h6>${{ $pro->price }}</h6>
								</div>
							</div>
						</div>
					</li>
                    @endforeach
				</ul>
			</div>
		</div>
	</div>
	<!-- //more products -->


@endsection

