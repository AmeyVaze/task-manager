@extends('admin.adminpanel')

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
                        <li class="breadcrumb-item"><a href="#">Home/Employee List</a></li>
                        <li class="breadcrumb-item active">Edit Employee Details</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <div class="row justify-content-center">
        <div class="col-6 register-box">
            <div class="card card-primary">
                <div class="card-header text-center bg-purple">
                    <p class="login-box-msg"><h4><b>Edit employee details</b></h4></p>
                </div>
                <div class="card-body">
                    <form action="{{ url('update_employee_details', $employee_details[0]->user_id) }}" method="POST">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="first_name" value="{{ $employee_details[0]->first_name }}" required id="first_name">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>

                        {{-- <div class="input-group mb-3">
                            <input type="text" class="form-control" name="last_name" value="{{ $employee_details[0]->last_name }}" required id="last_name">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div> --}}


                        <div class="input-group mb-3">
                            <input type="email" class="form-control" name="email" value="{{ $employee_details[0]->email }}" required id="email">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="phone_no" value="{{ $employee_details[0]->phone_number }}" required id="phone_no">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-phone"></span>
                                </div>
                            </div>
                        </div>

                        <div>
                            <select class="form-control select2 mb-3" style="width: 100%;" name="role" required id="role">
                                <option selected="selected">{{ $employee_details[0]->role }}</option>
                                <option>Administrator</option>
                                <option>Chief Manager</option>
                                <option>Manager</option>
                                <option>Employee</option>
                                <option>Front Desk</option>
                            </select>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <button type="submit" class="btn btn-lg btn-success">Update</button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>

                </div>
                <!-- /.form-box -->
            </div><!-- /.card -->
        </div>
        <!-- /.register-box -->
    </div>
</div>
@endsection

