<div class=" container">
    <div class="span3 fix-span3">
        <div class="why_join">
            <h5 class="title_whyjoin"><?php echo Yii::t('global','Search Options') ?></h5>
            <?php if(!Yii::app()->user->isGuest){ ?>
            <ul class="list-profile">
                <li>
                    <a href="">
                        <span class="isb-zoom"></span>
                        <span class="text"><?php echo Yii::t('global','Save this search') ?></span>
                    </a>
                </li>
            </ul>
            <?php } ?>
        </div>
        
        <div class="why_join">
            <h5 class="title_whyjoin"><?php echo Yii::t('global','My Searches') ?></h5>
             <?php if(!Yii::app()->user->isGuest){ ?>
            <ul class="list-profile">

                <li>
                    <a href="">
                        <span class="isb-zoom"></span>
                        <span class="text"><?php echo Yii::t('global','New') ?></span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="isb-zoom"></span>
                        <span class="text"><?php echo Yii::t('global','View All') ?></span>
                    </a>
                </li>

            </ul>
            <?php } else{ ?>
            <div class="login-or-register">
            <?php 
                 echo Yii::t('global','{Login} or {sign_up} to save this search',array('{Login}'=> '<a class="common-login-sign-up" href="/login">Login</a>','{sign_up}'=> '<a href="/">Sign up</a>'));
            } ?>
            </div>
        </div>
    </div>
    <div class="span9 fix-span7">
        <div class="general-photo" style="min-height: 350px !important;">
            <div class="">
                <h5 class="title_whyjoin" style="text-decoration: underline;"><?php echo Yii::t('global','Search Results') ?></h5>
                <div class="see-more"><a href="/morephotos" ><?php echo Yii::t('global','See more') ?></a> </div>
                 <div class="search-blogs">
                    <?php echo Yii::t('global','No results found matching your search criteria. Please refine your search and try again.'); ?>
                </div>
            </div>


        </div>
    </div>
</div>