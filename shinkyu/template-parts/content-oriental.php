<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package shinkyu
 */

?>

<article class="p-oriental" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php shinkyu_post_thumbnail(); ?>
	<?php
	if ( is_singular() ) :
		the_title( '<h1 class="entry-title">', '</h1>' );
	else :
		the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
	endif;

	?>

	<div class="p-more">
		<a href="<?php echo(esc_url( get_permalink())); ?>">
			more
		</a>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
