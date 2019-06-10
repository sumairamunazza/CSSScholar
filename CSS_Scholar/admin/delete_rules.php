<?php
    include("lib/DBConn.php");
?>
<?php
		$id = $_GET['id'];
		//echo $id;
		$SqlCommand = "DELETE FROM rules WHERE id = $id ";
		// echo $SqlCommand;
		// die;
		$result = mysqli_query($conn, $SqlCommand);
		if($result)
		{
			echo "Record has been Successfully Deleted";
		}
		else
		{
			echo "Error";
		}
		header("location:rules.php")	
	
?>