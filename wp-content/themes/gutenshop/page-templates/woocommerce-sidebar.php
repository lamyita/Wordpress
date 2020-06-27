<?php
/* Template Name: Woocommerce Sidebar */ 
get_header();
?>

	<div id="primary" class="content-area large-8 medium-8 small-12 cell">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<aside id="secondary" class="widget-area large-4 medium-4 small-12 cell">
		<div class="sidebar-inner">
			<?php dynamic_sidebar( 'woocommerce-sidebar-1' ); ?>
		</div>
	</aside>

<?php
get_footer();
