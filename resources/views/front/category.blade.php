@extends('layouts.master')


@section('head')
{{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"> --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
{{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
<style type="text/css">
    .dropdown-toggle{
        height: 40px;
        width: 100% !important;
        margin-bottom: 20px;

    }
    .dropdown-toggle select{
        direction: rtl;
        background-color: black;


    }


</style>

@endsection

@section('content')


<div>
    <div class="ads-grid">
		<div class="container-fluid" style="margin:0rem 4rem">
			<!-- product right -->
			{{-- <div class="agileinfo-ads-display col-md-9 w3l-rightpro">
                <div class="wrapper" style="direction: rtl;float: right;">
                    @foreach($products->chunk(4) as $chunk)
                    <div class="product-sec1" style="direction: rtl;float: right;">
                        @foreach ($chunk as $product)
                                <div class="col-md-3 product-men" style="direction: rtl;float: right;">
                                    <div class="men-pro-item simpleCart_shelfItem mt-5">
                                        <div class="men-thumb-item">
                                            <img src="{{ asset('storage/products/'.$product->first_image->url) }}" style="width: 100%; height:30vh">
                                            <div class="men-cart-pro">
                                                <div class="inner-men-cart-pro">
                                                    <a href="{{ route('profile', $product->user_id) }}" class="link-product-add-cart">تواصل مع البائع</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-info-product ">
                                            <h4>
                                                <a href="{{ route('singleProduct', $product->id) }}">{{ $product->name }}</a>
                                            </h4>
                                            <div class="info-product-price">
                                                <span class="item_price">${{ $product->price }}</span>
                                            </div>
                                            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                                <form action="#" method="get">
                                                    <fieldset>
                                                        <a href="{{ route('singleProduct', $product->id) }}" class="btn btn-success" id="product-page">صفحة المنتج</a>
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
            </div> --}}
			<!-- //product right -->

                        <!-- //tittle heading -->
                        <div style="direction: rtl">
                            <div style="direction: ltr">
                                <button  id="four-elements" onclick="displayedItems()">
                                    <i class="fa fa-th" aria-hidden="true"></i>
                                </button>
                            </div>

                            {{-- <div class="agileinfo-ads-display col-md-9">
                                <div class="wrapper" id="id1" style="direction: rtl;float: right;">
                                    @foreach ($products->chunk(4) as $chunk)
                                        <div class="product-sec1" >
                                            @foreach ($chunk as $product)
                                            <div class="col-md-3 product-men" style="direction: rtl;float: right;w">
                                                <div class="men-pro-item simpleCart_shelfItem">
                                                    <div class="men-thumb-item">
                                                        <img src="{{ asset('storage/products/'.$product->first_image->url) }}"
                                                            style="width: 100%; height:30vh">
                                                        <div class="men-cart-pro">
                                                            <div class="inner-men-cart-pro">
                                                                <a href="{{ route('profile', $product->user_id) }}"
                                                                    class="link-product-add-cart">تواصل مع البائع</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-info-product text-center border-top mt-4">
                                                        <h4 class="pt-1">
                                                            <a
                                                                href="{{ route('singleProduct', $product->id) }}">{{ $product->name }}</a>
                                                        </h4>
                                                        <div class="info-product-price my-2">
                                                            <span class="item_price">${{ $product->price }}</span>
                                                        </div>
                                                        <div
                                                            class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                                            <fieldset>
                                                                <a href="{{ route('singleProduct', $product->id) }}"
                                                                    class="btn btn-success" id="product-page">صفحة المنتج</a>
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
                            </div> --}}

                             <div class="agileinfo-ads-display col-md-9 ">
                                <div class="wrapper " id="id1" style="direction: rtl;float:right;">
                                    @foreach ($products->chunk(1) as $chunk)
                                        <div class="product-sec1 " >
                                            @foreach ($chunk as $product)
                                            <div class="card men-thumb-item" >
                                                <img src="{{ asset('storage/products/'.$product->first_image->url) }}"
                                                style="width: 100%; height:30vh" class="card-img-top" alt="...">
                                                <div class="men-cart-pro">
                                                    <div class="inner-men-cart-pro">
                                                        <a href="{{ route('profile', $product->user_id) }}"
                                                            class="link-product-add-cart">تواصل مع البائع</a>
                                                    </div>
                                                </div>
                                                <div class="item-info-product text-center border-top mt-4">
                                                    <h4 class="pt-1">
                                                        <a
                                                            href="{{ route('singleProduct', $product->id) }}">{{ $product->name }}</a>
                                                    </h4>
                                                    <div class="info-product-price my-2">
                                                        <span class="item_price">${{ $product->price }}</span>
                                                    </div>
                                                    <div
                                                        class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                                        <fieldset>
                                                            <a href="{{ route('singleProduct', $product->id) }}"
                                                                class="btn btn-success" id="product-page">صفحة المنتج</a>
                                                        </fieldset>
                                                        </form>
                                                    </div>
                                                </div>
                                              </div>
                                            @endforeach
                                            <div class="clearfix"></div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>



                            <div style="display: none;"  id="id2" class="col-md-9" >
                                @foreach($products->chunk(1) as $chank)
                                    <div style="box-shadow: 0px 0px 15px 0px #D6D6D6;padding: 30px 20px;direction:rtl;margin:1rem 0rem">
                                        <div class="card2 mb-3" >
                                            @foreach($chank as $product)
                                                <div class="row no-gutters">

                                                    <div class="col-md-2">
                                                        <a href="{{ route('singleProduct', $product->id) }}"
                                                            class="btn btn-success " style="width: 150px;margin:0.5rem 0rem">صفحة المنتج</a>

                                                        <a href="{{ route('profile', $product->user_id) }}"
                                                            class="btn btn-info " style="width: 150px;margin:0.5rem 0rem">تواصل مع البائع</a>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="card-body">
                                                        <h5 class="card-title">النوع: {{ $product->category->name }}</h5>
                                                        <p class="card-text">الموديل: {{ $product->name }}</p>
                                                        <p class="card-text">الوصف: {{ $product->description }}</p><hr>

                                                        <p class="card-text"><small class="text-muted">{{ $product->price }} ر.س </small></p>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <img src="{{ asset('storage/products/'.$product->first_image->url) }}"
                                                        style="width: 100%; height:20vh">
                                                    </div>

                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endforeach
                            </div>


                        <!-- //product right -->


            <!-- product left -->
                <div class="side-bar col-md-3" style="float:right">
                    <div class="left-side" style="direction: rtl">

                        <button  onclick="ToggleList()" id="show-cat" style="display: inline-block;margin-left:1rem;color:#17a2b8">الاقسام الرئيسية<span style="font-size: 30px"> </span>+</button><hr>
                        <ul id="cat-list" style="display: none">
                            @foreach($categories as $category)
                            <li>
                                <div id="index-items">
                                <a  href="{{ route('categoryPage', $category->id) }}" class="span" style="text-decoration: none">{{ $category->الاسم }}</a>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    <form style="direction: rtl">
                        <div class="range">
                            <h3 class="agileits-sear-head">تحديد السعر</h3>
                            <ul class="dropdown-menu6">
                                <li>
                                    <div id="slider-range"></div>
                                    <input type="text" id="amount" name="pricerange" style="border: 0; color: #ffffff; font-weight: normal;" />
                                </li>
                            </ul>
                        </div>
                        <button type="submit" class="btn btn-primary" style="width: 100%" id="submitToRange">نفذ</button>
                    </form>

                    <hr>

                    <form style="direction: rtl">
                        <div class="search-hotel">
                            <h3 class="agileits-sear-head">بحث في الصفحة</h3>
                            <input type="search" name="search" placeholder="اسم المنتج" style="width: 100%;border-radius:1rem;">
                        </div>
                        @foreach($filters->where('type', 'select') as $filter)

                            <select style="background-color: blue" multiple class="selectpicker" name="{{ $filter->الاسم }}[]" >
                                <option disabled disabled selected >{{ $filter->الاسم }}</option>
                                @foreach ($filter->values as $value)
                                <option value="{{ $value->name }}" >{{ $value->الاسم }}</option>
                                @endforeach

                            </select><br>
                        @endforeach
                        @foreach($filters->where('type', 'input') as $filter)
                            <input class="form-control" name="{{ $filter->name }}" placeholder="{{ $filter->الاسم }}"><br>
                        @endforeach

                        <button type="submit" class="btn btn-primary" style="width: 100%;">نفذ</button>
                    </form>
		</div>
	</div>

</div>
@endsection

@section('scripts')
<script type="text/javascript">

    $(document).ready(function() {

        $('#select').selectpicker();

    });


    function ToggleList() {
        var x = document.getElementById("cat-list");
        var y =document.getElementById("show-cat")
        if (x.style.display === "none") {
            x.style.display = "block";
            y.innerHTML="الاقسام الرئيسية -"

        } else {
            x.style.display = "none";
            y.innerHTML="الاقسام الرئيسية +"
        }
    }

</script>



@endsection
