<?php
session_start();

require("config.php");
$babu="select date from systemDate where sn='1' ";
$resultii=mysql_query($babu);
$bibi=mysql_fetch_array($resultii);
$s=date("20y-m-d");
if ("".$bibi['date']."">$s)

{

 echo "<script language='javascript'>
                 alert('Please check your system date');
                 </script>";
				  echo "<script language='javascript'>" ; 
		echo " window.location=('index.php')";
						echo "</script>";
				 
}else {

$k=date("20y-m-d"); 

$n="update systemdate set date='$k' where sn='1'";;
 $nn=mysql_query($n);  

}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Login</title>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>AMUCTA SYSTEM</title>
<meta http-equiv="Page-Enter" content="revealTrans(Duration=1,Transition=12)">
<meta name="generator" content="WYSIWYG Web Builder - http://www.wysiwygwebbuilder.com">
<link rel="shortcut icon" href="login.ico">
<style type="text/css">

<link href="CSS/layout.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
body {
	background-color: #99CCFF;
}
.style2 {color: #FFFFFF}
.style3 {
	color: #FF3FFF;
	font-weight: bold;
}
.style4 {font-family: "Times New Roman", Times, serif}
.style7 {color: #FF0000}
.style8 {
	color: #000099
}
.style9 {color: #999999}
-->
</style>

</head>

<body st>
<div align="center">
  <table width="802" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <th width="4" height="84" scope="col">&nbsp;</th>
      <th colspan="2" scope="col"><img src="images/amuctabanner.jpg" alt="OUTERPIC" width="800" height="84" /></th>
    </tr>
    <tr>
      <td height="151" rowspan="2">&nbsp;</td>
      <td width="515" rowspan="2" bgcolor="#009900"><table width="512" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <th height="19" background="images/images/top_lef.gif" scope="col">&nbsp;</th>
          <th height="19" background="images/images/top_mid.gif" scope="col">&nbsp;</th>
          <th height="19" background="images/images/top_rig.gif" scope="col">&nbsp;</th>
        </tr>
        <tr>
          <td width="14" height="228" background="images/images/cen_lef.gif">&nbsp;</td>
          <td width="479" bgcolor="#669966"><table width="472" height="152" border="0" cellpadding="0" cellspacing="0">
            <tr>   <td width="472">  <div align="center" class="style2">AMUCTASIS
            </div></td>
            </tr>
            <tr>
               <td class="style3"><p align="center" class="style8">Archbishop Mihayo University College of Tabora </p>
                 <p align="center" class="style8"> Student Information System</p></td>
            </tr>
            <tr>
                <td>
                  <ul class="style7">
                    <p class="style2">Registered user should enter correct name and password.</p>
                    <p class="style2">This system  processes student's information.                     </p>
                    <p class="style9"><span class="style2"> Help and other functions will be displayed after login</span>. </p>
                    <p>&nbsp;                    </p>
                  </ul>            </td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>
                 <td height="19">&nbsp;</td>
            </tr>
            <tr>
             <td>&nbsp;</td>
            </tr>
            <tr>
              <td></span></td>
            </tr>
            <tr>
              <td bgcolor="#669966"><ul>
           <?php include("online.php")?>
                <!-- Start FreeOnlineUsers.com 

<font color=#000000><script type="text/javascript" src="http://st2.freeonlineusers.com/on3.php?id=1344436"> </script> Online Users</font>
<!-- End FreeOnlineUsers.com -->  
              </ul></td>
            </tr>
          </table></td>
          <td width="19" background="images/images/cen_rig.gif" bgcolor="#FFFFCC">&nbsp;</td>
        </tr>
        <tr>
          <td height="19" background="images/images/bot_lef.gif">&nbsp;</td>
          <td height="19" background="images/images/bot_mid.gif">&nbsp;</td>
          <td height="19" background="images/images/bot_rig.gif">&nbsp;</td>
        </tr>
      </table></td>
      <td width="283" bordercolor="#009900" bgcolor="#663300"><table width="281" height="156" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <th height="30" colspan="3" scope="col"><img src="images/1 top.jpg" width="282" height="36" /></th>
        </tr>
        <tr>
          <td width="5" height="38" background="images/6left.jpg">&nbsp;</td>
          <td width="272" background="images/3 center.jpg"><form action="index.php?action=send" method="post" name="login" id="login">
            <table width="206" height="85" border="0" cellpadding="0" cellspacing="0" align="center">
              <tr>
                <td width="83" height="28" align="center" valign="top"><b>Username</b></td>
                <td width="102" height="28" align="right" valign="top"><span class="style2"></span>

                      <div align="center">
                        <input type="text" size="17" name="username" id="username" />
                    </div></td><td width="21" height="28" valign="top" align="left"><img src="images/lock.png" width="21" height="21" /></td>
              </tr>
              <tr>
                <td width="83" height="31" valign="top" align="center"><b>Password</b></td>
                <td width="102" height="31" valign="top" align="right"><div align="left">
                    <input type="password" size="17" name="password" id="password"/>
                </div></td>
                <td width="21" height="31" valign="middle" align="left"><img src="images/key.png" width="16" height="12" align="top" /></td>
              </tr>
              <tr>
                <td width="83" height="24">&nbsp;</td>
                <td width="102" height="24" valign="middle" align="left"><input name="submit" type="submit"  value="login" /></td>
                <td width="21" height="24" valign="top" align="center">&nbsp;</td>
              </tr>
            </table>
          </form></td>
          <td width="4" background="images/6lright.jpg">&nbsp;</td>
        </tr>
        <tr>
          <td height="28" colspan="3"><img src="images/1 top2.jpg" width="281" height="35" /></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td bordercolor="#009900" bgcolor="#663300"><span class="style7">
        <?PHP require("counter.php");?>
        </span></td>
    </tr>
    <tr>
      <td height="148">&nbsp;</td>
      <td bgcolor="#669966">&nbsp;</td>
      <td bgcolor="#669966">&nbsp;</td>
    </tr>
  </table>
</div>
</div>
<tr width="1007" border="1"> 
<tr>
    <th scope="row"><div align="center" class="style3 style4"></div></th>
</tr>
</body>

<?php
require("config.php");
$username=($_POST['username']);
$password=($_POST['password']);

if($_GET['action']== "send"){

  if(empty($username) && !empty($password))
     {
	       echo "<script language='javascript'>
                 alert('Please enter the username');
                 </script>";
	 }elseif(empty($password) && !empty($username)){
	 		 echo "<script language='javascript'>
                 alert('Please enter the password');
                 </script>";
	 }elseif(empty($password) && empty($username)){
	 		 echo "<script language='javascript'>
                 alert('Please enter the username and password');
                 </script>";			 		   
	 }elseif(!empty($password) && !empty($username))
     {
	    
       $query=" SELECT * FROM master_user2 WHERE name='$username' and user_password=md5('$password')";
       $result=mysql_query($query);
       $count=mysql_num_rows($result);
	   
		   if($count==1)
		    {
				 $row=mysql_fetch_assoc($result);
			     session_register("USERREG");
				 session_register("USER");
				 session_register("GROUP");
				 $_SESSION['USER']=$row['name'];
				  $_SESSION['USERREG']=$row['id_no'];
				 $_SESSION['GROUP']=$row['group'];
		
				
				
					 If ($row['group'] == 'administrator')
					 {	  
					 
					  session_register("PNAME");
				 $_SESSION['PNAME']="administrator.php";
				  if(strlen($password)<6){
	     session_register("pas");
				 $_SESSION['pas']=$password;
				 
					     echo "<script language='javascript'>" ; 
		echo " window.location=('change.php')";
						echo "</script>";
						}else{
						session_register("pas");
				 $_SESSION['pas']=$password;
					     echo "<script language='javascript'>" ;
		echo"window.location=('administrator.php')";
		
						echo "</script>";}
						
					 }elseif ($row['group'] == 'dpaa')
					 {  
					 session_register("PNAME");
				 $_SESSION['PNAME']="principal.php";
				  if(strlen($password)<6){
	     session_register("pas");
				 $_SESSION['pas']=$password;
				 
					     echo "<script language='javascript'>" ; 
		echo " window.location=('change.php')";
						echo "</script>";
						}else
						{
						session_register("pas");
				 $_SESSION['pas']=$password;
					     echo "<script language='javascript'>" ; 
		echo " window.location=('principal.php')";
						echo "</script>";}
					 }elseif ($row['group'] == 'principal')
					
					 {  
					  session_register("PNAME");
				 $_SESSION['PNAME']="principalu.php";
				  if(strlen($password)<6){
	     session_register("pas");
				 $_SESSION['pas']=$password;
				 
					     echo "<script language='javascript'>" ; 
		echo " window.location=('change.php')";
						echo "</script>";
						}else{
						session_register("pas");
				 $_SESSION['pas']=$password;
					     echo "<script language='javascript'>" ; 
		echo " window.location=('principalu.php')";
						echo "</script>";}
						
					 }elseif ($row['group'] == 'student')
					 {   session_register("PNAME");
				 $_SESSION['PNAME']="studentmain.php";
				 
				 
				
	   if(strlen($password)<6){
	     session_register("pas");
				 $_SESSION['pas']=$password;
				 
					     echo "<script language='javascript'>" ; 
		echo " window.location=('change.php')";
						echo "</script>";
						}else
						{  
						session_register("pas");
				 $_SESSION['pas']=$password;
				 
				   echo "<script language='javascript'>" ; 
		echo " window.location=('studentmain.php')"; 
						echo "</script>";
						  }
					 }elseif ($row['group'] == 'registrar')
					 {  
					  session_register("PNAME");
				 $_SESSION['PNAME']="registrarmain.php";
				 
				  if(strlen($password)<6){
	     session_register("pas");
				 $_SESSION['pas']=$password;
				 
					     echo "<script language='javascript'>" ; 
		echo " window.location=('change.php')";
						echo "</script>";
						}else
						{
						session_register("pas");
				 $_SESSION['pas']=$password;
					     echo "<script language='javascript'>" ; 
		echo " window.location=('registrarmain.php')";
						echo "</script>";}
						
					 }elseif ($row['group'] == 'dean')
					 {  
					  session_register("PNAME");
				 $_SESSION['PNAME']="deans.php";
				  if(strlen($password)<6){
	     session_register("pas");
				 $_SESSION['pas']=$password;
				 
					     echo "<script language='javascript'>" ; 
		echo " window.location=('change.php')";
						echo "</script>";
						}else
						{
						session_register("pas");
				 $_SESSION['pas']=$password;
					     echo "<script language='javascript'>" ; 
		echo " window.location=('deans.php')";
						echo "</script>";}
						
					 }elseif ($row['group'] == 'staff')
					 {  
					  session_register("PNAME");
				 $_SESSION['PNAME']="staff.php";
				 
				  if(strlen($password)<6){
	     session_register("pas");
				 $_SESSION['pas']=$password;
				 
					     echo "<script language='javascript'>" ; 
		echo " window.location=('change.php')";
						echo "</script>";
						}else
						{
						session_register("pas");
				 $_SESSION['pas']=$password;
					     echo "<script language='javascript'>" ; 
		echo " window.location=('staff.php')";
						echo "</script>";}
					 }
				 
				
			}else
			{
			     
				 echo "<script language='javascript'>
                      alert('Wrong Username or Password');
                       </script>";
             }
		}
    }	 
   
?>
<?php 
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
?>

</html>