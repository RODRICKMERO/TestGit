
<?php
session_start();
if(!isset($_SESSION['USERREG']))
{
header("location:index.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>AMUCTA STUDENT INFORMATION SYSTEM</title>
</head>

<body>
	
<?php
require("config.php");

$user_name=strtolower ($_POST['user_name']);
$user_reg=strtolower($_POST['user_reg']);

$kitivo=strtolower($_POST['kitivo']);

$users_password= md5($_POST['users_password']);
$roup=strtolower($_POST['roup']);

$query9= "INSERT INTO master_user2 values('$user_reg','$user_name','$users_password','$roup')";
$query9=mysql_query($query9);

if($query9){

$query1="INSERT INTO staff_faculty (id_no,faculty)
values('$user_reg','$kitivo')";
$result1=mysql_query($query1);



 echo "<script language='javascript'> 
		alert(' user is added successful $kitivo ');
		
		</script>";
		if(empty($kitivo)){
echo "<script language='javascript'>" ; 
		echo " window.location=('adduser.php')";
						echo "</script>";
						
						}else
						
						 { echo "<script language='javascript'>" ; 
		echo " window.location=('adduser.php?d=ok')";
						echo "</script>";
						
						}
		}else
{
echo "<script language='javascript'> 
		alert(' erro in adding  user try again ');
		
		</script>";
		
		if(empty($kitivo)){
echo "<script language='javascript'>" ; 
		echo " window.location=('adduser.php')";
						echo "</script>";
						
						}else
						
						 { echo "<script language='javascript'>" ; 
		echo " window.location=('adduser.php?d=ok')";
						echo "</script>";
						
						};
}
 

?>
</body>
</html>
