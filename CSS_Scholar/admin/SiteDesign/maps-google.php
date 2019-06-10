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
                                    <h4 class="mb-3 header-title">Basic</h4>

                                    <div id="gmaps-basic" class="gmaps"></div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card-box">
                                    <h4 class="mb-3 header-title">Markers</h4>

                                    <div id="gmaps-markers" class="gmaps"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="card-box">
                                    <h4 class="mb-3 header-title">Polygons</h4>

                                    <div id="gmaps-polygons" class="gmaps"></div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card-box">
                                    <h4 class="mb-3 header-title">Overlays</h4>

                                    <div id="gmaps-overlay" class="gmaps"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="card-box">
                                    <h4 class="mb-3 header-title">Street View Panoramas</h4>

                                    <div id="panorama" class="gmaps-panaroma"></div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card-box">
                                    <h4 class="mb-3 header-title">Routes</h4>

                                    <div id="gmaps-route" class="gmaps"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="card-box">
                                    <h4 class="mb-3 header-title">Map Types</h4>

                                    <div id="gmaps-types" class="gmaps"></div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card-box">
                                    <h4 class="mb-3 header-title">Context menu (right click on map)</h4>

                                    <div id="gmaps-menu" class="gmaps"></div>
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

        <!-- google maps api -->
        <script src="http://maps.google.com/maps/api/js?key=AIzaSyDAHZxs8NRsHDfR2Zse_9P0mdZFs3rvASQ"></script>

        <!-- main file -->
        <script src="../plugins/gmaps/gmaps.min.js"></script>

        <!--  Init -->
        <script src="assets/pages/jquery.gmaps.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>