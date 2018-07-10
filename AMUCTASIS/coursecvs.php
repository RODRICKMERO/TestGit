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
<!--Progress Bar and iframe Styling-->
<link href="style_progress.css" rel="stylesheet" type="text/css" />

<!--Get jQuery-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.0/jquery.js" type="text/javascript"></script>


<!--display bar only if file is chosen-->
<script>

$(document).ready(function() { 
//

//show the progress bar only if a file field was clicked
	var show_bar = 0;
    $('input[type="file"]').click(function(){
		show_bar = 1;
    });

//show iframe on form submit
    $("#form1").submit(function(){

		if (show_bar === 1) { 
			$('#upload_frame').show();
			function set () {
				$('#upload_frame').attr('src','upload_frame.php?up_id=<?php echo $up_id; ?>');
			}
			setTimeout(set);
		}
    });
//

});

</script>

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
             <span class="style35">UPLOAD COURSE USING CSV </span>
             </marquee>
         </strong></td>
       </tr>
     </table>
     <br />
     <?php 
  require("config.php");
//get unique id
$up_id = uniqid(); 

if(isset($_POST['submit']))
{ sleep(26);
$query6="select * from master_user2 where (master_user2.id_no='".$_SESSION['USERREG']."') ;";
$q=mysql_query($query6);
$ngonyan=mysql_fetch_array($q);



$quer= "INSERT INTO systemtracer values('','".date("20y-m-d")."',' STUDENT WAS  REGISTERED IN THE SYSTEM BY ".$ngonyan['name']." WHO IS ".$ngonyan['group']." WITH REGISTRATION  ".$_SESSION['USERREG']." IN ".date("20y-m-d")." at ".time("h:m:s")."')";
$resul=mysql_query($quer);
$quer= "INSERT INTO systemtracer2 values('','".date("20y-m-d")."',' STUDENT WAS  REGISTERED IN THE SYSTEM BY ".$ngonyan['name']." WHO IS ".$ngonyan['group']." WITH REGISTRATION  ".$_SESSION['USERREG']." IN ".date("20y-m-d")." at ".time("h:m:s")."')";
$resul=mysql_query($quer);
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
$line = addslashes(trim($fcontents[$i]));
$arr = explode("\t", $line);
echo "<pre>";

$Repl_arr=array("[","]");

foreach($arr as $key=>$val)
{
set_time_limit (0) ;
$arr[$key]=str_replace($Repl_arr,"",$arr[$key]);
$arr_new=$arr[$key];
$arr_new1 = explode(",", $arr_new);



}
//echo "<PRE>";
//var_dump($arr_new1);



$code=$arr_new1[1];

$cosname=$arr_new1[2];


$unit =$arr_new1[3];

$year=$arr_new1[4];
$semeste=$arr_new1[5];
$comment=$arr_new1[6];

$semester=strtolower($semeste);


$query5= "select * from staff_faculty where (staff_faculty.id_no='".$_SESSION['USERREG']."');";
$query5=mysql_query($query5);
$ngonyani=mysql_fetch_array($query5);

$query6="select * from master_user2 where (master_user2.id_no='".$_SESSION['USERREG']."');";
$q=mysql_query($query6);
$ngonyan=mysql_fetch_array($q);



$query9= "INSERT INTO courses values('$code','".$ngonyani['faculty']."','$cosname','$unit','$year','$semester','$comment')";
$result1=mysql_query($query9);
$query = "INSERT INTO upload_course VALUES ('$code','','','','')";
mysql_query($query);

if ($result1){
$quer= "INSERT INTO systemtracer values('','".date("20y-m-d")."','$code   $cosname WAS ADED IN THE SYSTEM BY THE DEAN OF FACULTY OF ".$ngonyani['faculty']."  WITH THE NAME ".$ngonyan['name']." AND ".$_SESSION['USERREG']." REGSRATION NUMBER IN ".date("20y-m-d")." at ".time("h:m:s")."')";
$resul=mysql_query($quer);
mysql_error;
$redirect = "location='coursecvs.php?success";
}

}
/*echo "<script language='javascript'>
                alert('uploaded succsesiful;');
				window.location='coursecvs.php';
                </script>";*/
			


}
?>
 <?php if (isset($_GET['success'])) { ?>
  <span class="notice">Your file has been uploaded.</span>
  <?php } ?>
     <form action="" name="" method="post" enctype="multipart/form-data">
       <table width="55%" border="1">
         <tr>
           <td width="30%" class="line2">File Name:</td>
           
           <td width="70%" align="left" class="line2">
           <!--APC hidden field-->
    <input type="hidden" name="APC_UPLOAD_PROGRESS" id="progress_key" value="<?php echo $up_id; ?>"/>
<!---->
           <input name="files" type="file" class="inp" />
           <!--Include the iframe-->
    <br />
    <iframe id="upload_frame" name="upload_frame" frameborder="0" border="0" src="" scrolling="no" scrollbar="no" > </iframe>
    <br />
<!----></td>
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
     <div align="center"><span class="style2">Example of How to format Excel Data entiry Sheet</span> <br />
       <table width="54%"  border="1" cellspacing="0" cellpadding="0">
         <tr>
           <td width="7%"><div align="center">S/N</div></td>
           <td width="16%"><div align="center">C_CODE</div></td>
           <td width="18%"><div align="center">C_NAME</div></td>
           <td width="20%"><div align="center"> UNIT </div></td>
           <td width="18%"><div align="center">YEAR</div></td>
           <td width="10%"><div align="center">SEMESTER </div></td>
           <td width="11%">COMMENT</td>
         </tr>
         <tr>
           <td><div align="center">1</div></td>
           <td><div align="center">RMT100</div></td>
           <td><div align="center">SOSIAL</div></td>
           <td><div align="center">3</div></td>
           <td><div align="center">1 </div></td>
           <td><div align="center">II</div></td>
           <td><div align="center">OPTION</div></td>
         </tr>
         <tr>
           <td><div align="center">2</div></td>
           <td><div align="center">LG100</div></td>
           <td><div align="center">DIST</div></td>
           <td><div align="center">2</div></td>
           <td><div align="center">2</div></td>
           <td><div align="center">I</div></td>
           <td><div align="center">CORE</div></td>
         </tr>
       </table>
     </div>
     <p align="center">&nbsp;</p>
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
