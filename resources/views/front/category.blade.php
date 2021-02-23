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
        width: 115% !important;
        margin-bottom: 20px;
    }

</style>

@endsection

@section('content')


<div>
    <div class="ads-grid">
		<div class="container-fluid" style="margin:1rem">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">{{ $category->name }}
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<!-- product right -->
			<div class="agileinfo-ads-display col-md-9 w3l-rightpro">
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
            </div>
			<!-- //product right -->


            <!-- product left -->
                <div class="side-bar col-md-3">
                    <div class="left-side" style="direction: rtl">

                        <button  onclick="ToggleList()" id="show-cat" style="display: inline-block;margin-left:1rem;color:#17a2b8">الاقسام الرئيسية<span style="font-size: 30px"> </span>+</button><hr>
                        <ul id="cat-list" style="display: none">
                            @foreach($categories as $category)
                            <li>
                                <div id="index-items">
                                <a  href="{{ route('categoryPage', $category->id) }}" class="span" style="text-decoration: none">{{ $category->name }}</a>
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

                    <form action="{{ route('categoryPage', $category->id) }}" method="get" style="direction: rtl">
                        <div class="search-hotel">
                            <h3 class="agileits-sear-head">بحث في الصفحة</h3>
                            <input type="search" name="search" placeholder="اسم المنتج" style="width: 100%;border-radius:1rem">
                    </div>

                    <!-- price range -->
                    <!-- //price range -->
                    <!-- cuisine -->

                    @foreach($filters->where('type', 'select') as $filter)

                        <select multiple class="selectpicker" name="{{ $filter->الاسم }}[]" >
                            <option disabled disabled selected>{{ $filter->name }}</option>
                            @foreach ($filter->values as $value)
                            <option value="{{ $value->name }}">{{ $value->الاسم }}</option>
                            @endforeach

                        </select><br>
                    @endforeach
                    @foreach($filters->where('type', 'input') as $filter)
                        <input class="form-control" name="{{ $filter->name }}" placeholder="{{ $filter->الاسم }}"><br>
                    @endforeach

                    {{-- @if($category->name == 'موبايلات')
                        <select multiple class="selectpicker"  name="screensize[]">
                            <option disabled selected>حجم الشاشة</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                        </select><br>
                        <select multiple class="selectpicker"  name="memory[]">
                            <option disabled disabled selected>الرام</option>
                            <option value="2">2</option>
                            <option value="4">4</option>
                            <option value="8">8</option>
                            <option value="16">16</option>
                        </select><br>
                        <select multiple class="selectpicker" name="storage[]">
                            <option disabled disabled selected>سعة التحزين</option>
                            <option value="4">2</option>
                            <option value="5">4</option>
                            <option value="6">8</option>
                            <option value="7">16</option>
                            <option value="32">32</option>
                            <option value="64">64</option>
                            <option value="120">120</option>
                        </select><br>
                        <select multiple class="selectpicker" name="generation[]">
                            <option disabled disabled selected>الجيل</option>
                            <option value="2G">2G</option>
                            <option value="3G">3G</option>
                            <option value="4G">4G</option>
                            <option value="5G">5G</option>
                        </select><br>
                    @endif
                    @if($category->name == 'اجهزة لوحية')
                    <select multiple class="selectpicker" name="subcategory[]">
                        <option disabled selected>الماركة</option>
                        @foreach ($category->children as $subcategory)
                        <option value="{{ $subcategory->name }}">{{ $subcategory->name }}</option>
                        @endforeach
                    </select><br>
                    <select multiple class="selectpicker" name="screensize[]">
                        <option disabled selected>حجم الشاشة</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="10">10</option>
                        <option value="12">12</option>
                    </select><br>
                    <select multiple class="selectpicker" name="memory[]">
                        <option disabled selected>الرام</option>
                        <option value="2">2</option>
                        <option value="4">4</option>
                        <option value="8">8</option>
                        <option value="16">16</option>
                    </select><br>
                    <select multiple class="selectpicker" name="storage[]">
                        <option disabled selected>سعة التحزين</option>
                        <option value="2">2</option>
                        <option value="4">4</option>
                        <option value="8">8</option>
                        <option value="16">16</option>
                        <option value="32">32</option>
                        <option value="64">64</option>
                        <option value="120">120</option>
                    </select><br>
                    <select multiple class="selectpicker" name="generation[]">
                        <option disabled selected>الجيل</option>
                        <option value="2G">2G</option>
                        <option value="3G">3G</option>
                        <option value="4G">4G</option>
                        <option value="5G">5G</option>
                    </select><br>
                @endif
                @if($category->name == 'سيارات')
                <select multiple class="selectpicker" name="subcategory[]">
                    <option disabled selected>الماركة</option>
                    @foreach ($category->children as $subcategory)
                    <option value="{{ $subcategory->name }}">{{ $subcategory->name }}</option>
                    @endforeach
                </select><br>
                <select multiple class="selectpicker" name="transmissionType[]">
                    <option disabled selected>نوع القير</option>
                    <option value="اوتوماتيك">اوتوماتيك</option>
                    <option value="اوتوماتيك">عادي</option>
                </select><br>
                <select multiple class="selectpicker" name="wheelType[]">
                    <option disabled selected>نوع الدفع</option>
                    <option value="ثنائي">ثنائي</option>
                    <option value="رياعي">رباعي</option>
                </select><br>
                <select multiple class="selectpicker" name="fuelType[]">
                    <option disabled selected>نوع الوقود</option>
                    <option value="بنزين">بنزين</option>
                    <option value="ديزل">ديزل</option>
                    <option value="غاز">غاز</option>
                    <option value="كهرباء">كهرباء</option>
                </select><br>
                <div class="form-group">
                    <label for="minPrice">سنة التصنيع</label>
                    <input type="number" class="form-control" name="minmanufactureYear" placeholder="من">
                    <input type="number" class="form-control" name="maxmanufactureYear" placeholder="الى">
                </div>
            @endif
            @if($category->name == 'لابتوب')
            <select multiple class="selectpicker" name="subcategory[]">
                <option disabled selected>الماركة</option>
                @foreach ($category->children as $subcategory)
                <option value="{{ $subcategory->name }}">{{ $subcategory->name }}</option>
                @endforeach
            </select><br>
            <select multiple class="selectpicker" name="processor[]">
                <option disabled selected>المعالج</option>
                <option value="i3">i3</option>
                <option value="i5">i5</option>
                <option value="i7">i7</option>
                <option value="i9">i9</option>
            </select><br>
            <select multiple class="selectpicker" name="memory[]">
                <option disabled selected>الرام</option>
                <option value="2">2</option>
                <option value="4">4</option>
                <option value="8">8</option>
                <option value="16">16</option>
                <option value="32">32</option>
            </select><br>
            <select multiple class="selectpicker" name="storage[]">
                <option disabled selected>سعة التخزين</option>
                <option value="512">512</option>
                <option value="1t">1t</option>
                <option value="2t">2t</option>
            </select><br>
            @endif
            @if($category->name == 'كمبيوتر مكتبي')
            <select multiple class="selectpicker" name="subcategory[]">
                <option disabled selected>الماركة</option>
                @foreach ($category->children as $subcategory)
                <option value="{{ $subcategory->name }}">{{ $subcategory->name }}</option>
                @endforeach
            </select><br>
            <select multiple class="selectpicker" name="processor[]">
                <option disabled selected>المعالج</option>
                <option value="i3">i3</option>
                <option value="i5">i5</option>
                <option value="i7">i7</option>
                <option value="i9">i9</option>
            </select><br>
            <select multiple class="selectpicker" name="memory[]">
                <option disabled selected>الرام</option>
                <option value="2">2</option>
                <option value="4">4</option>
                <option value="8">8</option>
                <option value="16">16</option>
                <option value="32">32</option>
            </select><br>
            <select multiple class="selectpicker" name="storage[]">
                <option disabled selected>سعة التخزين</option>
                <option value="512">512</option>
                <option value="1t">1t</option>
                <option value="2t">2t</option>
            </select><br>
            @endif
            @if($category->name == 'مكيفات')
            <select multiple class="selectpicker" name="subcategory[]">
                <option disabled selected>الماركة</option>
                @foreach ($category->children as $subcategory)
                <option value="{{ $subcategory->name }}">{{ $subcategory->name }}</option>
                @endforeach
            </select><br>
            <select multiple class="selectpicker" name="coolingType[]">
                <option disabled selected>نوع التبريد</option>
                <option value="رقمي">رقمي</option>
            </select><br>
            @endif
            @if($category->name == 'اجهزة منزلية كبيرة')
            <select multiple class="selectpicker" name="subcategory[]">
                <option disabled selected>الماركة</option>
                @foreach ($category->children as $subcategory)
                <option value="{{ $subcategory->name }}">{{ $subcategory->name }}</option>
                @endforeach
            </select><br>
            <input type="number" class="form-control" name="capacitance" placeholder="ميجا بيكسل"><br>
            @endif
            @if($category->name == 'اجهزة منزلية صغيرة')
            <select multiple class="selectpicker" name="subcategory[]">
                <option disabled selected>الماركة</option>
                @foreach ($category->children as $subcategory)
                <option value="{{ $subcategory->name }}">{{ $subcategory->name }}</option>
                @endforeach
            </select><br>
            @endif
            @if($category->name == 'كاميرات')
            <select multiple class="selectpicker" name="subcategory[]">
                <option disabled selected>الماركة</option>
                @foreach ($category->children as $subcategory)
                <option value="{{ $subcategory->name }}">{{ $subcategory->name }}</option>
                @endforeach
            </select><br>
            <input type="number" class="form-control" name="megapixel" placeholder="ميجا بيكسل"><br>
            <select multiple class="selectpicker" name="storage[]">
                <option disabled selected>ذاكرة التحزين</option>
                <option value="2">2</option>
                <option value="4">4</option>
                <option value="8">8</option>
                <option value="16">16</option>
                <option value="32">32</option>
            </select><br>
            @endif
            @if($category->name == 'تلفيزيونات')
            <select multiple class="selectpicker" name="subcategory[]">
                <option disabled selected>الماركة</option>
                @foreach ($category->children as $subcategory)
                <option value="{{ $subcategory->name }}">{{ $subcategory->name }}</option>
                @endforeach
            </select><br>
            <input type="number" class="form-control" name="screensize" placeholder="مقاس الشاشة"><br>
            <select multiple class="selectpicker" name="screenType[]">
                <option disabled selected>نوع الشاشة</option>
                <option value="OLED">OLED</option>
                <option value="QLED">QLED</option>
                <option value="HD 4K">HD 4K</option>
                <option value="LED">LED</option>
            </select><br>
            @endif
            @if($category->name == 'العاب الكترونية')
            <select multiple class="selectpicker" name="subcategory[]">
                <option disabled selected>الماركة</option>
                @foreach ($category->children as $subcategory)
                <option value="{{ $subcategory->name }}">{{ $subcategory->name }}</option>
                @endforeach
            </select><br>
            @endif
            @if($category->name == 'مكائن القهوة')
            <select multiple class="selectpicker" name="subcategory[]">
                <option disabled selected>الماركة</option>
                @foreach ($category->children as $subcategory)
                <option value="{{ $subcategory->name }}">{{ $subcategory->name }}</option>
                @endforeach
            </select><br>
            <select multiple class="selectpicker" name="product[]">
                <option disabled selected>المنتج</option>
                <option value="كاباتشينو">كاباتشينو</option>
                <option value="اسبريسو">اسبريسو</option>
                <option value="قهوة امريكي">قهوة امريكي</option>
                <option value="قهوة عربي">قهوة عربي</option>
            </select><br>
            @endif
            @if($category->name == 'قوارب')
            <select multiple class="selectpicker" name="subcategory[]">
                <option disabled selected>الماركة</option>
                @foreach ($category->children as $subcategory)
                <option value="{{ $subcategory->name }}">{{ $subcategory->name }}</option>
                @endforeach
            </select><br>
            <input type="number" class="form-control" name="length" placeholder="الطول"><br>
            <select multiple class="selectpicker" name="machinesPlace[]">
                <option disabled selected>مكان المكائن</option>
                <option value="داخلي">داخلي</option>
                <option value="داخلي">خارجي</option>
            </select><br>
            @endif
            @if($category->name == 'عدد وادوات')
            <select multiple class="selectpicker" name="subcategory[]">
                <option disabled selected>نوع الجهاز</option>
                @foreach ($category->children as $subcategory)
                <option value="{{ $subcategory->name }}">{{ $subcategory->name }}</option>
                @endforeach
            </select><br>
            <select multiple class="selectpicker" name="capleType[]">
                <option disabled selected>نوع الكابل</option>
                <option value="لاسلكي">لاسلكي</option>
                <option value="سلكي">سلكي</option>
            </select><br>
            @endif
            @if($category->name == 'معدات رياضية')
            <select multiple class="selectpicker" name="subcategory[]">
                <option disabled selected>نوع الجهاز</option>
                @foreach ($category->children as $subcategory)
                <option value="{{ $subcategory->name }}">{{ $subcategory->name }}</option>
                @endforeach
            </select><br>
            @endif
            @if($category->name == 'اثاث')
            <select multiple class="selectpicker" name="subcategory[]">
                <option disabled selected>نوع الاثاث</option>
                @foreach ($category->children as $subcategory)
                <option value="{{ $subcategory->name }}">{{ $subcategory->name }}</option>
                @endforeach
            </select><br>
            @endif
            @if($category->name == 'معدات صناعية')
            <select multiple class="selectpicker" name="subcategory[]">
                <option disabled selected>نوع الجهاز</option>
                @foreach ($category->children as $subcategory)
                <option value="{{ $subcategory->name }}">{{ $subcategory->name }}</option>
                @endforeach
            </select><br>
            @endif
            @if($category->name == 'اجهزة طبية')
            <select multiple class="selectpicker" name="subcategory[]">
                <option disabled selected>نوع الجهاز</option>
                @foreach ($category->children as $subcategory)
                <option value="{{ $subcategory->name }}">{{ $subcategory->name }}</option>
                @endforeach
            </select><br>
            @endif
            @if($category->name == 'مقتنيات ثمينة')
            <select multiple class="selectpicker" name="subcategory[]">
                <option disabled selected>النوع</option>
                @foreach ($category->children as $subcategory)
                <option value="{{ $subcategory->name }}">{{ $subcategory->name }}</option>
                @endforeach
            </select><br>
            @endif --}}

















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

</script>


@endsection
