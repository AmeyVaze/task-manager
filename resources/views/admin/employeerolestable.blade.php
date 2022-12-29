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
                        <li class="breadcrumb-item active">Manage Roles</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="card col-10">
                    <div class="card-header bg-primary bg-gradient">
                        <h3 class="card-title">Employee Table</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Abhinav</td>
                                    <td>Sharma</td>
                                    <td>Manager</td>
                                    <td>
                                        <a href="{{ url('/') }}">
                                        <span class="btn btn-sm bg-warning">Edit</span>
                                        <span class="btn btn-sm bg-danger">Delete</span>
                                        </a>
                                    </td>
                                </tr>


                                <tr>
                                    <td>2</td>
                                    <td>Aaimaan</td>
                                    <td>Beig</td>
                                    <td>Manager</td>
                                    <td>
                                        <a href="{{ url('/') }}">
                                        <span class="btn btn-sm bg-warning">Edit</span>
                                        <span class="btn btn-sm bg-danger">Delete</span>
                                        </a>
                                    </td>
                                </tr>


                                <tr>
                                    <td>3</td>
                                    <td>Anish</td>
                                    <td>Kulkarni</td>
                                    <td>Manager</td>
                                    <td>
                                        <a href="{{ url('/') }}">
                                        <span class="btn btn-sm bg-warning">Edit</span>
                                        <span class="btn btn-sm bg-danger">Delete</span>
                                        </a>
                                    </td>
                                </tr>


                                <tr>
                                    <td>4</td>
                                    <td>Salman</td>
                                    <td>Khan</td>
                                    <td>Administrator</td>
                                    <td>
                                        <a href="{{ url('/') }}">
                                        <span class="btn btn-sm bg-warning">Edit</span>
                                        <span class="btn btn-sm bg-danger">Delete</span>
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>5</td>
                                    <td>John</td>
                                    <td>Doe</td>
                                    <td>Employee</td>
                                    <td>
                                        <a href="{{ url('/') }}">
                                        <span class="btn btn-sm bg-warning">Edit</span>
                                        <span class="btn btn-sm bg-danger">Delete</span>
                                        </a>
                                    </td>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
</div>
</section>

</div>
@endsection