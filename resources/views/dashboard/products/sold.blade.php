@extends('layouts.admin')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">جميع المنتجات</h1>
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
                    {{ $product->model }}
                </td>
                <td>
                    {{ $product->description }}
                </td>
                <td>
                    {{ $product->price }}
                </td>
                <td>
                    {{-- <button product_id="{{ $product->id }}"  class="approve_btn btn btn-info">موافقة</button> --}}
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

@endsection


