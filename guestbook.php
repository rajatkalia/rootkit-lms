<?php session_start(); ?>
<html><head><title>Guest Book</title>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-15"><meta http-equiv="content-style-type" content="text/css"><meta http-equiv="content-script-type" content="text/javascript">
<meta name="description" content="Guest Book"><meta name="copyright" content="Rajat Kalia - www.rajatkalia.com"><meta name="author" content="Rajat Kalia - www.rajatkalia.com">
<link rel="shortcut icon" href="../../alphalogo.ico"  />
</head><body marginwidth="0" marginheight="0" topmargin="0" leftmargin="0" >
<div class="hr"><hr />
<?php

include 'dbconn.php';
date_default_timezone_set('Asia/Calcutta');
$date=date("F j, Y, g:i a");
session_start(); 
if ($_POST["vercode"] != $_SESSION["vercode"] OR $_SESSION["vercode"]=='')  { 
      
} else { 
if($_POST['comment'] == 'Comment') 
{
 $sql_insert = "INSERT into `guestbook`
  			(`name`,`message`,`date`,`stuid`)
		    VALUES
		    ('$_POST[name]','$_POST[message]','$date','$_GET[id]' )";
mysql_query($sql_insert,$link) or die("Insertion Failed:" . mysql_error());
}

     
}; 


$result2 = mysql_query('SELECT * FROM sturecord where rollno="'.$_GET['id'].'"',$link) or die("Fetch failed". mysql_error());
$row2=mysql_fetch_array($result2, MYSQL_NUM);
if($_GET['id']==0000){ echo '<h1>Guest Book</h1>';
}
else {
echo '<h1>Guest Book-'.$row2[2].'</h1><br><img src="http://www.alphaclasses.com/'.$row2[0]."/".$row2[8].'"'.' width=150 height=200 /><br>';
}
echo '<form action="http://www.alphaclasses.com/guestbook.html/'.$_GET['id'].'/Posted" method="post" name="gbForm" id="gbForm" >
        <table width="95%" border="0" cellpadding="3" cellspacing="3" class="forms">
          <tr>
            <td>Name</td>
          <td><input name="name" type="text" >
            </td>
          </tr>
          <tr> 
            <td width="14%">Message</td>
            <td width="86%"><textarea name="message" ></textarea> 
             </td>
          </tr>
          <tr><td width="14%">Enter Code <td width="86%"><img src="http://www.alphaclasses.com/captcha.php"><input type="text" name="vercode" /></td><br></tr> 
          <tr>
          
          <td></td><td><input name="comment" type="submit" id="comment" value="Comment"></td></tr>
          
        </table>

      </form>
      <div class="hr"><hr />
      <table>';
      



      

$result = mysql_query("SELECT * FROM guestbook",$link) or die("Fetch Failed:" . mysql_error());
$s='';
while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
if($row[1]==$_GET['id']){
$s='<tr><td><font color=#0A7FDC>'.$row[0].'</font> posted a comment on <font color=#0A7FDC>'.$row[3].'</font><br></td></tr><tr><td>'.$row[2].'</td></tr>'.$s;
}}
echo $s;
?>
