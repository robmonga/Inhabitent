<?php
/**
 * The main template file.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

			<div class="site-emblem">
				<img class="emblem" src="<?php echo get_template_directory_uri();?>/assets/images/inhabitent-logo-full.svg" alt="logo"/>
			</div>
<!-- Loop used to retrieve gutenberg content -->
		<?php if ( have_posts() ) : ?>
		
		<?php if (have_posts()) : while (have_posts()) : the_post();
		the_content();
		endwhile;
		else : ?>

		<?php endif; ?>

		<?php if ( is_home() && ! is_front_page() ) : ?>
			<header>
				<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
			</header>
			<?php endif; ?>
				
			<?php /* Start the Loop */ ?>
				
				<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content' ); ?>
				<?php $product_posts=inhabitent_get_latest_posts();?>
				
				
				<!-- get  product categories  -->
				<section class="shop-stuff-container">
				<h2>shop stuff</h2>
				<div class="hp-products"> 
					<?php $product_types=get_terms('product_type');?>
					<?php foreach ( $product_types as $term ) : setup_postdata( $term ); ?>
					<div class="hp-product-types">
						<img src="<?php echo get_template_directory_uri().'/assets/images/' . $term->slug . '.svg'?>" alt= "<?php echo $term->name ?>">
						<p><?php echo $term->description ?></p>
						   <a class="hp-button" href=<?php echo get_term_link($term)?>> <?php echo $term->name?> stuff</a>
					</div>
					<?php endforeach; wp_reset_postdata(); ?>
					</div>
	</section><!-- end of the product categories  -->
	
	<!-- get blog posts  -->
	<section class="hp-blog-posts"> <!-- TODO: is there a better way to set these up? -->
		<h2>inhabitent journal</h2>
		<?php foreach ( $product_posts as $post ) : setup_postdata($post); ?>
	<div class ="hp-blog-post"><?php the_post_thumbnail('medium'); ?>
		<p><?php the_date();?></p>
		<p><?php comments_number();?></p>
		<h3><?php the_title();?></h3>
	</div>
	<?php endforeach; wp_reset_postdata(); ?>
</section><!-- end of blog post retrieval -->
	
	<!-- adventures section -->
	<section class="hp-adventures">
	<h2>latest adventures</h2>
		<?php $adventure=inhabitent_get_latest_adventures();?>
		<?php foreach ( $adventure as $post ) : setup_postdata( $post ); ?>
					<div class= "hp-adventure-post"> 		
					 <?php the_post_thumbnail('medium_large'); ?>
					 <p><?php the_title(); ?></p>
					<input type="button" value="READ MORE" class="homebutton" onClick="document.location.href='<?php echo esc_url( get_permalink())?>'" />					 
				</div>
					<?php endforeach; wp_reset_postdata(); ?>		
	</section><!-- end of adventures  -->
			
		<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary --> 


<?php get_footer(); ?>