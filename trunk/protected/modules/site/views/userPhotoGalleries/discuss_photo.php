<div class=" container">
    <div class="span3 fix-span3">
        <div class="why_join">
            <h5 class="title_whyjoin"><?php echo Yii::t('global','Search Photo') ?></h5>
            <?php echo $this->renderPartial('../elements/left-info-photo') ?>
        </div>
    </div>
    <div class="span9 fix-span7">
        <div class="general-photo">
            <div class="photo-newest">
                <h5 class="title_whyjoin"><?php echo Yii::t('global','Most Discussed Photos') ?></h5>
                <?php $this->widget('zii.widgets.CListView', array(
                    'dataProvider'=>$photos,
                    'ajaxUpdate'=>false,
                    'summaryText'=>'',
                    'itemView'=>'../elements/more_photo',
                )); ?>

            </div>
        </div>
    </div>
</div>