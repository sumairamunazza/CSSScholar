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

        <!-- Tooltipster css -->
        <link rel="stylesheet" href="../plugins/tooltipster/tooltipster.bundle.min.css">

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
                                    <h4 class="header-title m-t-0">Popovers</h4>
                                    <p class="text-muted m-b-25 font-13">Add small overlays of content, like those on
                                        the iPad, to any element for housing secondary information.</p>


                                    <div class="button-list m-t-20">
                                        <button type="button" class="btn btn-light" data-container="body" title="" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="">
                                            Popover on top
                                        </button>

                                        <button type="button" class="btn btn-light" data-container="body" title="" data-toggle="popover" data-placement="bottom" data-content="Vivamus
                                        sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="">
                                            Popover on bottom
                                        </button>

                                        <button type="button" class="btn btn-light" data-container="body" title="" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="">
                                            Popover on right
                                        </button>

                                        <button type="button" class="btn btn-light" data-container="body" title="" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Popover title">
                                            Popover on left
                                        </button>

                                        <button type="button" tabindex="0" class="btn btn-custom" role="button" data-toggle="popover" data-trigger="focus" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="Dismissible popover">
                                            Dismissible popover
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->



                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="header-title m-t-0">Tooltips</h4>
                                    <p class="text-muted m-b-25 font-13">Four options are available: top, right, bottom,
                                        and left aligned.</p>

                                    <div class="button-list m-t-20">

                                        <button type="button" class="btn btn-light" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top">Tooltip on top</button>

                                        <button type="button" class="btn btn-light" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Tooltip on bottom">Tooltip on bottom</button>

                                        <button type="button" class="btn btn-light" data-toggle="tooltip" data-placement="left" title="Tooltip on left">Tooltip on left</button>

                                        <button type="button" class="btn btn-light" data-toggle="tooltip" data-placement="right" title="" data-original-title="Tooltip on right">Tooltip on right</button>
                                    </div>


                                    <h4 class="header-title m-t-50">Animated Tooltips</h4>
                                    <p class="text-muted m-b-25 font-13">Four options are available: top, right, bottom,
                                        and left aligned.</p>

                                    <div class="row">
                                        <div class="col-lg-8 col-md-10">

                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th style="min-width:50%;">Examples</th>
                                                    <th>Demo</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td class="vertical-middle">Basic Example</td>
                                                    <td>
                                                        <button type="button" id="tooltip-hover" class="btn btn-primary" title="This is my span's tooltip message!">Hover Me</button>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="vertical-middle">Custom open/close triggers</td>
                                                    <td>
                                                        <button type="button" id="tooltip-events" class="btn btn-info" title="Press any key on your keyboard or click anywhere in the page to close this">Click Me</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="vertical-middle">HTML, side, fixed size</td>
                                                    <td>
                                                        <button type="button" id="tooltip-html" class="btn btn-custom" title="Press any key on your keyboard or click anywhere in the page to close this">Hover Me</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="vertical-middle">Mouse, touch & hybrid devices
                                                    </td>
                                                    <td>
                                                        <button type="button" id="tooltip-touch" class="btn btn-purple" title="I would have never been born on a touch device :'(">Hover Me</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="vertical-middle">Animations
                                                    </td>
                                                    <td>
                                                        <button type="button" id="tooltip-animation" class="btn btn-success" title="Build CSS powered animations!">Hover Me</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="vertical-middle">Interaction with tooltips</td>
                                                    <td>
                                                        <button type="button" id="tooltip-interaction" class="btn btn-dark" title="Try clicking &lt;a class='text-white font-600' href='http://google.com/' target='_blank'&gt;this link&lt;/a&gt;">Hover Me</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="vertical-middle">Multiple tooltips on a single element</td>
                                                    <td>
                                                        <button type="button" id="tooltip-multiple" class="btn btn-light">Hover Me</button>
                                                    </td>
                                                </tr>

                                                </tbody>
                                            </table>
                                        </div>
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

        <!-- Tooltipster js -->
        <script src="../plugins/tooltipster/tooltipster.bundle.min.js"></script>
        <script src="assets/pages/jquery.tooltipster.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>