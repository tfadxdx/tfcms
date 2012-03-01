<?php $nodes = $model->news;?>
<div class="wrap">
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
                <div class="rightTit"><h3><?php echo $model->name;?></h3></div>
                <?php if($model->name=="展会活动"):?>
                    <div class="invTitBg">
                        <ul class="idTabs">
                            <?php foreach($model->children as $key=>$child):?>
                                <li><a href="#<?php echo $child->id?>"><?php echo $child->name;?></a></li>
                            <?php endforeach;?>
                        </ul>
                    </div>
                    <div class="activeCon">
                    <?php foreach($model->children as $child):?>
                        <ul id="<?php echo $child->id;?>">
                        <?php foreach($child->news as $event):?>
                            <li>
                                <a href="<?php echo Yii::app()->createUrl('news/view', array('id'=>$event->id));?>"><img src="<?php echo $event->banner;?>"></a>
                                <?php echo $event->description?>
                                <span><a href="<?php echo Yii::app()->createUrl('news/view', array('id'=>$event->id)); ?>">点击查看详细 &gt;&gt;</a></span>
                            </li>
                        <?php endforeach;?>
                        </ul>
                    <?php endforeach;?>
                    </div>
                <?php else:?>
                    <div class="newList">
                        <ul>
                         <?php foreach($nodes as $node):?>
                            <li><span><?php echo date('Y-m-d',$node->createtime);?></span><a href="<?php echo Yii::app()->request->baseUrl;?>/news/<?php echo $node->id;?>"><?php echo $node->title;?></a></li>
                         <?php endforeach;?>
                        </ul>
                     </div>
                <?php endif;?>
            </div>
            <div class="clr"></div>
        </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
         console.log($('.invTitBg ul').find(".on").attr('id'));
    });
</script>