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

    <div class="container mt-4">
        @if(session('success'))
          <div class="alert alert-success">
              {{ session('success') }}
          </div>
        @endif
    </div>

    <div class="row justify-content-center">
        <div class="col-6 register-box mb-5">
            <div class="card card-primary">
                <div class="card-header text-center bg-purple">
                    <p class="login-box-msg"><h4><b>Edit client details </b></h4></p>
                </div>
                <div class="card-body">

                    <form action="{{ url('update_client_details', $client_details[0]->client_id) }}" method="POST">
                    @csrf
                        <div class="input-group mb-3">
                            <input type="text" value="{{ $client_details[0]->client_name }}" name="client_name" class="form-control" placeholder="Client name" required>
                            @error('client_name')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>

                        <div>
                            <select class="form-control select2 mb-3" name="type_of_org" style="width: 100%;" required>
                                <option selected>{{ $client_details[0]->type_of_org }}</option>
                                <option>Proprietership</option>
                                <option>Partnership</option>
                                <option>LLP</option>
                                <option>Private Ltd</option>
                                <option>Banks</option>
                                <option>Schools & Trusts</option>
                                @error('type_of_org')
                                    <strong><span class="text-danger">{{$message}}</span></strong>
                                @enderror
                            </select>
                        </div>

                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="pan" value="{{ $client_details[0]->PAN }}" placeholder="PAN" required>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-hashtag"></span>
                                </div>
                            </div>
                            @error('pan')
                                <strong><span class="text-danger">{{$message}}</span></strong>
                            @enderror
                        </div>

                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="tan" value="{{ $client_details[0]->TAN }}" placeholder="TAN" required>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-hashtag"></span>
                                </div>
                            </div>
                            @error('tan')
                                <strong><span class="text-danger">{{$message}}</span></strong>
                            @enderror
                        </div>

                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="gstin" value="{{ $client_details[0]->GSTIN }}" placeholder="GSTIN" required>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-hashtag"></span>
                                </div>
                            </div>
                            @error('gstin')
                                <strong><span class="text-danger">{{$message}}</span></strong>
                            @enderror
                        </div>

                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="registered_address" value="{{ $client_details[0]->registered_address }}" placeholder="Registered address" required>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-location-arrow"></span>
                                </div>
                            </div>
                            @error('registered_address')
                                <strong><span class="text-danger">{{$message}}</span></strong>
                            @enderror
                        </div>

                        <div>
                            <span>
                                <p style="color: indigo;">
                                    **Check mark if billing address is same as registered address**
                                </p>
                            </span>
                        </div>

                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="billing_address" value="{{ $client_details[0]->billing_address }}" placeholder="Billing address" required>
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
                            @error('billing_address')
                                <strong><span class="text-danger">{{$message}}</span></strong>
                            @enderror
                        </div>

                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="cp_name" value="{{ $client_details[0]->cp_name }}" placeholder="Contact person name" required>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                            @error('cp_name')
                                <strong><span class="text-danger">{{$message}}</span></strong>
                            @enderror
                        </div>

                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="cp_phone" value="{{ $client_details[0]->cp_phone }}" placeholder="Contact person phone number" required>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-phone"></span>
                                </div>
                            </div>
                            @error('cp_phone')
                                <strong><span class="text-danger">{{$message}}</span></strong>
                            @enderror
                        </div>

                        <div class="input-group mb-3">
                            <input type="email" class="form-control" name="cp_email" value="{{ $client_details[0]->cp_email }}" placeholder="Contact person email" required>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                            @error('cp_email')
                                <strong><span class="text-danger">{{$message}}</span></strong>
                            @enderror
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
            </div>
            <!-- /.card -->
        </div>
        <!-- /.register-box -->
    </div>
</div>
@endsection