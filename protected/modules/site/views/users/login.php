<div class=" container">
    <div class="span3">
    </div>
    <div class="span5 fix-span7">
        <div class="info_login">
            <h5 class="title_login"><?php echo Yii::t('global','Login') ?></h5>
            <?php $this->widget('widgets.admin.notifications'); ?>
            <?php $form=$this->beginWidget('CActiveForm', array(
                'id'=>'users-form',
                'enableAjaxValidation'=>false,
            )); ?>

            <div class="row">
                <div class="span1 fix-span2">
                    <?php echo $form->labelEx($model,'username'); ?>
                </div>
                <div class="span3">
                    <?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>255,'class'=>'span3 ')); ?>
                    <?php echo $form->error($model,'username'); ?>
                </div>
            </div>
            <div class="row">
                <div class="span1 fix-span2">
                    <?php echo $form->labelEx($model,'password'); ?>
                </div>
                <div class="span3">
                    <?php echo $form->passwordField($model,'password',array('size'=>40,'maxlength'=>40,'class'=>' span3')); ?>
                    <?php echo $form->error($model,'password'); ?>
                </div>
            </div>

            <div class="row">
                <div class="span1 fix-span2">

                </div>
                <div class="span3">
                    <?php echo CHtml::submitButton(Yii::t('global','Login') , array('class'=>'fix_btn_submit btn btn-success ')); ?>
                </div>
            </div>

            <?php $this->endWidget(); ?>
        </div>
    </div>
</div>