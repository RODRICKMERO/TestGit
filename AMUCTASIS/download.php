<?php
session_start();
if(!isset($_SESSION['USERREG']))
{
header("location:index.php");
}
if(isset($_GET['id']))
{
// if id is set then get the file with the id from database
$id=$_POST["id"];
require("config.php");
$id=$_GET['id'];
$query = "SELECT cname, type, size, content FROM upload_course WHERE course_code = '$id'";
$retrieve = mysql_query($query) or die('Error, query failed');
list($name, $type, $size, $content) = mysql_fetch_array($retrieve);

header("Content-length: $size");
header("Content-type: $type");
header("Content-Disposition: attachment; filename=$name");
echo $content;
}

mysql_close($conn);
?>
