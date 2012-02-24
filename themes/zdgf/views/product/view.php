<?php if($model->banner):?>
<div class="aboutBanner">
    <?php echo $model->banner; ?>
</div>
<?endif?>
<div class="aboutCon">
    <div class="leftBg">
      <h2 class="conTit">产品与服务</h2>
      <dl>
            <?php $product_taxs=Taxonomy::model()->findAll('taxonomy=:taxonomy',array(':taxonomy'=>'product_category'));?>
            
            <?php foreach ($product_taxs as $tax):?>
                <dt><a href="<?php echo Yii::app()->createUrl('taxonomy/view', array('id'=>$tax->id)); ?>"><?php echo $tax->name;?></a></dt>
                <?php foreach($tax->products as $product):?>
                    <dd><a href="<?php echo Yii::app()->createUrl('product/view', array('id'=>$product->id)); ?>"><?php echo $product->title;?></a></dd>
                <?php endforeach;?>
            <?endforeach;?>
            <dt><a href="<?php echo Yii::app()->createUrl('feedback/create'); ?>">客户服务</a></dt>
            <dt><a href="<?php echo Yii::app()->createUrl('product/view', array('id'=>27)); ?>">技术研发</a></dt>
            <dt><a href="<?php echo Yii::app()->createUrl('product/view', array('id'=>28)); ?>">了解太阳能</a></dt>
            </dl>
             <dl class="leftListBot"></dl>
             <dl class="top">
            <a href="http://www.ceeg.cn/"><img src="/tfcms/upload/images/linkLogo01.jpg" style="width:220px;height:70px"></a>
            </dl>
            <dl class="top">
             <a href="http://www.epia.org/"><img src="/tfcms/upload/images/linkLogo02.jpg" alt="EPIA"></a>
            </dl>
            <dl class="top">
             <a href="http://www.ceeg.cn/"><img src="/tfcms/upload/images/linkLogo03.jpg" alt="中电电气"></a>
            </dl>
    </div>
    <?php echo $model->content; ?>
</div>
