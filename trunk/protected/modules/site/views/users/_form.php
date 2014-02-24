
<div class="block-fluid">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'users-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row-form clearfix">
		<div class="span3">
            <?php echo $form->labelEx($model,'firstname'); ?>
        </div>
		<div class="span9">
            <?php echo $form->textField($model,'firstname',array('size'=>60,'maxlength'=>255)); ?>
            <?php echo $form->error($model,'firstname'); ?>
        </div>
	</div>

	<div class="row-form clearfix">
		<div class="span3">
            <?php echo $form->labelEx($model,'lastname'); ?>
        </div>
		<div class="span9">
            <?php echo $form->textField($model,'lastname',array('size'=>60,'maxlength'=>255)); ?>
            <?php echo $form->error($model,'lastname'); ?>
        </div>
	</div>

	<div class="row-form clearfix">
		<div class="span3">
            <?php echo $form->labelEx($model,'email'); ?>
        </div>
		<div class="span9">
            <?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>155)); ?>
            <?php echo $form->error($model,'email'); ?>
        </div>
	</div>

	<div class="row-form clearfix">
		<div class="span3">
            <?php echo $form->labelEx($model,'password'); ?>
        </div>
		<div class="span9">
            <?php echo $form->passwordField($model,'password',array('size'=>40,'maxlength'=>40)); ?>
            <?php echo $form->error($model,'password'); ?>
        </div>
	</div>

	<div class="row-form clearfix">
		<div class="span3">
            <?php echo $form->labelEx($model,'role'); ?>
        </div>
		<div class="span9">
            <?php echo $form->textField($model,'role',array('size'=>20,'maxlength'=>20)); ?>
            <?php echo $form->error($model,'role'); ?>
        </div>
	</div>

	<div class="row-form clearfix">
		<div class="span3">
            <?php echo $form->labelEx($model,'vericode'); ?>
        </div>
		<div class="span9">
            <?php echo $form->textField($model,'vericode',array('size'=>60,'maxlength'=>255)); ?>
            <?php echo $form->error($model,'vericode'); ?>
        </div>
	</div>

	<div class="row-form clearfix">
		<div class="span3">
            <?php echo $form->labelEx($model,'username'); ?>
        </div>
		<div class="span9">
            <?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>255)); ?>
            <?php echo $form->error($model,'username'); ?>
        </div>
	</div>

	<div class="row-form clearfix">
		<div class="span3">
            <?php echo $form->labelEx($model,'gender'); ?>
        </div>
		<div class="span9">
            <?php echo $form->textField($model,'gender'); ?>
            <?php echo $form->error($model,'gender'); ?>
        </div>
	</div>

	<div class="row-form clearfix">
		<div class="span3">
            <?php echo $form->labelEx($model,'seeking'); ?>
        </div>
		<div class="span9">
            <?php echo $form->textField($model,'seeking'); ?>
            <?php echo $form->error($model,'seeking'); ?>
        </div>
	</div>

	<div class="row-form clearfix">
		<div class="span3">
            <?php echo $form->labelEx($model,'birthday'); ?>
        </div>
		<div class="span9">
            <?php echo $form->textField($model,'birthday',array('size'=>60,'maxlength'=>200)); ?>
            <?php echo $form->error($model,'birthday'); ?>
        </div>
	</div>

	<div class="row-form clearfix">
		<div class="span3">
            <?php echo $form->labelEx($model,'country_id'); ?>
        </div>
		<div class="span9">
            <?php echo $form->textField($model,'country_id'); ?>
            <?php echo $form->error($model,'country_id'); ?>
        </div>
	</div>

	<div class="row-form clearfix">
		<div class="span3">
            <?php echo $form->labelEx($model,'about_me'); ?>
        </div>
		<div class="span9">
            <?php echo $form->textArea($model,'about_me',array('rows'=>6, 'cols'=>50)); ?>
            <?php echo $form->error($model,'about_me'); ?>
        </div>
	</div>

	<div class="row-form clearfix">
		<div class="span3">
            <?php echo $form->labelEx($model,'ethnicity'); ?>
        </div>
		<div class="span9">
            <?php echo $form->textField($model,'ethnicity'); ?>
            <?php echo $form->error($model,'ethnicity'); ?>
        </div>
	</div>

	<div class="row-form clearfix">
		<div class="span3">
            <?php echo $form->labelEx($model,'height'); ?>
        </div>
		<div class="span9">
            <?php echo $form->textField($model,'height'); ?>
            <?php echo $form->error($model,'height'); ?>
        </div>
	</div>

	<div class="row-form clearfix">
		<div class="span3">
            <?php echo $form->labelEx($model,'body'); ?>
        </div>
		<div class="span9">
            <?php echo $form->textField($model,'body'); ?>
            <?php echo $form->error($model,'body'); ?>
        </div>
	</div>

	<div class="row-form clearfix">
		<div class="span3">
            <?php echo $form->labelEx($model,'eyes'); ?>
        </div>
		<div class="span9">
            <?php echo $form->textField($model,'eyes'); ?>
            <?php echo $form->error($model,'eyes'); ?>
        </div>
	</div>

	<div class="row-form clearfix">
		<div class="span3">
            <?php echo $form->labelEx($model,'hair'); ?>
        </div>
		<div class="span9">
            <?php echo $form->textField($model,'hair'); ?>
            <?php echo $form->error($model,'hair'); ?>
        </div>
	</div>

	<div class="row-form clearfix">
		<div class="span3">
            <?php echo $form->labelEx($model,'smoke'); ?>
        </div>
		<div class="span9">
            <?php echo $form->textField($model,'smoke'); ?>
            <?php echo $form->error($model,'smoke'); ?>
        </div>
	</div>

	<div class="row-form clearfix">
		<div class="span3">
            <?php echo $form->labelEx($model,'drink'); ?>
        </div>
		<div class="span9">
            <?php echo $form->textField($model,'drink'); ?>
            <?php echo $form->error($model,'drink'); ?>
        </div>
	</div>

	<div class="row-form clearfix">
		<div class="span3">
            <?php echo $form->labelEx($model,'education'); ?>
        </div>
		<div class="span9">
            <?php echo $form->textField($model,'education'); ?>
            <?php echo $form->error($model,'education'); ?>
        </div>
	</div>

	<div class="row-form clearfix">
		<div class="span3">
            <?php echo $form->labelEx($model,'marital_status'); ?>
        </div>
		<div class="span9">
            <?php echo $form->textField($model,'marital_status'); ?>
            <?php echo $form->error($model,'marital_status'); ?>
        </div>
	</div>

	<div class="row-form clearfix">
		<div class="span3">
            <?php echo $form->labelEx($model,'living_current'); ?>
        </div>
		<div class="span9">
            <?php echo $form->textField($model,'living_current',array('size'=>60,'maxlength'=>255)); ?>
            <?php echo $form->error($model,'living_current'); ?>
        </div>
	</div>

	<div class="footer tar">
		<?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('global','Create') : Yii::t('global','Save'), array('class'=>'btn')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->