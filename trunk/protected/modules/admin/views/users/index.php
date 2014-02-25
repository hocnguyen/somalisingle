<div class="page-header">
    <h1><?php echo Yii::t('global', 'Manage'); ?> 
    <small><?php echo Yii::t('global', 'Users'); ?></small></h1>
</div>

<div class="row-fluid"><div class="span12">
<div class="head clearfix">
    <div class="isw-grid"></div>
     <?php if(isset($type) && $type == 'admin'){ ?>
            <h1><?php echo Yii::t('global', 'Admin'); ?></h1>
        <ul class="buttons">
            <li><a class="isw-plus tipb" href="<?php echo $this->createUrl('users/createadmin') ?>" data-original-title="<?php echo Yii::t('global', 'Create'); ?> <?php echo Yii::t('global', 'Admin'); ?>"></a></li>
        </ul>
        <?php }  else { ?>
        <h1><?php echo Yii::t('global', 'Members'); ?></h1>
        <?php } ?>                        
</div>
<div class="block-fluid table-sorting">

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'users-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
        'username',
		'firstname',
		'lastname',
		'email',
		'role',
		/*
		'vericode',
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
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
</div>
</div></div>