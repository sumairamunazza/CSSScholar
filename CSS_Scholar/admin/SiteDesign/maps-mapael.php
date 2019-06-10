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
                            <div class="col-md-12">
                                <div class="card-box">
                                    <h4 class="m-t-0 m-b-30 header-title">Map with a legend where slices are specified with a fixed value instead of min and max values</h4>
                                    <div class="row">
                                        <div class="col-md-6 offset-3">
                                            <div class="map-usa">
                                                <div class="map">
                                                    <span>Alternative content for the map</span>
                                                </div>
                                                <div class="plotLegend">
                                                    <span>Alternative content for the legend</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-box">
                                    <h4 class="m-t-0 m-b-30 header-title">Map with links between the plotted cities</h4>
                                    <div class="mapcontainer">
                                        <div class="map">
                                            <span>Alternative content for the map</span>
                                        </div>
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

        <!-- Load page level scripts-->
        <script src="../plugins/jquery-mapael/raphael-min.js"></script>
        <script src="../plugins/jquery-mapael/jquery.mapael.min.js"></script>
        <script src="../plugins/jquery-mapael/maps/world_countries.min.js"></script>
        <script src="../plugins/jquery-mapael/maps/usa_states.min.js"></script>
        <script src="assets/pages/jquery.mapael-map.init.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>