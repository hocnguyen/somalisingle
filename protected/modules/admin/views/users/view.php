<div class="page-header">
    <h1><?php echo Yii::t('global', 'View'); ?> 
    <small><?php echo Yii::t('global', 'Users'); ?> #<?php echo $model->id; ?></small></h1>
</div>

<div class="row-fluid">
<div class="span12">
    <div class="head clearfix">
        <div class="isw-grid"></div>
        <h1><?php echo Yii::t('global', 'Users'); ?> #<?php echo $model->id; ?></small></h1>
        <ul class="buttons">
            <li><a class="isw-left tipb" href="javascript: history.back()" data-original-title="Back"></a></li>
        </ul> 
    </div>
    
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
		'firstname',
		'lastname',
		'email',
		//'password',
		'role',
		'vericode',
		'username',
		'gender',
		'seeking',
		'birthday',
		'country_id',
		'about_me',
		'ethnicity',
		'height',
		'body',
		'eyes',
		'hair',
		'smoke',
		'drink',
		'education',
		'marital_status',
		'living_current',
		'status',
	),
)); ?>


</div>
</div>