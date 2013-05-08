<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'lesson-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'filetype'); ?>
		<?php echo $form->textField($model,'filetype',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'filetype'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'seriesno'); ?>
		<?php echo $form->textField($model,'seriesno'); ?>
		<?php echo $form->error($model,'seriesno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lessonno'); ?>
		<?php echo $form->textField($model,'lessonno'); ?>
		<?php echo $form->error($model,'lessonno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'urltitle'); ?>
		<?php echo $form->textField($model,'urltitle',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'urltitle'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'youtubeid'); ?>
		<?php echo $form->textField($model,'youtubeid',array('size'=>60,'maxlength'=>70)); ?>
		<?php echo $form->error($model,'youtubeid'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->