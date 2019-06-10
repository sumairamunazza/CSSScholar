
<?php
if (isset($_REQUEST['btnsub']))
	{
		$query = "INSERT INTO news_letter".
			" (email)".
			" VALUES ('".addslashes($_REQUEST['txtemail'])."')";
		mysqli_query($conn, $query);
	}
?>
<footer>
	<div class="container">
		<div class="row">
			<div class=" col-sm-12 footer-content-box">
				<div class="col-sm-3">
					<h3><span><i class="fa fa-graduation-cap footer-h-icon"></i></span> <?php echo SiteTitle; ?></h3>
	        					<p><?php echo SiteTitle; ?> is an online platform where students get complete information about CSS exam.</p>
					
				</div>

				<div class="col-sm-3">
					<h3>Contact Us</h3>
					<ul class="list-unstyled">
						<li><span><i class="fa fa-phone footer-icon"></i></span><?php echo Phone;?></li>
						<li><span><i class="fa fa-envelope footer-icon"></i></span><?php echo Email;?></li>
						<li><span><i class="fa fa-map-marker footer-icon"></i></span><?php echo Address;?> , <?php echo Country;?></li>
					</ul>
				</div>

				<div class="col-sm-3">
					<h3>Quick Links</h3>
					<ul class="list-unstyled">
						<li><a href="about.php"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>About Us</a></li>
						<li><a href="rules.php"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Rules</a></li>
						<li><a href="contact.php"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Contact</a></li>
					</ul>
				</div>

				

				<div class="col-sm-3">
					<h3>Get in touch</h3>
					<p>Enter your email and we'll send you more information.</p>

					<form action="#">
						<div class="form-group">
							<input placeholder="Your Email" type="email" required="" name="txtemail">
							<div class="submit-btn">
								<button type="submit" class="text-center" name="btnsub">Subscribe</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<div class="footer-bottom">
		<div class="container">
			<div class="footer-bottom-inner">
				<div class="row">
					<div class="col-md-6 col-sm-12 footer-no-padding">
						<p>&copy; Copyright 2018 All rights reserved | Developed by <?php echo Developer; ?></p>
					</div>
					<div class="col-md-6 col-sm-12 footer-no-padding">
						<ul class="list-unstyled footer-menu text-right">
							<li>Follow us:</li>
							<li><a href="#"><i class="fa fa-facebook facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram instagram"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div><!-- ./ End footer-bottom -->		
</footer><!-- ./ End Footer Area-->