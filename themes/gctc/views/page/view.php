<?php echo $model->content; ?>
<?php if ($model->title=="联系我们") {
	$this->renderPartial('_contact');
} elseif ($model->title=="维特·佩尼精品") {
	$this->renderPartial('_pro');
} elseif ($model->title=="合作伙伴") {
	$this->renderPartial('_part');
} else {
	$this->renderPartial('_about');
}?>
<script type="text/javascript">
	$(document).ready(function() {
		$('#footer').addClass('footBg');
		$('#footer').removeAttr('id');
	});
</script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/moving-boxes.js"></script>