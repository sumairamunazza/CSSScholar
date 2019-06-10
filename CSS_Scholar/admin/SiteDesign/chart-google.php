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
                            <div class="col-md-6">
                                <div class="card-box">
                                    <h4 class="header-title">Line chart</h4>

                                    <div class="chart mt-4" id="line-chart"></div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card-box">
                                    <h4 class="header-title">Area Chart</h4>

                                    <div class="chart mt-4" id="area-chart"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-md-6">
                                <div class="card-box">
                                    <h4 class="header-title">Column Chart</h4>

                                    <div class="chart mt-4" id="column-chart"></div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card-box">
                                    <h4 class="header-title">Bar Charts</h4>

                                    <div class="chart mt-4" id="bar-chart"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-md-6">
                                <div class="card-box">
                                    <h4 class="header-title">Stacked column charts</h4>

                                    <div class="chart mt-4" id="column-stacked-chart"></div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card-box">
                                    <h4 class="header-title">Stacked bar charts</h4>

                                    <div class="chart mt-4" id="bar-stacked-chart"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->



                        <div class="row">
                            <div class="col-md-6">
                                <div class="card-box">
                                    <h4 class="header-title">Pie Chart</h4>

                                    <div class="google-chart text-center">
                                        <div class="chart mt-4" id="pie-chart"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card-box">
                                    <h4 class="header-title">Donut Chart</h4>

                                    <div class="google-chart text-center">
                                        <div class="chart mt-4" id="donut-chart"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->



                        <div class="row">
                            <div class="col-md-6">
                                <div class="card-box">
                                    <h4 class="header-title">3D Pie Chart</h4>

                                    <div class="google-chart text-center">
                                        <div class="chart mt-4" id="pie-3d-chart"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card-box">
                                    <h4 class="header-title">Exploding a Slice</h4>

                                    <div class="google-chart text-center">
                                        <div class="chart mt-4" id="3d-exploded-chart"></div>
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

        <!-- Google Charts js -->
        <script type="text/javascript" src="https://www.google.com/jsapi"></script>
        <!-- Init -->
        <script type="text/javascript" src="assets/pages/jquery.google-charts.init.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>