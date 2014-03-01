<!DOCTYPE html>
<html lang="en">
<head>
    <title> <?php echo ( count( $this->pageTitle ) ) ? implode( ' - ', array_reverse( $this->pageTitle ) ) : $this->pageTitle; ?></title>
    <meta charset="utf-8">
    <link rel="icon" href="" type="image/x-icon">
    <link rel="shortcut icon" href="" type="image/x-icon" />
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name">
    <link rel="stylesheet" href="/themes/default/css/validationEngine.jquery.css" type="text/css" media="screen">
    <link rel="stylesheet" href="/themes/default/css/bootstrap.css" type="text/css" media="screen">
    <link rel="stylesheet" href="/themes/default/css/responsive.css" type="text/css" media="screen">
    <link rel="stylesheet" href="/themes/default/css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="/themes/default/css/touchTouch.css" type="text/css" media="screen">
    <link rel="stylesheet" href="/themes/default/css/kwicks-slider.css" type="text/css" media="screen">
    <link rel="stylesheet" href="/themes/default/css/icons.css" type="text/css" media="screen">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
    <!--<script type="text/javascript" src="/themes/default/js/jquery.js"></script>-->
    <script type="text/javascript" src="/themes/default/js/superfish.js"></script>
    <script type="text/javascript" src="/themes/default/js/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="/themes/default/js/jquery.kwicks-1.5.1.js"></script>
    <script type="text/javascript" src="/themes/default/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="/themes/default/js/touchTouch.jquery.js"></script>
    <script type="text/javascript" src="/themes/default/js/bootstrap.js"></script>
    <script type="text/javascript" src="/themes/default/js/jquery.validationEngine.js"></script>
    <script type="text/javascript" src="/themes/default/js/jquery.validationEngine-en.js"></script>
    <script type="text/javascript" src="/themes/default/js/functions.js"></script>
    <script type="text/javascript">if($(window).width()>1024){document.write("<"+"script src='/themes/default/js/jquery.preloader.js'></"+"script>");}	</script>

    <script>
        jQuery(window).load(function() {
            $x = $(window).width();
            if($x > 1024)
            {
                jQuery("#content .row").preloader();    }

            jQuery('.magnifier').touchTouch();
            jQuery('.spinner').animate({'opacity':0},1000,'easeOutCubic',function (){jQuery(this).css('display','none')});
        });

    </script>

    <!--[if lt IE 8]>
    <div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/img/upgrade.jpg"border="0"alt=""/></a></div>
    <![endif]-->
    <!--[if (gt IE 9)|!(IE)]><!-->
    <!--<![endif]-->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400' rel='stylesheet' type='text/css'>
    <![endif]-->
</head>

<body>
<div class="spinner"></div>
    <?php echo $this->renderPartial('../elements/header') ?>
<div class="bg-content">
   <?php echo $content ?>
</div>
<?php echo $this->renderPartial('../elements/footer') ?>

</body>
</html>