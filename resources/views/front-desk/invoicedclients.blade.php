@extends('front-desk.frontdeskpanel')

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
                        <li class="breadcrumb-item active">Pending for Invoice - Dashboard</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="card col-8">
                    <div class="card-header bg-primary">
                        Download PDFs of created invoices
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Module</th>
                                    <th scope="col">Submodule</th>
                                    <th scope="col">Client Name</th>
                                    <th>
                                        Action
                                    </th>
                                </tr>
                            </thead>

                            <tbody>

                                <tr>
                                    <th scope="row">1</th>
                                    <td>GST</td>
                                    <td>GST FILINGS</td>
                                    <td>Client 1</td>
                                    <td>
                                        <span>
                                            <a href="{{ url('/') }}">
                                                <button type="button" class="btn btn-success">
                                                    <i class="fas fa-download"></i> Download Invoice
                                                </button>
                                            </a>
                                        </span>
                                    </td>
                                </tr>

                                <tr>
                                    <th scope="row">1</th>
                                    <td>GST</td>
                                    <td>GST FILINGS</td>
                                    <td>Client 1</td>
                                    <td>
                                        <span>
                                            <a href="{{ url('/') }}">
                                                <button type="button" class="btn btn-success">
                                                    <i class="fas fa-download"></i> Download Invoice
                                                </button>
                                            </a>
                                        </span>
                                    </td>
                                </tr>

                                <tr>
                                    <th scope="row">1</th>
                                    <td>GST</td>
                                    <td>GST FILINGS</td>
                                    <td>Client 1</td>
                                    <td>
                                        <span>
                                            <a href="{{ url('/') }}">
                                                <button type="button" class="btn btn-success">
                                                    <i class="fas fa-download"></i> Download Invoice
                                                </button>
                                            </a>
                                        </span>
                                    </td>
                                </tr>

                                <tr>
                                    <th scope="row">1</th>
                                    <td>GST</td>
                                    <td>GST FILINGS</td>
                                    <td>Client 1</td>
                                    <td>
                                        <span>
                                            <a href="{{ url('/') }}">
                                                <button type="button" class="btn btn-success">
                                                    <i class="fas fa-download"></i> Download Invoice
                                                </button>
                                            </a>
                                        </span>
                                    </td>
                                </tr>

                                <tr>
                                    <th scope="row">1</th>
                                    <td>GST</td>
                                    <td>GST FILINGS</td>
                                    <td>Client 1</td>
                                    <td>
                                        <span>
                                            <a href="{{ url('/') }}">
                                                <button type="button" class="btn btn-success">
                                                    <i class="fas fa-download"></i> Download Invoice
                                                </button>
                                            </a>
                                        </span>
                                    </td>
                                </tr>

                                <<tr>
                                    <th scope="row">1</th>
                                    <td>GST</td>
                                    <td>GST FILINGS</td>
                                    <td>Client 1</td>
                                    <td>
                                        <span>
                                            <a href="{{ url('/') }}">
                                                <button type="button" class="btn btn-success">
                                                    <i class="fas fa-download"></i> Download Invoice
                                                </button>
                                            </a>
                                        </span>
                                    </td>
                                </tr>

                                <tr>
                                    <th scope="row">1</th>
                                    <td>GST</td>
                                    <td>GST FILINGS</td>
                                    <td>Client 1</td>
                                    <td>
                                        <span>
                                            <a href="{{ url('/') }}">
                                                <button type="button" class="btn btn-success">
                                                    <i class="fas fa-download"></i> Download Invoice
                                                </button>
                                            </a>
                                        </span>
                                    </td>
                                </tr>

                                <tr>
                                    <th scope="row">1</th>
                                    <td>GST</td>
                                    <td>GST FILINGS</td>
                                    <td>Client 1</td>
                                    <td>
                                        <span>
                                            <a href="{{ url('/') }}">
                                                <button type="button" class="btn btn-success">
                                                    <i class="fas fa-download"></i> Download Invoice
                                                </button>
                                            </a>
                                        </span>
                                    </td>
                                </tr>

                            </tbody>

                        </table>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection