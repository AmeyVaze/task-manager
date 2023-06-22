@extends('admin.adminpanel')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">

            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">Add Module</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- if the record module was added successfully -->
    @if (session('status-success-query'))
    <div class="alert alert-success">
        {{ session('status-success-query') }}
    </div>
    @endif

    <!-- if the query to enter the record into the database failed -->
    @if (session('status-failed-query'))
    <div class="alert alert-danger">
        {{ session('status-failed-query') }}
    </div>
    @endif

    <!-- displaying validation errors -->
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
        <div class="col-8 card card-primary pb-3">
            <div class="card-header mb-4">ADD NEW SUBMODULE</div>
            <form action="{{ url('store_new_module') }}" method="GET">
                <div class="form-group">
                    <select name="module_name" id="module">
                        @foreach ($modules as $module)
                        {
                        <option value="{{ $module->module_name }}">{{ $module->module_name }}</option>
                        }
                    </select>
                    <input type="text" class="form-control" required name="module_name" aria-describedby="module_name_help" placeholder="Enter module name">
                    <small id="module_name_help" class="form-text text-warning">Use block letters only</small>
                </div>
                <button type="submit" class="btn btn-success">Add</button>
            </form>
        </div>
    </div>
</div>

@endsection