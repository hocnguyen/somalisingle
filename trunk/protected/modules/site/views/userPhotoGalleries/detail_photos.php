<div class=" container">
    <div class="span2 fix-span3">
    </div>
    <div class="span11 fix-span7">
        <div class="general-photo">
            <div class="photo-newest">
                <h5 class="title_whyjoin"><?php echo strtoupper($model->user->username).Yii::t('global','\'s Photos') ?></h5>
                <div class="row ">
                    <div class="span2 fix-span2-left "><?php echo Yii::t('global','Rate this photo') ?></div>
                    <div class="span4">
                        <?php
                        $this->widget('ext.DzRaty.DzRaty', array(
                            'name' => 'my_rating_field',
                            'value' => Ratings::model()->getRating($model->id),
                            'options' => array(
                                'half' => TRUE,
                                'click' => "js:function(score, evt){ ratings(score,".$model->id.") }",

                            ),
                        ));
                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="span2 fix-span2-left"></div>
                    <div class="span5 fix-img-detail">
                        <img src="/uploads/photos/<?php echo $model->filename ?>"/>
                    </div>
                </div>
                <?php if(count($allComment->getData()>0)){ ?>
                <div class="row">
                    <div class="span2 fix-span2-left"> </div>
                    <div class="span8 fix-img-detail">
                        <b><?php echo Yii::t('global','Comments')."(".count($allComment->getData()).")" ?> </b>
                        <hr/>
                        <?php $this->widget('zii.widgets.CListView', array(
                            'dataProvider'=>$allComment,
                            'ajaxUpdate'=>false,
                            'summaryText'=>'',
                            'itemView'=>'../elements/comment_photo',
                        )); ?>
                    </div>
                </div>
                <?php } ?>
                <div class="row">
                    <div class="span2 fix-span2-left">
                        <?php echo Yii::t('global','Leave your comment') ?>
                    </div>
                    <div class="span5 fix-img-detail">
                        <?php $form=$this->beginWidget('CActiveForm', array(
                            'id'=>'user-photo-galleries-form',
                            'enableAjaxValidation'=>false,
                        )); ?>
                        <div class="span5 fix-span3">
                            <?php echo $form->textArea($comment,'content',array('rows'=>6, 'cols'=>50,'class'=>'span5')); ?>
                            <?php echo $form->error($comment,'content'); ?>
                        </div>
                        <div class="footer tar">
                            <?php echo CHtml::submitButton(Yii::t('global','Save'), array('class'=>'btn btn-success')); ?>
                        </div>

                        <?php $this->endWidget(); ?>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>