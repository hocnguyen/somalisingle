
<div class="block-fluid">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'my-settings-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

    <div class="row-form clearfix">
        <div class="span4">
            <?php echo $form->labelEx($model,'date_format'); ?>
        </div>
        <div class="span3">
            <?php echo $form->textField($model,'date_format',array('size'=>60,'maxlength'=>255,'value'=>'%m/%d/%Y')); ?>
            <?php echo $form->error($model,'date_format'); ?>
        </div>
    </div>

    <div class="row-form clearfix">
        <div class="span4">
            <?php echo $form->labelEx($model,'date_time_format'); ?>
        </div>
        <div class="span3">
            <?php echo $form->textField($model,'date_time_format',array('size'=>60,'maxlength'=>255,'value'=>'%m/%d/%Y %I:%M %p')); ?>
            <?php echo $form->error($model,'date_time_format'); ?>
        </div>
    </div>

    <div class="row-form clearfix">
        <div class="span4">
            <?php echo $form->labelEx($model,'search_match'); ?>
        </div>
        <div class="span3">
            <?php echo $form->textField($model,'search_match'); ?>
            <?php echo $form->error($model,'search_match'); ?>
        </div>
    </div>

    <div class="row-form clearfix">
        <div class="span4">
            <?php echo $form->labelEx($model,'allow_rate_photo'); ?>
        </div>
        <div class="span3">
            <?php echo $form->checkBox($model,'allow_rate_photo'); ?>
            <?php echo $form->error($model,'allow_rate_photo'); ?>
        </div>
    </div>

    <div class="row-form clearfix">
        <div class="span4">
            <?php echo $form->labelEx($model,'email_notification'); ?>
        </div>
        <div class="span3">
            <?php echo $form->checkBox($model,'email_notification'); ?>
            <?php echo $form->error($model,'email_notification'); ?>
        </div>
    </div>

    <div class="row-form clearfix">
        <div class="span4">
            <?php echo $form->labelEx($model,'allow_comment'); ?>
        </div>
        <div class="span3">
            <?php echo $form->checkBox($model,'allow_comment'); ?>
            <?php echo $form->error($model,'allow_comment'); ?>
        </div>
    </div>

    <div class="row-form clearfix">
        <div class="span4">
            <?php echo $form->labelEx($model,'timezone_id'); ?>
        </div>
        <div class="span3">
            <?php $time_zone = TimeZone::model()->findAll();
            $allTimeZone = array();
            foreach($time_zone as $item){
                $allTimeZone[$item->id] = $item->name;
            }
            echo $form->dropDownList($model, 'timezone_id',$allTimeZone, array( 'prompt' => Yii::t('global', '-----Choose Value-----') ));?>
            <?php echo $form->error($model,'timezone_id'); ?>
        </div>
    </div>

    <div class="row-form clearfix">
        <div class="span4">
            <?php echo $form->labelEx($model,'receive_newsletter'); ?>
        </div>
        <div class="span3">
            <?php echo $form->checkBox($model,'receive_newsletter'); ?>
            <?php echo $form->error($model,'receive_newsletter'); ?>
        </div>
    </div>

	<div class="row-form clearfix">
		<div class="span3">
            <?php echo $form->labelEx($model,'user_id'); ?>
        </div>
		<div class="span9">
            <?php echo $model->user->username ?>
            <?php echo $form->error($model,'user_id'); ?>
        </div>
	</div>

	<div class="footer tar">
		<?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('global','Create') : Yii::t('global','Save'), array('class'=>'btn')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->