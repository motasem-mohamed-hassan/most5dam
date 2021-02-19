@extends('layouts.admin')
@section('content')

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-6">
            <div class="card card-secondary">
            <div class="card-header">
                <h3 class="card-title">About us</h3>
                <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.update.about', 1) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label>العنوان</label>
                        <input type="text" name="header" class="form-control" value="{{ $about->header }}">
                    </div>
                    <div class="form-group">
                        <label>وصف الموقع</label>
                        <input type="text" name="description" class="form-control" value="{{ $about->description }}">
                    </div>
                    <br>
                    <div class="form-group">
                        <label>عنوان القسم الثاني</label>
                        <input type="text" name="header" class="form-control" value="{{ $about->section2 }}">
                    </div>
                    <div class="form-group">
                        <label>محتوى القسم الثاني</label>
                        <input type="text" name="description" class="form-control" value="{{ $about->description2 }}">
                    </div>
                    <br>
                    <div class="form-group">
                        <label>عوان القسم الثالث</label>
                        <input type="text" name="header" class="form-control" value="{{ $about->section3 }}">
                    </div>
                    <div class="form-group">
                        <label>محتوى القسم الثالث</label>
                        <input type="text" name="description" class="form-control" value="{{ $about->description3 }}">
                    </div>
                    <br>

                    <input type="submit" value="Save Changes" class="btn btn-success float-right">
                </form>
            </div>
            <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
</section>
</div>


@endsection
