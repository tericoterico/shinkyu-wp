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
	$options=get_option(mySettingPage::getKey());
?>

		<?php
			get_template_part( 'template-parts/footer', 'common' );
		?>


	</div><!-- #content -->

	<footer class="p-footer">
		<div class="p-footer-content">
			<div>
				<span><?php echo get_bloginfo ( 'name' ); ?></span>
				〒<?php echo esc_html($options['postal']); ?><br>
				<?php echo esc_html($options['address']); ?><br>
				TEL:<?php echo esc_html($options['tel']); ?>
			</div>
			<div class="p-sns">
				<a href="https://www.instagram.com/ryoshindo999/" target="_blank">Instagram</a>
			</div>
		</div>
		<?php
		wp_nav_menu( array(
			'menu_id'        => 'footer-link',
		) );
		?>

		<div class="p-copyright">
		<?php echo get_bloginfo ( 'name' ); ?> Ryoshindo.net &copy; all rights reserved.
		</div>
	</footer>
</div><!-- #page -->
<div class="p-bkg"></div>

<?php wp_footer(); ?>

</body>
</html>
