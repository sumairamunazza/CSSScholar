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

        <!--venobox lightbox-->
        <link rel="stylesheet" href="../plugins/magnific-popup/css/magnific-popup.css"/>

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

                        <!-- SECTION FILTER
                        ================================================== -->
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 ">
                                <div class="portfolioFilter text-center gallery-second">
                                    <a href="#" data-filter="*" class="current">All</a>
                                    <a href="#" data-filter=".webdesign">Web Design</a>
                                    <a href="#" data-filter=".graphicdesign">Graphic Design</a>
                                    <a href="#" data-filter=".illustrator">Illustrator</a>
                                    <a href="#" data-filter=".photography">Photography</a>
                                </div>
                            </div>
                        </div>

                        <div class="port">
                            <div class="portfolioContainer">
                                <div class="col-sm-6 col-md-4 webdesign illustrator">
                                    <a href="assets/images/small/img-1.jpg" class="image-popup">
                                        <div class="portfolio-masonry-box">
                                            <div class="portfolio-masonry-img">
                                                <img src="assets/images/small/img-1.jpg" class="thumb-img img-fluid" alt="work-thumbnail">
                                            </div>
                                            <div class="portfolio-masonry-detail">
                                                <h4 class="font-18">Street Photography</h4>
                                                <p>Graphic Design</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-sm-6 col-md-4 graphicdesign illustrator photography">
                                    <a href="assets/images/small/img-2.jpg" class="image-popup">
                                        <div class="portfolio-masonry-box">
                                            <div class="portfolio-masonry-img">
                                                <img src="assets/images/small/img-2.jpg" class="thumb-img" alt="work-thumbnail">
                                            </div>
                                            <div class="portfolio-masonry-detail">
                                                <h4 class="font-18">Traditional Building</h4>
                                                <p>Photography</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-sm-6 col-md-4 webdesign graphicdesign">
                                    <a href="assets/images/small/img-3.jpg" class="image-popup">
                                        <div class="portfolio-masonry-box">
                                            <div class="portfolio-masonry-img">
                                                <img src="assets/images/small/img-3.jpg" class="thumb-img img-fluid" alt="work-thumbnail">
                                            </div>
                                            <div class="portfolio-masonry-detail">
                                                <h4 class="font-18">Beautiful House</h4>
                                                <p>Natural</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-sm-6 col-md-4 illustrator photography">
                                    <a href="assets/images/small/img-4.jpg" class="image-popup">
                                        <div class="portfolio-masonry-box">
                                            <div class="portfolio-masonry-img">
                                                <img src="assets/images/small/img-4.jpg" class="thumb-img img-fluid" alt="work-thumbnail">
                                            </div>
                                            <div class="portfolio-masonry-detail">
                                                <h4 class="font-18">Creative Agency</h4>
                                                <p>Natural</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-sm-6 col-md-4 graphicdesign photography">
                                    <a href="assets/images/small/img-5.jpg" class="image-popup">
                                        <div class="portfolio-masonry-box">
                                            <div class="portfolio-masonry-img">
                                                <img src="assets/images/small/img-5.jpg" class="thumb-img" alt="work-thumbnail">
                                            </div>
                                            <div class="portfolio-masonry-detail">
                                                <h4 class="font-18">Street Photography</h4>
                                                <p>Photography</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-sm-6 col-md-4 webdesign photography">
                                    <a href="assets/images/small/img-6.jpg" class="image-popup">
                                        <div class="portfolio-masonry-box">
                                            <div class="portfolio-masonry-img">
                                                <img src="assets/images/small/img-6.jpg" class="thumb-img img-fluid" alt="work-thumbnail">
                                            </div>
                                            <div class="portfolio-masonry-detail">
                                                <h4 class="font-18">Creative Agency</h4>
                                                <p>Web Design</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-sm-6 col-md-4 illustrator photography graphicdesign">
                                    <a href="assets/images/small/img-7.jpg" class="image-popup">
                                        <div class="portfolio-masonry-box">
                                            <div class="portfolio-masonry-img">
                                                <img src="assets/images/small/img-7.jpg" class="thumb-img" alt="work-thumbnail">
                                            </div>
                                            <div class="portfolio-masonry-detail">
                                                <h4 class="font-18">Traditional Building</h4>
                                                <p>Photography</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-sm-6 col-md-4 graphicdesign photography webdesign">
                                    <a href="assets/images/small/img-1.jpg" class="image-popup">
                                        <div class="portfolio-masonry-box">
                                            <div class="portfolio-masonry-img">
                                                <img src="assets/images/small/img-1.jpg" class="thumb-img img-fluid" alt="work-thumbnail">
                                            </div>
                                            <div class="portfolio-masonry-detail">
                                                <h4 class="font-18">Beautiful House</h4>
                                                <p>Natural</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-sm-6 col-md-4 webdesign illustrator">
                                    <a href="assets/images/small/img-3.jpg" class="image-popup">
                                        <div class="portfolio-masonry-box">
                                            <div class="portfolio-masonry-img">
                                                <img src="assets/images/small/img-3.jpg" class="thumb-img img-fluid" alt="work-thumbnail">
                                            </div>
                                            <div class="portfolio-masonry-detail">
                                                <h4 class="font-18">Creative Agency</h4>
                                                <p>Natural</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div> <!-- End row -->

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

        <script type="text/javascript" src="../plugins/isotope/js/isotope.pkgd.min.js"></script>
        <script type="text/javascript" src="../plugins/magnific-popup/js/jquery.magnific-popup.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        <script type="text/javascript">
            $(window).on('load', function () {
                var $container = $('.portfolioContainer');
                $container.isotope({
                    filter: '*',
                    animationOptions: {
                        duration: 750,
                        easing: 'linear',
                        queue: false
                    }
                });

                $('.portfolioFilter a').click(function(){
                    $('.portfolioFilter .current').removeClass('current');
                    $(this).addClass('current');

                    var selector = $(this).attr('data-filter');
                    $container.isotope({
                        filter: selector,
                        animationOptions: {
                            duration: 750,
                            easing: 'linear',
                            queue: false
                        }
                    });
                    return false;
                });
            });
            $(document).ready(function() {
                $('.image-popup').magnificPopup({
                    type: 'image',
                    closeOnContentClick: true,
                    mainClass: 'mfp-fade',
                    gallery: {
                        enabled: true,
                        navigateByImgClick: true,
                        preload: [0,1] // Will preload 0 - before current, and 1 after the current image
                    }
                });
            });
        </script>

    </body>
</html>