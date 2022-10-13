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
                        <li class="breadcrumb-item active">Assigned Tasks - Dashboard</li>
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
                        Pending for Review
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">

                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Module</th>
                                    <th scope="col">Submodule</th>
                                    <th scope="col">Client Name</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>John</td>
                                    <td>Doe</td>
                                    <td>GST</td>
                                    <td>GST FILINGS</td>
                                    <td>Client-1</td>
                                    <td>
                                        <span class="btn btn-md btn-success">Invoice</span>
                                        <span class="btn btn-md btn-danger">Revert Back</span>
                                    </td>
                                </tr>

                                <tr>
                                    <th scope="row">1</th>
                                    <td>Ashok</td>
                                    <td>Kumar</td>
                                    <td>AUDIT</td>
                                    <td>AUDITING</td>
                                    <td>Client-2</td>
                                    <td>
                                        <span class="btn btn-md btn-success">Invoice</span>
                                        <span class="btn btn-md btn-danger">Revert Back</span>
                                    </td>
                                </tr>

                                <tr>
                                    <th scope="row">1</th>
                                    <td>Jessy</td>
                                    <td>Jones</td>
                                    <td>TDS</td>
                                    <td>TDS FILINGS</td>
                                    <td>Client-3</td>
                                    <td>
                                        <span class="btn btn-md btn-success">Invoice</span>
                                        <span class="btn btn-md btn-danger">Revert Back</span>
                                    </td>
                                </tr>

                                <tr>
                                    <th scope="row">1</th>
                                    <td>Gal</td>
                                    <td>Gadot</td>
                                    <td>TCS</td>
                                    <td>TCS FILINGS</td>
                                    <td>Client-4</td>
                                    <td>
                                        <span class="btn btn-md btn-success">Invoice</span>
                                        <span class="btn btn-md btn-danger">Revert Back</span>
                                    </td>
                                </tr>

                                <tr>
                                    <th scope="row">1</th>
                                    <td>Sheikh</td>
                                    <td>Hasina</td>
                                    <td>ITR</td>
                                    <td>ITR FILINGS</td>
                                    <td>Client-5</td>
                                    <td>
                                        <span class="btn btn-md btn-success">Invoice</span>
                                        <span class="btn btn-md btn-danger">Revert Back</span>
                                    </td>
                                </tr>

                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection