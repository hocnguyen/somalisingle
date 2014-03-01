<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date_format'); ?>
		<?php echo $form->textField($model,'date_format',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date_time_format'); ?>
		<?php echo $form->textField($model,'date_time_format',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'search_match'); ?>
		<?php echo $form->textField($model,'search_match'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'allow_rate_photo'); ?>
		<?php echo $form->textField($model,'allow_rate_photo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email_notification'); ?>
		<?php echo $form->textField($model,'email_notification'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'allow_comment'); ?>
		<?php echo $form->textField($model,'allow_comment'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'timezone_id'); ?>
		<?php echo $form->textField($model,'timezone_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'receive_newsletter'); ?>
		<?php echo $form->textField($model,'receive_newsletter'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->