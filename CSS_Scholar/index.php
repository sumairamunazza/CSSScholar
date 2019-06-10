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
	<link href="css/assets/magnific-popup.css" rel="stylesheet"> 
	<link rel="stylesheet" href="css/assets/revolution/layers.css">
	<link rel="stylesheet" href="css/assets/revolution/navigation.css">
	<link rel="stylesheet" href="css/assets/revolution/settings.css">	
	<link href="https://fonts.googleapis.com/css?family=Montserrat:600,700%7COpen+Sans:400,600" rel="stylesheet">     
	<link href="css/assets/slick.css" rel="stylesheet"> 	
	<link href="css/assets/slick-theme.css" rel="stylesheet"> 	
	<link rel="stylesheet" href="css/assets/meanmenu.css">   
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">
</head>
<body>
<?php
include("include/header.php");
?>
    <?php include("include/slider.php");?>
</div>
</header>
<section class="Welcome-area">
	<div class="container">	
		<div class="row">
			<div class="col-sm-6 Welcome-area-text">
				<div class="row">
					<div class="col-sm-12 section-header-box">
						<div class="section-header section-header-l">
							<h2>Welcome To <?php echo SiteTitle; ?></h2>
						</div>
					</div>
				</div>
				<p><?php echo SiteTitle; ?> is a complete resource for CSS competitive examination and information about Pakistan civil service.The website serves as a free resource to help and guide CSS aspirants.You can discuss your optional subjects and other issues in General forum</p>
			</div>
			<div class="col-sm-6 welcome-img">
				<img src="images/index/welcome.png" alt="" class="img-responsive">
			</div>					
		</div>
	</div>
</section>
<section class="Courses-area">
	<div class="container">	
		<div class="row">
			<div class="col-sm-12 section-header-box">
				<div class="section-header">
					<h2>Compulsory Subjects</h2>
				</div>
			</div>
		</div>
		<div class="row courses-r-margin-bottom">
			<?php
				$Query = "SELECT * FROM subject";
				//echo $Query;
				$result1 = mysqli_query($conn, $Query);
				while ($row = mysqli_fetch_array($result1))
				{
			?>
			<div class="col-sm-4 single-courses-box">
			    <div class="single-courses">
					<figure>
						<div class="figure-img"><img src="admin/<?php echo $row['imagelocation'];?>" alt="" class="img-responsive"></div>
						<figcaption>
							<div><a href="#" class="read_more-btn">Apply Now</a></div>
						</figcaption>
					</figure>
					<div class="courses-content-box">
						<div class="courses-content">
							<h3><a href="#"><?php echo $row['name'];?></a></h3>
							<p><?php echo $row['description'];?></p>
							<div class="rank-icons">
								<ul class="list-unstyled">
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>									
								</ul>
								<span><h3>Marks:<?php echo $row['marks'];?></h3></span>
								<span><h3>Paper duration:<?php echo $row['paperduration'];?></h3></span>
							</div>	
						</div>
						<div class="courses-content-bottom">
							<ul class="list-unstyled">
								
							</ul>
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
<section class="events-area">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 section-header-box">
				<div class="section-header">
					<h2>Upcoming Events</h2>
				</div>
			</div>
		</div>
		<div class="row">
				<?php
					$Query = "SELECT * FROM event";
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
							<p class="events-time">
								<span>
									<i class="fa fa-calendar event-icon"></i>
									<?php echo $row['day'];?>
									<?php echo $row['month'];?>
								</span>
								<span>
									<i class="fa fa-clock-o event-icon"></i>
									<?php echo $row['time_duration'];?>
								</span>
								<span>
									<i class="fa fa-map-marker event-icon"></i>
									<?php echo $row['location'];?>										
								</span>
							</p>
							<p><?php echo $row['description'];?></p>
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
<section class="news-area">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 section-header-box">
				<div class="section-header">
					<h2>Latest News</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<?php
				$Query = "SELECT * FROM news";
				//echo $Query;
				$result1 = mysqli_query($conn, $Query);
				while ($row = mysqli_fetch_array($result1))
				{
			?>
			<div class="col-sm-4 news-single">
				<div class="news-single-box">
					<div class="news-img-box">
						<img src="admin/<?php echo $row['imagelocation'];?>" alt="" class="img-responsive">
					</div>
					<div class="news-content">
						<h3><a href="#"><?php echo $row['title'];?></a></h3>
						<p style="text-align: justify;"><?php echo $row['description'];?></p>
						<p class="news-time">
							<span>
								<i class="fa fa-calendar event-icon"></i>
								<?php echo $row['month'];?>
								<?php echo $row['day'];?>
							</span>
						</p>
					</div>
				</div>
			</div>
			<?php
			}
			?>								
		</div>
	</div>
</section><br><br>
<?php include("include/footer.php");?>
	<script src="js/vendor/jquery-1.12.4.min.js"></script>
	<script src="js/assets/bootstrap.min.js"></script>
    <script src="js/assets/owl.carousel.min.js"></script>
	<script src="js/assets/revolution/jquery.themepunch.revolution.min.js"></script>
	<script src="js/assets/revolution/jquery.themepunch.tools.min.js"></script>   
    <script src="js/assets/jquery.magnific-popup.min.js"></script>
	<script src="js/assets/jquery.sticky.js"></script>
    <script src="js/assets/jquery.counterup.min.js"></script>
    <script src="js/assets/waypoints.min.js"></script>
    <script src="js/assets/slick.min.js"></script>
	<script src="js/assets/jquery.meanmenu.min.js"></script>
	<script type="text/javascript" src="js/assets/revolution/extensions/revolution.extension.actions.min.js"></script>
	<script type="text/javascript" src="js/assets/revolution/extensions/revolution.extension.carousel.min.js"></script>
	<script type="text/javascript" src="js/assets/revolution/extensions/revolution.extension.kenburn.min.js"></script>
	<script type="text/javascript" src="js/assets/revolution/extensions/revolution.extension.layeranimation.min.js"></script>
	<script type="text/javascript" src="js/assets/revolution/extensions/revolution.extension.migration.min.js"></script>
	<script type="text/javascript" src="js/assets/revolution/extensions/revolution.extension.navigation.min.js"></script>
	<script type="text/javascript" src="js/assets/revolution/extensions/revolution.extension.parallax.min.js"></script>
	<script type="text/javascript" src="js/assets/revolution/extensions/revolution.extension.slideanims.min.js"></script>
	<script type="text/javascript" src="js/assets/revolution/extensions/revolution.extension.video.min.js"></script>
	<script type="text/javascript" src="js/assets/revolution/revolution.js"></script>
	<script src="js/custom.js"></script>
</body>
</html>
