
<div class="aboutBanner"><img src="<?php echo Yii::app()->request->baseUrl;?>/upload/images/newbanner.jpg" alt="banner"></div>

<div class="aboutCon">
          <div class="leftBg">
                <h2 class="conTit">新闻中心</h2>
                <dl>
                    <?php $product_taxs=Taxonomy::model()->noparent()->findAll('taxonomy=:taxonomy',array(':taxonomy'=>'news_category'));?>

                    <?php foreach ($product_taxs as $tax):?>
                        <?php if($tax->parent==Taxonomy::model()->find('name="新闻中心"')->id):#判断是否是二级菜单，如果不是，不显示，解决活动显示年代的bug?>
                            <dt><a href="<?php echo Yii::app()->createUrl('taxonomy/view', array('id'=>$tax->id)); ?>"><?php echo $tax->name;?></a></dt>
                            <?php if($tax->name == '媒体下载'):?>
                                <?php foreach ($tax->news as $item):?>
                                <dd><a href="<?php echo Yii::app()->createUrl('news/view', array('id'=>$item->id));?>"><?php echo $item->title;?></a></dd>
                                <?php endforeach;?>
                            <?php endif;?>
                        <?php endif;?>
                    <?endforeach;?>

                </dl>
                <dl class="leftListBot"></dl>
                <dl class="top"><a href="http://www.ceeg.cn/"><img src="<?php echo Yii::app()->request->baseUrl;?>/upload/images/linkLogo01.jpg" alt="中电电气"></a></dl>
                <dl class="top"><a href="http://www.epia.org/"><img src="<?php echo Yii::app()->request->baseUrl;?>/upload/images/linkLogo02.jpg" alt="EPIA"></a></dl>
                <dl class="top"><a href="http://www.ceeg.cn/"><img src="<?php echo Yii::app()->request->baseUrl;?>/upload/images/linkLogo03.jpg" alt="中电电气"></a></dl>
            </div>
	<div class="rightBg">
            <div class="rightTit">
                <h3>详细新闻</h3>
            </div>
            <div class="text">
                <h3><?php echo $model->title;?></h3>
                <?php echo $model->content; ?>
            </div>
        </div>
<div class="clr"></div>

    </div>
