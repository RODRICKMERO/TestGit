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


if(isset($_GET['id_no'])==TRUE )
   {
    $n=$_GET['id_no'];
	


	
	
 
  
   
  echo "<script language=javascript>";
  echo "var answer=confirm('DO real want to delete  ".$n."?');";
  echo "if(answer==true){";
  echo "window.location='deleteuser.php?usr=".$n."';}";
  echo "else{window.location='viewuser2.php';}";
   echo "</script>";
  }
   elseif(isset($_GET['usr'])==TRUE ){
     $n=$_GET['usr'];

	require("config.php");
	$query3="DELETE FROM master_user2 WHERE (master_user2.id_no='$n')";
	$query4="DELETE FROM stuff_faculty WHERE (stuff_faculty.id_no='$n')";
	$result4=mysql_query($query4);
    //$query5="DELETE FROM perfomance WHERE (perfomance.id_no='$n')";
	//$result5=mysql_query($query5);
//$query3="delete from master_user,student ,where ((master_user.id_no='$n') or (student.id_no='$n'));";
 $result3=mysql_query($query3);
 
 if(!$result3){
 
echo "<script language='javascript'>
                alert('User ".$result['id_no']." was not deleted ');
				window.location='viewuser2.php';
                </script>";
 }
 else
 {
 echo "<script language='javascript'>
                alert('User ".$result['id_no']." was deleted successfully');
				window.location='viewuser2.php';
                </script>";
 }
}



?>

</body>
</html>

