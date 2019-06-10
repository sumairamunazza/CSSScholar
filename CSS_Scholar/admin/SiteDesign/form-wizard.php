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

        <!--Form Wizard-->
        <link rel="stylesheet" type="text/css" href="../plugins/jquery.steps/css/jquery.steps.css" />

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

                        <!-- Basic Form Wizard -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title"><b>Basic Form Wizard</b></h4>
                                    <p class="text-muted m-b-30 font-13">
                                        Use the button classes on an <code>&lt;a&gt;</code>, <code>&lt;button&gt;</code>, or <code>&lt;input&gt;</code> element.
                                    </p>

                                    <div class="pull-in">
                                        <form id="basic-form" action="#">
                                            <div>
                                                <h3>Account</h3>
                                                <section>
                                                    <div class="form-group clearfix">
                                                        <label class="control-label " for="userName">User name *</label>
                                                        <div class="">
                                                            <input class="form-control required" id="userName" name="userName" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <label class="control-label " for="password"> Password *</label>
                                                        <div class="">
                                                            <input id="password" name="password" type="text" class="required form-control">

                                                        </div>
                                                    </div>

                                                    <div class="form-group clearfix">
                                                        <label class="control-label " for="confirm">Confirm Password *</label>
                                                        <div class="">
                                                            <input id="confirm" name="confirm" type="text" class="required form-control">
                                                        </div>
                                                    </div>

                                                </section>
                                                <h3>Profile</h3>
                                                <section>
                                                    <div class="form-group clearfix">

                                                        <label class="control-label" for="name"> First name *</label>
                                                        <div class="">
                                                            <input id="name" name="name" type="text" class="required form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <label class="control-label " for="surname"> Last name *</label>
                                                        <div class="">
                                                            <input id="surname" name="surname" type="text" class="required form-control">

                                                        </div>
                                                    </div>

                                                    <div class="form-group clearfix">
                                                        <label class="control-label " for="email">Email *</label>
                                                        <div class="">
                                                            <input id="email" name="email" type="text" class="required email form-control">
                                                        </div>
                                                    </div>

                                                    <div class="form-group clearfix">
                                                        <label class="control-label " for="address">Address *</label>
                                                        <div class="">
                                                            <input id="address" name="address" type="text" class="form-control">
                                                        </div>
                                                    </div>

                                                    <div class="form-group clearfix">
                                                        <label class="control-label ">(*) Mandatory</label>
                                                    </div>

                                                </section>
                                                <h3>Hints</h3>
                                                <section>
                                                    <div class="form-group clearfix">
                                                        <div class="col-lg-12">
                                                            <ul class="list-unstyled w-list">
                                                                <li><b>First Name :</b> Jonathan </li>
                                                                <li><b>Last Name :</b> Smith </li>
                                                                <li><b>Emial:</b> jonathan@smith.com</li>
                                                                <li><b>Address:</b> 123 Your City, Cityname. </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </section>
                                                <h3>Finish</h3>
                                                <section>
                                                    <div class="form-group clearfix">
                                                        <div class="col-lg-12">
                                                            <div class="checkbox checkbox-primary">
                                                                <input id="checkbox-h" type="checkbox">
                                                                <label for="checkbox-h">
                                                                    I agree with the Terms and Conditions.
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- End row -->


                        <!-- Vertical Steps Example -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title"><b>Vertical Steps Example</b></h4>
                                    <p class="text-muted m-b-30 font-13">
                                        Use the button classes on an <code>&lt;a&gt;</code>, <code>&lt;button&gt;</code>, or <code>&lt;input&gt;</code> element.
                                    </p>

                                    <form id="wizard-vertical">
                                        <h3>Account</h3>
                                        <section>
                                            <div class="form-group clearfix">
                                                <label class="control-label " for="userName1">User name *</label>
                                                <div class="">
                                                    <input class="form-control required" id="userName1" name="userName" type="text">
                                                </div>
                                            </div>
                                            <div class="form-group clearfix">
                                                <label class="control-label " for="password1"> Password *</label>
                                                <div class="">
                                                    <input id="password1" name="password" type="text" class="required form-control">
                                                </div>
                                            </div>

                                            <div class="form-group clearfix">
                                                <label class="control-label " for="confirm1">Confirm Password *</label>
                                                <div class="">
                                                    <input id="confirm1" name="confirm" type="text" class="required form-control">
                                                </div>
                                            </div>
                                            <div class="form-group clearfix">
                                                <label class="control-label ">(*) Mandatory</label>
                                            </div>
                                        </section>
                                        <h3>Profile</h3>
                                        <section>
                                            <div class="form-group clearfix">

                                                <label class="control-label" for="name1"> First name *</label>
                                                <div class="">
                                                    <input id="name1" name="name" type="text" class="required form-control">
                                                </div>
                                            </div>
                                            <div class="form-group clearfix">
                                                <label class="control-label " for="surname1"> Last name *</label>
                                                <div class="">
                                                    <input id="surname1" name="surname" type="text" class="required form-control">

                                                </div>
                                            </div>

                                            <div class="form-group clearfix">
                                                <label class="control-label " for="email1">Email *</label>
                                                <div class="">
                                                    <input id="email1" name="email" type="text" class="required email form-control">
                                                </div>
                                            </div>

                                            <div class="form-group clearfix">
                                                <label class="control-label " for="address1">Address *</label>
                                                <div class="">
                                                    <input id="address1" name="address" type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="form-group clearfix">
                                                <label class="col-lg-12 control-label ">(*) Mandatory</label>
                                            </div>

                                        </section>
                                        <h3>Hints</h3>
                                        <section>
                                            <div class="form-group clearfix">
                                                <div class="col-lg-12">
                                                    <ul class="list-unstyled w-list">
                                                        <li><b>First Name :</b> Jonathan </li>
                                                        <li><b>Last Name :</b> Smith </li>
                                                        <li><b>Emial:</b> jonathan@smith.com</li>
                                                        <li><b>Address:</b> 123 Your City, Cityname. </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </section>
                                        <h3>Finish</h3>
                                        <section>
                                            <div class="form-group clearfix">
                                                <div class="col-lg-12">
                                                    <div class="checkbox checkbox-primary">
                                                        <input id="checkbox-v" type="checkbox">
                                                        <label for="checkbox-v"> I agree with the Terms and Conditions. </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </form>
                                    <!-- End #wizard-vertical -->
                                </div>
                            </div>
                        </div><!-- End row -->

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

        <!--Form Wizard-->
        <script src="../plugins/jquery.steps/js/jquery.steps.min.js" type="text/javascript"></script>

        <!--wizard initialization-->
        <script src="assets/pages/jquery.wizard-init.js" type="text/javascript"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>