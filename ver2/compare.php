<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Score Comparison</title>
<META NAME="Description" CONTENT="Score comparison for the test <a href=http://www.alphaclasses.com/ <?php echo $_GET['testid']; ?> ">
<META NAME="keywords" content=" IIT Coaching, Report Cards, score comparison" />
</head>

<body>
<h1>Score Comparison</h1>

<?php
$dbname='alphaclassestest';
$link=mysql_connect("alphaclassestest.db.4856000.hostedresource.com","alphaclassestest","RajatI4UPooja") or die("Couldn't make connection.");
$db = mysql_select_db($dbname, $link) or die("Couldn't select database");
$result = mysql_query('SELECT * FROM testrec where testid="'.$_GET['testid'].'"',$link) or die("Fetch Failed:" . mysql_error());
$result3 = mysql_query('SELECT testdesc FROM testrec where testid="'.$_GET['testid'].'"',$link) or die("Fetch Failed:" . mysql_error());
while ($row3 = mysql_fetch_array($result3, MYSQL_NUM)) { 
$s=$row3[0];
break;
}
echo '<h2>'.$s.'</h2>';
echo '<table  border="1">
<tr><td><b>Name</b></td><td><b>Marks</b></td><td><b>Comments</b></td><td><b>Conducted On</b></td></tr>';
while ($row = mysql_fetch_array($result, MYSQL_NUM)) { 
$result2 = mysql_query('SELECT name FROM sturecord where rollno="'.$row[0].'"',$link) or die("Fetch failed". mysql_error());
$row2=mysql_fetch_array($result2, MYSQL_NUM);
echo '<tr><td>'.$row2[0].'</td><td>'.$row[3].'</td><td>'.$row[4].'</td><td>'.$row[5].'</td></tr>';
}
?>
</table>
<br />
<?php
echo '<a href="http://www.alphaclasses.com/'.$_GET['testid'].'">Question Paper</a>';
?>
</body>
</html>
