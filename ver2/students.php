<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Students</title>
<META NAME="Description" CONTENT="Top Students preparing for IIT-JEE , AIEEE , DCE , Olympiads exams. Previous Year Students for IIT-JEE Enterance">
<META NAME="keywords" content=" IIT Coaching, What Studnets Say about IITJEE, Studnet Record for IIT" />
<link rel="shortcut icon" href="../../alphalogo.ico"  />
</head>

<body>
<img src="http://www.alphaclasses.com/world_map.gif" alt="world" longdesc="http://www.alphaclasses.com" />
<table  border="0">
<?php



$dbname='rajatkal_act';
$link=mysql_connect("localhost","rajatkal_act","ManasI4URajat") or die("Couldn't make connection.");
$db = mysql_select_db($dbname, $link) or die("Couldn't select database");
$result = mysql_query('SELECT * FROM sturecord where year="'.$_GET['year'].'"',$link) or die("Fetch Failed:" . mysql_error());


while ($row = mysql_fetch_array($result, MYSQL_NUM)) { 
echo '<tr><td><img src="http://www.alphaclasses.com/'.$row[0]."/".$row[8].'"'.' width=150 height=200 /></td><td><p><a href="http://www.alphaclasses.com/reportcard.html/'.$row[1].'/'.$row[2].'">Report Card</a></p><p><a href="http://www.alphaclasses.com/guestbook.html/'.$row[1].'/'.$row[2].'">Guest book</a></p></tr><tr>
    <td><strong>'.$row[2].'</strong></td>
    </tr>';
}
?>
</table>
</body>
</html>
