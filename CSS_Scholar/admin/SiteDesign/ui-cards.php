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
                            <div class="col-md-6 col-lg-3">

                                <!-- Simple card -->
                                <div class="card m-b-30">
                                    <img class="card-img-top img-fluid" src="assets/images/small/img-1.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up the bulk of the card's content.</p>
                                        <a href="#" class="btn btn-custom waves-effect waves-light">Button</a>
                                    </div>
                                </div>

                            </div><!-- end col -->

                            <div class="col-md-6 col-lg-3">

                                <div class="card m-b-30">
                                    <img class="card-img-top img-fluid" src="assets/images/small/img-2.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up the bulk of the card's content.</p>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">Cras justo odio</li>
                                        <li class="list-group-item">Dapibus ac facilisis in</li>
                                    </ul>
                                    <div class="card-body">
                                        <a href="#" class="card-link text-custom">Card link</a>
                                        <a href="#" class="card-link text-custom">Another link</a>
                                    </div>
                                </div>

                            </div><!-- end col -->

                            <div class="col-md-6 col-lg-3">

                                <div class="card m-b-30">
                                    <img class="card-img-top img-fluid" src="assets/images/small/img-3.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up the bulk of the card's content.</p>
                                    </div>
                                </div>

                            </div><!-- end col -->


                            <div class="col-md-6 col-lg-3">

                                <div class="card m-b-30">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <h6 class="card-subtitle text-muted">Support card subtitle</h6>
                                    </div>
                                    <img class="img-fluid" src="assets/images/small/img-4.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up the bulk of the card's content.</p>
                                        <a href="#" class="card-link text-custom">Card link</a>
                                        <a href="#" class="card-link text-custom">Another link</a>
                                    </div>
                                </div>

                            </div><!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card m-b-30 card-body">
                                    <h5 class="card-title">Special title treatment</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional
                                        content.</p>
                                    <a href="#" class="btn btn-custom waves-effect waves-light">Go somewhere</a>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card m-b-30 card-body">
                                    <h5 class="card-title">Special title treatment</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional
                                        content.</p>
                                    <a href="#" class="btn btn-custom waves-effect waves-light">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-md-4">
                                <div class="card m-b-30 card-body">
                                    <h5 class="card-title">Special title treatment</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional
                                        content.</p>
                                    <a href="#" class="btn btn-custom waves-effect waves-light">Go somewhere</a>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card m-b-30 card-body text-xs-center">
                                    <h5 class="card-title">Special title treatment</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional
                                        content.</p>
                                    <a href="#" class="btn btn-custom waves-effect waves-light">Go somewhere</a>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card m-b-30 card-body text-xs-right">
                                    <h5 class="card-title">Special title treatment</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional
                                        content.</p>
                                    <a href="#" class="btn btn-custom waves-effect waves-light">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-md-4">
                                <div class="card m-b-30">
                                    <h6 class="card-header">Featured</h6>
                                    <div class="card-body">
                                        <h5 class="card-title">Special title treatment</h5>
                                        <p class="card-text">With supporting text below as a natural lead-in to
                                            additional content.</p>
                                        <a href="#" class="btn btn-custom waves-effect waves-light">Go somewhere</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card m-b-30">
                                    <div class="card-header">
                                        Quote
                                    </div>
                                    <div class="card-body">
                                        <blockquote class="card-bodyquote">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                                erat a ante.</p>
                                            <footer>Someone famous in <cite title="Source Title">Source Title</cite>
                                            </footer>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card m-b-30 text-xs-center">
                                    <div class="card-header">
                                        Featured
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Special title treatment</h5>
                                        <p class="card-text">With supporting text below as a natural lead-in to
                                            additional content.</p>
                                        <a href="#" class="btn btn-custom waves-effect waves-light">Go somewhere</a>
                                    </div>
                                    <div class="card-footer text-muted">
                                        2 days ago
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-md-4">
                                <div class="card m-b-30">
                                    <img class="card-img-top img-fluid" src="assets/images/small/img-5.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit
                                            longer.</p>
                                        <p class="card-text">
                                            <small class="text-muted">Last updated 3 mins ago</small>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card m-b-30">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit
                                            longer.</p>
                                        <p class="card-text">
                                            <small class="text-muted">Last updated 3 mins ago</small>
                                        </p>
                                    </div>
                                    <img class="card-img-bottom img-fluid" src="assets/images/small/img-7.jpg" alt="Card image cap">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card m-b-30 card-inverse text-white">
                                    <img class="card-img img-fluid" src="assets/images/small/img-6.jpg" alt="Card image">
                                    <div class="card-img-overlay">
                                        <h5 class="card-title text-white">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit
                                            longer.</p>
                                        <p class="card-text">
                                            <small class="">Last updated 3 mins ago</small>
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-md-4">
                                <div class="card m-b-30 card-inverse text-white" style="background-color: #333; border-color: #333;">
                                    <div class="card-body">
                                        <h5 class="card-title">Special title treatment</h5>
                                        <p class="card-text">With supporting text below as a natural lead-in to
                                            additional content.</p>
                                        <a href="#" class="btn btn-custom waves-effect waves-light">Button</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card m-b-30 text-white bg-primary text-xs-center">
                                    <div class="card-body">
                                        <blockquote class="card-bodyquote">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                                erat a ante.</p>
                                            <footer>Someone famous in <cite title="Source Title">Source Title</cite>
                                            </footer>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card m-b-30 text-white bg-success text-xs-center">
                                    <div class="card-body">
                                        <blockquote class="card-bodyquote">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                                erat a ante.</p>
                                            <footer>Someone famous in <cite title="Source Title">Source Title</cite>
                                            </footer>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-md-4">
                                <div class="card m-b-30 text-white bg-info text-xs-center">
                                    <div class="card-body">
                                        <blockquote class="card-bodyquote">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                                erat a ante.</p>
                                            <footer>Someone famous in <cite title="Source Title">Source Title</cite>
                                            </footer>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card m-b-30 text-white bg-warning text-xs-center">
                                    <div class="card-body">
                                        <blockquote class="card-bodyquote">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                                erat a ante.</p>
                                            <footer>Someone famous in <cite title="Source Title">Source Title</cite>
                                            </footer>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card m-b-30 text-white bg-danger text-xs-center">
                                    <div class="card-body">
                                        <blockquote class="card-bodyquote">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                                erat a ante.</p>
                                            <footer>Someone famous in <cite title="Source Title">Source Title</cite>
                                            </footer>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-md-4">
                                <div class="card m-b-30 text-white bg-purple text-xs-center">
                                    <div class="card-body">
                                        <blockquote class="card-bodyquote">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                                erat a ante.</p>
                                            <footer>Someone famous in <cite title="Source Title">Source Title</cite>
                                            </footer>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card m-b-30 text-white bg-pink text-xs-center">
                                    <div class="card-body">
                                        <blockquote class="card-bodyquote">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                                erat a ante.</p>
                                            <footer>Someone famous in <cite title="Source Title">Source Title</cite>
                                            </footer>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card m-b-30 text-white bg-custom text-xs-center">
                                    <div class="card-body">
                                        <blockquote class="card-bodyquote">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                                erat a ante.</p>
                                            <footer>Someone famous in <cite title="Source Title">Source Title</cite>
                                            </footer>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-md-4">
                                <div class="card border-primary m-b-30">
                                    <div class="card-body text-primary">
                                        <h5 class="card-title">Primary card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card border-secondary m-b-30">
                                    <div class="card-body text-secondary">
                                        <h5 class="card-title">Secondary card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card border-success m-b-30">
                                    <div class="card-body text-success">
                                        <h5 class="card-title">Success card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <div class="row m-b-30">
                            <div class="col-12">
                                <h5 class="m-t-10 m-b-30">Card Group</h5>
                                <div class="card-group">
                                    <div class="card m-b-30">
                                        <img class="card-img-top img-fluid" src="assets/images/small/img-1.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">This is a wider card with supporting text below as a
                                                natural lead-in to additional content. This content is a little bit
                                                longer.</p>
                                            <p class="card-text">
                                                <small class="text-muted">Last updated 3 mins ago</small>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="card m-b-30">
                                        <img class="card-img-top img-fluid" src="assets/images/small/img-2.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">This card has supporting text below as a natural
                                                lead-in to additional content.</p>
                                            <p class="card-text">
                                                <small class="text-muted">Last updated 3 mins ago</small>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="card m-b-30">
                                        <img class="card-img-top img-fluid" src="assets/images/small/img-3.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">This is a wider card with supporting text below as a
                                                natural lead-in to additional content. This card has even longer content
                                                than the first to show that equal height action.</p>
                                            <p class="card-text">
                                                <small class="text-muted">Last updated 3 mins ago</small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <div class="row m-b-30">
                            <div class="col-12">
                                <h5 class="m-t-10 m-b-30">Decks</h5>
                                <div class="card-deck-wrapper">
                                    <div class="card-deck">
                                        <div class="card m-b-30">
                                            <img class="card-img-top img-fluid" src="assets/images/small/img-4.jpg" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">This is a longer card with supporting text below as
                                                    a natural lead-in to additional content. This content is a little
                                                    bit longer.</p>
                                                <p class="card-text">
                                                    <small class="text-muted">Last updated 3 mins ago</small>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="card m-b-30">
                                            <img class="card-img-top img-fluid" src="assets/images/small/img-5.jpg" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">This card has supporting text below as a natural
                                                    lead-in to additional content.</p>
                                                <p class="card-text">
                                                    <small class="text-muted">Last updated 3 mins ago</small>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="card m-b-30">
                                            <img class="card-img-top img-fluid" src="assets/images/small/img-6.jpg" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">This is a wider card with supporting text below as
                                                    a natural lead-in to additional content. This card has even longer
                                                    content than the first to show that equal height action.</p>
                                                <p class="card-text">
                                                    <small class="text-muted">Last updated 3 mins ago</small>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-12">
                                <h5 class="m-t-20 m-b-30">Navigation</h5>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card text-center m-b-30">
                                            <div class="card-header">
                                                <ul class="nav nav-tabs card-header-tabs">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" href="#">Active</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#">Link</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link disabled" href="#">Disabled</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">Special title treatment</h5>
                                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                <a href="#" class="btn btn-custom waves-effect waves-light">Go somewhere</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="card text-center m-b-30">
                                            <div class="card-header">
                                                <ul class="nav nav-pills card-header-pills">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" href="#">Active</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#">Link</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link disabled" href="#">Disabled</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">Special title treatment</h5>
                                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                <a href="#" class="btn btn-custom waves-effect waves-light">Go somewhere</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- end row -->


                        <div class="row m-b-30">
                            <div class="col-12">
                                <h5 class="m-t-10 m-b-30">Columns</h5>
                                <div class="card-columns">
                                    <div class="card m-b-30">
                                        <img class="card-img-top img-fluid" src="assets/images/small/img-7.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title that wraps to a new line</h5>
                                            <p class="card-text">This is a longer card with supporting text below as a
                                                natural lead-in to additional content. This content is a little bit
                                                longer.</p>
                                        </div>
                                    </div>
                                    <div class="card m-b-30 card-body">
                                        <blockquote class="card-bodyquote">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                                erat a ante.</p>
                                            <footer>
                                                <small class="text-muted">
                                                    Someone famous in <cite title="Source Title">Source Title</cite>
                                                </small>
                                            </footer>
                                        </blockquote>
                                    </div>
                                    <div class="card m-b-30">
                                        <img class="card-img-top img-fluid" src="assets/images/small/img-1.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">This card has supporting text below as a natural
                                                lead-in to additional content.</p>
                                            <p class="card-text">
                                                <small class="text-muted">Last updated 3 mins ago</small>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="card m-b-30 card-body card-inverse card-primary text-xs-center">
                                        <blockquote class="card-bodyquote">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                                erat.</p>
                                            <footer>
                                                <small>
                                                    Someone famous in <cite title="Source Title">Source Title</cite>
                                                </small>
                                            </footer>
                                        </blockquote>
                                    </div>
                                    <div class="card m-b-30 card-body text-xs-center">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This card has supporting text below as a natural lead-in to
                                            additional content.</p>
                                        <p class="card-text">
                                            <small class="text-muted">Last updated 3 mins ago</small>
                                        </p>
                                    </div>
                                    <div class="card m-b-30">
                                        <img class="card-img img-fluid" src="assets/images/small/img-2.jpg" alt="Card image cap">
                                    </div>
                                    <div class="card m-b-30 card-body text-xs-right">
                                        <blockquote class="card-bodyquote">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                                erat a ante.</p>
                                            <footer>
                                                <small class="text-muted">
                                                    Someone famous in <cite title="Source Title">Source Title</cite>
                                                </small>
                                            </footer>
                                        </blockquote>
                                    </div>
                                    <div class="card m-b-30 card-body">
                                        <h5 class="card-title">Card title</h5>

                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This card has even longer content
                                            than the first to show that equal height action.</p>
                                        <p class="card-text">
                                            <small class="text-muted">Last updated 3 mins ago</small>
                                        </p>
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

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>