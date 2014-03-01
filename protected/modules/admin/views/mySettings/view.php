<div class="page-header">
    <h1><?php echo Yii::t('global', 'View'); ?> 
    <small><?php echo Yii::t('global', 'MySettings'); ?> #<?php echo $model->id; ?></small></h1>
</div>

<div class="row-fluid">
<div class="span12 view-settings">
    <div class="head clearfix">
        <div class="isw-grid"></div>
        <h1><?php echo Yii::t('global', 'MySettings'); ?> #<?php echo $model->id; ?></small></h1>
        <ul class="buttons">
            <li><a class="isw-left tipb" href="javascript: history.back()" data-original-title="Back"></a></li>
        </ul> 
    </div>
    
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'date_format',
		'date_time_format',
        array(
            'name'=>'search_match',
            'value'=>$model->search_match,
        ),
        array(
            'name'=>'allow_rate_photo',
            'value'=>$model->getStatus($model->allow_rate_photo),
        ),
        array(
            'name'=>'email_notification',
            'value'=>$model->getStatus($model->email_notification),
        ),
        array(
            'name'=>'allow_comment',
            'value'=>$model->getStatus($model->allow_comment),
        ),
        array(
            'name'=>'receive_newsletter',
            'value'=>$model->getStatus($model->receive_newsletter),
        ),
        array(
            'name'=>'timezone_id',
            'value'=>$model->getTimezone($model->timezone_id),
        ),
        array(
            'name'=>'user_id',
            'value'=>$model->user->username,
        ),
	),
)); ?>


</div>
</div>