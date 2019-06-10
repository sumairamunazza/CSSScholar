<?php
include("lib/DBConn.php");
include("lib/variables.php");
?>
<?php
     if(isset($_REQUEST['BtnSave']))
    {
        $Name = $_REQUEST['txtname'];
        $Email = $_REQUEST['txtemail'];
        $Subject = $_REQUEST['txtsub'];
        $Message = $_REQUEST['txtmessage'];
        $Query = "INSERT INTO contact ".
                   "(username,email,subject,message) "."VALUES ".
                   "('$Name','$Email','$Subject','$Message')";
        mysqli_query($conn, $Query);
?>
        <script>
            alert('Record has been Successfully Inserted in Database');
            window.location.href='contact.php?success';
            </script>
<?php
    }
?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="CSS Scholar">
    <meta name="keywords" content="css exam, css books, css syllabus, past papers, css rules, css courses, css guidelines">
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
    <script> 
    function onRegister()
          {
            if(document.form.txtname.value == "")
            {
            alert("Enter User Name");
            document.form.txtname.focus();
            return (false);
            }
             else if(document.form.txtemail.value == "")
            {
            alert("Enter email");
            document.form.txtemail.focus();
            return (false);
            }
            else if(document.form.txtsub.value == "")
            {
            alert("Enter subject");
            document.form.txtsub.focus();
            return (false);
            }
             else if(document.form.txtmessage.value == "")
            {
            alert("Enter message");
            document.form.txtmessage.focus();
            return (false);
            }
            else
            {
                return (true);
            }
          }
        </script>  
</head>
<body class="contact">
	<?php include("include/header.php");?>
<section class="contact-area-02">
    <div class="container">
        <div class="row">
            <div class="row">
            <div class="col-sm-5 contact-info">
                <div class="col-sm-12 contact-title">
                    <h2>Contact Info</h2>       
                    <p class="content-sub_p">Welcome to our Website. We are glad to have you around.</p>
                </div>
                <div class="col-sm-12 contact-box">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 single-address-box">
                            <div class="single-address">
                                <i class="fa fa-phone"></i>
                                <h4>Phone</h4>
                                <p><?php echo Phone;?></p>
                            </div>
                        </div>  
                        <div class="col-sm-12 col-md-6  single-address-box">
                            <div class="single-address">
                                <i class="fa fa-envelope"></i>
                                <h4>Email</h4>
                                <p><?php echo Email;?></p>
                            </div>
                        </div> 
                        <div class="col-sm-12 col-md-12 single-address-box">
                            <div class="single-address">
                                <i class="fa fa-map-marker"></i>
                                <h4>Location:</h4>
                                <p><?php echo Address;?> , <?php echo Country;?></p>
                            </div>
                        </div> 
                        <div class="col-sm-12 single-address-box">
                            <ul class="list-unstyled">
                                <li><a href="#"><i class="fa fa-facebook teacher-icon"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter teacher-icon"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin teacher-icon"></i></a></li>
                            </ul>    
                        </div> 
                    </div>
                </div>                                                      
            </div>  

            <div class="col-sm-6  col-sm-offset-1contact-form">
                <div class="row">
                    <div class="col-sm-12 contact-title-btm">
                        <h2>Send A Message</h2>  
                        <br>   
                    </div>
                </div>
            <div class="col-sm-12 contact-info">
                <div class="col-sm-12 contact-title">
                    <div class="input-contact-form">
                        <div id="contact">
                    <div id="message"></div>    
                    <form action="#" method="post" name="form">
                        <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" placeholder="Name" name="txtname">
                    </div>
                    <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Email" name="txtemail">
                    </div>
                    <div class="form-group">
                    <label for="sub">Subject:</label>
                    <input type="text" class="form-control" id="sub" placeholder="Subject" name="txtsub">
                    </div>
                    
                    <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea class="form-control" id="message" name="txtmessage" rows="5"></textarea>
                    </div>

                    <button type="submit" class="btn btn-warning" name="BtnSave" onclick="return onRegister();">Submit</button>
                    </form>
                </div>
                    </div>
                </div>
            </div>
            </div>                                                              
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
