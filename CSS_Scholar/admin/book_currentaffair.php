<?php
    include("lib/session.php");
    include("lib/DBConn.php");
    include("lib/variables.php");
?>
<?php
 if(isset($_REQUEST['BtnSubmit']))
{
    $BookName = $_REQUEST['TxtBookName'];
    $AuthorName = $_REQUEST['TxtAuthorName'];
   $Query = "INSERT INTO books_currentaffairs ".
                   "(title,author) "."VALUES ".
                   "('$BookName','$AuthorName')";
        $confirm_status = mysqli_query($conn,$Query);
       if($confirm_status)
       {


?>
        <script>
            alert('Record has been Successfully Inserted in Database');
            window.location.href='book_currentaffair.php?success';
            </script>
<?php
    }
    else
    {
        ?>
        <script type="text/javascript">alert('not Inserted');
         window.location.href='book_currentaffair.php?success';

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

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.png">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="assets/js/modernizr.min.js"></script>

    </head>
    <body>
        <!-- Begin page -->
        <div id="wrapper">
            <?php
            include("sidebar.php");
            ?>
            </div>
            <div class="content-page">
                <!-- Top Bar Start -->
                <?php
                include("topbar.php");
                ?>
                <!-- Top Bar End -->

                <!-- Start Page content -->
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                         <div class="col-lg-2"> 
                            </div>                       
                            <div class="col-lg-12">
                                <div class="card-box">
                                <center>
                                    <h4 class="header-title m-t-0">Book Current Affairs</h4>
                                    </center>
                                    <!--<p class="text-muted font-14 m-b-20">
                                        Parsley is a javascript form validation library. It helps you provide your users with feedback on their form submission before sending it to your server.
                                    </p>-->
                                <div class="container">
                                    <form action="#">
                                        <div class="form-group">
                                            <label for="userName">Book Name<span class="text-danger">*</span></label>
                                            <input type="text" name="TxtBookName" parsley-trigger="change" required
                                                   placeholder="Enter book name" class="form-control" id="userName">
                                        </div>
                                        <div class="form-group">
                                            <label for="userName">Author Name<span class="text-danger">*</span></label>
                                            <input type="text" name="TxtAuthorName" parsley-trigger="change" required
                                                   placeholder="Enter author name" class="form-control" id="userName">
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
                                </div> <!-- end card-box -->
                            </div>
                        </div>
                            <!-- end col -->
                            <!-- <div class="col-lg-3  col-offset-2">  -->
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
                                                        <th>Book Name</th>
                                                        <th>Author Name</th>
                                                        <th>Edit</th>
                                                        <th>Delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                        <?php
                                            $query = "SELECT * FROM books_currentaffairs";
                                            $result = mysqli_query($conn,$query);
                                            if ($result->num_rows > 0) {            
                                            while($row = mysqli_fetch_array($result))
                                                {
                                        ?>      
                                                    <tr>
                                                        <!-- <td><?php echo $row['id']; ?></td> -->
                                                        <td><?php echo $row['title']; ?></td>
                                                        <td><?php echo $row['author']; ?></td>
                                                        <td><a href="update_currentaffair.php?id=<?php echo $row['id']; ?>"><img src="../images/edit.png" style="width:30px; height:30px;"></a>
                         
                                                        <td><a href="delete_currentaffair.php?id=<?php echo $row['id']; ?>" 
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