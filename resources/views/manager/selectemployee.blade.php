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
                        Select employee from the list
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>John</td>
                                    <td>Doe</td>
                                    <td>Busy</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jessy</td>
                                    <td>Jones</td>
                                    <td>Available</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>Page</td>
                                    <td>Available</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Jack</td>
                                    <td>Sparrow</td>
                                    <td>Busy</td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Gal</td>
                                    <td>Gadot</td>
                                    <td>Available</td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>Larry</td>
                                    <td>Page</td>
                                    <td>Available</td>
                                </tr>
                                <tr>
                                    <th scope="row">7</th>
                                    <td>Abhinav</td>
                                    <td>Sharma</td>
                                    <td>Busy</td>
                                </tr>
                                <tr>
                                    <th scope="row">8</th>
                                    <td>Aaimaan</td>
                                    <td>Beig</td>
                                    <td>Available</td>
                                </tr>
                                <tr>
                                    <th scope="row">9</th>
                                    <td>Anish</td>
                                    <td>Kulkarni</td>
                                    <td>Available</td>
                                </tr>
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