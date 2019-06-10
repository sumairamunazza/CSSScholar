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
<body class="event-01">
	<!-- header -->
<?php include("include/header.php");?>
<!-- end header -->
<section class="events-area">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 section-header-box">
				<div class="section-header">
					<h2>Rules</h2>
					<p>Here are some rules for students that must be fulfilled</p>
				</div>
			</div>
		</div>
		<div class="row">
				<?php
					$Query = "SELECT * FROM rules";
					//echo $Query;
					$result1 = mysqli_query($conn, $Query);
					while ($row = mysqli_fetch_array($result1))
					{
				?>
			<div class="col-sm-12 events-full-box">
				<div class="events-single-box">
					<div class="row">
						<div class="col-sm-5">
							<img src="admin/<?php echo $row['imagelocation'];?>" alt="" class="img-responsive">
						</div>
						<div class="col-sm-7 event-info">
							<h3><?php echo $row['title'];?></h3>
							
							<p style="text-align: justify;"><?php echo $row['description'];?></p>
						</div>
					</div>
				</div>
			</div>
				<?php
				}
				?>
			
		</div>
	</div>
</section>	
<!-- footer  -->
<?php include("include/footer.php");?>
<!-- end footer -->
	<script src="js/vendor/jquery-1.12.4.min.js"></script>
	<script src="js/assets/bootstrap.min.js"></script>
	<script src="js/assets/jquery.sticky.js"></script>
    <script src="js/assets/jquery.magnific-popup.min.js"></script>
    <script src="js/assets/jquery.counterup.min.js"></script>
    <script src="js/assets/waypoints.min.js"></script>
    <script src="js/assets/owl.carousel.min.js"></script>
    <script src="js/assets/slick.min.js"></script>
	<script src="js/assets/jquery.meanmenu.min.js"></script>
	<script src="js/custom.js"></script>
</body>
</html>
