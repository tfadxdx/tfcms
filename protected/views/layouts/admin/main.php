<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" rel="stylesheet" type="text/css" media="all" />
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/datepicker.css" rel="stylesheet" type="text/css" media="all" />
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/js/visualize/visualize.css" rel="stylesheet" type="text/css" media="all" />
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/js/jwysiwyg/jquery.wysiwyg.css" rel="stylesheet" type="text/css" media="all" />
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/js/fancybox/jquery.fancybox-1.3.0.css" rel="stylesheet" type="text/css" media="all" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

        <script type="text/javascript" SRC="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.js"></script>
        <script type="text/javascript" SRC="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-ui.js"></script>
        <script type="text/javascript" SRC="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.img.preload.js"></script>
        <script type="text/javascript" SRC="<?php echo Yii::app()->request->baseUrl; ?>/js/hint.js"></script>
        <script type="text/javascript" SRC="<?php echo Yii::app()->request->baseUrl; ?>/js/visualize/jquery.visualize.js"></script>
        <script type="text/javascript" SRC="<?php echo Yii::app()->request->baseUrl; ?>/js/jwysiwyg/jquery.wysiwyg.js"></script>
        <script type="text/javascript" SRC="<?php echo Yii::app()->request->baseUrl; ?>/js/fancybox/jquery.fancybox-1.3.0.js"></script>
        <script type="text/javascript" SRC="<?php echo Yii::app()->request->baseUrl; ?>/js/custom.js"></script>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="content_wrapper">

	<!-- <div id="header">
		<div id="logo"><?php // echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

        <!-- Begin header -->
	<div id="header">
		<div id="logo">
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo.gif" width="251" height="60" alt="logo">
                </div>
		<div id="search">
			<form action="dashboard.html" id="search_form" name="search_form" method="get">
				<p><input type="text" id="q" name="q" style="width:250px" title="Search" class="search noshadow"/></p>
			</form>
		</div>
		<div id="account_info">
			<img SRC="<?php echo Yii::app()->request->baseUrl; ?>/images/icon_online.gif" alt="Online" class="mid_align"/>
			Hello <a href=""><?php echo Yii::app()->getModule('user')->user()->username; ?></a> <a href="">Setting</a> | <a href="">Logout</a>
		</div>
	</div>
	<!-- End header -->

        <!-- Begin left panel -->
	<a href="javascript:;" id="show_menu">&raquo;</a>
	<div id="left_menu">
		<a href="javascript:;" id="hide_menu">&laquo;</a>
                <?php $this->widget('zii.widgets.CMenu',array(
                    'id' => 'main_menu',
                    'items'=>array(
                            array('label'=>'Home', 'url'=>array('/site/index')),
                            array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
                            array('label'=>'Contact', 'url'=>array('/site/contact')),
                            array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                            array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                    ),
                )); ?>
		<br class="clear"/>

		<!-- Begin left panel calendar -->
		<div id="calendar"></div>
		<!-- End left panel calendar -->

	</div>
	<!-- End left panel -->

        <div id="content">
            <div class="inner">
                <?php if(isset($this->breadcrumbs)):?>
                        <?php $this->widget('zii.widgets.CBreadcrumbs', array(
                                'links'=>$this->breadcrumbs,
                        )); ?><!-- breadcrumbs -->
                <?php endif?>

                <!-- Begin shortcut menu -->
                <ul id="shortcut">
                <li>
                  <a href="" id="shortcut_home">
                            <img SRC="<?php echo Yii::app()->request->baseUrl; ?>/images/shortcut/home.gif" alt="home"/><br/>
                            <strong>Home</strong>
                          </a>
                        </li>
                <li>
                  <a href="">
                            <img SRC="<?php echo Yii::app()->request->baseUrl; ?>/images/shortcut/calendar.gif" alt="calendar"/><br/>
                            <strong>Calendar</strong>
                          </a>
                        </li>
                <li>
                  <a href="">
                            <img SRC="<?php echo Yii::app()->request->baseUrl; ?>/images/shortcut/stats.gif" alt="stats"/><br/>
                            <strong>Stats</strong>
                          </a>
                        </li>
                        <li>
                  <a href="">
                            <img SRC="<?php echo Yii::app()->request->baseUrl; ?>/images/shortcut/setting.gif" alt="setting"/><br/>
                            <strong>Setting</strong>
                          </a>
                        </li>
                        <li>
                  <a href="" id="shortcut_contacts">
                            <img SRC="<?php echo Yii::app()->request->baseUrl; ?>/images/shortcut/contacts.gif" alt="contacts"/><br/>
                            <strong>Contacts</strong>
                          </a>
                        </li>
                        <li>
                  <a href="" id="shortcut_posts">
                            <img SRC="<?php echo Yii::app()->request->baseUrl; ?>/images/shortcut/posts.gif" alt="posts"/><br/>
                            <strong>Posts</strong>
                          </a>
                        </li>
                </ul>
                <!-- End shortcut menu -->
                <br class="clear">
                <?php echo $content; ?>
                <div class="clear"></div>
            </div>
            <div id="footer" style="margin: 500px 0 0 0">
                    Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
                    All Rights Reserved.<br/>
                    <?php echo Yii::powered(); ?>
            </div><!-- footer -->
        </div>
</div><!-- page -->

</body>
</html>
