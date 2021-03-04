@extends('layouts.admin')
@section('content')

    <div class="container py-3">
        <div class="modal" tabindex="-1" role="dialog" id="editCityModal">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">تعديل المدن</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

              <form action="" id="updateForm">
                @csrf
                <div class="modal-body">
                  <div class="form-group">
                    <input type="text" id="editName" name="name" class="form-control" value="تعديل">
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
                  <!-- create -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                <h3>اضافة مدينة</h3>
                </div>

                <div class="card-body">
                <form action="{{ route('admin.cities.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                    <select class="form-control" name="city_id">
                        <option value="">اختار المدينة</option>
                        @foreach ($cities->where('city_id', null) as $city)
                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                        @endforeach
                    </select>
                    </div>

                    <div class="form-group">
                    <input type="text" name="name" class="form-control" value="{{ old('name') }}" placeholder="اسم المدينة او الحي" required>
                    </div>

                    <div class="form-group">
                    <a href="{{ route('admin.dashboard') }}"class="btn btn-info">رجوع للرئيسية</a>
                    <button type="submit" class="btn btn-primary">انشاء</button>
                    </div>
                </form>
                </div>
            </div>
        </div>

        <div class="col-md-8">

          <div class="card">
            <div class="card-header">
              <h3>المدن والأحياء</h3>
            </div>
            <div class="card-body">
              <ul class="list-group">
                @foreach ($cities->where('city_id', null ) as $city)
                  <li class="list-group-item">
                    <div class="d-flex justify-content-between city_name{{ $city->id }}">
                      {{ $city->name }}
                      <div class="button-group d-flex">
                        <button type="button" city_name="{{ $city->name }}" city_id="{{ $city->id }}" class="editBtn btn btn-primary mr-1 edit-city" data-toggle="modal" data-target="#editCityModal">تعديل</button>

                        <form action="#" method="POST">
                            @csrf
                            <button type="submit" city_id="{{ $city->id }}" class="delete_btn btn btn-danger">حذف</button>
                        </form>
                    </div>

                    </div>
                    @if ($city->neighborhood)
                      <ul class="list-group mt-2" id="myTable{{ $city->id }}">
                        @foreach ($city->neighborhood as $neighborhood)
                          <li class="list-group-item">
                            <div class="d-flex justify-content-between city_name{{ $city->id }}">
                                {{ $neighborhood->name }}

                              <div class="button-group d-flex">
                                    <button type="button" city_name="{{ $neighborhood->name }}" city_id="{{ $neighborhood->id }}" class="editBtn btn btn-primary mr-1 edit-city" data-toggle="modal" data-target="#editCityModal">تعديل</button>

                                    <form action="#" method="POST">
                                        @csrf
                                        <button type="submit" city_id="{{ $neighborhood->id }}" class="delete_btn btn btn-danger">حذف</button>
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
      </div>
    </div>
    @endsection

    @section('scripts')
    <script>
        // update data
        //     press edit
            $(document).on('click', '.editBtn', function(e){
                e.preventDefault();

                var cityName  = $(this).attr('city_name');
                var cityId = $(this).attr('city_id');

                console.log(cityName);
                $('#editName').val(cityName);
                $('#currentid').val(cityId);

                $(document).on('click', '#submitToUpdate', function(e){
                    e.preventDefault();

                    var formData = new FormData($('#updateForm')[0]);

                    $.ajax({
                        type: "post",
                        url: "{{ route('admin.cities.update') }}",
                        data: formData,

                        processData : false,
                        contentType : false,
                        cache       : false,
                        success: function (data) {
                            if(data.status == true){
                            location.reload();
                            toastr.success(data.msg);
                        }
                        }
                    });

                });
            });

            //delete
            $(document).on('click', '.delete_btn', function(e){
                e.preventDefault();

                var city_id = $(this).attr('city_id');

                $.ajax({
                    type: "delete",
                    url: "{{ route('admin.cities.delete') }}",
                    data: {
                      '_token': "{{ csrf_token() }}",
                      'id'    : city_id
                    },

                    success: function (data) {


                        if(data.status == true){
                            location.reload();
                            toastr.success(data.msg);
                        }
                    },
                });

            });

    </script>
    @endsection
