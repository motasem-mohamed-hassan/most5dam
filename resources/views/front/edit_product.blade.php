@extends('layouts.master')
@section('content')<br><br><br>
<div class="ads-grid">
    <div class="container">
        <!-- tittle heading -->
        <h3 class="tittle-w3l">{{ $category->الاسم }}
            <span class="heading-style">
                <i></i>
                <i></i>
                <i></i>
            </span>
        </h3>
    </div>
</div>

    <div id="adding-product" class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('update_product', $product->id)}}" method="post"  enctype="multipart/form-data">
            @csrf
            @method('put')
            <input style="display: none" type="text" name="brand_id" class="form-control" value="{{ $brand_id }}">
            <input style="display: none" type="text" name="category_id" class="form-control" value="{{ $category->id }}">

            @foreach($filters as $filter )
                @if($filter->type == 'input')
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-7 ">
                                <input type="text" name="{{ $filter->name }}" value="{{ $product->{$filter->name} }}" placeholder="{{ $filter->name }}" class="form-control" required>
                            </div>
                            <label class="col-md-2 text-center mr-5">{{ $filter->الاسم }}</label>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                @else
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-7 ">
                                <select class="form-control" name="{{ $filter->name }}" required>
                                    <option selected value="{{ $product->{$filter->name} }}">{{ $product->{$filter->name} }}</option>
                                    @foreach($filter->values->where('brand_id', $brand_id) as $value)
                                        @if($value->الاسم != $product->{$filter->name})
                                        <option value="{{ $value->الاسم }}">{{ $value->الاسم }}</option>
                                        @endif
                                    @endforeach
                                    @foreach($filter->values->where('brand_id', null) as $value)
                                        @if($value->الاسم != $product->{$filter->name})
                                        <option value="{{ $value->الاسم }}">{{ $value->الاسم }}</option>
                                        @endif
                                @endforeach
                                </select><br>
                            </div>
                            <label class="col-md-2 text-center mr-5">{{ $filter->الاسم }}</label>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                @endif
            @endforeach
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-7">
                            <input type="text" name="price" value="{{ $product->price }}" id="price" class="form-control" required>
                        </div>
                        <label class="col-md-2 text-center">السعر</label>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">

                        <div class="col-md-7">
                            <input class="btn back" type="file" name="image[]" id="image" class="form-control" multiple >
                        </div>
                        <label class="col-md-2 text-center">صور المنتج</label>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="modal-footer "style="display: flex; justify-content:flex-end">
                    <input  type="submit" class="btn btn-info" value="تأكيد">
                </div>
        </form>
    </div>
@endsection
