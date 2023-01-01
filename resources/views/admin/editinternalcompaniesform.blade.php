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
                <div class="col-sm-6 float-right">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Register Internal Companies</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    {{-- Displaying messages specifying registration is successfull or not --}}
    @if (session('success'))
    <div class="container mt-4">
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    </div>
    @elseif (session('failure'))
    <div class="container mt-4">
        <div class="alert alert-danger">
            {{ session('failure') }}
        </div>
    </div>
    @endif

    {{-- Fetching validation errors, if any and create a popup container specifying the errors --}}
    <div class="row justify-content-center">
        @if ($errors->any())
            <div class="col-8 mb-5 card card-danger">
                <div class="card-header text-center bg-danger">
                    OOPS!<br>WE RAN INTO SOME VALIDATION ERRORS<br>
                </div>
                <div class="card-body bg-light">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>
                                {{ $error }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif
    </div>

    <div class="row justify-content-center">
        <div class="col-6 register-box mb-5">
            <div class="card card-primary">
                <div class="card-header text-center bg-purple">
                    <p class="login-box-msg"><h4><b>Edit Internal Company details</b></h4></p>
                </div>
                <div class="card-body">

                    <form action="{{ url('update_internal_company_details', $int_comp_details[0]->company_id) }}" method="POST">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="company_name" id="company_name" value="{{ $int_comp_details[0]->company_name }}" placeholder="Company Name">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>

                        <div>
                            <select class="form-control select2 mb-3" name="type_of_org" style="width: 100%;">
                                <option selected value="{{ $int_comp_details[0]->type_of_org }}">{{ $int_comp_details[0]->type_of_org }}</option>
                                <option value="Proprietership">Proprietership</option>
                                <option value="Partnership">Partnership</option>
                                <option value="LLP">LLP</option>
                                <option value="Private Ltd">Private Ltd</option>
                                <option value="Banks">Banks</option>
                                <option value="Schools & Trusts">Schools & Trusts</option>
                            </select>
                        </div>

                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="pan" value="{{ $int_comp_details[0]->PAN }}" placeholder="PAN">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-hashtag"></span>
                                </div>
                            </div>
                        </div>

                        <div>
                            <span>
                                <p style="color: indigo;">
                                    **TAN and GSTIN are not mandatory**
                                </p>
                            </span>
                        </div>

                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="tan" value="{{ $int_comp_details[0]->TAN }}" placeholder="TAN">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-hashtag"></span>
                                </div>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="gstin" value="{{ $int_comp_details[0]->GSTIN }}" placeholder="GSTIN">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-hashtag"></span>
                                </div>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="registered_address" value="{{ $int_comp_details[0]->registered_address }}" placeholder="Registered address">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-location-arrow"></span>
                                </div>
                            </div>
                        </div>

                        <div>
                            <span>
                                <p style="color: indigo;">
                                    **Check mark if billing address is same as registered address**
                                </p>
                            </span>
                        </div>

                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="billing_address" value="{{ $int_comp_details[0]->billing_address }}" placeholder="Billing address">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <input type="checkbox">
                                </div>
                                <div class="input-group-text">
                                    <span>
                                        <span class="fas fa-location-arrow"></span>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="cp_name" value="{{ $int_comp_details[0]->cp_name }}" placeholder="Contact person name">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <input type="number" class="form-control" name="cp_phone" value="{{ $int_comp_details[0]->cp_phone }}" placeholder="Contact person phone number">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-phone"></span>
                                </div>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <input type="email" class="form-control" name="cp_email" value="{{ $int_comp_details[0]->cp_email }}" placeholder="Contact person email">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <button type="submit" class="btn btn-lg btn-success">Update</button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>
                </div>
                <!-- /.form-box -->
            </div><!-- /.card -->
        </div>
        <!-- /.register-box -->
    </div>
</div>
@endsection