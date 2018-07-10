<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
  <?php
require("config.php");
$page_name="editresult12.php"; //  If you use this code with a different page ( or file ) name then change this 
$start=$_GET['start'];
if(strlen($start) > 0 and !is_numeric($start)){
echo "Data Error";
exit;
}
$eu = ($start - 0); 
$limit = 1000;                                 // No of records to be shown per page.
$this1 = $eu + $limit; 
$back = $eu - $limit; 
$next = $eu + $limit; 
$a="1";
$course_code=strtolower($_POST['course_code']);

$query10="select  * from staff_faculty where (staff_faculty.id_no='".$_SESSION['USERREG']."') ;";
$result10=mysql_query($query10);
$mero1=mysql_fetch_array($result10);
$query12="select*from courses where (courses.course_code='$course_code');";
$result12=mysql_query($query12);
$mero12=mysql_fetch_array($result12);


$query41="select*FROM perfomance";
	$result41=mysql_query($query41);
$num=mysql_num_rows($result41);





$query="select  * from student,perfomance where ((student.id_no=perfomance.id_no) and (perfomance.course_code='$course_code') and (student.faculty= '".$mero1['faculty']."'))order by name;";
$result=mysql_query($query);
$nume=mysql_num_rows($result);
echo"<color='red'>";
echo"<center>";

 echo"THIS IS $course_code RESULT YEAR ".$mero12['course_year']." COURSE FOR SEMESTER  ".$mero12['semester']." "; 
//// $query4="select * from student where (student.id_no='$dent_reg');"; 
// $result4=mysql_query($query4);
 //$mero=mysql_fetch_array($result4);
 //echo"</br>";echo"".$mero['name']."";echo"WITH REGSRATION No $dent_reg";
  echo"</center>";
$COUNT=0;


?>
<table width="64%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#66cccc" cols="0" >
<tr bgcolor='#6699CC'><th width="9%" height="40" align='left'><span class="style3">S/N:</span></th>
<th width="40%" align='left'><span class="style1">NAME:</span></th>
<th width="21%" align='left'><span class="style3">REG_NO:</span></th>
<th width="40%" align='left'><span class="style3">CODE:</span></th>
<th  width='30%'><span class="style3">SCORE</span></th>
<th  width='30%'><span class="style3">GRADE</span></th>
<th  width='30%'><span class="style3">DEL</span></th>

</tr>
<?php


echo"<form name=form1 method='post' action='' >";
 $query2="select  * from student,perfomance where ((student.id_no=perfomance.id_no) and (perfomance.course_code='$course_code') and (student.faculty= '".$mero1['faculty']."'))order by name limit $eu, $limit "; 
$result2=mysql_query($query2);
echo mysql_error();


   while( $laswai=mysql_fetch_array($result2) )
	        {
			$COUNT++;
			$x="".$laswai['id_no'].""+"".$laswai['course_code']."";
		     if($a==1)
			 {
			   
echo "<tr bgcolor='#ffdfaa'><td>$COUNT</td><td>".$laswai['name']."</td><td>".$laswai['id_no']."</td>";
	
	 echo" <td>".$laswai['course_code']."</td><td>".$laswai['marks']."</td>";
	 echo" <td>".strtoupper("".$laswai['score']."")." </td><td>";?>
     <input name="checkbox[]" type="checkbox" id="checkbox[]"  class="case"  value="<?php echo $x;?>" />
     <?php echo"</td></tr>";?>
     <?php 
			  $a="2"; 			  
			 }
           else
              {
			   
echo "<tr bgcolor='#eeeeee'><td>$COUNT</td><td>".$laswai['name']."</td><td>".$laswai['id_no']."</td>";
 echo" <td>".$laswai['course_code']."</td><td>".$laswai['marks']."</td>";
	 echo" <td>".strtoupper("".$laswai['score']."")." </td><td>";?>
     <input name="checkbox[]" type="checkbox" id="checkbox[]"  class="case"  value="<?php echo $x;?>" />
     <?php echo"</td></tr>";?>
     <?php 
			  $a="2"; 			  	
				 $a="1";
							  
			 
              }
			  
			 
	

			} 
			 
		echo'<tr>
<td colspan="2" align="center" bgcolor="#FFFFFF" cellpadding="3">select all<input type="checkbox" id="selectall"/></td>';
	
echo"<td colspan='5'align='center'bgcolor='#FFFFFF'><input name='delete' type='submit' value='Delete'></td>
</tr>";






// Check if delete button active, start this 

$delete=$_POST['delete'];
$checkbox=$_POST['checkbox'];

if($delete){



for($i=0;$i<$num;$i++){
$del_id = $checkbox[$i];
$query4="select*FROM perfomance";
	$result4=mysql_query($query4);
while($sq=mysql_fetch_array($result4)){
	
if(("".$sq['id_no'].""+"".$sq['course_code']."")==$del_id){

$query3="DELETE FROM perfomance WHERE ((perfomance.id_no='".$sq['id_no']."')and(perfomance.course_code='".$sq['course_code']."'));";
	$result3=mysql_query($query3);
}}

if (!empty($del_id)){
	
	$query6="select * from master_user2,staff_faculty where (master_user2.id_no='".$_SESSION['USERREG']."') and (staff_faculty.id_no='".$_SESSION['USERREG']."') ;";
$q=mysql_query($query6);
$ngonyan=mysql_fetch_array($q);



$quer= "INSERT INTO systemtracer values('','".date("20y-m-d")."',' COURSE $del_id WAS DELETED FROM THE SYSTEM BY THE DEAN OF FACULTY OF ".$ngonyan['faculty']."  WITH THE NAME ".$ngonyan['name']." AND ".$_SESSION['USERREG']." REGSRATION NUMBER IN ".date("20y-m-d")." at ".time("h:m:s")."')";
$resul=mysql_query($quer);

$quer= "INSERT INTO systemtracer2 values('','".date("20y-m-d")."',' COURSE $del_id WAS DELETED FROM THE SYSTEM BY THE DEAN OF FACULTY OF ".$ngonyan['faculty']."  WITH THE NAME ".$ngonyan['name']." AND ".$_SESSION['USERREG']." REGSRATION NUMBER IN ".date("20y-m-d")." at ".time("h:m:s")."')";
$resul=mysql_query($quer);
mysql_error;
}

	
	

}


// if successful redirect to delete_multiple.php 
if($result3){
echo "<script language='javascript'>
                alert('course $n was deleted successfully');
				                </script>";

}
}
mysql_close();


  
	echo"</form>";		  
			 ?>
</table>

<p><hr width='70%' />

<?php

if($nume > $limit ){ // Let us display bottom links if sufficient records are there for paging

/////////////// Start the bottom links with Prev and next link with page numbers /////////////////
echo "<table align = 'center' width='50%'><tr><td  align='left' width='30%'>";
//// if our variable $back is equal to 0 or more then only we will display the link to move back ////////
if($back >=0) { 
print "<a href='$page_name?start=$back'><font face='Verdana' size='2'>PREV</font></a>"; 
} 
//////////////// Let us display the page links at  center. We will not display the current page as a link ///////////
echo "</td><td align=center width='30%'>";
$i=0;
$l=1;
for($i=0;$i < $nume;$i=$i+$limit){
if($i <> $eu){
echo " <a href='$page_name?start=$i'><font face='Verdana' size='2'>$l</font></a> ";
}
else { echo "<font face='Verdana' size='4' color=red>$l</font>";}        /// Current page is not displayed as link and given font color red
$l=$l+1;
}


echo "</td><td  align='right' width='30%'>";
///////////// If we are not in the last page then Next link will be displayed. Here we check that /////
if($this1 < $nume) { 
print "<a href='$page_name?start=$next'><font face='Verdana' size='2'>NEXT</font></a>";} 
echo "</td></tr></table>";

}// end of if checking sufficient records are there to display bottom navigational link. 




?>
</body>
</html>
