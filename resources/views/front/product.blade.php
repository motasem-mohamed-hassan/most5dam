@extends('layouts.master')


@section('content')

	<!-- page -->
	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="{{ route('home') }}">الرئيسية</a>
						<i>|</i>
					</li>
					<li>
                       <a href="{{ route('categoryPage', $product->category->id) }}"> {{ $product->category->name }} </a>
                        <i>|</i>
                    </li>
                    <li>
                        {{ $subCategory->name }}
                        <i>|</i>
                    </li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
	<!-- Single Page -->
	<div class="banner-bootom-w3-agileits">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">{{ $product->name }}
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
				<h3>{{ $product->name }}</h3>
				<p>
                    <span class="item_price">${{ $product->price }}</span>
				</p>
				<div class="product-single-w3l">
                    @isset($product->manufactureYear)
					<ul>
                        <p>
                            <i class="fa fa-hand-o-left" aria-hidden="true"></i>سنة التصنيع :
                            {{ $product->manufactureYear }}
                        </p>
                    </ul>
                    @endisset
                    @isset($product->wheelType)
                    <ul>
                        <p>
                            <i class="fa fa-hand-o-left" aria-hidden="true"></i>نوع الدفع :
                            {{ $product->wheelType }}
                        </p>
                    </ul>
                    @endisset
                    @isset($product->product)
					<ul>
                        <p>
                            <i class="fa fa-hand-o-left" aria-hidden="true"></i>نوع المنتج :
                            {{ $product->product }}
                        </p>
                    </ul>
                    @endisset
                    @isset($product->machinesPlace)
					<ul>
                        <p>
                            <i class="fa fa-hand-o-left" aria-hidden="true"></i>مكان المكائن :
                            {{ $product->machinesPlace }}
                        </p>
                    </ul>
                    @endisset
                    @isset($product->machinesType)
					<ul>
                        <p>
                            <i class="fa fa-hand-o-left" aria-hidden="true"></i>نوع المكائن :
                            {{ $product->machinesType }}
                        </p>
                    </ul>
                    @endisset
                    @isset($product->machinesPower)
					<ul>
                        <p>
                            <i class="fa fa-hand-o-left" aria-hidden="true"></i>قوة المكائن :
                            {{ $product->machinesPower }}
                        </p>
                    </ul>
                    @endisset
                    @isset($product->machinesAge)
					<ul>
                        <p>
                            <i class="fa fa-hand-o-left" aria-hidden="true"></i>عمر المكائن :
                            {{ $product->machinesAge }}
                        </p>
                    </ul>
                    @endisset
                    @isset($product->capleType)
					<ul>
                        <p>
                            <i class="fa fa-hand-o-left" aria-hidden="true"></i>نوع الكابل :
                            {{ $product->capleType }}
                        </p>
                    </ul>
                    @endisset
                    @isset($product->age)
					<ul>
                        <p>
                            <i class="fa fa-hand-o-left" aria-hidden="true"></i>العمر :
                            {{ $product->age }}
                        </p>
                    </ul>
                    @endisset
                    @isset($product->transmissionType)
					<ul>
                        <p>
                            <i class="fa fa-hand-o-left" aria-hidden="true"></i>نوع القير :
                            {{ $product->transmissionType }}
                        </p>
                    </ul>
                    @endisset
                    @isset($product->kilometers)
					<ul>
                        <p>
                            <i class="fa fa-hand-o-left" aria-hidden="true"></i>عدد الكيلومتر :
                            {{ $product->kilometers }}
                        </p>
                    </ul>
                    @endisset
                    @isset($product->engineCapacity)
					<ul>
                        <p>
                            <i class="fa fa-hand-o-left" aria-hidden="true"></i>سعة المحرك :
                            {{ $product->engineCapacity }}
                        </p>
                    </ul>
                    @endisset
                    @isset($product->screensize)
					<ul>
                        <p>
                            <i class="fa fa-hand-o-left" aria-hidden="true"></i>حجم الشاشة :
                            {{ $product->screensize }}
                        </p>
                    </ul>
                    @endisset
                    @isset($product->memory)
					<ul>
                        <p>
                            <i class="fa fa-hand-o-left" aria-hidden="true"></i>الميموري :
                            {{ $product->memory }}
                        </p>
                    </ul>
                    @endisset
                    @isset($product->storage)
					<ul>
                        <p>
                            <i class="fa fa-hand-o-left" aria-hidden="true"></i>سعة التخزين :
                            {{ $product->storage }}
                        </p>
                    </ul>
                    @endisset
                    @isset($product->generation)
					<ul>
                        <p>
                            <i class="fa fa-hand-o-left" aria-hidden="true"></i>الجيل :
                            {{ $product->generation }}
                        </p>
                    </ul>
                    @endisset
                    @isset($product->color)
					<ul>
                        <p>
                            <i class="fa fa-hand-o-left" aria-hidden="true"></i>اللون :
                            {{ $product->color }}
                        </p>
                    </ul>
                    @endisset
                    @isset($product->accessories)
					<ul>
                        <p>
                            <i class="fa fa-hand-o-left" aria-hidden="true"></i>الملحقات :
                            {{ $product->accessories }}
                        </p>
                    </ul>
                    @endisset
                    @isset($product->processor)
					<ul>
                        <p>
                            <i class="fa fa-hand-o-left" aria-hidden="true"></i>المعالج :
                            {{ $product->processor }}
                        </p>
                    </ul>
                    @endisset
                    @isset($product->coolingPower)
					<ul>
                        <p>
                            <i class="fa fa-hand-o-left" aria-hidden="true"></i>قوة التبريد :
                            {{ $product->coolingPower }}
                        </p>
                    </ul>
                    @endisset
                    @isset($product->coolingType)
					<ul>
                        <p>
                            <i class="fa fa-hand-o-left" aria-hidden="true"></i>نوع التبريد :
                            {{ $product->coolingType }}
                        </p>
                    </ul>
                    @endisset
                    @isset($product->capacitance)
					<ul>
                        <p>
                            <i class="fa fa-hand-o-left" aria-hidden="true"></i>السعة :
                            {{ $product->capacitance }}
                        </p>
                    </ul>
                    @endisset
                    @isset($product->megapixel)
					<ul>
                        <p>
                            <i class="fa fa-hand-o-left" aria-hidden="true"></i>ميجابيكسل :
                            {{ $product->megapixel }}
                        </p>
                    </ul>
                    @endisset
                    @isset($product->screenType)
					<ul>
                        <p>
                            <i class="fa fa-hand-o-left" aria-hidden="true"></i>نوع الشاشة :
                            {{ $product->screenType }}
                        </p>
                    </ul>
                    @endisset
                    @isset($product->length)
					<ul>
                        <p>
                            <i class="fa fa-hand-o-left" aria-hidden="true"></i>الطول :
                            {{ $product->length }}
                        </p>
                    </ul>
                    @endisset
                    @isset($product->machinesNumber)
					<ul>
                        <p>
                            <i class="fa fa-hand-o-left" aria-hidden="true"></i>عدد المكائن :
                            {{ $product->machinesNumber }}
                        </p>
                    </ul>
                    @endisset
                    @isset($product->size)
					<ul>
                        <p>
                            <i class="fa fa-hand-o-left" aria-hidden="true"></i>المقاس :
                            {{ $product->size }}

                        </p>
                    </ul>
                    @endisset
                    @isset($product->manufactureType)
					<ul>
                        <p>
                            <i class="fa fa-hand-o-left" aria-hidden="true"></i>نوع التصنيع :
                            {{ $product->manufactureType }}
                        </p>
                    </ul>
                    @endisset
                    @isset($product->fuelType)
					<ul>
                        <p>
                            <i class="fa fa-hand-o-left" aria-hidden="true"></i>نوع الوقود :
                            {{ $product->fuelType }}
                        </p>
                    </ul>
                    @endisset
                    @isset($product->energy)
					<ul>
                        <p>
                            <i class="fa fa-hand-o-left" aria-hidden="true"></i>الطاقة :
                            {{ $product->energy }}
                        </p>
                    </ul>
                    @endisset
                    <ul>
                        <p>
                            <i class="fa fa-hand-o-left" aria-hidden="true"></i>معلومات اضافية :
                            {{ $product->description }}
                        </p>
                    </ul>
				</div>

                @if($product->user_id == Auth::id())
                <div>
                    <button href="{{ route('edit_product', $product->id) }}" class="btn btn-info">تعديل</button>
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

