<div class="5grid-layout" id="menu">
	<nav class="mobileUI-site-nav">
		<ul>
			<li class="current_page_item"><a href="https://www.alphaclasses.com/index.php">About Us</a></li>
			<li><a href="http://www.alphaclasses.com/threecolumn.php">Courses Offered</a></li>
			<li><a href="https://www.alphaclasses.com/quiz.swf">Online TestSeries</a></li>
			<li><a href="https://www.alphaclasses.com/theory.php">Study Material</a></li>
			<li><a href="https://www.alphaclasses.com/contact.php">Contact</a></li>
			<li><a href="https://www.alphaclasses.com/brouchre.pdf">Brochure</a></li>
			<li><a href="https://www.alphaclasses.com/alphaclasses.apk">Android App</a></li>
			<li><a href="https://www.alphaclasses.com/students.php">Students</a></li>
			<li><a href="https://rk-e.blogspot.in">Blog</a></li>
            <li><a href="https://www.youtube.com/user/kaliamanish">Yutub</a></li>
		</ul>
		<ul id="loginscript">

<?php   if(isset($_COOKIE['email']))
        {
        echo '<li><a href=https://www.alphaclasses.com/>'.$_COOKIE['email'].' Logged In</a></li><ul>';
        }
        else {
            echo '<li><a href=https://www.alphaclasses.com/login.php>Login</a></li><li><a href=https://www.alphaclasses.com/register.php>Register</a></li></ul>'; 
        }
?>
	</nav>
</div>
