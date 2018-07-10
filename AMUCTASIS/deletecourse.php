<?php
session_start();
if(!isset($_SESSION['USERREG']))
{
header("location:index.php");
exit;}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>AMUCTA STUDENT INFORMATION SYSTEM</title>
</head>

<body>
<?php


if(isset($_GET['sn'])==TRUE )
   {
    $n=$_GET['sn']; 
   
  echo "<script language=javascript>";
  echo "var answer=confirm('DO real want to delete NOTIFICATION?');";
  echo "if(answer==true){";
  echo "window.location='deletecourse.php?usr=".$n."';}";
  echo "else{window.location='untitled.php';}";
   echo "</script>";
  }
   elseif(isset($_GET['usr'])==TRUE ){
     $n=$_GET['usr'];

	require("config.php");
	
 $query3="DELETE FROM systemtracer WHERE (systemtracer.sn ='$n');";
	$result3=mysql_query($query3);
	
	echo "<script language='javascript'>
                alert('notification was deleted successfully');
				window.location='untitled.php';
                </script>";

 }


?>

</body>
</html>

