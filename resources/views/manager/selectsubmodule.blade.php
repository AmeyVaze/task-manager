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
                <div class="col-2 p-2">
                    <a href="#" class="btn btn-info btn-lg active">Module Name</a>
                </div>
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
                        <form>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Submodule</label>
                                </div>
                                <select class="custom-select" id="inputGroupSelect01">
                                    <option selected>Select the Submodule.....</option>
                                    <option value="GST FILINGS">GST FILINGS</option>
                                    <option value="GST ASSESSMENTS">GST ASSESSMENTS</option>
                                    <option value="TDS & TCS FILINGS">TDS & TCS FILINGS</option>
                                    <option value="ITR FILINGS">ITR FILINGS</option>
                                    <option value="AUDITING">AUDITING</option>
                                </select>
                            </div>

                            <div class="card card-primary mt-5">
                                <div class="card-header bg-danger">
                                    <h3 class="card-title">ASSIGN DATES</h3>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">

                                        <div class="input-group date mb-3" id="startdatepicker">
                                            <input type="text" class="from-control" placeholder="start date">
                                            <span class="input-group-append">
                                                <span class="input-group-text bg-white">
                                                    <i class="fa fa-calendar"></i>
                                                </span>
                                            </span>
                                        </div>

                                        <div class="input-group date mb-3" id="enddatepicker">
                                            <input type="text" class="from-control" placeholder="end date">
                                            <span class="input-group-append">
                                                <span class="input-group-text bg-white">
                                                    <i class="fa fa-calendar"></i>
                                                </span>
                                            </span>
                                        </div>

                                        <div class="input-group date mb-3" id="statutoryenddatepicker">
                                            <input type="text" class="from-control" placeholder="statutory end date">
                                            <span class="input-group-append">
                                                <span class="input-group-text bg-white">
                                                    <i class="fa fa-calendar"></i>
                                                </span>
                                            </span>
                                        </div>

                                    </div>
                                </div>
                                <!-- /.card -->


                            </div>

                            <a href="{{ url('/select-steps') }}" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Save</a>

                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script type="text/javascript">
    $(function () {
        $('#startdatepicker').datepicker();
        $('#enddatepicker').datepicker();
        $('#statutoryenddatepicker').datepicker();
    });
</script>



@endsection