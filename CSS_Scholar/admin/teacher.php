<?php
    include("lib/session.php");
    include("lib/DBConn.php");
    include("lib/variables.php");
?>
<?php
     if(isset($_REQUEST['BtnSubmit']))
    {
        $fileinfo = PATHINFO($_FILES["image"]["name"]);
    	$newFilename = $fileinfo['filename'] ."_". time() . "." . $fileinfo['extension'];
    	move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $newFilename);
    	$location = "upload/" . $newFilename;
        $TeacherName = $_REQUEST['TxtTeacherName'];
        $Designation = $_REQUEST['TxtQualification'];
        $FaceBook = $_REQUEST['TxtFaceBook'];
        $Twitter = $_REQUEST['TxtTwitter'];
        $Linkedin = $_REQUEST['TxtLinkedin'];    
        $Query = "INSERT INTO teacher ".
                   "(name,qualification,facebook,twitter,linkedin, imagelocation) "."VALUES ".
                   "('$TeacherName','$Designation','$FaceBook','$Twitter','$Linkedin', '$location')";
 $confirm_status = mysqli_query($conn,$Query);
       if($confirm_status)
       {


?>
        <script>
            alert('Record has been Successfully Inserted in Database');
            window.location.href='teacher.php?success';
            </script>
<?php
    }
    else
    {
        ?>
        <script type="text/javascript">alert('not Working');
        window.location.href='teacher.php?success';
    </script>
        <?php
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title><?php echo SiteTitle; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link rel="shortcut icon" href="assets/images/favicon.png">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
        <script src="assets/js/modernizr.min.js"></script>
    </head>
    <body>
        <div id="wrapper">
            <?php
            include("sidebar.php");
            ?>
            </div>
            <div class="content-page">
            <?php
                include("topbar.php");
            ?>
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-2"> 
                        </div>                       
                            <div class="col-lg-12">
                                <div class="card-box">
                                <center>
                                    <h4 class="header-title m-t-0">Add Teacher</h4>
                                    </center>
                                    <div class="container">
                                        <form action="#" method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="userName">Teacher Name<span class="text-danger">*</span></label>
                                                <input type="text" name="TxtTeacherName" parsley-trigger="change" required
                                                 placeholder="Teacher Name" class="form-control" id="userName">
                                             </div>
                                                <div class="form-group">
                                                    <label for="userName">Qualification<span class="text-danger">*</span></label>
                                                    <input type="text" name="TxtQualification" parsley-trigger="change" required
                                                    placeholder="Qualification" class="form-control" id="qualification">
                                                </div>
                                                <div class="form-group">
                                                    <label for="userName">Facebook<span class="text-danger">*</span></label>
                                                    <input type="text" name="TxtFaceBook" parsley-trigger="change" required
                                                    placeholder="FaceBook" class="form-control" id="facebook">
                                                </div>
                                                <div class="form-group">
                                                    <label for="userName">Twitter<span class="text-danger">*</span></label>
                                                    <input type="text" name="TxtTwitter" parsley-trigger="change" required
                                                    placeholder="Twitter" class="form-control" id="twitter">
                                                </div>
                                                <div class="form-group">
                                                    <label for="userName">Linkedin<span class="text-danger">*</span></label>
                                                    <input type="text" name="TxtLinkedin" parsley-trigger="change" required
                                                    placeholder="Linkedin" class="form-control" id="linkedin">
                                                </div>
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Image<span class="text-danger">*</span></label>
                                                        <div class="col-12">
                                                            <input type="file" name="image" class="form-control">
                                                        </div>
                                                    </div>

                                                <div class="form-group text-right m-b-0">
                                                    <button class="btn btn-light waves-effect m-l-5" type="submit" name="BtnSubmit">
                                                     Submit
                                                    </button>
                                                    <button type="reset" class="btn btn-light waves-effect m-l-5">
                                                     Cancel
                                                    </button>
                                                </div>
                                         </div>
                                    </form>
                                </div> 
                            </div>
                        </div>

                     <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card-box">
                                    <div class="container">
                                        <center>
                                            <h4 class="m-t-0 header-title">View Record</h4>
                                        </center>
                        <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Teacher Name</th>
                                                        <th>Qualification</th>
                                                        <th>Facebook</th>
                                                        <th>Twitter</th>
                                                        <th>Linkedin</th>
                                                        <th>Image</th>
                                                        <th>Edit</th>
                                                        <th>Delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                        <?php
                                            $query = "SELECT * FROM teacher";
                                            $result = mysqli_query($conn,$query);
                                            if ($result->num_rows > 0) {            
                                            while($row = mysqli_fetch_array($result))
                                                {
                                        ?>      
                                                    <tr>
                                                        <td><?php echo $row['name']; ?></td>
                                                        <td><?php echo $row['qualification']; ?></td>
                                                        <td><?php echo $row['facebook']; ?></td>
                                                        <td><?php echo $row['twitter']; ?></td>
                                                        <td><?php echo $row['linkedin']; ?></td>
                                                        <td><img src="<?php echo $row['imagelocation']; ?>" width = "50" height = "50"></td>
                                                        <td><a href="update_teacher.php?id=<?php echo $row['id']; ?>"><img src="../images/edit.png" style="width:30px; height:30px;"></a>
                         
                                                        <td><a href="delete_teacher.php?id=<?php echo $row['id']; ?>" 
                            onClick="return confirm('Are you sure you want to delete')"; title="Delete"><img src="../images/delete.png" style="width:30px; height:30px;"></a></td>
                                                        
                                                    </tr>
                                                   
                                                    <?php
                                                         }
                                                            }
                                                            else
                                                            {
                                                                echo "No Result Found";
                                                                  }
                                                    ?>
                                                </tbody>
                                            </table>
                        				</div>
                        			</div>
                    			</div>
                			</div>
            			</div>
       				 </div>
				</div>
            </div> 
        </div> 
               <?php
               include("includes/footer.php");
               ?>
            </div>
        </div>
        <!-- END wrapper -->
        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <!-- Parsley js -->
        <script type="text/javascript" src="../plugins/parsleyjs/parsley.min.js"></script>
        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('form').parsley();
            });
        </script>
    </body>
</html>