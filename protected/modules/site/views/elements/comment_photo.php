<div class="row space-row-comment">
    <div class="span1 "><img class="avatar-comment" src="/uploads/photos/<?php echo UserPhotoGalleries::model()->getAvatar($data->user_id) ?>" /></div>
    <div class="span5 fix-span-comment">
        <div class="span5 fix-span3">
            <span class="isb-user"></span>
            <?php echo "<a class='color-a-hover' href='' >".$data->user->username." </a> ".Yii::t('global','said on '.$data->created) ?>
            <?php //if() ?>
        </div>
        <div class="span5 fix-span3">
            <?php echo $data->content ?>
        </div>
    </div>
</div>