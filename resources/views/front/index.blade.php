@extends('layouts.master')

@section('content')

	<!-- top Products -->
	<div class="ads-grid">
		<div class="container-fluid" >
            <div style="direction: rtl">
                {{-- <div style="direction: ltr">
                    <button  id="four-elements" onclick="displayedItems()">
                        <i class="fa fa-th" aria-hidden="true"></i>
                    </button>
                </div> --}}

                 <div class="agileinfo-ads-display col-md-10 ">
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
                                                href="{{ route('singleProduct', $product->id) }}">{{ $product->model }}
                                            </a>
                                        </h4>
                                        <div class="info-product-price my-2">
                                            <span class="item_price">{{ $product->price }} ر.س</span><br>
                                            <small class="text-gray-600">تاريخ النشر: {{ $product->created_at->format('d-m-Y') }}</small>
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



                <div style="display: none;"  id="id2" class="col-md-10" >
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
                                            <h5 class="card-title">النوع: {{ $product->category->الاسم }}</h5>
                                            <p class="card-text">الموديل: {{ $product->model }}</p>
                                            <p class="card-text">الوصف: {{ $product->description }}</p><hr>

                                            <p class="card-text"><small class="text-muted">{{ $product->price }} ر.س </small></p>
                                            <small class="text-gray-600">تاريخ النشر: {{ $product->created_at->format('d-m-Y') }}</small>
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
            <div class="side-bar col-md-2" style="float:right;">
                {{-- <form action="{{ route('home') }}" method="GET"> --}}
                    {{-- <button type="submit" class="col-md-4" style="width: 30%;border-radius:0.5rem">تأكيد</button> --}}

                    <button style="background-color: transparent" id="four-elements" onclick="displayedItems()">
                        <i class="fa fa-th" aria-hidden="true"></i>
                    </button>

                    <select class="col-md-8" name="sortby" style="width: 85%;border-radius:0.5rem;padding:0.1rem;direction:rtl">
                        <option disabled disabled selected>ترتيب حسب ..</option>
                        <option value="asc">الأقل سعر</option>
                        <option value="desc">الأعلى سعر</option>
                        <option value="newest">الأحدث</option>
                    </select>
                {{-- </form> --}}
                <br>

                {{-- <form action="{{ route('home') }}" method="get" style="direction: rtl">
                    <div class="search-hotel">
                        <h3 class="agileits-sear-head">بحث في الصفحة</h3>
                            <input type="search" name="search" placeholder="اسم المنتج" style="width: 100%;border-radius:1rem">
                            <button type="submit" class="btn btn-primary" style="width: 100%" >نفذ</button>
                    </div>
                </form> --}}

                <!-- price range -->
                <div class="range">
                    <h3 class="agileits-sear-head">تحديد السعر</h3>
                    <ul class="dropdown-menu6">
                        <li>
                            <div id="slider-range"></div>
                            <input type="text"  id="amount" name="pricerange" style="border: 0; color: #ffffff; font-weight: normal;"
                            min_price="{{ $products->min('price') }}"
                            max_price="{{ $products->max('price') }}"/>
                        </li>
                    </ul>
                </div>
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

@section('scripts')

    <script>
        function displayedItems() {
            var x = document.getElementById("id1");
            var y =document.getElementById("id2");
            var z =document.getElementById("four-elements");
            if (y.style.display === "none" && x.style.display === "inline-block" ) {
                x.style.display = "none";
                y.style.display = "inline-block";
                z.innerHTML= `<i class="fa fa-align-justify" aria-hidden="true"></i>`;

            }
            else if (x.style.display === "none" && y.style.display === "inline-block" ){
                x.style.display = "inline-block";
                y.style.display = "none";
                z.innerHTML=`<i class="fa fa-th" aria-hidden="true"></i>`;


            }
            else{
                x.style.display = "inline-block";
                y.style.display = "none";
                z.innerHTML=`<i class="fa fa-th" aria-hidden="true"></i>`;

            }
        }


    var min = $('#amount').attr('min_price');
    var max = $('#amount').attr('max_price');

    $(window).load(function () {
        $("#slider-range").slider({
            range: true,
            min: 0,
            max: max,
            values: [min, max],
            slide: function (event, ui) {
                $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);

                var myData = {
                    'category_id'   :   $("#amount").attr('category_id'),
                    'minPrice'      :   ui.values[0],
                    'maxPrice'      :   ui.values[1]
                }

                $.ajax({
                    type: "get",
                    url: "{{ route('price_index') }}",
                    data: myData,

                    beforeSend: function () {
                        $('.ajax').remove();
                    },
                    success: function (response) {
                        $('#id1').empty();

                        $.each(response.data, function(index, value) {
                            $('#id1').append(
                                    `<div class="product-sec1">
                                        <div class="card men-thumb-item" >
                                            <img src="{{ asset('storage/products/${value.first_image.url}') }}"
                                            style="width: 100%; height:30vh" class="card-img-top" alt="...">
                                            <div class="men-cart-pro">
                                                <div class="inner-men-cart-pro">
                                                    <a href='{{ url("profile/`+value.user_id+`") }}'
                                                        class="link-product-add-cart">تواصل مع البائع</a>
                                                </div>
                                            </div>
                                            <div class="item-info-product text-center border-top mt-4">
                                                <h4 class="pt-1">
                                                    <a href='{{ url("product/`+value.id+`") }}'>${value.model}</a>
                                                </h4>
                                                <div class="info-product-price my-2">
                                                    <span class="item_price">${value.price} ر.س </span><br>
                                                    <small class="text-gray-600">تاريخ النشر: ${value.date}</small>
                                                </div>
                                                <div
                                                    class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                                    <fieldset>
                                                        <a href='{{ url("product/`+value.id+`") }}'
                                                            class="btn btn-success" id="product-page">صفحة المنتج</a>
                                                    </fieldset>
                                                    </form>
                                                </div>
                                            </div>
                                            </div>
                                        <div class="clearfix"></div>
                                    </div>`
                            );
                            $('#id2').append(
                                `<div style="box-shadow: 0px 0px 15px 0px #D6D6D6;padding: 30px 20px;direction:rtl;margin:1rem 0rem">
                                        <div class="card2 mb-3" >
                                            <div class="row no-gutters">
                                                <div class="col-md-2">
                                                    <a href="{{ url("product/`+value.id+`") }}"
                                                        class="btn btn-success " style="width: 150px;margin:0.5rem 0rem">صفحة المنتج</a>

                                                    <a href="{{ url("profile/`+value.user_id+`") }}"
                                                        class="btn btn-info " style="width: 150px;margin:0.5rem 0rem">تواصل مع البائع</a>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="card-body">
                                                    <h5 class="card-title">النوع:  ${value.category.الاسم}</h5>
                                                    <p class="card-text">الموديل:  ${value.model}</p>
                                                    <p class="card-text">الوصف:  ${value.description}</p><hr>

                                                    <p class="card-text"><small class="text-muted">${value.price} ر.س </small></p>
                                                    <small class="text-gray-600">تاريخ النشر: ${value.date}</small>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <img src="{{ asset('storage/products/${value.first_image.url}') }}"
                                                    style="width: 100%; height:20vh">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>`
                            );

                        });
                    }
                });
            }


        });
        $("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));
    });









    </script>




@endsection




