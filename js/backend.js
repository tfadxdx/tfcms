$(document).ready(function(){
	$("#main_menu li").click(function(){
		$(this).children("ul").slideToggle('slow');
	});
	$("#parent").click(function(){
		$(".children").slideToggle('slow');
	});
});