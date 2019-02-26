<?php
/**
 * The template for displaying archive pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					echo '<h1>'.single_term_title().'</h1>';
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
					?>
			</header><!-- .page-header -->
			
			<?php /* Start the Loop */ ?>
				<section class="product-icons">
					<?php while ( have_posts() ) : the_post(); ?>
					
					<?php
					get_template_part( 'template-parts/content-shop' );
					?>

<?php endwhile; ?>

<?php the_posts_navigation(); ?>

<?php else : ?>

<?php get_template_part( 'template-parts/content', 'shop' ); ?>

<?php endif; ?>
</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
