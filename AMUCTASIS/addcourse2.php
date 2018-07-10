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

$code=strtolower ($_POST['code']);
$cosname=strtolower($_POST['cosname']);
$semester= strtolower($_POST['semester']);
$year=strtolower($_POST['year']);
$comment=strtolower($_POST['comment']);
$unit=strtolower($_POST['unit']);

$query5= "select * from staff_faculty where (staff_faculty.id_no='".$_SESSION['USERREG']."');";
$query5=mysql_query($query5);
$ngonyani=mysql_fetch_array($query5);

$query6="select * from master_user2 where (master_user2.id_no='".$_SESSION['USERREG']."');";
$q=mysql_query($query6);
$ngonyan=mysql_fetch_array($q);



$query9= "INSERT INTO courses values('$code','".$ngonyani['faculty']."','$cosname','$unit','$year','$semester','$comment')";
$result1=mysql_query($query9);

if ($result1){
$quer= "INSERT INTO systemtracer values('','".date("20y-m-d")."','$code   $cosname WAS ADED IN THE SYSTEM BY THE DEAN OF FACULTY OF ".$ngonyani['faculty']."  WITH THE NAME ".$ngonyan['name']." AND ".$_SESSION['USERREG']." REGSRATION NUMBER IN ".date("20y-m-d")." at ".time("h:m:s")."')";
$resul=mysql_query($quer);
mysql_error;
$quer= "INSERT INTO systemtracer2 values('','".date("20y-m-d")."','$code   $cosname WAS ADED IN THE SYSTEM BY THE DEAN OF FACULTY OF ".$ngonyani['faculty']."  WITH THE NAME ".$ngonyan['name']." AND ".$_SESSION['USERREG']." REGSRATION NUMBER IN ".date("20y-m-d")." at ".time("h:m:s")."')";
$resul=mysql_query($quer);
mysql_error;
}




if($result1){
if(isset($_POST['upload']) && $_FILES['userfile']['size'] > 0)
{
$fileName = $_FILES['userfile']['name'];
$tmpName  = $_FILES['userfile']['tmp_name'];
$fileSize = $_FILES['userfile']['size'];
$fileType = $_FILES['userfile']['type'];

$fp      = fopen($tmpName, 'r');
$content = fread($fp, filesize($tmpName));
$content = addslashes($content);
fclose($fp);

if(!get_magic_quotes_gpc())
{
    $fileName = addslashes($fileName);
}

$query = "INSERT INTO upload_course VALUES ('$code','$fileName','$fileType','$fileSize','$content')";

mysql_query($query);
echo "<br>File $fileName uploaded<br>";
}


 echo "<script language='javascript'> 
		alert(' course is added successful');
		
		</script>";
echo "<script language='javascript'>" ; 
		echo " window.location=('addcourse.php')";
						echo "</script>";
		}else
{
echo "<script language='javascript'> 
		alert(' error in adding course try again ');
		
		</script>";
		
		echo "<script language='javascript'>" ; 
		echo " window.location=('addcourse.php')";
						echo "</script>";
}
 

?>

</body>
</html>
