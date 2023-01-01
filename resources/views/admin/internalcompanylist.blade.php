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
                        <li class="breadcrumb-item active">Internal Company List</li>
                    </ol>
                </div>
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
                                <th>Company Name</th>
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
                            @foreach ($internal_companies as $internal_company)
                                @if ($internal_company->is_active == 1)
                                <tr>
                                    <td>{{ $internal_company->company_id }}</td>
                                    <td>{{ $internal_company->company_name }}</td>
                                    <td>
                                        <span class="badge bg-success">{{ $internal_company->type_of_org }}</span>
                                    </td>
                                    <td>{{ $internal_company->PAN }}</td>
                                    <td>{{ $internal_company->TAN }}</td>
                                    <td>{{ $internal_company->GSTIN }}</td>
                                    <td>{{ $internal_company->registered_address }}</td>
                                    <td>{{ $internal_company->billing_address }}</td>
                                    <td>{{ $internal_company->cp_name }}</td>
                                    <td>{{ $internal_company->cp_phone }}</td>
                                    <td>{{ $internal_company->cp_email }}</td>
                                    <td>                                 
                                        <a href="{{ url('show_internal_company_details', $internal_company->company_id) }}" class="btn btn-sm btn-warning">Edit</a>  
                                        <a href="{{ url('deactivate_internal_company', $internal_company->company_id) }}" class="btn btn-sm btn-danger">Deactivate</a>                       
                                    </td>
                                </tr>
                                
                                @else
                                <tr>
                                    <td><del>{{ $internal_company->company_id }}</del></td>
                                    <td><del>{{ $internal_company->company_name }}</del></td>
                                    <td>
                                        <span class="badge bg-danger"><del>{{ $internal_company->type_of_org }}</del></span>
                                    </td>
                                    <td><del>{{ $internal_company->PAN }}</del></td>
                                    <td><del>{{ $internal_company->TAN }}</del></td>
                                    <td><del>{{ $internal_company->GSTIN }}</del></td>
                                    <td><del>{{ $internal_company->registered_address }}</del></td>
                                    <td><del>{{ $internal_company->billing_address }}</del></td>
                                    <td><del>{{ $internal_company->cp_name }}</del></td>
                                    <td><del>{{ $internal_company->cp_phone }}</del></td>
                                    <td><del>{{ $internal_company->cp_email }}</del></td>
                                    <td>                                 
                                        <a href="{{ url('activate_internal_company', $internal_company->company_id) }}" class="btn btn-sm btn-success">Activate</a>                       
                                    </td>
                                </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection