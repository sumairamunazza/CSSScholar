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

        <!-- Bootstrap fileupload css -->
        <link href="../plugins/bootstrap-fileupload/bootstrap-fileupload.css" rel="stylesheet" />

        <!-- Dropzone css -->
        <link href="../plugins/dropzone/dropzone.css" rel="stylesheet" type="text/css" />

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
                                    <h4 class="header-title m-t-0">Bootstrap File Upload</h4>
                                    <p class="text-muted font-14 m-b-10">
                                        Your awesome text goes here.
                                    </p>

                                    <form action="#" class="form-horizontal ">
                                        <div class="form-group row">
                                            <label class="col-3 col-form-label">Default</label>
                                            <div class="col-8">
                                                <input type="file" class="default" />
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-3 col-form-label">Without input</label>
                                            <div class="controls col-9">
                                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                                    <button type="button" class="btn btn-custom btn-file">
                                                        <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select file</span>
                                                        <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                        <input type="file" class="btn-light" />
                                                    </button>
                                                    <span class="fileupload-preview" style="margin-left:5px;"></span>
                                                    <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none; margin-left:5px;"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-3 col-form-label">Image Upload</label>
                                            <div class="col-9">
                                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                        <img src="assets/images/small/img-1.jpg" alt="image" />
                                                    </div>
                                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                                    <div>
                                                        <button type="button" class="btn btn-custom btn-file">
                                                            <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span>
                                                            <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                            <input type="file" class="btn-light" />
                                                        </button>
                                                        <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash"></i> Remove</a>
                                                    </div>
                                                </div>
                                                <div class="alert alert-info"><strong>Notice!</strong> Image preview only works in IE10+, FF3.6+, Chrome6.0+ and Opera11.1+. In older browsers and Safari, the filename is shown instead.</div>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                        <!--  end row -->


                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="header-title m-t-0">Dropzone File Upload</h4>
                                    <p class="text-muted font-14 m-b-10">
                                        Your awesome text goes here.
                                    </p>

                                    <form action="#" class="dropzone" id="dropzone">
                                        <div class="fallback">
                                            <input name="file" type="file" multiple />
                                        </div>

                                    </form>
                                    <div class="clearfix text-right mt-3">
                                        <button type="button" class="btn btn-custom waves-effect waves-light">Submit</button>
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

        <!-- Bootstrap fileupload js -->
        <script src="../plugins/bootstrap-fileupload/bootstrap-fileupload.js"></script>

        <!-- Dropzone js -->
        <script src="../plugins/dropzone/dropzone.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>