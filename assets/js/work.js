$(document).ready(function(){
	$('.toggle').click(function(){
		$(this).parent().find('.info').eq(0).toggle();
		$(this).parent().find('.content').eq(0).toggle();
		if($(this).hasClass('fa-angle-down'))
		{
			$(this).removeClass('fa-angle-down');
			$(this).addClass('fa-angle-up');
		}
		else
		{
			$(this).removeClass('fa-angle-up');
			$(this).addClass('fa-angle-down');	
		}
	})
})