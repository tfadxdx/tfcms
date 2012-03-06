<?php echo $model->content; ?>
<script type="text/javascript">
	$(document).ready(function(){
		$("body").addClass('aboutBg');
	});
</script>
<script type="text/javascript">
    $(function() {
			$('#cn-slideshow').slideshow();
            });
</script>
<script id="barTmpl" type="text/x-jquery-tmpl">
<div class="cn-bar">
    <div class="cn-nav">
	<a href="#" class="cn-nav-prev">
    <span>Previous</span>

	</a>
	<a href="#" class="cn-nav-next">
    <span>Next</span>

	</a>
    </div><!-- cn-nav -->
    <div class="cn-nav-content">
    <div class="cn-nav-content-prev">
    <span>Previous image</span>
    <h3>${prevTitle}</h3>
    </div>
    <div class="cn-nav-content-current">
    <span>White Peony</span>
    <h2>${currentTitle}</h2>
    </div>
    <div class="cn-nav-content-next">
    <span>Next image</span>
    <h3>${nextTitle}</h3>
    </div>
    </div>
    </div>
</script>