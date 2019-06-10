<?php
    include("lib/session.php");
    include("lib/DBConn.php");
    include("lib/variables.php");
?>
<?php //session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title><?php echo SiteTitle; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.png">
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
            <div class="content-page">
                <?php
                include("topbar.php");
                ?>
                <!-- Start Page content -->
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="header-title mb-4">Site Overview</h4>
                                    <div class="row">
                                        <div class="col-sm-4 col-lg-4 col-xl-12">
                                            <div class="card-box mb-0 widget-chart-two">
                                                <p style="text-align: justify;"><?php echo SiteTitle; ?> is an online platform where students get complete information about CSS exam.</p>
                                    </div>
                                    <!-- end row -->
                                </div>
                            </div>
                        </div>

                        <!-- end row -->
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="header-title">People in contact</h4>
        <h2><?php
            if($dbname!=null)
            {
                $query=" SELECT count(id) as id FROM contact";
                $result1 = mysqli_query($conn, $query);
               while ($row = mysqli_fetch_array($result1))
                {
                    ?>
                        <div><?php echo $row['id']; ?></div>                    
                    <?php
                }
            }
        ?></h2>
        <br>
        <h4 class="header-title">Total Subjects</h4>
        <h2><?php
            if($dbname!=null)
            {
                $query=" SELECT count(id) as id FROM subject";
                $result1 = mysqli_query($conn, $query);
               while ($row = mysqli_fetch_array($result1))
                {
                    ?>
                        <div><?php echo $row['id']; ?></div>                    
                    <?php
                }
            }
        ?></h2>
        <br>
        
                                    <div id="website-stats" style="height: 59px;" class="flot-chart mt-5"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card-box">
                                    <!-- <h4 class="header-title">Sales Overview</h4> -->
                                    <h4 class="header-title">Total Admin</h4>
                <h2><?php
            if($dbname!=null)
            {
                $query=" SELECT count(id) as id FROM admin";
                $result1 = mysqli_query($conn, $query);
               while ($row = mysqli_fetch_array($result1))
                {
                    ?>
                        <div><?php echo $row['id']; ?></div>                    
                    <?php
                }
            }
        ?></h2><br>
        <h4 class="header-title">Total Teachers</h4>
                <h2><?php
            if($dbname!=null)
            {
                $query=" SELECT count(id) as id FROM teacher";
                $result1 = mysqli_query($conn, $query);
               while ($row = mysqli_fetch_array($result1))
                {
                    ?>
                        <div><?php echo $row['id']; ?></div>                    
                    <?php
                }
            }
        ?></h2>
                                    <div id="combine-chart">
                                        <div id="combine-chart-container" class="flot-chart mt-5" style="height: 90px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- container -->
                </div> <!-- content -->
               <?php
               include("includes/footer.php");
               ?>
            </div>
        </div>
        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <!-- Flot chart -->
        <script src="../plugins/flot-chart/jquery.flot.min.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.time.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.tooltip.min.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.resize.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.pie.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.crosshair.js"></script>
        <script src="../plugins/flot-chart/curvedLines.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.axislabels.js"></script>
        <script src="../plugins/jquery-knob/jquery.knob.js"></script>
        <!-- Dashboard Init -->
        <script src="assets/pages/jquery.dashboard.init.js"></script>
        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
    </body>
</html>