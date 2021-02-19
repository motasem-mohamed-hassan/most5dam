@extends('layouts.master')

@section('content')
    <!-- checkout page -->
	<div class="privacy">
		<div class="container">
			<div class="checkout-right">
				<h4>Your shopping cart contains:
					<span>3 Products</span>
				</h4>
				<div class="table-responsive">
					<table class="timetable_sub">
						<thead>
							<tr>
								<th>SL No.</th>
                                <th>Product</th>
                                <th>Product Name</th>
								<th>Price</th>
                                <th>Quantity</th>
                                <th>Subtotal</th>
							</tr>
						</thead>
						<tbody>
                            @foreach ($products as $product)
                                <tr class="rem">
                                    <td class="invert">{{ $loop->iteration }}</td>
                                    <td class="invert-image">
                                        <a href="{{ route('singleProduct', $product->id) }}">
                                            <img src="{{ asset('storage/products/'.$product->first_image->url) }}" style="width: 100px;">
                                        </a>
                                    </td>
                                    <td class="invert">{{ $product->name }}</td>
                                    <td class="invert">${{ $product->price }}</td>
                                    <td class="invert">
                                        <div class="quantity">
                                            <div class="quantity-select">
                                                <div class="invert">
                                                    <span>{{ $product->pivot->quantity }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="invert">${{ $product->pivot->total }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
								<th>Total</th>
                                <th></th>
                                <th></th>
								<th></th>
                                <th></th>
                                <th>{{ $product->pivot->sum('total') }}</th>
								<th></th>
							</tr>
                        </tfoot>
					</table>
				</div>
			</div>
@endsection
