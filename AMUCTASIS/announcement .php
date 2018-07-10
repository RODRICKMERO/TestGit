<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?PHP
require("config.php");
if ($_POST['group']){
$title=$_POST['title'];
$group=$_POST['group'];
$xdate=$_POST['xdate'];
$q="delete from announcement  where (xdate<='".date("20y-m-d")."') ";
$re=mysql_query($q);

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

$query = "INSERT INTO announcement  VALUES ('','$title','$xdate','$group','$fileName','$fileType','$fileSize','$content')";

mysql_query($query) or die('Error, query failed');
echo "<br>File $fileName uploaded<br>";



echo "<script language='javascript'> 
		alert(' Anowncenent Uploaded');
		
		</script>";
echo "<script language='javascript'>" ; 
		echo " window.location=('anowncementd.php')";
						echo "</script>";
		}else
{
echo "<script language='javascript'> 
		alert(' error in uploading try again ');
		
		</script>";
		
		echo "<script language='javascript'>" ; 
		echo " window.location=('anowncementd.php')";
						echo "</script>";
}

}


 
 

		   
		   
		   
?>
</body>
</html>