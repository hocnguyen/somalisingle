<div class=" container">
    <div class="span3">
        <div class="why_join">
            <h5 class="title_whyjoin"><?php echo Yii::t('global','Why Join?') ?></h5>
            <ul>
                <li><?php echo Yii::t('global','Use advanced searches to find someone near you')?></li>
                <li><?php echo Yii::t('global','Post blogs, photos')?></li>
                <li><?php echo Yii::t('global','Talk to other members')?></li>
                <li><?php echo Yii::t('global','Send messages and flirts')?></li>
                <li><?php echo Yii::t('global','Set up notification alerts to know when someone of interest signs up')?></li>
                <li><?php echo Yii::t('global','And much more...')?></li>
            </ul>
        </div>
        <div class="why_join">
            <h5 class="title_whyjoin"><?php echo Yii::t('global','Safety') ?></h5>
            <p>We also want you to enjoy your Somalisingle experience. That's why we have a CODE OF ETHICS and encourage all our members to respect these guidelines.</p>
            <p>Somalisingle provides a safe, discreet and trusted environment for meeting other people.</p>
        </div>

    </div>
    <div class="span8 fix-span7">
        <div class="info_register">
            <h5 class="title_registration"><?php echo Yii::t('global','Registration') ?></h5>
            <?php $form=$this->beginWidget('CActiveForm', array(
                'id'=>'users-form',
                'enableAjaxValidation'=>false,
            )); ?>

                <div class="row">
                    <div class="span2 fix-span2">
                        <?php echo $form->labelEx($model,'ethnicity'); ?>
                    </div>
                    <div class="span5">
                        <?php  $ethnicity = Lookup::items('ethnicity'); ?>
                        <?php echo $form->dropDownList($model, 'ethnicity',$ethnicity, array( 'class'=>'span5' )); ?>
                        <?php echo $form->error($model,'ethnicity'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="span2 fix-span2">
                        <?php echo $form->labelEx($model,'seeking'); ?>
                    </div>
                    <div class="span5">
                        <?php
                        $seeking = array('1'=>Yii::t('global','Men'),'0'=>Yii::t('global','Women'));
                        echo $form->checkBoxList($model, 'seeking', $seeking,array('separator'=>'')); ?>
                        <?php echo $form->error($model,'seeking'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="span2 fix-span2">
                        <?php echo $form->labelEx($model,'firstname'); ?>
                    </div>
                    <div class="span5">
                        <?php   echo $form->textField($model, 'firstname', array( 'class'=>'span5' )); ?>
                        <?php echo $form->error($model,'firstname'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="span2 fix-span2">
                        <?php echo $form->labelEx($model,'lastname'); ?>
                    </div>
                    <div class="span5">
                        <?php   echo $form->textField($model, 'lastname', array( 'class'=>'span5' )); ?>
                        <?php echo $form->error($model,'lastname'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="span2 fix-span2">
                        <?php echo $form->labelEx($model,'height'); ?>
                    </div>
                    <div class="span5">
                        <?php  $ethnicity = Lookup::items('height'); ?>
                        <?php echo $form->dropDownList($model, 'height',$ethnicity, array( 'class'=>'span5' )); ?>
                        <?php echo $form->error($model,'height'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="span2 fix-span2">
                        <?php echo $form->labelEx($model,'body'); ?>
                    </div>
                    <div class="span5">
                        <?php  $ethnicity = Lookup::items('body'); ?>
                        <?php echo $form->dropDownList($model, 'body',$ethnicity, array( 'class'=>'span5' )); ?>
                        <?php echo $form->error($model,'body'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="span2 fix-span2">
                        <?php echo $form->labelEx($model,'eyes'); ?>
                    </div>
                    <div class="span5">
                        <?php  $ethnicity = Lookup::items('eyes'); ?>
                        <?php echo $form->dropDownList($model, 'eyes',$ethnicity, array( 'class'=>'span5' )); ?>
                        <?php echo $form->error($model,'eyes'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="span2 fix-span2">
                        <?php echo $form->labelEx($model,'hair'); ?>
                    </div>
                    <div class="span5">
                        <?php  $ethnicity = Lookup::items('hair'); ?>
                        <?php echo $form->dropDownList($model, 'hair',$ethnicity, array( 'class'=>'span5' )); ?>
                        <?php echo $form->error($model,'hair'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="span2 fix-span2">
                        <?php echo $form->labelEx($model,'smoke'); ?>
                    </div>
                    <div class="span5">
                        <?php  $ethnicity = Lookup::items('smoke'); ?>
                        <?php echo $form->dropDownList($model, 'smoke',$ethnicity, array( 'class'=>'span5' )); ?>
                        <?php echo $form->error($model,'smoke'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="span2 fix-span2">
                        <?php echo $form->labelEx($model,'drink'); ?>
                    </div>
                    <div class="span5">
                        <?php  $ethnicity = Lookup::items('drink'); ?>
                        <?php echo $form->dropDownList($model, 'drink',$ethnicity, array( 'class'=>'span5' )); ?>
                        <?php echo $form->error($model,'drink'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="span2 fix-span2">
                        <?php echo $form->labelEx($model,'education'); ?>
                    </div>
                    <div class="span5">
                        <?php  $ethnicity = Lookup::items('education'); ?>
                        <?php echo $form->dropDownList($model, 'education',$ethnicity, array( 'class'=>'span5' )); ?>
                        <?php echo $form->error($model,'education'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="span2 fix-span2">
                        <?php echo $form->labelEx($model,'marital_status'); ?>
                    </div>
                    <div class="span5">
                        <?php  $ethnicity = Lookup::items('maritalStatus'); ?>
                        <?php echo $form->dropDownList($model, 'marital_status',$ethnicity, array( 'class'=>'span5' )); ?>
                        <?php echo $form->error($model,'marital_status'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="span2 fix-span2">
                        <?php echo $form->labelEx($model,'living_current'); ?>
                    </div>
                    <div class="span5">
                        <?php  $ethnicity = Lookup::items('currentliving'); ?>
                        <?php echo $form->checkBoxList($model, 'living_current', $ethnicity,array('separator'=>'')); ?>
                        <?php echo $form->error($model,'living_current'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="span2 fix-span2">
                        <?php echo $form->labelEx($model,'about_me'); ?>
                    </div>
                    <div class="span5">
                        <?php $this->widget('application.widgets.ckeditor.CKEditor', array( 'name' => 'about_me', 'value' => isset($_POST['about_me']) ? $_POST['about_me'] : '', 'editorTemplate' => 'full' )); ?>
                        <?php echo $form->error($model,'about_me'); ?>
                    </div>
                </div>
                <div class="footer tar">
                    <?php echo CHtml::submitButton( Yii::t('global','Save'), array('class'=>'btn btn-success fix-btn-save')); ?>
                </div>
            <?php $this->endWidget(); ?>
        </div>
    </div>
</div>