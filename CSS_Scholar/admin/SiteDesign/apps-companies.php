<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Highdmin - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="assets/js/modernizr.min.js"></script>

    </head>


    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <?php
            include("sidebar.php");
            ?>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->

            <div class="content-page">

                <!-- Top Bar Start -->
               <?php
               include("topbar.php");
               ?>
                <!-- Top Bar End -->



                <!-- Start Page content -->
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-md-6 col-lg-3">
                                <div class="company-card card-box">
                                    <img src="assets/images/companies/airbnb.png" alt="logo" class="company-logo">
                                    <div class="company-detail">
                                        <h4 class="mb-1">Airbnb Inc.</h4>
                                        <p>www.airbnb.com</p>
                                    </div>

                                    <h5 class="text-muted font-normal"><span class="pull-right text-danger"><i class="mdi mdi-arrow-down"></i> 1.22%</span> Change(2d)</h5>

                                    <div class="text-center mt-5">
                                        <h5 class="font-normal text-muted">You have to pay</h5>
                                        <h3 class="m-b-30"><i class="mdi mdi-arrow-down-bold-circle-outline text-danger"></i> 2536 <small>USD</small></h3>
                                    </div>

                                    <div id="company-1" class="text-center"></div>

                                </div>
                            </div><!-- end col -->

                            <div class="col-md-6 col-lg-3">
                                <div class="company-card card-box">
                                    <img src="assets/images/companies/apple.png" alt="logo" class="company-logo">
                                    <div class="company-detail">
                                        <h4 class="mb-1">Apple Inc.</h4>
                                        <p>www.apple.com</p>
                                    </div>

                                    <h5 class="text-muted font-normal"><span class="pull-right text-success"><i class="mdi mdi-arrow-up"></i> 8.51%</span> Change(1d)</h5>

                                    <div class="text-center mt-5">
                                        <h5 class="font-normal text-muted">You have to pay</h5>
                                        <h3 class="m-b-30"><i class="mdi mdi-arrow-up-bold-circle-outline text-success"></i> 89521 <small>USD</small></h3>
                                    </div>

                                    <div id="company-2" class="text-center"></div>

                                </div>
                            </div><!-- end col -->

                            <div class="col-md-6 col-lg-3">
                                <div class="company-card card-box">
                                    <img src="assets/images/companies/google.png" alt="logo" class="company-logo">
                                    <div class="company-detail">
                                        <h4 class="mb-1">Google</h4>
                                        <p>www.google.com</p>
                                    </div>

                                    <h5 class="text-muted font-normal"><span class="pull-right text-success"><i class="mdi mdi-arrow-up"></i> 3.38%</span> Change(2d)</h5>

                                    <div class="text-center mt-5">
                                        <h5 class="font-normal text-muted">You have to pay</h5>
                                        <h3 class="m-b-30"><i class="mdi mdi-arrow-up-bold-circle-outline text-success"></i> 23657 <small>USD</small></h3>
                                    </div>

                                    <div id="company-3" class="text-center"></div>

                                </div>
                            </div><!-- end col -->

                            <div class="col-md-6 col-lg-3">
                                <div class="company-card card-box">
                                    <img src="assets/images/companies/amazon.png" alt="logo" class="company-logo">
                                    <div class="company-detail">
                                        <h4 class="mb-1">Amazon</h4>
                                        <p>www.amazon.com</p>
                                    </div>

                                    <h5 class="text-muted font-normal"><span class="pull-right text-danger"><i class="mdi mdi-arrow-down"></i> 6.35%</span> Change(2d)</h5>

                                    <div class="text-center mt-5">
                                        <h5 class="font-normal text-muted">You have to pay</h5>
                                        <h3 class="m-b-30"><i class="mdi mdi-arrow-down-bold-circle-outline text-danger"></i> 85412 <small>USD</small></h3>
                                    </div>

                                    <div id="company-4" class="text-center"></div>

                                </div>
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-md-6 col-lg-3">
                                <div class="company-card card-box">
                                    <img src="assets/images/companies/facebook.png" alt="logo" class="company-logo">
                                    <div class="company-detail">
                                        <h4 class="mb-1">Facebook, Inc.</h4>
                                        <p>www.facebook.com</p>
                                    </div>

                                    <h5 class="text-muted font-normal"><span class="pull-right text-success"><i class="mdi mdi-arrow-up"></i> 0.51%</span> Change(1d)</h5>

                                    <div class="text-center mt-5">
                                        <h5 class="font-normal text-muted">You have to pay</h5>
                                        <h3 class="m-b-30"><i class="mdi mdi-arrow-up-bold-circle-outline text-success"></i> 78512 <small>USD</small></h3>
                                    </div>

                                    <div id="company-5" class="text-center"></div>

                                </div>
                            </div><!-- end col -->

                            <div class="col-md-6 col-lg-3">
                                <div class="company-card card-box">
                                    <img src="assets/images/companies/intel.png" alt="logo" class="company-logo">
                                    <div class="company-detail">
                                        <h4 class="mb-1">Intel</h4>
                                        <p>www.intel.com</p>
                                    </div>

                                    <h5 class="text-muted font-normal"><span class="pull-right text-danger"><i class="mdi mdi-arrow-down"></i> 6.35%</span> Change(2d)</h5>

                                    <div class="text-center mt-5">
                                        <h5 class="font-normal text-muted">You have to pay</h5>
                                        <h3 class="m-b-30"><i class="mdi mdi-arrow-down-bold-circle-outline text-danger"></i> 36528 <small>USD</small></h3>
                                    </div>

                                    <div id="company-6" class="text-center"></div>

                                </div>
                            </div><!-- end col -->

                            <div class="col-md-6 col-lg-3">
                                <div class="company-card card-box">
                                    <img src="assets/images/companies/cisco.jpg" alt="logo" class="company-logo">
                                    <div class="company-detail">
                                        <h4 class="mb-1">Cisco Systems</h4>
                                        <p>www.cisco.com</p>
                                    </div>

                                    <h5 class="text-muted font-normal"><span class="pull-right text-success"><i class="mdi mdi-arrow-up"></i> 22.35%</span> Change(1d)</h5>

                                    <div class="text-center mt-5">
                                        <h5 class="font-normal text-muted">You have to pay</h5>
                                        <h3 class="m-b-30"><i class="mdi mdi-arrow-up-bold-circle-outline text-success"></i> 1254 <small>USD</small></h3>
                                    </div>

                                    <div id="company-7" class="text-center"></div>

                                </div>
                            </div><!-- end col -->

                            <div class="col-md-6 col-lg-3">
                                <div class="company-card card-box">
                                    <img src="assets/images/companies/yahoo.png" alt="logo" class="company-logo">
                                    <div class="company-detail">
                                        <h4 class="mb-1">Yahoo</h4>
                                        <p>www.yahoo.com</p>
                                    </div>

                                    <h5 class="text-muted font-normal"><span class="pull-right text-danger"><i class="mdi mdi-arrow-down"></i> 2.94%</span> Change(2d)</h5>

                                    <div class="text-center mt-5">
                                        <h5 class="font-normal text-muted">You have to pay</h5>
                                        <h3 class="m-b-30"><i class="mdi mdi-arrow-down-bold-circle-outline text-danger"></i> 56850 <small>USD</small></h3>
                                    </div>

                                    <div id="company-8" class="text-center"></div>

                                </div>
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    2018 © Highdmin. - Coderthemes.com
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->



        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>

        <!-- Sparkline charts -->
        <script src="../plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
        <script src="assets/pages/jquery.companies.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>