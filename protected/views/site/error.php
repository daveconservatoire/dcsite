<?php
$this->pageTitle='Sorry, something is not right! | '.Yii::app()->name ;
?>


<!--banner-->
	<div class="banner">
	<div class="container intro_wrapper">
	<div class="inner_content">
	<h1>". . . how was I supposed to know / that something wasn't right here?"</h1>
	<h1 class="title">Error <?php echo $code; ?></h1>
	
	<h1 class="intro"><?php echo CHtml::encode($message); ?></h1>
	</div>
		</div>
			</div>