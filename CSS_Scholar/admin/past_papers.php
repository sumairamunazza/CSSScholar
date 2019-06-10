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
        $SubjectName = $_REQUEST['TxtSubject'];
        $Year = $_REQUEST['TxtYear'];
        $Status = $_REQUEST['TxtStatus'];
           
        $Query = "INSERT INTO past_papers ".
                   "(subject,year,status,filelocation) "."VALUES ".
                   "('$SubjectName','$Year','$Status', '$location')";
        $confirm_status = mysqli_query($conn,$Query);
       if($confirm_status)
       {


?>
        <script>
            alert('Record has been Successfully Inserted in Database');
            window.location.href='past_papers.php?success';
            </script>
<?php
    }
    else
    {
        ?>
        <script type="text/javascript">
        alert('not Working');
        window.location.href='past_papers.php?success';
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
                                    <h4 class="header-title m-t-0">Past Papers</h4>
                                    </center>
                                    <div class="container">
                                        <form action="#" method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="userName">Subject<span class="text-danger">*</span></label>
                                                <input type="text" name="TxtSubject" parsley-trigger="change" required
                                                 placeholder="Subject" class="form-control" id="userName">
                                             </div>
                                                <div class="form-group">
                                                    <label for="userName">year<span class="text-danger">*</span></label>
                                                    <input type="text" name="TxtYear" parsley-trigger="change" required
                                                    placeholder="year" class="form-control" id="userName">
                                                </div>
                                                <div class="form-group">
                                                    <label for="userName">Status<span class="text-danger">*</span></label>
                                                    <input type="text" name="TxtStatus" parsley-trigger="change" required
                                                    placeholder="Status" class="form-control" id="userName">
                                                </div>
                                               
                                               <div class="form-group row">
                                                        <label class="col-2 col-form-label">file<span class="text-danger">*</span></label>
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
                                                       <!--  <th>#</th> -->
                                                        <th>Subject</th>
                                                        <th>Year</th>
                                                        <th>Status</th>
                                                        <th>Image</th>
                                                        <th>Edit</th>
                                                        <th>Delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                        <?php
                                            $query = "SELECT * FROM past_papers";
                                            $result = mysqli_query($conn,$query);
                                            if ($result->num_rows > 0) {            
                                            while($row = mysqli_fetch_array($result))
                                                {
                                        ?>      
                                                    <tr>
                                                        <!-- <td><?php echo $row['id']; ?></td> -->
                                                        <td><?php echo $row['subject']; ?></td>
                                                        <td><?php echo $row['year']; ?></td>
                                                        <td><?php echo $row['status']; ?></td>
                                                        <td><?php echo $row['filelocation']; ?></td>
                                                        <td><a href="update_papers.php?id=<?php echo $row['id']; ?>"><img src="../images/edit.png" style="width:30px; height:30px;"></a>
                         
                                                        <td><a href="delete_papers.php?id=<?php echo $row['id']; ?>" 
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