@extends('layouts.admin')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">منتجات تم الموافقة عليها</h1>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
    <!-- /.content-header -->

        <!--Start table-->
        <table id="myTable" class="table table-bordered table-striped">
            <tr class="bg-info">
                <th>رقم المنتج</th>
                <th>رقم المستحدم</th>
                <th>اسم المستخدم</th>
                <th>هاتف المستخدم</th>
                <th>اسم القسم</th>
                <th>اسم المنتج</th>
                <th>الوصف</th>
                <th>السعر</th>
                <th>العملية</th>
            </tr>
            @foreach ($products as $product )
            <tr class="productRow{{ $product->id }}">
                <td>
                    {{ $product->id }}
                </td>
                <td>
                    {{ $product->user_id }}
                </td>
                <td >
                    {{ $product->user->name }}
                </td>
                <td >
                    {{ $product->user->phone_number }}
                </td>
                <td >
                    {{ $product->category->name }}
                </td>
                <td >
                    {{ $product->name }}
                </td>
                <td>
                    {{ $product->description }}
                </td>
                <td>
                    {{ $product->price }}
                </td>
                <td>
                    <button product_id="{{ $product->id }}"  class="delete_btn btn btn-danger">مسح</button>
                    <a class="btn btn-success" href="{{ route('admin.show-btn', $product->id) }}">المزيد</a>
                </td>
            </tr>
            @endforeach
        </table>
        <!--End table-->
        {{ $products->render() }}
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

                    $('.productRow'+product_id).remove();

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

                    $('.productRow'+product_id).remove();

                    //success message
                    toastr.success(response.msg);
                }
            });
        })

    </script>



    {{-- <script>

        //store data
        $(document).on('click', '#submitToCreate', function(e){
            e.preventDefault();

            var formData = new FormData($('#createForm')[0]);

            $.ajax({
                type: "post",
                enctype: "multipart/form-data",
                url: "{{ route('admin.product.store') }}",
                data: formData,

                processData: false,
                contentType: false,
                cache: false,

                success: function (data) {
                    var id      = data.data.id;
                    var category = data.data.category;
                    var name    = data.data.name;
                    var description =data.data.description;
                    var discount = data.data.discount;
                    var oldPrice    =data.data.oldPrice;
                    var price   =data.data.price;
                    var stock   =data.data.stock;
                    var orderCount =data.data.order_count;
                    var firstImage =data.data.first_image.url;



                        if(discount){
                            $('#myTable').append(
                                `<tr class="productRow${id}">
                                <td>${id}</td>
                                <td>${category.name}</td>
                                <td>${name}</td>
                                <td>${description}</td>
                                <td>${oldPrice}</td>
                                <td>${discount} %</td>
                                <td>${price}</td>
                                <td>${stock}</td>
                                <td>${orderCount}</td>
                                <td><img src="{{url('storage/products/`+firstImage+`')}}"
                                    style="width: 150px;">
                                </td>
                                <td>
                                    <button product_id="${id}" data-toggle="modal" data-target="#updateModal" class="editBtn btn btn-info">Edit</button>
                                    <button product_id="${id}" class="delete_btn btn btn-danger">Delete</button>
                                </td>
                            </tr>`);
                        }else{
                            $('#myTable').append(
                                `<tr class="productRow${id}">
                                <td>${id}</td>
                                <td>${category.name}</td>
                                <td>${name}</td>
                                <td>${description}</td>
                                <td>${price}</td>
                                <td><p> - </p></td>
                                <td><p> - </p></td>
                                <td>${stock}</td>
                                <td>${orderCount}</td>
                                <td><img src="{{url('storage/products/`+firstImage+`')}}"
                                    style="width: 150px;">
                                </td>
                                <td>
                                    <button product_id="${id}" data-toggle="modal" data-target="#updateModal" class="editBtn btn btn-info">Edit</button>
                                    <button product_id="${id}" class="delete_btn btn btn-danger">Delete</button>
                                </td>
                            </tr>`);
                        }

                    //cleare input data
                    $('#name').val('');
                    $('#category').val('');
                    $('#description').val('');
                    $('#discount').val('');
                    $('#price').val('');
                    $('#stock').val('');
                    $('#image').val('');

                    //success message
                    toastr.success(data.msg);


                },
                error: function (reject) {

                }
            });
        });

        //Update data
        //press edit
        $(document).on('click', '.editBtn', function(e){
            e.preventDefault();

            var product_id = $(this).attr('product_id');

            $.ajax({
                type:   "get",
                url:    "{{ route('admin.product.edit') }}",
                data:   {

                    'id' : product_id
                },

                success: function (data) {

                    var firstImage =data.data.first_image.url;


                    $('#editName').val(data.data.name);
                    $('#editCategory').val(data.category.id).text(data.category.name).prop('selected', true);
                    $('#editDescription').val(data.data.description);
                    $('#editPrice').val(data.data.price);
                    $('#editDiscount').val(data.data.discount);
                    $('#editStock').val(data.data.stock);
                    $('#orderCount').val(data.data.order_count);
                    $('#myImage').append(
                        `<img src="{{url('storage/products/`+firstImage+`')}}"
                                style="width: 150px;" id="editImage">`
                    );
                    $('#currentid').val(data.data.id);
                },
                error: function (reject) {

                },

                complete:function(){
                    //store updated
                    $(document).on('click', '#submitToUpdate', function(e){
                        e.preventDefault();

                        var formData = new FormData($('#updateForm')[0]);

                        $.ajax({
                            type:   "post",
                            url:    "{{ route('admin.product.update') }}",
                            data:   formData,

                            processData: false,
                            contentType: false,
                            cache: false,

                            success: function (data) {
                                var firstImage =data.data.first_image.url;

                                $(".product_id"+data.data.id).text(data.data.id);
                                $(".category_name"+data.data.id).text(data.data.category.name);
                                $(".product_name"+data.data.id).text(data.data.name);
                                $(".product_description"+data.data.id).text(data.data.description);
                                if(data.data.discount){
                                    $(".product_price"+data.data.id).text(data.data.oldPrice);
                                    $(".product_discount"+data.data.id).text(data.data.discount);
                                    $(".product_newPrice"+data.data.id).text(data.data.price);
                                }else{
                                    $(".product_price"+data.data.id).text(data.data.price);
                                    $(".product_discount"+data.data.id).text("-");
                                    $(".product_newPrice"+data.data.id).text("-");
                                }
                                $(".product_stock"+data.data.id).text(data.data.stock);
                                $(".product_orderCount"+data.data.id).text(data.data.order_count);

                                //success message
                                toastr.success(data.msg);


                            },
                            error: function (reject) {
                                console.log('no');

                            }
                        });
                    });
                }
            });
        });

        //delete
        $(document).on('click', '.delete_btn', function(e){
            e.preventDefault();

            var product_id = $(this).attr('product_id');

            $.ajax({
                type: "delete",
                url: "{{ route('admin.product.delete') }}",
                data: {
                    '_token': "{{ csrf_token() }}",
                    'id'    : product_id
                },

                success: function (data) {

                    $('.productRow'+data.id).remove();

                    //success message
                    toastr.success(data.msg);

                },
                error: function (reject) {

                }
            });

        }); --}}


    </script>
@endsection


