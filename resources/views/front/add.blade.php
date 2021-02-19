@extends('layouts.master')
@section('content')<br><br><br>
    <div class="container ">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('get_add_category') }}" method="get"  enctype="multipart/form-data" id="add-category">
            <div class="form-group" >
                <div class="row d-flex justify-content-start" >
                    <div  class="col-md-1"></div>
                    <div class="col-md-9">

                        <select name="category_id" class="form-control" id="category">
                            <option value="" selected>--اختر قسم--</option>
                            @foreach ($categories as $category)
                                <option category_id="{{ $category->id }}" id="categoriesOption" value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <label class="col-md-2 text-center">القسم</label>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="form-group" >
                <div class="row d-flex justify-content-start" >
                    <div  class="col-md-1"></div>
                    <div class="col-md-9" >
                        <select name="subCategory_id" class="form-control" id="subCategory">
                            <option value="" selected>--اختر ماركة--</option>
                        </select>
                    </div>

                    <label class="col-md-2 text-center">ماركة</label>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="modal-footer" >
                <input  type="submit" class="btn btn-info" value="تأكيد">
            </div>
        </form>

@endsection

@section('scripts')
    <script>
        $(document).on('change', '#category', function(e){
            e.preventDefault();
            var category_id = $('#category option:selected').val();
            $.ajax({
                type: "get",
                url: "{{ route('chose_sub') }}",
                data: {'id' : category_id},
                contentType: false,
                cache: false,
                success: function (response) {
                    $('.ajax').remove(); //remove result before
                    $.each(response.data, function(index, value) {
                        console.log(value);
                        $('#subCategory').append(`<option class="ajax" value="${value.id}">${value.name}</option>`);
                    });
                },
            });
        });
    </script>
@endsection
