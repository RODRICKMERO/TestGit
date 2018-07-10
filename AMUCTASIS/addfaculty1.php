<?php
session_start();
if(!isset($_SESSION['USER']))
{
header("location:index.php");
}
?>
 <?php
	 if ($_GET['f1']==ok){
	 $f_name=$_POST['f_name'];
	 $f_description=$_POST['f_description'];
	 $query="insert into faculty values ('$f_name','$f_description')";
	$resulty=mysql_query($query);
	
if($resulty){
	  
				 echo "<script language='javascript'>
                      alert('Faculty is Aded Successful');
                       </script>";
					   
					   echo "<script language='javascript'>" ; 
		echo " window.location=('addfaculty.php?f=ok')";
						echo "</script>";
	 
	 }else
	 {
	 
	 echo "<script language='javascript'>
                      alert('Faculty can't be Added Thankyou');
                       </script>";
	  echo "<script language='javascript'>" ; 
		echo " window.location=('addfaculty.php?f=ok')";
						echo "</script>";
	 }
	 
	 
	   
	   
	   }elseif ($_GET['d1']==ok)
	  {
	
	   $d_name=$_POST['f_name'];
	      $f_name=$_POST['f_name'];
	 $d_description=$_POST['f_description'];
	 
	$query="insert into departiment values ('$d_name',' $f_name','$d_description')";
	$resulty=mysql_query($query);
	 if($resulty){
	  
				 echo "<script language='javascript'>
                      alert('Departiment is Aded Successful');
                       </script>";
					   
					   
					   
					 echo "<script language='javascript'>" ; 
		echo " window.location=('addfaculty.php?d=ok')";
						echo "</script>";
	 
	 }else
	 {
	 
	 echo "<script language='javascript'>
                      alert('Departiment can't be Added Thankyou');
                       </script>";
					   
					   
					   echo "<script language='javascript'>" ; 
		echo " window.location=('addfaculty.php?d=ok')";
						echo "</script>";
	 
	 }
	   
	   }
	   
	  
	   
	   ?>