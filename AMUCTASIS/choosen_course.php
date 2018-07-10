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


if(isset($_GET['course_code'])==TRUE )
   {
    $n=$_GET['course_code'];
	
  echo "<script language=javascript>";
  echo "var answer=confirm('DO YOU REAL SELECT  ".$n."?');";
  echo "if(answer==true){";
  echo "window.location='choosen_course.php?usr=".$n."';}";
  echo "else{window.location='mycourse.php?mero=".$n."';}";
   echo "</script>";
  }
   elseif(isset($_GET['usr'])==TRUE ){
     $n=$_GET['usr'];

	require("config.php");
	
	
$query3="insert into course_regsration (id_no,course_code)values('".$_SESSION['USERREG']."','$n');";
 $result3=mysql_query($query3);
	
	

 if(!$result3){
 
 echo "<script language='javascript'>
 alert(' ALREADY SELECTED COURSE');
 </script>";
  echo "<script language='javascript'>";
echo "window.location='mycourse.php?mero=".$n."';";
  echo"</script>";
 
 
 }
 else
 {
 echo "<script language='javascript'>
 alert('   COURSE SELECTED successful ');
 </script>";
  echo "<script language='javascript'>";
 echo "window.location='mycourse.php?mero=".$n."';";
  echo"</script>";
 
 }
}



?>

</body>
</html>
