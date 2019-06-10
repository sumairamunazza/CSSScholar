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

        <!-- Sweet Alert css -->
        <link href="../plugins/sweet-alert/sweetalert2.min.css" rel="stylesheet" type="text/css" />

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
                            <div class="col-lg-12">
                                <div class="card-box">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th style="min-width:50%;">Alert Type</th>
                                            <th>Example</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>A basic message</td>
                                            <td>
                                                <button type="button" class="btn btn-light waves-effect waves-light btn-sm" id="sa-basic">Click me</button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>A title with a text under</td>
                                            <td>
                                                <button type="button" class="btn btn-light waves-effect waves-light btn-sm" id="sa-title">Click me</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>A success message!</td>
                                            <td>
                                                <button type="button" class="btn btn-light waves-effect waves-light btn-sm" id="sa-success">Click me</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>A warning message, with a function attached to the "Confirm"-button...</td>
                                            <td>
                                                <button type="button" class="btn btn-light waves-effect waves-light btn-sm" id="sa-warning">Click me</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>By passing a parameter, you can execute something else for "Cancel".</td>
                                            <td>
                                                <button type="button" class="btn btn-light waves-effect waves-light btn-sm" id="sa-params">Click me</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>A message with custom Image Header</td>
                                            <td>
                                                <button type="button" class="btn btn-light waves-effect waves-light btn-sm" id="sa-image">Click me</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>A message with auto close timer</td>
                                            <td>
                                                <button type="button" class="btn btn-light waves-effect waves-light btn-sm" id="sa-close">Click me</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Custom HTML description and buttons</td>
                                            <td>
                                                <button type="button" class="btn btn-light waves-effect waves-light btn-sm" id="custom-html-alert">Click me</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>A message with custom width, padding and background</td>
                                            <td>
                                                <button type="button" class="btn btn-light waves-effect waves-light btn-sm" id="custom-padding-width-alert">Click me</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Ajax request example</td>
                                            <td>
                                                <button type="button" class="btn btn-light waves-effect waves-light btn-sm" id="ajax-alert">Click me</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Chaining modals (queue) example</td>
                                            <td>
                                                <button type="button" class="btn btn-light waves-effect waves-light btn-sm" id="chaining-alert">Click me</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Dynamic queue example</td>
                                            <td>
                                                <button type="button" class="btn btn-light waves-effect waves-light btn-sm" id="dynamic-alert">Click me</button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>

                                </div> <!-- end card-box -->
                            </div>
                            <!-- end col -->

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

        <!-- Sweet Alert Js  -->
        <script src="../plugins/sweet-alert/sweetalert2.min.js"></script>
        <script src="assets/pages/jquery.sweet-alert.init.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>