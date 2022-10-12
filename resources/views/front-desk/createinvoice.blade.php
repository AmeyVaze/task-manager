@extends('front-desk.frontdeskpanel')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Invoice</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Create Invoice</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="callout callout-info">
                        <h5><i class="fas fa-info"></i> Note:</h5>
                        This page has been enhanced for printing. Click the print button at the bottom of the invoice to test.
                    </div>


                    <!-- Main content -->
                    <div class="invoice p-3 mb-3">
                        <!-- title row -->
                        <div class="row">
                            <div class="col-12">
                                <h4>
                                    <i class="fas fa-globe"></i> [INTERNAL COMPANY NAME FETCHED FROM IC DATABASE]
                                    <!--<small class="float-right">Date: 05/10/2022</small> -->
                                </h4>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- info row -->
                        <div class="row invoice-info">
                            <div class="col-6 invoice-col">
                                To [Shipping Address]
                                <address>
                                    <strong>[Company Name]</strong><br>
                                    795 Folsom Ave, Suite 600<br>
                                    San Francisco, CA 94107<br>
                                    Phone: (804) 123-5432<br>
                                    Email: info@almasaeedstudio.com
                                </address>
                            </div>
                            <!-- /.col -->
                            <div class="col-6 invoice-col">
                                To [Billing Address]
                                <address>
                                    <strong>[Company Name]</strong><br>
                                    795 Folsom Ave, Suite 600<br>
                                    San Francisco, CA 94107<br>
                                    Phone: (555) 539-1037<br>
                                    Email: john.doe@example.com
                                </address>
                            </div>
                        </div>
                        <!-- /.row -->

                        <!-- Table row -->
                        <div class="row">
                            <div class="col-12 table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Serial #</th>
                                            <th>Description</th>
                                            <th>HSN</th>
                                            <th>Units</th>
                                            <th>GST Rate (if applicable)</th>
                                            <th>Amount (INR)</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>[MODULE | SUBMODULE NAME]</td>
                                            <td>XX1826554372</td>
                                            <td>2</td>
                                            <td>28%</td>
                                            <td>5000.00</td>
                                        </tr>

                                        <tr>
                                            <td>2</td>
                                            <td>[MODULE | SUBMODULE NAME]</td>
                                            <td>XX1826554372</td>
                                            <td>3</td>
                                            <td>12.5%</td>
                                            <td>3400.40</td>
                                        </tr>

                                        <tr>
                                            <td>3</td>
                                            <td>[MODULE | SUBMODULE NAME]</td>
                                            <td>XX1826554372</td>
                                            <td>1</td>
                                            <td>12.5%</td>
                                            <td>800.00</td>
                                        </tr>

                                        <tr>
                                            <td>4</td>
                                            <td>[MODULE | SUBMODULE NAME]</td>
                                            <td>XX1826554372</td>
                                            <td>4</td>
                                            <td>8.5%</td>
                                            <td>2100.00</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->

                        <hr>


                        <div class="row justify-content-center mt-5">
                            <div class="col-4">
                                <p class="lead"><b>Amount Due</b></p>

                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>
                                            <th>Total (INR):</th>
                                            <td>14200.63</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->

                        <div class="row justify-content-center">
                            <div class="col-3">
                                <input type="text" placeholder="Enter amount in words....">
                            </div>
                        </div>


                        <div class="row justify-content-center mt-3 mb-5">
                            <div class="col-10">
                                <p class="lead"><b>Payment Bank Details</b></p>

                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Bank Name</th>
                                                <th>Branch</th>
                                                <th>Account Holder Name</th>
                                                <th>Account Number</th>
                                                <th>IFSC</th>
                                                <th>Account Type</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>State Bank Of India</td>
                                                <td>Mapusa</td>
                                                <td>Ashok Kumar</td>
                                                <td>XXXXXX7353423243</td>
                                                <td>SBI0002716</td>
                                                <td>Credit</td>
                                            </tr>
                                        </tbody>


                                    </table>
                                </div>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->




                        <!-- this row will not appear when printing -->
                        <div class="row no-print">
                            <div class="col-12">
                                <a href="/public/invoice-print.html" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                                <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submit
                                    Payment
                                </button>
                                <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                                    <i class="fas fa-download"></i> Generate PDF
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- /.invoice -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection