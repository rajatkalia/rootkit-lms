<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />



<?php
$dbname='rajatkal_act';
$link=mysql_connect("localhost","rajatkal_act","ManasI4URajat") or die("Couldn't make connection.");
$db = mysql_select_db($dbname, $link) or die("Couldn't select database");
$result = mysql_query('SELECT * FROM testrec where rollno="'.$_GET['rollno'].'"',$link) or die("Fetch Failed:" . mysql_error());
$result2 = mysql_query('SELECT * FROM sturecord where rollno="'.$_GET['rollno'].'"',$link) or die("Fetch failed". mysql_error());
$result3 = mysql_query('SELECT * FROM testrec where rollno="'.$_GET['rollno'].'"',$link) or die("Fetch Failed:" . mysql_error());
$result4 = mysql_query('SELECT * FROM testrec where rollno="'.$_GET['rollno'].'"',$link) or die("Fetch Failed:" . mysql_error());
$result5 = mysql_query('SELECT * FROM testrec where rollno="'.$_GET['rollno'].'"',$link) or die("Fetch Failed:" . mysql_error());
$row2=mysql_fetch_array($result2, MYSQL_NUM);
echo '<title>Detailed Report Card -'.$row2[2].'</title>
<META NAME="Description" CONTENT="This page contains the Detailed Report Cards for '.$row2[2].' while she was studying at Alpha Classes ">
<META NAME="keywords" content=" IIT Coaching, Report Cards, Report Card of '.$row2[2].' at Alpha Classes" />
<link rel="shortcut icon" href="../../alphalogo.ico"  />
</head>

<body>';
echo '<h1>Report Card-'.$row2[2].'</h1><br><img src="http://www.alphaclasses.com/'.$row2[0]."/".$row2[8].'"'.' width=150 height=200 /><br>';
$gstring1 = '<h1>Maths</h1><table  border="1">
<tr><td><b>Topic</b></td><td><b>Marks</b></td><td><b>Comments</b></td><td><b>Date</b></td><td><b>Comparison</b></td></tr>';
$ctr1=0;
$ctr2=0;
$ctr3=0;
$ctr4=0;
while ($row = mysql_fetch_array($result, MYSQL_NUM)) { 
if($row[6]==1){
$gstring1 =$gstring1.'<tr><td>'.$row[2].'</td><td>'.$row[3].'</td><td>'.$row[4].'</td><td>'.$row[5].'</td><td><a href="http://www.alphaclasses.com/compare.html/'.$row[1].'">List</a></td></tr>';
$ctr1++;
}}
if($ctr1>0)
echo $gstring1.'</table><br>';

$gstring2 = '<h1>Physics</h1><table  border="1"><tr><td><b>Topic</b></td><td><b>Marks</b></td><td><b>Comments</b></td><td><b>Date</b></td><td><b>Comparison</b></td></tr>';
while ($row3 = mysql_fetch_array($result3, MYSQL_NUM)) { 
if($row3[6]==2){
$gstring2 = $gstring2.'<tr><td>'.$row3[2].'</td><td>'.$row3[3].'</td><td>'.$row3[4].'</td><td>'.$row3[5].'</td><td><a href="http://www.alphaclasses.com/compare.html/'.$row3[1].'">List</a></td></tr>';
$ctr2++;
}}
if($ctr2>0)
echo $gstring2.'</table><br>';
$gstring3= '<h1>Chemistry</h1><table  border="1"><tr><td><b>Topic</b></td><td><b>Marks</b></td><td><b>Comments</b></td><td><b>Date</b></td><td><b>Comparison</b></td></tr>';
while ($row4 = mysql_fetch_array($result4, MYSQL_NUM)) { 
if($row4[6]==3){
$gstring3 =  $gstring3.'<tr><td>'.$row4[2].'</td><td>'.$row4[3].'</td><td>'.$row4[4].'</td><td>'.$row4[5].'</td><td><a href="http://www.alphaclasses.com/compare.html/'.$row4[1].'">List</a></td></tr>';
$ctr3++;
}}
if($ctr3>0)
echo $gstring3.'</table><br>';
$gstring4 = '</table><br><h1>Common</h1><table  border="1"><tr><td><b>Topic</b></td><td><b>Marks</b></td><td><b>Comments</b></td><td><b>Date</b></td><td><b>Comparison</b></td></tr>';
while ($row5 = mysql_fetch_array($result5, MYSQL_NUM)) { 
if($row[6]==4){
$gstring4 = $gstring4.'<tr><td>'.$row5[2].'</td><td>'.$row5[3].'</td><td>'.$row5[4].'</td><td>'.$row5[5].'</td><td><a href="http://www.alphaclasses.com/compare.html/'.$row5[1].'">List</a></td></tr>';
$ctr4++;
}}
if($ctr4>0)
echo $gstring4.'</table><br>';



?>

</body>
</html>
