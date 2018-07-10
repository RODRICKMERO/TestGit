
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
require("config.php");
$dent_name=strtolower ($_POST['dent_name']);
$dent_reg=strtolower($_POST['dent_reg']);
$kitivo=strtolower($_POST['kitivo']);
$dent_password= strtolower (md5($_POST['dent_password']));
$mero='student';
$query= "insert into master_user2 values('$dent_reg','$dent_name','$dent_password','$mero')";
$result=mysql_query($query);

if($result){
$query1="INSERT INTO student (id_no,name,faculty)
values('$dent_reg','$dent_name','$kitivo')";
$result1=mysql_query($query1);

$query6="select * from master_user2 where (master_user2.id_no='".$_SESSION['USERREG']."') ;";
$q=mysql_query($query6);
$ngonyan=mysql_fetch_array($q);



$quer= "INSERT INTO systemtracer values('','".date("20y-m-d")."',' STUDENT WAS  REGISTERED IN THE SYSTEM BY ".$ngonyan['name']." WHO IS ".$ngonyan['group']." WITH REGISTRATION  ".$_SESSION['USERREG']." IN ".date("20y-m-d")." at ".time("h:m:s")."')";
$resul=mysql_query($quer);

$quer= "INSERT INTO systemtracer2 values('','".date("20y-m-d")."',' STUDENT WAS  REGISTERED IN THE SYSTEM BY ".$ngonyan['name']." WHO IS ".$ngonyan['group']." WITH REGISTRATION  ".$_SESSION['USERREG']." IN ".date("20y-m-d")." at ".time("h:m:s")."')";
$resul=mysql_query($quer);
mysql_error;
echo "<script language='javascript'> 
		alert(' student is added successful');
		
		</script>";
echo "<script language='javascript'>" ; 
		echo " window.location=('registrar.php')";
						echo "</script>";
						
						
}else

 { 
        echo "<script language='javascript'> 
		alert(' error in adding  student try again ');
		
		</script>";
 
        echo "<script language='javascript'>" ;
		echo"window.location=('registrar.php')";//to retutrn to the registration file.
		
						echo "</script>";
}

?>
</body>
</html>