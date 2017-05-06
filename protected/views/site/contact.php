<style>

input, textarea {
	width: 100%;
}
</style>

<?php
$this->pageTitle='Contact | '.Yii::app()->name ;
?>

	<div class="banner">
	<div class="container intro_wrapper">
	<div class="inner_content">
	<h1>Do you have questions, feedback, suggestions?  Or just want to say hi!</h1>
	<h1 class="title">Contact</h1>
	

	</div>
		</div>
			</div>

		<div class="container wrapper">
	<div class="inner_content">

<?php if(Yii::app()->user->hasFlash('contact')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('contact'); ?>
</div>

<?php else: ?>

<p>

</p>
<div class="row">
<div class="span6">
<div class="form">
  <form action="https://formspree.io/dave@daveconservatoire.org"
      method="POST">
        <h3>Your Name</h3>
    <input type="text" name="name">
    <h3>Your Email</h3>
    <input type="email" name="_replyto">
    <h3>Your Message</h3>
    <textarea  name="message" style="height:200px"></textarea>  
    <input type="submit" value="Send">
</form>

</div>
</div>
</div>
	</div>




<?php endif; ?>