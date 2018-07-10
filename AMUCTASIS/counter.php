<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>



<?php

require("config.php");
$tbl_name="counter"; // Table name

$sql="SELECT * FROM $tbl_name";
$result=mysql_query($sql);

$rows=mysql_fetch_array($result);
$counter=$rows['counter'];

// if have no counter value set counter = 1
if(empty($counter)){
$counter=1;
$sql1="INSERT INTO $tbl_name(counter) VALUES('$counter')";
$result1=mysql_query($sql1);
}

echo " <FONT FACE='TIMES NEW ROMAN' COLOR='WHITE'><B>Visitor's No: ";
if ( $counter<=9 ){

echo"[00000$counter]";


}
else if ( $counter<=99 ){

echo"[0000$counter]";


}
else
if ( $counter<=999 ){

echo"[000$counter]";

}
else if ( $counter<=9999 ){

echo "[00$counter]";

}else if ( $counter<=99999 ){

echo"[0$counter]";

 }

else
{

echo"[$counter]";

}




// count more value
$addcounter=$counter+1;
$sql2="update $tbl_name set counter='$addcounter'";
$result2=mysql_query($sql2);

mysql_close();
?>

</body>
</html>
