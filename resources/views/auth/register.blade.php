@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('تسجيل حساب') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-8">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('الاسم') }}</label>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('البريد الالكتروني') }}</label>
                        </div>

                        <div class="form-group row" >
                            <div class="col-md-8">
                                <select name="city" class="form-control selectCity" id="" required>
                                    <option value="" selected>--اختر المدينة--</option>
                                    @foreach ($cities->where('city_id', null) as $city)
                                        <option city_id="{{ $city->id }}" id="citiesOption" value="{{ $city->id }}">{{ $city->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <label class="col-md-4 col-form-label text-md-right">المدينة</label>
                        </div>
                        <div class="form-group row" >
                            <div class="col-md-8" >
                                <select name="neighborhood" class="form-control" id="child_city" required>
                                    <option value="" selected>--اختر الحي--</option>
                                </select>
                            </div>
                            <label class="col-md-4 col-form-label text-md-right">الحي</label>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-8">
                                <input id="phone" type="number"  class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number">
                                @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <label for="phone" class="col-md-4 col-form-label text-md-right">رقم الهاتف</label>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-8">
                                <input id="acc_number" type="number"  class="form-control @error('acc_number') is-invalid @enderror" name="acc_number" value="{{ old('acc_number') }}" required autocomplete="acc_number">

                                @error('acc_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <label for="acc_number" class="col-md-4 col-form-label text-md-right">رقم الحساب البنكي</label>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-8">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('الرقم السري') }}</label>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-8">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('تأكيد الرقم السري') }}</label>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('تسجيل') }}
                                </button>
                            </div>
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
        $(document).on('change', '.selectCity', function(e){
            e.preventDefault();
            var city_id = $('.selectCity option:selected').val();
            $.ajax({
                type: "get",
                url: "{{ route('chose_city') }}",
                data: {'id' : city_id},
                contentType: false,
                cache: false,

                success: function (response) {
                    $('.ajax').remove(); //remove result before
                    $.each(response.data, function(index, value) {
                        $('#child_city').append(`<option class="ajax" value="${value.id}">${value.name}</option>`);
                    });
                },

            });
        });
    </script>
@endsection

