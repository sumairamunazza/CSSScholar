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

            <?php
            include("sidebar.php");
            ?>

            </div>
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
                            <div class="col-md-6 col-lg-4">
                                <div class="card-box">
                                    <h4 class="header-title">Line Charts</h4>

                                    <div class="mt-4">
                                        <div id="sparkline1"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <div class="card-box">
                                    <h4 class="header-title">Bar Chart</h4>

                                    <div class="mt-4">
                                        <div id="sparkline2" class="text-center"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <div class="card-box">
                                    <h4 class="header-title">Pie Chart</h4>

                                    <div class="mt-4">
                                        <div id="sparkline3" class="text-center"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <div class="card-box">
                                    <h4 class="header-title">Custom Line Chart</h4>

                                    <div class="mt-4">
                                        <div id="sparkline4" class="text-center"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <div class="card-box">
                                    <h4 class="header-title">Mouse Speed Chart</h4>

                                    <div class="mt-4">
                                        <div id="sparkline5" class="text-center"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <div class="card-box">
                                    <h4 class="header-title">Composite bar Chart</h4>

                                    <div class="text-center mt-4">
                                        <div id="sparkline6" class="text-center"></div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-6 col-lg-4">
                                <div class="card-box">
                                    <h4 class="header-title">Discrete Chart</h4>

                                    <div class="text-center mt-4">
                                        <div id="sparkline7" class="text-center"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <div class="card-box">
                                    <h4 class="header-title">Bullet Chart</h4>

                                    <div class="text-center mt-4" style="min-height: 164px;">
                                        <div id="sparkline8" class="text-center"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <div class="card-box">
                                    <h4 class="header-title">Box Plot Chart</h4>

                                    <div class="text-center mt-4" style="min-height: 164px;">
                                        <div id="sparkline9" class="text-center"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <div class="card-box">
                                    <h4 class="header-title mt-4">Tristate Charts</h4>

                                    <div class="text-center mt-4" style="min-height: 164px;">
                                        <div id="sparkline10" class="text-center"></div>
                                    </div>
                                </div>
                            </div>

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
        <script src="assets/pages/jquery.charts-sparkline.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>