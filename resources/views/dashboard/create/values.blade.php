@extends('layouts.admin')
@section('content')

<div class="container py-3">
    <div class="modal" tabindex="-1" role="dialog" id="editValueModal">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">تعديل القيمة</h5>

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <form action="" id="updateForm">
            @csrf

            <div class="modal-body">
              <div class="form-group">
                <input type="text" id="editName_en" name="name" class="form-control" value="تعديل القيمة انجليزي">
              </div>
              <div class="form-group">
                <input type="text" id="editName_ar" name="الاسم" class="form-control" value="تعديل القيمة عربي">
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
          <h3>{{ $filter->الاسم }}</h3>
        </div>
        <div class="card-body">
            @if ($filter->values)
                <ul class="list-group mt-2" id='myTable'>
                @foreach ($filter->values as $value)
                    <li class="list-group-item">
                        <div class="d-flex justify-content-between">
                            {{ $value->name }} -- {{ $value->الاسم }}
                            <div class="button-group d-flex">
                            <button type="button" value_id="{{ $value->id }}" name_en="{{ $value->name }}" name_ar="{{ $value->الاسم }}" class="editBtn btn btn-sm btn-primary mr-1" data-toggle="modal" data-target="#editValueModal">تعديل</button>
                            <form action="#" method="POST">
                                @csrf
                                <button type="submit" value_id="{{ $value->id }}" class="delete_btn btn btn-sm btn-danger">حذف</button>
                            </form>
                            </div>
                        </div>
                    </li>
                @endforeach
                </ul>
            @endif
        </div>
      </div>
    </div>
    <!-- create -->
    <div class="col-md-4">
      <div class="card">
        <div class="card-header">
          <h3>اضافة قيمة</h3>
        </div>

        <div class="card-body">
          <form action="" method="" id="createForm">
            @csrf
            <input type="text" name="category_id" value="{{ $filter->category_id }}" hidden>
            <input type="text" name="filter_id" value="{{ $filter->id }}" hidden>

            <div class="form-group">
              <input type="text" name="name" id="name_en" class="form-control" value="{{ old('name') }}" placeholder="اسم القيمة انجليزي" required>
            </div>
            <div class="form-group">
              <input type="text" name="الاسم" id="name_ar" class="form-control" value="{{ old('الاسم') }}" placeholder="اسم القيمة عربي" required>
            </div>

            @if($filter->brand == 0)
                <div class="form-group">
                    <label>الماركة التابع لها هذه القيمة</label>
                    <select class="custom-select" name="brand_id">
                            <option value="" selected disabled></option>
                        @foreach($brands as $brand)
                            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                        @endforeach
                    </select>
                </div>
            @endif

            <div class="form-group">
              <button type="submit" id="submitToCreate" class="btn btn-primary">انشاء</button>
              <a href="{{ route('admin.filters.index') }}"class="btn btn-info">رجوع للفلاتر -></a>
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
            url: "{{ route('admin.value.store') }}",
            data: formData,

            processData: false,
            contentType: false,
            cache: false,

            success: function (data) {
                console.log(data.data);
                var id              = data.data.id;
                var name_en         = data.data.name;
                var name_ar         = data.data.الاسم;

                $('#myTable').append(
                `<li class="list-group-item">
                    <div class="d-flex justify-content-between">
                        ${name_en} -- ${name_ar}
                        <div class="button-group d-flex">
                        <button type="button" value_id="${id}" name_en="${name_en}" name_ar="${name_ar}" class="editBtn btn btn-sm btn-primary mr-1" data-toggle="modal" data-target="#editValueModal">تعديل</button>
                        <form action="#" method="POST">
                            @csrf
                            <button type="submit" value_id="${id}" class="delete_btn btn btn-sm btn-danger">حذف</button>
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

            var value_id = $(this).attr('value_id');
            var name_en = $(this).attr('name_en');
            var name_ar = $(this).attr('name_ar');

                $('#editName_en').val(name_en);
                $('#editName_ar').val(name_ar);
                $('#currentid').val(value_id);
        });

            //store update
            $(document).on('click', '#submitToUpdate', function(e){
            e.preventDefault();

                var formData = new FormData($('#updateForm')[0]);

                $.ajax({
                    type:   "post",
                    url:    "{{ route('admin.value.update') }}",
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


        //delete
        $(document).on('click', '.delete_btn', function(e){
            e.preventDefault();

            var value_id = $(this).attr('value_id');

            $.ajax({
                type: "delete",
                url: "{{ route('admin.value.delete') }}",
                data: {
                    '_token': "{{ csrf_token() }}",
                    'id'    : value_id
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


