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

            <!-- ========== Left Sidebar Start ========== -->
           <?php
           include("sidebar.php");
           ?>
           </div>



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

                        <div class="row justify-content-center">
                            <div class="col-xl-10">

                                <div class="text-center">
                                    <h3 class="m-b-30 m-t-20">Choose your perfect plan</h3>
                                    <p class="text-muted">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem Ipsum has <br> been the industry's standard dummy text ever since the
                                        1500s.
                                    </p>
                                </div>

                                <div class="mt-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="price_card text-center">
                                                <div class="pricing-header bg-light">
                                                    <span class="price text-dark">$19</span>
                                                    <span class="name text-dark">Starter Pack</span>
                                                </div>
                                                <ul class="price-features">
                                                    <li>10 GB Storage</li>
                                                    <li>500 GB Bandwidth</li>
                                                    <li>No Domain</li>
                                                    <li>1 User</li>
                                                    <li>Email Support</li>
                                                    <li>24x7 Support</li>
                                                </ul>
                                                <button class="btn btn-custom waves-effect waves-light w-md">Sign Up</button>
                                            </div> <!-- end Pricing_card -->
                                        </div> <!-- end col -->

                                        <div class="col-md-4">
                                            <div class="price_card text-center">
                                                <div class="pricing-header bg-custom">
                                                    <span class="price">$29</span>
                                                    <span class="name">Professional Pack</span>
                                                </div>
                                                <ul class="price-features">
                                                    <li>50 GB Storage</li>
                                                    <li>900 GB Bandwidth</li>
                                                    <li>2 Domain</li>
                                                    <li>10 User</li>
                                                    <li>Email Support</li>
                                                    <li>24x7 Support</li>
                                                </ul>
                                                <button class="btn btn-custom w-md waves-effect waves-light">Sign Up</button>
                                            </div>
                                        </div> <!-- end col -->

                                        <div class="col-md-4">
                                            <div class="price_card text-center">
                                                <div class="pricing-header bg-light">
                                                    <span class="price text-dark">$39</span>
                                                    <span class="name text-dark">Enterprise Pack</span>
                                                </div>
                                                <ul class="price-features">
                                                    <li>100 GB Storege</li>
                                                    <li>Unlimited Bandwidth</li>
                                                    <li>10 Domain</li>
                                                    <li>Unlimited User</li>
                                                    <li>Email Support</li>
                                                    <li>24x7 Support</li>
                                                </ul>
                                                <button class="btn btn-custom w-md waves-effect waves-light">Sign Up</button>
                                            </div> <!-- end Pricing_card -->
                                        </div> <!-- end col -->

                                    </div>
                                    <!-- end row -->
                                </div>
                            </div>
                        </div>

                    </div> <!-- container -->

                </div> <!-- content -->

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