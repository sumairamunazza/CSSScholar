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
                                    <h4 class="m-t-0 header-title">Basic Example</h4>

                                    <p class="text-muted font-13 m-b-30">
                                        Default progress bar.
                                    </p>

                                    <div class="progress m-b-20">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="progress m-b-20">
                                        <div class="progress-bar" role="progressbar" style="width: 33%" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="progress m-b-20">
                                        <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="progress m-b-20">
                                        <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="progress mb-0">
                                        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title">Contextual alternatives</h4>

                                    <p class="text-muted font-13 m-b-30">
                                        Progress bars use some of the same button and alert classes for consistent styles.
                                    </p>

                                    <div class="progress m-b-20">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="progress m-b-20">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="progress m-b-20">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="progress m-b-20">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="progress mb-0">
                                        <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-md-6">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title">Striped example</h4>

                                    <p class="text-muted font-13 m-b-30">
                                        Uses a gradient to create a striped effect.
                                    </p>

                                    <div class="progress m-b-20">
                                        <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="progress m-b-20">
                                        <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="progress m-b-20">
                                        <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="progress m-b-20">
                                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="progress m-b-20">
                                        <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="progress mb-0">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title">Size example</h4>

                                    <p class="text-muted font-13 m-b-30">
                                        Your awesome text goes here.
                                    </p>

                                    <div class="progress m-b-20" style="height: 1px;">
                                        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="progress m-b-20">
                                        <div class="progress-bar" role="progressbar" style="width: 25%; height: 20px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="progress m-b-20">
                                        <div class="progress-bar progress-lg bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="progress progress-sm m-b-20">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="progress progress-xs m-b-20">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-md-6">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title">Progressbar Vertical</h4>

                                    <p class="text-muted font-13 m-b-30">
                                        Use class <code>.progress-vertical</code>.
                                    </p>

                                    <div class="progress progress-sm progress-vertical">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" style="height: 89%;">
                                            <span class="sr-only">89% Complete</span>
                                        </div>
                                    </div>
                                    <div class="progress progress-vertical">
                                        <div class="progress-bar progress-bar-inverse" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="height: 77%;">
                                            <span class="sr-only">77% Complete</span>
                                        </div>
                                    </div>
                                    <div class="progress progress-md progress-vertical">
                                        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="height: 45%;">
                                            <span class="sr-only">45% Complete</span>
                                        </div>
                                    </div>
                                    <div class="progress progress-lg progress-vertical m-b-5">
                                        <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100" style="height: 67%;">
                                            <span class="sr-only">67% Complete</span>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title">Progressbar Vertical Bottom</h4>

                                    <p class="text-muted font-13 m-b-30">
                                        Use class <code>.progress-vertical-bottom</code>.
                                    </p>

                                    <div class="progress progress-sm progress-vertical-bottom">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" style="height: 89%;">
                                            <span class="sr-only">89% Complete</span>
                                        </div>
                                    </div>
                                    <div class="progress progress-vertical-bottom">
                                        <div class="progress-bar progress-bar-inverse" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="height: 77%;">
                                            <span class="sr-only">77% Complete</span>
                                        </div>
                                    </div>
                                    <div class="progress progress-md progress-vertical-bottom">
                                        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="height: 45%;">
                                            <span class="sr-only">45% Complete</span>
                                        </div>
                                    </div>
                                    <div class="progress progress-lg progress-vertical-bottom m-b-5">
                                        <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100" style="height: 67%;">
                                            <span class="sr-only">67% Complete</span>
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

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>