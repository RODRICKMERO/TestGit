<?php
session_start();
if(!isset($_SESSION['USER']))
{
header("location:index.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
require("setting.php");
?>
<style type="text/css">
<!--
.logoutform_button {   background-color: #EDF2F8;
   border-color: #BBCEE6;
   border-width: 1px;
   border-style: solid;
   color: #376BAD;
   font-family: Arial;
   font-size: 13px;
}
-->
</style>
</head>

<body style=" margin:0 0 0 0">
<div style="margin-top:0">
 <table width="947" height="673" cellspacing="0" border="0" align="center" cellpadding="0">
   <tr><td colspan="3" height="97" ><img src="images/amuctabanner.jpg" width="100%" height="100" alt="amucta_banner" /></td>
    </tr>
    <tr bgcolor="#FFCCFF" height="40">
      <td colspan="3" height="40"><img src="images/af_banner.jpg" width="100%" height="43" /></td>
    </tr>
     <tr><td colspan="3" height="10"><img src="images/top_separator.png.jpg" width="948" height="12" /></td>
     </tr>
     <tr>
   <td width="192" align="right" height="470" bgcolor="#999998" valign="top"><?php
		include("registrarmenu.php");
		?></td>
   <td width="739" align="center" valign="top" bordercolor="#AA9FAA" bgcolor="#C0DCC0" style="border:#4F80CD solid 2px"> <div id="wb_JavaScript2" style="position:absolute; left:408px; top:77px; width:113px; height:20px; z-index:13;" align="left">
     <script type="text/javascript">
<!--
datenow = new Date(); 
timenow = datenow.getTime(); 
datenow.setTime(timenow); 
hournow = datenow.getHours(); 

if (hournow >= 20) 
{
   greeting = "Good Night!"; 
}
else
if (hournow >= 18)
{ 
   greeting = "Good Evening!"; 
}
else 
if (hournow >= 12) 
{
   greeting = "Good Afternoon!"; 
}
else 

{
   greeting = "Good Morning!"; 
}

document.write("<span style='font-family: Arial; font-size: 12px; color:gereen; text-decoration: none;'>" + greeting + "</span>"); 
//-->
        </script>
   </div>
     <div id="wb_JavaScript3" style="position:absolute; left:601px; top:74px; width:199px; height:21px; z-index:14;" align="left">
       <div style="color:#FF0000;font-size:12px;font-family:Agency FB;" id="basicclock2"></div>
       <script type="text/javascript">

      </script>
       <?php echo "<B style='color:red'>".ucwords("".$_SESSION['USER']."")."</B>"; ?></div>
     <p align="center"><br />
       <script type="text/javascript" src="jquery.min.js"> </script>
       <script language="JavaScript" type="text/javascript">
$(function(){
 
    // add multiple select / deselect functionality
    $("#selectall").click(function () {
          $('.case').attr('checked', this.checked);
    });
    $(".case").click(function(){
 
        if($(".case").length == $(".case:checked").length) {
            $("#selectall").attr("checked", "checked");
        } else {
            $("#selectall").removeAttr("checked");
        }
 
    });
});
       </script>
       <script language="JavaScript" type="text/javascript">
$(function(){
 
    // add multiple select / deselect functionality
    $("#selectall").click(function () {
          $('.case').attr('checked', this.checked);
    });
    $(".case").click(function(){
 
        if($(".case").length == $(".case:checked").length) {
            $("#selectall").attr("checked", "checked");
        } else {
            $("#selectall").removeAttr("checked");
        }
 
    });
});
       </script>
     </p>
     <p align="center">
       <script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {validateOn:["change"]});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "none", {validateOn:["change"]});
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "none", {validateOn:["change"]});
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4", "none", {validateOn:["change"]});


var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5", "none", {validateOn:["change"]});
//-->
       </script>
     </p>
     <table width="408" border="0" cellspacing="0" cellpadding="0">
       <tr>
         <td width="425" height="29"><strong>
           <marquee>
             <span class="style46">Return Students</span>
             </marquee>
         </strong></td>
       </tr>
     </table>
     <hr align="center" width="77%" />
     <table width="200" height="36" border="0">
       <tr>
         <th height="32" scope="col"> <form id="form1" name="form1" method="get"  action="">
           <table width="430" border="0">
             <tr>
               <td width="186" height="40"><span class="style53">Select faculty &amp; Year</span></td>
               <td width="75"><select name="Yearofstudy">
                 <option value="1" selected="selected">Year 1</option>
                 <?php
              
                    for ($yy=2;$yy<=4;$yy++)
                    {
                       
                        echo "<option value=$yy>$yy</option>\n";
                    	
                    }
              ?>
               </select></td>
               <td width="43"><select name="faculty">
                 <?php
				 require("config.php");
				 $queryb="select * from faculty ";
				 $resultyb=mysql_query( $queryb); 
				 $s=1;
				 while($mero=mysql_fetch_array($resultyb)){
				 
				if ($s==1){
               echo"<option value='".$mero['f_name']."' selected='selected'><b>".strtoupper("".$mero['f_name']."")."</b></option>";
					 $s++;
					 }else {
                    echo" <option value='".$mero['f_name']."'>".strtoupper("".$mero['f_name']."")."</option>";
					}
					 } ?>
               </select></td>
               <td width="41" ><select name="y_study">
             <?php
     
			$gg="select distinct(year) from user_status";
$ggg=mysql_query($gg);
while($gggg=mysql_fetch_array($ggg)){
	$x=date("20y");
	$y=(date("20y")+1);
	$yearofstudy="$x".'/'."$y";
	if("".$gggg['year'].""=="$yearofstudy"){
			?>
               <option value='<?php echo"".$gggg['year'].""; ?>' selected="selected"><?php echo"".$gggg['year']."";?></option>
               <?php
	}else{
                    
                     echo "<option value='".$gggg['year']."'>".$gggg['year']."</option>\n";
                    	
                    }
}
              ?>
               </select></td>
               <td width="63"><input name="Save" type="submit" id="Save" value="OK" /></td>
             </tr>
           </table>
           <div align="center"></div>
         </form></th>
       </tr>
     </table>
     <br />
     <?php

require("config.php");

$page_name="returninfo.php"; //  If you use this code with a different page ( or file ) name then change this 
$start=$_GET['start'];
if(strlen($start) > 0 and !is_numeric($start)){
echo "Data Error";
exit;
}


$eu = ($start - 0); 
$limit =200000;                                 // No of records to be shown per page.
$this1 = $eu + $limit; 
$back = $eu - $limit; 
$next = $eu + $limit; 

$a="1";
if ($_GET['faculty']){
$faculty=$_GET['faculty'];
$year=$_GET['Yearofstudy'];
$y_study=$_GET['y_study'];

$query="select * from student2,user_status where student2.faculty='$faculty' and student2.id_no=user_status.id_no and user_status.year='$y_study';";
$result=mysql_query($query);
$nume=mysql_num_rows($result);
echo"<form name=form1 method='post' action='' >";   
$query2="select * from student2,user_status where student2.faculty='$faculty' and student2.id_no=user_status.id_no and user_status.year='$y_study' limit $eu, $limit ";
$result2=mysql_query($query2);
echo mysql_error();

  $v=0;$tp=0;
    while( $laswai=mysql_fetch_array($result2) )
	        {
			set_time_limit (0) ;
					
			$q="select * from courses,course_regsration2 where (course_regsration2.id_no='".$laswai['id_no']."')and course_regsration2.course_code=courses.course_code order by course_year ";
$re=mysql_query($q);

while($leo=mysql_fetch_array($re)){

$maxmam="".$leo['course_year']."";


}

if ($maxmam==$year){
	echo"<center>";
if($tp==0){
	$tp++;
if ($maxmam==1){



echo "THISE ARE ".strtoupper($faculty)." FIRST YEAR STUDENTS  ";
}

if ($maxmam==2){



echo "THISE ARE ".strtoupper($faculty)." SECOND YEAR STUDENTS  ";
}
if ($maxmam==3){



echo "THISE ARE ".strtoupper($faculty)." THIRD YEAR STUDENTS  ";
}

if ($maxmam==4){



echo "THISE ARE ".strtoupper($faculty)." FORTH YEAR STUDENTS  ";
}
if ($maxmam==5){



echo "THISE ARE ".strtoupper($faculty)." FIFTH YEAR STUDENTS  ";
}
echo"</center>";
}
$maxmam=0;
if ($v==0){
	
	$hh=0;
echo '<table align="center" width="600" border="1" cellpadding="1" cellspacing="0" bordercolor="#66cccc">';
echo "<tr bgcolor='#6699CC'><th align='left'>S/N</th><th align='left'>REG No:</th><th align='left'>STUDENT NAME:</th><th align='left'>FACULTY:</th><th align='left'>STATUS:</th><th align='left'>SELECT</th></tr>";
$v++;
}  $hh++;
		     if($a==1)
			{ 
			   
			  
echo "<tr bgcolor='#ffdfaa'><td>$hh</td><td>".$laswai['id_no']."</td><td>".ucwords("".$laswai['name']."")."</td><td> ".$laswai['faculty']."</td><td> ".$laswai['status']."</td><td>";?>
     <input name="checkbox[]" type="checkbox" id="checkbox[]"  class="case"  value="<?php echo $laswai['id_no'];?>" />
     <?php  echo'</td></tr>';
			  $a="2"; 			  
			 }
           else
              {
			    
				
			echo "<tr bgcolor='#EEEEEE'><td>$hh</td><td>".$laswai['id_no']."</td><td> ".ucwords("".$laswai['name']."")."</td><td> ".$laswai['faculty']."</td><td> ".$laswai['status']."</td><td>";?>
     <input name="checkbox[]" type="checkbox" id="checkbox[]"  class="case"  value="<?php echo $laswai['id_no'];?>" />
     <?php  echo'</td></tr>';
			  $a="2"; 			  	
				 $a="1";
							  
			 
              }
			}
			
			
			
			
			}  
			
			if ($v==0)
			{

			echo '<table align="center" width="300" border="1" cellpadding="1" cellspacing="0" bordercolor="#66cccc">';
echo "<tr bgcolor='#FFCCCC'><td><img src='images/log_out.png' width='10' height='10' /><b>Please no students!</b></td></tr>";
			}else{
			
			
		  echo'<tr>
<td align="center" bgcolor="#FFFFFF" cellpadding="3">select all<input type="checkbox" id="selectall"/></td>';
	
echo"<td colspan='5'align='center'bgcolor='#FFFFFF'><input name='delete' type='submit' value='Move' alt='Move'></td>
</tr>";}




// Check if delete button active, start this 

$delete=$_POST['delete'];
$checkbox=$_POST['checkbox'];

if($delete){
set_time_limit (0) ;

$query6="select * from master_user2 where (master_user2.id_no='".$_SESSION['USERREG']."') ;";
$q=mysql_query($query6);
$ngonyan=mysql_fetch_array($q);



$quer= "INSERT INTO systemtracer values('','".date("20y-m-d")."',' STUDENTS WERE MOVED  TO BAKUP TO BY ".$ngonyan['name']." WHO IS ".$ngonyan['group']." WITH REGISTRATION  ".$_SESSION['USERREG']." IN ".date("20y-m-d")." at ".time("h:m:s")."')";
$resul=mysql_query($quer);

$quer= "INSERT INTO systemtracer2 values('','".date("20y-m-d")."',' STUDENTS WERE MOVED TO BAKUP BY ".$ngonyan['name']." WHO IS ".$ngonyan['group']." WITH REGISTRATION  ".$_SESSION['USERREG']." IN ".date("20y-m-d")." at ".time("h:m:s")."')";
$resul=mysql_query($quer);
mysql_error;





for($i=0;$i<$nume;$i++){
$del_id = $checkbox[$i];

if (!empty($del_id)){
$q1="select * from master_user where (master_user.id_no='$del_id')";
 $r1=mysql_query($q1);
 set_time_limit (0) ;
 
 $dq1="delete from master_user where (master_user.id_no='$del_id')";
 $dr1=mysql_query($dq1);

 
 $q2="select * from perfomance2 where (perfomance2.id_no='$del_id')";
 $r2=mysql_query($q2);
 
 $dq2="delete from perfomance2 where (perfomance2.id_no='$del_id')";
 $dr2=mysql_query($dq2);
 
 $q3="select * from course_regsration2 where (course_regsration2.id_no='$del_id')";
 $r3=mysql_query($q3);
 
 $dq3="delete from course_regsration2 where (course_regsration2.id_no='$del_id')";
 $dr3=mysql_query($dq3);
 
 $q4="select *from pamission where (pamission.id_no='$del_id')";
 $r4=mysql_query($q4);
  $dq4="delete from pamission where (pamission.id_no='$del_id')";
 $dr4=mysql_query($dq4);
 
 $q5="select * from student2 where (student2.id_no='$del_id')";
 $r5=mysql_query($q5);
 
 $dq5="delete from student2 where (student2.id_no='$del_id')";
 $dr5=mysql_query($dq5);
 
 $dq51="delete from user_status where (user_status.id_no='$del_id')";
 $dr51=mysql_query($dq51);
 

 while( $ar1=mysql_fetch_array($r1)){
	 
	 set_time_limit (0) ;
	$q1i="insert into master_user2 values('".$ar1['id_no']."','".$ar1['name']."','".$ar1['user_password']."','".$ar1['group']."')";
	$r1i=mysql_query($q1i); 
	 
 }
 

  while( $ar2=mysql_fetch_array($r2)){
	
	  
	$q2i="insert into perfomance values('".$ar2['id_no']."','".$ar2['exam_no']."','".$ar2['course_code']."','".$ar2['marks']."','".$ar2['score']."','".$ar2['remarks']."')";
	$r2i=mysql_query($q2i);
	 
 }
 
  $great=0;
  while( $ar3=mysql_fetch_array($r3)){
  set_time_limit (0) ;
	   $cat=str_split("".$ar3['y_study']."");
	   $yyy=$cat[0].$cat[1].$cat[2].$cat[3].$cat[5].$cat[6].$cat[7].$cat[8];
	   
	   if($yyy>$great)
	   {
		   $grea="".$ar3['y_study']."";
		   $great=$yyy;
		   $id="".$ar3['id_no']."";
	   }
	$q3i="insert into course_regsration values('".$ar3['id_no']."','".$ar3['course_code']."','".$ar3['regDate']."','".$ar3['y_study']."')";
	$r3i=mysql_query($q3i); 
	 
 }
// if($great>0){
	// $q6="insert into user_status values('$id','$grea','')";
	//$r6=mysql_query($q6); 
	 
 //}
	 
 
  while( $ar4=mysql_fetch_array($r4)){
	  
	$q4i="insert into pamission values('".$ar4['id_no']."','".$ar4['older']."','".$ar4['disid']."')";
	$r4i=mysql_query($q4i); 
	 
	 
 }
  while( $ar5=mysql_fetch_array($r5)){
	 
$q5i="insert into student values('".$ar5['id_no']."','".$ar5['name']."','".$ar5['faculty']."','".$ar5['level']."')";
	$r5i=mysql_query($q5i);	 
	 
 }
 
 
}
 
 
 

}

// if successful redirect to delete_multiple.php 
if(($r2)||($r3)){
echo "<script language='javascript'>
                alert('OPERATION IS SUCCESSFFUL');
				window.location='returninfo.php';
                </script>";

}
}
mysql_close();




echo"</form>";
  

echo '</table>' ;

echo "<p><hr width='70%' />";

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

}}// end of if checking sufficient records are there to display bottom navigational link. 

?>
     <p></p>
     <div id="wb_MenuBar1" style="position:absolute; left:148px; top:121px; width:92px; height:22px; z-index:1001;">
       <div id="MenuBar1">
         <ul style="display:none;">
           <li><span></span><span>Acount</span>
             <ul>
               <li><span></span><a href="./logout.php" target="_self">Logout</a> </li>
               <li><span></span><a href="./change.php" target="_self">Change&nbsp;password</a> </li>
               <li><span></span><a href="file://" target="_self">Email</a> </li>
               </ul>
             </li>
           </ul>
         </div>
       <script type="text/javascript">
<!--
cmDrawFromText('MenuBar1', 'hbr', cmThemeWhiteBlue, 'ThemeWhiteBlue');
-->
     </script>
     </div>
     <div id="wb_JavaScript1" style="position:absolute; left:199px; top:103px; width:132px; height:19px; z-index:12;" align="left">
       <div style="color: #0000FF;font-size:12px;font-family:Arial;" id="basicdate"></div>
       <script type="text/javascript">
   var now = new Date();
   var days = new Array('Sun','Mon','Tue','Wed','Thu','Fri','Sat');
   var months = new Array('Jan','Feb','Mar','Apr','May','June','July','Aug','Sep','Oct','Nov','Dec');
   var date = ((now.getDate()<10) ? "0" : "")+ now.getDate();
   var year = (now.getYear() < 1000) ? now.getYear() + 1900 : now.getYear();

   today = days[now.getDay()] + ", " + months[now.getMonth()] + " " + date + ", " + year;
   var basicdate = document.getElementById('basicdate');
   basicdate.innerHTML = today;
                  </script>
     </div></td>
   <td width="16" height="470" bgcolor="#999999">&nbsp;</td>
</tr> 
 <tr><td colspan="3" height="13"><img src="images/bottomrod.jpg" alt="" width="948" height="18" /></td>
 </tr> 
  <tr bgcolor="#FFFFAA">
      <td colspan="3" height="30" align="center"> <B style="color:#006633">&copy;&nbsp;2012&nbsp; 
        .All Rights Reserved</B> </td>
 </tr>    
</table>  
</div>
</body>
</html>
