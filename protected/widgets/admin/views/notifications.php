<!-- Start Notifications -->
<?php if( Yii::app()->user->hasFlash('information') ): ?>
	<div class="alert alert-info">
		<h5><?php echo Yii::t('global','Information!'); ?></h5>
		<?php echo Yii::app()->user->getFlash('information'); ?>
	</div>
<?php endif; ?>

<?php if( Yii::app()->user->hasFlash('error') ): ?>
	<div class="alert alert-error">
		<h5><?php echo Yii::t('global','Warning!'); ?></h5>
		<?php echo Yii::app()->user->getFlash('error'); ?>
	</div>
<?php endif; ?>

<?php if( Yii::app()->user->hasFlash('attention') ): ?>
	<div class="alert alert-block">
		<h5><?php echo Yii::t('global','Warning!'); ?></h5>
		<?php echo Yii::app()->user->getFlash('attention'); ?>
	</div>
<?php endif; ?>

<?php if( Yii::app()->user->hasFlash('success') ): ?>
	<div class="alert alert-success">
		<h5><?php echo Yii::t('global','Success!'); ?></h5>
		<?php echo Yii::app()->user->getFlash('success'); ?>
	</div>
<?php endif; ?>			
<!-- End Notifications -->