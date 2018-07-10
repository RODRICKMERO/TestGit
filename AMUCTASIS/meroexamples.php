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
/** Error reporting */
error_reporting(E_ALL);
/** Include PHPExcel */
require_once dirname(__FILE__) . '/../Classes/PHPExcel.php';

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
             <span class="style46">view students</span>
             </marquee>
         </strong></td>
       </tr>
     </table>
     <hr align="center" width="77%" />
     <table width="200" height="36" border="0">
       <tr>
         <th height="32" scope="col"> <form id="form1" name="form1" method="get"  action="">
           <table width="326" border="0">
             <tr>
               <td width="138" height="26"><span class="style53">Select Year</span></td>
               <td width="83"><select name="Yearofstudy">
                 <option value="1" selected="selected">Year 1</option>
                 <?php
              
                    for ($yy=2;$yy<=4;$yy++)
                    {
                       
                        echo "<option value=$yy>$yy</option>\n";
                    	
                    }
              ?>
               </select>
                 </td>
               <td width="91"><input name="Save" type="submit" id="Save" value="OK" /></td>
             </tr>
           </table>
           <div align="center"></div>
         </form></th>
       </tr>
     </table>
     <br />
     <?php

require("config.php");

$page_name="viewstudent1.php"; //  If you use this code with a different page ( or file ) name then change this 
$start=$_GET['start'];
if(strlen($start) > 0 and !is_numeric($start)){
echo "Data Error";
exit;
}


$eu = ($start - 0); 
$limit =2000;                                 // No of records to be shown per page.
$this1 = $eu + $limit; 
$back = $eu - $limit; 
$next = $eu + $limit; 

$a="1";
if ($_GET['Yearofstudy']){
$nn="select *from staff_faculty where (staff_faculty.id_no='".$_SESSION['USERREG']."')";
$bb=mysql_query($nn);
$cc=mysql_fetch_array($bb);

$faculty="".$cc['faculty']."";
$year=$_GET['Yearofstudy'];

$query="select * from student where (student.faculty='$faculty')order by id_no;";
$result=mysql_query($query);
$nume=mysql_num_rows($result);

    
$query2="select * from student where (student.faculty='$faculty')order by id_no limit $eu, $limit ";
$result2=mysql_query($query2);
echo mysql_error();

  $v=0;
  $tp=0;
  ?>
   <div id="printReady">
  <?php
// Create new PHPExcel object
echo date('H:i:s') , " Create new PHPExcel object" , EOL;
$objPHPExcel = new PHPExcel();
$objPHPExcel->getProperties()->setCreator("MERO")
							 ->setLastModifiedBy("meor")
							 ->setTitle("Office 2007 XLSX Student")
							 ->setSubject("Office 2007 XLSX Student")
							 ->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.")
							 ->setKeywords("office 2007 openxml php")
							 ->setCategory("Test result file");
							 $hh=10;
    while( $laswai=mysql_fetch_array($result2) )
	        {
					
			$q="select * from courses,course_regsration where (course_regsration.id_no='".$laswai['id_no']."')and course_regsration.course_code=courses.course_code order by course_year,semester ";
$re=mysql_query($q);

while($leo=mysql_fetch_array($re)){

$maxmam="".$leo['course_year']."";


}

if ($maxmam==$year){
	
echo"<center>";
if($tp==0){
	$tp++;
if ($maxmam==1){



echo "THISE ARE $faculty FIRST YEAR STUDENTS  ";
}

if ($maxmam==2){



echo "THISE ARE $faculty SECOND YEAR STUDENTS  ";
}
if ($maxmam==3){



echo "THISE ARE $faculty THIRD YEAR STUDENTS  ";
}

if ($maxmam==4){



echo "THISE ARE $faculty FORTH YEAR STUDENTS  ";
}
if ($maxmam==5){



echo "THESE ARE $faculty FIFTH YEAR STUDENTS  ";
}
echo"</center>";
}
$maxmam=0;
if ($v==0){
	
	$cc=1;

	// Create a first sheet, representing sales data
echo date('H:i:s') , " Add some data" , EOL;
$objPHPExcel->setActiveSheetIndex(0);
$objPHPExcel->getActiveSheet()->setCellValue('D2', ' WATER DEVELOPMENT AND MANAGEMENT INSTITUTE (WDMI)');
$objPHPExcel->getActiveSheet()->setCellValue('M2', 'Sheet No:');
$objPHPExcel->getActiveSheet()->setCellValue('N2', '___ of ___');
$objPHPExcel->getActiveSheet()->setCellValue('B3', 'MODULE ASSESSMENT RESULTS SHEET (WDMI Form Ex 23) - Applies to taught modules');
$objPHPExcel->getActiveSheet()->setCellValue('B4', ' NATIONAL TECHNICAL AWARD:___LEVEL 06_______________________________');
$objPHPExcel->getActiveSheet()->setCellValue('L4', 'YEAR OF STUDY:   ');
$objPHPExcel->getActiveSheet()->setCellValue('N4', ' 2014/2015');
$objPHPExcel->getActiveSheet()->setCellValue('B5', 'DATE OF EXAMINATION: ________________03/02/2015_______________________');
$objPHPExcel->getActiveSheet()->setCellValue('L5', 'SEMESTER:');
$objPHPExcel->getActiveSheet()->setCellValue('B6', 'Module Code:        GST 06103                                       Module Title: Computer Network ');
$objPHPExcel->getActiveSheet()->setCellValue('L7', 'MAX. MARKS:');
$objPHPExcel->getActiveSheet()->setCellValue('N7', '100');
$objPHPExcel->getActiveSheet()->setCellValue('B8', 'COMPONENT');
$objPHPExcel->getActiveSheet()->setCellValue('D8', 'CONTINUOUS ASSESSMENT');
$objPHPExcel->getActiveSheet()->setCellValue('H8', 'SEMESTER EXAMINATION');
$objPHPExcel->getActiveSheet()->setCellValue('L8', 'TOTAL');
$objPHPExcel->getActiveSheet()->setCellValue('M8', 'GRADE');
$objPHPExcel->getActiveSheet()->setCellValue('N8', 'REMARKS');
$objPHPExcel->getActiveSheet()->setCellValue('B9', 'CAND. No.');


//echo '<table align="center" width="600" border="1" cellpadding="1" cellspacing="0" bordercolor="#66cccc">';
//echo "<tr bgcolor='#6699CC'><th align='left'>S/N</th><th align='left'>REG No:</th><th align='left'>STUDENT NAME:</th><th align='left'>FACULTY:</th>";
$v++;
}

	$a=1; 	    
			
			    $K11=$hh;
			  			   //echo "\n ";
						   if($K11%2!=0) {
						   $b11="C"."$K11";
						   $g11="B"."$K11";
						   
						   $objPHPExcel->getActiveSheet()->setCellValue($b11,'MD');
			               $objPHPExcel->getActiveSheet()->mergeCells("$a11:$g11");
						  // echo "$a11 ___ $g11 \n ";
						   $hh++;
						   	$K11=$hh;		   
						  
						   }
						 $a11="B"."$K11";
			   $b11="C"."$K11";
			   $c11="G"."$K11";
			   $d11="K"."$K11"; 
			   
			$objPHPExcel->getActiveSheet()->setCellValue($a11,$laswai['id_no']);
			$objPHPExcel->getActiveSheet()->setCellValue($b11,'CM');
			$objPHPExcel->getActiveSheet()->setCellValue($c11,$hh%40);
			$objPHPExcel->getActiveSheet()->setCellValue($d11,$hh%60+5);
			$objPHPExcel->getActiveSheet()->getStyle($a11)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_JUSTIFY);
            $objPHPExcel->getActiveSheet()->getStyle($a11)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);	
			$objPHPExcel->getActiveSheet()->getHeaderFooter()->setOddHeader('&L&NACTE FORM EXAM 23 ');
//$objPHPExcel->getActiveSheet()->getHeaderFooter()->setOddFooter($objPHPExcel->getProperties()->getTitle() . '&RPage &P of &N');
			
			//$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
			//$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
			//$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
			///$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
			

//echo "<tr bgcolor='#ffdfaa'><td>$hh</td><td>".$laswai['id_no']."</td><td>".ucwords("".$laswai['name']."")."</td><td> ".$laswai['faculty']."</td></tr> " ;
			$hh++;
    			}
			
			
			
			
			}  
			$ff=$hh;
			 $vc11="C"."$ff";
			$objPHPExcel->getActiveSheet()->setCellValue($vc11,'DM');
			
			$K11=$hh+3;
						 $a11="B"."$K11";
			   $b11="D"."$K11";
			   $c11="I"."$K11";
			   $d11="M"."$K11"; 
$objPHPExcel->getActiveSheet()->setCellValue($a11, 'Chief Marker (CM):	');
$objPHPExcel->getActiveSheet()->setCellValue($b11, '  ……………………………………');
$objPHPExcel->getActiveSheet()->setCellValue($c11, '  ………………………………');
$objPHPExcel->getActiveSheet()->setCellValue($d11, '  ……………………');

$K11=$hh+4;
			 $b11="D"."$K11";
			   $c11="I"."$K11";
			   $d11="M"."$K11"; 
$objPHPExcel->getActiveSheet()->setCellValue($b11, '    Name ');
$objPHPExcel->getActiveSheet()->setCellValue($c11, ' Signature ');
$objPHPExcel->getActiveSheet()->setCellValue($d11, '    Date ');

$K11=$hh+6;
			   $a11="B"."$K11";
			   $b11="D"."$K11";
			   $c11="I"."$K11";
			   $d11="M"."$K11"; 
$objPHPExcel->getActiveSheet()->setCellValue($a11, 'Moderator (MD):');
$objPHPExcel->getActiveSheet()->setCellValue($b11, '  ……………………………………');
$objPHPExcel->getActiveSheet()->setCellValue($c11, '  ………………………………');
$objPHPExcel->getActiveSheet()->setCellValue($d11, '  ……………………');

$K11=$hh+7;
			   $b11="D"."$K11";
			   $c11="I"."$K11";
			   $d11="M"."$K11"; 
$objPHPExcel->getActiveSheet()->setCellValue($b11, '    Name ');
$objPHPExcel->getActiveSheet()->setCellValue($c11, ' Signature ');
$objPHPExcel->getActiveSheet()->setCellValue($d11, '    Date ');
$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(12);
$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(5);
$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(5);
$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(5);
$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(5);
$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(12);
$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(5);
$objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(5);
$objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(5);
$objPHPExcel->getActiveSheet()->getColumnDimension('K')->setWidth(12);
		
		if ($v==0)
			{

			//echo '<table align="center" width="300" border="1" cellpadding="1" cellspacing="0" bordercolor="#66cccc">';
//echo "<tr bgcolor='#FFCCCC'><td><img src='images/log_out.png' width='10' height='10' /><b>Please no registered student!</b></td></tr>";
			}
			  
//echo '</table>' ;
// Set page orientation and size

$objPHPExcel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_PORTRAIT);
$objPHPExcel->getActiveSheet()->getPageSetup()->setPaperSize(PHPExcel_Worksheet_PageSetup::PAPERSIZE_A4);

// Rename first worksheet
$objPHPExcel->getActiveSheet()->setTitle('STUDENT');


// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);


// Redirect output to a client’s web browser (Excel2007)
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="01simple.xlsx"');
header('Cache-Control: max-age=0');
// If you're serving to IE 9, then the following may be needed
header('Cache-Control: max-age=1');

// If you're serving to IE over SSL, then the following may be needed
header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
header ('Pragma: public'); // HTTP/1.0

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('php://output');
exit;



?>
     </div>
	 
     <a href="javascript:void(printSpecial())"><img src="images/b_print.png" border="0" height="20" width="20" alt="[print]" /></a>
     <?php  
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
     <p></p>
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
