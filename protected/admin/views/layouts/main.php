<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" rel="stylesheet" type="text/css" media="all" />
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/backend.css" rel="stylesheet" type="text/css" media="all" />
        <!--[if IE]>
                <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" rel="stylesheet" type="text/css" media="all">
                <meta http-equiv="X-UA-Compatible" content="IE=7" />
                <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/excanvas.js"></script>
        <![endif]-->
        
        <script type="text/javascript" SRC="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.js"></script>
        <script type="text/javascript" SRC="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-ui.js"></script>
        <script type="text/javascript" SRC="<?php echo Yii::app()->request->baseUrl; ?>/js/backend.js"></script>
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
		<div id="account_info">
			<img SRC="<?php echo Yii::app()->request->baseUrl; ?>/images/icon_online.gif" alt="Online" class="mid_align"/>
			Hello <a href=""><?php echo Yii::app()->getModule('user')->user()->username; ?></a> <a href="">Setting</a> | <a href="<?php echo Yii::app()->request->baseUrl; ?>/admin.php/user/logout">Logout</a>
                </div>
	</div>
	<!-- End header -->

        <!-- Begin left panel -->
	<a href="javascript:;" id="show_menu">&raquo;</a>
	<div id="left_menu">
		<a href="javascript:;" id="hide_menu">&laquo;</a>
                <ul id="main_menu">
                    <li>
                        <a href="#"><?php echo Yii::t('cn', 'Page');?></a>
                        <ul>
                                <li><a href="<?php echo Yii::app()->request->baseUrl;?>/admin.php/page/create"><?php echo Yii::t('cn', 'Add new page');?></a></li>
                                <li><a href="<?php echo Yii::app()->request->baseUrl;?>/admin.php/page"><?php echo Yii::t('cn', 'List All Pages');?></a></li>
                                <li><a href="<?php echo Yii::app()->request->baseUrl;?>/admin.php/taxonomy/create?type=page"><?php echo Yii::t('cn', 'Add Category For Page');?></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><?php echo Yii::t('cn', 'Category');?></a>
                        <ul>
                                <li><a href="<?php echo Yii::app()->request->baseUrl;?>/admin.php/taxonomy/create"><?php echo Yii::t('cn', 'Add new Category');?></a></li>
                                <li><a href="<?php echo Yii::app()->request->baseUrl;?>/admin.php/taxonomy"><?php echo Yii::t('cn', 'List All Categories');?></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><?php echo Yii::t('cn', 'News');?></a>
                        <ul>
                                <li><a href="<?php echo Yii::app()->request->baseUrl;?>/admin.php/news/create"><?php echo Yii::t('cn', 'Add new news');?></a></li>
                                <li><a href="<?php echo Yii::app()->request->baseUrl;?>/admin.php/news"><?php echo Yii::t('cn', 'List All News');?></a></li>
                                <li><a href="<?php echo Yii::app()->request->baseUrl;?>/admin.php/taxonomy/create?type=news"><?php echo Yii::t('cn', 'Add Category For News');?></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><?php echo Yii::t('cn', 'Product');?></a>
                        <ul>
                                <li><a href="<?php echo Yii::app()->request->baseUrl;?>/admin.php/product/create"><?php echo Yii::t('cn', 'Add new product');?></a></li>
                                <li><a href="<?php echo Yii::app()->request->baseUrl;?>/admin.php/product"><?php echo Yii::t('cn', 'List All Products');?></a></li>
                                <li><a href="<?php echo Yii::app()->request->baseUrl;?>/admin.php/taxonomy/create?type=product"><?php echo Yii::t('cn', 'Add Category For Product');?></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><?php echo Yii::t('cn', 'Example');?></a>
                        <ul>
                                <li><a href="<?php echo Yii::app()->request->baseUrl;?>/admin.php/example/create"><?php echo Yii::t('cn', 'Add new example');?></a></li>
                                <li><a href="<?php echo Yii::app()->request->baseUrl;?>/admin.php/example"><?php echo Yii::t('cn', 'List All Examples');?></a></li>
                                <li><a href="<?php echo Yii::app()->request->baseUrl;?>/admin.php/taxonomy/create?type=example"><?php echo Yii::t('cn', 'Add Category For Example');?></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><?php echo Yii::t('cn', 'Media');?></a>
                         <ul>
                                <li><a href="<?php echo Yii::app()->request->baseUrl;?>/admin.php/media/list"><?php echo Yii::t('cn', 'All Media');?></a></li>
                        </ul>
                    </li>
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
                    <a href='<?php echo Yii::app()->request->baseUrl;?>/admin.php/site/index' id="shortcut_home">
                            <img SRC="<?php echo Yii::app()->request->baseUrl; ?>/images/shortcut/home.gif" alt="home"/><br/>
                            <strong><?php echo Yii::t('cn', 'Home');?></strong>
                          </a>
                        </li>
                <li>
                  <a href='<?php echo Yii::app()->request->baseUrl;?>/admin.php/news'>
                            <img SRC="<?php echo Yii::app()->request->baseUrl; ?>/images/shortcut/calendar.gif" alt="calendar"/><br/>
                            <strong><?php echo Yii::t('cn', 'News');?></strong>
                          </a>
                        </li>
                <li>
                  <a href='<?php echo Yii::app()->request->baseUrl;?>/admin.php/product'>
                            <img SRC="<?php echo Yii::app()->request->baseUrl; ?>/images/shortcut/stats.gif" alt="stats"/><br/>
                            <strong><?php echo Yii::t('cn', 'Product');?></strong>
                          </a>
                        </li>
                        <li>
                  <a href='<?php echo Yii::app()->request->baseUrl;?>/admin.php/example'>
                            <img SRC="<?php echo Yii::app()->request->baseUrl; ?>/images/shortcut/setting.gif" alt="setting"/><br/>
                            <strong><?php echo Yii::t('cn', 'Example');?></strong>
                          </a>
                        </li>
                        <li>
                  <a href='<?php echo Yii::app()->request->baseUrl;?>/admin.php/media/list' id="shortcut_contacts">
                            <img SRC="<?php echo Yii::app()->request->baseUrl; ?>/images/shortcut/contacts.gif" alt="contacts"/><br/>
                            <strong><?php echo Yii::t('cn', 'Media');?></strong>
                          </a>
                        </li>
                        <li>
                  <a href='<?php echo Yii::app()->request->baseUrl;?>/admin.php/page' id="shortcut_posts">
                            <img SRC="<?php echo Yii::app()->request->baseUrl; ?>/images/shortcut/posts.gif" alt="pages"/><br/>
                            <strong><?php echo Yii::t('cn', 'Page');?></strong>
                          </a>
                        </li>
                </ul>
                <!-- End shortcut menu -->
                <br class="clear" />
                <?php echo $content; ?>
                <div class="clear"></div>
            </div>
            <div id="footer">
                    Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
                    All Rights Reserved.<br/>
                    <?php echo Yii::powered(); ?>
            </div><!-- footer -->
        </div>
</div><!-- page -->

</body>
</html>
