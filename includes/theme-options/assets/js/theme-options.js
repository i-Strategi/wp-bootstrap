jQuery(document).ready(function($) {
	
	// Required input field validation
	jQuery('#submit').click(function () {
	   jQuery(':required:invalid', '#themeOptionsForm').each(function () {
		   
		  jQuery(this).addClass('has-error');
		  var id = jQuery('.tab-pane').find(':required:invalid').closest('.tab-pane').attr('id');
		  jQuery('.nav a[href="#' + id + '"]').tab('show');
		  
	   });
	});

	jQuery(':required:invalid', '#themeOptionsForm').each(function () {
	   jQuery(this).on('change',function () {
		  jQuery(this).removeClass('has-error'); 
	   });
	});
	
});