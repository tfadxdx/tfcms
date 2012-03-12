<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.2//EN" "http://www.openmobilealliance.org/tech/DTD/xhtml-mobile12.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css" media="all" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
    <a name="top" id="top" ></a>
    <div class="header">
            <div class="left"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/logo.gif" width="185" height="59" alt="高淳陶瓷" /></div>
            <div class="right">维特佩尼<br />
                                手机网站</div>
            <div class="clr"></div>
    </div>
    <div class="nav">
        <ul>
            <li><a href="/">首页</a></li>
            <li><a href="/page/71">品牌</a></li>
            <li><a href="/news">新闻</a></li>
            <li><a href="/product">产品</a></li>
            <li><a href="/page/72">联系</a></li>
        </ul>
    </div>
    <?php echo $content;?>
    <div class="gettop"><a href="#top" title="返回顶部"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/top.gif" width="66" height="16" /></a></div>
    <div class="content center"><a href="http://m.gctc.cn">m.gctc.cn</a></div>
</body>
</html>
