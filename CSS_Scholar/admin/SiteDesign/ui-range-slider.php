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

        <!-- ION Slider -->
        <link href="../plugins/ion-rangeslider/ion.rangeSlider.css" rel="stylesheet" type="text/css"/>
        <link href="../plugins/ion-rangeslider/ion.rangeSlider.skinModern.css" rel="stylesheet" type="text/css"/>

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

                                    <h4 class="header-title m-t-0">Modern skin</h4>

                                    <p class="text-muted m-b-30 font-13">
                                        Cool, comfortable, responsive and easily customizable range slider
                                    </p>

                                    <form class="form-horizontal">
                                        <div class="form-group row">
                                            <label for="range_01" class="col-sm-2 col-xs-12 control-label"><b>Default</b><span class="font-13 d-block text-muted clearfix">Start without params</span></label>
                                            <div class="col-sm-10 col-xs-12">
                                                <input type="text" id="range_01">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="range_02" class="col-sm-2 col-xs-12 control-label"><b>Min-Max</b><span class=" font-13 d-block text-muted clearfix">Set min value, max value and start point</span></label>
                                            <div class="col-sm-10 col-xs-12">
                                                <input type="text" id="range_02">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="range_03" class="col-sm-2 col-xs-12 control-label"><b>Prefix</b><span class="font-13 d-block text-muted clearfix">showing grid and adding prefix "$"</span></label>
                                            <div class="col-sm-10 col-xs-12">
                                                <input type="text" id="range_03">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="range_04" class="col-sm-2 col-xs-12 control-label"><b>Range</b><span class="d-block font-13 text-muted clearfix">Set up range with negative values</span></label>
                                            <div class="col-sm-10 col-xs-12">
                                                <input type="text" id="range_04">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="range_05" class="col-sm-2 col-xs-12 control-label"><b>Step</b><span class="d-block font-13 text-muted clearfix">Using step 250</span></label>
                                            <div class="col-sm-10 col-xs-12">
                                                <input type="text" id="range_05">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="range_06" class="col-sm-2 col-xs-12 control-label"><b>Custom Values</b><span class="d-block font-13 text-muted clearfix">Using any strings as values</span></label>
                                            <div class="col-sm-10 col-xs-12">
                                                <input type="text" id="range_06">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="range_07" class="col-sm-2 col-xs-12 control-label"><b>Prettify Numbers</b><span class="d-block font-13 text-muted clearfix">Prettify enabled. Much better!</span></label>
                                            <div class="col-sm-10 col-xs-12">
                                                <input type="text" id="range_07">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="range_08" class="col-sm-2 col-xs-12 control-label"><b>Disabled</b><span class="d-block font-13 text-muted clearfix">Lock slider by using disable option</span></label>
                                            <div class="col-sm-10 col-xs-12">
                                                <input type="text" id="range_08">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="range_09" class="col-sm-2 col-xs-12 control-label"><b>Extra Example</b><span class="d-block font-13 text-muted clearfix">Whant to show that max number is not the biggest one?</span></label>
                                            <div class="col-sm-10 col-xs-12">
                                                <input type="text" id="range_09">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="range_10" class="col-sm-2 col-xs-12 control-label"><b>Use decorate_both option</b><span class="d-block font-13 text-muted clearfix">Use decorate_both option</span></label>
                                            <div class="col-sm-10 col-xs-12">
                                                <input type="text" id="range_10">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="range_11" class="col-sm-2 col-xs-12 control-label"><b>Postfixes</b><span class="d-block font-13 text-muted clearfix">Using postfixes</span></label>
                                            <div class="col-sm-10 col-xs-12">
                                                <input type="text" id="range_11">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="range_12" class="col-sm-2 col-xs-12 control-label"><b>Hide</b><span class="d-block font-13 text-muted clearfix">Or hide any part you wish</span></label>
                                            <div class="col-sm-10 col-xs-12">
                                                <input type="text" id="range_12">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div><!-- end col -->
                        </div><!-- Row -->

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

        <!-- Range slider js -->
        <script src="../plugins/ion-rangeslider/ion.rangeSlider.min.js"></script>
        <script src="assets/pages/jquery.range-sliders.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>