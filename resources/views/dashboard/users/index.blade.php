@extends('layouts.admin')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Users</h1>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
            <table class="table table-bordered table-striped">
                <tr class="bg-info">
                    <th>رقم المستخدم</th>
                    <th>الاسم</th>
                    <th>الايميل</th>
                    <th>الصلاحيات</th>
                </tr>
                @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>

                    <td>
                        @role('suberAdmin')
                            <form method="POST" action="{{ Route('admin.makeAdmin', $user->id) }}">
                                @method('PUT')
                                @csrf
                                @if ($user->hasRole('admin'))
                                    <button type="submit" class="btn btn-secondary waves-effect">ازالة الأدمن</button>
                                @else
                                    <button type="submit" class="btn btn-primary waves-effect">تسجيل كأدمن</button>
                                @endif
                            </form>
                        @endrole
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </section>




@endsection
