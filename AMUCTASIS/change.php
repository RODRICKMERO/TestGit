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
   <td width="192" align="right" height="470" bgcolor="#999998" valign="top"><ul id="nav2">
               
                <li><?php 
		
	   $bb=strlen("".$_SESSION['pas']."");
	if($bb>=6){
	   
				
				echo"<li><a href='".$_SESSION['PNAME']."'>Home</a></li>"; 
				 }?></li>
               
        </ul>  </td>
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
      
    
     <table width="408" border="0" cellspacing="0" cellpadding="0">
       <tr>
         <td width="425" height="29"><strong>
           <marquee>
             <span class="style35">CHANGE PASSWORD </span>
             </marquee>
         </strong></td>
       </tr>
     </table>
     <hr align="center" width="77%" />
     <form id="form1" name="form1" method="post" action="change.php">
       <div align="center">
         <table width="446" height="147" border="0" cellpadding="2">
           <tr>
             <td width="138" height="33"><label> </label>
               <div align="left"><b>Username </b></div></td>
             <td width="8">&nbsp;</td>
             <td width="283" align="left"><span id="sprytextfield1">
               <?php 
         echo "<input name='username' type='text' id='textfield' value='".$_SESSION['USER']."'  size='35' disabled='disabled' >";
		  ?>
               <span class="textfieldRequiredMsg">Avalue is required.</span></span></td>
</tr>


 <tr>
             <td height="34"><div align="left"><b>Old Password</b></div></td>
             <td>&nbsp;</td>
             <td align="left"><span id="sprytextfield4">
               <label>
                 <input name="password2" type="password" id="textfield4" />
                 </label>
               <span class="textfieldRequiredMsg">A value is required.</span></span></td>
</tr>

           <tr>
             <td height="34"><div align="left"><b>New Password</b></div></td>
             <td>&nbsp;</td>
             <td align="left"><span id="sprytextfield2">
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
             <td align="left"><?php
  $username=($_POST['username']);
   $passwor=$_POST['password'];
  $password= md5($_POST['password']);
  $password2= md5($_POST['password2']);
  $password1=md5($_POST['password1']);
  require("config.php");
 if( $_POST['save'] )
    {
		$D=strlen($passwor);
		
		$query12="SELECT * FROM master_user2 WHERE id_no='".$_SESSION['USERREG']."' and user_password='$password2'";
       $result12=mysql_query($query12);
       $counti=mysql_num_rows($result12);
	   if($counti<=0){
	   echo "<img src='images/alert.png' width='15' height='15'>&nbsp;&nbsp;<strong style='color:red'>Your old password is not correct!Retry</strong>";
	   }
	   
	   
	elseif($password != $password1){
	echo "<img src='images/alert.png' width='15' height='15'>&nbsp;&nbsp;<strong style='color:red'>Password Mismatch!Retry</strong>";
	}elseif($D<6){
	echo "<img src='images/alert.png' width='15' height='15'>&nbsp;&nbsp;<strong style='color:red'>Password must be aleast 6 character!Retry</strong>";
	}
	else{
         $query1=" UPDATE master_user2 SET user_password='$password'   WHERE id_no='".$_SESSION['USERREG']."' ;";
         $counta=mysql_query($query1);
		 session_register("pas");
				 $_SESSION['pas']=$password;
		 if(!$counta){
		 echo "<img src='images/ok.png'>  Updated not performed ";
		 }else{
		  
         echo "<img src='images/ok.png'>  Updated Successifuly";
         }
 }}
 ?></td>
           </tr>
         </table>
         <p>&nbsp;</p>
         <hr width="50%" />
         <table width="446" height="147" border="0" cellpadding="2">
         
         </table>
       </div>
     </form>
     <p align="center">&nbsp; </p>
     <div id="printReady"></div>
     <p></p>
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
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4", "none", {validateOn:["change"]});
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "none", {validateOn:["change"]});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "none", {validateOn:["change"]});
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {validateOn:["change"]});
//-->
</script>
</body>
</html>
