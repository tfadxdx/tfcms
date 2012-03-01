<?php if($model->banner):?>
    <div class="aboutBanner">
        <?php echo $model->banner; ?>
    </div>
<?endif?>
    <div class="aboutCon">
        <div class="leftBg">
          <h2 class="conTit">联系我们</h2>
          <dl>
                <?php foreach($tax->pages as $page):?>
                <dt><a href="<?php echo Yii::app()->createUrl('page/view', array('id'=>$page->id));?>"><?php echo $page->title;?></a></dt>
                <?php endforeach;?>
          </dl>
          <dl class="leftListBot"></dl>
            <dl class="top"><a href="http://www.ceeg.cn/"><img src="/tfcms/upload/images/linkLogo01.jpg" alt="中电电气"></a></dl>
            <dl class="top"><a href="http://www.epia.org/"><img src="/tfcms/upload/images/linkLogo02.jpg" alt="EPIA"></a></dl>
            <dl class="top"><a href="http://www.ceeg.cn/"><img src="/tfcms/upload/images/linkLogo03.jpg" alt="中电电气"></a></dl>
        </div>
        <?php echo $model->content; ?>
    </div>