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
    else{
		include("registrarmenu.php");
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
           <span class="style46">View Summary</span>
                      </marquee>
         </strong></td>
       </tr>
     </table>
     <hr align="center" width="77%" />
     
     <?php
	echo '<centre><font color="blue">'; echo"Students who are currently in the backup";echo '</centre>';
	 require("config.php");
	 
	  $queryf="select * from faculty";
	 $resultyf=mysql_query($queryf);
	
	 $n=0;
	  $m=0;
	   $md=0;
	   $ii=0;
	 $query="select * from user_status ";
	 $resulty=mysql_query($query);
	 
	  while ($arayf=mysql_fetch_array($resultyf)){
	  
	
	   if($md==0){
	   echo'<table border="1" cellpadding="0" cellspacing="0" bordercolor="#00FF00" width="60%" >
	   <tr bgcolor="#0099FF">
           <td align="center">Explanation</td>';
		   $md++;
		   }
		   
           echo'<td align="center">';echo"".strtoupper("".$arayf['f_name']."")."";echo'</td>';
		   $ii++;
             
              $faculty[$ii]="".$arayf['f_name']."";
         
		  }
		 
		 if($n==0){
		echo'<td align="center">TOTAL</td>
         </tr>';
		 $n++;
		}
	 while ($aray=mysql_fetch_array($resulty)){
	 
	  $query1="select *from student2 where student2.id_no='".$aray['id_no']."'";
	 $resulty1=mysql_query($query1);
	 $aray1=mysql_fetch_array($resulty1);
	 
	 
	 
	 if("".$aray['status'].""=="Completed"){ 
	 
	 for($iii=1;$iii<=$ii;$iii++){
	 if($faculty[$iii]=="".$aray1['faculty']."")
	 {

	 
	 $No[0]=0;
	$N[$iii]=$N[$iii]+1;
	 
	 }
	        }}
	 
	 elseif("".$aray['status'].""=="Postiponed"){
	 
	 
	  for($iii=1;$iii<=$ii;$iii++){
	 if($faculty[$iii]=="".$aray1['faculty']."")
	 {
	 
	 $N1[$iii]=$N1[$iii]+1;
	 }
	        }
	 
	         }
	 
	 elseif("".$aray['status'].""=="Suspended"){      
	 
	 
	  for($iii=1;$iii<=$ii;$iii++){
	 if($faculty[$iii]=="".$aray1['faculty']."")
	 {
	 
	$N2[$iii]=$N2[$iii]+1;
	 }
	        }
	 
	   }
	 
	 
	 
	 
	 elseif("".$aray['status'].""=="Expelled"){   
	 
	  for($iii=1;$iii<=$ii;$iii++){
	 if($faculty[$iii]=="".$aray1['faculty']."")
	 {
	 
	 $N3[$iii]=$N3[$iii]+1;
	 
	 }
	        }
	 
	      }
	 
	  elseif("".$aray['status'].""=="Discontinued"){ 
	  
	  
	   for($iii=1;$iii<=$ii;$iii++){
	 if($faculty[$iii]=="".$aray1['faculty']."")
	 {
	 
	$N4[$iii]=$N4[$iii]+1;
	 
	 }
	        }
	  
	         }
	 
	 elseif("".$aray['status'].""=="Death"){      
	 
	 
	 
	   for($iii=1;$iii<=$ii;$iii++){
	 if($faculty[$iii]=="".$aray1['faculty']."")
	 {
	
	$N5[$iii]=$N5[$iii]+1;
	 }
	        }
	   }
	  }
	  echo'<tr><td>Completed</td>';
	  $total=0;
	  for($i=1;$i<=$ii;$i++){
	if($N[$i]<1){$N[$i]="---";}
	  echo'<td align="center">';echo"".$N[$i]."";echo'</td>';
	  $total= $total+$N[$i];
	  }
	  echo'<td align="center">';echo"$total"; echo'</td>';
	  echo'</tr>';
	   echo'<tr><td>Postiponed</td>';
	    $total=0;
	  for($i=1;$i<=$ii;$i++){
	if($N1[$i]<1){$N1[$i]="---";}
	  echo'<td align="center">';echo"".$N1[$i]."";echo'</td>';
	  $total=$total+$N1[$i];
	  }
	  echo'<td align="center">';echo"$total"; echo'</td>';
	  echo'</tr>';
	   echo'<tr><td>Suspended</td>';
	    $total=0;
	  for($i=1;$i<=$ii;$i++){
	if($N2[$i]<1){$N2[$i]="---";}
	  echo'<td align="center">';echo"".$N2[$i]."";echo'</td>';
	 $total=$total+$N2[$i];
	  }
	  echo'<td align="center">';echo"$total"; echo'</td>';
	  echo'</tr>';
	  
	    echo'<tr><td>Expelled</td>';
		 $total=0;
	  for($i=1;$i<=$ii;$i++){
	if($N3[$i]<1){$N3[$i]="---";}
	  echo'<td align="center">';echo"".$N3[$i]."";echo'</td>';
	 $total=$total+$N3[$i];
	  }
	  echo'<td align="center">';echo"$total"; echo'</td>';
	  echo'</tr>';
	  
	   echo'<tr><td>Discontinued</td>';
	    $total=0;
	  for($i=1;$i<=$ii;$i++){
	if($N4[$i]<1){$N4[$i]="---";}
	  echo'<td align="center">';echo"".$N4[$i]."";echo'</td>';
	  $total=$total+$N4[$i];
	  }
	  echo'<td align="center">';echo"$total"; echo'</td>';
	  echo'</tr>';
	  
	  
	  
	   echo'<tr><td>Death</td>';
	    $total=0;
	  for($i=1;$i<=$ii;$i++){
	if($N5[$i]<1){$N5[$i]="---";}
	  echo'<td align="center">';echo"".$N5[$i]."";echo'</td>';
	 $total=$total+$N5[$i];
	  }
	  echo'<td align="center">';echo"$total"; echo'</td>';
	  echo'</tr>';
	  
	   echo'<tr bgcolor="#CCCCCC"><td align="center">Grand Total</td>';
	
	  for($i=1;$i<=$ii;$i++){
	
	 
	 $gtotal[i]=$N[$i]+$N1[$i]+$N2[$i]+$N3[$i]+$N4[$i]+$N5[$i];
	  echo'<td align="center">';echo"".$gtotal[i]."";echo'</td>';
	  $xtotal=$xtotal+$gtotal[i];
	  }
	 echo'<td align="center" color="red">';echo'<font color="red">';echo"$xtotal";echo'</td>';
	  echo'</tr>';
	  echo'</table>';
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  echo '<centre><font color="blue">'; echo"Current Students Summary ";echo '</centre><br>';
	  
	  
	 $n=0;
	  $m=0;
	   $md=0;
	
	     
		
	
	
	 if($md==0){
	   echo'<table border="1" cellpadding="0" cellspacing="0" bordercolor="#00FF00" width="60%" >
	   <tr bgcolor="#0099FF">
           <td align="center">SN</td>';
		   $md++;
		   }
		   
		   $stotal=0;
		    for($i=1;$i<=$ii;$i++){
           echo'<td align="center">';echo"".strtoupper("".$faculty[$i]."")."";echo'</td>';
	
		
             
			 $query1="select *from student where student.faculty='".$faculty[$i]."'";
	 $resulty1=mysql_query($query1);
	 $snum[$i]=mysql_num_rows($resulty1);
	 $stotal=$stotal+ $snum[$i];
	 
         
		  }
		 
		 if($n==0){
		echo'<td align="center">TOTAL</td>
         </tr>';
		 $n++;
		}
		
	echo'<tr><td>No Student</td>';
	  
	  for($i=1;$i<=$ii;$i++){
	if($snum[$i]<1){$snum[$i]="---";}
	  echo'<td align="center">';echo"".$snum[$i]."";echo'</td>';
	
	  }
		
	 echo'<td align="center" color="red">';echo'<font color="red">';echo"$stotal";echo'</td>';
	  echo'</tr>';
	  echo'</table>';
	 ?>
	 <br />
     
     <div id="wb_MenuBar1" style="position:absolute; left:148px; top:121px; width:92px; height:22px; z-index:1001;">
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
