@extends('layouts.admin')
@section('content')
    <!-- Main content -->
    <section class="content">

        <div class="row border container ml-3 p-3 bg-light">
            <div class="col-12 col-sm-6 p-3 mt-5 ">
                <!-- <h3 class="d-inline-block d-sm-none">LOWA Men’s Renegade GTX Mid Hiking Boots Review</h3> -->
                <div class="">
                    <img src="" class="product-image container" style="height: 12pc; width: 14pc; text-align: center;" alt="Product Image" width="">
                </div>

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
                <h1 class="mt-5">{{ $product->name }}</h1><br><br><br>
                <div class="">
                    <div class="row">
                        <h3 class="text-danger">${{ $product->price }}</h3>
                        <p class="text-dark col">Free delivery</p>
                    </div>
                    <p>{{ $product->description }}</p>
                    <a href="{{ route('admin.products.approve') }}"  class="btn bg-info text-light mt-2">موافقة</a>
                    <a href="{{ route('admin.products.delete') }}" class="btn bg-danger text-light mt-2 ml-2">مسح</a>

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
