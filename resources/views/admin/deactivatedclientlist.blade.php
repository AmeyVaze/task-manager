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
                <a href ={{url('/client-list')}}>
                    <button class="btn btn-success">ACTIVATED CLIENTS</button>
                </a>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    @if(session('update-successfull'))
        <div class="container mt-4">
            <div class="alert alert-success">
                {{ session('update-successfull') }}
            </div>
        </div>
        @elseif (session('update-failed'))
        <div class="container mt-4">
            <div class="alert alert-danger">
                {{ session('update-failed') }}
            </div>
        </div>
        @endif

        @if(session('deactivate-successfull'))
        <div class="container mt-4">
            <div class="alert alert-success">
                {{ session('deactivate-successfull') }}
            </div>
        </div>
        @elseif (session('deactivate-failed'))
        <div class="container mt-4">
            <div class="alert alert-danger">
                {{ session('deactivate-failed') }}
            </div>
        </div>
        @endif

        @if(session('activate-successfull'))
        <div class="container mt-4">
            <div class="alert alert-success">
                {{ session('activate-successfull') }}
            </div>
        </div>
        @elseif (session('activate-failed'))
        <div class="container mt-4">
            <div class="alert alert-danger">
                {{ session('activate-failed') }}
            </div>
        </div>
        @endif


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
                            @foreach ($deactivated_clients as $client)
                                <tr>
                                    <td>{{ $client->client_id }}</td>
                                    <td>{{ $client->client_name }}</td>
                                    <td>
                                        <span class="badge bg-danger">{{ $client->type_of_org }}</span>
                                    </td>
                                    <td>{{ $client->PAN }}</td>
                                    <td>{{ $client->TAN }}</td>
                                    <td>{{ $client->GSTIN }}</td>
                                    <td>{{ $client->registered_address }}</td>
                                    <td>{{ $client->billing_address }}</td>
                                    <td>{{ $client->cp_name }}</td>
                                    <td>{{ $client->cp_phone }}</td>
                                    <td>{{ $client->cp_email }}</td>
                                    <td>
                                        <a href="{{ url('/activate_client', $client->client_id) }}" class="btn btn-sm btn-success">Activate</a>
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
