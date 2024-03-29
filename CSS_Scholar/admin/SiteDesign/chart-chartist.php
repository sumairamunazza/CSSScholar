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

        <!--chartist Chart CSS -->
        <link rel="stylesheet" href="../plugins/chartist/css/chartist.min.css">

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
                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="header-title m-t-0">Advanced Smil Animations</h4>
                                    
                                    <div class="mt-4">
                                        <div id="smil-animations" class="ct-chart ct-golden-section"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="header-title m-t-0">Simple line chart</h4>

                                    <div class="mt-4">
                                        <div id="simple-line-chart" class="ct-chart ct-golden-section"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="header-title m-t-0">Line Scatter Diagram</h4>

                                    <div class="mt-4">
                                        <div id="scatter-diagram" class="ct-chart ct-golden-section"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="header-title m-t-0">Line chart with tooltips</h4>

                                    <div class="mt-4">
                                        <div id="line-chart-tooltips" class="ct-chart ct-golden-section"></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- end row -->


                        <div class="row">

                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="header-title m-t-0">Line chart with area</h4>

                                    <div class="mt-4">
                                        <div id="chart-with-area" class="ct-chart ct-golden-section"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="header-title m-t-0">Bi-polar Line chart with area only</h4>

                                    <div class="mt-4">
                                        <div id="bi-polar-line" class="ct-chart ct-golden-section"></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- end row -->

                        <div class="row">

                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="header-title m-t-0">SVG Path animation</h4>

                                    <div class="mt-4">
                                        <div id="svg-animation" class="ct-chart ct-golden-section"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="header-title m-t-0">Line Interpolation / Smoothing</h4>

                                    <div class="mt-4">
                                        <div id="line-smoothing" class="ct-chart ct-golden-section"></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- end row -->

                        <div class="row">

                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="header-title m-t-0">Different configuration for different series</h4>

                                    <div class="mt-4">
                                        <div id="different-series" class="ct-chart ct-golden-section"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="header-title m-t-0">SVG Animations chart</h4>

                                    <div class="mt-4">
                                        <div id="svg-dot-animation" class="ct-chart ct-golden-section"></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- end row -->


                        <div class="row">

                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="header-title m-t-0">Bi-polar bar chart</h4>

                                    <div class="mt-4">
                                        <div id="bi-polar-bar" class="ct-chart ct-golden-section"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="header-title m-t-0">Overlapping bars on mobile</h4>

                                    <div class="mt-4">
                                        <div id="overlapping-bars" class="ct-chart ct-golden-section"></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- end row -->


                        <div class="row">

                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="header-title m-t-0">Multi-line labels</h4>

                                    <div class="mt-4">
                                        <div id="multi-line-chart" class="ct-chart ct-golden-section"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="header-title m-t-0">Stacked bar chart</h4>

                                    <div class="mt-4">
                                        <div id="stacked-bar-chart" class="ct-chart ct-golden-section"></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- end row -->


                        <div class="row">

                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="header-title m-t-0">Horizontal bar chart</h4>

                                    <div class="mt-4">
                                        <div id="horizontal-bar-chart" class="ct-chart ct-golden-section"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="header-title m-t-0">Extreme responsive configuration</h4>

                                    <div class="mt-4">
                                        <div id="extreme-chart" class="ct-chart ct-golden-section"></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- end row -->

                        <div class="row">

                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="header-title m-t-0">Distributed series</h4>

                                    <div class="mt-4">
                                        <div id="distributed-series" class="ct-chart ct-golden-section"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="header-title m-t-0">Label placement</h4>

                                    <div class="mt-4">
                                        <div id="label-placement-chart" class="ct-chart ct-golden-section"></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- end row -->


                        <div class="row">

                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="header-title m-t-0">Animating a Donut with Svg.animate</h4>

                                    <div class="mt-4">
                                        <div id="animating-donut" class="ct-chart ct-golden-section"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="header-title m-t-0">Simple pie chart</h4>

                                    <div class="mt-4">
                                        <div id="simple-pie" class="ct-chart ct-golden-section simple-pie-chart-chartist"></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- end row -->


                        <div class="row">

                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="header-title m-t-0">Pie chart with custom labels</h4>

                                    <div class="mt-4">
                                        <div id="pie-chart" class="ct-chart ct-golden-section"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="header-title m-t-0">Gauge chart</h4>

                                    <div class="mt-4">
                                        <div id="gauge-chart" class="ct-chart ct-golden-section"></div>
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

        <!--Chartist Chart-->
        <script src="../plugins/chartist/js/chartist.min.js"></script>
        <script src="../plugins/chartist/js/chartist-plugin-tooltip.min.js"></script>
        <script src="assets/pages/jquery.chartist.init.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>