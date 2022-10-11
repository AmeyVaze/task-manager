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
                            <li>
                                <!-- checkbox -->
                                <div class="icheck-success d-inline ml-2">
                                    <input type="checkbox" value="" name="todo1" id="todoCheck1" checked>
                                    <label for="todoCheck1"></label>
                                </div>
                                <!-- todo text -->
                                <span class="text">STEP-1</span>
                                <!-- Emphasis label -->
                                <small class="badge badge-danger"><i class="far fa-clock"></i> 2 mins</small>
                                <!-- General tools such as edit or delete-->
                                <div class="tools">
                                    <i class="fas fa-trash-o"></i>
                                </div>
                            </li>

                            <li>
                                <div class="icheck-success d-inline ml-2">
                                    <input type="checkbox" value="" name="todo2" id="todoCheck2" checked>
                                    <label for="todoCheck2"></label>
                                </div>
                                <span class="text">STEP-2</span>
                                <small class="badge badge-info"><i class="far fa-clock"></i> 5 mins</small>
                                <div class="tools">
                                    <i class="fas fa-trash-o"></i>
                                </div>
                            </li>

                            <li>
                                <div class="icheck-success d-inline ml-2">
                                    <input type="checkbox" value="" name="todo3" id="todoCheck3" checked>
                                    <label for="todoCheck3"></label>
                                </div>
                                <span class="text">STEP-3</span>
                                <small class="badge badge-warning"><i class="far fa-clock"></i> 10 mins</small>
                                <div class="tools">
                                    <i class="fas fa-trash-o"></i>
                                </div>
                            </li>

                            <li>
                                <div class="icheck-success d-inline ml-2">
                                    <input type="checkbox" value="" name="todo4" id="todoCheck4" checked>
                                    <label for="todoCheck4"></label>
                                </div>
                                <span class="text">STEP-4</span>
                                <small class="badge badge-success"><i class="far fa-clock"></i> 15 mins</small>
                                <div class="tools">
                                    <i class="fas fa-trash-o"></i>
                                </div>
                            </li>

                            <li>
                                <div class="icheck-success d-inline ml-2">
                                    <input type="checkbox" value="" name="todo5" id="todoCheck5" checked>
                                    <label for="todoCheck5"></label>
                                </div>
                                <span class="text">STEP-5</span>
                                <small class="badge badge-primary"><i class="far fa-clock"></i> 20 mins</small>
                                <div class="tools">
                                    <i class="fas fa-trash-o"></i>
                                </div>
                            </li>

                            <li>
                                <div class="icheck-success d-inline ml-2">
                                    <input type="checkbox" value="" name="todo6" id="todoCheck6" checked>
                                    <label for="todoCheck6"></label>
                                </div>
                                <span class="text">STEP-6</span>
                                <small class="badge badge-secondary"><i class="far fa-clock"></i> 1 hr</small>
                                <div class="tools">
                                    <i class="fas fa-trash-o"></i>
                                </div>
                            </li>

                        </ul>
                    </div>

                    <button type="button" class="btn btn-sm btn-warning"><i class="fas fa-plus"></i> Add new step</button>

                    <div class="card card-primary m-5">
                        <div class="card-header bg-danger">
                            <h3 class="card-title">TASK DATES</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">

                                <div class="input-group date mb-4" id="taskstartdate" data-target-input="nearest">
                                    <input type="text" class="form-control datetimepicker-input" data-target="#taskstartdate" placeholder="Select task start date" />
                                    <div class="input-group-append" data-target="#taskstartdate" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>

                                <div class="input-group date mb-2" id="taskenddate" data-target-input="nearest">
                                    <input type="text" class="form-control datetimepicker-input" data-target="#taskenddate" placeholder="Select task end date" />
                                    <div class="input-group-append" data-target="#taskenddate" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>

                            </div>

                            <script type="text/javascript">
                                $(function() {
                                    $('#taskstartdate').datetimepicker({
                                        format: 'L'
                                    });

                                    $('#taskenddate').datetimepicker({
                                        format: 'L'
                                    });
                                });
                            </script>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->


                    </div>

                    <hr>
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