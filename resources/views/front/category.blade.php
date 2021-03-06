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
        width: 100%;
        margin-bottom: 20px;
        background-color: #5aaa15 !important ;
        direction: rtl !important;
        text-align: right !important;



    }
    .dropdown-toggle .filter-option-inner-inner{

        direction: rtl !important;
        text-align: right !important;
        color: #ffffff !important;
        position: relative;
    }
    .dropdown-toggle  .bs-caret {

            position: absolute;
            right: 85%;
            top: 50%;
            color: #ffffff !important;

            }


</style>

@endsection

@section('content')


<div>
    <div class="ads-grid">
		<div class="container-fluid">

            <!-- //tittle heading -->
            <div style="direction: rtl">
                {{-- <div style="direction: ltr">
                    <button  id="four-elements" onclick="displayedItems()">
                        <i class="fa fa-th" aria-hidden="true"></i>
                    </button>
                </div> --}}


                    <div class="agileinfo-ads-display col-md-10 ">
                    <div class="wrapper" id="id1" style="direction: rtl;float:right;">
                        @foreach ($products as $product)
                            <div class="product-sec1">
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
                                                href="{{ route('singleProduct', $product->id) }}">{{ $product->model }}</a>
                                        </h4>
                                        <div class="info-product-price my-2">
                                            <span class="item_price">{{ $product->price }} ر.س </span><br>
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
                                <div class="clearfix"></div>
                            </div>
                        @endforeach
                    </div>
                </div>



                <div style="display: none;"  id="id2" class="col-md-10" >
                    @foreach($products as $product)
                        <div style="box-shadow: 0px 0px 15px 0px #D6D6D6;padding: 30px 20px;direction:rtl;margin:1rem 0rem">
                            <div class="card2 mb-3" >
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
                            </div>
                        </div>
                    @endforeach
                </div>


            <!-- //product right -->


    <!-- product left -->
        <div class="side-bar col-md-2" style="float:right">
            <div class="left-side" style="direction: rtl">
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

                <button  onclick="ToggleList()" id="show-cat" style="display: inline-block;margin-left:1rem;color:#17a2b8;width:100%"> الاقسام الرئيسية<span style="font-size: 50px"> </span>+</button><hr>
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

                <div class="range">
                    <h3 class="agileits-sear-head">تحديد السعر</h3>
                    <ul class="dropdown-menu6">
                        <li>
                            <div id="slider-range"></div>
                            <input type="text"  id="amount" name="pricerange" style="border: 0; color: #ffffff; font-weight: normal;"
                            category_id="{{ $thiscategory->id }}"
                            min_price="{{ $thiscategory->products->min('price') }}"
                            max_price="{{ $thiscategory->products->max('price') }}"/>
                        </li>
                    </ul>
                </div>

            <hr>

            {{-- <form style="direction: rtl"> --}}
                {{-- <div class="search-hotel">
                    <h3 class="agileits-sear-head">بحث في الصفحة</h3>
                    <input type="search" name="search" placeholder="اسم المنتج" style="width: 100%;border-radius:1rem;">
                </div> --}}

                @foreach($filters->where('type', 'select') as $filter)
                    <select style="direction:ltr" id="select{{ str_slug($filter->name, '_') }}"  multiple class="selectpicker filter-select" category_id="{{ $thiscategory->id }}" name="{{ $filter->name }}" >
                        <option disabled selected>{{ $filter->الاسم }}</option>
                        @foreach ($filter->values as $value)
                        <option value="{{ $value->الاسم }}" >{{ $value->الاسم }}</option>
                        @endforeach
                    </select><br>
                @endforeach

                @foreach($filters->where('type', 'input') as $filter)
                    <label>{{ $filter->الاسم }}</label><br>
                    <span style="width:10%;float:right;margin:5px 0px">من</span>
                    <input style="width:40%;float:right;margin:5px 0px;font-size:0.8rem" class="form-control" name="{{ 'min'.$filter->name }}" placeholder="{{ $filter->الاسم }}">
                    <span style="width:10%;float:right;margin:5px 0px">الى</span>
                    <input style="width:40%;float:right;margin:5px 0px;font-size:0.8rem" class="form-control" name="{{ 'max'.$filter->name }}" placeholder="{{ $filter->الاسم }}">

                    <br>
                    <div class="clearfix"></div>
                @endforeach

                {{-- <button type="submit" class="btn btn-primary" style="width: 100%;">نفذ</button>
            </form> --}}
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

<script>
        var brand=[];
        var model=[];
        var screen_size=[];
        var memory=[];
        var storage=[];
        var generation=[];
        var transmission_type=[];
        var wheel_type=[];
        var fuel_type=[];
        var processor=[];
        var cooling_type=[];
        var cooling_power=[];
        var capacitance=[];
        var megapixel=[];
        var screen_type=[];
        var product=[];
        var length=[];
        var machines_place=[];
        var caple_type=[];
        var city=[];

    $(document).on('change', '.filter-select', function(e){
        e.preventDefault();



        var category_id = $(this).attr('category_id');
        var name_      = $(this).attr('name');

        var name = name_.replace(" ", "_");

        if (name == 'brand') {
            brand.pop();
            $("#selectbrand").attr(name, 'option:selected').each(function(){
            brand.push($(this).val());
            });

        }if(name == 'model'){
            model.pop();
            $("#selectmodel").attr(name, 'option:selected').each(function(){
            model.push($(this).val());
            });
        }if(name == 'screen_size'){
            screen_size.pop();
            $("#selectscreen_size").attr(name, 'option:selected').each(function(){
            screen_size.push($(this).val());
            });
        }if(name == 'memory'){
            memory.pop();
            $("#selectmemory").attr(name, 'option:selected').each(function(){
            memory.push($(this).val());
            });
        }if(name == 'storage'){
            storage.pop();
            $("#selectstorage").attr(name, 'option:selected').each(function(){
            storage.push($(this).val());
            });
        }if(name == 'generation'){
            generation.pop();
            $("#selectgeneration").attr(name, 'option:selected').each(function(){
            generation.push($(this).val());
            });
        }if(name == 'transmission_type'){
            transmission_type.pop();
            $("#selecttransmission_type").attr(name, 'option:selected').each(function(){
            transmission_type.push($(this).val());
            });
        }if(name == 'wheel_type'){
            wheel_type.pop();
            $("#selectwheel_type").attr(name, 'option:selected').each(function(){
            wheel_type.push($(this).val());
            });
        }if(name == 'fuel_type'){
            fuel_type.pop();
            $("#selectfuel_type").attr(name, 'option:selected').each(function(){
            fuel_type.push($(this).val());
            });
        }if(name == 'processor'){
            processor.pop();
            $("#selectprocessor").attr(name, 'option:selected').each(function(){
            processor.push($(this).val());
            });
        }if(name == 'cooling_type'){
            cooling_type.pop();
            $("#selectcooling_type").attr(name, 'option:selected').each(function(){
            cooling_type.push($(this).val());
            });
        }if(name == 'cooling_power'){
            cooling_power.pop();
            $("#selectcooling_power").attr(name, 'option:selected').each(function(){
            cooling_power.push($(this).val());
            });
        }if(name == 'capacitance'){
            capacitance.pop();
            $("#selectcapacitance").attr(name, 'option:selected').each(function(){
            capacitance.push($(this).val());
            });
        }if(name == 'megapixel'){
            megapixel.pop();
            $("#selectmegapixel").attr(name, 'option:selected').each(function(){
            megapixel.push($(this).val());
            });
        }if(name == 'screen_type'){
            screen_type.pop();
            $("#selectscreen_type").attr(name, 'option:selected').each(function(){
            screen_type.push($(this).val());
            });
        }if(name == 'product'){
            product.pop();
            $("#selectproduct").attr(name, 'option:selected').each(function(){
            product.push($(this).val());
            });
        }if(name == 'length'){
            length.pop();
            $("#selectlength").attr(name, 'option:selected').each(function(){
            length.push($(this).val());
            });
        }if(name == 'machines_place'){
            machines_place.pop();
            $("#selectmachines_place").attr(name, 'option:selected').each(function(){
            machines_place.push($(this).val());
            });
        }if(name == 'caple_type'){
            caple_type.pop();
            $("#selectcaple_type").attr(name, 'option:selected').each(function(){
            caple_type.push($(this).val());
            });
        }if(name == 'city'){
            city.pop();
            $("#selectcity").attr(name, 'option:selected').each(function(){
            city.push($(this).val());
            });
        }

        var myData = {

                        'category_id'       :category_id,
                        'brand'             :brand,
                        'model'             :model,
                        'screen_size'       :screen_size,
                        'memory'            :memory,
                        'storage'           :storage,
                        'generation'        :generation,
                        'transmission_type' :transmission_type,
                        'wheel_type'        :wheel_type,
                        'fuel_type'         :fuel_type,
                        'processor'         :processor,
                        'cooling_type'      :cooling_type,
                        'cooling_power'     :cooling_power,
                        'capacitance'       :capacitance,
                        'megapixel'         :megapixel,
                        'screen_type'       :screen_type,
                        'product'           :product,
                        'length'            :length,
                        'machines_place'    :machines_place,
                        'caple_type'        :caple_type,
                        'city'              :city,

            }

        $.ajax({
            type: "get",
            url: "{{ route('filter-select') }}",
            data:   myData,
            beforeSend: function () {

                $('#id1').empty();
                $('#id2').empty();

            },

            success: function (response) {
                // $('.ajax').remove(); //remove result before

                $.each(response.data, function(index, value) {
                    $('.ajax').remove();
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
                                                <h5 class="card-title">النوع: {{ $product->category->الاسم }}</h5>
                                                <p class="card-text">الموديل: {{ $product->model }}</p>
                                                <p class="card-text">الوصف: {{ $product->description }}</p><hr>

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
            },

        });
    });


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
                    url: "{{ route('filter-select') }}",
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
                        });
                    }
                });
            }


        });
        $("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));
    });

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

</script>



@endsection
