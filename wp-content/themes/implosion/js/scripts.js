$(function() {
	$('.faq-question').click(function(){
	if($(this).hasClass('active')) {
		$(this).next('.faq-answer').removeClass('active');
		$(this).removeClass('active');
	} else{
		$(this).next('.faq-answer').addClass('active');
		$(this).addClass('active');
	}
});
});