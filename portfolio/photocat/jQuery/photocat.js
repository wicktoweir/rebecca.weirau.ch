$(document).ready(function() {
	$('.thumb_link').click(function(event) {
		event.preventDefault();
		$('.overcontainer').show();
		$('.overcontainer').css({
			'z-index': '10',
			'background': 'hsla(0, 10%, 10%, .8)'
		});
		$('#overbox_img').attr('src', $(this).attr('href'));
	});
	$('.close').click(function(event) {
		event.preventDefault(); 
		$('.overcontainer').hide();
	});
});
