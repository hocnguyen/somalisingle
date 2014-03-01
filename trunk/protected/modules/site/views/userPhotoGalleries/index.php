<div class=" container">
    <div class="span3 fix-span3">
        <div class="why_join">
            <h5 class="title_whyjoin"><?php echo Yii::t('global','Other Searches') ?></h5>

            <ul class="list-profile">

                <li>
                    <a href="/photofemale">
                        <span class="isb-zoom"></span>
                        <span class="text"><?php echo Yii::t('global','Photos of Females') ?></span>
                    </a>
                </li>
                <li>
                    <a href="/photoMale">
                        <span class="isb-zoom"></span>
                        <span class="text"><?php echo Yii::t('global','Photos of Males') ?></span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
    <div class="span9 fix-span7">
        <div class="general-photo">
            <div class="photo-newest">
                <h5 class="title_whyjoin"><?php echo Yii::t('global','Newest Photos') ?></h5>
                <div class="see-more"><a href="/morephotos" ><?php echo Yii::t('global','See more') ?></a> </div>
                <ul class="list-photo fix-position-photo cover-photo">
                    <?php if(isset($more_photo)) {
                        foreach($more_photo as $item){ ?>
                            <li><a href="/detailPhoto/<?php echo $item->id ?>" class="magnifier" ><img class="img-home" src="/uploads/photos/<?php echo $item->filename ?>" alt="" /></a></li>
                        <?php    }
                    } ?>

                </ul>
            </div>

        </div>
    </div>
</div>