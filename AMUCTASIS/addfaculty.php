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
             <span class="style46">PRINCIPAL MAIN WINDOW</span>
             </marquee>
         </strong></td>
       </tr>
     </table>
     <hr align="center" width="77%" />
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
     <?php
require("config.php");
 if($_GET['editda']){
 require("config.php");
 
	 $d_name=strtolower($_POST['d_name']);
	 $d_description=strtolower($_POST['d_description']);
	 $f_name=strtolower($_POST['f_name']);
	 
	 $query="update departiment set d_description='$d_description' where d_name='".$_SESSION['D_NAME']."'";
	$resulty=mysql_query($query);
	
	$query1="update departiment set f_name='$f_name' where d_name='".$_SESSION['D_NAME']."'";
	$resulty1=mysql_query($query1);
	
	$query2="update departiment set d_name='$d_name' where d_name='".$_SESSION['D_NAME']."'";
	$resulty2=mysql_query($query2);
	
$query6="select * from master_user2 where (master_user2.id_no='".$_SESSION['USERREG']."') ;";
$q=mysql_query($query6);
$ngonyan=mysql_fetch_array($q);

	
$quer= "INSERT INTO systemtracer2 values('','".date("20y-m-d")."','DEPARTIMENT ".$_SESSION['D_NAME']." WAS ALTERED TO $d_name BY ".$ngonyan['name']." WHO IS ".$_SESSION['GROUP']." IN ".date("20y-m-d")." at ".time("h:m:s")."')";
$resul=mysql_query($quer);
mysql_error;

	

	
if($resulty){
	  
				 echo "<script language='javascript'>
                      alert('Departiment updated Successful');
                       </script>";
					   
					   echo "<script language='javascript'>" ; 
		echo " window.location=('addfaculty.php?ed=ok')";
						echo "</script>";
	 
	 }else
	 {
	 
	 echo "<script language='javascript'>
                      alert('Departiment can't be updated Added Thankyou');
                       </script>";
	  echo "<script language='javascript'>" ; 
		echo " window.location=('addfaculty.php?ed=ok')";
						echo "</script>";
	 }
	 }?>
     <?php
require("config.php");
 if($_GET['editfa']){
 require("config.php");
 
	 $f_name=strtolower($_POST['f_name']);
	 
	 $f_description=strtolower($_POST['f_description']);
	 
	 $query61="select d_name from departiment where (f_name='".$_SESSION['F_NAME']."') ;";
$qu=mysql_query($query61);
$rs=mysql_num_rows($qu);
	$query21="update departiment set f_name='$f_name' where f_name='".$_SESSION['F_NAME']."'";
	$resulty21=mysql_query($query21);
	
	 $query="update faculty set f_description='$f_description' where f_name='".$_SESSION['F_NAME']."'";
	$resulty=mysql_query($query);
	
	
	$query2="update faculty set f_name='$f_name' where f_name='".$_SESSION['F_NAME']."'";
	$resulty2=mysql_query($query2);
	
	
$query6="select * from master_user2 where (master_user2.id_no='".$_SESSION['USERREG']."') ;";
$q=mysql_query($query6);
$ngonyan=mysql_fetch_array($q);

	$quer= "INSERT INTO systemtracer2 values('','".date("20y-m-d")."','FACULTY ".$_SESSION['F_NAME']." WAS ALTERED TO $f_name BY ".$ngonyan['name']." WHO IS ".$_SESSION['GROUP']." IN ".date("20y-m-d")." at ".time("h:m:s")."')";
$resul=mysql_query($quer);



	
	
	
if($resulty){
	  
				 echo "<script language='javascript'>
                      alert('Faculty updated Successful $rs');
                       </script>";
					   
					   echo "<script language='javascript'>" ; 
		echo " window.location=('addfaculty.php?ef=ok')";
						echo "</script>";
	 
	 }else
	 {
	 
	 echo "<script language='javascript'>
                      alert('Faculty can't be Added Thankyou');
                       </script>";
	  echo "<script language='javascript'>" ; 
		echo " window.location=('addfaculty.php?ef=ok')";
						echo "</script>";
	 }
	 }
	 
	 if($_GET['editf']){
	  $f_name=strtolower($_REQUEST['editf']);
	  require("config.php");
	   $query="select*from faculty where faculty.f_name='$f_name'";
			 $resulty=mysql_query($query);
		while($m=mysql_fetch_array($resulty)){
			 
		
		
		echo'<form name="submiti" action="addfaculty.php?editfa=ok" id="me" method="post">
		
		<table width="563">
           
           <tr>
             <td width="236" height="35" align="center" valign="top"><strong>FACULTY NAME </strong></td>
             <td width="293" height="35" align="right" valign="top"><div align="left"> <span id="sprytextfield1">
                 <label>';
                 ?>
     <input type="text" name="f_name" size="20" id="f_name" value='<?php echo $m['f_name'];?>' />
     <?php
				  session_register("F_NAME");
				   $_SESSION['F_NAME']=$m['f_name'];
				 
				 
                 echo'</label>
              <span class="textfieldRequiredMsg">Avalue is required.</span></span> </div></td>
            </tr>
           <tr>
             <td width="236" height="35" valign="top" align="center"><strong>DESCRIPTION</strong></td>
             <td width="293" height="35" valign="top" align="right"><div align="left"> <span id="sprytextfield2">
                 <label>';
				 ?>
     <input type="text" name="f_description" size="20" id="f_description" value='<?php echo $m['f_description'];?>' />
     <?php echo'</label>
              <span class="textfieldRequiredMsg">Avalue is required.</span></span> </div></td>
            </tr>
                   <tr>
                     <td width="114"><div align="right">
                          <input type="submit" name="submit" value="save" />
                     </div></td>
                   </tr>
                 </table>';
	   
	   }
	   
	  echo'</form>';
	
	   }
	  
	   ?>
     <?php  
	   
	   
	   
	    if($_GET['editd']){
	  $d_name=strtolower($_REQUEST['editd']);
	  require("config.php");
	   $query="select*from departiment where departiment.d_name='$d_name'";
			 $resulty=mysql_query($query);
		while($m=mysql_fetch_array($resulty)){
			 
		
		
		echo'<form name="submiti" action="addfaculty.php?editda=ok" id="me" method="post">
		
		<table width="563">
           
           <tr>
             <td width="236" height="35" align="center" valign="top"><strong>DEPARTMENT NAME </strong></td>
             <td width="293" height="35" align="right" valign="top"><div align="left"> <span id="sprytextfield1">
                 <label>';
				 ?>
     <input type="text" name="d_name" size="20" id="d_name"  value='<?php echo $m['d_name'];?>' />
     <?php echo'</label>';
				  
				  session_register("D_NAME");
				   $_SESSION['D_NAME']=$m['d_name'];
				 
		
              echo'<span class="textfieldRequiredMsg">Avalue is required.</span></span> </div></td>
            </tr>
           <tr>
             <td width="236" height="35" valign="top" align="center"><strong>FACUTY</strong></td>
             <td width="293" height="35" valign="top" align="right"><div align="left">';
			 
			 require("config.php");
			 $query="select * from faculty";
			 $resulty=mysql_query($query);
			 
			 $quer="select * from faculty";
			 $result=mysql_query($quer);
			 $n=mysql_num_rows($result);
			 if ($n==0){
			 
			  echo "<script language='javascript'>
                      alert('NO REGISTERED FACULTY PLEASE ADD FACULTY FIRST!');
                       </script>";
	  echo "<script language='javascript'>" ; 
		echo " window.location=('addfaculty.php?f=ok')";
						echo "</script>";
			 }
			 $k=1;
			 
			 
              echo" <select name='f_name'>";
			   while($mero=mysql_fetch_array($resulty)){
			   if($k==1){
                 echo "<option value='".$mero['f_name']."' selected='selected'><b>".strtoupper("".$mero['f_name']."")."</b></option>";
				 $k++;
				 }else {
                 echo"<option value='".$mero['f_name']."'>".strtoupper("".$mero['f_name']."")."</option>";
				 }
                 }
              echo" </select>";
			 
            echo'</div></td>
            </tr>
           <tr>
             <td width="236" height="26" valign="top" align="center"><strong>DESCRIPTION</strong></td>
             <td><div align="left">
               <div align="left"> <span id="sprytextfield2">
                 <label>';
				 ?>
     <input type="text" name="d_description" size="20" id="d_description" value='<?php echo $m['d_description'];?>'/>
     <?php echo'</label>
                 <span class="textfieldRequiredMsg">Avalue is required.</span></span> </div>
             </div></td>
            </tr>
                   <tr>
                     <td width="124"><div align="right">
                         <input type="submit" name="submit" value="send" />
                    </div></td>
                   </tr>
                 </table>';
		
	   
	   }
	  
	  echo"</form>";
	 
	   }
	  
	   ?>
     <?php
	 if ($_GET['f']==ok){
	
	 
       echo'<form action="addfaculty.php?f1=ok" method="post" name="f1" id="f1">
         <table width="563">
           
           <tr>
             <td width="236" height="35" align="center" valign="top"><strong>FACULTY NAME </strong></td>
             <td width="293" height="35" align="right" valign="top"><div align="left"> <span id="sprytextfield1">
                 <label>
                 <input type="text" name="f_name" size="20" id="f_name" />
                 </label>
              <span class="textfieldRequiredMsg">Avalue is required.</span></span> </div></td>
            </tr>
           <tr>
             <td width="236" height="35" valign="top" align="center"><strong>DESCRIPTION</strong></td>
             <td width="293" height="35" valign="top" align="right"><div align="left"> <span id="sprytextfield2">
                 <label>
                 <input type="text" name="f_description" size="20" id="f_description" />
                 </label>
              <span class="textfieldRequiredMsg">Avalue is required.</span></span> </div></td>
            </tr>
           
           
           <tr>
             <td height="45"><div align="justify">
                 <table width="236" height="38" border="0">
                   <tr>
                     <td width="114"><div align="right">
                          <input type="submit" name="submit" value="send" />
                     </div></td>
                   </tr>
                 </table>
             </div></td>
           </tr>
           <tr>
             <td>&nbsp;</td>
           </tr>
         </table>
       </form>';
	  
	   }elseif ($_GET['d']==ok)
	   
	   {
	  
	   
      echo' <form action="addfaculty.php?d1=ok" method="post" name="d1" id="d1">
         <table width="563">
           
           <tr>
             <td width="236" height="35" align="center" valign="top"><strong>DEPARTMENT NAME </strong></td>
             <td width="293" height="35" align="right" valign="top"><div align="left"> <span id="sprytextfield1">
                 <label>
                 <input type="text" name="d_name" size="20" id="d_name" />
                 </label>
              <span class="textfieldRequiredMsg">Avalue is required.</span></span> </div></td>
            </tr>
           <tr>
             <td width="236" height="35" valign="top" align="center"><strong>FACUTY</strong></td>
             <td width="293" height="35" valign="top" align="right"><div align="left">';
			 
			 require("config.php");
			 $query="select * from faculty";
			 $resulty=mysql_query($query);
			 
			 $quer="select * from faculty";
			 $result=mysql_query($quer);
			 $n=mysql_num_rows($result);
			 if ($n==0){
			 
			  echo "<script language='javascript'>
                      alert('NO REGISTERED FACULTY PLEASE ADD FACULTY FIRST!');
                       </script>";
	  echo "<script language='javascript'>" ; 
		echo " window.location=('addfaculty.php?f=ok')";
						echo "</script>";
			 }
			 $k=1;
			 
			 
              echo" <select name='f_name'>";
			   while($mero=mysql_fetch_array($resulty)){
			   if($k==1){
                 echo "<option value='".$mero['f_name']."' selected='selected'><b>".strtoupper("".$mero['f_name']."")."</b></option>";
				 $k++;
				 }else {
                 echo"<option value='".$mero['f_name']."'>".strtoupper("".$mero['f_name']."")."</option>";
				 }
                 }
              echo" </select>";
			
             echo'</div></td>
            </tr>
           <tr>
             <td width="236" height="26" valign="top" align="center"><strong>DESCRIPTION</strong></td>
             <td><div align="left">
               <div align="left"> <span id="sprytextfield2">
                 <label>
                 <input type="text" name="d_description" size="20" id="d_description" />
                 </label>
                 <span class="textfieldRequiredMsg">Avalue is required.</span></span> </div>
             </div></td>
            </tr>
           
           <tr>
             <td height="45"><div align="justify">
                 <table width="236" height="38" border="0">
                   <tr>
                     <td width="124"><div align="right">
                         <input type="submit" name="submit" value="send" />
                     </div></td>
                   </tr>
                 </table>
             </div></td>
           </tr>
           <tr>
             <td>&nbsp;</td>
           </tr>
         </table>
        </form>';
	   
	   
	   
	   
	   }elseif($_GET['ef']==ok){
	   
	   $a=1;
	         require("config.php");
			 $query="select * from faculty";
			 $resulty=mysql_query($query);
			 
			 $quer="select * from faculty";
			 $result=mysql_query($quer);
			 $n=mysql_num_rows($result);
			 if ($n==0){
			 
			  echo "<script language='javascript'>
                      alert('NO REGISTERED FACULTY PLEASE ADD FACULTY FIRST!');
                       </script>";
	  echo "<script language='javascript'>" ; 
		echo " window.location=('addfaculty.php?f=ok')";
						echo "</script>";
			 }else
			 
			 {
			
			 
echo"<form name=form1 method='post' action=''>";



echo '<table align="center" width="70%" border="1" cellpadding="0" cellspacing="0" bordercolor="#66cccc">';
echo "<tr bgcolor='#6699CC'><th >FACULTY NAME:</th><th>DESCRIPTON:</th><th >DEL/EDIT</th></tr>";
while($mero=mysql_fetch_array($resulty)){
			  
			  
			       if($a==1)
			 {
			   
echo "<tr bgcolor='#ffdfaa'><td>".strtoupper("".$mero['f_name']."")."</td><td>".ucwords("".$mero['f_description']."")."</td><td>";?>
     <input name="checkbox[]" type="checkbox" id="checkbox[]"  class="case"  value="<?php echo $mero['f_name'];?>" />
     <a href="addfaculty.php?editf=<?php echo $mero['f_name']; ?>" ><img src="images/b_edit.png" width="10" height="10" border="white" alt="[edit]" /></a><?php echo"</td></tr>";?>
     <?php 
			  $a="2"; 			  
			 }
           else
              {
			    
				
echo "<tr bgcolor='#EEEEEE'><td>".strtoupper("".$mero['f_name']."")."</td><td>".ucwords("".$mero['f_description']."")."</td><td>";?>
     <input name="checkbox[]" type="checkbox" id="checkbox[]"  class="case"  value="<?php echo $mero['f_name'];?>" />
     <a href="addfaculty.php?editf=<?php echo $mero['f_name'];?>"><img src="images/b_edit.png" width="10" height="10" border="white" alt="[edit]" /></a><?php echo"</td></tr>";?>
     <?php
			  $a="2"; 			  	
				 $a="1";
							  
			 
              }
			  
			  
			  }
			  
			  
	
			echo'<tr>
<td align="center" bgcolor="#FFFFFF" cellpadding="">select all<input type="checkbox" id="selectall"/></td>';
	
echo"<td colspan='2'align='center'bgcolor='#FFFFFF'><input name='delete' type='submit' value='Delete'></td>
</tr>";


// Check if delete button active, start this 
	  
require("config.php");			  	
$delete=$_POST['delete'];
$checkbox=$_POST['checkbox'];

if($delete){

$query6="select * from master_user2 where (master_user2.id_no='".$_SESSION['USERREG']."') ;";
$q=mysql_query($query6);
$ngonyan=mysql_fetch_array($q);



$quer= "INSERT INTO systemtracer2 values('','".date("20y-m-d")."',' FACULTY WAS  DELETED BY ".$ngonyan['name']." WHO IS ".$ngonyan['group']." WITH REGISTRATION  ".$_SESSION['USERREG']." IN ".date("20y-m-d")." at ".time("h:m:s")."')";
$resul=mysql_query($quer);
mysql_error;



for($i=0;$i<$n;$i++){
$del_id = $checkbox[$i];


$query3="DELETE FROM faculty WHERE (faculty.f_name='$del_id')";
 $result3=mysql_query($query3);
 
	$query4="DELETE FROM departiment WHERE (departiment.f_name='$del_id')";
	
	$result4=mysql_query($query4);
   

	

}


// if successful redirect to delete_multiple.php 
if($result3){
echo "<script language='javascript'>
                alert('Faculty was deleted succesful');
				window.location='addfaculty.php?ef=ok';
                </script>";

}else
{

echo "<script language='javascript'>
                alert('Query unsucsesful');
				window.location='addfaculty.php?ef=ok';
                </script>";
}

}
mysql_close();


echo'</form></table>';
  		 
			 }
	   
	   
	   
	   
	   
	   
	   
	   }
	   
	   
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  elseif($_GET['ed']==ok){
	   
	   $a=1;
	         require("config.php");
			 $query="select * from departiment";
			 $resulty=mysql_query($query);
			 
			 $quer="select * from departiment";
			 $result=mysql_query($quer);
			 $na=mysql_num_rows($result);
			 if ($na==0){
			 
			  echo "<script language='javascript'>
                      alert('NO REGISTERED DEPARTIMENT PLEASE ADD DEPARTIMENT FIRST!');
                       </script>";
	  echo "<script language='javascript'>" ; 
		echo " window.location=('addfaculty.php?d=ok')";
						echo "</script>";
			 }else
			 
			 {
			 
			 
echo"<form name=form2 method='post' action=''>";



echo '<table align="center" width="70%" border="1" cellpadding="0" cellspacing="0" bordercolor="#66cccc">';
echo "<tr bgcolor='#6699CC'><th >DEPARTIMENT NAME:</th><th >FACULTY NAME:</th><th>DESCRIPTON:</th><th >DEL/EDIT</th></tr>";
while($mero=mysql_fetch_array($resulty)){
			  
			  
			       if($a==1)
			 {
			   
echo "<tr bgcolor='#ffdfaa'><td>".strtoupper("".$mero['d_name']."")."</td><td>".strtoupper("".$mero['f_name']."")."</td><td>".ucwords("".$mero['d_description']."")."</td><td>";?>
     <input name="checkbox[]" type="checkbox" id="checkbox[]"  class="case"  value="<?php echo $mero['d_name'];?>" />
     <a href="addfaculty.php?editd=<?php echo $mero['d_name']; ?>" ><img src="images/b_edit.png" width="10" height="10" border="white" alt="[edit]" /></a><?php echo"</td></tr>";?>
     <?php 
			  $a="2"; 			  
			 }
           else
              {
			    
				
echo "<tr bgcolor='#EEEEEE'><td>".strtoupper("".$mero['d_name']."")."</td><td>".strtoupper("".$mero['f_name']."")."</td><td>".ucwords("".$mero['d_description']."")."</td><td>";?>
     <input name="checkbox[]" type="checkbox" id="checkbox[]"  class="case"  value="<?php echo $mero['d_name'];?>" />
     <a href="addfaculty.php?editd=<?php echo $mero['d_name'];?>"><img src="images/b_edit.png" width="10" height="10" border="white" alt="[edit]" /></a><?php echo"</td></tr>";?>
     <?php
			  $a="2"; 			  	
				 $a="1";
							  
			 
              }
			  
			  
			  }
			  
			  
		 
			echo'<tr>
<td align="center" bgcolor="#FFFFFF" cellpadding="">select all<input type="checkbox" id="selectall"/></td>';
	
echo"<td colspan='3'align='center'bgcolor='#FFFFFF'><input name='delete' type='submit' value='Delete'> </td>
</tr>";

// Check if delete button active, start this 
	  
require("config.php");			  	
$delete=$_POST['delete'];
$checkbox=$_POST['checkbox'];

if($delete){

$query6="select * from master_user2 where (master_user2.id_no='".$_SESSION['USERREG']."') ;";
$q=mysql_query($query6);
$ngonyan=mysql_fetch_array($q);



$quer= "INSERT INTO systemtracer2 values('','".date("20y-m-d")."',' DEPARTIMENT WAS  DELETED BY ".$ngonyan['name']." WHO IS ".$ngonyan['group']." WITH REGISTRATION  ".$_SESSION['USERREG']." IN ".date("20y-m-d")." at ".time("h:m:s")."')";
$resul=mysql_query($quer);
mysql_error;



for($i=0;$i<$na;$i++){
$del_id = $checkbox[$i];


$query3="DELETE FROM departiment WHERE (departiment.d_name='$del_id')";
 $result3=mysql_query($query3);
 
	

	

}


// if successful redirect to delete_multiple.php 
if($result3){
echo "<script language='javascript'>
                alert('Departiment was deleted succesful');
				window.location='addfaculty.php?ed=ok';
                </script>";

}else
{

echo "<script language='javascript'>
                alert('Query unsucsesful');
				window.location='addfaculty.php?ed=ok';
                </script>";
}

}
mysql_close();


echo"</form>
</table>";
  	 
			 }
	   
	   
	   
	   
	   
	   
	   
	   }
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	?>
     <script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {validateOn:["change"]});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "none", {validateOn:["change"]});
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "none", {validateOn:["change"]});
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4", "none", {validateOn:["change"]});
//-->
//-->
        </script>
     <?php
require("config.php");
	 if ($_GET['f1']==ok){
	 $f_name=strtolower($_POST['f_name']);
	 $f_description=strtolower($_POST['f_description']);
	 $query="insert into faculty values ('$f_name','$f_description')";
	$resulty=mysql_query($query);
	mysql_error;
	
$query6="select * from master_user2 where (master_user2.id_no='".$_SESSION['USERREG']."') ;";
$q=mysql_query($query6);
$ngonyan=mysql_fetch_array($q);

	$quer= "INSERT INTO systemtracer2 values('','".date("20y-m-d")."','faculty $f_name WAS ADED BY ".$ngonyan['name']." WHO IS ".$_SESSION['GROUP']." IN ".date("20y-m-d")." at ".time("h:m:s")."')";
$resul=mysql_query($quer);
	
if($resulty){
	  
				 echo "<script language='javascript'>
                      alert('Faculty is Aded Successful');
                       </script>";
					   
					   echo "<script language='javascript'>" ; 
		echo " window.location=('addfaculty.php?f=ok')";
						echo "</script>";
	 
	 }else
	 {
	 
	 echo "<script language='javascript'>
                      alert('Faculty can't be Added Thankyou');
                       </script>";
	  echo "<script language='javascript'>" ; 
		echo " window.location=('addfaculty.php?f=ok')";
						echo "</script>";
	 }
	 
	 
	   
	   
	   }elseif ($_GET['d1']==ok)
	  {
	
	   $d_name=strtolower($_POST['d_name']);
	      $f_name=strtolower($_POST['f_name']);
	 $d_description=strtolower($_POST['d_description']);
	 
	$query="insert into departiment values ('$d_name','$d_description',' $f_name')";
	$resulty=mysql_query($query);
	mysql_error;
	
$query6="select * from master_user2 where (master_user2.id_no='".$_SESSION['USERREG']."') ;";
$q=mysql_query($query6);
$ngonyan=mysql_fetch_array($q);

	$quer= "INSERT INTO systemtracer2 values('','".date("20y-m-d")."','DEPARTIMENT $d_name WAS ADED BY ".$ngonyan['name']." WHO IS ".$_SESSION['GROUP']." IN ".date("20y-m-d")." at ".time("h:m:s")."')";
$resul=mysql_query($quer);

	 if($resulty){
	  
				 echo "<script language='javascript'>
                      alert('Departiment is Aded Successful');
                       </script>";
					   
					   
					   
					 echo "<script language='javascript'>" ; 
		echo " window.location=('addfaculty.php?d=ok')";
						echo "</script>";
	 
	 }else
	 {
	 
	 echo "<script language='javascript'>
                      alert('Departiment can't be Added Thankyou');
                       </script>";
					   
					   
					   echo "<script language='javascript'>" ; 
		echo " window.location=('addfaculty.php?d=ok')";
						echo "</script>";
	 
	 }
	   
	   }
	   
	  
	
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
