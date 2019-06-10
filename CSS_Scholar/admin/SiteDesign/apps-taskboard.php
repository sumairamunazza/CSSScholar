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

        <!-- jquery UI -->
        <link href="../plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" type="text/css" />

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
                            <div class="col-lg-4">
                                <div class="card-box">
                                    <h4 class="text-dark header-title m-t-0">Upcoming</h4>
                                    <p class="text-muted m-b-30 font-13">
                                        Your awesome text goes here. Your awesome text goes here.
                                    </p>

                                    <ul class="sortable-list taskList list-unstyled" id="upcoming">
                                        <li class="task-warning" id="task1">
                                            <div class="checkbox checkbox-custom checkbox-single pull-right">
                                                <input type="checkbox" aria-label="Single checkbox Two">
                                                <label></label>
                                            </div>
                                            When an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                            <div class="clearfix"></div>
                                            <div class="mt-3">
                                                <p class="pull-right mb-0 mt-2">
                                                    <button type="button" class="btn btn-success btn-sm waves-effect waves-light">View</button>
                                                </p>
                                                <p class="mb-0"><a href="" class="text-muted"><img src="assets/images/users/avatar-1.jpg" alt="task-user" class="thumb-sm rounded-circle mr-2"> <span class="font-bold font-secondary">Petey Cruiser</span></a> </p>
                                            </div>
                                        </li>
                                        <li class="task-success" id="task2">
                                            <div class="checkbox checkbox-custom checkbox-single pull-right">
                                                <input type="checkbox" aria-label="Single checkbox Two">
                                                <label></label>
                                            </div>
                                            Many desktop publishing packages and web page editors now use Lorem.
                                            <div class="clearfix"></div>
                                            <div class="mt-3">
                                                <p class="pull-right mb-0 mt-2">
                                                    <button type="button" class="btn btn-success btn-sm waves-effect waves-light">View</button>
                                                </p>
                                                <p class="mb-0"><a href="" class="text-muted"><img src="assets/images/users/avatar-2.jpg" alt="task-user" class="thumb-sm rounded-circle mr-2"> <span class="font-bold font-secondary">Anna Sthesia</span></a> </p>
                                            </div>
                                        </li>
                                        <li id="task3">
                                            <div class="checkbox checkbox-custom checkbox-single pull-right">
                                                <input type="checkbox" aria-label="Single checkbox Two">
                                                <label></label>
                                            </div>
                                            If you are going to use a passage of Lorem Ipsum..
                                            <div class="clearfix"></div>
                                            <div class="mt-3">
                                                <p class="pull-right mb-0 mt-2">
                                                    <button type="button" class="btn btn-success btn-sm waves-effect waves-light">View</button>
                                                </p>
                                                <p class="mb-0"><a href="" class="text-muted"><img src="assets/images/users/avatar-3.jpg" alt="task-user" class="thumb-sm rounded-circle mr-2"> <span class="font-bold font-secondary">Gail Forcewind</span></a> </p>
                                            </div>
                                        </li>
                                        <li class="task-info" id="task4">
                                            <div class="checkbox checkbox-custom checkbox-single pull-right">
                                                <input type="checkbox" aria-label="Single checkbox Two">
                                                <label></label>
                                            </div>
                                            It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
                                            <div class="clearfix"></div>
                                            <div class="mt-3">
                                                <p class="pull-right mb-0 mt-2">
                                                    <button type="button" class="btn btn-success btn-sm waves-effect waves-light">View</button>
                                                </p>
                                                <p class="mb-0"><a href="" class="text-muted"><img src="assets/images/users/avatar-4.jpg" alt="task-user" class="thumb-sm rounded-circle mr-2"> <span class="font-bold font-secondary">Maya Didas</span></a> </p>
                                            </div>
                                        </li>
                                        <li class="task-danger" id="task5">
                                            <div class="checkbox checkbox-custom checkbox-single pull-right">
                                                <input type="checkbox" aria-label="Single checkbox Two">
                                                <label></label>
                                            </div>
                                            There are many variations of passages of Lorem Ipsum available.
                                            <div class="clearfix"></div>
                                            <div class="mt-3">
                                                <p class="pull-right mb-0 mt-2">
                                                    <button type="button" class="btn btn-success btn-sm waves-effect waves-light">View</button>
                                                </p>
                                                <p class="mb-0"><a href="" class="text-muted"><img src="assets/images/users/avatar-5.jpg" alt="task-user" class="thumb-sm rounded-circle mr-2"> <span class="font-bold font-secondary">Rick O'Shea</span></a> </p>
                                            </div>
                                        </li>
                                    </ul>
                                    <a href="#" class="btn btn-custom btn-block mt-3 waves-effect waves-light"><i class="mdi mdi-plus-circle"></i> Add New</a>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card-box">
                                    <h4 class="text-dark header-title m-t-0">In Progress</h4>
                                    <p class="text-muted m-b-30 font-13">
                                        Your awesome text goes here.The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.
                                    </p>

                                    <ul class="sortable-list taskList list-unstyled" id="inprogress">
                                        <li id="task9">
                                            <div class="checkbox checkbox-custom checkbox-single pull-right">
                                                <input type="checkbox" aria-label="Single checkbox Two">
                                                <label></label>
                                            </div>
                                            If you are going to use a passage of Lorem Ipsum..
                                            <div class="clearfix"></div>
                                            <div class="mt-3">
                                                <p class="pull-right mb-0 mt-2">
                                                    <button type="button" class="btn btn-success btn-sm waves-effect waves-light">View</button>
                                                </p>
                                                <p class="mb-0"><a href="" class="text-muted"><img src="assets/images/users/avatar-3.jpg" alt="task-user" class="thumb-sm rounded-circle mr-2"> <span class="font-bold font-secondary">Gail Forcewind</span></a> </p>
                                            </div>
                                        </li>
                                        <li class="task-info" id="task10">
                                            <div class="checkbox checkbox-custom checkbox-single pull-right">
                                                <input type="checkbox" aria-label="Single checkbox Two">
                                                <label></label>
                                            </div>
                                            It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
                                            <div class="clearfix"></div>
                                            <div class="mt-3">
                                                <p class="pull-right mb-0 mt-2">
                                                    <button type="button" class="btn btn-success btn-sm waves-effect waves-light">View</button>
                                                </p>
                                                <p class="mb-0"><a href="" class="text-muted"><img src="assets/images/users/avatar-4.jpg" alt="task-user" class="thumb-sm rounded-circle mr-2"> <span class="font-bold font-secondary">Maya Didas</span></a> </p>
                                            </div>
                                        </li>
                                        <li class="task-danger" id="task11">
                                            <div class="checkbox checkbox-custom checkbox-single pull-right">
                                                <input type="checkbox" aria-label="Single checkbox Two">
                                                <label></label>
                                            </div>
                                            There are many variations of passages of Lorem Ipsum available.
                                            <div class="clearfix"></div>
                                            <div class="mt-3">
                                                <p class="pull-right mb-0 mt-2">
                                                    <button type="button" class="btn btn-success btn-sm waves-effect waves-light">View</button>
                                                </p>
                                                <p class="mb-0"><a href="" class="text-muted"><img src="assets/images/users/avatar-5.jpg" alt="task-user" class="thumb-sm rounded-circle mr-2"> <span class="font-bold font-secondary">Rick O'Shea</span></a> </p>
                                            </div>
                                        </li>
                                        <li class="task-warning" id="task7">
                                            <div class="checkbox checkbox-custom checkbox-single pull-right">
                                                <input type="checkbox" aria-label="Single checkbox Two">
                                                <label></label>
                                            </div>
                                            When an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                            <div class="clearfix"></div>
                                            <div class="mt-3">
                                                <p class="pull-right mb-0 mt-2">
                                                    <button type="button" class="btn btn-success btn-sm waves-effect waves-light">View</button>
                                                </p>
                                                <p class="mb-0"><a href="" class="text-muted"><img src="assets/images/users/avatar-1.jpg" alt="task-user" class="thumb-sm rounded-circle mr-2"> <span class="font-bold font-secondary">Petey Cruiser</span></a> </p>
                                            </div>
                                        </li>
                                    </ul>
                                    <a href="#" class="btn btn-custom btn-block mt-3 waves-effect waves-light"><i class="mdi mdi-plus-circle"></i> Add New</a>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card-box">
                                    <h4 class="text-dark header-title m-t-0">Completed</h4>
                                    <p class="text-muted m-b-30 font-13">
                                        Your awesome text goes here. Your awesome text goes here.
                                    </p>

                                    <ul class="sortable-list taskList list-unstyled" id="completed">
                                        <li class="task-warning" id="task14">
                                            <div class="checkbox checkbox-custom checkbox-single pull-right">
                                                <input type="checkbox" aria-label="Single checkbox Two">
                                                <label></label>
                                            </div>
                                            When an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                            <div class="clearfix"></div>
                                            <div class="mt-3">
                                                <p class="pull-right mb-0 mt-2">
                                                    <button type="button" class="btn btn-success btn-sm waves-effect waves-light">View</button>
                                                </p>
                                                <p class="mb-0"><a href="" class="text-muted"><img src="assets/images/users/avatar-1.jpg" alt="task-user" class="thumb-sm rounded-circle mr-2"> <span class="font-bold font-secondary">Petey Cruiser</span></a> </p>
                                            </div>
                                        </li>
                                        <li class="task-success" id="task15">
                                            <div class="checkbox checkbox-custom checkbox-single pull-right">
                                                <input type="checkbox" aria-label="Single checkbox Two">
                                                <label></label>
                                            </div>
                                            Many desktop publishing packages and web page editors now use Lorem.
                                            <div class="clearfix"></div>
                                            <div class="mt-3">
                                                <p class="pull-right mb-0 mt-2">
                                                    <button type="button" class="btn btn-success btn-sm waves-effect waves-light">View</button>
                                                </p>
                                                <p class="mb-0"><a href="" class="text-muted"><img src="assets/images/users/avatar-2.jpg" alt="task-user" class="thumb-sm rounded-circle mr-2"> <span class="font-bold font-secondary">Anna Sthesia</span></a> </p>
                                            </div>
                                        </li>
                                        <li id="task16">
                                            <div class="checkbox checkbox-custom checkbox-single pull-right">
                                                <input type="checkbox" aria-label="Single checkbox Two">
                                                <label></label>
                                            </div>
                                            If you are going to use a passage of Lorem Ipsum..
                                            <div class="clearfix"></div>
                                            <div class="mt-3">
                                                <p class="pull-right mb-0 mt-2">
                                                    <button type="button" class="btn btn-success btn-sm waves-effect waves-light">View</button>
                                                </p>
                                                <p class="mb-0"><a href="" class="text-muted"><img src="assets/images/users/avatar-3.jpg" alt="task-user" class="thumb-sm rounded-circle mr-2"> <span class="font-bold font-secondary">Gail Forcewind</span></a> </p>
                                            </div>
                                        </li>
                                        <li class="task-info" id="task17">
                                            <div class="checkbox checkbox-custom checkbox-single pull-right">
                                                <input type="checkbox" aria-label="Single checkbox Two">
                                                <label></label>
                                            </div>
                                            It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
                                            <div class="clearfix"></div>
                                            <div class="mt-3">
                                                <p class="pull-right mb-0 mt-2">
                                                    <button type="button" class="btn btn-success btn-sm waves-effect waves-light">View</button>
                                                </p>
                                                <p class="mb-0"><a href="" class="text-muted"><img src="assets/images/users/avatar-4.jpg" alt="task-user" class="thumb-sm rounded-circle mr-2"> <span class="font-bold font-secondary">Maya Didas</span></a> </p>
                                            </div>
                                        </li>
                                        <li class="task-danger" id="task18">
                                            <div class="checkbox checkbox-custom checkbox-single pull-right">
                                                <input type="checkbox" aria-label="Single checkbox Two">
                                                <label></label>
                                            </div>
                                            There are many variations of passages of Lorem Ipsum available.
                                            <div class="clearfix"></div>
                                            <div class="mt-3">
                                                <p class="pull-right mb-0 mt-2">
                                                    <button type="button" class="btn btn-success btn-sm waves-effect waves-light">View</button>
                                                </p>
                                                <p class="mb-0"><a href="" class="text-muted"><img src="assets/images/users/avatar-5.jpg" alt="task-user" class="thumb-sm rounded-circle mr-2"> <span class="font-bold font-secondary">Rick O'Shea</span></a> </p>
                                            </div>
                                        </li>
                                    </ul>
                                    <a href="#" class="btn btn-custom btn-block mt-3 waves-effect waves-light"><i class="mdi mdi-plus-circle"></i> Add New</a>
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

        <!-- Jquery Ui js -->
        <script src="../plugins/jquery-ui/jquery-ui.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        <script>
            $(document).ready(function () {

                $("#upcoming, #inprogress, #completed").sortable({
                    connectWith: ".taskList",
                    placeholder: 'task-placeholder',
                    forcePlaceholderSize: true,
                    update: function (event, ui) {

                        var todo = $("#todo").sortable("toArray");
                        var inprogress = $("#inprogress").sortable("toArray");
                        var completed = $("#completed").sortable("toArray");
                    }
                }).disableSelection();

            });
        </script>

    </body>
</html>