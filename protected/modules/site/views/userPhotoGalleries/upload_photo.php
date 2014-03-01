
<div class=" container">
    <div class="span2 fix-span3">

    </div>
    <div class="span8 fix-span7">
        <div class="general-photo">
            <div class="photo-newest">
                <h5 class="title_whyjoin"><?php echo Yii::t('global','Uploads Photos') ?></h5>
                <?php $form=$this->beginWidget('CActiveForm', array(
                    'id'=>'user-photo-galleries-form',
                    'enableAjaxValidation'=>false,
                    'htmlOptions'=>array(
                        'enctype' => 'multipart/form-data',
                    ),
                )); ?>
                    <div class="row-form clearfix">
                        <div class="span2">
                            <?php echo $form->labelEx($model,'filename'); ?>
                        </div>
                        <div class="span4">
                            <?php echo $form->fileField($model,'filename',array('class'=>'validate[required]')); ?>
                            <?php echo $form->error($model,'filename'); ?>
                        </div>
                    </div>

                    <div class="row-form clearfix">
                        <div class="span2">
                            <?php echo $form->labelEx($model,'is_private'); ?>
                        </div>
                        <div class="span4">
                            <?php echo $form->checkBox($model,'is_private',array('class'=>'is_private')); ?>
                            <?php echo $form->error($model,'is_private'); ?>
                        </div>
                    </div>

                    <div class="row-form clearfix">
                        <div class="span2">
                            <?php echo $form->labelEx($model,'is_comment'); ?>
                        </div>
                        <div class="span4">
                            <?php echo $form->checkBox($model,'is_comment'); ?>
                            <?php echo $form->error($model,'is_comment'); ?>
                        </div>
                    </div>

                    <div class="row-form clearfix">
                        <div class="span2">
                            <?php echo $form->labelEx($model,'is_photo_main'); ?>
                        </div>
                        <div class="span4">
                            <?php echo $form->checkBox($model,'is_photo_main',array('class'=>'is_main')); ?>
                            <?php echo $form->error($model,'is_photo_main'); ?>
                        </div>
                    </div>
                    <div class="row-form clearfix">
                        <div class="span2">
                            <?php echo $form->labelEx($model,'description'); ?>
                        </div>
                        <div class="span4">
                            <?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50,'class'=>'span4')); ?>
                            <?php echo $form->error($model,'description'); ?>
                        </div>
                    </div>


                <div class="footer tar">
                    <?php echo CHtml::submitButton( Yii::t('global','Upload'), array('class'=>'btn btn-success fix-btn-save')); ?>
                </div>
                <?php $this->endWidget(); ?>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $('.is_private').click(function(){
        if($(".is_private").is(':checked')) {
            $('.is_main').attr('checked', false);
        }
    });
    $('.is_main').click(function(){
        if($(".is_main").is(':checked')) {
            $('.is_private').attr('checked', false);
        }
    });
</script>



