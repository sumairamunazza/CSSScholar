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
                                <div class="">
                                    <div class="timeline">
                                        <article class="timeline-item alt">
                                            <div class="text-right">
                                                <div class="time-show first">
                                                    <a href="#" class="btn btn-custom w-lg">Today</a>
                                                </div>
                                            </div>
                                        </article>
                                        <article class="timeline-item alt">
                                            <div class="timeline-desk">
                                                <div class="panel">
                                                    <div class="timeline-box">
                                                        <span class="arrow-alt"></span>
                                                        <span class="timeline-icon bg-custom"><i class="mdi mdi-adjust"></i></span>
                                                        <h4 class="text-custom">1 hour ago</h4>
                                                        <p class="timeline-date text-muted"><small>08:25 am</small></p>
                                                        <p>Dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                        <article class="timeline-item ">
                                            <div class="timeline-desk">
                                                <div class="panel">
                                                    <div class="timeline-box">
                                                        <span class="arrow"></span>
                                                        <span class="timeline-icon bg-custom"><i class="mdi mdi-adjust"></i></span>
                                                        <h4 class="text-custom">2 hours ago</h4>
                                                        <p class="timeline-date text-muted"><small>08:25 am</small></p>
                                                        <p>consectetur adipisicing elit. Iusto, optio, dolorum <a href="#">John deon</a> provident rerum aut hic quasi placeat iure tempora laudantium </p>

                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                        <article class="timeline-item alt">
                                            <div class="timeline-desk">
                                                <div class="panel">
                                                    <div class="timeline-box">
                                                        <span class="arrow-alt"></span>
                                                        <span class="timeline-icon bg-custom"><i class="mdi mdi-adjust"></i></span>
                                                        <h4 class="text-custom">10 hours ago</h4>
                                                        <p class="timeline-date text-muted"><small>08:25 am</small></p>
                                                        <p>3 new photo Uploaded on facebook fan page</p>
                                                        <div class="album">
                                                            <a href="#">
                                                                <img alt="" src="assets/images/small/img-1.jpg">
                                                            </a>
                                                            <a href="#">
                                                                <img alt="" src="assets/images/small/img-2.jpg">
                                                            </a>
                                                            <a href="#">
                                                                <img alt="" src="assets/images/small/img-3.jpg">
                                                            </a>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                        <article class="timeline-item">
                                            <div class="timeline-desk">
                                                <div class="panel">
                                                    <div class="timeline-box">
                                                        <span class="arrow"></span>
                                                        <span class="timeline-icon bg-custom"><i class="mdi mdi-adjust"></i></span>
                                                        <h4 class="text-custom">14 hours ago</h4>
                                                        <p class="timeline-date text-muted"><small>08:25 am</small></p>
                                                        <p>Outdoor visit at California State Route 85 with John Boltana &
                                                            Harry Piterson regarding to setup a new show room.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                        <article class="timeline-item alt">
                                            <div class="timeline-desk">
                                                <div class="panel">
                                                    <div class="timeline-box">
                                                        <span class="arrow-alt"></span>
                                                        <span class="timeline-icon bg-custom"><i class="mdi mdi-adjust"></i></span>
                                                        <h4 class="text-custom">19 hours ago</h4>
                                                        <p class="timeline-date text-muted"><small>08:25 am</small></p>
                                                        <p>Jonatha Smith added new milestone <span><a href="#">Pathek</a></span>
                                                            Lorem ipsum dolor sit amet consiquest dio</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>

                                        <article class="timeline-item alt">
                                            <div class="text-right">
                                                <div class="time-show">
                                                    <a href="#" class="btn btn-custom w-lg">Yesterday</a>
                                                </div>
                                            </div>
                                        </article>
                                        <article class="timeline-item">
                                            <div class="timeline-desk">
                                                <div class="panel">
                                                    <div class="timeline-box">
                                                        <span class="arrow"></span>
                                                        <span class="timeline-icon bg-custom"><i class="mdi mdi-adjust"></i></span>
                                                        <h4 class="text-custom">07 January 2018</h4>
                                                        <p class="timeline-date text-muted"><small>08:25 am</small></p>
                                                        <p>Montly Regular Medical check up at Greenland Hospital by the
                                                            doctor <span><a href="#"> Johm meon </a></span>
                                                        </p>

                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                        <article class="timeline-item alt">
                                            <div class="timeline-desk">
                                                <div class="panel">
                                                    <div class="timeline-box">
                                                        <span class="arrow-alt"></span>
                                                        <span class="timeline-icon bg-custom"><i class="mdi mdi-adjust"></i></span>
                                                        <h4 class="text-custom">07 January 2018</h4>
                                                        <p class="timeline-date text-muted"><small>08:25 am</small></p>
                                                        <p>Download the new updates of Ubold admin dashboard</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>

                                        <article class="timeline-item">
                                            <div class="timeline-desk">
                                                <div class="panel">
                                                    <div class="timeline-box">
                                                        <span class="arrow"></span>
                                                        <span class="timeline-icon bg-custom"><i class="mdi mdi-adjust"></i></span>
                                                        <h4 class="text-custom">07 January 2018</h4>
                                                        <p class="timeline-date text-muted"><small>08:25 am</small></p>
                                                        <p>Jonatha Smith added new milestone <span><a class="blue" href="#">crishtian</a></span>
                                                            Lorem ipsum dolor sit amet consiquest dio</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                        <article class="timeline-item alt">
                                            <div class="text-right">
                                                <div class="time-show">
                                                    <a href="#" class="btn btn-custom w-lg">Last Month</a>
                                                </div>
                                            </div>
                                        </article>

                                        <article class="timeline-item alt">
                                            <div class="timeline-desk">
                                                <div class="panel">
                                                    <div class="timeline-box">
                                                        <span class="arrow-alt"></span>
                                                        <span class="timeline-icon bg-custom"><i class="mdi mdi-adjust"></i></span>
                                                        <h4 class="text-custom">31 December 2017</h4>
                                                        <p class="timeline-date text-muted"><small>08:25 am</small></p>
                                                        <p>Download the new updates of Ubold admin dashboard</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>

                                        <article class="timeline-item">
                                            <div class="timeline-desk">
                                                <div class="panel">
                                                    <div class="timeline-box">
                                                        <span class="arrow"></span>
                                                        <span class="timeline-icon bg-custom"><i class="mdi mdi-adjust"></i></span>
                                                        <h4 class="text-custom">16 Decembar 2017</h4>
                                                        <p class="timeline-date text-muted"><small>08:25 am</small></p>
                                                        <p>Jonatha Smith added new milestone <span><a href="#">prank</a></span>
                                                            Lorem ipsum dolor sit amet consiquest dio</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>

                                    </div>
                                    <!-- end timeline -->
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