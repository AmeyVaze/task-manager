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

                        <form>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="module">Module</label>
                                </div>
                                <select class="custom-select" id="module" name="module" required>

                                    @foreach ($modules as $module)
                                        <option value="{{ $module->module_name }}">{{ $module->module_name }}</option>
                                    @endforeach
                                    {{-- <option selected>Select the module.....</option>
                                    <option value="GST">GST</option>
                                    <option value="TDS & TCS">TDS</option>
                                    <option value="ITR">ITR</option>
                                    <option value="AUDITS">AUDITS</option> --}}
                                </select>
                            </div>
                            
                            <a href="{{ url('/select-submodule') }}" class="btn btn-success btn-lg active mb-2" role="button" aria-pressed="true">Save</a>
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