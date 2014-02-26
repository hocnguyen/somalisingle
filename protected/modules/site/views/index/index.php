<div id="content" class="content-extra">
    <div class="container">
        <div class="row">
            <article class="span6">
                <div class="wrapper">
                    <div class="register">
                        <?php $form=$this->beginWidget('CActiveForm', array(
                            'id'=>'users-form',
                            'enableAjaxValidation'=>false,
                        )); ?>
                        <?php  echo $form->errorSummary($model); ?>
                            <div class="row fix_height-row">
                                <div class="span1"><?php echo Yii::t('global','I am') ?> </div>
                                <div class="span3">
                                    <input class="gender validate[required]" type="radio" name="gender" id="male"/><label class="lbl_gender" for="male"><?php echo Yii::t('global','Male') ?> </label>
                                    <input class="gender validate[required]" type="radio" name="gender" id="female"/><label class="lbl_gender" for="female"><?php echo Yii::t('global','Female') ?> </label>
                                </div>
                            </div>
                            <div class="row fix_height-row">
                                <div class="span1"><?php echo Yii::t('global','From') ?> </div>
                                <div class="span3">
                                    <?php $country = CHtml::listData(Countries::model()->findAll(), 'id', 'short_name' );
                                    foreach ($country as $key=>$value){
                                        $country[$key] = Yii::t('global', $value);
                                    } ?>
                                    <span id="country" >
									<?php echo $form->dropDownList($model, 'country_id', $country, array( 'prompt' => Yii::t('global', '-- Choose Value --'),'class'=>'span4' )); ?>
								</span>
                                </div>
                            </div>
                            <div class="row fix_height-row">
                                <div class="span1"><?php echo Yii::t('global','Birthday') ?> </div>
                                <div class="span3">
                                    <?php
                                    echo $form->dropDownList($model, 'bday', DateHelper::getDays(), array('prompt' => Yii::t('global','Day'),'class' => 'validate[required] span1 space'));
                                    echo $form->dropDownList($model, 'bmonth', DateHelper::getMonths(), array('prompt' => Yii::t('global','Month'),'class' => 'validate[required] span1 space'));
                                    echo $form->dropDownList($model, 'byear', DateHelper::getYears(), array('prompt' => Yii::t('global','Year'),'class' => 'validate[required] span1 space'));
                                    ?>
                                </div>
                            </div>
                            <div class="row fix_height-row">
                                <div class="span1"><?php echo $form->labelEx($model,'username'); ?> </div>
                                <div class="span3">
                                    <?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>255,'class'=>'span4 validate[required]')); ?>

                                </div>
                            </div>
                            <div class="row fix_height-row">
                                <div class="span1">  <?php echo $form->labelEx($model,'password'); ?></div>
                                <div class="span3">
                                    <?php echo $form->passwordField($model,'password',array('size'=>40,'maxlength'=>40,'class'=>'validate[required] span4')); ?>
                                </div>
                            </div>
                            <div class="row fix_height-row">
                                <div class="span1"> <?php echo $form->labelEx($model,'email'); ?> </div>
                                <div class="span3">
                                    <?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>155,'class'=>'span4 validate[custom[email],required]')); ?>
                                </div>
                            </div>
                            <div class="row fix_height-row">
                                <div class="span1"></div>
                                <div class="span4">
                                    <input class="span1"  name="termServices" type="checkbox"  id="checkterm"/>
                                    <span class="lblterm"> <?php echo Yii::t('global',' I agree to Somalisingle {term_services}.',array('{term_services}'=> '<a href="">terms of services</a>'))?></span>

                                </div>
                                    <div class="noticeStatus" id="noticeStatus"></div>
                            </div>
                            <div class="row fix_height-row">
                                <div class="span1"></div>
                                <div class="span3">

                                    <?php echo CHtml::submitButton(Yii::t('global','Register Now') , array('class'=>'fix_btn_submit btn btn-success ', 'id'=>'registerbutton','onclick'=>'return false' )); ?>
                                </div>
                            </div>
                        <?php $this->endWidget(); ?>
                    </div>
                </div>
            </article>
            <article class="span6">
                <!--<ul class="list-photo fix-position-photo">
                    <li><a href="themes/default/img/image-blank.png" class="magnifier" ><img src="themes/default/img/1.jpg " alt="" /></a></li>
                    <li><a href="themes/default/img/image-blank.png" class="magnifier" ><img src="themes/default/img/2.jpg " alt="" /></a></li>
                    <li><a href="themes/default/img/image-blank.png" class="magnifier" ><img src="themes/default/img/3.jpg " alt="" /></a></li>
                    <li class="last"><a href="themes/default/img/image-blank.png" class="magnifier" ><img src="themes/default/img/4.jpg " alt="" /></a></li>
                    <li><a href="themes/default/img/image-blank.png" class="magnifier" ><img src="themes/default/img/5.jpg " alt="" /></a></li>
                    <li><a href="themes/default/img/image-blank.png" class="magnifier" ><img src="themes/default/img/1.jpg " alt="" /></a></li>
                    <li><a href="themes/default/img/image-blank.png" class="magnifier" ><img src="themes/default/img/7.jpg " alt="" /></a></li>
                    <li class="last"><a href="themes/default/img/image-blank.png" class="magnifier" ><img src="themes/default/img/8.jpg " alt="" /></a></li>
              </ul>-->
                <img class="cover-photo-index" src="/themes/default/img/cover-photo.jpg"/>
            </article>
        </div>
    </div>
</div>
<script type="text/javascript">
    $('#registerbutton').live('click',function(){
        if ($('#checkterm').is(":checked")){
            $('#users-form').submit();
        } else {
            $('#noticeStatus').html('<?php echo Yii::t('global','Please check agree Somalisingle terms of services') ?>');
        }

    })


</script>