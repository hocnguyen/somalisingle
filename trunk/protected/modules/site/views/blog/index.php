<div class=" container">
    <div class="span3 fix-span3">
        <div class="why_join">
            <h5 class="title_whyjoin"><?php echo Yii::t('global','Search Blogs') ?></h5>

            <ul class="list-profile">

                <li>
                    <a href="">
                        <span class="isb-zoom"></span>
                        <span class="text"><?php echo Yii::t('global','Most Popular') ?></span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="isb-zoom"></span>
                        <span class="text"><?php echo Yii::t('global','Most Discussed') ?></span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="isb-zoom"></span>
                        <span class="text"><?php echo Yii::t('global','Newest Posts') ?></span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
    <div class="span9 fix-span7">
        <div class="general-photo" style="min-height: 350px !important;">
            <div class="">
                <h5 class="title_whyjoin" style="text-decoration: underline;"><?php echo Yii::t('global','Browse Blogs') ?></h5>
                <div class="see-more"><a href="/morephotos" ><?php echo Yii::t('global','See more') ?></a> </div>
                 <div class="search-blogs">
                <form id="blog_search" method="get" action="">
                    		<?php echo Yii::t('global','Search Blogs'); ?>:
                    	<input type="text" id="tags" name="tags"/>
                    		<input type="submit" value="Search" class="btn btn-lg btn-success"/>
                </form>
                </div>
            </div>


        </div>
    </div>
</div>