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
                        <h3>{{ $product->model }}</h3>
                        <p>
                            <span class="item_price">{{ $product->price }}رس</span>
                        </p>
                    </ul>
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
                </div>
                    <ul>
                        <button product_id="{{ $product->id }}"  class="approve_btn btn btn-info">موافقة</button>
                        <button product_id="{{ $product->id }}"  class="delete_btn btn btn-danger">مسح</button>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection


@section('scripts')

    <script>
        //approve button
        $(document).on('click', '.approve_btn', function(e){
            e.preventDefault();

            var product_id = $(this).attr('product_id');

            $.ajax({
                type: "get",
                url: "{{ route('admin.products.approve') }}",
                data: { 'id' : product_id },

                success: function (response) {

                    window.location.href = "{{ route('admin.products.waiting') }}";

                    //success message
                    toastr.success(response.msg);
                }
            });
        });


        //approve button
        $(document).on('click', '.delete_btn', function(e){
            e.preventDefault();

            var product_id = $(this).attr('product_id')

            $.ajax({
                type: "get",
                url: "{{ route('admin.products.delete') }}",
                data: { 'id' : product_id },

                success: function (response) {

                    window.location.href = "{{ route('admin.products.waiting') }}";


                    //success message
                    toastr.success(response.msg);
                }
            });
        })

    </script>
@endsection



