<?php
	session_start();
    include("lib/DBConn.php");
	if (isset($_REQUEST['BtnSave']))
	{
		$a = $_REQUEST['TxtEmail'];
		$b = $_REQUEST['TxtPassword'];
		if ($dbname != null)
		{
			$query = " SELECT * FROM admin WHERE username = '$a' AND password = '$b'";
			// echo $query;
			$result = mysqli_query($conn,$query);
			if (mysqli_num_rows($result) > 0)
			{
				$mem = mysqli_fetch_object($result);
        		$_SESSION['SESS_ID'] = $mem->id;
				$_SESSION['SESS_Name'] = $mem->username;
				header("Location: dashboard.php");
				exit();
				//echo "Success";
			}
			else
			{
				echo "<span style='color:red;'>"."Username or Password Incorrect". "</span>";
				die ;
			}
		}
	}
?>
<!DOCTYPE html>
<html>
	<head>
	    <meta charset="utf-8" />
	    <title>Login --- CSS Scholar</title>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
	    <meta content="Keywords" name=""/>
	    <meta content="Admin Panel" name="sumaira" />
	    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
	    <link rel="shortcut icon" href="assets/images/favicon.png">
	    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	    <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
	    <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
	    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
	    <script src="assets/js/modernizr.min.js"></script>
	</head>
<body style="background:#222d32;">

	<div class="container">
	    <div class="content">
	        <div class="container-fluid">
	        	<br><br><br><br><br><br><br><br><br><br><br>
	            <div class="row">
	                <div class="col-lg-3"></div>                       
	                <div class="col-lg-6">
	                    <div class="card-box">
		                    <center>
		                        <h4 class="header-title m-t-0">Admin Login Area</h4><br>
		                    </center>
	                        <form role="form">
	                            <div class="form-group row">
	                                <label for="inputEmail" class="col-4 col-form-label">Email<span class="text-danger">*</span>
	                                </label>
	                                <div class="col-7">
	                                    <input type="email" required parsley-type="email" class="form-control"
	                                           name="TxtEmail" placeholder="Email">
	                                </div>
	                            </div>
	                            <div class="form-group row">
	                                <label for="hori-pass" class="col-4 col-form-label">Password<span class="text-danger">*</span>
	                                </label>
	                                <div class="col-7">
	                                    <input type="password" placeholder="Password" required
	                                           class="form-control" name="TxtPassword">
	                                </div>
	                            </div>
	                            <div class="form-group row">
	                                <div class="col-8 offset-4">
	                                    <button type="submit" class="btn btn-light waves-effect m-l-5" name="BtnSave">
	                                        Login Here
	                                    </button>
	                                    <button type="reset"
	                                            class="btn btn-light waves-effect m-l-5">
	                                        Cancel
	                                    </button>
	                                </div>
	                            </div>
	                        </form>
	                    </div>
	                </div>
	                <div class="col-lg-3  col-offset-5"> 
	                </div>                   
	            </div>
	        </div>
	        </div> 
	    </div>
	</div>
	</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/metisMenu.min.js"></script>
<script src="assets/js/waves.js"></script>
<script src="assets/js/jquery.slimscroll.js"></script>
<script type="text/javascript" src="../plugins/parsleyjs/parsley.min.js"></script>
<script src="assets/js/jquery.core.js"></script>
<script src="assets/js/jquery.app.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('form').parsley();
    });
</script>
</body>
</html>