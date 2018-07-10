<?PHP

session_start();
if(!isset($_SESSION['USERREG']))
{
header("location:index.php");
}
	 require("config.php");
	$mero1="select * from student where (student .id_no='".$_SESSION['USERREG']."');";
$leo=mysql_query($mero1);
$mero=mysql_fetch_array($leo); 

$mero12="select * from schedule ";
$leo1=mysql_query($mero12);
$mero3=mysql_fetch_array($leo1);
$mero123="select * from upload";
$leo11=mysql_query($mero123);
$mero31=mysql_fetch_array($leo11);


$l=date("20y-m-d");

if ( ("".$mero3['endDate']."")>="$l") {
echo "<script language='javascript'>" ; 
echo " window.location=('selectcourse.php')";
echo "</script>";

if(isset($_GET['id']))
{
// if id is set then get the file with the id from database
$id=$_GET['id'];
$query = "SELECT name, type, size, content FROM upload WHERE upload.faculty = '$id'";
$retrieve = mysql_query($query) or die('Error, query failed');
list($name, $type, $size, $content) = mysql_fetch_array($retrieve);

header("Content-length: $size");
header("Content-type: $type");
header("Content-Disposition: attachment; filename=$name");
echo $content;
}

mysql_close();


 

}
if ( ("".$mero3['endDate']."")<"$l") {
echo "<script language='javascript'>" ; 

echo " window.location=('notification.php')";
echo"</script>";

}


	 
	 
	 
	  ?>