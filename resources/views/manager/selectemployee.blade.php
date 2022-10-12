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
                                    <th scope="col">Client Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>John</td>
                                    <td>Doe</td>
                                    <td>Client 1</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jessy</td>
                                    <td>Jones</td>
                                    <td>Client 2</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>Page</td>
                                    <td>Client 3</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Jack</td>
                                    <td>Sparrow</td>
                                    <td>Client 4</td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Gal</td>
                                    <td>Gadot</td>
                                    <td>Client 5</td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>Larry</td>
                                    <td>Page</td>
                                    <td>Client 6</td>
                                </tr>
                                <tr>
                                    <th scope="row">7</th>
                                    <td>Abhinav</td>
                                    <td>Sharma</td>
                                    <td>Client 7</td>
                                </tr>
                                <tr>
                                    <th scope="row">8</th>
                                    <td>Aaimaan</td>
                                    <td>Beig</td>
                                    <td>Client 8</td>
                                </tr>
                                <tr>
                                    <th scope="row">9</th>
                                    <td>Anish</td>
                                    <td>Kulkarni</td>
                                    <td>Client 9</td>
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