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
                <div class="col">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Client Name</th>
                                <th>Type Of Organisation</th>
                                <th>PAN</th>
                                <th>TAN</th>
                                <th>GSTIN</th>
                                <th>Registered Address</th>
                                <th>Billing Address</th>
                                <th>Contact Name</th>
                                <th>Contact Phone</th>
                                <th>Contact Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($clients as $client)
                            <tr>
                                <td>{{ $client->client_id }}</td>
                                <td>{{ $client->client_name }}</td>
                                <td>{{ $client->type_of_org }}</td>
                                <td>{{ $client->PAN }}</td>
                                <td>{{ $client->TAN }}</td>
                                <td>{{ $client->GSTIN }}</td>
                                <td>{{ $client->registered_address }}</td>
                                <td>{{ $client->billing_address }}</td>
                                <td>{{ $client->cp_name }}</td>
                                <td>{{ $client->cp_phone }}</td>
                                <td>{{ $client->cp_email }}</td>
                                <td>
                                    {{-- <span class="btn btn-md btn-success" data-toggle="button" aria-pressed="true">Active</span>
                                    <span class="btn btn-md btn-danger" data-toggle="button" aria-pressed="true">Deactivate</span> --}}

                                    <button class="btn btn-sm btn-success" aria-pressed="true">Activate</button>
                                    <button class="btn btn-sm btn-danger" aria-pressed="true">Deactivate</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection