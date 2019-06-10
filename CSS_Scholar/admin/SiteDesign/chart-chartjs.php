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
                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="header-title">Line Chart</h4>

                                    <canvas id="lineChart" height="350" class="mt-4"></canvas>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="header-title">Bar Chart</h4>

                                    <canvas id="bar" height="350" class="mt-4"></canvas>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="header-title">Pie Chart</h4>

                                    <canvas id="pie" height="350" class="mt-4"></canvas>

                                </div>
                            </div>

                            <div class="col-lg-6">

                                <div class="card-box">
                                    <h4 class="header-title">Donut Chart</h4>

                                    <canvas id="doughnut" height="350" class="mt-4"></canvas>

                                </div>
                            </div>

                        </div>
                        <!-- end row -->


                        <div class="row">

                            <div class="col-lg-6">

                                <div class="card-box">
                                    <h4 class="header-title">Polar area Chart</h4>

                                    <canvas id="polarArea" height="350" class="mt-4"> </canvas>

                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="header-title">Radar Chart</h4>

                                    <canvas id="radar" height="350" class="mt-4"></canvas>

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

        <!-- Chart JS -->
        <script src="../plugins/chart.js/chart.bundle.js"></script>
        <script src="assets/pages/jquery.chartjs.init.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>