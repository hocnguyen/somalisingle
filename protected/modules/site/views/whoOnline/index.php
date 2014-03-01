<div class=" container">
    <div class="span3 fix-span3">
        <div class="why_join">
            <h5 class="title_whyjoin"><?php echo Yii::t('global','Search Options') ?></h5>
            <?php if(!Yii::app()->user->isGuest){ ?>
                <ul class="list-profile">

                    <li>
                        <a href="/">
                            <span class="isb-zoom"></span>
                            <span class="text"><?php echo Yii::t('global','Save this Search') ?></span>
                        </a>
                    </li>
                </ul>
            <?php } ?>

        </div>

        <div class="why_join">
            <h5 class="title_whyjoin"><?php echo Yii::t('global','My Searches') ?></h5>
            <?php if(Yii::app()->user->isGuest){ ?>
            <div class="list-profile">
                <a class="color-a-hover" href="/login">Login</a> or <a class="color-a-hover" href="/">signup</a> to save this search
            </div>
            <?php } else {?>
                <ul class="list-profile">

                    <li>
                        <a href="/">
                            <span class="isb-zoom"></span>
                            <span class="text"><?php echo Yii::t('global','View All') ?></span>
                        </a>
                    </li>
                </ul>
            <?php } ?>
        </div>
    </div>
    <div class="span9 fix-span7">
        <div class="general-photo">
            <div class="photo-newest">
                <h5 class="title_whyjoin"><?php echo Yii::t('global','Search Result') ?></h5>
                <div class="span8">
                    <?php $this->widget('zii.widgets.CListView', array(
                        'dataProvider'=>$userOnline,
                        'ajaxUpdate'=>false,
                        'summaryText'=>'',
                        'itemView'=>'../elements/who-online',
                    )); ?>
                </div>

            </div>

        </div>
    </div>
</div>