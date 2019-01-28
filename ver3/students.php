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
<img src="https://www.alphaclasses.com/world_map.gif" alt="world" longdesc="http://www.alphaclasses.com" />
<table  border="0"><tr>
<?php

$dbname='rajatkal_act';
$link=mysqli_connect("localhost","rajatkal_rk","ManasI4URajat") or die("Couldn't make connection.");
$db = mysqli_select_db($link ,$dbname) or die("Couldn't select database");

$result = mysqli_query($link ,'SELECT * FROM sturecord ORDER BY score DESC') or die("Fetch Failed:" . mysql_error());

$ctr=0;

printf("Affected rows : %d\n", mysqli_affected_rows($link));
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) { 

echo '<td><tr><div><td><img src="https://www.alphaclasses.com/StudentPics/'.$row["year"]."/".$row["pictureid"].'"'.' width=150 height=200 /></tr><tr></td><td><a href="https://www.alphaclasses.com/reportcard.php?rollno='.$row["rollno"].'">'.$row["name"].'</a></td></div></tr></td>';
    $ctr = $ctr + 1;
    if ($ctr % 5 == 0 ) echo '</tr><tr>';
    

}

?>
</table>
</body>
</html>
