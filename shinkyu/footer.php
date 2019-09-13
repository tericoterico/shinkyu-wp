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
			<span>鍼灸院 良鍼堂</span>
			〒<?php echo esc_html($options['postal']); ?><br>
			<?php echo esc_html($options['address']); ?><br>
			TEL:<?php echo esc_html($options['tel']); ?><br>
			FAX:<?php echo esc_html($options['fax']); ?><br>
		</div>
		<ul class="p-footer-link">
			<li><a href="#">保険適用について</a></li>
			<li><a href="#">プライバシーポリシー</a></li>
		</ul>
		<div class="p-copyright">
			鍼灸院 良鍼堂 Ryoshindo.com &copy; all rights reserved.
		</div>
	</footer>
</div><!-- #page -->
<div class="p-bkg"></div>

<?php wp_footer(); ?>

</body>
</html>
