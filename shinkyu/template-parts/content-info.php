<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package shinkyu
 */

?>
<li class="p-tile_item" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<a href="<?php esc_url( get_permalink()); ?>">
		<div class="p-tile_item_img">
			<img src="<?php the_post_thumbnail_url('thumbnail'); ?>" />
		</div>
		<div class="p-tile_item_content">
			<div class="p-tile_item_content_date"><?php the_date(); ?></div>
			<div class="p-tile_item_content_title"><?php the_title(); ?></div>
		</div>
	</a>
</li><!-- #post-<?php the_ID(); ?> -->
