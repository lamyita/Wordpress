<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package guten_shop
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="navigation-wrapper">
		
		<div class="site grid-container">
			<header id="masthead" class="site-header grid-x grid-padding-x">
				<div class="site-branding large-3 medium-9 small-8 cell">
					<?php
					the_custom_logo();
					if ( is_front_page() && is_home() ) :
						?>
					<div class="logo-container">
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php
						else :
							?>
						<div class="logo-container">
							<h2 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h2>
							<?php
							endif;
							$guten_shop_description = get_bloginfo( 'description', 'display' );
							if ( $guten_shop_description || is_customize_preview() ) :
								?>
							<p class="site-description"><?php echo $guten_shop_description; /* WPCS: xss ok. */ ?></p>
						<?php endif; ?>
					</div>	
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation large-9 medium-3 small-4 cell">
				
	<?php if ( class_exists( 'WooCommerce' ) ) : ?>
					<div class="cart-header">
						<a class="cart-customlocation" href="<?php echo esc_url(wc_get_cart_url()); ?>" title="<?php esc_attr( 'View your shopping cart' ); ?>">
							<svg height="512pt" viewBox="0 -31 512.00026 512" width="512pt" xmlns="http://www.w3.org/2000/svg"><path d="m164.960938 300.003906h.023437c.019531 0 .039063-.003906.058594-.003906h271.957031c6.695312 0 12.582031-4.441406 14.421875-10.878906l60-210c1.292969-4.527344.386719-9.394532-2.445313-13.152344-2.835937-3.757812-7.269531-5.96875-11.976562-5.96875h-366.632812l-10.722657-48.253906c-1.527343-6.863282-7.613281-11.746094-14.644531-11.746094h-90c-8.285156 0-15 6.714844-15 15s6.714844 15 15 15h77.96875c1.898438 8.550781 51.3125 230.917969 54.15625 243.710938-15.941406 6.929687-27.125 22.824218-27.125 41.289062 0 24.8125 20.1875 45 45 45h272c8.285156 0 15-6.714844 15-15s-6.714844-15-15-15h-272c-8.269531 0-15-6.730469-15-15 0-8.257812 6.707031-14.976562 14.960938-14.996094zm312.152343-210.003906-51.429687 180h-248.652344l-40-180zm0 0"/><path d="m150 405c0 24.8125 20.1875 45 45 45s45-20.1875 45-45-20.1875-45-45-45-45 20.1875-45 45zm45-15c8.269531 0 15 6.730469 15 15s-6.730469 15-15 15-15-6.730469-15-15 6.730469-15 15-15zm0 0"/><path d="m362 405c0 24.8125 20.1875 45 45 45s45-20.1875 45-45-20.1875-45-45-45-45 20.1875-45 45zm45-15c8.269531 0 15 6.730469 15 15s-6.730469 15-15 15-15-6.730469-15-15 6.730469-15 15-15zm0 0"/></svg>
							<span class="cart-icon-number"><?php echo WC()->cart->get_cart_contents_count(); ?></span> 
								
									<div class="cart-preview">
										<?php
										global $woocommerce;
										$items = $woocommerce->cart->get_cart();

										foreach($items as $item => $values) { 
											$_product =  wc_get_product( $values['data']->get_id() );
            //product image
											echo "<div class='cart-preview-tem'>";
											$getProductDetail = wc_get_product( $values['product_id'] );
											echo "<div class='thumb-container'>";
            echo $getProductDetail->get_image('thumb'); // accepts 2 arguments ( size, attr )
            echo "</div>";
            echo "".$values['quantity']. ' x '.$_product->get_title(); 
            $price = get_post_meta($values['product_id'] , '_price', true);
            echo "<span>";
            echo get_woocommerce_currency_symbol();
            echo "".$price."</span></div>";
        }
        ?>
    </div>
</div>
</a>
<?php endif; ?>

<?php
wp_nav_menu( array(
	'theme_location' => 'menu-1',
	'menu_id'        => 'primary-menu',
	) );
	?>
</nav><!-- #site-navigation -->
</header><!-- #masthead -->
</div>
</div>

	<?php if ( get_header_image() ) : ?>
		<?php if ( is_front_page() ) : ?>

	<div class="content-wrap">
		<div class="bottom-header-wrapper regular-img-head">
			<img src="<?php echo esc_url(( get_header_image()) ); ?>" alt="<?php echo esc_attr(( get_bloginfo( 'title' )) ); ?>" />
		</div>
	</div>
		<?php endif; ?>

<?php endif; ?>
<?php if ( has_post_thumbnail() ) : ?>
	<div id="page" class="site grid-container thumbnail-below start-container-head">
		<div id="content" class="site-content grid-x grid-padding-x">
		<?php else : ?>
		<div id="page" class="site grid-container start-container-head">
			<div id="content" class="site-content grid-x grid-padding-x">
				<?php endif; ?>