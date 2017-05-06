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
	<h1>Need some extra help? - book a session with Dave!</h1>
	<h1 class="title">Personal Tuition</h1>
	

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


<div class="row">
	
<div class="span9">
  <p>&nbsp;</p>
<p>	Students on Dave Conservatoire often ask for some extra help on their musical journey.  It is very reassuring to know you're on the right path, have that bit of guidance before the big test or get some regular honest feedback about your performance or composition work.  </p>

<p>For that reason, I am pleased to offer personal music tutoring via Skype or Google Hangout.  This works surprisingly well and allows anyone to access a music teacher at a time that suits them and at low cost.  Prices start from $40 for a single 30 minute session and discounts for multiple bookings are available.</p>  

<p>If you might find this useful, please complete the contact form and we can arrange a free consultation lesson to discuss your requirements.</p>

<div class="form">
    <form action="https://formspree.io/dave@daveconservatoire.org"
      method="POST">
        <h3>Your Name</h3>
    <input type="text" name="name">
    <h3>Your Email</h3>
    <input type="email" name="_replyto">
    <h3>Your Message</h3>
    <textarea  name="message" ></textarea>  
    <input type="submit" value="Send">
</form>
</div>

    </div>
  </div>
</div>



<?php endif; ?>