<?php

/**
 *  Integrations
 */

// Google Analytics
function wpbs_google_analytics()
{
    if (!empty(WPBS['integrations']['google']['google_analytics'])) 
    {
        echo "<script async src='https://www.googletagmanager.com/gtag/js?id=" . WPBS['integrations']['google']['google_analytics'] . "'></script>
		<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', '" . WPBS['integrations']['google']['google_analytics'] . "');
		</script>";
    }
}
add_action('wp_head', 'wpbs_google_analytics', 80);

// Google Tag Manager
function wpbs_google_tag_manager()
{
    if (!empty(WPBS['integrations']['google']['google_tag_manager'])) {
        function wpbs_google_tag_manager_head()
        {
            echo "<script id='google-tag-manager'>
			(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
			new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
			j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
			'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
			})(window,document,'script','dataLayer','" . WPBS['integrations']['google']['google_tag_manager'] . "');</script>";
        }
        add_action('wp_head', 'wpbs_google_tag_manager_head', 85);
        
        function wpbs_google_tag_manager_body()
        {
            echo "<noscript><iframe src='https://www.googletagmanager.com/ns.html?id=" . WPBS['integrations']['google']['google_tag_manager'] . "' height='0' width='0' style='display:none;visibility:hidden'></iframe></noscript>";
        }
        add_action('body_start', 'wpbs_google_tag_manager_body', 0);
    };
}
add_action('init', 'wpbs_google_tag_manager', 85);

// Facebook Pixel
function wpbs_facebook_pixel()
{
    if (!empty(WPBS['integrations']['facebook']['facebook_pixel'])) {
        
        function wpbs_facebook_pixel_head()
        {
            echo "<script id='facebook-pixel'>
				!function(f,b,e,v,n,t,s)
				{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
				n.callMethod.apply(n,arguments):n.queue.push(arguments)};
				if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
				n.queue=[];t=b.createElement(e);t.async=!0;
				t.src=v;s=b.getElementsByTagName(e)[0];
				s.parentNode.insertBefore(t,s)}(window, document,'script',
				'https://connect.facebook.net/en_US/fbevents.js');
				fbq('init', '" . WPBS['integrations']['facebook']['facebook_pixel'] . "');
				fbq('track', 'PageView');
			</script>";
        }
        add_action('wp_head', 'wpbs_facebook_pixel_head', 90);
        
        function wpbs_facebook_pixel_body()
        {
            echo "<noscript><img height='1' width='1' style='display:none' src='https://www.facebook.com/tr?id=" . WPBS['integrations']['facebook']['facebook_pixel'] . "&ev=PageView&noscript=1' /></noscript>";
        }
        add_action('body_start', 'wpbs_facebook_pixel_body', 5);
    };

}
add_action('init', 'wpbs_facebook_pixel', 90);

// Hotjar Tracking
function wpbs_hotjar()
{
    if (!empty(WPBS['integrations']['hotjar']['hotjar_tracking'])) {
        echo "<script id='hotjar'>
			(function(h,o,t,j,a,r){
				h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
				h._hjSettings={hjid:" . WPBS['integrations']['hotjar']['hotjar_tracking'] . ",hjsv:6};
				a=o.getElementsByTagName('head')[0];
				r=o.createElement('script');r.async=1;
				r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
				a.appendChild(r);
			})(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
		</script>";
    }
}
add_action('wp_head', 'wpbs_hotjar', 95);
