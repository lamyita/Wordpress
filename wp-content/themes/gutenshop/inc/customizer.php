<?php
/**
 * gutenshop Theme Customizer
 *
 * @package guten_shop
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function guten_shop_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	$wp_customize->get_control( 'header_textcolor'  )->section   = 'customize_navigation';
	$wp_customize->get_section('title_tagline')->title = __( 'Navigation Settings', 'gutenshop' );
	$wp_customize->get_section('background_image')->title = __( 'Post & Page Settings', 'gutenshop' );
	$wp_customize->get_section( 'background_image' )->priority  = 20;


	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'guten_shop_customize_partial_blogname',
			) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'guten_shop_customize_partial_blogdescription',
			) );
	}

	/* Documentation link */
	$wp_customize->add_section(
		'gutenshop_documentation',
		array(
			'title' => __('Help & Documentation', 'gutenshop'),
			'priority' => 0,
			'description' => wp_kses_post('<h3>Documentation</h3><p>Click the button below to view Gutenshop theme documentation and F.A.Q where we answer the most common questions on how to use this theme.</p>
				<a href="https://superbthemes.com/gutenshop/gutenshop-documentation/" class="button button-primary alignleft" target="_blank">View Documentation</a><br><br><br><h3>Contact Our Support</h3><p>Our support stand ready every day to help with Gutenshop theme related questions and issues.</p><a href="https://superbthemes.com/customer-support/" class="button button-primary alignleft" target="_blank">Contact Support</a>', 'gutenshop') 
			)
		);  
	$wp_customize->add_setting('gutenshop_documentation_link', array(
		'sanitize_callback' => 'gutenshop_docs',
		'type' => 'info_control',
		'capability' => 'edit_theme_options',
		)
	);
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gutenshop_documentation_conrol', array(
		'section' => 'gutenshop_documentation',
		'settings' => 'gutenshop_documentation_link',
		'type' => 'textbased',
		'priority' => 0
		) )
	);   

	/* Customize Navigation */
	
	$wp_customize->add_setting( 'navigation_remove_cart', array(
		'default' => 0,
		'sanitize_callback' => 'sanitize_text_field',
		) );

	$wp_customize->add_control( 'navigation_remove_cart', array(
		'label'    => __( 'Remove Shopping Cart From Menu', 'gutenshop' ),
		'section'  => 'title_tagline',
		'priority' => 1,
		'settings' => 'navigation_remove_cart',
		'type'     => 'checkbox',
		) );


	$wp_customize->add_setting( 'hide_navigation', array(
		'default' => 0,
		'sanitize_callback' => 'sanitize_text_field',
		) );

	$wp_customize->add_control( 'hide_navigation', array(
		'label'    => __( 'Hide Navigation Completely', 'gutenshop' ),
		'section'  => 'title_tagline',
		'description'    => __( 'This will remove the header navigation.', 'gutenshop' ),
		'priority' => 9999,
		'settings' => 'hide_navigation',
		'type'     => 'checkbox',
		) );

	$wp_customize->add_setting( 'display_navigation_tagline', array(
		'default' => 0,
		'sanitize_callback' => 'sanitize_text_field',
		) );

	$wp_customize->add_control( 'display_navigation_tagline', array(
		'label'    => __( 'Show Site Tagline', 'gutenshop' ),
		'section'  => 'title_tagline',
		'priority' => 30,
		'settings' => 'display_navigation_tagline',
		'type'     => 'checkbox',
		) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_textcolor', array(
		'label'       => __( 'Logo Color', 'gutenshop' ),
		'section'     => 'title_tagline',
		'priority'   => 40,
		'settings'    => 'header_textcolor',
		) ) );

	$wp_customize->add_setting( 'navigation_link_color', array(
		'default'           => '#404040',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
		) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'navigation_link_color', array(
		'label'       => __( 'Link Colors', 'gutenshop' ),
		'section'     => 'title_tagline',
		'priority'   => 40,
		'settings'    => 'navigation_link_color',
		) ) );

	$wp_customize->add_setting( 'navigation_background_color', array(
		'default'           => '#fff',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
		) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'navigation_background_color', array(
		'label'       => __( 'Background Color', 'gutenshop' ),
		'section'     => 'title_tagline',
		'priority'   => 40,
		'settings'    => 'navigation_background_color',
		) ) );


	/* Posts And Pages Settings */
	$wp_customize->add_setting( 'hide_featured_image', array(
		'default' => 0,
		'sanitize_callback' => 'sanitize_text_field',
		) );

	$wp_customize->add_control( 'hide_featured_image', array(
		'label'    => __( 'Hide Featured Image', 'gutenshop' ),
		'description'    => __( 'This will hide featured images from all single posts. It will not effect the blog feed.', 'gutenshop' ),
		'section'  => 'background_image',
		'priority' => 1,
		'settings' => 'hide_featured_image',
		'type'     => 'checkbox',
		) );

	$wp_customize->add_setting( 'fullwidth_productpages', array(
		'default' => 0,
		'sanitize_callback' => 'sanitize_text_field',
		) );

	$wp_customize->add_control( 'fullwidth_productpages', array(
		'label'    => __( 'Hide Sidebar on Product Pages', 'gutenshop' ),
		'description'    => __( 'This will only hide the sidebar on Woocommerce product pages', 'gutenshop' ),
		'section'  => 'background_image',
		'priority' => 1,
		'settings' => 'fullwidth_productpages',
		'type'     => 'checkbox',
		) );


	$wp_customize->add_setting( 'postpage_related_products', array(
		'default' => 0,
		'sanitize_callback' => 'sanitize_text_field',
		) );

	$wp_customize->add_control( 'postpage_related_products', array(
		'label'    => __( 'Remove the Related Products section on Woocommerce product pages', 'gutenshop' ),
		'description'    => __( 'This will only hide the sidebar on Woocommerce product pages', 'gutenshop' ),
		'section'  => 'background_image',
		'priority' => 1,
		'settings' => 'postpage_related_products',
		'type'     => 'checkbox',
		) );


	$wp_customize->add_setting( 'hide_addtocart', array(
		'default' => 0,
		'sanitize_callback' => 'sanitize_text_field',
		) );

	$wp_customize->add_control( 'hide_addtocart', array(
		'label'    => __( 'Remove Add To Cart button from product previews', 'gutenshop' ),
		'description'    => __( 'When hovering product images a Add To Cart button is shown, check this to remove it', 'gutenshop' ),
		'section'  => 'background_image',
		'priority' => 1,
		'settings' => 'hide_addtocart',
		'type'     => 'checkbox',
		) );


}
add_action( 'customize_register', 'guten_shop_customize_register' );



if(! function_exists('guten_shop_customize_register_output' ) ):
	function guten_shop_customize_register_output(){
		?>

		<style type="text/css">
		/* Navigation */
		.main-navigation a, #site-navigation span.dashicons.dashicons-menu:before, .iot-menu-left-ul a { color: <?php echo esc_attr(get_theme_mod( 'navigation_link_color')); ?>; }
		.cart-customlocation svg{ fill: <?php echo esc_attr(get_theme_mod( 'navigation_link_color')); ?>; }
		.navigation-wrapper, .main-navigation ul ul, #iot-menu-left, .cart-preview{ background: <?php echo esc_attr(get_theme_mod( 'navigation_background_color')); ?>; }
		<?php if ( get_theme_mod( 'hide_navigation' ) == '1' ) : ?>
		.navigation-wrapper {display: none;}
		<?php endif; ?>
		<?php if ( get_theme_mod( 'display_navigation_tagline' ) == '1' ) : ?>
		.site-description {display:block;}
		.main-navigation a {line-height:63px;}
		.cart-customlocation svg{margin-top:34px;}
		#site-navigation span.dashicons.dashicons-menu {margin-top:25px;}
		<?php endif; ?>

		<?php if ( get_theme_mod( 'navigation_remove_cart' ) == '1' ) : ?>
		.cart-header {display: none;}
		<?php endif; ?>
		<?php if ( get_theme_mod( 'hide_addtocart' ) == '1' ) : ?>
		ul.products li.product a.button {display: none;}
		<?php endif; ?>


		<?php if ( get_theme_mod( 'hide_featured_image' ) == '1' ) : ?>
		.single-post .post-thumbnail {
			display: none;
		}
		<?php endif; ?>

		/* Customize */
		.single .content-area a, .page .content-area a, .woocommerce table.shop_table a { color: <?php echo esc_attr(get_theme_mod( 'global_link')); ?>; }
		.page .content-area a.button, .single .page .content-area a.button {color:#fff;}
		a.button,a.button:hover,a.button:active,a.button:focus, button, input[type="button"], input[type="reset"], input[type="submit"] { background: <?php echo esc_attr(get_theme_mod( 'global_link')); ?>; }
		.tags-links a, .cat-links a{ border-color: <?php echo esc_attr(get_theme_mod( 'global_link')); ?>; }
		.single main article .entry-meta *, .single main article .entry-meta, .archive main article .entry-meta *, .comments-area .comment-metadata time{ color: <?php echo esc_attr(get_theme_mod( 'global_byline')); ?>; }
		.single .content-area h1, .single .content-area h2, .single .content-area h3, .single .content-area h4, .single .content-area h5, .single .content-area h6, .page .content-area h1, .page .content-area h2, .page .content-area h3, .page .content-area h4, .page .content-area h5, .page .content-area h6, .page .content-area th, .single .content-area th, .blog.related-posts main article h4 a, .single b.fn, .page b.fn, .error404 h1, .search-results h1.page-title, .search-no-results h1.page-title, .archive h1.page-title, .page header.entry-header h1, h2.woocommerce-loop-product__title, .woocommerce-billing-fields label,#order_comments_field label, .wc_payment_method label, form.woocommerce-EditAccountForm.edit-account legend, .product h1.product_title.entry-title, .woocommerce div.product p.price *{ color: <?php echo esc_attr(get_theme_mod( 'global_headline')); ?>; }
		.comment-respond p.comment-notes, .comment-respond label, .page .site-content .entry-content cite, .comment-content *, .about-the-author, .page code, .page kbd, .page tt, .page var, .page .site-content .entry-content, .page .site-content .entry-content p, .page .site-content .entry-content li, .page .site-content .entry-content div, .comment-respond p.comment-notes, .comment-respond label, .single .site-content .entry-content cite, .comment-content *, .about-the-author, .single code, .single kbd, .single tt, .single var, .single .site-content .entry-content, .single .site-content .entry-content p, .single .site-content .entry-content li, .single .site-content .entry-content div, .error404 p, .search-no-results p, .woocommerce-Price-amount.amount, .woocommerce ul.products li.product .price, mark.count, p.woocommerce-result-count, .cart-subtotal span.woocommerce-Price-amount.amount, .order-total span.woocommerce-Price-amount.amount, .woocommerce-terms-and-conditions-wrapper .validate-required label, .woocommerce-form-login span, .woocommerce-form-login label, .create-account span, #customer_login .form-row label, .woocommerce-view-order mark,.woocommerce-view-order ins, table tfoot, .woocommerce form .form-row label, .payment_method_stripe label, .variations label, .product span.sku, .woocommerce div.product .woocommerce-tabs ul.tabs li a, .woocommerce div.product .woocommerce-tabs ul.tabs li a:hover, .woocommerce table.shop_attributes th, .woocommerce table.shop_attributes td { color: <?php echo esc_attr(get_theme_mod( 'global_content')); ?>; }
		.page .entry-content blockquote, .single .entry-content blockquote, .comment-content blockquote { border-color: <?php echo esc_attr(get_theme_mod( 'global_content')); ?>; }
		.error-404 input.search-field, .about-the-author, .comments-title, .related-posts h3, .comment-reply-title,#add_payment_method .cart-collaterals .cart_totals tr td, #add_payment_method .cart-collaterals .cart_totals tr th, .woocommerce-cart .cart-collaterals .cart_totals tr td, .woocommerce-cart .cart-collaterals .cart_totals tr th, .woocommerce-checkout .cart-collaterals .cart_totals tr td, .woocommerce-checkout .cart-collaterals .cart_totals tr th, .woocommerce-cart .cart_totals h2, .woocommerce table.shop_table td, .woocommerce-checkout .woocommerce-billing-fields h3, #add_payment_method #payment ul.payment_methods, .woocommerce-cart #payment ul.payment_methods, .woocommerce-checkout #payment ul.payment_methods,.woocommerce div.product .woocommerce-tabs ul.tabs::before { border-color: <?php echo esc_attr(get_theme_mod( 'global_borders')); ?>; }
		.product h1.product_title.entry-title:after, .woocommerce-cart h1:after, .woocommerce-account.woocommerce-page h1.entry-title:after, #customer_login h2:after{ background: <?php echo esc_attr(get_theme_mod( 'global_borders')); ?>; }
		.woocommerce table.shop_table.woocommerce-checkout-review-order-table, .single article.post table *,.page article.page table *, nav.woocommerce-MyAccount-navigation li{ border-color: <?php echo esc_attr(get_theme_mod( 'global_borders')); ?> !important; }
		.wp-block-button__link, ul li.product .button, ul li.product .button:hover, .woocommerce ul.products li.product .product-feed-button .add_to_cart_button, .woocommerce ul.products li.product .product-feed-button .button, .woocommerce ul.products li.product:hover a.added_to_cart.wc-forward, .woocommerce nav.woocommerce-pagination ul li a, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current, .woocommerce nav.woocommerce-pagination ul li span.current:hover, .woocommerce nav.woocommerce-pagination ul li span, .woocommerce nav.woocommerce-pagination ul li, a.checkout-button.button.alt.wc-forward, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce table.shop_table .coupon button.button, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .return-to-shop a.button.wc-backward, .woocommerce #respond input#submit.disabled:hover, .woocommerce #respond input#submit:disabled:hover, .woocommerce #respond input#submit:disabled[disabled]:hover, .woocommerce a.button.disabled:hover, .woocommerce a.button:disabled:hover, .woocommerce a.button:disabled[disabled]:hover, .woocommerce button.button.disabled:hover, .woocommerce button.button:disabled:hover, .woocommerce button.button:disabled[disabled]:hover, .woocommerce input.button.disabled:hover, .woocommerce input.button:disabled:hover, .woocommerce input.button:disabled[disabled]:hover, .woocommerce-checkout button#place_order, .woocommerce .woocommerce-message a.button.wc-forward, .woocommerce-message a.button.wc-forward:hover, .woocommerce-message a.button.wc-forward:focus, div#customer_login form.woocommerce-EditAccountForm.edit-account button.woocommerce-Button.button, .woocommerce-form-login button.woocommerce-Button.button, #customer_login button.woocommerce-Button.button, a.button, a.button:hover, a.button:active, a.button:focus, button, input[type="button"], input[type="reset"], input[type="submit"], .woocommerce-account a.woocommerce-button.button.view, .woocommerce-account a.woocommerce-button.button.view:hover, .woocommerce-account a.woocommerce-button.button.view:active, .woocommerce-account a.woocommerce-button.button.view:focus, .woocommerce .woocommerce-MyAccount-content a.button, .woocommerce .woocommerce-MyAccount-content a.button:hover, .woocommerce .woocommerce-MyAccount-content a.button:active, .woocommerce .woocommerce-MyAccount-content a.button:focus, form#add_payment_method button#place_order, .woocommerce-Address a.edit, .woocommerce table a.button.delete, .woocommerce table a.button.delete:hover, button.single_add_to_cart_button.button.alt, button.single_add_to_cart_button.button.alt:hover, .woocommerce #respond input#submit.alt.disabled, .woocommerce #respond input#submit.alt.disabled:hover, .woocommerce #respond input#submit.alt:disabled, .woocommerce #respond input#submit.alt:disabled:hover, .woocommerce #respond input#submit.alt:disabled[disabled], .woocommerce #respond input#submit.alt:disabled[disabled]:hover, .woocommerce a.button.alt.disabled, .woocommerce a.button.alt.disabled:hover, .woocommerce a.button.alt:disabled, .woocommerce a.button.alt:disabled:hover, .woocommerce a.button.alt:disabled[disabled], .woocommerce a.button.alt:disabled[disabled]:hover, .woocommerce button.button.alt.disabled, .woocommerce button.button.alt.disabled:hover, .woocommerce button.button.alt:disabled, .woocommerce button.button.alt:disabled:hover, .woocommerce button.button.alt:disabled[disabled], .woocommerce button.button.alt:disabled[disabled]:hover, .woocommerce input.button.alt.disabled, .woocommerce input.button.alt.disabled:hover, .woocommerce input.button.alt:disabled, .woocommerce input.button.alt:disabled:hover, .woocommerce input.button.alt:disabled[disabled], .woocommerce input.button.alt:disabled[disabled]:hover, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt{ background: <?php echo esc_attr(get_theme_mod( 'global_button_background')); ?>; }
		.single .content-area a.wp-block-button__link, .page .content-area a.wp-block-button__link, .wp-block-button__link, ul li.product .button, ul li.product .button:hover, .woocommerce ul.products li.product .product-feed-button .add_to_cart_button, .woocommerce ul.products li.product .product-feed-button .button, .woocommerce ul.products li.product:hover a.added_to_cart.wc-forward, .woocommerce nav.woocommerce-pagination ul li a, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current, .woocommerce nav.woocommerce-pagination ul li span.current:hover, .woocommerce nav.woocommerce-pagination ul li span, .woocommerce nav.woocommerce-pagination ul li, a.checkout-button.button.alt.wc-forward, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce table.shop_table .coupon button.button, .woocommerce table.shop_table input#coupon_code, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, #secondary .search-form input.search-submit, .search-form input.search-submit, input.search-submit, a.button, a.button:hover, a.button:active, a.button:focus, button, input[type="button"], input[type="reset"], input[type="submit"], .woocommerce-Address a.edit, .woocommerce table a.button.delete, .woocommerce table a.button.delete:hover,button.single_add_to_cart_button.button.alt, button.single_add_to_cart_button.button.alt:hover, .woocommerce #respond input#submit.alt.disabled, .woocommerce #respond input#submit.alt.disabled:hover, .woocommerce #respond input#submit.alt:disabled, .woocommerce #respond input#submit.alt:disabled:hover, .woocommerce #respond input#submit.alt:disabled[disabled], .woocommerce #respond input#submit.alt:disabled[disabled]:hover, .woocommerce a.button.alt.disabled, .woocommerce a.button.alt.disabled:hover, .woocommerce a.button.alt:disabled, .woocommerce a.button.alt:disabled:hover, .woocommerce a.button.alt:disabled[disabled], .woocommerce a.button.alt:disabled[disabled]:hover, .woocommerce button.button.alt.disabled, .woocommerce button.button.alt.disabled:hover, .woocommerce button.button.alt:disabled, .woocommerce button.button.alt:disabled:hover, .woocommerce button.button.alt:disabled[disabled], .woocommerce button.button.alt:disabled[disabled]:hover, .woocommerce input.button.alt.disabled, .woocommerce input.button.alt.disabled:hover, .woocommerce input.button.alt:disabled, .woocommerce input.button.alt:disabled:hover, .woocommerce input.button.alt:disabled[disabled], .woocommerce input.button.alt:disabled[disabled]:hover, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt { color: <?php echo esc_attr(get_theme_mod( 'global_button_text')); ?> !important; }
		.woocommerce table.shop_table input#coupon_code, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce-account a.woocommerce-button.button.view, .woocommerce-account a.woocommerce-button.button.view:hover, .woocommerce-account a.woocommerce-button.button.view:active, .woocommerce-account a.woocommerce-button.button.view:focus, .woocommerce .woocommerce-MyAccount-content a.button, .woocommerce .woocommerce-MyAccount-content a.button:hover, .woocommerce .woocommerce-MyAccount-content a.button:active, .woocommerce .woocommerce-MyAccount-content a.button:focus, form#add_payment_method button#place_order, .woocommerce-Address a.edit,.woocommerce table a.button.delete, .woocommerce table a.button.delete:hover, button.single_add_to_cart_button.button.alt, button.single_add_to_cart_button.button.alt:hover,.woocommerce .product .woocommerce-tabs ul.tabs.wc-tabs li.active,.woocommerce #respond input#submit.alt.disabled, .woocommerce #respond input#submit.alt.disabled:hover, .woocommerce #respond input#submit.alt:disabled, .woocommerce #respond input#submit.alt:disabled:hover, .woocommerce #respond input#submit.alt:disabled[disabled], .woocommerce #respond input#submit.alt:disabled[disabled]:hover, .woocommerce a.button.alt.disabled, .woocommerce a.button.alt.disabled:hover, .woocommerce a.button.alt:disabled, .woocommerce a.button.alt:disabled:hover, .woocommerce a.button.alt:disabled[disabled], .woocommerce a.button.alt:disabled[disabled]:hover, .woocommerce button.button.alt.disabled, .woocommerce button.button.alt.disabled:hover, .woocommerce button.button.alt:disabled, .woocommerce button.button.alt:disabled:hover, .woocommerce button.button.alt:disabled[disabled], .woocommerce button.button.alt:disabled[disabled]:hover, .woocommerce input.button.alt.disabled, .woocommerce input.button.alt.disabled:hover, .woocommerce input.button.alt:disabled, .woocommerce input.button.alt:disabled:hover, .woocommerce input.button.alt:disabled[disabled], .woocommerce input.button.alt:disabled[disabled]:hover, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt{ border-color: <?php echo esc_attr(get_theme_mod( 'global_button_background')); ?> !important; }
		.woocommerce span.onsale { color: <?php echo esc_attr(get_theme_mod( 'global_sale_text')); ?>; }
		.woocommerce span.onsale { background: <?php echo esc_attr(get_theme_mod( 'global_sale_bg')); ?>; }
		.woocommerce .woocommerce-ordering select, .woocommerce .quantity input.qty, .woocommerce form input, .woocommerce form .form-row .input-text, .woocommerce-page form .form-row .input-text, .select2-container--default .select2-selection--single, .error-404 input.search-field, div#stripe-card-element, div#stripe-exp-element, div#stripe-cvc-element, .woocommerce div.product form.cart .variations select { background: <?php echo esc_attr(get_theme_mod( 'global_input_bg')); ?>; }
		.woocommerce .woocommerce-ordering select, .woocommerce .quantity input.qty, .woocommerce form input, .woocommerce form .form-row .input-text, .woocommerce-page form .form-row .input-text, .select2-container--default .select2-selection--single, .error-404 input.search-field, .select2-container--default .select2-selection--single .select2-selection__rendered, div#stripe-card-element, div#stripe-exp-element, div#stripe-cvc-element, .woocommerce div.product form.cart .variations select { color: <?php echo esc_attr(get_theme_mod( 'global_input_text')); ?>; }
		.woocommerce .woocommerce-ordering select, .woocommerce .quantity input.qty, .woocommerce form input, .woocommerce form .form-row .input-text, .woocommerce-page form .form-row .input-text, .select2-container--default .select2-selection--single, .woocommerce form .form-row.woocommerce-validated .select2-container, .woocommerce form .form-row.woocommerce-validated input.input-text, .woocommerce form .form-row.woocommerce-validated select, .error-404 input.search-field, div#stripe-card-element, div#stripe-exp-element, div#stripe-cvc-element, .woocommerce div.product form.cart .variations select { border-color: <?php echo esc_attr(get_theme_mod( 'global_input_bg')); ?> !important; }
		.select2-container--default .select2-selection--single .select2-selection__arrow b{ border-color: <?php echo esc_attr(get_theme_mod( 'global_input_text')); ?> transparent transparent transparent; }
		.single article.post table *,.page article.page table *, .woocommerce .woocommerce-checkout #payment ul.payment_methods, .woocommerce-error, .woocommerce-info, .woocommerce-message, .woocommerce-checkout form.woocommerce-form.woocommerce-form-login.login{ background: #<?php echo esc_attr(get_theme_mod( 'background_color')); ?>; }
		body.custom-background.blog, body.blog, body.custom-background.archive, body.archive, body.custom-background.search-results, body.search-results{ background-color: <?php echo esc_attr(get_theme_mod( 'blog_site_background')); ?>; }
		.blog main article, .search-results main article, .archive main article, .related-posts.blog main article{ background-color: <?php echo esc_attr(get_theme_mod( 'blog_post_background')); ?>; }
		.blog main article h2 a, .search-results main article h2 a, .archive main article h2 a{ color: <?php echo esc_attr(get_theme_mod( 'blog_post_headline')); ?>; }
		.blog main article .entry-meta, .archive main article .entry-meta, .search-results main article .entry-meta{ color: <?php echo esc_attr(get_theme_mod( 'blog_post_byline')); ?>; }
		.blog main article p, .search-results main article p, .archive main article p { color: <?php echo esc_attr(get_theme_mod( 'blog_post_excerpt')); ?>; }
		.nav-links span, .nav-links a, .pagination .current, .nav-links span:hover, .nav-links a:hover, .pagination .current:hover { background: <?php echo esc_attr(get_theme_mod( 'blog_post_navigation_bg')); ?>; }
		.nav-links span, .nav-links a, .pagination .current, .nav-links span:hover, .nav-links a:hover, .pagination .current:hover{ color: <?php echo esc_attr(get_theme_mod( 'blog_post_navigation_link')); ?>; }

		<?php if ( get_theme_mod( 'fullwidth_productpages' ) == '1' ) : ?>
		.single-product div#primary.content-area { width: 100%; max-width: 100%; }
		.single-product aside#secondary { display: none; }
		<?php endif; ?>
		<?php if ( get_theme_mod( 'hide_addtocart' ) == '1' ) : ?>
		ul.products li.product a.button {display: none;}
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'postpage_related_products' ) == '1' ) : ?>
		section.related.products {display: none;}
		<?php endif; ?>

		</style>
		<?php }
		add_action( 'wp_head', 'guten_shop_customize_register_output' );
		endif;


/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function guten_shop_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function guten_shop_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function guten_shop_customize_preview_js() {
	wp_enqueue_script( 'gutenshop-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '1', true );
}
add_action( 'customize_preview_init', 'guten_shop_customize_preview_js' );
