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

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contact-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<?php echo $form->errorSummary($model); ?>


	<p class="note">Fields with <span class="required">*</span> are required.</p>

        <fieldset>
          
          <div class="control-group">
         <?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name'); ?>
		<?php echo $form->error($model,'name'); ?>
          </div>
          <div class="control-group">
     		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email'); ?>
		<?php echo $form->error($model,'email'); ?>
          </div>
         <div class="control-group">
     		<?php echo $form->labelEx($model,'subject'); ?>
		<?php echo $form->textField($model,'subject'); ?>
		<?php echo $form->error($model,'subject'); ?>
          </div>
          <div class="control-group">
		<?php echo $form->labelEx($model,'body'); ?>
		<?php echo $form->textArea($model,'body',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'body'); ?>
            
          </div>
          
          
	<?php if(CCaptcha::checkRequirements()): ?>
	 <div class="control-group">
		<?php echo $form->labelEx($model,'verifyCode'); ?>
		<div>
		<?php $this->widget('CCaptcha'); ?>
		<?php echo $form->textField($model,'verifyCode'); ?>
		</div>
		<div class="hint">Please enter the letters as they are shown in the image above.
		<br/>Letters are not case-sensitive.</div>
		<?php echo $form->error($model,'verifyCode'); ?>
	</div>
	<?php endif; ?>
          <div class="form-actions">
            <button type="submit" class="btn btn-primary">Send!</button>
            <button type="reset" class="btn">Clear</button>
          </div>
        </fieldset>
</div></div></div></div>

<?php $this->endWidget(); ?>


<?php endif; ?>