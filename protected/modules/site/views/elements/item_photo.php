<div class="item-photo">
    <a href="/detailPhoto/<?php echo $data->id ?>" class="wrapper-img" ><img class="img-home" src="/uploads/photos/<?php echo $data->filename ?>" alt="" /></a>
    <hr/>
    <div class="wrapper-info-photo">
        <div class="row owner"><?php echo Yii::t('global','Uploaded on')." <b>".Utils::getDayFormat($data->created)."</b>" ?></div>
        <div class="row owner"><?php echo Yii::t('global','Photo is')." <b>".UserPhotoGalleries::model()->getStatusPhoto($data->is_private)."</b>" ?></div>
        <div class="row owner"><?php echo $data->views." ".Yii::t('global','views')."| ".$data->commentPhoto." ".Yii::t('global','comments') ?></div>
        <div class="row owner ">
            <span class="isb-edit manage-my-photo"> <a class="color-a-hover" href="/changePhoto/<?php echo $data->id ?>"><?php echo Yii::t('global','Change') ?></a> </span>
            <span class="isb-cancel manage-my-photo"> <a class="color-a-hover " href="#" onclick="deletePhoto(<?php echo $data->id ?>)"><?php echo Yii::t('global','Delete') ?></a> </span>
        </div>
    </div>
</div>