<div class="title01 grey">
  <div class="title01_1">新闻</div>  <div class="more01"><a href="new_enter.html">&gt; 更多</a></div>
</div>
<div class="content">
  <div class="list">
    <ul>
      <?php foreach ($model as $key => $item): ?>
        <li><a href="<?php echo Yii::app()->createUrl('news/view',array('id'=>$item->id)); ?>"><?php echo $item->content; ?></a></li>
      <?php endforeach ?>
    </ul>
  </div>
</div>