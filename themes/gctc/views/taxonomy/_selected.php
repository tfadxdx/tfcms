<div class="workBg top101">
    <h2><img src="<?php echo Yii::app()->request->baseUrl;?>/upload/images/workTit.gif" width="224" height="39"></h2>
<div class="workCon">
      	<div id="slider">
          <img class="scrollButtons left" src="<?php echo Yii::app()->request->baseUrl;?>/upload/images/left-arrow.gif" alt="">
          <div class="scroll" style="overflow-x: hidden; overflow-y: hidden; ">
            <div class="scrollContainer" style="width: 1864px; left: -296px; ">
                <?php foreach($model->products as $key=>$product):?>
                <div class="panel" id="panel_<?php echo $key+1;?>" style="float: left; position: relative; ">
                <div class="inside">
                  <img src="<?php echo $product->banner;?>" alt="picture">
                  <h2><?php echo $product->title;?></h2>
                  <p><?php echo $product->description;?> </p><span><a href="<?php echo Yii::app()->createUrl('product/view', array('id'=>$product->id));?>">更多 &gt;</a></span>
                  <div class="clr"></div>
                </div>
               </div>
              <?php endforeach;?>
            </div>
          </div>
          <img class="scrollButtons right" src="<?php echo Yii::app()->request->baseUrl;?>/upload/images/right-arrow.gif" alt="">
          </div>
</div>
</div>