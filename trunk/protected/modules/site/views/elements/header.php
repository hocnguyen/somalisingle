<header>
    <div class="container clearfix">
        <div class="row">
            <div class="span12">
                <div class="navbar navbar_">
                    <div class="container">
                        <div class="login">
                            <?php if(Yii::app()->user->isGuest){ ?>
                                <a href="/login" class="login-link">Login</a>
                                <!--<div class="form-login">
                                    <?php /*echo CHtml::form($this->createUrl('users/login'), 'post', array('class'=>'frmcontact', 'id'=>'login-form')); */?>
                                    <div class="close-login">X</div>
                                    <input type="text" class="field-username defaultText span2" name="LoginForm[email]" id="LoginForm_email"  title="<?php /*echo Yii::t('global', 'My username'); */?>"/>
                                    <input type="password" class="field-password defaultText span2" name="LoginForm[password]" id="LoginForm_password" value="" title="<?php /*echo Yii::t('global', 'My password'); */?>"/>
                                    <?php /*echo CHtml::submitButton(Yii::t('global', 'Login'), array('class'=>'btn-login fix-btn-login', 'name'=>'submit')); */?>
                                    <?php /*echo CHtml::endForm(); */?>

                                </div>-->
                            <?php } else { ?>
                                <div class="login-link">Hi <a href="/home"><?php echo Yii::app()->user->username; ?></a> <a class="logout " href="/logout"><?php echo Yii::t('global','Logout') ?></a> </div>
                            <?php } ?>
                        </div>
                        <h1 class="brand brand_"><a href="/"><img alt="" src="/themes/default/img/logo.png"> </a></h1>
                        <a class="btn btn-navbar btn-navbar_ " data-toggle="collapse" data-target=".nav-collapse_">Menu <span class="icon-bar"></span> </a>
                        <div class="nav-collapse nav-collapse_  collapse fix_navbar">
                            <ul class="nav sf-menu">
                                <li class=<?php echo (Yii::app()->controller->action->id=='' || Yii::app()->controller->id=='users')?'active':'' ?>><a href="/home"><?php echo Yii::t('global','HOME') ?></a></li>
                                <li class="sub-menu"><a href=""><?php echo Yii::t('global','SEARCH') ?></a></li>
                                <li class=<?php echo (Yii::app()->controller->id=='userPhotoGalleries')?'active':'' ?>><a href="/photos"><?php echo Yii::t('global','PHOTOS') ?></a></li>
                                <li class="<?php echo (Yii::app()->controller->id=='blog')?'active':'' ?>"><a href="/blogs"><?php echo Yii::t('global','BLOGS')?></a></li>
                                <li><a class="fix_menu" href=""><?php echo Yii::t('global','WHO\'S ONLINE') ?></a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<script type="text/javascript">
   /* $('.login-link').click(function(){
        $('.form-login').css('display','block');
    });
    $('.close-login').click(function(){
        $('.form-login').css('display','none');
    });*/
</script>