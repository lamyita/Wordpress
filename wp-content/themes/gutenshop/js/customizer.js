/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

 ( function( $ ) {

	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).text( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );


	// Customizer colors
	wp.customize( 'sidebar_bg_color', function( value ) {
		value.bind( function( to ) {
			$( '.sidebar-inner' ).css( {
				'background':to
			});
		} );
	} );

	wp.customize( 'navigation_link_color', function( value ) {
		value.bind( function( to ) {
			$( '.main-navigation a, #site-navigation span.dashicons.dashicons-menu:before, .iot-menu-left-ul a' ).css( {
				'color':to
			});
		} );
	} );
	wp.customize( 'navigation_background_color', function( value ) {
		value.bind( function( to ) {
			$( '.navigation-wrapper, .main-navigation ul ul, #iot-menu-left' ).css( {
				'background':to
			});
		} );
	} );

	wp.customize( 'sidebar_headline', function( value ) {
		value.bind( function( to ) {
			$( '#secondary h4, #secondary h1, #secondary h2, #secondary h3, #secondary h5, #secondary h6, #secondary h4 a, #secondary span.product-title' ).css( {
				'color':to
			});
		} );
	} );
	wp.customize( 'sidebar_headline', function( value ) {
		value.bind( function( to ) {
			$( '#secondary span.rpwwt-post-title' ).css( {
				'color':to
			});
		} );
	} );
	wp.customize( 'sidebar_border', function( value ) {
		value.bind( function( to ) {
			$( '#secondary select, #secondary h4, .blog #secondary input.search-field, .blog #secondary input.search-field, .search-results #secondary input.search-field, .archive #secondary input.search-field' ).css( {
				'border-color':to
			});
		} );
	} );
	wp.customize( 'sidebar_text', function( value ) {
		value.bind( function( to ) {
			$( '#secondary .amount, #secondary .woocommerce-Price-currencySymbol, #secondary *' ).css( {
				'color':to
			});
		} );
	} );
	wp.customize( 'sidebar_text', function( value ) {
		value.bind( function( to ) {
			$( '#secondary .rpwwt-post-date' ).css( {
				'color':to
			});
		} );
	} );
	wp.customize( 'sidebar_link', function( value ) {
		value.bind( function( to ) {
			$( '#secondary a' ).css( {
				'color':to
			});
		} );
	} );
	wp.customize( 'sidebar_link', function( value ) {
		value.bind( function( to ) {
			$( '#secondary .search-form input.search-submit, .search-form input.search-submit, input.search-submit' ).css( {
				'background':to
			});
		} );
	} );
	wp.customize( 'sidebar_link', function( value ) {
		value.bind( function( to ) {
			$( '#secondary .search-form input.search-submit, .search-form input.search-submit, input.search-submit' ).css( {
				'background':to
			});
		} );
	} );
	wp.customize( 'blog_site_background', function( value ) {
		value.bind( function( to ) {
			$( 'body.custom-background.blog, body.blog, body.custom-background.archive, body.archive, body.custom-background.search-results, body.search-results' ).css( {
				'background-color':to
			});
		} );
	} );
	wp.customize( 'blog_post_background', function( value ) {
		value.bind( function( to ) {
			$( '.blog main article, .search-results main article, .archive main article' ).css( {
				'background-color':to
			});
		} );
	} );
	wp.customize( 'blog_post_headline', function( value ) {
		value.bind( function( to ) {
			$( '.blog main article h2 a, .search-results main article h2 a, .archive main article h2 a' ).css( {
				'color':to
			});
		} );
	} );
	wp.customize( 'blog_post_byline', function( value ) {
		value.bind( function( to ) {
			$( '.blog main article .entry-meta, .archive main article .entry-meta, .search-results main article .entry-meta' ).css( {
				'color':to
			});
		} );
	} );
	wp.customize( 'blog_post_excerpt', function( value ) {
		value.bind( function( to ) {
			$( '.blog main article p, .search-results main article p, .archive main article p' ).css( {
				'color':to
			});
		} );
	} );
	wp.customize( 'blog_post_navigation_bg', function( value ) {
		value.bind( function( to ) {
			$( '.nav-links span, .nav-links a, .pagination .current, .nav-links span:hover, .nav-links a:hover, .pagination .current:hover' ).css( {
				'background':to
			});
		} );
	} );
	wp.customize( 'blog_post_navigation_link', function( value ) {
		value.bind( function( to ) {
			$( '.nav-links span, .nav-links a, .pagination .current, .nav-links span:hover, .nav-links a:hover, .pagination .current:hover' ).css( {
				'color':to
			});
		} );
	} );
	wp.customize( 'slideshow_dots_color', function( value ) {
		value.bind( function( to ) {
			$( '.owl-theme .owl-dots .owl-dot span' ).css( {
				'background':to
			});
		} );
	} );
	wp.customize( 'slideshow_dots_color', function( value ) {
		value.bind( function( to ) {
			$( '.owl-theme .owl-dots .owl-dot span' ).css( {
				'border-color':to
			});
		} );
	} );
	wp.customize( 'slideshow_current_dots_color', function( value ) {
		value.bind( function( to ) {
			$( '.owl-theme .owl-dots .owl-dot.active span, .owl-theme .owl-dots .owl-dot:hover span' ).css( {
				'background':to
			});
		} );
	} );
	wp.customize( 'slideshow_current_dots_color', function( value ) {
		value.bind( function( to ) {
			$( '.owl-theme .owl-dots .owl-dot.active span, .owl-theme .owl-dots .owl-dot:hover span' ).css( {
				'border':to
			});
		} );
	} );
	wp.customize( 'slide_one_background_color', function( value ) {
		value.bind( function( to ) {
			$( '.slide_one' ).css( {
				'background':to
			});
		} );
	} );
	wp.customize( 'slide_one_button_background_color', function( value ) {
		value.bind( function( to ) {
			$( '.slide_one.owl-item .slideshow-button' ).css( {
				'background':to
			});
		} );
	} );
	wp.customize( 'slide_one_button_text_color', function( value ) {
		value.bind( function( to ) {
			$( '.slide_one.owl-item .slideshow-button' ).css( {
				'color':to
			});
		} );
	} );
	wp.customize( 'slide_one_tagline_color', function( value ) {
		value.bind( function( to ) {
			$( '.slide_one.owl-item p' ).css( {
				'color':to
			});
		} );
	} );
	wp.customize( 'slide_one_title_color', function( value ) {
		value.bind( function( to ) {
			$( '.slide_one.owl-item h3' ).css( {
				'color':to
			});
		} );
	} );
	wp.customize( 'slide_three_background_color', function( value ) {
		value.bind( function( to ) {
			$( '.slide_three' ).css( {
				'background':to
			});
		} );
	} );
	wp.customize( 'slide_three_button_background_color', function( value ) {
		value.bind( function( to ) {
			$( '.slide_three.owl-item .slideshow-button' ).css( {
				'background':to
			});
		} );
	} );
	wp.customize( 'slide_three_button_text_color', function( value ) {
		value.bind( function( to ) {
			$( '.slide_three.owl-item .slideshow-button' ).css( {
				'color':to
			});
		} );
	} );
	wp.customize( 'slide_three_tagline_color', function( value ) {
		value.bind( function( to ) {
			$( '.slide_three.owl-item p' ).css( {
				'color':to
			});
		} );
	} );
	wp.customize( 'slide_three_title_color', function( value ) {
		value.bind( function( to ) {
			$( '.slide_three.owl-item h3' ).css( {
				'color':to
			});
		} );
	} );
	wp.customize( 'slide_five_background_color', function( value ) {
		value.bind( function( to ) {
			$( '.slide_five' ).css( {
				'background':to
			});
		} );
	} );
	wp.customize( 'slide_five_button_background_color', function( value ) {
		value.bind( function( to ) {
			$( '.slide_five.owl-item .slideshow-button' ).css( {
				'background':to
			});
		} );
	} );
	wp.customize( 'slide_five_button_text_color', function( value ) {
		value.bind( function( to ) {
			$( '.slide_five.owl-item .slideshow-button' ).css( {
				'color':to
			});
		} );
	} );
	wp.customize( 'slide_five_tagline_color', function( value ) {
		value.bind( function( to ) {
			$( '.slide_five.owl-item p' ).css( {
				'color':to
			});
		} );
	} );
	wp.customize( 'slide_five_title_color', function( value ) {
		value.bind( function( to ) {
			$( '.slide_five.owl-item h3' ).css( {
				'color':to
			});
		} );
	} );
	wp.customize( 'slide_seven_background_color', function( value ) {
		value.bind( function( to ) {
			$( '.slide_seven' ).css( {
				'background':to
			});
		} );
	} );
	wp.customize( 'slide_seven_button_background_color', function( value ) {
		value.bind( function( to ) {
			$( '.slide_seven.owl-item .slideshow-button' ).css( {
				'background':to
			});
		} );
	} );
	wp.customize( 'slide_seven_button_text_color', function( value ) {
		value.bind( function( to ) {
			$( '.slide_seven.owl-item .slideshow-button' ).css( {
				'color':to
			});
		} );
	} );
	wp.customize( 'slide_seven_tagline_color', function( value ) {
		value.bind( function( to ) {
			$( '.slide_seven.owl-item p' ).css( {
				'color':to
			});
		} );
	} );
	wp.customize( 'slide_seven_title_color', function( value ) {
		value.bind( function( to ) {
			$( '.slide_seven.owl-item h3' ).css( {
				'color':to
			});
		} );
	} );
	wp.customize( 'slide_nine_background_color', function( value ) {
		value.bind( function( to ) {
			$( '.slide_nine' ).css( {
				'background':to
			});
		} );
	} );
	wp.customize( 'slide_nine_button_background_color', function( value ) {
		value.bind( function( to ) {
			$( '.slide_nine.owl-item .slideshow-button' ).css( {
				'background':to
			});
		} );
	} );
	wp.customize( 'slide_nine_button_text_color', function( value ) {
		value.bind( function( to ) {
			$( '.slide_nine.owl-item .slideshow-button' ).css( {
				'color':to
			});
		} );
	} );
	wp.customize( 'slide_nine_tagline_color', function( value ) {
		value.bind( function( to ) {
			$( '.slide_nine.owl-item p' ).css( {
				'color':to
			});
		} );
	} );
	wp.customize( 'slide_nine_title_color', function( value ) {
		value.bind( function( to ) {
			$( '.slide_nine.owl-item h3' ).css( {
				'color':to
			});
		} );
	} );
	wp.customize( 'pagebuilder_headline_color', function( value ) {
		value.bind( function( to ) {
			$( '.sitebuilder-section h1, .sitebuilder-section h2, .sitebuilder-section h3, .sitebuilder-section h4, .sitebuilder-section h5, .sitebuilder-section h6, .sitebuilder-section td' ).css( {
				'color':to
			});
		} );
	} );
	wp.customize( 'pagebuilder_text_color', function( value ) {
		value.bind( function( to ) {
			$( '.sitebuilder-section p, .sitebuilder-section div, .sitebuilder-section ol, .sitebuilder-section ul,.sitebuilder-section li, .sitebuilder-section, .sitebuilder-section cite' ).css( {
				'color':to
			});
		} );
	} );
	wp.customize( 'pagebuilder_link_color', function( value ) {
		value.bind( function( to ) {
			$( '.sitebuilder-section a' ).css( {
				'color':to
			});
		} );
	} );
	wp.customize( 'pagebuilder_link_color', function( value ) {
		value.bind( function( to ) {
			$( '.sitebuilder-section a.button, .sitebuilder-section a.button:hover, .sitebuilder-section a.button:active, .sitebuilder-section a.button:focus' ).css( {
				'background':to
			});
		} );
	} );
	wp.customize( 'pagebuilder_background_color', function( value ) {
		value.bind( function( to ) {
			$( '.sitebuilder-section' ).css( {
				'background':to
			});
		} );
	} );
	wp.customize( 'grid_section_headline', function( value ) {
		value.bind( function( to ) {
			$( '.grid-section h3' ).css( {
				'color':to
			});
		} );
	} );
	wp.customize( 'grid_section_text', function( value ) {
		value.bind( function( to ) {
			$( '.grid-section p' ).css( {
				'color':to
			});
		} );
	} );
	wp.customize( 'grid_section_bg', function( value ) {
		value.bind( function( to ) {
			$( '.grid-section' ).css( {
				'background-color':to
			});
		} );
	} );
	wp.customize( 'about_section_background_color', function( value ) {
		value.bind( function( to ) {
			$( '.about-section' ).css( {
				'background-color':to
			});
		} );
	} );
	wp.customize( 'about_section_tagline_color', function( value ) {
		value.bind( function( to ) {
			$( '.about-section .about-tagline' ).css( {
				'color':to
			});
		} );
	} );
	wp.customize( 'about_section_title_color', function( value ) {
		value.bind( function( to ) {
			$( '.about-section h2' ).css( {
				'color':to
			});
		} );
	} );
	wp.customize( 'about_section_title_color', function( value ) {
		value.bind( function( to ) {
			$( '.about-section h2:after' ).css( {
				'background':to
			});
		} );
	} );
	wp.customize( 'about_section_description_color', function( value ) {
		value.bind( function( to ) {
			$( '.about-section p' ).css( {
				'color':to
			});
		} );
	} );
	wp.customize( 'blog_section_headline_color', function( value ) {
		value.bind( function( to ) {
			$( '.landing-page-description h2' ).css( {
				'color':to
			});
		} );
	} );
	wp.customize( 'blog_section_text_color', function( value ) {
		value.bind( function( to ) {
			$( '.landing-page-description p' ).css( {
				'color':to
			});
		} );
	} );
	wp.customize( 'blog_section_background_color', function( value ) {
		value.bind( function( to ) {
			$( '.page-template-landing-page-design .blog' ).css( {
				'background':to
			});
		} );
	} );
	wp.customize( 'blog_section_blogposts_byline', function( value ) {
		value.bind( function( to ) {
			$( '.page-template-landing-page-design .blog .entry-meta, .page-template-landing-page-design .blog .entry-meta *' ).css( {
				'color':to
			});
		} );
	} );
	wp.customize( 'blog_section_blogposts_background', function( value ) {
		value.bind( function( to ) {
			$( '.page-template-landing-page-design .blog main article' ).css( {
				'background':to
			});
		} );
	} );
	wp.customize( 'blog_section_background_color', function( value ) {
		value.bind( function( to ) {
			$( '.page-template-landing-page-design .blog' ).css( {
				'background':to
			});
		} );
	} );
	wp.customize( 'blog_section_blogposts_headline', function( value ) {
		value.bind( function( to ) {
			$( '.page-template-landing-page-design .blog main article h2 a' ).css( {
				'color':to
			});
		} );
	} );
	wp.customize( 'blog_section_blogposts_excerpt', function( value ) {
		value.bind( function( to ) {
			$( '.page-template-landing-page-design .blog main article p' ).css( {
				'color':to
			});
		} );
	} );
	wp.customize( 'footer_background', function( value ) {
		value.bind( function( to ) {
			$( '.footer-container, .footer-widgets-container' ).css( {
				'background':to
			});
		} );
	} );
	wp.customize( 'footer_widget_headline', function( value ) {
		value.bind( function( to ) {
			$( '.footer-widgets-container h4, .footer-widgets-container h1, .footer-widgets-container h2, .footer-widgets-container h3, .footer-widgets-container h5, .footer-widgets-container h4 a, .footer-widgets-container th, .footer-widgets-container caption' ).css( {
				'color':to
			});
		} );
	} );
	wp.customize( 'footer_widget_border', function( value ) {
		value.bind( function( to ) {
			$( 'border-color' ).css( {
				'.footer-widgets-container h4, .footer-widgets-container':to
			});
		} );
	} );
	wp.customize( 'footer_widget_text', function( value ) {
		value.bind( function( to ) {
			$( '.footer-column *, .footer-column p, .footer-column li' ).css( {
				'color':to
			});
		} );
	} );
	wp.customize( 'footer_widget_link', function( value ) {
		value.bind( function( to ) {
			$( '.footer-column a, .footer-menu li a' ).css( {
				'color':to
			});
		} );
	} );
	wp.customize( 'footer_copyright_link', function( value ) {
		value.bind( function( to ) {
			$( '.site-info a' ).css( {
				'color':to
			});
		} );
	} );
	wp.customize( 'footer_copyright_text', function( value ) {
		value.bind( function( to ) {
			$( '.site-info' ).css( {
				'color':to
			});
		} );
	} );

	wp.customize( 'lp_button_text_color', function( value ) {
		value.bind( function( to ) {
			$( '.blog-post-button-wrapper .blog-button' ).css( {
				'color':to
			});
		} );
	} );
	wp.customize( 'lp_button_bg_color', function( value ) {
		value.bind( function( to ) {
			$( '.blog-post-button-wrapper .blog-button' ).css( {
				'background-color':to
			});
		} );
	} );





	wp.customize( 'global_button_text', function( value ) {
		value.bind( function( to ) {
			$( '.single .content-area a.wp-block-button__link, .page .content-area a.wp-block-button__link, .wp-block-button__link, ul li.product .button, ul li.product .button:hover, .woocommerce ul.products li.product .product-feed-button .add_to_cart_button, .woocommerce ul.products li.product .product-feed-button .button, .woocommerce ul.products li.product:hover a.added_to_cart.wc-forward, .woocommerce nav.woocommerce-pagination ul li a, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current, .woocommerce nav.woocommerce-pagination ul li span.current:hover, .woocommerce nav.woocommerce-pagination ul li span, .woocommerce nav.woocommerce-pagination ul li' ).css( {
				'color':to
			});
		} );
	} );
	wp.customize( 'global_sale_text', function( value ) {
		value.bind( function( to ) {
			$( '.woocommerce span.onsale' ).css( {
				'color':to
			});
		} );
	} );
	wp.customize( 'global_sale_text', function( value ) {
		value.bind( function( to ) {
			$( '.woocommerce span.onsale' ).css( {
				'background':to
			});
		} );
	} );
	wp.customize( 'global_input_bg', function( value ) {
		value.bind( function( to ) {
			$( '.woocommerce .woocommerce-ordering select' ).css( {
				'color':to
			});
		} );
	} );
	wp.customize( 'global_input_bg', function( value ) {
		value.bind( function( to ) {
			$( '.woocommerce .woocommerce-ordering select' ).css( {
				'background':to
			});
		} );
	} );



	wp.customize( 'sidebar_headline', function( value ) {
		value.bind( function( to ) {
			$( '#secondary h4, #secondary h1, #secondary h2, #secondary h3, #secondary h5, #secondary h6, #secondary h4 a, #secondary span.product-title' ).css( {
				'color':to
			});
		} );
	} );
	wp.customize( 'sidebar_button_bg', function( value ) {
		value.bind( function( to ) {
			$( '#secondary .search-form input.search-submit, #secondary .search-form input.search-submit, #secondary input.search-submit, #secondary .widget_product_search form.woocommerce-product-search button, #secondary button.button' ).css( {
				'background':to
			});
		} );
	} );
	wp.customize( 'sidebar_button_text', function( value ) {
		value.bind( function( to ) {
			$( '#secondary .search-form input.search-submit, #secondary .search-form input.search-submit, #secondary input.search-submit, #secondary .widget_product_search form.woocommerce-product-search button, #secondary button.button' ).css( {
				'color':to
			});
		} );
	} );
	wp.customize( 'sidebar_input_text', function( value ) {
		value.bind( function( to ) {
			$( '#secondary .search-form input.search-field, #secondary .widget_product_search form.woocommerce-product-search .search-field, #secondary .select2-selection, .select2-container--default .select2-selection--single .select2-selection__placeholder, #secondary select, .blog #secondary input.search-field, .blog #secondary input.search-field, .search-results #secondary input.search-field, .archive #secondary input.search-field' ).css( {
				'color':to
			});
		} );
	} );
	wp.customize( 'sidebar_input_background', function( value ) {
		value.bind( function( to ) {
			$( '#secondary .select2-selection,#secondary .search-form input.search-field, #secondary .widget_product_search form.woocommerce-product-search .search-field, #secondary select, .blog #secondary input.search-field, .blog #secondary input.search-field, .search-results #secondary input.search-field, .archive #secondary input.search-field, #secondary .select2-selection,#secondary .search-form input.search-field, #secondary .widget_product_search form.woocommerce-product-search .search-field' ).css( {
				'background':to
			});
		} );
	} );
	wp.customize( 'sidebar_input_background', function( value ) {
		value.bind( function( to ) {
			$( '.woocommerce .widget_price_filter .ui-slider .ui-slider-handle, .woocommerce .widget_price_filter .ui-slider .ui-slider-range' ).css( {
				'background':to
			});
		} );
	} );
	wp.customize( 'global_link', function( value ) {
		value.bind( function( to ) {
			$( '.single .content-area a, .page .content-area a, .woocommerce table.shop_table a' ).css( {
				'color':to
			});
		} );
	} );
	wp.customize( 'global_link', function( value ) {
		value.bind( function( to ) {
			$( '.tags-links a, .cat-links a' ).css( {
				'border-color':to
			});
		} );
	} );

	wp.customize( 'global_byline', function( value ) {
		value.bind( function( to ) {
			$( '.single main article .entry-meta *, .single main article .entry-meta, .archive main article .entry-meta *, .comments-area .comment-metadata time' ).css( {
				'color':to
			});
		} );
	} );
	wp.customize( 'global_headline', function( value ) {
		value.bind( function( to ) {
			$( '.single .content-area h1, .single .content-area h2, .single .content-area h3, .single .content-area h4, .single .content-area h5, .single .content-area h6, .page .content-area h1, .page .content-area h2, .page .content-area h3, .page .content-area h4, .page .content-area h5, .page .content-area h6, .page .content-area th, .single .content-area th, .blog.related-posts main article h4 a, .single b.fn, .page b.fn, .error404 h1, .search-results h1.page-title, .search-no-results h1.page-title, .archive h1.page-title, .page header.entry-header h1, h2.woocommerce-loop-product__title, .woocommerce-billing-fields label,#order_comments_field label, .wc_payment_method label, form.woocommerce-EditAccountForm.edit-account legend, .product h1.product_title.entry-title, .woocommerce div.product p.price *' ).css( {
				'color':to
			});
		} );
	} );
	wp.customize( 'global_content', function( value ) {
		value.bind( function( to ) {
			$( '.comment-respond p.comment-notes, .comment-respond label, .page .site-content .entry-content cite, .comment-content *, .about-the-author, .page code, .page kbd, .page tt, .page var, .page .site-content .entry-content, .page .site-content .entry-content p, .page .site-content .entry-content li, .page .site-content .entry-content div, .comment-respond p.comment-notes, .comment-respond label, .single .site-content .entry-content cite, .comment-content *, .about-the-author, .single code, .single kbd, .single tt, .single var, .single .site-content .entry-content, .single .site-content .entry-content p, .single .site-content .entry-content li, .single .site-content .entry-content div, .error404 p, .search-no-results p, .woocommerce-Price-amount.amount, .woocommerce ul.products li.product .price, mark.count, p.woocommerce-result-count, .cart-subtotal span.woocommerce-Price-amount.amount, .order-total span.woocommerce-Price-amount.amount, .woocommerce-terms-and-conditions-wrapper .validate-required label, .woocommerce-form-login span, .woocommerce-form-login label, .create-account span, #customer_login .form-row label, .woocommerce-view-order mark,.woocommerce-view-order ins, table tfoot, .woocommerce form .form-row label, .payment_method_stripe label, .variations label, .product span.sku, .woocommerce div.product .woocommerce-tabs ul.tabs li a, .woocommerce div.product .woocommerce-tabs ul.tabs li a:hover, .woocommerce table.shop_attributes th, .woocommerce table.shop_attributes td' ).css( {
				'color':to
			});
		} );
	} );
	wp.customize( 'global_content', function( value ) {
		value.bind( function( to ) {
			$( '.page .entry-content blockquote, .single .entry-content blockquote, .comment-content blockquote' ).css( {
				'border-color':to
			});
		} );
	} );
	wp.customize( 'global_borders', function( value ) {
		value.bind( function( to ) {
			$( '.product h1.product_title.entry-title:after, .woocommerce-cart h1:after, .woocommerce-account.woocommerce-page h1.entry-title:after, #customer_login h2:after' ).css( {
				'background':to
			});
		} );
	} );
	wp.customize( 'global_borders', function( value ) {
		value.bind( function( to ) {
			$( '.woocommerce table.shop_table.woocommerce-checkout-review-order-table, .single article.post table *,.page article.page table *, nav.woocommerce-MyAccount-navigation li' ).css( {
				'border-color':to
			});
		} );
	} );
	wp.customize( 'global_sale_bg', function( value ) {
		value.bind( function( to ) {
			$( '.woocommerce span.onsale' ).css( {
				'background':to
			});
		} );
	} );
	wp.customize( 'global_sale_text', function( value ) {
		value.bind( function( to ) {
			$( '.woocommerce span.onsale' ).css( {
				'color':to
			});
		} );
	} );




	wp.customize( 'global_input_bg', function( value ) {
		value.bind( function( to ) {
			$( '.woocommerce .woocommerce-ordering select, .woocommerce .quantity input.qty, .woocommerce form input, .woocommerce form .form-row .input-text, .woocommerce-page form .form-row .input-text, .select2-container--default .select2-selection--single, .error-404 input.search-field, div#stripe-card-element, div#stripe-exp-element, div#stripe-cvc-element, .woocommerce div.product form.cart .variations select' ).css( {
				'background':to
			});
		} );
	} );

	wp.customize( 'global_input_text', function( value ) {
		value.bind( function( to ) {
			$( '.woocommerce .woocommerce-ordering select, .woocommerce .quantity input.qty, .woocommerce form input, .woocommerce form .form-row .input-text, .woocommerce-page form .form-row .input-text, .select2-container--default .select2-selection--single, .error-404 input.search-field, .select2-container--default .select2-selection--single .select2-selection__rendered, div#stripe-card-element, div#stripe-exp-element, div#stripe-cvc-element, .woocommerce div.product form.cart .variations select' ).css( {
				'color':to
			});
		} );
	} );

	wp.customize( 'global_input_bg', function( value ) {
		value.bind( function( to ) {
			$( '.woocommerce .woocommerce-ordering select, .woocommerce .quantity input.qty, .woocommerce form input, .woocommerce form .form-row .input-text, .woocommerce-page form .form-row .input-text, .select2-container--default .select2-selection--single, .woocommerce form .form-row.woocommerce-validated .select2-container, .woocommerce form .form-row.woocommerce-validated input.input-text, .woocommerce form .form-row.woocommerce-validated select, .error-404 input.search-field, div#stripe-card-element, div#stripe-exp-element, div#stripe-cvc-element, .woocommerce div.product form.cart .variations select' ).css( {
				'border-color':to
			});
		} );
	} );

	wp.customize( 'global_sale_text', function( value ) {
		value.bind( function( to ) {
			$( '.woocommerce span.onsale' ).css( {
				'color':to
			});
		} );
	} );
	wp.customize( 'sidebar_bg_color', function( value ) {
		value.bind( function( to ) {
			$( '.sidebar-inner' ).css( {
				'background-color':to
			});
		} );
	} );



		wp.customize( 'sidebar_input_background', function( value ) {
		value.bind( function( to ) {
			$( '.woocommerce .widget_price_filter .ui-slider .ui-slider-handle, .woocommerce .widget_price_filter .ui-slider .ui-slider-range' ).css( {
				'background-color':to
			});
		} );
	} );
	wp.customize( 'sidebar_headline', function( value ) {
		value.bind( function( to ) {
			$( '#secondary span.rpwwt-post-title' ).css( {
				'color':to
			});
		} );
	} );
	wp.customize( 'sidebar_border', function( value ) {
		value.bind( function( to ) {
			$( '#secondary select, #secondary h4, .blog #secondary input.search-field, .blog #secondary input.search-field, .search-results #secondary input.search-field, .archive #secondary input.search-field, #secondary .calendar_wrap *' ).css( {
				'border-color':to
			});
		} );
	} );

	wp.customize( 'navigation_background_color', function( value ) {
		value.bind( function( to ) {
			$( '.navigation-wrapper, .main-navigation ul ul, #iot-menu-left, .cart-preview' ).css( {
				'background':to
			});
		} );
	} );




	wp.customize( 'global_borders', function( value ) {
		value.bind( function( to ) {
			$( '.error-404 input.search-field, .about-the-author, .comments-title, .related-posts h3, .comment-reply-title,#add_payment_method .cart-collaterals .cart_totals tr td, #add_payment_method .cart-collaterals .cart_totals tr th, .woocommerce-cart .cart-collaterals .cart_totals tr td, .woocommerce-cart .cart-collaterals .cart_totals tr th, .woocommerce-checkout .cart-collaterals .cart_totals tr td, .woocommerce-checkout .cart-collaterals .cart_totals tr th, .woocommerce-cart .cart_totals h2, .woocommerce table.shop_table td, .woocommerce-checkout .woocommerce-billing-fields h3, #add_payment_method #payment ul.payment_methods, .woocommerce-cart #payment ul.payment_methods, .woocommerce-checkout #payment ul.payment_methods,.woocommerce div.product .woocommerce-tabs ul.tabs::before' ).css( {
				'border-color':to
			});
		} );
	} );

	wp.customize( 'global_link', function( value ) {
		value.bind( function( to ) {
			$( 'a.button,a.button:hover,a.button:active,a.button:focus, button, input[type="button"], input[type="reset"], input[type="submit"]' ).css( {
				'background':to
			});
		} );
	} );

	wp.customize( 'global_button_background', function( value ) {
		value.bind( function( to ) {
			$( '.woocommerce table.shop_table input#coupon_code, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce-account a.woocommerce-button.button.view, .woocommerce-account a.woocommerce-button.button.view:hover, .woocommerce-account a.woocommerce-button.button.view:active, .woocommerce-account a.woocommerce-button.button.view:focus, .woocommerce .woocommerce-MyAccount-content a.button, .woocommerce .woocommerce-MyAccount-content a.button:hover, .woocommerce .woocommerce-MyAccount-content a.button:active, .woocommerce .woocommerce-MyAccount-content a.button:focus, form#add_payment_method button#place_order, .woocommerce-Address a.edit,.woocommerce table a.button.delete, .woocommerce table a.button.delete:hover, button.single_add_to_cart_button.button.alt, button.single_add_to_cart_button.button.alt:hover,.woocommerce .product .woocommerce-tabs ul.tabs.wc-tabs li.active,.woocommerce #respond input#submit.alt.disabled, .woocommerce #respond input#submit.alt.disabled:hover, .woocommerce #respond input#submit.alt:disabled, .woocommerce #respond input#submit.alt:disabled:hover, .woocommerce #respond input#submit.alt:disabled[disabled], .woocommerce #respond input#submit.alt:disabled[disabled]:hover, .woocommerce a.button.alt.disabled, .woocommerce a.button.alt.disabled:hover, .woocommerce a.button.alt:disabled, .woocommerce a.button.alt:disabled:hover, .woocommerce a.button.alt:disabled[disabled], .woocommerce a.button.alt:disabled[disabled]:hover, .woocommerce button.button.alt.disabled, .woocommerce button.button.alt.disabled:hover, .woocommerce button.button.alt:disabled, .woocommerce button.button.alt:disabled:hover, .woocommerce button.button.alt:disabled[disabled], .woocommerce button.button.alt:disabled[disabled]:hover, .woocommerce input.button.alt.disabled, .woocommerce input.button.alt.disabled:hover, .woocommerce input.button.alt:disabled, .woocommerce input.button.alt:disabled:hover, .woocommerce input.button.alt:disabled[disabled], .woocommerce input.button.alt:disabled[disabled]:hover, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt' ).css( {
				'border-color':to
			});
		} );
	} );

	wp.customize( 'global_button_background', function( value ) {
		value.bind( function( to ) {
			$( '.wp-block-button__link, ul li.product .button, ul li.product .button:hover, .woocommerce ul.products li.product .product-feed-button .add_to_cart_button, .woocommerce ul.products li.product .product-feed-button .button, .woocommerce ul.products li.product:hover a.added_to_cart.wc-forward, .woocommerce nav.woocommerce-pagination ul li a, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current, .woocommerce nav.woocommerce-pagination ul li span.current:hover, .woocommerce nav.woocommerce-pagination ul li span, .woocommerce nav.woocommerce-pagination ul li, a.checkout-button.button.alt.wc-forward, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce table.shop_table .coupon button.button, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .return-to-shop a.button.wc-backward, .woocommerce #respond input#submit.disabled:hover, .woocommerce #respond input#submit:disabled:hover, .woocommerce #respond input#submit:disabled[disabled]:hover, .woocommerce a.button.disabled:hover, .woocommerce a.button:disabled:hover, .woocommerce a.button:disabled[disabled]:hover, .woocommerce button.button.disabled:hover, .woocommerce button.button:disabled:hover, .woocommerce button.button:disabled[disabled]:hover, .woocommerce input.button.disabled:hover, .woocommerce input.button:disabled:hover, .woocommerce input.button:disabled[disabled]:hover, .woocommerce-checkout button#place_order, .woocommerce .woocommerce-message a.button.wc-forward, .woocommerce-message a.button.wc-forward:hover, .woocommerce-message a.button.wc-forward:focus, div#customer_login form.woocommerce-EditAccountForm.edit-account button.woocommerce-Button.button, .woocommerce-form-login button.woocommerce-Button.button, #customer_login button.woocommerce-Button.button, a.button, a.button:hover, a.button:active, a.button:focus, button, input[type="button"], input[type="reset"], input[type="submit"], .woocommerce-account a.woocommerce-button.button.view, .woocommerce-account a.woocommerce-button.button.view:hover, .woocommerce-account a.woocommerce-button.button.view:active, .woocommerce-account a.woocommerce-button.button.view:focus, .woocommerce .woocommerce-MyAccount-content a.button, .woocommerce .woocommerce-MyAccount-content a.button:hover, .woocommerce .woocommerce-MyAccount-content a.button:active, .woocommerce .woocommerce-MyAccount-content a.button:focus, form#add_payment_method button#place_order, .woocommerce-Address a.edit, .woocommerce table a.button.delete, .woocommerce table a.button.delete:hover, button.single_add_to_cart_button.button.alt, button.single_add_to_cart_button.button.alt:hover, .woocommerce #respond input#submit.alt.disabled, .woocommerce #respond input#submit.alt.disabled:hover, .woocommerce #respond input#submit.alt:disabled, .woocommerce #respond input#submit.alt:disabled:hover, .woocommerce #respond input#submit.alt:disabled[disabled], .woocommerce #respond input#submit.alt:disabled[disabled]:hover, .woocommerce a.button.alt.disabled, .woocommerce a.button.alt.disabled:hover, .woocommerce a.button.alt:disabled, .woocommerce a.button.alt:disabled:hover, .woocommerce a.button.alt:disabled[disabled], .woocommerce a.button.alt:disabled[disabled]:hover, .woocommerce button.button.alt.disabled, .woocommerce button.button.alt.disabled:hover, .woocommerce button.button.alt:disabled, .woocommerce button.button.alt:disabled:hover, .woocommerce button.button.alt:disabled[disabled], .woocommerce button.button.alt:disabled[disabled]:hover, .woocommerce input.button.alt.disabled, .woocommerce input.button.alt.disabled:hover, .woocommerce input.button.alt:disabled, .woocommerce input.button.alt:disabled:hover, .woocommerce input.button.alt:disabled[disabled], .woocommerce input.button.alt:disabled[disabled]:hover, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt' ).css( {
				'background':to
			});
		} );
} );
wp.customize( 'global_button_text', function( value ) {
	value.bind( function( to ) {
		$( '.single .content-area a.wp-block-button__link, .page .content-area a.wp-block-button__link, .wp-block-button__link, ul li.product .button, ul li.product .button:hover, .woocommerce ul.products li.product .product-feed-button .add_to_cart_button, .woocommerce ul.products li.product .product-feed-button .button, .woocommerce ul.products li.product:hover a.added_to_cart.wc-forward, .woocommerce nav.woocommerce-pagination ul li a, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current, .woocommerce nav.woocommerce-pagination ul li span.current:hover, .woocommerce nav.woocommerce-pagination ul li span, .woocommerce nav.woocommerce-pagination ul li, a.checkout-button.button.alt.wc-forward, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce table.shop_table .coupon button.button, .woocommerce table.shop_table input#coupon_code, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, #secondary .search-form input.search-submit, .search-form input.search-submit, input.search-submit, a.button, a.button:hover, a.button:active, a.button:focus, button, input[type="button"], input[type="reset"], input[type="submit"], .woocommerce-Address a.edit, .woocommerce table a.button.delete, .woocommerce table a.button.delete:hover,button.single_add_to_cart_button.button.alt, button.single_add_to_cart_button.button.alt:hover, .woocommerce #respond input#submit.alt.disabled, .woocommerce #respond input#submit.alt.disabled:hover, .woocommerce #respond input#submit.alt:disabled, .woocommerce #respond input#submit.alt:disabled:hover, .woocommerce #respond input#submit.alt:disabled[disabled], .woocommerce #respond input#submit.alt:disabled[disabled]:hover, .woocommerce a.button.alt.disabled, .woocommerce a.button.alt.disabled:hover, .woocommerce a.button.alt:disabled, .woocommerce a.button.alt:disabled:hover, .woocommerce a.button.alt:disabled[disabled], .woocommerce a.button.alt:disabled[disabled]:hover, .woocommerce button.button.alt.disabled, .woocommerce button.button.alt.disabled:hover, .woocommerce button.button.alt:disabled, .woocommerce button.button.alt:disabled:hover, .woocommerce button.button.alt:disabled[disabled], .woocommerce button.button.alt:disabled[disabled]:hover, .woocommerce input.button.alt.disabled, .woocommerce input.button.alt.disabled:hover, .woocommerce input.button.alt:disabled, .woocommerce input.button.alt:disabled:hover, .woocommerce input.button.alt:disabled[disabled], .woocommerce input.button.alt:disabled[disabled]:hover, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt' ).css( {
			'color':to
		});
	} );
} );
wp.customize( 'background_color', function( value ) {
	value.bind( function( to ) {
		$( '.single article.post table *,.page article.page table *, .woocommerce .woocommerce-checkout #payment ul.payment_methods, .woocommerce-error, .woocommerce-info, .woocommerce-message, .woocommerce-checkout form.woocommerce-form.woocommerce-form-login.login' ).css( {
			'background':to
		});
	} );
} );


	wp.customize( 'navigation_link_color', function( value ) {
		value.bind( function( to ) {
			$( '.cart-customlocation svg' ).css( {
				'fill':to
			});
		} );
	} );

	// Header text color.
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '.site-title, .site-description' ).css( {
					'clip': 'rect(1px, 1px, 1px, 1px)',
					'position': 'absolute'
				} );
			} else {
				$( '.site-title, .site-description' ).css( {
					'clip': 'auto',
					'position': 'relative'
				} );
				$( '.site-title a, .site-description' ).css( {
					'color': to
				} );
			}
		} );
	} );
} )( jQuery );
