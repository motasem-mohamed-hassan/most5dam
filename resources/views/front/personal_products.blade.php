@extends('layouts.master')

@section('content')

<div class="container" style="direction: rtl;text-align:left;">
    <table class="table table-dark">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">اسم المنتج</th>
            <th scope="col">قسم المنتج</th>
            <th scope="col">السعر</th>
            <th scope="col">حالة المنتج</th>
            <th scope="col">صفحة المنتج</th>
        </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <th scope="row"> {{$loop->iteration}} </th>
                    <td>{{ $product->model }}</td>
                    <td>{{ $product->category->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>
                        {{ $product->status == 0 ? 'في انتظار النشر' : 'تم النشر' }}
                    </td>
                    <td>
                        <a class="btn btn-info" style="background-color: #5aaa15;border:none" href="{{ route('singleProduct', $product->id) }}">شاهد المنتج</a>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
</div>
  @endsection
