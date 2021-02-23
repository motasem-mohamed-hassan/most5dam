@extends('layouts.admin')
@section('content')
    <!-- Main content -->
    <section class="content">

        <div class="row border container ml-3 p-3 bg-light">
            <div class="col-12 col-sm-6 p-3 mt-5 ">
                <!-- <h3 class="d-inline-block d-sm-none">LOWA Men’s Renegade GTX Mid Hiking Boots Review</h3> -->
                {{-- <div class="">
                    <img src="" class="product-image container" style="height: 12pc; width: 14pc; text-align: center;" alt="Product Image" width="">
                </div> --}}

                <div class="col-12 product-image-thumbs">
                    @foreach ($images as $image)
                        <div class="product-image-thumb active">
                            <img src="{{ asset('storage/products/'.$image->url) }}" alt="Product Image">
                        </div>
                    @endforeach
                    <!-- <div class="product-image-thumb"><img src="../../dist/img/prod-4.jpg" alt="Product Image"></div>
                            <div class="product-image-thumb"><img src="../../dist/img/prod-5.jpg" alt="Product Image"></div> -->
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="product-single-w3l">
                    <ul>
                        <h3>{{ $product->name }}</h3>
                        <p>
                            <span class="item_price">${{ $product->price }}</span>
                        </p>
                    </ul>
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
                        @isset($product->city)
                        <ul>
                            <p>
                                <i class="fa fa-hand-o-left" aria-hidden="true"></i>المدينة :
                                {{ $product->city }}
                            </p>
                        </ul>
                        @endisset
                        @isset($product->material)
                        <ul>
                            <p>
                                <i class="fa fa-hand-o-left" aria-hidden="true"></i>المادة :
                                {{ $product->material }}
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
                    <ul>
                        <a href="{{ route('admin.products.approve') }}"  class="btn bg-info text-light mt-2">موافقة</a>
                        <a href="{{ route('admin.products.delete') }}" class="btn bg-danger text-light mt-2 ml-2">مسح</a>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->




{{-- <h3 class="tittle-w3l">{{ $product->category->name }}
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
                        <img src="{{ asset('storage/products/'.$image->url) }}" data-imagezoom="true" class="img-responsive" style="width: 40px" alt=""> </div>
                </li>

                @endforeach
            </ul>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="col-md-7 single-right-left simpleCart_shelfItem">
    <h3>{{ $product->name }}</h3>
    <p>
        <span class="item_price">${{ $product->price }}</span>
    </p>
    <div class="product-single-w3l">
        <p>
            <i class="fa fa-hand-o-right" aria-hidden="true"></i>This is a
            <label>{{ $product->category->name }}</label> product.</p>
        <ul>{{ $product->description }}</ul>
    </div>
</div>
<div class="clearfix"> </div>
</div>
</div> --}}

@endsection
