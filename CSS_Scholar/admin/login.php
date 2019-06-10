<?php
 include("lib/connection.php");
 ?> 
<?php
session_start();
	if(isset($_REQUEST['btn']))
	{
		
		$a=$_POST['nam'];
		$b=$_POST['pass'];
		
		if($db!=null)
		{
		 $query="SELECT * from user where name='$a' AND password='$b'";
			$result=mysql_query($query);
			echo $query;
			if($result)
			{
				if(mysql_num_rows($result)>0)
				{
					session_regenerate_id();
					$mem=mysql_fetch_assoc($result);
					$_SESSION['SESS_ID'] = $mem['id'];
					$_SESSION['SESS_IMAGES'] = $mem['image'];
					$_SESSION['SESS_NAMES'] = $mem['name'];
					$_SESSION['SESS_TYPES'] = $mem['type'];
					$_SESSION['SESS_EMAIL']=$mem['email'];
					$_SESSION['SESS_PASSWORD'] = $mem['pass'];
					$_SESSION['SESS_CONFIRMPASSWORD'] = $mem['confirm_pass'];
					session_write_close();
					header("location:index.php");
										exit();		
				}
				else
				{
					 echo "<span style='color:red;'>"."Error In Login". "</span>"; 
				}
			}
		}
	}
	
?>