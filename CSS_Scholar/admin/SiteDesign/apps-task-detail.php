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

        <!-- Plugins css-->
        <link href="../plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css" rel="stylesheet" />

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
                            <div class="col-md-8">
                                <div class="card-box task-detail">
                                    <div class="media mt-0 m-b-30">
                                        <img class="d-flex mr-3 rounded-circle" alt="64x64" src="assets/images/users/avatar-2.jpg" style="width: 48px; height: 48px;">
                                        <div class="media-body">
                                            <h5 class="media-heading mb-0 mt-0">James L. Kelley</h5>
                                            <span class="badge badge-danger">Urgent</span>
                                        </div>
                                    </div>

                                    <h4 class="m-b-20">Code HTML email template for welcome email</h4>

                                    <p class="text-muted">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, illo, iste
                                        itaque voluptas corrupti ratione reprehenderit magni similique? Tempore, quos
                                        delectus asperiores libero voluptas quod perferendis! Voluptate, quod illo
                                        rerum? Lorem ipsum dolor sit amet.
                                    </p>

                                    <p class="text-muted">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, illo, iste
                                        itaque voluptas corrupti ratione reprehenderit magni similique? Tempore, quos
                                        delectus asperiores libero voluptas quod perferendis! Voluptate, quod illo
                                        rerum? Lorem ipsum dolor sit amet.
                                    </p>

                                    <ul class="list-inline task-dates m-b-0 mt-5">
                                        <li>
                                            <h5 class="m-b-5">Start Date</h5>
                                            <p> 01 December 2017 <small class="text-muted">1:00 PM</small></p>
                                        </li>

                                        <li>
                                            <h5 class="m-b-5">Due Date</h5>
                                            <p> 17 February 2018 <small class="text-muted">12:00 PM</small></p>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>

                                    <div class="task-tags mt-4">
                                        <h5 class="">Tags</h5>
                                        <input type="text" value="Amsterdam,Washington,Sydney" data-role="tagsinput" placeholder="add tags"/>
                                    </div>

                                    <div class="assign-team mt-4">
                                        <h5 class="m-b-5">Assign to</h5>
                                        <div>
                                            <a href="#"> <img class="rounded-circle thumb-sm" alt="64x64" src="assets/images/users/avatar-2.jpg"> </a>
                                            <a href="#"> <img class="rounded-circle thumb-sm" alt="64x64" src="assets/images/users/avatar-3.jpg"> </a>
                                            <a href="#"> <img class="rounded-circle thumb-sm" alt="64x64" src="assets/images/users/avatar-5.jpg"> </a>
                                            <a href="#"> <img class="rounded-circle thumb-sm" alt="64x64" src="assets/images/users/avatar-8.jpg"> </a>
                                            <a href="#"><span class="add-new-plus"><i class="mdi mdi-plus"></i> </span></a>
                                        </div>
                                    </div>

                                    <div class="attached-files mt-4">
                                        <h5 class="">Attached Files </h5>
                                        <div class="files-list">
                                            <div class="file-box">
                                                <a href=""><img src="assets/images/attached-files/img-1.jpg" class="img-responsive img-thumbnail" alt="attached-img"></a>
                                                <p class="font-13 mb-1 text-muted"><small>File one</small></p>
                                            </div>
                                            <div class="file-box">
                                                <a href=""><img src="assets/images/attached-files/img-2.jpg" class="img-responsive img-thumbnail" alt="attached-img"></a>
                                                <p class="font-13 mb-1 text-muted"><small>Attached-2</small></p>
                                            </div>
                                            <div class="file-box">
                                                <a href=""><img src="assets/images/attached-files/img-3.jpg" class="img-responsive img-thumbnail" alt="attached-img"></a>
                                                <p class="font-13 mb-1 text-muted"><small>Dribbble shot</small></p>
                                            </div>
                                            <div class="file-box ml-3">
                                                <a href="#"><span class="add-new-plus"><i class="mdi mdi-plus"></i> </span></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="text-right m-t-30">
                                                    <button type="submit" class="btn btn-success waves-effect waves-light">
                                                        Save
                                                    </button>
                                                    <button type="button"
                                                            class="btn btn-light waves-effect">Cancel
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div><!-- end col -->

                            <div class="col-md-4">
                                <div class="card-box">
                                    <h4 class="header-title m-b-30">Comments (5)</h4>

                                    <div>

                                        <div class="media m-b-20">
                                            <div class="d-flex mr-3">
                                                <a href="#"> <img class="media-object rounded-circle thumb-sm" alt="64x64" src="assets/images/users/avatar-1.jpg"> </a>
                                            </div>
                                            <div class="media-body">
                                                <h5 class="mt-0">Maxine Kennedy</h5>
                                                <p class="font-13 text-muted mb-0">
                                                    <a href="" class="text-dark">@Michael</a>
                                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
                                                    ante sollicitudin commodo. Cras purus odio.
                                                </p>
                                                <a href="" class="text-success font-13">Reply</a>
                                            </div>
                                        </div>

                                        <div class="media m-b-20">
                                            <div class="d-flex mr-3">
                                                <a href="#"> <img class="media-object rounded-circle thumb-sm" alt="64x64" src="assets/images/users/avatar-2.jpg"> </a>
                                            </div>
                                            <div class="media-body">
                                                <h5 class="mt-0">Doyle Bell</h5>
                                                <p class="font-13 text-muted mb-0">
                                                    <a href="" class="text-dark">@Michael</a>
                                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
                                                    ante sollicitudin commodo. Cras purus odio.
                                                </p>
                                                <a href="" class="text-success font-13">Reply</a>

                                                <div class="media m-t-20 m-b-20">
                                                    <div class="d-flex mr-3">
                                                        <a href="#"> <img class="media-object rounded-circle thumb-sm" alt="64x64" src="assets/images/users/avatar-3.jpg"> </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5 class="mt-0">Elena Vancamp</h5>
                                                        <p class="font-13 text-muted mb-0">
                                                            <a href="" class="text-dark">@Doyle</a>
                                                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
                                                            ante sollicitudin commodo. Cras purus odio.
                                                        </p>
                                                        <a href="" class="text-success font-13">Reply</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="media m-b-20">
                                            <div class="d-flex mr-3">
                                                <a href="#"> <img class="media-object rounded-circle thumb-sm" alt="64x64" src="assets/images/users/avatar-1.jpg"> </a>
                                            </div>
                                            <div class="media-body">
                                                <h5 class="mt-0">Maxine Kennedy</h5>
                                                <p class="font-13 text-muted mb-0">
                                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
                                                    ante sollicitudin commodo. Cras purus odio.
                                                </p>
                                                <a href="" class="text-success font-13">Reply</a>
                                            </div>
                                        </div>

                                        <div class="media m-b-20">
                                            <div class="d-flex mr-3">
                                                <a href="#"> <img class="media-object rounded-circle thumb-sm" alt="64x64" src="assets/images/users/avatar-5.jpg"> </a>
                                            </div>
                                            <div class="media-body">
                                                <h5 class="mt-0">Erick Loper</h5>
                                                <p class="font-13 text-muted mb-0">
                                                    <a href="" class="text-dark">@Maxine</a>
                                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
                                                    ante sollicitudin commodo. Cras purus odio.
                                                </p>
                                                <a href="" class="text-success font-13">Reply</a>
                                            </div>
                                        </div>

                                        <div class="media m-b-20">
                                            <div class="d-flex mr-3">
                                                <a href="#"> <img class="media-object rounded-circle thumb-sm" alt="64x64" src="assets/images/users/avatar-1.jpg"> </a>
                                            </div>
                                            <div class="media-body">
                                                <input type="text" class="form-control input-sm" placeholder="Some text value...">
                                                <div class="mt-2 text-right">
                                                    <button type="submit" class="btn btn-sm btn-custom waves-effect waves-light">Send</button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div><!-- end col -->
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

        <!-- Bootstrap tagsinput -->
        <script src="../plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>