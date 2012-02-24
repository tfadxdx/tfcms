<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" rel="stylesheet" type="text/css" media="all" />

        <!--[if IE]>
                <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" rel="stylesheet" type="text/css" media="all">
                <meta http-equiv="X-UA-Compatible" content="IE=7" />
                <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/excanvas.js"></script>
        <![endif]-->
        
        <script type="text/javascript" SRC="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.js"></script>
        <script type="text/javascript" SRC="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-ui.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $("#main_menu li").click(function(){
                    $(this).children("ul").slideToggle('slow');
                });
            });
        </script>
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
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo.gif" width="251" height="60" alt="logo" />
                </div>
		<div id="search">
			<form action="dashboard.html" id="search_form" name="search_form" method="get">
				<p><input type="text" id="q" name="q" style="width:250px" title="Search" class="search noshadow"/></p>
			</form>
		</div>
		<div id="account_info">
			<img SRC="<?php echo Yii::app()->request->baseUrl; ?>/images/icon_online.gif" alt="Online" class="mid_align"/>
			Hello <a href=""><?php //echo Yii::app()->getModule('user')->user()->username; ?></a> <a href="">Setting</a> | <a href="<?php echo Yii::app()->request->baseUrl; ?>/admin.php/user/logout">Logout</a>
		</div>
	</div>
	<!-- End header -->

        <!-- Begin left panel -->
	<a href="javascript:;" id="show_menu">&raquo;</a>
	<div id="left_menu">
		<a href="javascript:;" id="hide_menu">&laquo;</a>
                <ul id="main_menu">
                    <li>
                        <a href="#">Pages</a>
                        <ul>
                                <li><a href="<?php echo Yii::app()->request->baseUrl;?>/admin.php/page/create">Add new Pages</a></li>
                                <li><a href="<?php echo Yii::app()->request->baseUrl;?>/admin.php/page">List All Pages</a></li>
                                <li><a href="<?php echo Yii::app()->request->baseUrl;?>/admin.php/taxonomy/create">Add Category For Pages</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Category</a>
                        <ul>
                                <li><a href="<?php echo Yii::app()->request->baseUrl;?>/admin.php/taxonomy/create">Add new Category</a></li>
                                <li><a href="<?php echo Yii::app()->request->baseUrl;?>/admin.php/taxonomy">List All Categories</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">News</a>
                        <ul>
                                <li><a href="<?php echo Yii::app()->request->baseUrl;?>/admin.php/news/create">Add new News</a></li>
                                <li><a href="<?php echo Yii::app()->request->baseUrl;?>/admin.php/news">List All News</a></li>
                                <li><a href="<?php echo Yii::app()->request->baseUrl;?>/admin.php/taxonomy/create">Add Category For Pages</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Media</a>
                         <ul>
                                <li><a href="<?php echo Yii::app()->request->baseUrl;?>/admin.php/media/list">All Media</a></li>
                        </ul>
                    </li>

                    <li><a href="#">Users</a></li>
                </ul>
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
                  <a href="<?php echo Yii::app()->request->baseUrl; ?>/admin.php/page" id="shortcut_posts">
                            <img SRC="<?php echo Yii::app()->request->baseUrl; ?>/images/shortcut/posts.gif" alt="pages"/><br/>
                            <strong>Pages</strong>
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
