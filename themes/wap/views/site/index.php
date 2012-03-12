
    <div class="title grey"><b>新闻：</b></div>
    <div class="content">
      <div class="list">
        <ul>
          <?php foreach (News::model()->self()->published()->recently()->findAll() as $key => $item): ?>
            <li><a href="<?php echo Yii::app()->createUrl('news/view',array('id'=>$item->id)); ?>"><?php echo $item->title; ?></a></li>
          <?php endforeach ?>
        </ul>
      </div>
    </div>


    <div class="title grey"><b>产品：</b></div>
    <div class="content">
      <div class="list">
        <ul>
           <?php foreach (Product::model()->self()->published()->recently()->findAll() as $key => $item): ?>
            <li><a href="<?php echo Yii::app()->createUrl('product/view',array('id'=>$item->id)); ?>"><?php echo $item->title; ?></a></li>
          <?php endforeach ?>
        </ul>
      </div>
    </div>

    <div class="title grey"><b><a href="about.html">联系我们</a></b></div>
    <div class="content service">
      <p>江苏省高淳县经济开发区荆山路008号  </p>
      <p>总机： 025-57377227 025-57889548</p>
      <p>手机：13905196609</p>
      <p>传真：025-57889688</p>
    </div>


    <div class="content service"><a href="contact.html">查看详细联系方式</a></div>