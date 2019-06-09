jQuery(document).ready(function ($) {

	/**
	 * 
	 * Bootstrap
	 * 
	 */

	// Initialize tooltip
	$('[data-toggle="tooltip"]').tooltip()

	// Initialize alert messages
	$('.alert-message').alert();

	// Initialize dropdown
	$('.dropdown-toggle').dropdown();

	// Prevent submission of empty form
	$('[placeholder]').parents('form').submit(function () {
		$(this).find('[placeholder]').each(function () {
			var input = $(this);
			if (input.val() == input.attr('placeholder')) {
				input.val('');
			}
		})
	});

	/**
	 * 
	 * Offcanvas menu
	 * 
	 */

	function offcanvas_menu() {

		function offcanvas_destroy() {
			$('body').removeClass('offcanvas-in');
			$('.offcanvas-menu-backdrop').remove();
		}

		function offcanvas_init() {
			$('body').addClass('offcanvas-in');
			$('body').append('<div class="offcanvas-menu-backdrop"></div>');
			$('.offcanvas-menu-backdrop').on('click', function () {
				offcanvas_destroy();
			});
		}


		$('[data-toggle="offcanvas"]').on('click', function () {
			if ($('body').hasClass('offcanvas-in')) {
				offcanvas_destroy();
			} else {
				offcanvas_init();
			}
		});


	}
	offcanvas_menu();

	/**
	 * 
	 * WooCommerce
	 * 
	 */


	jQuery(window).on('country_to_state_changed', function () {
		jQuery('#billing_state,#shipping_state').addClass('form-control');
	});

	jQuery(document).on('click', "#fakeCouponSubmit", function () {
		var couponValue = jQuery("#fakeCouponField").val();
		jQuery("form.checkout_coupon #coupon_code").val(couponValue);
		jQuery("form.checkout_coupon").submit();
	});

	jQuery(document).on('click', '.woocommerce-terms-and-conditions-link', function (e) {
		e.preventDefault();
		jQuery('#termsModal').modal('show');
	})
});