<?php
/**
 * The main template file.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="hero-image"></div>
		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content' ); ?>
			<?php $product_posts=inhabitent_get_latest_posts();?>
		<!-- get blog posts  -->
		<section class="hp-blog-posts">
				<?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
					  <?php
					 the_post_thumbnail('medium_large');
					 the_date();
					 comments_number();
					 the_title();
					  ?>
				<?php endforeach; wp_reset_postdata(); ?>
			</section>
				<!-- end of blog post retrieval -->
			<!-- add in the product categories  -->
		<section class="hp-products">
           <?php $product_types=get_terms('product_type');?>
           <?php foreach ( $product_types as $term ) : setup_postdata( $term ); ?>
              <div class="hp-product-types">
                 <img src=<?php echo get_template_directory_uri().'/assets/images/' . $term->slug . '.svg'?>>
                 <p><?php echo $term->description ?></p>
                 <a href=<?php echo get_term_link($term)?>> <?php echo $term->name?> stuff</a>
              </div>
           <?php endforeach; wp_reset_postdata(); ?>
        </section>
<!-- end of the product categories  -->

	<!-- adventures section -->
	<section class="hp-adventures">
		<?php $adventure=inhabitent_get_latest_adventures();?>
		<div class="hp-adventure-types">
				<?php foreach ( $adventure as $post ) : setup_postdata( $post ); ?>
					  <?php
					 the_post_thumbnail('medium_large');
					 the_title();
					 ?>
					<input type="button" value="READ MORE" class="homebutton" id="go-to-post" onClick="document.location.href='<?php echo esc_url( get_permalink())?>'" />					 
				<?php endforeach; wp_reset_postdata(); ?>		
		</div>
	</section>
	<!-- end of adventures  -->
			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary --> 

<?php get_footer(); ?>