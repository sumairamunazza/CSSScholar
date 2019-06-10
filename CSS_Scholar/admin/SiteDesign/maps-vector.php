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

        <!-- jvectormap -->
        <link href="../plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />

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
                            <div class="col-md-12">
                                <div class="card-box">
                                    <h4 class="m-t-0 m-b-20 header-title">World Map</h4>

                                    <div id="world-map-markers" style="height: 500px"></div>

                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-md-6">
                                <div class="card-box">
                                    <h4 class="m-t-0 m-b-20 header-title">USA Map</h4>

                                    <div id="usa" style="height: 400px"></div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card-box">
                                    <h4 class="m-t-0 m-b-20 header-title">India Map</h4>

                                    <div id="india" style="height: 400px"></div>

                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-md-6">
                                <div class="card-box">
                                    <h4 class="m-t-0 m-b-20 header-title">UK Map</h4>

                                    <div id="uk" style="height: 400px"></div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card-box">
                                    <h4 class="m-t-0 m-b-20 header-title">Chicago Map</h4>

                                    <div id="chicago" style="height: 400px"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-md-6">
                                <div class="card-box">
                                    <h4 class="m-t-0 m-b-20 header-title">Australia Map</h4>

                                    <div id="australia" style="height: 400px"></div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card-box">
                                    <h4 class="m-t-0 m-b-20 header-title">Canada Map</h4>

                                    <div id="canada" style="height: 400px"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-md-6">
                                <div class="card-box">
                                    <h4 class="m-t-0 m-b-20 header-title">Germany Map</h4>

                                    <div id="germany" style="height: 400px"></div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card-box">
                                    <h4 class="m-t-0 m-b-20 header-title">Asia Map</h4>

                                    <div id="asia" style="height: 400px"></div>
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

        <!-- Jvector map -->
        <script src="../plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
        <script src="../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <script src="../plugins/jvectormap/gdp-data.js"></script>
        <script src="../plugins/jvectormap/jquery-jvectormap-us-aea-en.js"></script>
        <script src="../plugins/jvectormap/jquery-jvectormap-uk-mill-en.js"></script>
        <script src="../plugins/jvectormap/jquery-jvectormap-au-mill.js"></script>
        <script src="../plugins/jvectormap/jquery-jvectormap-us-il-chicago-mill-en.js"></script>
        <script src="../plugins/jvectormap/jquery-jvectormap-ca-lcc.js"></script>
        <script src="../plugins/jvectormap/jquery-jvectormap-de-mill.js"></script>
        <script src="../plugins/jvectormap/jquery-jvectormap-in-mill.js"></script>
        <script src="../plugins/jvectormap/jquery-jvectormap-asia-mill.js"></script>
        <script src="assets/pages/jquery.jvectormap.init.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>