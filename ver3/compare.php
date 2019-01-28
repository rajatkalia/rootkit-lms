<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Score Comparison</title>
<META NAME="Description" CONTENT="Score comparison for the test <a href=http://www.alphaclasses.com/ <?php echo $_GET['tname']; ?> ">
<META NAME="keywords" content=" IIT Coaching, Report Cards, score comparison" />
</head>

<body>
<h1>Score Comparison - <?php echo $_GET['tname']; ?></h1>

<?php
$dbname='rajatkal_act';
$link=mysqli_connect("localhost","rajatkal_rk","ManasI4URajat") or die("Couldn't make connection.");
$db = mysqli_select_db($link ,$dbname) or die("Couldn't select database");
$result = mysqli_query($link, 'SELECT * FROM testrec where tname="'.$_GET['tname'].'" ORDER BY gradenormalized DESC, marks DESC') or die("Fetch Failed:" . mysql_error());
printf("Affected rows : %d\n", mysqli_affected_rows($link));
echo '<table><tr><td>Roll Number</td><td>Marks</td></tr>';
$name = "_defname";
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) { 
    $result2 = mysqli_query($link, 'SELECT * FROM sturecord where rollno="'.$row['rollno'].'"') or die("Fetch Failed:" . mysql_error());
  while ($row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC)){
            $name = $row2["name"]; }   
  
echo '<tr><td><a href="http://www.alphaclasses.com/reportcard.php?rollno='.$row["rollno"].'">'.$name.'</a></td><td>'.$row["marks"].'</td></tr>';

}

echo '</table><iframe width=80% height=65% src="https://www.alphaclasses.com/guestbook.php?id='.$_GET["tname"].'"></iframe>'; 

?>

</body>
</html>
