
<div class="block-fluid">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-photo-galleries-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row-form clearfix">
		<div class="span3">
            <?php echo $form->labelEx($model,'user_id'); ?>
        </div>
		<div class="span9">
            <?php echo $form->textField($model,'user_id'); ?>
            <?php echo $form->error($model,'user_id'); ?>
        </div>
	</div>

	<div class="row-form clearfix">
		<div class="span3">
            <?php echo $form->labelEx($model,'filename'); ?>
        </div>
		<div class="span9">
            <?php echo $form->textField($model,'filename',array('size'=>60,'maxlength'=>255)); ?>
            <?php echo $form->error($model,'filename'); ?>
        </div>
	</div>

	<div class="row-form clearfix">
		<div class="span3">
            <?php echo $form->labelEx($model,'description'); ?>
        </div>
		<div class="span9">
            <?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
            <?php echo $form->error($model,'description'); ?>
        </div>
	</div>

	<div class="row-form clearfix">
		<div class="span3">
            <?php echo $form->labelEx($model,'is_private'); ?>
        </div>
		<div class="span9">
            <?php echo $form->textField($model,'is_private'); ?>
            <?php echo $form->error($model,'is_private'); ?>
        </div>
	</div>

	<div class="row-form clearfix">
		<div class="span3">
            <?php echo $form->labelEx($model,'is_comment'); ?>
        </div>
		<div class="span9">
            <?php echo $form->textField($model,'is_comment'); ?>
            <?php echo $form->error($model,'is_comment'); ?>
        </div>
	</div>

	<div class="row-form clearfix">
		<div class="span3">
            <?php echo $form->labelEx($model,'is_photo_main'); ?>
        </div>
		<div class="span9">
            <?php echo $form->textField($model,'is_photo_main'); ?>
            <?php echo $form->error($model,'is_photo_main'); ?>
        </div>
	</div>

	<div class="row-form clearfix">
		<div class="span3">
            <?php echo $form->labelEx($model,'created'); ?>
        </div>
		<div class="span9">
            <?php echo $form->textField($model,'created'); ?>
            <?php echo $form->error($model,'created'); ?>
        </div>
	</div>

	<div class="row-form clearfix">
		<div class="span3">
            <?php echo $form->labelEx($model,'updated'); ?>
        </div>
		<div class="span9">
            <?php echo $form->textField($model,'updated'); ?>
            <?php echo $form->error($model,'updated'); ?>
        </div>
	</div>

	<div class="footer tar">
		<?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('global','Create') : Yii::t('global','Save'), array('class'=>'btn')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->