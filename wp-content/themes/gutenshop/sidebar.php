<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package guten_shop
 */

?>



<?php if ( class_exists( 'WooCommerce' ) ) : ?>

<?php if ( is_woocommerce()) : ?>
	<?php if ( is_active_sidebar( 'woocommerce-sidebar-1' ) ) : ?>
	<aside id="secondary" class="widget-area large-4 medium-4 small-12 cell">
		<div class="sidebar-inner">
			<?php dynamic_sidebar( 'woocommerce-sidebar-1' ); ?>
		</div>
	</aside>
	<?php endif; ?>
<?php else : ?>
	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
	<aside id="secondary" class="widget-area large-4 medium-4 small-12 cell">
		<div class="sidebar-inner">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div>
	</aside>
	<?php endif; ?>
<?php endif; ?> 
<?php else : ?>

	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
	<aside id="secondary" class="widget-area large-4 medium-4 small-12 cell">
		<div class="sidebar-inner">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div>
	</aside>
	<?php endif; ?>

<?php endif; ?>