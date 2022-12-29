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
                        <li class="breadcrumb-item active">Assign Tasks | Select Module > Select Submodule</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <h3><span class="badge bg-dark p-3">MODULE - {{ $selected_module }}</span></h3>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <!-- Small boxes (Stat box) -->
            <div class="row justify-content-center">
                <div class="col-9 card">
                    <div class="card-header bg-primary">
                        Select SUBMODULE
                    </div>
                    <div class="card-body">

                        <form action="{{ url('store_dates') }}" method="GET">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="custom-select">Submodule</label>
                                </div>

                                <select class="custom-select" id="select_submodule" name="submodule" required>
                                    @foreach ($submodules_list as $submodule)
                                        <option value="{{ $submodule->submodule_name }}">{{ $submodule->submodule_name }}</option>
                                    @endforeach
                                </select>

                            </div>

                            <div class="card card-primary mt-5">
                                <div class="card-header bg-danger">
                                    <h3 class="card-title">ASSIGN DATES</h3>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">

                                        <label for="start_date" class="pb-3">Start date</label>
                                        <input type="date" name="start_date" id="start_date" name="start_date">
                                        <br>

                                        <label for="end_date" class="pb-3">End date</label>
                                        <input type="date" name="end_date" id="end_date" name="end_date">
                                        <br>

                                        <label for="statutory_end_date">Statutory end date</label>
                                        <input type="date" name="statutory_end_date" id="statutory_end_date" name="statutory_end_date">
                                        <br> 

                                    </div>
                                </div>
                                <!-- /.card -->
                            </div>
                            <input type="submit" class="btn btn-lg btn-success" value="Save">
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection