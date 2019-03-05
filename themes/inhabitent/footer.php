<?php
/**
 * The template for displaying the footer.
 *
 * @package Inhabitent_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer " role="contentinfo">
				<!-- <div class="site-info"> -->
					<div class="contact-info">
							<h6>contact info</h6>
					<p>info@inhabitent.com</p>
					<p>778-456-7891</p>
					<p>
						<i class="fab fa-facebook-square"></i>
						<i class="fab fa-twitter-square"></i>
						<i class="fab fa-instagram"></i>
					</p>
				</div>
				
				<div class="business-hours">
					<h6>Business Hours</h6>
					<p>Monday-Friday: 9am to 5pm</p>
					<p>Saturday: 10am to 2pm</p>
					<p>Sunday: Closed</p>
				</div>
				
				<div class="site-info"> 
				<p>Copyright &#169; 2019 Inhabitent</p> 
				</div>
				<div class="logo">
				<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/inhabitent-logo-text.svg" alt="inhabitent logo"/></a>
			<!-- </div>.site-info -->
			</footer><!-- #colophon -->
			</div>
		</div><!-- #page -->
		
		<?php wp_footer(); ?>

	</body>
</html>
