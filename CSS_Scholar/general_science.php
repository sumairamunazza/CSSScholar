<?php
include("lib/DBConn.php");
include("lib/variables.php");
?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="description" content="<?php echo SiteTitle; ?>">
	<meta name="keywords" content="css exam, css papers, css rules, css guidelines, beginners guide, css books, css syllabus, about css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo SiteTitle; ?></title>
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/assets/bootstrap.min.css">
    <link rel="stylesheet" href="css/assets/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:600,700%7COpen+Sans:400,600" rel="stylesheet">     
	<link href="css/assets/magnific-popup.css" rel="stylesheet"> 
	<link href="css/assets/slick.css" rel="stylesheet"> 	
	<link href="css/assets/slick-theme.css" rel="stylesheet"> 	   
	<link href="css/assets/owl.carousel.css" rel="stylesheet">
	<link href="css/assets/owl.theme.css" rel="stylesheet">
	<link rel="stylesheet" href="css/assets/meanmenu.css">   
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">	
</head>
<body class="contact">
<?php include("include/header.php");?>
<section class="contact-area-02">
	<div class="container">
		<div class="row">
        	<div class="col-sm-12 section-header-box">
            	<div class="section-header">
                    <h2>General Science</h2>
            	</div>
    		</div>
   		 </div>

<div class="container">
            <div class="table table-bordered">          
                    <table class="table">
                        <thead>
                            <tr>
                            <th>Book Title</th>
                            <th>Author</th>
                            </tr>
                        </thead>
						<?php
							$Query = "SELECT * FROM books_generalscience";
							//echo $Query;
							$result1 = mysqli_query($conn, $Query);
							while ($row = mysqli_fetch_array($result1))
							{
								?>
                            <tbody>
							
                                <tr>
                                    <td><?php echo $row['title']?></td>
                                    <td><?php echo $row['author']?></td>
                                </tr>
                            </tbody>
							<?php
									}
								
							?>
                    </table>
	            </div>
            </div>    
			</div>																
		</div>
	</div>
</section>
<!-- ./ End Contact Area section -->


<!-- Footer Area section -->
<?php include("include/footer.php");?>
    <!-- ============================
    JavaScript Files
    ============================= -->
    <!-- jQuery -->
	<script src="js/vendor/jquery-1.12.4.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="js/assets/bootstrap.min.js"></script>
	<!-- Sticky JS -->
	<script src="js/assets/jquery.sticky.js"></script>
	<!-- Popup -->
    <script src="js/assets/jquery.magnific-popup.min.js"></script>
	<!-- Counter Up -->
    <script src="js/assets/jquery.counterup.min.js"></script>
    <script src="js/assets/waypoints.min.js"></script>
 	<!-- owl carousel -->
    <script src="js/assets/owl.carousel.min.js"></script>
   <!-- Slick Slider-->
    <script src="js/assets/slick.min.js"></script>
    <!-- Main Menu -->
	<script src="js/assets/jquery.meanmenu.min.js"></script>
	<!-- Custom JS -->
	<script src="js/custom.js"></script>
</body>
</html>
