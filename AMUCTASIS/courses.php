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
</head>

<body style=" margin:0 0 0 0">
<div style="margin-top:0">
 <table width="947" height="750" cellpadding="0" cellspacing="0" border="0" align="center">
   <tr><td colspan="3" height="186">
        <table width="948" height="186" border="0" cellpadding="0" cellspacing="0">
        <tr>
           <td width="768" height="186" style="background-image:url(../images/bana_main4.png); background-repeat:no-repeat">
              <table width="696" height="186" cellpadding="0" cellspacing="0" border="0">
              <tr><td height="75" colspan="8"><img src="images/amuctabanner.jpg" alt="rucologo" width="768" height="153" /></td>
              </tr>
                            <tr>
                  <td width="45" height="37" bgcolor="#FFCCFF">&nbsp;</td>
                  <td width="43" height="37" align="center" bgcolor="#FFDF55"><a href="logout.php"><img src="images/logout.jpg" border="0" alt="logout"/></a></td>
                  <td width="8" height="37" bgcolor="#FFCCFF">&nbsp;</td>
                  <td width="72" height="37" valign="middle" bgcolor="#FFCCFF"><B style="color:#000066">Logout</B></td>
                  <td width="155" height="37" bgcolor="#FFCCFF">&nbsp;</td>
                  <td width="118" height="37" bgcolor="#FFCCFF"></td>
                  <td width="121" height="37" bgcolor="#FFCCFF"><div id="wb_JavaScript1" style="position:absolute; left:168px; top:198px; width:132px; height:19px; z-index:12;" align="left">
                    <div style="color: #0000FF;font-size:12px;font-family:Arial;" id="basicdate"></div> <script type="text/javascript">
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
                  <td width="134" height="37" bgcolor="#FFCCFF">&nbsp;</td>
              </tr>
              </table>           </td>
           <td width="180" height="190" background="images/RUCO2.jpg" bgcolor="#FFCCFF">&nbsp;</td>
        </tr>
        </table>   
        </td>
    </tr>
    <tr bgcolor="#FFCCFF">
      <td colspan="3" height="30"><div id="wb_JavaScript3" style="position:absolute; left:303px; top:198px; width:72px; height:21px; z-index:14;" align="left">
        <div style="color:#FF0000;font-size:12px;font-family:Agency FB;" id="basicclock"></div>
        <script type="text/javascript">
function clock() 
{
   var digital = new Date();
   var hours = digital.getHours();
   var minutes = digital.getMinutes();
   var seconds = digital.getSeconds();
   if (minutes <= 9) minutes = "0" + minutes;
   if (seconds <= 9) seconds = "0" + seconds;
   dispTime = hours + ":" + minutes + ":" + seconds;

   var basicclock = document.getElementById('basicclock');
   basicclock.innerHTML = dispTime;
   setTimeout("clock()", 1000);
}
clock();
      </script>
      </div>
        <div id="wb_JavaScript2" style="position:absolute; left:344px; top:198px; width:113px; height:20px; z-index:13;" align="left">
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
                                                                            <?php echo "<B style='color:red'>".ucwords("".$_SESSION['USER']."")."</B>"; ?></td>
    </tr>
     <tr><td colspan="3" height="10"><img src="images/top_separator.png.jpg" width="948" height="12" /></td>
     </tr>
     <tr>
   <td width="192" align="right" height="470" bgcolor="#999998" valign="top">
        <ul id="nav2">
                <li><a href="change.php" class="style2" >CHANGE PASSWOD</a></li>
                <li><a href="lock.php">Select courses</a></li>
                <li><a href="result.php">View result </a></li>
                <li><a href="progress.php">View progress</a></li>
                <li><a href="corses.php">Mycourse</a></li>
                    <li><a href="notification.php">Anowncement</a></li>
                
       </ul>   </td>
   <td width="739" align="center" valign="top" bordercolor="#AA9FAA" bgcolor="#C0DCC0" style="border:#4F80CD solid 2px"> <p align="center"> 
     <table width="408" border="0" cellspacing="0" cellpadding="0">
       <tr>
         <td width="425" height="29"><strong><span class="style2">
           <marquee>
           <span class="style2 style52"> STUDENT MAIN WINDOW </span>
           </marquee>
         </span> 
        </strong></td>
       </tr>
     </table>     
     <hr align="center" width="77%" />
     <br />
     <?php

require("config.php");

$page_name="courses.php"; //  If you use this code with a different page ( or file ) name then change this 
$start=$_GET['start'];
if(strlen($start) > 0 and !is_numeric($start)){
echo "Data Error";
exit;
}


$eu = ($start - 0); 
$limit = 8;                                 // No of records to be shown per page.
$this1 = $eu + $limit; 
$back = $eu - $limit; 
$next = $eu + $limit; 

$a="1";

$query7="select distinct * from courses where courses.faculty=(select faculty from student where (student.name='".$_SESSION['USER']."')AND 
(student.id_no='".$_SESSION['USERREG']."'))order  by course_year limit $eu, $limit "; 
$result7=mysql_query($query7);
$laswai7=mysql_fetch_array($result7);


$query="select  * from courses,course_regsration where ((course_regsration.id_no= courses.id_no) and (course_regsration.id_no= '".$_SESSION['USERREG']."') and (course_regsration.regDate >= (select startDate from schedule where schedule.faculty='".$laswai7['course_name']."') ))order by course_year;";
$result=mysql_query($query);
$nume=mysql_num_rows($result);

echo '<table align="center" width="" border="1" cellpadding="2" cellspacing="0" bordercolor="#66cccc">';
echo "<tr bgcolor='#6699CC'><th align='left'>COURSE_CODE:</th><th align='left'>COURSE NAME:</th><th align='left'>SEMESTER:</th><th align='left'>COURSE YEAR:</th></tr>";
 
$query2="select  * from courses,course_regsration where ((course_regsration.id_no= courses.id_no) and (course_regsration.id_no= '".$_SESSION['USERREG']."') and (course_regsration.regDate >= (select startDate from schedule where schedule.faculty='".$laswai7['course_name']."') ))order by course_year limit $eu, $limit "; 
$result2=mysql_query($query2);
echo mysql_error();


    while( $laswai=mysql_fetch_array($result2) )
	        {
		     if($a==1)
			 {
			   
echo "<tr bgcolor='#ffdfaa'><td>".$laswai['course_code']."</td><td> ".$laswai['course_name']."</td><td> ".$laswai['semester']."</td><td>".$laswai['course_year']."</td></tr> " ;
			  $a="2"; 			  
			 }
           else
              {
			  			   
echo "<tr bgcolor='#EEEEEE'><td>".$laswai['course_code']."</td><td> ".$laswai['course_name']."</td><td> ".$laswai['semester']."</td><td>".$laswai['course_year']."</td></tr> " ;
			    
			  $a="2"; 			  	
				 $a="1";
							  
			 
              }
			}  
			  
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

}// end of if checking sufficient records are there to display bottom navigational link. 

?></td>
   <script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {validateOn:["change"]});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "none", {validateOn:["change"]});
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "none", {validateOn:["change"]});
//-->
</script>
   <td width="16" height="470" bgcolor="#999999">&nbsp;</td>
</tr> 
 <tr><td colspan="3" height="13"><img src="images/bottomrod.jpg" alt="" width="948" height="18" /></td>
 </tr> 
  <tr bgcolor="#FFFFAA">
    <td colspan="3" height="30" align="center">
   <B style="color:#006633">AMUCTA &copy;&nbsp;2012&nbsp;
   .All Rights Reserved</B>   </td>
 </tr>    
</table>  
</div>
</body>
</html>
