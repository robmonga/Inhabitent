<?php
/**
 * The template for displaying archive pages.
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		
		<?php if ( have_posts() ) : ?>
		<?php $product_types=get_terms ?>
			<header class="page-header">
			<h1>Shop Stuff</h1>
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					?>
			</header><!-- .page-header -->
			<!-- the loop that brings the taxonomy-product  -->
			<section>
			<?php $product_types=get_terms('product_type');?>
           <?php foreach ( $product_types as $term ) : setup_postdata( $term ); ?>
              <div>
                 <a href=<?php echo get_term_link($term)?>> <?php echo $term->name?></a>
              </div>
           <?php endforeach; wp_reset_postdata(); ?>
		   </section>
			
			<section class="categories">
		   <?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					get_template_part( 'template-parts/content-shop' );
				?>

		
		<?php endwhile; ?>
		<?php else : ?>

			<?php get_template_part( 'template-parts/content-shop', 'none' ); ?>

		<?php endif; ?>
	</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>