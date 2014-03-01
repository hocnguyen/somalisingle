<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_format')); ?>:</b>
	<?php echo CHtml::encode($data->date_format); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_time_format')); ?>:</b>
	<?php echo CHtml::encode($data->date_time_format); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('search_match')); ?>:</b>
	<?php echo CHtml::encode($data->search_match); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('allow_rate_photo')); ?>:</b>
	<?php echo CHtml::encode($data->allow_rate_photo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email_notification')); ?>:</b>
	<?php echo CHtml::encode($data->email_notification); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('allow_comment')); ?>:</b>
	<?php echo CHtml::encode($data->allow_comment); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('timezone_id')); ?>:</b>
	<?php echo CHtml::encode($data->timezone_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('receive_newsletter')); ?>:</b>
	<?php echo CHtml::encode($data->receive_newsletter); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	*/ ?>

</div>