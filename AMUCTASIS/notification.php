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
   if("".$_SESSION['GROUP'].""=='dpaa'){
		include("dpaamenu.php");
   }elseif("".$_SESSION['GROUP'].""=='principal'){
		include("principalmenu.php");
   }
    elseif("".$_SESSION['GROUP'].""=='dean'){
		include("deanmenu.php");
   }elseif("".$_SESSION['GROUP'].""=='staff'){
		include("staffmenu.php");
   }elseif("".$_SESSION['GROUP'].""=='registrar'){
		include("registrarmenu.php");
   }
   
   else{
		include("studentmenu.php");
   }
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
  
       <script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {validateOn:["change"]});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "none", {validateOn:["change"]});
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "none", {validateOn:["change"]});
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4", "none", {validateOn:["change"]});
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5", "none", {validateOn:["change"]});
//-->
       </script>
    
     <table width="408" border="0" cellspacing="0" cellpadding="0">
       <tr>
         <td width="425" height="29"><strong><span class="style2">
           <marquee>
             <span class="style2 style52"> ANNOUNCEMENT</span>
             </marquee>
         </span> </strong></td>
       </tr>
     </table>
     <hr align="center" width="77%" />
     <div id="wb_Shape1" style="position:absolute; left:460px; top:272px; width:395px; height:339px; z-index:1;" align="center"> <img src="images/img0001.gif" id="Shape1" align="top" alt="" title="" border="0" width="475" height="338" /></div>
     <div id="wb_Marquee1" style="position:absolute; left:526px; top:305px; width:325px; height:301px; z-index:15;" align="left">
       <div align="center">
         <marquee direction="up" height="202" scrolldelay="300" scrollamount="6" behavior="scroll" loop="0" style="" id="Marquee1" onmouseover="this.stop()" onmouseout="this.start()">
           <font style="font-size:11px" color="#FFFFFF" face="Arial">&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; </font><font style="font-size:11px" color="#000000" face="Arial"><br />
             <?PHP
	 require("config.php");
	$mero1="select * from student where (student .id_no='".$_SESSION['USERREG']."');";
$leo=mysql_query($mero1);
$mero=mysql_fetch_array($leo); 

$mero12="select * from schedule";
$leo1=mysql_query($mero12);
$mero3=mysql_fetch_array($leo1);
$mero123="select * from upload ";
$leo11=mysql_query($mero123);
$mero31=mysql_fetch_array($leo11);

$q="delete from announcement  where (xdate<='".date("20y-m-d")."') ";
$re=mysql_query($q);
if(("".$_SESSION['GROUP'].""=='dpaa')||("".$_SESSION['GROUP'].""=='principal')||("".$_SESSION['GROUP'].""=='dean')||("".$_SESSION['GROUP'].""=='staff')){
																																  
	
	$maty="select * from announcement ";
$lii=mysql_query($maty);
$mat="select * from announcement ";
$li=mysql_query($mat);
$c=mysql_num_rows($li);
			
}else{
$maty="select * from announcement  WHERE (announcement .group = 'student' or announcement .group = 'all')";
$lii=mysql_query($maty);
$mat="select * from announcement  WHERE (announcement .group = 'student' or announcement .group = 'all')";
$li=mysql_query($mat);
$c=mysql_num_rows($li);
}


$l=date("20y-m-d");

if ( ("".$mero3['endDate']."")>="$l") {

echo " FACULTY REGISTRATION PERIOD IS OPEN SINCE ".$mero3['startDate']." and will end on ".$mero3['endDate']." FOR MORE INFORMATION DOWLOAD <a href='notificationd.php?id=".$mero31['faculty']."'>".$mero31['name']."</a> " ;


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
}

mysql_close();


 

}
if ( ("".$mero3['endDate']."")<"$l") {

echo " FACULTY REGISTRATION PERIOD IS OVER SINCE ".$mero3['endDate']."";


}
$j=1;
while($m=mysql_fetch_array($lii)){
	
if($j==1){
	echo"<p>";
           echo'<table width="300" border="1" cellspacing="0" cellpadding="0">';
}
             echo'<tr>
               <td>';
			  
               
			     echo'<img src="images/icon.gif" height="15" width="20" />';
				  echo"".ucfirst("".$m['title']."")."  Download <a href='notificationd.php?sn=".$m['sn']."'>".$m['name']."</a> " ;
			   
			   echo'</td>
             </tr>';
			 
			if($j==$c){
           echo'</table>';
			}
         $j++;
		   
}
  echo'<font style="font-size:11px" color="#000000" face="Arial">';
		   

 
	 
	 
	 
	  ?>
            </font>
           </marquee>
       </div>
     </div>
   
<br />
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
    
    
     <div id="wb_MenuBar1" style="position:absolute; left:150px; top:121px; width:92px; height:22px; z-index:1001;">
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
