@extends('manager.managerpanel')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Assign Tasks | Select Module > Select Submodule > Select Employee</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row justify-content-center">

                <div class="col-10 card">
                    <div class="card-header bg-primary">
                        <b>LIST OF REGISTERED EMPLOYEES</b>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">E-mail</th>
                                    <th scope="col">Phone Number</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($registered_employees as $employee)
                                <tr>
                                    <th scope="row">{{ $employee->user_id }}</th>
                                    <td>{{ $employee->full_name }}</td>
                                    <td><span class="badge bg-success">{{ $employee->role }}</span></td>
                                    <td>{{ $employee->email }}</td>
                                    <td>{{ $employee->phone_number }}</td>
                                    <td>
                                        <span>
                                            <input type="checkbox">
                                        </span>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <hr>
                    <div class="card-footer">
                        <a href="{{ url('/task-assign-successfull') }}" class="btn btn-success btn-lg active mb-2" role="button" aria-pressed="true">Assign</a>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection