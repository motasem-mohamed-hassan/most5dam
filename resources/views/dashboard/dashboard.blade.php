@extends('layouts.admin')
@section('content')


<!-- Main content -->
<section class="content">
    <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
            <h3>{{ $allProductsCount }}</h3>
            <p>جميع المنتجات</p>
            </div>
            <div class="icon">
            <i class="ion ion-bag"></i>
            </div>
            <a href="{{ route('admin.products.index') }}" class="small-box-footer">الانتقال الى الصفحة<i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
            <div class="inner">
                <h3>{{ $productsApprovedCount }}</h3>
                <p>منتجات تم الموافقة عليها</p>
            </div>
            <div class="icon">
            <i class="ion ion-stats-bars"></i>
            </div>
            <a href="{{ route('admin.products.approved') }}" class="small-box-footer">الانتقال الى الصفحة <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
            <div class="inner">
            <h3>{{ $productsNotApprovedCount }}</h3>
            <p>منتجات في انتظار الموافقة</p>
            </div>
            <div class="icon">
            <i class="ion ion-pie-graph"></i>
            </div>
            <a href="{{ route('admin.products.waiting') }}" class="small-box-footer">الانتقال الى الصفحة <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                <h3>{{ $usersCount }}</h3>
                <p>المستخدمين</p>
                </div>
                <div class="icon">
                <i class="ion ion-person-add"></i>
                </div>
                <a href="{{ route('admin.users.index') }}" class="small-box-footer">الانتقال الى الصفحة <i class="fas fa-arrow-circle-right"></i></a>
            </div>
            </div>

    </div>
    <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->



@endsection
