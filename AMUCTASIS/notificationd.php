<?php
require("config.php");
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

mysql_close();
}

if(isset($_GET['sn']))
{	

$sn=$_GET['sn'];
$query = "SELECT name, type, size, content FROM announcement  WHERE (announcement .sn ='$sn') ";
$retrieve = mysql_query($query) or die('Error, query failed');
list($name, $type, $size, $content) = mysql_fetch_array($retrieve);

header("Content-length: $size");
header("Content-type: $type");
header("Content-Disposition: attachment; filename=$name");
echo"</br>";
echo $content;


mysql_close();
}







 

?>