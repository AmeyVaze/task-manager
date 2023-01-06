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
                        <li class="breadcrumb-item active">Register Clients</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->



    {{-- Displaying popup messages saying if the client was registered successfully or not --}}
    <div class="container mt-4">
        @if(session('success'))
          <div class="alert alert-success">
            {{ session('success') }}
          </div>
        @elseif (session('failure'))
          <div class="alert alert-danger">
            {{ session('failure') }}
          </div>
        @endif
    </div>


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
                    <p class="login-box-msg"><h4><b>Register a new client</b></h4></p>
                </div>
                <div class="card-body">

                    <form action="{{ url('store_client_details') }}" method="POST">
                    @csrf
                        <div class="input-group mb-3">
                            <input type="text" name="client_name" value="{{ old('client_name') }}" class="form-control" placeholder="Client name">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>

                        <div>
                            <select class="form-control select2 mb-3" name="type_of_org" style="width: 100%;">
                                <option selected value="{{ old('type_of_org') }}">Select type of organisation</option>
                                <option value="Proprietership">Proprietership</option>
                                <option value="Partnership">Partnership</option>
                                <option value="LLP">LLP</option>
                                <option value="Private Ltd">Private Ltd</option>
                                <option value="Banks">Banks</option>
                                <option value="Schools & Trusts">Schools & Trusts</option>
                            </select>
                        </div>

                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="pan" value="{{ old('pan') }}" placeholder="PAN">
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
                            <input type="text" class="form-control" name="tan" value="{{ old('tan') }}" placeholder="TAN">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-hashtag"></span>
                                </div>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="gstin" value="{{ old('gstin') }}" placeholder="GSTIN">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-hashtag"></span>
                                </div>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="registered_address_input" name="registered_address" value="{{ old('registered_address') }}" placeholder="Registered address">
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
                            <input type="text" class="form-control" id="billing_address_input" name="billing_address" value="{{ old('billing_address') }}" placeholder="Billing address">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <input type="checkbox" id="billing_address_check">
                                </div>
                                <div class="input-group-text">
                                    <span>
                                        <span class="fas fa-location-arrow"></span>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="cp_name" value="{{ old('cp_name') }}" placeholder="Contact person name">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="cp_phone" value="{{ old('cp_phone') }}" placeholder="Contact person phone number">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-phone"></span>
                                </div>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <input type="email" class="form-control" name="cp_email" value="{{ old('cp_email') }}" placeholder="Contact person email">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <button type="submit" class="btn btn-lg btn-success">Register</button>
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

<script src="{{ asset('scripts/auto_billing_address.js') }}" defer></script>

@endsection