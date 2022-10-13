@extends('employee.employeepanel')

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
                        <li class="breadcrumb-item active">Assigned Tasks</li>
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
                <!-- TO DO List -->
                <div class="col-10 card">
                    <div class="card-header bg-warning">
                        <h3 class="card-title">
                            <i class="ion ion-clipboard mr-1"></i>
                            The steps are as follows
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <ul class="todo-list" data-widget="todo-list">

                            <li class="mb-4 bg-olive">
                                    <!-- todo text -->
                                    <span class="text">STEP DESCRIPTION</span>
                                    <!-- Emphasis label -->
                                    <small class="badge badge-danger"><i class="far fa-clock"></i> 2 mins</small>
                                    <!-- General tools such as edit or delete-->
                            </li>

                            <li class="mb-4 bg-olive">
                                    <span class="text">STEP DESCRIPTION</span>
                                    <small class="badge badge-info"><i class="far fa-clock"></i> 5 mins</small>
                            </li>

                            <li class="mb-4 bg-olive">
                                    <span class="text">STEP DESCRIPTION</span>
                                    <small class="badge badge-warning"><i class="far fa-clock"></i> 10 mins</small>
                            
                            </li>

                            <li class="mb-4 bg-olive">
                                
                                    <span class="text">STEP DESCRIPTION</span>
                                    <small class="badge badge-success"><i class="far fa-clock"></i> 15 mins</small>
                               
                            </li>

                            <li class="mb-4 bg-olive">
                               
                                    <span class="text">STEP DESCRIPTION</span>
                                    <small class="badge badge-primary"><i class="far fa-clock"></i> 20 mins</small>
                               
                            </li>

                            <li class="mb-4 bg-olive">
                                
                                    <span class="text">STEP DESCRIPTION</span>
                                    <small class="badge badge-secondary"><i class="far fa-clock"></i> 1 hr</small>
                                
                            </li>

                        </ul>
                    </div>

                    <a href="{{ url('/task-completion-successfull') }}" class="btn btn-primary btn-lg active mb-2" role="button" aria-pressed="true">Mark as done</a>
                </div>
                <!-- /.card -->
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection