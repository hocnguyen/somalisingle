<div class=" container">
    <div class="span3 fix-span3">
        <div class="why_join">
            <h5 class="title_whyjoin"><?php echo Yii::t('global','My Account') ?></h5>
            <?php echo $this->renderPartial('../elements/my_profile_menu') ?>
        </div>
    </div>
    <div class="span9 fix-span7">
        <div class="my-home">
            <h5 class="title_whyjoin"><?php echo Yii::t('global','My Home') ?></h5>
           <div class="row row-form">
               <div class="span2 avatar-wrapper">
                   <img src="/uploads/photos/<?php echo $photo->filename ?>" class="avatar"/>
                   <a href="" class="request-friend"><?php echo Yii::t('global','Friendship Requests')?></a>
               </div>
               <div class="span7 fix-span7-home">
                   <div class="home home-name">Hi <?php echo $model->username ?></div>
                   <div class="home home-message"> <a href=""> <?php echo Yii::t('global','Messages') ?></a>: 0 (0 new)</div>
                   <div class="home home-photo"> <a href=""> <?php echo Yii::t('global','Approved Photos')?></a>: 1</div>
                   <div class="home home-friend"> <a href=""> <?php echo Yii::t('global','Friends')?></a>: 0</div>
                   <div class="home home-viewer"> <?php echo Yii::t('global','Your profile has been viewed 0 times since 02/22/2014')?></div>
                   <div class="home home-membership"> <?php echo Yii::t('global','Your Membership: Free Member')?></div>
                   <div class="home home-expires"> <?php echo Yii::t('global','Membership Expires: Never. Update or renew your membership now!')?></div>
               </div>
           </div>
            <div class="photo-newest">
                <h5 class="title_whyjoin"><?php echo Yii::t('global','Newest Photo') ?></h5>
                <ul class="list-photo fix-position-photo cover-photo">
                    <?php if(isset($allPhoto)) {
                        foreach($allPhoto as $item){ ?>
                            <li><a href="/detailPhoto/<?php echo $item->id ?>" class="wrapper-img" ><img class="img-home" src="/uploads/photos/<?php echo $item->filename ?>" alt="" /></a></li>
                        <?php    }
                    } ?>
                </ul>
            </div>
        </div>
    </div>
</div>