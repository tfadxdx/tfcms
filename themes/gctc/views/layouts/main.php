<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/global.css" media="all" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->
    
    <script type="text/javascript" src="http://jqueryjs.googlecode.com/files/jquery-1.3.2.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/supersized.2.0.js"></script>
	<script type="text/javascript">  
			$(function(){
				$.fn.supersized.options = {  
					startwidth:1440,  
					startheight:1080,
					vertical_center: 1,
					slideshow: 1,
					transition: 1, //0-None, 1-Fade, 2-slide top, 3-slide right, 4-slide bottom, 5-slide left
					pause_hover: 0,
					slide_counter: 1,
					slide_captions: 1,
					slide_interval: 5000  
				};
		        $('#supersize').supersized(); 
		    });
	</script>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<!--header-->	
<div id="header"></div>
<div class="topWrap">
	<div class="logo"></div>
	<div class="nav">
	    <a href="<?php echo Yii::app()->createUrl('site/index'); ?>">首页</a>
	    <a href="<?php echo Yii::app()->createUrl('site/index'); ?>">维特·佩尼品牌</a>
	    <a href="<?php echo Yii::app()->createUrl('site/index'); ?>">维特·佩尼精品</a>
	    <a href="<?php echo Yii::app()->createUrl('site/index'); ?>">维特·佩尼典藏</a>
	    <a href="<?php echo Yii::app()->createUrl('site/index'); ?>">新闻中心</a>
	    <a href="<?php echo Yii::app()->createUrl('site/index'); ?>">合作伙伴</a>
	    <a href="<?php echo Yii::app()->createUrl('site/index'); ?>">销售网络</a>
	    <a href="<?php echo Yii::app()->createUrl('site/index'); ?>">联系我们</a>
	</div>
</div>
	
<?php echo $content; ?>

<!--footer-->
<div id="footer">
	<div class="wrap">
		<div class="footLeft">&copy;2010-2011 White Peony , All Rights Reserved.</div>
		<div class="footRight">苏ICP备05039498号&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="http://www.tfwk.cn">Powered by Tuneful</a></div>
	</div>
</div>

</body>
</html>
