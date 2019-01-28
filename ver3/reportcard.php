<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />



<?php
$dbname='rajatkal_act';
$link=mysqli_connect("localhost","rajatkal_rk","ManasI4URajat") or die("Couldn't make connection.");
$db = mysqli_select_db($link ,$dbname) or die("Couldn't select database");
$result = mysqli_query($link, 'SELECT * FROM sturecord where rollno="'.$_GET['rollno'].'"') or die("Fetch Failed:" . mysql_error());

echo 'Report Card of - ';
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) { echo $row["name"];
}

$result2 = mysqli_query($link, 'SELECT * FROM testrec where rollno="'.$_GET['rollno'].'"') or die("Fetch Failed:" . mysql_error());
echo '<table>';
$score = 0;
echo '<tr><td>Test ID</td><td>Marks</td><td>Maximum Marks</td><td>Percentage</td></tr>';
while ($row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC)) { 
    $percentage = 100*$row2["marks"]/$row2["testtotalmarks"];
    echo '<tr><td><a href="https://www.alphaclasses.com/compare.php?tname='.$row2["tname"].'">'.$row2["tname"].'</a></td><td>'.$row2["marks"].'</td><td>'.$row2["testtotalmarks"].'</td><td>'.$percentage.'</tr>';
    
$result4 = mysqli_query($link, 'UPDATE testrec SET percentage="'.$percentage.'" where rollno="'.$_GET['rollno'].'" AND tname="'.$row2["tname"].'"') or die("Fetch Failed:" . mysql_error());
    
$score = $score +  $row2["gradenormalized"] * $row2["credits"];
}

$result3 = mysqli_query($link, 'UPDATE sturecord SET score="'.$score.'" where rollno="'.$_GET['rollno'].'"') or die("Fetch Failed:" . mysql_error());



echo '</table><iframe width=80% height=65% src="https://www.alphaclasses.com/guestbook.php?id='.$_GET["rollno"].'"></iframe>'; 

?>

