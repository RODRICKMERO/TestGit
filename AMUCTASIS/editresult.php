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
      
    
     <table width="408" border="0" cellspacing="0" cellpadding="0">
       <tr>
         <td width="425" height="29"><strong>
           <marquee>
             <span class="style35">ADD STUDENT RESULT </span>
             </marquee>
         </strong></td>
       </tr>
     </table>
     <hr align="center" width="77%" />
     <br />
     <br />
     <form action="addresult.php" method="post" name="registratio" id="registratio">
       <table width="557">
         <tr>
           <td height="34"><div align="left"><b>ENTER COURSE CODE</b></div></td>
           <td width="335" align="left"><span id="sprytextfield2">
             <label>
               <input type="text" name="course_code" size="20" id="textfield2" />
               </label>
             <span class="textfieldRequiredMsg">A value is required.</span></span></td>
  </tr>
  <tr>
           <td width="245" height="26" valign="top" align="center"><strong>YEAR</strong></td>
           <td><div align="left"><span id="sprytextfield4">
             <select name="y_study">
             <?php
          require("config.php");
			$gg="select distinct(y_study)from course_regsration,perfomance where ((course_regsration.course_code=perfomance.course_code)and(course_regsration.id_no=perfomance.id_no))";
$ggg=mysql_query($gg);
while($gggg=mysql_fetch_array($ggg)){
	$x=date("20y");
	$y=(date("20y")+1);
	$yearofstudy="$x".'/'."$y";
	if("".$gggg['y_study'].""=="$yearofstudy"){
			?>
               <option value='<?php echo"".$gggg['y_study'].""; ?>' selected="selected"><?php echo"".$gggg['y_study']."";?></option>
               <?php
	}else{
                    
                     echo "<option value='".$gggg['y_study']."'>".$gggg['y_study']."</option>\n";
                    	
                    }
}
              ?>
               </select>
             <span class="textfieldRequiredMsg">Avalue is required.</span></span></div></td>
</tr>

         <tr>
           <td width="205"><div align="left">
             <label>
               <input type="submit" name="submit" id="button" value="search" />
             </label>
           </div></td>
         </tr>
       </table>
</form>
     <?php
require("config.php");



$page_name="editresult.php"; //  If you use this code with a different page ( or file ) name then change this 
$start=$_GET['start'];
if(strlen($start) > 0 and !is_numeric($start)){
echo "Data Error";
exit;
}


$eu = ($start - 0); 
$limit = 8;                                 // No of records to be shown per page.
$this1 = $eu + $limit; 
$back = $eu - $limit; 
$next = $eu + $limit; 


$a="1";
if ( $_POST['submit'] )
{
$course_code=strtolower($_POST['course_code']);
$y_study=$_GET['y_study'];
$query10="select  * from staff_faculty where (staff_faculty.id_no='".$_SESSION['USERREG']."') ;";
$result10=mysql_query($query10);
$mero1=mysql_fetch_array($result10);
$query12="select*from courses where (courses.course_code='$course_code');";
$result12=mysql_query($query12);
$mero12=mysql_fetch_array($result12);


$query="select  * from student,perfomance,course_regsration where ((student.id_no=perfomance.id_no)and(course_regsration.id_no=perfomance.id_no)and(course_regsration.y_study='$y_study') and (perfomance.course_code='$course_code') and (student.faculty= '".$mero1['faculty']."'))order by name;";
$result=mysql_query($query);
$nume=mysql_num_rows($result);
echo"<color='red'>";
echo"<center>";
 echo"THIS ARE ".$mero12['course_year']." YEAR COURSES FOR SEMESTER  ".$mero12['semester']." "; 
//// $query4="select * from student where (student.id_no='$dent_reg');"; 
// $result4=mysql_query($query4);
 //$mero=mysql_fetch_array($result4);
 //echo"</br>";echo"".$mero['name']."";echo"WITH REGSRATION No $dent_reg";
  echo"</center>";

echo '<table align="center" width="" border="1" cellpadding="2" cellspacing="0" bordercolor="#66cccc">';
echo "<tr bgcolor='#6699CC'><th align='left'>STUDENT NAME:</th><th align='left'>REG_NO:</th><th  width='10%'>ADD GRADE</th></tr>";
 $query2="select  * from student,perfomance,course_regsration where ((student.id_no=perfomance.id_no)and(course_regsration.id_no=perfomance.id_no)and(course_regsration.y_study='$y_study') and (perfomance.course_code='$course_code') and (student.faculty= '".$mero1['faculty']."'))order by name limit $eu, $limit "; 
$result2=mysql_query($query2);
echo mysql_error();


    while( $laswai=mysql_fetch_array($result2) )
	        {
		     if($a==1)
			 {
			   
echo "<tr bgcolor='#ffdfaa'><td>".$laswai['name']."</td><td> ".$laswai['id_no']."</td><td>"; echo"<form id='form1' name='form1' method='post' enctype='multipart/form-data' action='addresult2.php'>";
    echo" <table width='' border='0'>";
     echo" <tr>";
         echo"<th scope='col'>";echo"<div align='lef' class='style1'>"; echo"grade"; echo"</div>";echo"</th>";
       echo"</tr>";
        echo" <td>";echo"<select name='grade'>";
          echo" <option value='A' Selected>"; echo"<b>"; echo"A"; echo"</b>"; echo"</option>";
          echo" <option value='B+'>"; echo"B+"; echo"</option>";
		   echo" <option value='B'>"; echo"B"; echo"</option>";
          echo" <option value='C'>";echo"C"; echo"</option>";
		   echo" <option value='D'>";echo"D"; echo"</option>";
          echo" <option value='E'>"; echo"E"; echo"</option>";
         echo"</select>"; echo"</td>";
	  
	   echo" <td>";
	   echo"<select name='code'>";
	   echo" <option value='$course_code' Selected>"; echo"<b>"; echo"$course_code"; echo"</b>"; echo"</option>";echo"</select>";
    echo" </td>";
	
	echo" <td>";
	   echo"<select name='reg'>";
	   echo" <option value='".$laswai['id_no']."' Selected>"; echo"<b>"; echo"".$laswai['id_no'].""; echo"</b>"; echo"</option>";echo"</select>";
    echo" </td>";
	
        echo" <td>"; echo"<input name='get' type='submit' id='save' value='OK' />"; echo"</td>";
      echo" </tr>";
     echo"</table>";
	 echo"</form>";
	  "</td></tr> " ;
	 
			  $a="2"; 			  
			 }
           else
              {
			   
echo "<tr bgcolor='#eeeeee'><td>".$laswai['name']."</td><td> ".$laswai['id_no']."</td><td>"; echo"<form id='form1' name='form1' method='post' enctype='multipart/form-data' action='addresult2.php'>";
    echo" <table width='' border='0'>";
     echo" <tr>";
         echo"<th scope='col'>";echo"<div align='lef' class='style1'>"; echo"grade"; echo"</div>";echo"</th>";
       echo"</tr>";
        echo" <td>";echo"<select name='grade'>";
          echo" <option value='A' Selected>"; echo"<b>"; echo"A"; echo"</b>"; echo"</option>";
          echo" <option value='B+'>"; echo"B+"; echo"</option>";
		   echo" <option value='B'>"; echo"B"; echo"</option>";
          echo" <option value='C'>";echo"C"; echo"</option>";
		   echo" <option value='D'>";echo"D"; echo"</option>";
          echo" <option value='E'>"; echo"E"; echo"</option>";
         echo"</select>"; echo"</td>";
	  
	   echo" <td>";
	   echo"<select name='code'>";
	   echo" <option value='$course_code' Selected>"; echo"<b>"; echo"$course_code"; echo"</b>"; echo"</option>";echo"</select>";
    echo" </td>";
	
	echo" <td>";
	   echo"<select name='reg'>";
	   echo" <option value='".$laswai['id_no']."' Selected>"; echo"<b>"; echo"".$laswai['id_no'].""; echo"</b>"; echo"</option>";echo"</select>";
    echo" </td>";
	
        echo" <td>"; echo"<input name='get' type='submit' id='save' value='OK' />"; echo"</td>";
      echo" </tr>";
     echo"</table>";
	 echo"</form>";
	  "</td></tr> " ;
		
			  $a="2"; 			  	
				 $a="1";
							  
			 
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

}}// end of if checking sufficient records are there to display bottom navigational link. 




?>
     <form action="addresult.php" method="post" name="registratio">
       <table width="557">
         <tr> </tr>
       </table>
     </form>
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
<script type="text/javascript">
<!--
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "none", {validateOn:["change"]});
//-->
</script>
</body>
</html>
