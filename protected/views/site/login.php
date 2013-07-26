
<?php
$this->pageTitle='Login | '.Yii::app()->name ;
?>

	<div id="banner">
	<div class="container intro_wrapper">
	<div class="inner_content">

	<h1 class="title">Login</h1>
	

	</div>
		</div>
			</div>

			<div class="container wrapper">
	<div class="inner_content">
<h3>Do you already have an account on one of these sites? Click the logo to use your account to login here:</h3>
<p>&nbsp;</p>
<?php Yii::app()->eauth->renderWidget(); ?>
<p>&nbsp;</p>
<h3>Why should I log in?</h3>
<p>Logging in helps us to keep track of what you've been learning about, assess your progress and make the site better!</p>
<p>&nbsp;</p>
<h3>Why are you asking me to login with my Google or Facebook account?</h3>
<p>Rather than make you sign up for yet another online service with a new username and password to remember, you can use an account you already have set up.  This is the safest and easiest way for you to login with us.</p>
<p>&nbsp;</p>
<h3>Won't this give you access to all my private data?</h3>
<p>Definitely not!  The only information we will ever store about you is your name and email address - and how awesome you're becoming at music!</p>
<p>&nbsp;</p>
<h3>What if I don't have an account with one of these three sites?</h3>
<p>No problem!  Just go sign up <a href="https://accounts.google.com/SignUp?continue=https%3A%2F%2Faccounts.google.com%2FManageAccount" target="_blank">here</a> or <a href="http://www.facebook.com/r.php?locale=en_GB" target="_blank">here</a>. </p>
	</div>
			</div>