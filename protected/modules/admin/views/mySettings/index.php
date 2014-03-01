<div class="page-header">
    <h1><?php echo Yii::t('global', 'Manage'); ?> 
    <small><?php echo Yii::t('global', 'My Settings'); ?></small></h1>
</div>

<div class="row-fluid"><div class="span12">
<div class="head clearfix">
    <div class="isw-grid"></div>
    <h1><?php echo Yii::t('global', 'My Settings'); ?></h1>      
    <ul class="buttons">
        <li><a class="isw-plus tipb" href="<?php echo $this->createUrl('mySettings/create') ?>" data-original-title="<?php echo Yii::t('global', 'Create'); ?> <?php echo Yii::t('global', 'MySettings'); ?>"></a></li>
    </ul>                        
</div>
<div class="block-fluid table-sorting">

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'my-settings-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
        array(
            'name'=>'username',
            'value'=>'$data->user->username'
        ),

        array(
            'name'=>'firstname',
            'value'=>'$data->user->firstname'
        ),

        array(
            'name'=>'lastname',
            'value'=>'$data->user->lastname'
        ),

		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
</div>
</div></div>