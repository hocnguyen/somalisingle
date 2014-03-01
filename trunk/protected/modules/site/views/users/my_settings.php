<div class=" container">
    <div class="span3 fix-span3">
        <div class="why_join">
            <h5 class="title_whyjoin"><?php echo Yii::t('global','My Account') ?></h5>
            <?php echo $this->renderPartial('../elements/my_profile_menu') ?>
        </div>
        <div class="change_password">
            <h5 class="title_whyjoin"><?php echo Yii::t('global','Change Password') ?></h5>

                <?php $form=$this->beginWidget('CActiveForm', array(
                    'id'=>'users-form',
                    'enableAjaxValidation'=>false,
                )); ?>

                <?php echo $form->errorSummary($user); ?>

                <div class="row-form clearfix">
                    <div class="span2">
                        <?php echo $form->labelEx($user,'newpassword'); ?>
                    </div>
                    <div class="span2">
                        <?php echo $form->passwordField($user,'newpassword',array('size'=>60,'maxlength'=>255,'class'=>'validate[required] span2')); ?>
                        <?php echo $form->error($user,'newpassword'); ?>
                    </div>
                </div>
                <div class="row-form clearfix">
                    <div class="span2">
                        <?php echo $form->labelEx($user,'newpasswordagain'); ?>
                    </div>
                    <div class="span2">
                        <?php echo $form->passwordField($user,'newpasswordagain',array('size'=>60,'maxlength'=>255,'class'=>'validate[equals[Users_newpassword]] span2')); ?>
                        <?php echo $form->error($user,'newpasswordagain'); ?>
                    </div>
                </div>
                <div class="footer tar">
                <?php echo CHtml::submitButton(Yii::t('global','Change'), array('class'=>'btn btn-success fix-btn-change')); ?>
            </div>
            <?php $this->endWidget(); ?>
        </div>
    </div>
    <div class="span9 fix-span7">
        <div class="my-home">
            <h5 class="title_whyjoin"><?php echo Yii::t('global','My Settings') ?></h5>
            <?php $this->widget('widgets.admin.notifications'); ?>
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

            <div class="footer tar">
                <?php echo CHtml::submitButton( Yii::t('global','Save'), array('class'=>'btn btn-success fix-btn-change')); ?>
            </div>

            <?php $this->endWidget(); ?>
            <hr/>
            <div class="change-email">
                <p class="text-email"><?php echo Yii::t('global','The email address we\'re using to communicate with you is hocnv@yopmail.com. If you want to change it, you can use the form below:') ?></p>
            </div>
            <div class="change-email-form">
                <h5 class="title-change-email"><?php echo Yii::t('global','Change your email address') ?></h5>
                <div class="form-change-email">
                    <?php $form=$this->beginWidget('CActiveForm', array(
                        'id'=>'email-form',
                        'enableAjaxValidation'=>false,
                    )); ?>
                    <div class="row-form clearfix">
                        <div class="span2">
                            <?php echo $form->labelEx($user,'newemail'); ?>
                        </div>
                        <div class="span3">
                            <?php echo $form->textField($user,'newemail',array('class'=>'validate[required],custom[email]')); ?>
                            <?php echo $form->error($user,'newemail'); ?>
                        </div>
                    </div>
                    <div class="row-form clearfix">
                        <div class="span2">
                            <?php echo $form->labelEx($user,'newemailagain'); ?>
                        </div>
                        <div class="span3">
                            <?php echo $form->textField($user,'newemailagain',array('class'=>'validate[required],equals[Users_newemail]')); ?>
                            <?php echo $form->error($user,'newemailagain'); ?>
                        </div>
                    </div>
                    <div class="footer tar">
                        <?php echo CHtml::submitButton( Yii::t('global','Change'), array('class'=>'btn btn-success fix-btn-change')); ?>
                    </div>
                    <?php $this->endWidget(); ?>
                </div>
                <hr/>
            </div>

            <div class="cancel-your-account">
                <h5 class="title-change-email"><?php echo Yii::t('global','Cancel account') ?></h5>
                <p class="text-email">
                    If you no longer wish to stay with us you can cancel your account at anytime by clicking on this link: <a class="cancel-account" href=""><?php echo Yii::t('global','Cancel account') ?></a>
                    <br/>
                    Please note that if you have an active Paypal subscription with us you will have to cancel it from your Paypal account.
                </p>
            </div>
        </div>


    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
       $('.cancel-account').click(function(){
           var hideConfirm = confirm('<?php echo Yii::t('global','Are you sure delete your account?') ?>');
           if(hideConfirm == true){
              $.get('/users/deleteUser',function(){
                  window.location.reload();
              });
           }
           return false;
       })
    });
</script>