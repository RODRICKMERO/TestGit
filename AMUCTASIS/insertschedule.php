<?php
session_start();
if(!isset($_SESSION['USERREG']))
{
header("location:index.php");
}

else{



require("config.php");
{
 {
$que=" SELECT * FROM schedule";
       $res=mysql_query($que);
$mero=mysql_fetch_array($res);

$queryy=" SELECT * FROM schedule";
       $resulty=mysql_query($queryy);
       $county=mysql_num_rows($resulty);
	   if($county==1)
	   {
	   
	  $query3="DELETE FROM schedule WHERE (schedule.faculty='".$mero['faculty']."');";
	$result3=mysql_query($query3); 
	 $query4="DELETE FROM upload WHERE (upload.faculty='".$mero['faculty']."');";
	$result4=mysql_query($query4); 
	   }
	
	   
	   
$sql="INSERT INTO schedule (startDate, endDate)
 VALUES ('$_POST[startDate]','$_POST[endDate]')";
mysql_query($sql);


$query6="select * from master_user2,staff_faculty where (master_user2.id_no='".$_SESSION['USERREG']."') and (staff_faculty.id_no='".$_SESSION['USERREG']."') ;";
$q=mysql_query($query6);
$ngonyan=mysql_fetch_array($q);



$quer= "INSERT INTO systemtracer2 values('','".date("20y-m-d")."',' UNIVERSITY FACULTY REGISTRATION PERIOD IS FROM $_POST[startDate] AND WILL END IN $_POST[endDate]  AND IS SET BY ".$ngonyan['name']." WHO IS ".$_SESSION['GROUP']." IN ".date("20y-m-d")." at ".time("h:m:s")."')";
$resul=mysql_query($quer);
mysql_error;

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
echo "".$mero['faculty']."";
$query = "INSERT INTO upload (name, size, type, content ) ".
"VALUES ('$fileName', '$fileSize', '$fileType', '$content')";

mysql_query($query) or die('Error, query failed');
echo "<br>File $fileName uploaded<br>";
}
if (!mysql_query($sql,$conn))
  {
  header("Location:schedule.php");
  }
mysql_close($conn);
}
 header("Location:schedule.php");
}
}
?> 
