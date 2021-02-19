@extends('layouts.master')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">My Orders</h1>
                    </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
            <table class="table table-bordered table-striped">
                <tr class="bg-info">
                    <th>Order id</th>
                    <th>name</th>
                    <th>total</th>
                    <th>phone</th>
                    <th>address</th>
                    <th>city</th>
                    <th>address type</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>More details</th>

                </tr>
                @foreach ($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->full_name }}</td>
                    <td>{{ $order->total }}</td>
                    <td>{{ $order->phone }}</td>
                    <td>{{ $order->address }}</td>
                    <td>{{ $order->city }}</td>
                    <td>{{ $order->address_type }}</td>
                    <td>{{ $order->created_at }}</td>

                    @if($order->status == null)
                        <td><div class="bg-secondary color-palette"><span>waiting approve</span></div></td>
                    @elseif($order->status == 'Approved')
                        <td><div class="bg-info color-palette"><span>{{ $order->status }}</span></div></td>
                    @elseif($order->status == 'On delivery')
                        <td><div class="bg-warning color-palette"><span>{{ $order->status }}</span></div></td>
                    @elseif($order->status == 'Deliveried')
                        <td><div class="bg-success color-palette"><span>{{ $order->status }}</span></div></td>
                    @endif


                    <td>
                        <span class="float-right mr-2">
                            <a href={{ route('order_details', $order->id) }}" style="color: #00bcd4">
                                <i class="fa fa-eye"></i>
                            </a>
                        </span>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </section>

@endsection
