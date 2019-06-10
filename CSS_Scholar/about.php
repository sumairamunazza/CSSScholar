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
<body class="teachers-01">

<?php include("include/header.php");?>
<section class="Welcome-area">
	<div class="container">	
		<div class="row">
			<div class="col-sm-6 Welcome-area-text">
				<div class="row">
					<div class="col-sm-12 section-header-box">
						<div class="section-header section-header-l">
							<h2>About Us</h2>
						</div>
					</div>
				</div>
				<p>WE are here to provide you complete information related to your CSS exam. Students who are willing to compete their CSS exam will take information ,guidelines and much more.So feel free and happy because we serve you in a better way.</p>
			</div> 
		</div>
	</div>
</section>
<br><br><br>
<section class="slider-content-bottom">
	<div class="container">
		<h2>Our services</h2><br>
		<div class="row sider-btm-row-inner">
			<?php
				$Query = "SELECT * FROM about";
				$result1 = mysqli_query($conn, $Query);
				while ($row = mysqli_fetch_array($result1))
				{
			?>
			<div class="col-sm-4 content_body slide_cont_box_01">
				<div class="slider-btm-box btm-item_01">
					<h3><?php echo $row['title'];?></h3>
					<p style="text-align: justify;"><?php echo $row['description'];?></p>
				</div>
			</div>
			<?php
				}
			?>

		</div>
	</div>
</section>		
<section class="teachers-area">
	 <div class="container">
		<div class="row">
        	<div class="col-sm-12 section-header-box">
            	<div class="section-header">
                    <h2>Our Teachers</h2>
                    <p>Here are our telented teachers who will guide you</p>
            	</div>
    		</div>
   		 </div>

		<div class="row teachers-wapper-02">
			<?php
				$Query = "SELECT * FROM teacher";
				//echo $Query;
				$result1 = mysqli_query($conn, $Query);
				while ($row = mysqli_fetch_array($result1))
				{
			?>
			<div class="col-sm-6 col-md-3 teacher-single">
				<figure class="text-center">
					<div class="teacher-img-02">
						<img src="admin/<?php echo $row['imagelocation'];?>" alt="" class="img-responsive">
					</div>
					<div class="teachers-name">
						<h3><a href="#"><?php echo $row['name'];?></a></h3>
						<span><?php echo $row['qualification'];?></span>
					</div>
					<figcaption>
						<ul class="list-unstyled">
							<li><a href="https://web.facebook.com"><i class="<?php echo $row['facebook'];?> teacher-icon"></i></a></li>
							<li><a href="https //www.twitter.com"><i class="<?php echo $row['twitter'];?> teacher-icon"></i></a></li>
							<li><a href="https://www.linkedin.com/"><i class="<?php echo $row['linkedin'];?> teacher-icon"></i></a></li>
						</ul>
					</figcaption>
				</figure>
			</div>
			<?php
			}
			?>											
		</div>
	</div>
</section>
<?php include("include/footer.php");?>
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
