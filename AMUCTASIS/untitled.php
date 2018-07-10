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
		include("dpaamenu.php");
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
     <table width="408" border="0" cellspacing="0" cellpadding="0">
       <tr>
         <td width="425" height="29"><strong><marquee>
           <span class="style46"> VIEW CHANGES REPORT </span>
         </marquee></strong></td>
       </tr>
     </table>     
     <hr align="center" width="40%" />
     
     <div id="wb_Shape1" style="position:absolute; left:462px; top:271px; width:395px; height:339px; z-index:1;" align="center"><img src="images/img0001.gif" id="Shape1" align="top" alt="" title="" border="0" width="475" height="338" /></div>
     <div id="wb_Marquee1" style="position:absolute;left:524px;top:358px;width:325px;height:301px;z-index:15;" align="left">
     <div align="center">
       <marquee direction="up" height="202" scrolldelay="400" scrollamount="18" behavior="scroll" loop="0" style="" id="Marquee1" onmouseover="this.stop()" onmouseout="this.start()">
       <font style="font-size:11px" color="#FFFFFF" face="Arial">&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; </font><font style="font-size:11px" color="#000000" face="Arial"><br />
       <?PHP
	 require("config.php");
	$mero1="select * from systemtracer ;";
$leo=mysql_query($mero1);

$me="select * from systemtracer ;";
$le=mysql_query($me);
$k=mysql_num_rows($le);

if($k==0) {
?>
       <div id="printReady">
         <?php


echo"<table cellpadding='0' border='1' bordercolor='red' cellspacing='0' align='center' height='40' width='90%'><tr><td align='center'><b><font color='blue'> No New changes has being made since last Logout </font></b></td></tr></table> ";
}

while($mero=mysql_fetch_array($leo)) { 

?>
         <div id="printReady">
           <?php

echo " ".strtoupper("".$mero['change']."")."<a href='deletecourse.php?sn=".$mero['sn']."  '><img BORDER='0' width='10' height='10' src='images/DEL.png' alt='[DELETE]'/> </a> " ;
echo"<p>";


}
 ?>
         </div>
         <a href="javascript:void(printSpecial())"><img src="images/b_print.png" border="0" height="20" width="20" alt="[print]" /></a>
         <?php
	  ?>
         </font>
         </marquee>
       </div>
       <br />
       <a href="untitled.php?all=ok">[Delete All]</a>
       <?php   
	   
	   if($_GET['all']==ok){
	   
	   require("config.php");
 $query3="DELETE FROM systemtracer ";
	$result3=mysql_query($query3);
	echo "<script language='javascript'>
                alert('notification was deleted successfully');
				window.location='untitled.php';
                </script>";
		}
	   ?>
     </div>
<p></p>
     <div id="wb_MenuBar1" style="position:absolute; left:149px; top:121px; width:92px; height:22px; z-index:1001;">
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
