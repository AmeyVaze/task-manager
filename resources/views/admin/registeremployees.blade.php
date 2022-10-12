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
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Register Employees</li>
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
                    <p class="login-box-msg"><h4><b>Register a new employee</b></h4></p>
                </div>
                <div class="card-body">
                    <form action="../../index.html" method="post">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="First name">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Last name">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>


                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Email">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Phone Number">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-phone"></span>
                                </div>
                            </div>
                        </div>

                        <div>
                            <select class="form-control select2 mb-3" style="width: 100%;">
                                <option selected="selected">Select role</option>
                                <option>Administrator</option>
                                <option>Chief Manager</option>
                                <option>Manager</option>
                                <option>Employee</option>
                                <option>Front Desk</option>
                            </select>
                        </div>

                        <div class="input-group mb-3">
                            <input type="password" class="form-control" placeholder="Password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <input type="password" class="form-control" placeholder="Confirm password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-4">
                                <button type="submit" class="btn btn-lg btn-success">Register</button>
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