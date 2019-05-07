<tr class="custom-checkout-coupon-form">
    <td colspan="2" class="pl-0 pr-0">
    <div id="coupon_form">
        <h3 class="h5"><?php _e('Coupon','woocommerce');?></h3>
        <div class="form-inline">
            <input class="form-control" type="text" placeholder="Indtast rabatkode" name="fakeCouponField" id="fakeCouponField">
            <a class="ml-3 btn btn-primary" href="#" id="fakeCouponSubmit"><?php _e('Apply','woocommerce');?></a>
        </div>
        <script>
        jQuery("#fakeCouponSubmit").on("click",function () {
            var couponValue = jQuery("#fakeCouponField").val();
            jQuery("form.checkout_coupon #coupon_code").val(couponValue);
            jQuery("form.checkout_coupon").submit();
        });
        </script>
    </div>
    </td>
</tr>