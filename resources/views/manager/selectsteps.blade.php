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
                        <li class="breadcrumb-item active">Assign Tasks | Select Module > Select Submodule > Select Steps</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <h3><span class="badge bg-dark p-3">SUBMODULE - {{ $selected_submodule }}</span></h3>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row justify-content-center">
                <!-- TO DO List -->
                <div class="col-10 card">
                    <div class="card-header bg-primary">
                        <h3 class="card-title">
                            <i class="ion ion-clipboard mr-1"></i>
                            Select steps you want to assign
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <ul class="todo-list" data-widget="todo-list">
                            @foreach ($submodule_steps as $step)
                            <li class="mb-3 bg-light">
                                <!-- checkbox -->
                                <div class="icheck-info d-inline ml-2">
                                    <input type="checkbox" value="step" name="step" id="stepCheck" checked>
                                    <label for="stepCheck"></label>
                                </div>
                                <!-- step text -->
                                <span><strong>{{ $step->task_list_name }}</strong></span>
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    
                    <a href="{{ url('/select-employee') }}" class="btn btn-success btn-lg active mb-2" role="button" aria-pressed="true">Select Employee</a>
                </div>
                <!-- /.card -->
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection