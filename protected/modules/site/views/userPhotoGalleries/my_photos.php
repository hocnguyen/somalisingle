
<div class=" container">
    <div class="span3 fix-span3">
        <div class="why_join">
            <h5 class="title_whyjoin"><?php echo Yii::t('global','Search Photo') ?></h5>
            <ul class="list-profile">
                <li>
                    <a href="">
                        <span class="isb-picture"></span>
                        <span class="text"><a class="upload_images" href="/uploadPhotos"><?php echo Yii::t('global','Upload Photo') ?></a> </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="span9 fix-span7">
        <div class="general-photo">
            <div class="photo-newest">
                <h5 class="title_whyjoin"><?php echo Yii::t('global','Newest Photos') ?></h5>
                    <?php $this->widget('zii.widgets.CListView', array(
                        'dataProvider'=>$myphoto,
                        'ajaxUpdate'=>false,
                        'summaryText'=>'',
                        'itemView'=>'../elements/item_photo',
                    )); ?>

            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function deletePhoto(id){
        var textconfirm = confirm('<?php echo Yii::t('global','Are you sre delete this photo?') ?>');
        if(textconfirm == true){
            $.get('/deletePhoto/'+id,function(){
                window.location.reload();
            })
        }
    }
</script>


