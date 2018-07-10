<?php
session_start();
$ses = session_id();
$time = time();
$timech=$time-300; 

require("config.php");
$result = mysql_query("SELECT * FROM uonline WHERE session='$ses'");
$num = mysql_num_rows($result); 

if($num == "0"){
$result1 = mysql_query("INSERT INTO uonline (session, time)VALUES('$ses', '$time')");
}else{
$result2 = mysql_query("UPDATE uonline SET time='$time' WHERE session = '$ses'");
} 

$result3 = mysql_query("SELECT * FROM uonline"); 

$usersonline = mysql_num_rows($result3);
echo "Online Users: <b>".$usersonline."";  

mysql_query("DELETE FROM uonline WHERE time<$timech");
?>


