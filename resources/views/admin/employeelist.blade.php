@extends('admin.adminpanel')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Employee List</li>
                    </ol>
                </div>
                <a href={{ url('/deactivated-employee-list') }}>
                    <button class="btn btn-danger"><b>DEACTIVATED EMPLOYEES</b></button>
                </a>
            </div>
        </div><!-- /.container-fluid -->
    </section>


        @if(session('update-successfull'))
        <div class="container mt-4">
            <div class="alert alert-success">
                {{ session('update-successfull') }}
            </div>
        </div>
        @elseif (session('update-failed'))
        <div class="container mt-4">
            <div class="alert alert-danger">
                {{ session('update-failed') }}
            </div>
        </div>
        @endif

        @if(session('deactivate-successfull'))
        <div class="container mt-4">
            <div class="alert alert-success">
                {{ session('deactivate-successfull') }}
            </div>
        </div>
        @elseif (session('deactivate-failed'))
        <div class="container mt-4">
            <div class="alert alert-danger">
                {{ session('deactivate-failed') }}
            </div>
        </div>
        @endif

        @if(session('activate-successfull'))
        <div class="container mt-4">
            <div class="alert alert-success">
                {{ session('activate-successfull') }}
            </div>
        </div>
        @elseif (session('activate-failed'))
        <div class="container mt-4">
            <div class="alert alert-danger">
                {{ session('activate-failed') }}
            </div>
        </div>
        @endif


    <section class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-10">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                {{-- <th>Last Name</th> --}}
                                <th>E-mail</th>
                                <th>Phone Number</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($employees as $employee)
                                {{-- @if ($employee->is_active == 1 ) --}}
                                <tr>
                                    <td>{{ $employee->user_id }}</td>
                                    <td>{{ $employee->first_name }}</td>
                                    {{-- <td>{{ $employee->last_name }}</td> --}}
                                    <td>{{ $employee->email }}</td>
                                    <td>{{ $employee->phone_number }}</td>
                                    <td>
                                        <span class="badge bg-success">{{ $employee->role }}</span>
                                    </td>

                                    <td>
                                        <a href="{{ url('/show_employee', $employee->user_id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="{{ url('/deactivate_employee', $employee->user_id) }}" class="btn btn-danger btn-sm">Deactivate</a>
                                    </td>
                                </tr>

                                {{-- @else
                                <tr>
                                    <td><del>{{ $employee->user_id }}</del></td>
                                    <td><del>{{ $employee->first_name }}</del></td>
                                    <td><del>{{ $employee->last_name }}</del></td>
                                    <td><del>{{ $employee->email }}</del></td>
                                    <td><del>{{ $employee->phone_number }}</del></td>
                                    <td>
                                        <span class="badge bg-danger"><del>{{ $employee->role }}</del></span>
                                    </td>

                                    <td>
                                        <a href="{{ url('/activate_employee', $employee->user_id) }}" class="btn btn-success btn-sm">Activate</a>
                                    </td>
                                </tr>
                                @endif --}}
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection