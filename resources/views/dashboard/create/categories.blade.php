@extends('layouts.admin')
@section('content')

    <div class="container py-3">
        <div class="modal" tabindex="-1" role="dialog" id="editCategoryModal">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">تعديل القسم</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

              <form action="" id="updateForm" method="">
                @csrf

                <div class="modal-body">
                  <div class="form-group">
                    <input type="text" id="editName_en" name="name" class="form-control" value="تعديل القسم انجليزي">
                  </div>
                  <div class="form-group">
                    <input type="text" id="editName_ar" name="الاسم" class="form-control" value="تعديل القسم عربي">
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
              <h3>الاقسام</h3>
            </div>
            <div class="card-body">
              <ul class="list-group" id="myTable">
                @foreach ($categories as $category)
                  <li class="list-group-item">
                    <div class="d-flex justify-content-between category_name{{ $category->id }}">
                      {{ $category->name }} -- {{ $category->الاسم }}

                      <div class="button-group d-flex">
                        <button type="button" category_id="{{ $category->id }}" class="editBtn btn btn-sm btn-primary mr-1 edit-category" data-toggle="modal" data-target="#editCategoryModal">Edit</button>

                        <form action="#" method="POST">
                          @csrf
                          <button type="submit" category_id="{{ $category->id }}" class="delete_btn btn btn-sm btn-danger">Delete</button>
                        </form>
                      </div>
                    </div>
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
              <h3>اضافة قسم</h3>
            </div>

            <div class="card-body">
              <form action="" method="" id="createForm">
                @csrf
                <div class="form-group">
                  <input type="text" name="name" id="name_en" class="form-control" value="{{ old('name') }}" placeholder="اسم القسم انجليزي" required>
                </div>
                <div class="form-group">
                  <input type="text" name="الاسم" id="name_ar" class="form-control" value="{{ old('الاسم') }}" placeholder="اسم القسم عربي" required>
                </div>

                <div class="form-group">
                  <button type="submit" id="submitToCreate" class="btn btn-primary">انشاء</button>
                  <a href="{{ route('admin.filters.index') }}"class="btn btn-info">ذهاب للفلاتر</a>
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
                  var name_en    = data.data.name;
                  var name_ar     = data.data.الاسم;

                  $('#myTable').append(
                    `<li class="list-group-item">
                      <div class="d-flex justify-content-between category_name${id}">
                        ${name_en} -- ${name_ar}

                        <div class="button-group d-flex">
                          <button type="button" category_id="${id}" class="editBtn btn btn-sm btn-primary mr-1 edit-category" data-toggle="modal" data-target="#editCategoryModal">Edit</button>

                          <form action="#" method="POST">
                            @csrf
                            <button type="submit" category_id="${id}" class="delete_btn btn btn-sm btn-danger">Delete</button>
                          </form>
                        </div>
                      </div>
                    </li>`
                  );
                  // cleare input data
                  $('#name_en').val('');
                  $('#name_ar').val('');


                  //success message
                  toastr.success(data.msg);

                }
            });
          });

        // update data
        //     press edit
            $(document).on('click', '.editBtn', function(e){
                e.preventDefault();

                var category_id = $(this).attr('category_id');

                $.ajax({
                  type:   "get",
                  url:    "{{ route('admin.categories.edit') }}",
                  data:   {'id' : category_id},

                  success: function (data) {
                      $('#editName_en').val(data.data.name);
                      $('#editName_ar').val(data.data.الاسم);
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
                });

            });

    </script>
    @endsection

