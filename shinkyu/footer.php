<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package shinkyu
 */

?>

		<?php
			get_template_part( 'template-parts/footer', 'common' );
		?>


	</div><!-- #content -->

	<footer class="p-footer">
		<div class="p-copyright">
			鍼灸院 良鍼堂 Ryoshindo.com &copy; all rights reserved.
		</div>
	</footer>
</div><!-- #page -->
<div class="p-bkg"></div>

<?php wp_footer(); ?>

</body>
</html>
