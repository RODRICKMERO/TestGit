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
     <div id="wb_JavaScript3" style="position:absolute; left:601px; top:74px; width:72px; height:21px; z-index:14;" align="left">
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
             <span class="style35"> Register student using CVS file </span>
             </marquee>
         </strong></td>
       </tr>
     </table>
     <hr align="center" width="77%" />
     <?php 
  require("config.php");
if(isset($_POST['submit']))
{
$query6="select * from master_user2 where (master_user2.id_no='".$_SESSION['USERREG']."') ;";
$q=mysql_query($query6);
$ngonyan=mysql_fetch_array($q);

mysql_error;

$filename=$_FILES['files']['name'] ;
$filename=date('U').$filename;
$add1 = "$filename";
move_uploaded_file($_FILES[files][tmp_name], $add1);
chmod($add1,0777);
basename($_FILES['files']['name'] );
$filename1="$filename";
$fcontents = file ($filename1);

for($i=1; $i<sizeof($fcontents); $i++) {

set_time_limit (0) ;

//echo "Total time lapsed = $t_lapsed";

$line = addslashes(trim($fcontents[$i]));
$arr = explode("\t", $line);
echo "<pre>";

$Repl_arr=array("[","]");

foreach($arr as $key=>$val)
{
$arr[$key]=str_replace($Repl_arr,"",$arr[$key]);
$arr_new=$arr[$key];
$arr_new1 = explode(",", $arr_new);


set_time_limit (0) ;
}
//echo "<PRE>";
//var_dump($arr_new1);



$id_no=$arr_new1[1];

$exnum=$arr_new1[2];


$cw =$arr_new1[3];

$fe=strtolower($arr_new1[4]);
$mero='student';
$query= "insert into registration values('$id_no','$exnum')";
$result=mysql_query($query);

if($result){
set_time_limit (0) ;
$query1="INSERT INTO student (exnum,cw,fe)
values('$exnum','$cw','$fe')";
$result1=mysql_query($query1);

//echo "-----------1 Row Inserted----------";

$query ."<br><br>\n";

if($query!=0)
$msg= "Data has been imported";
if(mysql_error()) {
$msg=mysql_error() ."<br>\n";
unlink($filename1);
unset($_POST);
$_POST['submit']='';
$_POST='';


}


 

 //echo $msg;
}
}

 /*echo "<script language='javascript'>
                alert('$msg;');
				window.location='uploadstudent.php';
                </script>";
*/
}
?>
     <form action="" name="" method="post" enctype="multipart/form-data">
       <table width="55%" border="1">
         <tr>
           <td width="30%" class="line2">File Name:</td>
           <td width="70%" align="left" class="line2"><input name="files" type="file" class="inp" /></td>
         </tr>
         <tr>
           <td class="line2">&nbsp;</td>
           <td align="left" valign="middle" class="line2">&nbsp;</td>
         </tr>
         <tr>
           <td class="line2">&nbsp;</td>
           <td align="left" valign="middle" class="line2"><input name="submit" type="submit" class="buttons" value="Submit" /></td>
         </tr>
       </table>
     </form>
     <p></p>
     <div align="center"><span class="style2">Example of How to format Excell Data entiry Sheet</span> <br />
       <table width="54%"  border="1" cellspacing="0" cellpadding="0">
         <tr>
           <td width="7%"><div align="center">S/N</div></td>
            <td width="18%"><div align="center">REG No </div></td>
           <td width="20%"><div align="center">Exam Number </div></td>
           <td width="18%"><div align="center">Course Work </div></td>
           <td width="21%"><div align="center">Final Exam </div></td>
         </tr>
         <tr>
           <td><div align="center">1</div></td>
           <td><div align="center">OD/T/2015</div></td>
           <td><div align="center">400345</div></td>
           <td><div align="center">20</div></td>
           <td><div align="center">50</div></td>
         </tr>
                </table>
     </div>
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
</body>
</html>
