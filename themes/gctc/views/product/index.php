<div class="proConBg top101" id="joinList">
<ul>
<?php foreach($model as $key=>$item):?>
    <li class="dl01"><a href="#" class="btnl" id="<?php echo $item->id;?>"><img src="<?php echo $item->banner;?>" width="494" height="356" style="width:494px;height:356px"></a><div class="span"><?php echo $item->title;?></div></li>
<?php endforeach;?>
</ul>
<div class="clr"></div>
<div class="pages">
 776 条记录 <em>1/39</em> 页 <a href="#" class="current">1</a><a href="#">2</a><a href="#">3</a><a href="#">4</a><a href="#">5</a><a class="last" href="#">下一页</a></div>
</div>
<div class="joinFormBox" id="joinFormBox" style="top: 177px;">
    <button type="button" class="btn07" id="closeBtn">关闭</button>
    <div class="container">
        <div class="wrapper">
            <?php foreach($model as $key=>$item):?>
            <div class="cn-slideshow" id="large_<?php echo $item->id;?>">
                    <div class="slides_container">
                            <?php echo $item->content;?>
                    </div><!-- cn-images -->
                </div><!-- cn-slideshow -->
            <?php endforeach;?>
        </div>
    </div>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		$('#footer').addClass('footBg');
		$('#footer').removeAttr('id');
	});
</script>
<script type="text/javascript">
  $(document).ready(function() {
    $(".cn-slideshow").slides({
        generateNextPrev: true
    });
  });
</script>
<style type="text/css" media="screen">
  .slides_container {
    width:1004px;
    height:520px;
  }
  .slides_container div {
    width:1004px;
    height:520px;
    display:block;
  }
  .pagination {
	margin:26px auto 0;
	width:100px;
}
  .pagination li {
	float:left;
	margin:0 1px;
}

.pagination li a {
	display:block;
	width:12px;
	height:0;
	padding-top:12px;
	background-image:url(/img/pagination.png);
	background-position:0 0;
	float:left;
	overflow:hidden;
}

.pagination li.current a {
	background-position:0 -12px;
}
</style>