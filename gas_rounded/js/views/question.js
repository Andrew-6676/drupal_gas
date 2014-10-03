	// alert('df');
jQuery(document).ready(function() {
	jQuery('.question').click(function(){
		if (jQuery(this).hasClass('open')) {
			jQuery(this).removeClass('open');
			jQuery(this).parent().parent().find('.answer').hide(300);
		} else {
			jQuery(this).addClass('open');
			jQuery(this).parent().parent().find('.answer').show(300);
		}
	})

})		// document.ready