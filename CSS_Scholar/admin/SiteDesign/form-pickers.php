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

        <!-- Plugins css -->
        <link href="../plugins/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
        <link href="../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
        <link href="../plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
        <link href="../plugins/clockpicker/css/bootstrap-clockpicker.min.css" rel="stylesheet">
        <link href="../plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

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

            <!-- ========== Left Sidebar Start ========== -->
           <?php
           include("sidebar.php");
           ?>
                <!-- Sidebar -left -->

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
                                    <h4 class="header-title m-t-0">Timepicker</h4>
                                    <p class="text-muted font-14 m-b-25">
                                        Easily select a time for a text input using your mouse or keyboards arrow keys.
                                    </p>

                                    <div class="form-group">
                                        <label>Default Time Picker</label>

                                        <div class="input-group">
                                            <input id="timepicker" type="text" class="form-control">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="mdi mdi-clock"></i></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>24 Hour Mode Time Picker</label>

                                        <div class="input-group">
                                            <input id="timepicker2" type="text" class="form-control">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="mdi mdi-clock"></i></span>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="form-group">
                                        <label>Specify a step for the minute field</label>

                                        <div class="input-group">
                                            <input id="timepicker3" type="text" class="form-control">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="mdi mdi-clock"></i></span>
                                            </div>
                                        </div>
                                    </div>

                                </div> <!-- end card-box -->
                            </div> <!-- end col -->

                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="header-title m-t-0">Colorpicker</h4>
                                    <p class="text-muted font-14 m-b-25">
                                        Add color picker to field or to any other element.
                                    </p>

                                    <form action="#">
                                        <div class="form-group">
                                            <label>Default</label>
                                            <input type="text" class="colorpicker-default form-control" value="#8fff00">
                                        </div>
                                        <div class="form-group">
                                            <label>RGBA</label>
                                            <input type="text" class="colorpicker-rgba form-control" value="rgb(0,194,255,0.78)" data-color-format="rgba">
                                        </div>
                                        <div class="form-group">
                                            <label>As Component</label>

                                            <div class="input-group colorpicker-default" data-color-format="rgb" data-color="rgb(255, 146, 180)">
                                                <input type="text" readonly="readonly" class="form-control">
                                                <div class="input-group-append add-on">
                                                    <button class="btn btn-light" type="button">
                                                        <i style="background-color: rgb(124, 66, 84);margin-top: 2px;"></i>
                                                    </button>
                                                </div>
                                            </div>

                                        </div>
                                    </form>
                                </div> <!-- end card-box -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
                                    <h4 class="header-title m-t-0">Date Picker</h4>
                                    <p class="text-muted font-14 m-b-25">
                                        The datepicker is tied to a standard form input field. Click on the input to open
                                        an interactive calendar in a small overlay. Click elsewhere on the page or hit the Esc
                                        key to close. If a date is chosen, feedback is shown as the input's value.
                                    </p>

                                    <div class="row">
                                        <div class="col-lg-8">

                                            <div class="">
                                                <form action="#">
                                                    <div class="form-group">
                                                        <label>Default Functionality</label>
                                                        <div>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Auto Close</label>
                                                        <div>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-autoclose">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Multiple Date</label>
                                                        <div>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-multiple-date">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Date Range</label>
                                                        <div>
                                                            <div class="input-daterange input-group" id="date-range">
                                                                <input type="text" class="form-control" name="start" />
                                                                <input type="text" class="form-control" name="end" />
                                                            </div>
                                                        </div>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">

                                            <div class="p-20">

                                                <label>Display Inline</label>
                                                <div class="center-block" style="margin: 10px auto">
                                                    <div id="datepicker-inline" class=""></div>
                                                </div><!-- input-group -->
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <!-- end row -->


                        <div class="row">

                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="header-title m-t-0">Date Range Picker</h4>
                                    <p class="text-muted font-14 m-b-25">
                                        A JavaScript component for choosing date ranges.
                                        Designed to work with the Bootstrap CSS framework.
                                    </p>

                                    <form>
                                        <div class="form-group m-b-20">
                                            <label>With all options</label>
                                            <input type="text" id="reportrange" class="form-control"/>
                                        </div>
                                        <div class="form-group m-b-20">
                                            <label>Date Range Pick</label>
                                            <div>
                                                <input class="form-control input-daterange-datepicker" type="text" name="daterange" value="01/01/2017 - 01/31/2018"/>
                                            </div>
                                        </div>
                                        <div class="form-group m-b-20">
                                            <label>Date Range With Time</label>
                                            <div>
                                                <input type="text" class="form-control input-daterange-timepicker" name="daterange" value="01/01/2017 1:30 PM - 01/01/2017 2:00 PM"/>
                                            </div>
                                        </div>
                                        <div class="form-group m-b-0">
                                            <label>Limit Selectable Dates</label>
                                            <div>
                                                <input class="form-control input-limit-datepicker" type="text" name="daterange" value="06/01/2017 - 06/07/2017"/>
                                            </div>
                                        </div>
                                    </form>
                                </div> <!-- end card-box -->
                            </div>
                            <!-- end col -->

                            <div class="col-lg-6">

                                <div class="card-box">
                                    <h4 class="header-title">Clock Picker</h4>
                                    <p class="text-muted font-14">
                                        A clock-style timepicker for Bootstrap (or jQuery).
                                    </p>
                                    <div class="form-group">
                                        <label>Default Clock Picker</label>
                                        <div class="input-group clockpicker">
                                            <input type="text" class="form-control" value="09:30">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="mdi mdi-clock"></i></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Auto close</label>
                                        <div class="input-group clockpicker" data-placement="top" data-align="top" data-autoclose="true">
                                            <input type="text" class="form-control" value="13:14">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="mdi mdi-clock"></i></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Now time</label>
                                        <div class="input-group clockpicker">
                                            <input class="form-control" id="single-input" type="text" value="" placeholder="Now">
                                            <div class="input-group-append">
                                                <button type="button" id="check-minutes" class="btn waves-effect waves-light btn-primary">Check the minutes</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Place at left, align the arrow to top </label>

                                        <div class="input-group clockpicker" data-placement="top" data-align="top">
                                            <input type="text" class="form-control" value="13:14">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="mdi mdi-clock"></i></span>
                                            </div>
                                        </div>

                                    </div>
                                </div> <!-- card-box -->

                            </div> <!-- end col -->

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

        <!-- plugin js -->
        <script src="../plugins/moment/moment.js"></script>
        <script src="../plugins/bootstrap-timepicker/bootstrap-timepicker.js"></script>
        <script src="../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
        <script src="../plugins/clockpicker/js/bootstrap-clockpicker.min.js"></script>
        <script src="../plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
        <script src="../plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

        <!-- Init js -->
        <script src="assets/pages/jquery.form-pickers.init.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>