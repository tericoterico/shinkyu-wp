<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package shinkyu
 */
$add_image = get_field('additional-image-1');
$url = $add_image["url"];
$id = get_the_ID();

?>

<article class="p-blog is-single" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if (has_post_thumbnail()) { //アイキャッチ画像を設定している場合
    	the_post_thumbnail();
	} else { //アイキャッチ画像を設定していない場合 ?>
    	<img class="p-noimage" src="<?php echo get_bloginfo('template_directory'); ?>/img/noimage.png" alt="" />
	<?php } ?>

	<?php
	if ( is_singular() ) :
		the_title( '<h1 class="entry-title">', '</h1>' );
	else :
		the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
	endif;
	?>
	<div class="p-blog-date"><?php the_date(); ?></div>

	<div class="entry-content">
		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'shinkyu' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'shinkyu' ),
			'after'  => '</div>',
		) );
		?>

		<div class="p-back">
			<a href="/info">戻る</a>
		</div>

	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
