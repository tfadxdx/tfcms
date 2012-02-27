<?php if($model->banner):?>
    <div class="aboutBanner">
    <?php if($model->parent==0): ?>
        <?php echo $model->banner;?>
    <?php else:?>
        <?php echo Example::model()->findByPk($model->parent)->banner; ?>
    <?php endif;?>
    </div>
<?php endif;?>
<div class="aboutCon">
    <div class="leftBg">
      <h2 class="conTit">产品与服务</h2>
      <dl>
            <?php $example_taxs=Taxonomy::model()->noparent()->findAll('taxonomy=:taxonomy',array(':taxonomy'=>'example_category'));?>

            <?php foreach ($example_taxs as $tax):?>
                <dt><a href="<?php echo Yii::app()->createUrl('taxonomy/view', array('id'=>$tax->id)); ?>"><?php echo $tax->name;?></a></dt>
                <?php foreach($tax->examples as $example):?>
                    <dd><a href="<?php echo Yii::app()->createUrl('example/view', array('id'=>$example->id)); ?>"><?php echo $example->title;?></a></dd>
                <?php endforeach;?>
            <?endforeach;?>
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
    <div class="rightBg">
        <div class="rightTit"><h3>案例中心</h3></div>
        <?php echo $model->content; ?>

        <?php if($model->parent!==0): ?>
        <?php foreach($model->children as $child):?>
        <div class="workList">
            <a href="<?php echo Yii::app()->createUrl('example/view', array('id'=>$child->id))?>"><?php echo $child->banner;?></a>
        <div class="right">
            <?php echo $child->description;?>
        <?php endforeach;?>
        </div>
        <div class="more"><a href="<?php echo Yii::app()->createUrl('example/view', array('id'=>$child->id))?>">点击查看详细</a></div>
        </div>
        <?php endif;?>

       

    </div>
    <div class="clr"></div>
</div>