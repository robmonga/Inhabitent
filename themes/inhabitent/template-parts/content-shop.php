<?php
/**
 * The template for displaying all single posts.
 *
 * @package Inhabitent_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'small' ); ?>
		<?php endif; ?>
		
		<?php the_title(); ?>
        <span><?php echo CFS()->get( 'price' ); ?></span>

	<footer class="entry-footer">
		<?php inhabitent_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->		