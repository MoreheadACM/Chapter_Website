/*$(document).ready(
	function()
	{
		$('.button').bind('mouseenter mouseleave',
		function()
		{
			$(this).attr({src: $(this).attr('-src'), '-src': $(this).attr('src')})
		});
	});*/
	
$(document).ready(
	function()
	{
		$(".button").hover(
			function()
			{
				$(this).attr("src","red.png");
				//$(this).animate({height: '+=10px'});
			},
			function()
			{
				$(this).attr("src","purple.png");
				//$(this).animate({height: '-=10px'});
	});
});

//I might just be delusional but the first script "feels" faster than the second.
//However, the second script allows for cleaner html.