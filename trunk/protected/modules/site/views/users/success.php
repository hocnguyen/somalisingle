<div class="container">
    <div class="wrapper_success">
        <h5><?php echo Yii::t('global','Signup successful!') ?></h5>
        <p class="content_success">
            <?php
            $success = "A confirmation email has been sent to the address you specified ( {email} ). <br/>
            You need to read and respond to this email before you can use your account. If you don't do this, the new account will be deleted automatically after a few days.";
            echo Yii::t('success',$success,array('{email}'=>$model->email)) ?>
        </p>
    </div>
</div>