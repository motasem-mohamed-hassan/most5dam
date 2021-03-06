@extends('layouts.master')

@section('content')

<!-- User account -->
<div class="container">
    <div class="main-body">
        <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
                <div  id="user-card" class="card bg-light ">
                    @if(!$user->image)
                        <img src="{{ asset('frontend/images/avatar.png') }}" id='output_image' class="card-img-top" alt="profile-picture" style="width: 100% ; border-radius:50% ">
                    @else
                        <img src="{{ asset('storage/avatars/'.$user->image) }}" id='output_image' class="card-img-top" alt="profile-picture" style="width: 100% ; border-radius:50% "  >
                    @endif
                    <div class="card-body">
                        <h3 class="card-title">{{ $user->name }}</h3>
                        <Small>لتغيير الصورة اضغط على الزر ادناه</Small>
                    </div>
                    @if($user->id == Auth::id())
                    <div class="card-body">
                        <form action="{{ route('add-avatar', $user->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <input name="image" type="file" accept="image/*" onchange="preview_image(event)" id="change-profile-btn"><br>
                            <button style="display: none" type="submit" id="confirm-photo">تأكيد الصورة</button>
                        </form>
                    </div>
                    @endif
                </div>
            </div>
            <div id="user-information" class="col-md-8" >
                <div class="card2 ">
                    <div class="card-body">
                        <div class="row my-3">
                            <div id="d" class="col-sm-9 text-secondary ">
                                {{ $user->name }}
                            </div>
                            <div class="col-sm-3 " >
                                <h4 class="mb-0">الاسم</h4>
                            </div>
                        </div>
                        <hr>
                        <div class="row my-3">

                            <div id="d" class="col-sm-9 text-secondary">
                                {{ $user->email }}
                            </div>
                            <div class="col-sm-3">
                                <h4 class="mb-0">البريد الالكترونى</h4>
                            </div>
                        </div>
                        <hr>
                        <div class="row my-3">

                            <div id="d" class="col-sm-9 text-secondary">
                                {{ $user->phone_number }}
                            </div>
                            <div class="col-sm-3">
                                <h4 class="mb-0">رقم الهاتف</h4>
                            </div>
                        </div>
                        <hr>

                        <div class="row my-3">

                            <div id="d" class="col-sm-9 text-secondary">
                                {{ $user->city }}
                            </div>
                            <div class="col-sm-3">
                                <h4 class="mb-0">المدينة</h4>
                            </div>
                        </div><hr>
                        <div class="row my-3">

                            <div id="d" class="col-sm-9 text-secondary">
                                {{ $user->neighborhood }}
                            </div>
                            <div class="col-sm-3">
                                <h4 class="mb-0">الحي</h4>
                            </div>
                        </div><br>

                        @if($user->id == Auth::id())
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-success info m-2" type="submit" id="edit-button" data-toggle="modal" data-target="#staticBackdrop">
                                تعديل البيانات الشخصية
                            </button>
                                <a class="btn btn-success" href="{{ route('personal-products', Auth::id()) }}">
                                منتجاتك
                                </a>
                        </div>
                        @else
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-success mr-2"> تواصل مع البائع
                            </button>
                            <!-- <button class="btn backs" type="submit" id="end-editing"> save</button> -->
                        </div>
                        @endauth
                    </div>
                </div>
                <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="text-center" id="staticBackdropLabel">تعديل البيانات الشخصية </h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('profile.update') }}" method="post">
                                    @method('PUT')
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">الاسم</label>
                                        <input type="text" class="form-control" name="name" value="{{ $user->name }}">
                                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">البريد الالكترونى</label>
                                        <input type="email" class="form-control" name="email" value="{{ $user->email }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">رقم الهاتف</label>
                                        <input type="tel" class="form-control" name="phone_number" value="{{ $user->phone_number }}" onkeypress="return onlyNumberKey(event)">
                                    </div>
                                    <div class="form-group" >
                                        <label class="text-center">المدينة</label>
                                        <select name="city" class="form-control" id="selectCity">
                                            <option disabled selected>{{ $user->city }}</option>
                                            @foreach ($cities->where('city_id', null) as $city)
                                                <option city_id="{{ $city->id }}" id="citiesOption" value="{{ $city->id }}">{{ $city->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group" >
                                        <label class=text-center">الحي</label>
                                        <select name="neighborhood" class="form-control child_city" id="">
                                            <option disabled selected>{{ $user->neighborhood }}</option>
                                        </select>
                                    </div>
                                        <div class="modal-footer">
                                        <input type="submit" class="btn btn-info" value="تأكيد">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-------------- User account ------------->
@endsection

@section('scripts')
<script type="text/javascript">
    function preview_image(event) {
      var reader = new FileReader();
      reader.onload = function(){
        var output = document.getElementById('output_image');
        output.src = reader.result;
        var confirm=document.getElementById('confirm-photo');
        confirm.style.display="inline-block";
      }
      reader.readAsDataURL(event.target.files[0]);
    }
</script>

<script>
    $(document).on('change', '#selectCity', function(e){
        e.preventDefault();
        var city_id = $('#selectCity option:selected').val();
        $.ajax({
            type: "get",
            url: "{{ route('chose_city_profile') }}",
            data: {'id' : city_id},
            contentType: false,
            cache: false,

            success: function (response) {
                console.log(response.data)
                $('.ajax').remove(); //remove result before
                $.each(response.data, function(index, value) {
                    $('.child_city').append(`<option class="ajax" value="${value.name}">${value.name}</option>`);
                });
            },

        });
    });

</script>

@endsection
