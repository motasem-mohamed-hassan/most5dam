@extends('layouts.admin')
@section('content')

    <div class="container py-3">

        <div class="modal" tabindex="-1" role="dialog" id="editCategoryModal">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">تعديل الماركة</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

              <form action="" id="updateForm" method="">
                @csrf

                <div class="modal-body">
                  <div class="form-group">
                    <input type="text" id="editName" name="name" class="form-control" value="">
                  </div>
                </div>

                <div class="modal-footer">
                    <input type="text" name="id" id="currentid" class="form-control" value="" hidden>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                    <button type="submit" id="submitToUpdate" class="btn btn-primary" data-dismiss="modal">تعديل</button>
                </div>
              </div>
              </form>
          </div>
        </div>

      <div class="row">
        <div class="col-md-8">

          <div class="card">
            <div class="card-header">
              <h3>الماركات</h3>
            </div>
            <div class="card-body">
              <ul class="list-group">
                @foreach ($categories as $category)
                  <li class="list-group-item">
                    <div class="d-flex justify-content-between category_name{{ $category->id }}">
                      {{ $category->name }}

                      {{-- <div class="button-group d-flex">
                        <button type="button" category_id="{{ $category->id }}" class="editBtn btn btn-sm btn-primary mr-1 edit-category" data-toggle="modal" data-target="#editCategoryModal">Edit</button>

                        <form action="#" method="POST">
                          @csrf
                          <button type="submit" category_id="{{ $category->id }}" class="delete_btn btn btn-sm btn-danger">Delete</button>
                        </form>
                      </div> --}}
                    </div>

                    @if ($category->children)
                      <ul class="list-group mt-2">
                        @foreach ($category->children as $child)
                          <li class="list-group-item">
                            <div class="d-flex justify-content-between subCategory_name{{ $category->id }}">
                              {{ $child->name }}

                              <div class="button-group d-flex">
                                <button type="button" category_id="{{ $child->id }}" class="editBtn btn btn-sm btn-primary mr-1 edit-category" data-toggle="modal" data-target="#editCategoryModal">تعديل</button>

                                <form action="#" method="POST">
                                  @csrf
                                  <button type="submit" category_id="{{ $child->id }}" class="delete_btn btn btn-sm btn-danger">حذف</button>
                                </form>
                              </div>
                            </div>
                          </li>
                        @endforeach
                      </ul>
                    @endif
                  </li>
                @endforeach
              </ul>
            </div>
          </div>
        </div>
        <!-- create -->
        <div class="col-md-4">
          <div class="card">
            <div class="card-header">
              <h3>اضافة ماركة</h3>
            </div>

            <div class="card-body">
              <form action="{{ route('admin.categories.store') }}" method="POST">
                @csrf

                <div class="form-group">
                  <select class="form-control" name="parent_id">
                    <option value="">اختار القسم</option>

                    @foreach ($categories as $category)
                      <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                  </select>
                </div>

                <div class="form-group">
                  <input type="text" name="name" class="form-control" value="{{ old('name') }}" placeholder="اسم الماركة" required>
                </div>

                <div class="form-group">
                  <button type="submit" class="btn btn-primary">انشاء</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endsection

    @section('scripts')
    <script>
        //update data
            //press edit
            $(document).on('click', '.editBtn', function(e){
                e.preventDefault();

                var category_id = $(this).attr('category_id');

                $.ajax({
                    type:   "get",
                    url:    "{{ route('admin.categories.edit') }}",
                    data:   {'id' : category_id},

                    success: function (data) {
                        $('#editName').val(data.data.name);
                        $('#currentid').val(data.data.id);
                    },

                    complete:function(){
                        //store update
                        $(document).on('click', '#submitToUpdate', function(e){
                            e.preventDefault();

                            var formData = new FormData($('#updateForm')[0]);

                            $.ajax({
                                type:   "post",
                                url:    "{{ route('admin.categories.update') }}",
                                data:   formData,

                                processData: false,
                                contentType: false,
                                cache: false,

                                success: function (data) {

                                    location.reload();
                                    //success message
                                    toastr.success(data.msg);
                                },


                            });
                        });
                    }

                });
            });


            //delete
            $(document).on('click', '.delete_btn', function(e){
                e.preventDefault();

                var category_id = $(this).attr('category_id');

                $.ajax({
                    type: "delete",
                    url: "{{ route('admin.categories.delete') }}",
                    data: {
                        '_token': "{{ csrf_token() }}",
                        'id'    : category_id
                    },

                    success: function (data) {

                        if(data.status == true){
                            location.reload();
                            toastr.success(data.msg);
                        }

                        //success message

                    },
                    error: function (reject) {

                    }
                });

            });

    </script>
    @endsection

    {{-- <section class="content">
        <div class="container-fluid">
            <!-- Button trigger modal for create -->
            <button type="button" class="btn btn-info mb-3" data-toggle="modal" data-target="#createModal">
                Add New Category
            </button>

            <!-- create Modal -->
            <div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="createModalLabel">Add Category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!--Form-->
                        <form id="createForm" action="" method="">
                            @csrf
                            <div class="form-group">
                                <div class="row">
                                    <label for="name" class="col-md-3">Category Name</label>
                                    <div class="col-md-6">
                                        <input type="text" name="name" id="name" class="form-control">
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <input  id="submitToCreate" type="submit" class="btn btn-info" value="Create" data-dismiss="modal">
                            </div>
                        </form>
                    </div>
                </div>
                </div>
            </div>
            <!--End create Modal -->


            <!-- update Modal -->
            <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="updateModalLabel">Add Category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!--Form-->
                        <form id="updateForm" action="" method="">
                            @csrf
                            <div class="form-group">
                                <div class="row">
                                    <label for="name" class="col-md-3">Category Name</label>
                                    <div class="col-md-6">
                                        <input type="text" name="name" id="editName" class="form-control" value="">
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <input type="text" name="id" id="currentid" class="form-control" value="" hidden>
                                <input id="submitToUpdate" type="submit" class="btn btn-info" value="update" data-dismiss="modal">
                            </div>
                        </form>
                    </div>
                </div>
                </div>
            </div>
            <!--End update Modal -->



            <!--Table-->
            <table id="myTable" class="table table-bordered table-striped col-sm-12">
                <tr class="bg-info">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
                @foreach ($categories as $category)
                <tr class="categoryRow{{ $category->id }}">
                    <td class="category_id" style="width: 50px">{{ $category->id }}</td>
                    <td class="category_name{{ $category->id }}" style="width: 120px">{{ $category->name }}</td>
                    <td style="width: 120px">
                        <button category_id="{{ $category->id }}" data-toggle="modal" data-target="#updateModal" class="editBtn btn btn-info">Edit</button>
                        <button category_id="{{ $category->id }}" class="delete_btn btn btn-danger">Delete</button>
                    </td>
                </tr>
                @endforeach
            </table>
            <!--End Table-->

    </section>
@endsection

@section('scripts')
    <script>

        //store data
        $(document).on('click', '#submitToCreate', function(e){
            e.preventDefault();

            var formData = new FormData($('#createForm')[0]);

            $.ajax({
                type: "post",
                //enctype: "multipart/form-data",
                url: "{{ route('admin.categories.store') }}",
                data: formData,

                processData: false,
                contentType: false,
                cache: false,

                success: function (data) {
                    var id      = data.data.id;
                    var name    = data.data.name;

                    $('#myTable').append(
                        `<tr class="categoryRow${id}">
                            <td class="category_id" style="width: 50px">${id}</td>
                            <td class="category_name${id}" style="width: 120px">${name}</td>
                            <td style="width: 120px">
                                <button category_id="${id}" data-toggle="modal" data-target="#updateModal" id="editBtn"" class="editBtn btn btn-info">Edit</button>
                                <button category_id="${id}" class="delete_btn btn btn-danger">Delete</button>
                            </td>
                        </tr>`
                    );
                    //cleare input data
                    $('#name').val('');

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

            var category_id = $(this).attr('category_id');

            $.ajax({
                type:   "get",
                url:    "{{ route('admin.categories.edit') }}",
                data:   {'id' : category_id},

                success: function (data) {
                    $('#editName').val(data.data.name);
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
                            url:    "{{ route('admin.categories.update') }}",
                            data:   formData,

                            processData: false,
                            contentType: false,
                            cache: false,

                            success: function (data) {
                                $(".category_name"+data.data.id).text(data.data.name);

                                //success message
                                toastr.success(data.msg);

                            },

                            error: function (reject) {

                            }
                        });

                    });

                }
            });
        });


        //delete
        $(document).on('click', '.delete_btn', function(e){
            e.preventDefault();

            var category_id = $(this).attr('category_id');

            $.ajax({
                type: "delete",
                url: "{{ route('admin.categories.delete') }}",
                data: {
                    '_token': "{{ csrf_token() }}",
                    'id'    : category_id
                },

                success: function (data) {

                    if(data.status == true){
                        $('.categoryRow'+data.id).remove();
                        toastr.success(data.msg);
                    }

                    //success message

                },
                error: function (reject) {

                }
            });

        });

    </script> --}}
{{-- @endsection --}}

