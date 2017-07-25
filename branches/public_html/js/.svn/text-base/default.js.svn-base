jQuery(document).ready(function() {
	/*------------POP UP------------*/	
	jQuery("a.popup").click(function(){
		var targetID = jQuery(this).attr('href');
		jQuery(targetID).fadeIn();
		jQuery("#pagewidth").css({'height' : '1500px'});
		jQuery("#bgPopup").fadeIn();
	});
	jQuery("a.closePopup").click(function(){
		jQuery(".popupContainer").fadeOut();
		jQuery("#bgPopup").fadeOut();
		jQuery("#pagewidth").css({'height' : '100%'});
	});
	$('ul.slideshow').innerfade({
		speed: 1000,
		timeout: 5000,
		type: 'sequence',
		containerheight: '220px'
	});
	
});


