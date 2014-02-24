<?php $this->widget('widgets.admin.notifications'); ?>
<div id="content" class="content-extra">
    <div class="container">
        <div class="row">
            <article class="span6">
                <div class="wrapper">
                    <div class="register">
                        <div class="row fix_height-row">
                            <div class="span1"><?php echo Yii::t('global','I am') ?> </div>
                            <div class="span3">
                                <input class="gender" type="radio" name="gender" id="male"/><label class="lbl_gender" for="male"><?php echo Yii::t('global','Male') ?> </label>
                                <input class="gender" type="radio" name="gender" id="female"/><label class="lbl_gender" for="female"><?php echo Yii::t('global','Female') ?> </label>
                            </div>
                        </div>
                        <div class="row fix_height-row">
                            <div class="span1"><?php echo Yii::t('global','From') ?> </div>
                            <div class="span3">
                                <select class="span4">
                                    <option>India</option>
                                    <option>USA</option>
                                    <option>Vietnam</option>
                                </select>
                            </div>
                        </div>
                        <div class="row fix_height-row">
                            <div class="span1"><?php echo Yii::t('global','Birthday') ?> </div>
                            <div class="span3">
                                <input class="birthday span4" type="text"/>
                            </div>
                        </div>
                        <div class="row fix_height-row">
                            <div class="span1"><?php echo Yii::t('global','Username') ?> </div>
                            <div class="span3">
                                <input class="username span4" type="text"/>
                            </div>
                        </div>
                        <div class="row fix_height-row">
                            <div class="span1"> </div>
                            <div class="span3">
                                <input class="password span4" type="password"/>
                            </div>
                        </div>
                        <div class="row fix_height-row">
                            <div class="span1">Email </div>
                            <div class="span3">
                                <input class="email span4" type="text"/>
                            </div>
                        </div>
                        <div class="row fix_height-row">
                            <div class="span1"></div>
                            <div class="span3">
                                <input class="sumit btn btn-success" type="submit" value="Register"/>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <article class="span6">
                <ul class="list-photo fix-position-photo">
                    <li><a href="themes/default/img/image-blank.png" class="magnifier" ><img src="themes/default/img/1.jpg " alt="" /></a></li>
                    <li><a href="themes/default/img/image-blank.png" class="magnifier" ><img src="themes/default/img/2.jpg " alt="" /></a></li>
                    <li><a href="themes/default/img/image-blank.png" class="magnifier" ><img src="themes/default/img/3.jpg " alt="" /></a></li>
                    <li class="last"><a href="themes/default/img/image-blank.png" class="magnifier" ><img src="themes/default/img/4.jpg " alt="" /></a></li>
                    <li><a href="themes/default/img/image-blank.png" class="magnifier" ><img src="themes/default/img/5.jpg " alt="" /></a></li>
                    <li><a href="themes/default/img/image-blank.png" class="magnifier" ><img src="themes/default/img/1.jpg " alt="" /></a></li>
                    <li><a href="themes/default/img/image-blank.png" class="magnifier" ><img src="themes/default/img/7.jpg " alt="" /></a></li>
                    <li class="last"><a href="themes/default/img/image-blank.png" class="magnifier" ><img src="themes/default/img/8.jpg " alt="" /></a></li>
              </ul>
            </article>
        </div>
    </div>
</div>