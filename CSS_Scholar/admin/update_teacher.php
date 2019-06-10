<?php
    include("lib/session.php");
    include("lib/DBConn.php");
    include("lib/variables.php");

    if(isset($_GET['id'])){
            $id = $_GET['id'];
    }

    if (isset($_POST['BtnUpdate']))
    {
        $id = $_POST['BtnUpdate'];
       $fileinfo = PATHINFO($_FILES["image"]["name"]);
        $newFilename = $fileinfo['filename'] ."_". time() . "." . $fileinfo['extension'];
        move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $newFilename);
        $location = "upload/" . $newFilename;
        $TeacherName = $_REQUEST['TxtTeacherName'];
        $Designation = $_REQUEST['TxtQualification'];
        $FaceBook = $_REQUEST['TxtFaceBook'];
        $Twitter = $_REQUEST['TxtTwitter'];
        $Linkedin = $_REQUEST['TxtLinkedin']; 

        $query = "UPDATE teacher SET  name = '$TeacherName', ".
                "qualification = '$Designation', facebook = '$FaceBook', ".
                "twitter ='$Twitter', linkedin = '$Linkedin', imagelocation = '$location' WHERE  id = '$id'";

           
       $confirm_status = mysqli_query($conn,$query);
       if($confirm_status)
       {


?>
        <script>
            alert('Record has been Successfully Updated in Database');
            window.location.href='teacher.php?success';
            </script>
<?php
    }
    else
    {
        ?>
        <script type="text/javascript">alert('not updated');
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
                <!-- Start Page content -->
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-2"> 
                        </div>                       
                            <div class="col-lg-12">
                                <div class="card-box">
                                    <div class="container">
                                        <?php
                                        
                                    $Query = "SELECT name, qualification, facebook, twitter, linkedin, imagelocation  FROM teacher WHERE id = ".$id;
                                             
                                    $result = mysqli_query($conn, $Query);
                                    $row = mysqli_fetch_array($result);
                                    // var_dump($row);
                                    // exit;
                                ?>
                                        <form action="#" method="post" enctype="multipart/form-data">
                                           <div class="form-group">
                                                <label for="userName">Teacher Name<span class="text-danger">*</span></label>
                                                <input type="text" name="TxtTeacherName" parsley-trigger="change" required
                                                 placeholder="Teacher Name" class="form-control" id="userName" value="<?php echo $row['name'];?>">
                                             </div>
                                                <div class="form-group">
                                                    <label for="userName">Qualification<span class="text-danger">*</span></label>
                                                    <input type="text" name="TxtQualification" parsley-trigger="change" required
                                                    placeholder="Qualification" class="form-control" id="userName" value="<?php echo $row['qualification'];?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="userName">Facebook<span class="text-danger">*</span></label>
                                                    <input type="text" name="TxtFaceBook" parsley-trigger="change" required
                                                    placeholder="FaceBook" class="form-control" id="userName" value="<?php echo $row['facebook'];?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="userName">Twitter<span class="text-danger">*</span></label>
                                                    <input type="text" name="TxtTwitter" parsley-trigger="change" required
                                                    placeholder="Twitter" class="form-control" id="userName"value="<?php echo $row['twitter'];?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="userName">Linkedin<span class="text-danger">*</span></label>
                                                    <input type="text" name="TxtLinkedin" parsley-trigger="change" required
                                                    placeholder="Linkedin" class="form-control" id="userName" value="<?php echo $row['linkedin'];?>">
                                                </div>
                                                    <div class="form-group row">
                                                        <label class="col-2 col-form-label">Image<span class="text-danger">*</span></label>
                                                        <div class="col-12">
                                                            <input type="file" name="image" value="<?php echo $row['imagelocation'];?>" class="form-control">
                                                            <img src="<?php echo $row['imagelocation'];?>"width = "50" height = "50">
                                                        </div>
                                                    </div>

                                                <div class="form-group text-right m-b-0">
                                                    <button class="btn btn-custom waves-effect waves-light" type="submit" name="BtnUpdate" value="<?php echo($_REQUEST['id']);?>">
                                                     Update
                                                    </button>
                                                    <button type="reset" class="btn btn-light waves-effect m-l-5">
                                                     Cancel
                                                    </button>
                                                </div>
                                         </div>
                                    </form>
                                    <br><br>
                                            
                                </div> 
                                <?php
                                ?>
                            </div>
                        </div>
                
                <?php
                include("includes/footer.php");
                ?>
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