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
                        <li class="breadcrumb-item active">Client List</li>
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
                                <th>Company Name</th>
                                <th>Organization Type</th>
                                <th>E-mail</th>
                                <th>Phone Number</th>
                                <th>Registered Address</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Tesla Motors</td>
                                <td>Private Ltd.</td>
                                <td>teslamotors@gmail.com</td>
                                <td>XXXX2338699</td>
                                <td>California, USA</td>
                                <td>
                                    <span class="btn btn-md btn-success" data-toggle="button" aria-pressed="true">Active</span>
                                    <span class="btn btn-md btn-danger" data-toggle="button" aria-pressed="true">Deactivate</span>
                                </td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>Brandon Rodgers</td>
                                <td>LLP</td>
                                <td>brandonrodgers@gmail.com</td>
                                <td>XXX4233288</td>
                                <td>Worchestershire, UK</td>
                                <td>
                                    <span class="btn btn-md btn-success" data-toggle="button" aria-pressed="true">Active</span>
                                    <span class="btn btn-md btn-danger" data-toggle="button" aria-pressed="true">Deactivate</span>
                                </td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>Krishna Publications</td>
                                <td>Private Ltd.</td>
                                <td>krishnapublications@gmail.com</td>
                                <td>XXX847455</td>
                                <td>Bangalore, IND</td>
                                <td>
                                    <span class="btn btn-md btn-success" data-toggle="button" aria-pressed="true">Active</span>
                                    <span class="btn btn-md btn-danger" data-toggle="button" aria-pressed="true">Deactivate</span>
                                </td>
                            </tr>

                            <tr>
                                <td>4</td>
                                <td>Bacca Bucci Shoes</td>
                                <td>Private Ltd.</td>
                                <td>baccabuccishoes@gmail.com</td>
                                <td>XXX9903030</td>
                                <td>Gurgaon, IND</td>
                                <td>
                                    <span class="btn btn-md btn-success" data-toggle="button" aria-pressed="true">Active</span>
                                    <span class="btn btn-md btn-danger" data-toggle="button" aria-pressed="true">Deactivate</span>
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