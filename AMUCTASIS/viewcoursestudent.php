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
		include("deanmenu.php");
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
       <script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {validateOn:["change"]});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "none", {validateOn:["change"]});
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "none", {validateOn:["change"]});
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4", "none", {validateOn:["change"]});


var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5", "none", {validateOn:["change"]});
//-->
       </script>
      
    
     <hr align="center" width="77%" />
     <p align="center">&nbsp; </p>
     <table width="408" border="0" cellspacing="0" cellpadding="0">
       <tr>
         <td width="425" height="29"><strong>
           <marquee>
             <span class="style35">VIEW STUDENT COUSES</span>
             </marquee>
         </strong></td>
       </tr>
     </table>
     <br />
     <?php



require("config.php");

{
$page_name="viewcoursestudent.php"; //  If you use this code with a different page ( or file ) name then change this 
$start=$_GET['start'];
if(strlen($start) > 0 and !is_numeric($start)){
echo "Data Error";
exit;
}


$eu = ($start - 0);
$limit = 10000;                                 // No of records to be shown per page.
$this1 = $eu + $limit; 
$back = $eu - $limit; 
$next = $eu + $limit; 

$a="1";

if(isset($_GET['N']) )
   {
   
 
  
   session_register("USERRE");
 $_SESSION['USERRE']=$_GET['N'];
  
   
   $query="SELECT * FROM master_user2 where master_user2.id_no='".$_SESSION['USERRE']."' order by id_no;";
$result=mysql_query($query);
$mero=mysql_fetch_array($result);

echo"<center><p><font style='Times New Roman' size='4'color='blue'case='UPPERCASE' >"; $str = strtoupper("".$mero['name']."");
echo"                                            S/NAME               : $str  .<br>";
echo"                                            REGISTRATION NUMBER  : ".$_SESSION['USERRE']."";
echo"<p>";echo"</p>";

echo" </font></center>";
echo"<center><font face='verdana' color='red'> SELECT YEAR AND SEMESTER </center><br> </font>";
}


$query1="select  * from course_regsration,courses where ((course_regsration.id_no='".$_SESSION['USERRE']."') and (course_regsration.course_code=courses.course_code));"; 
$result1=mysql_query($query1);
$nume=mysql_num_rows($result1);




$querya="select * from course_regsration,courses where ((course_regsration.id_no='".$_SESSION['USERRE']."') and (course_regsration.course_code=courses.course_code)) order by course_year,semester ;"; 
$resulta=mysql_query($querya);
echo mysql_error();
echo "<table align='center' width='600' border='1' cellpadding='1' cellspacing='' bordercolor='#66cccc'>";
$k=1;

while( $rodrick=mysql_fetch_array($resulta) )
{ 

if (("".$rodrick['course_year'].""=="1")&&(("".$rodrick['semester'].""=="I")||("".$rodrick['semester'].""=="i")))
{ $semester="i"; $MAX=1;$SEME="I"; }
elseif(("".$rodrick['course_year'].""=="1")&&(("".$rodrick['semester'].""=="II")||("".$rodrick['semester'].""=="ii")))
{ $semester="ii"; $MAX=1;$SEME="II"; }
elseif(("".$rodrick['course_year'].""=="2")&&(("".$rodrick['semester'].""=="I")||("".$rodrick['semester'].""=="i")))
{ $semester="iii" ; $MAX=2;$SEME="I";}
elseif(("".$rodrick['course_year'].""=="2")&&(("".$rodrick['semester'].""=="II")||("".$rodrick['semester'].""=="ii")))
{ $semester="iv" ; $MAX=2;$SEME="II"; }
elseif(("".$rodrick['course_year'].""=="3")&&(("".$rodrick['semester'].""=="I")||("".$rodrick['semester'].""=="i")))
{ $semester="v" ; $MAX=3;$SEME="I";}
elseif(("".$rodrick['course_year'].""=="3")&&(("".$rodrick['semester'].""=="II")||("".$rodrick['semester'].""=="ii")))
{ $semester="vi" ; $MAX=3;$SEME="II";}
elseif(("".$rodrick['course_year'].""=="4")&&(("".$rodrick['semester'].""=="I")||("".$rodrick['semester'].""=="i")))
{ $semester="vii" ; $MAX=4;$SEME="I";}
elseif(("".$rodrick['course_year'].""=="4")&&(("".$rodrick['semester'].""=="II")||("".$rodrick['semester'].""=="ii")))
{ $semester="viii" ; $MAX=4;$SEME="II";}



}
for ($I=1;$I<=$MAX;$I++)
{

if( $I< $MAX)


{
echo"<tr><td rowspan='2'> YEAR $I </td><td><a href='cousedean.php?semester=i$I'> SEMESTER I </a></td>";

echo"<td rowspan='2'><a href='cousedean.php?course_year=$I'>YEAR $I COURSES</a></td></tr><tr><td><a href='cousedean.php?semester=ii$I'> SEMESTER II </a></td></tr> ";}else
{
echo"<tr><td rowspan='2'> YEAR $I </td><td><a href='cousedean.php?semester=i$I'> SEMESTER I </a></td>";
if($SEME=="II")
{
echo"<td rowspan='2'><a href='cousedean.php?course_year=$I'> YEAR $I COURSES </a></td></tr><tr><td><a href='cousedean.php?semester=ii$I'> SEMESTER II </a></td></tr> ";
}

}
}

/*{
echo"<tr><td rowspan='2'> YEAR $I </td><td><a href='cousedean.php?semester=i$I'> SEMESTER I </a></td>";

echo"</tr><tr><td><a href='cousedean.php?semester=ii$I'> SEMESTER II </a></td></tr> ";}else
{
echo"<tr><td rowspan='2'> YEAR $I </td><td><a href='cousedean.php?semester=i$I'> SEMESTER I </a></td>";
if($SEME=="II")
{
echo"</tr><tr><td><a href='cousedean.php?semester=ii$I'> SEMESTER II </a></td></tr> ";
}

}
}
*/
echo '<table align="center" width="600" border="1" cellpadding="1" cellspacing="0" bordercolor="#66cccc">';
echo "<tr bgcolor='#6699CC'><th align='left'><font style='Times New Roman' size='4'color='red'case='UPPERCASE' >SUJECT CODE:</th><th align='left'><font style='Times New Roman'color='orange' >SUBJECT NAME:</th><th align='left'><font style='Times New Roman' size='4'color='cyan'case='UPPERCASE' >UNIT:</th><th align='left'><font style='Times New Roman' size='4'color='cyan'case='UPPERCASE' >COMMENT:</th></tr>";


if ($_GET['semester']){
$l=$_GET['semester'];
}
if ($_GET['course_year']){
$l=$_GET['course_year'];
}
//echo"$l";

$query2="select * from course_regsration,courses where ((course_regsration.id_no='".$_SESSION['USERRE']."') and (course_regsration.course_code=courses.course_code));"; 
$result2=mysql_query($query2);
echo mysql_error();
       
while( $martha=mysql_fetch_array($result2) )

  {  
  if ($_GET['semester']){
$l=$_GET['semester'];
  if (("".$martha['semester']."".$martha['course_year']."")=="$l") {     
		     if($a==1)
			 {
			   
echo "<tr bgcolor='#ffdfaa'>";echo"<td>";echo"".$martha['course_code']."";echo"</td>";echo"<td>";echo"".$martha['course_name']."";echo"</td>";echo"<td>"; 
echo"".$martha['course_unit']."";echo"</td>";echo"<td>";echo"".$martha['comment']."";echo"</td>";







echo"</tr> " ;
			  $a="2"; 			  
			 }
           else
              {
			   
echo "<tr bgcolor='#EEEEEE'>";echo"<td>";echo"".$martha['course_code']."";echo"</td>";echo"<td>";echo"".$martha['course_name']."";echo"</td>";echo"<td>"; 
echo"".$martha['course_unit']."";echo"</td>";echo"<td>";echo"".$martha['comment']."";echo"</td>";




echo"</tr> " ;

 $a="2"; 			  	
				 $a="1";
							  
			 
              }
			  }
			  }
			  if ($_GET['course_year']){
$l=$_GET['course_year'];
  if (("".$martha['course_year']."")=="$l") {     
		     if($a==1)
			 {
			   
echo "<tr bgcolor='#ffdfaa'>";echo"<td>";echo"".$martha['course_code']."";echo"</td>";echo"<td>";echo"".$martha['course_name']."";echo"</td>";echo"<td>"; 
echo"".$martha['course_unit']."";echo"</td>";echo"<td>";echo"".$martha['comment']."";echo"</td>";





echo"</tr> " ;
		  $a="2"; 			  
			 }
           else
              {
			   
echo "<tr bgcolor='#EEEEEE'>";echo"<td>";echo"".$martha['course_code']."";echo"</td>";echo"<td>";echo"".$martha['course_name']."";echo"</td>";echo"<td>"; 
echo"".$martha['course_unit']."";echo"</td>";echo"<td>";echo"".$martha['comment']."";echo"</td>";




echo"</tr> " ;

 $a="2"; 			  	
				 $a="1";
							  
			 
              }
			  }
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

}
}// end of if checking sufficient records are there to display bottom navigational link. 



?>
     <p align="center">&nbsp; </p>
     <div id="printReady"></div>
     <p></p>
     <div id="wb_MenuBar1" style="position:absolute; left:143px; top:121px; width:92px; height:22px; z-index:1001;">
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
