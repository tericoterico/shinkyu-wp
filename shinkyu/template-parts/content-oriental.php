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
	<?php /* 東洋医学とは（id=74） */ ?>
	<?php if($id == 74){ ?>
		<?php
			$man = get_field('man');
			$cloud1 = get_field('cloud1');
			$cloud2 = get_field('cloud2');
			$url = get_permalink();
		?>
		<a href="<?php echo $url; ?>" class="p-hasu_wrapper">
			<img class="p-oriental_man" src="<?php echo $man; ?>">
			<img class="p-oriental_cloud1" src="<?php echo $cloud1; ?>">
			<img class="p-oriental_cloud2" src="<?php echo $cloud2; ?>">
		</a>
	<?php } ?>

	<?php /* 陰陽論（id=112） */ ?>
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
