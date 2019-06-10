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
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="header-title m-t-0">Grid options</h4>
                                    <p class="text-muted m-b-20 font-13">
                                        See how aspects of the Bootstrap grid system work across multiple devices with a handy table.
                                    </p>

                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped">
                                            <thead>
                                            <tr>
                                                <th></th>
                                                <th class="text-center">
                                                    Extra small<br>
                                                    <small>&lt;576px</small>
                                                </th>
                                                <th class="text-center">
                                                    Small<br>
                                                    <small>≥576px</small>
                                                </th>
                                                <th class="text-center">
                                                    Medium<br>
                                                    <small>≥768px</small>
                                                </th>
                                                <th class="text-center">
                                                    Large<br>
                                                    <small>≥992px</small>
                                                </th>
                                                <th class="text-center">
                                                    Extra large<br>
                                                    <small>≥1200px</small>
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th class="text-nowrap" scope="row">Max container width</th>
                                                <td>None (auto)</td>
                                                <td>540px</td>
                                                <td>720px</td>
                                                <td>960px</td>
                                                <td>1140px</td>
                                            </tr>
                                            <tr>
                                                <th class="text-nowrap" scope="row">Class prefix</th>
                                                <td><code>.col-</code></td>
                                                <td><code>.col-sm-</code></td>
                                                <td><code>.col-md-</code></td>
                                                <td><code>.col-lg-</code></td>
                                                <td><code>.col-xl-</code></td>
                                            </tr>
                                            <tr>
                                                <th class="text-nowrap" scope="row"># of columns</th>
                                                <td colspan="5">12</td>
                                            </tr>
                                            <tr>
                                                <th class="text-nowrap" scope="row">Gutter width</th>
                                                <td colspan="5">20px (10px on each side of a column)</td>
                                            </tr>
                                            <tr>
                                                <th class="text-nowrap" scope="row">Nestable</th>
                                                <td colspan="5">Yes</td>
                                            </tr>
                                            <tr>
                                                <th class="text-nowrap" scope="row">Column ordering</th>
                                                <td colspan="5">Yes</td>
                                            </tr>
                                            </tbody>
                                        </table>
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