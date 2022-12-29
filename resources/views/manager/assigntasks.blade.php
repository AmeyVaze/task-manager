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
                        <li class="breadcrumb-item active">Assign Tasks | Select Module</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row justify-content-center">
                <div class="col-10 card">
                    <div class="card-header bg-primary">
                        Select MODULE
                    </div>
                    <div class="card-body">

                        <form action="{{ url('set_selected_module') }}" method="GET">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="module">Module</label>
                                </div>

                                <select class="custom-select" id="module" name="module" required>
                                    @foreach ($modules as $module)
                                        <option value="{{ $module->module_name }}">{{ $module->module_name }}</option>
                                    @endforeach
                                </select>
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