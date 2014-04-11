<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	'enableAjaxValidation'=>true,
	'action'=>'profile/update',
)); ?>
<?php echo $form->errorSummary($model); ?>
	
	
		<?php echo $form->labelEx($model,'biog'); ?>
		<?php echo $form->textArea($model,'biog',array('size'=>60,'maxlength'=>160)); ?>
		<?php echo $form->error($model,'biog'); ?>


	
	</div>

	<div class="row buttons">
		
		  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
   <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
  </div>

<?php $this->endWidget(); ?>

</div><!-- form -->