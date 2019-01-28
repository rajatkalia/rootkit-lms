<html>
  <head>
    <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="163163960440-93o576s12i7o4kk7sjnsn7416r12fk01.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
  </head>
<body>
    
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.2&appId=260344141207856&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


    

 <form id="form1" action=https://www.alphaclasses.com/login.php method=POST>
    <input id=input1 name=email type=text>Email</input><br>
    <input id=passwd1 name=passwd type=password>Password</input><br>
        <button name=submit value=1>Login</button>
</form>
<?php
if($_POST["submit"]){
$pass=md5($_POST["passwd"]);
$dbname='rajatkal_act';
$link=mysqli_connect("localhost","rajatkal_rk","ManasI4URajat") or die("Couldn't make connection.");
$db = mysqli_select_db($link ,$dbname) or die("Couldn't select database");
$result = mysqli_query($link, 'SELECT * FROM loginstore where email="'.$_POST['email'].'" AND password="'.$pass.'"') or die("Fetch Failed:" . mysql_error());

printf("Affected rows : %d\n", mysqli_affected_rows($link));

if(mysqli_affected_rows($link)){
    setcookie("RKEUAC",$_POST["email"],time() + 5*3600);
   print_r($_COOKIE["emailAC"]." logged in!");
}
}

?>
<br>
<h2>Login via Facebook</h2>
<div class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="continue_with" data-show-faces="true" data-auto-logout-link="false" data-use-continue-as="true"></div>

<div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark"></div>

    <script>
      function onSignIn(googleUser) {
        // Useful data for your client-side scripts:
        var profile = googleUser.getBasicProfile();
        console.log("ID: " + profile.getId()); // Don't send this directly to your server!
        console.log('Full Name: ' + profile.getName());
        console.log('Given Name: ' + profile.getGivenName());
        console.log('Family Name: ' + profile.getFamilyName());
        console.log("Image URL: " + profile.getImageUrl());
        console.log("Email: " + profile.getEmail());

        // The ID token you need to pass to your backend:
        var id_token = googleUser.getAuthResponse().id_token;
        console.log("ID Token: " + id_token);
      }
    </script>

</body>
</html>