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
	// echo('<pre>');
	// var_dump($id);
	// echo('</pre>');

?>

<article class="p-oriental" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php shinkyu_post_thumbnail(); ?>
	<?php if($url){ ?>
		<img class="add-image" src="<?php echo $url; ?>">
	<?php } ?>
	<?php if($id == 112){ ?>
		<?php
			$black = get_field('fish-black');
			$red = get_field('fish-red');
			$url = get_permalink();
		?>
		<a href="<?php echo $url; ?>" class="p-fish_circle">
			<img class="p-oriental_blackfish" src="<?php echo $black; ?>">
			<img class="p-oriental_redfish" src="<?php echo $red; ?>">
		</a>

	<?php } ?>

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
