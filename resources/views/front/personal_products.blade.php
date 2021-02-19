@extends('layouts.master')

@section('content')

<div class="container">
    <table class="table table-dark">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">اسم المنج</th>
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
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->category->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>
                        {{ $product->status == 0 ? 'في انتظار النشر' : 'تم النشر' }}
                    </td>
                    <td>
                        <a class="btn btn-info" href="{{ route('singleProduct', $product->id) }}">شاهد المنتج</a>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
</div>
  @endsection
