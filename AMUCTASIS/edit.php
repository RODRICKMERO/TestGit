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
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
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
     <div id="wb_JavaScript3" style="position:absolute; left:601px; top:74px; width:72px; height:21px; z-index:14;" align="left">
       <div style="color:#FF0000;font-size:12px;font-family:Agency FB;" id="basicclock2"></div>
       <script type="text/javascript">

      </script>
       <?php echo "<B style='color:red'>".ucwords("".$_SESSION['USER']."")."</B>"; ?></div>
     <p align="center">&nbsp; </p>
     <table width="408" border="0" cellspacing="0" cellpadding="0">
       <tr>
         <td width="425" height="29"><strong>
           <marquee>
             <span class="style35"> EDIT STUDENTS PASSWORD</span>
             </marquee>
         </strong></td>
       </tr>
     </table>
     <hr align="center" width="77%" />
     <br />
     <div align="center">
       <form action="" method="post" name="registration" id="registration">
         <table width="563">
           <tr>
             <td width="236" height="35" valign="top" align="center"><strong>Student regNo: </strong></td>
             <td width="291" height="35" valign="top" align="right"><div align="left"> <span id="sprytextfield2">
               <label>
                 <input type="text" name="dent_reg" size="20" id="dent_reg" />
                 </label>
               <span class="textfieldRequiredMsg">Avalue is required.</span></span> </div></td>
  </tr>
           <tr>
             <td height="45"><div align="justify">
               <table width="236" height="38" border="0">
                 <tr>
                   <td width="107" height="24"><div align="right">
                     <input type="submit" name="submit" value="search" />
                   </div></td>
                 </tr>
               </table>
             </div></td>
           </tr>
         </table>
</form>
       <script type="text/javascript">
<!--
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "none", {validateOn:["change"]});
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4", "none", {validateOn:["change"]});
//-->
//-->
        </script>
       <form action="student.php" method="post" name="registration">
         <table width="563">
           <tr> </tr>
           <tr> </tr>
           <tr> </tr>
         </table>
       </form>
     </div>
     <p></p>
     <p align="center">
       <script type="text/javascript">
<!--
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "none", {validateOn:["change"]});
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4", "none", {validateOn:["change"]});
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5", "none", {validateOn:["change"]});
//-->
       </script>
     </p><?php 
	 if($_POST['submit']){
	 require("config.php");
	 
	 $id_num=$_REQUEST['dent_reg'];
		  $queryk=" SELECT * FROM master_user2 WHERE id_no='$id_num'";
       $resultk=mysql_query($queryk);
	 $ary=mysql_fetch_array( $resultk);
	  session_register("userid");
				 $_SESSION['userid']="$id_num";
	 ?>
     <form id="form1" name="form1" method="post" action="">
       <div align="center">
         <table width="446" height="147" border="0" cellpadding="2">
           <tr>
             <td width="138" height="33"><label> </label>
                 <div align="left"><b>Username </b></div></td>
             <td width="8">&nbsp;</td>
             <td width="283" align="left"><span id="sprytextfield1">
               <?php 
         echo "<input name='username' type='text' id='textfield' value='".$ary['name']."'  size='35' disabled='disabled' >";
		  ?>
               <span class="textfieldRequiredMsg">Avalue is required.</span></span></td>
           </tr>
           <tr>
             <td height="34"><div align="left"><b>New Password</b></div></td>
             <td>&nbsp;</td>
             <td align="left"><span id="sprytextfield">
               <label>
               <input name="password" type="password" id="textfield2" />
               </label>
               <span class="textfieldRequiredMsg">A value is required.</span></span></td>
           </tr>
           <tr>
             <td height="32" align="left"><b>Retype Password</b></td>
             <td>&nbsp;</td>
             <td align="left"><span id="sprytextfield3">
               <label>
               <input type="password" name="password1" id="textfield" />
               </label>
               <span class="textfieldRequiredMsg">A value is required.</span></span></td>
           </tr>
           <tr>
             <td height="32">&nbsp;</td>
             <td>&nbsp;</td>
             <td align="left"><label>
               <input type="submit" name="save" id="button" value="Save Changes" />
             </label></td>
           </tr>
           <tr>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td align="left"></td>
           </tr>
</table>
         <p>&nbsp;</p>
         <hr width="50%" />
         <table width="446" height="147" border="0" cellpadding="2">
         </table>
         <table width="446" height="147" border="0" cellpadding="2">
         </table>
       </div>
     </form>
     
     <?php 
	}
	 
 if( $_POST['save'] )
    {
	$passwor=$_POST['password'];
  $password= md5($_POST['password']);
  $password1=md5($_POST['password1']);
  require("config.php");
  
		$D=strlen($passwor);
	if($password != $password1){
	echo "<img src='images/alert.png' width='15' height='15'>&nbsp;&nbsp;<strong style='color:red'>Password Mismatch!Retry</strong>";
	}elseif($D<6){
	echo "<img src='images/alert.png' width='15' height='15'>&nbsp;&nbsp;<strong style='color:red'>Password must be aleast 6 character!Retry</strong>";
	}
	else{
         $query1=" UPDATE master_user2 SET user_password='$password'   WHERE id_no='".$_SESSION['userid']."' ;";
         $counta=mysql_query($query1);
		 if(!$counta){
		 echo "<img src='images/ok.png'>  Updated not performed ";
		 }else{
         echo "<img src='images/ok.png'>  Updated Successifuly";
         }
 }}
 ?>
     <div id="wb_MenuBar1" style="position:absolute; left:141px; top:121px; width:92px; height:22px; z-index:1001;">
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
<script type="text/javascript">
<!--
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "none", {validateOn:["change"]});
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "none", {validateOn:["change"]});
var sprytextfield = new Spry.Widget.ValidationTextField("sprytextfield", "none", {validateOn:["change"]});
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {validateOn:["change"]});
//-->
</script>
</body>
</html>
