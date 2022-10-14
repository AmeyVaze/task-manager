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
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-10">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>E-mail</th>
                                <th>Phone Number</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Larry</td>
                                <td>Page</td>
                                <td>larry@gmail.com</td>
                                <td>XXX355352</td>
                                <td>Administrator</td>
                                <td>
                                    <span>
                                        <a href="{{ url('/') }}">
                                            <button class="btn btn-sm btn-danger">Delete Employee</button>
                                        </a>
                                    </span>
                                </td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>John</td>
                                <td>Doe</td>
                                <td>john@gmail.com</td>
                                <td>XXX4233288</td>
                                <td>Manager</td>
                                <td>
                                    <span>
                                        <a href="{{ url('/') }}">
                                            <button class="btn btn-sm btn-danger">Delete Employee</button>
                                        </a>
                                    </span>
                                </td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>Gal</td>
                                <td>Gadot</td>
                                <td>galgadot@gmail.com</td>
                                <td>XXX847455</td>
                                <td>Chief Manager</td>
                                <td>
                                    <span>
                                        <a href="{{ url('/') }}">
                                            <button class="btn btn-sm btn-danger">Delete Employee</button>
                                        </a>
                                    </span>
                                </td>
                            </tr>

                            <tr>
                                <td>4</td>
                                <td>Nitin</td>
                                <td>Rana</td>
                                <td>ranaji@gmail.com</td>
                                <td>XXX9903030</td>
                                <td>Front Desk</td>
                                <td>
                                    <span>
                                        <a href="{{ url('/') }}">
                                            <button class="btn btn-sm btn-danger">Delete Employee</button>
                                        </a>
                                    </span>
                                </td>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection