<?php
$host="localhost";
$user="root";
$pass="";
$db_name="amuctasis";
mysql_connect("$host","$user","$pass")or die("cannot connect database ");
mysql_select_db("$db_name")or die("cannot select database ");
?>