<?php if($model->banner):?>
    <?php if(Node::model()->isChild($model)): ?>
    <div class="aboutBanner">
        <?php echo Example::model()->findByPk($model->parent)->banner; ?>
    </div>
    <?php endif;?>
<?php endif;?>
<div class="aboutCon">
    <div class="leftBg">
      <h2 class="conTit">产品与服务</h2>
      <dl>
            <?php $example_taxs=Taxonomy::model()->findAll('taxonomy=:taxonomy',array(':taxonomy'=>'case_category'));?>

            <?php foreach ($example_taxs as $tax):?>
                <dt><a href="<?php echo Yii::app()->createUrl('taxonomy/view', array('id'=>$tax->id)); ?>"><?php echo $tax->name;?></a></dt>
                <?php foreach($tax->examples as $example):?>
                    <dd><a href="<?php echo Yii::app()->createUrl('product/view', array('id'=>$example->id)); ?>"><?php echo $example->title;?></a></dd>
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
        <?php echo $model->content; ?>

        <?php if(!Node::model()->isChild($model)): ?>
        <div class="workList">
        <a href="work_open2.html"><img src="photo/8.jpg"></a>
        <div class="right">
        <h4>德国SUNFARMING项目</h4>
        <p>项目范围：大型电站</p>
        <p>项目类型：地面安装</p>
        <p>项目规模：24MW</p>
        </div>
        <div class="more"><a href="work_open2.html">点击查看详细</a></div>
        </div>
        <?php endif;?>

       

    </div>
    <div class="clr"></div>
</div>