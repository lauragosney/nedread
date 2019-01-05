<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package edread
 */

?>

	</div><!-- #content -->

		<footer id="colophon" class="site-footer">


			<h5>Copyright © 2017</h5>

			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-2',
					'menu_id'        => 'footer-menu',
					'menu_class'		 => 'footer-menu',
				) );
			?>

		</footer><!-- #colophon -->
	</div><!-- #page -->
</div>

<?php wp_footer(); ?>

</body>
</html>
