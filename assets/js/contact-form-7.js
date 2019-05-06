jQuery(document).ready(function () {

	/*
	 * @ WordPress Contact form 7
	 */

	/* Remove error classes from fields */
	function removeErrorClassOnFields() {

		jQuery('.wpcf7-not-valid').each(function () {

			jQuery(this).on('change', function () {
				jQuery(this).removeClass('is-invalid');
				jQuery(this).siblings('.text-danger').remove();

			})

		});

	};

	jQuery('.wpcf7-response-output').bind('DOMSubtreeModified', function (e) {

		// Run the function to remove error classes again
		removeErrorClassOnFields();

		/* Add "form-validated" to the form */
		jQuery('.wpcf7-form').addClass('form-validated');

		/* Output mutation */
		jQuery(this).addClass('alert');

		// If mail wasn't sent
		if (jQuery(this).hasClass('wpcf7-validation-errors')) {
			jQuery(this).addClass('alert-danger');

			// Add error classes to field parent
			jQuery(this).parent().find('.wpcf7-not-valid').addClass('is-invalid');
			jQuery(this).parent().find('.wpcf7-not-valid').siblings('.wpcf7-not-valid-tip').addClass('text-danger');
		} else {
			jQuery(this).removeClass('alert-danger');
		};

		// If mail was sent..
		if (jQuery(this).hasClass('wpcf7-mail-sent-ok')) {
			jQuery(this).addClass('alert-success');
		} else {
			jQuery(this).removeClass('alert-success');
		};

	});

});