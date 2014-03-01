<div class="item-photo">
    <a href="/detailPhoto/<?php echo $data->id ?>" class="wrapper-img" ><img class="img-home" src="/uploads/photos/<?php echo $data->filename ?>" alt="" /></a>
    <hr/>
    <div class="wrapper-info-photo">
        <div class="row owner"><?php echo Yii::t('global','Owner')." <a class='color-a-hover' href=''>".$data->user->username."</a>" ?></div>
        <div class="row owner"><?php echo Yii::t('global','Uploaded on')." <b>".Utils::getDayFormat($data->created)."</b>" ?></div>
        <div class="row owner"><?php echo $data->views." ".Yii::t('global','views')."| ".$data->commentPhoto." ".Yii::t('global','comments') ?></div>
    </div>
</div>