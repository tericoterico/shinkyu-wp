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
	<a href="<?php esc_url( the_permalink()); ?>">
		<div class="p-tile_item_img">
		<?php if (has_post_thumbnail()) { //アイキャッチ画像を設定している場合
      		the_post_thumbnail('thumbnail');
	    } else { //アイキャッチ画像を設定していない場合 ?>
    		<img class="p-noimage" src="<?php echo get_bloginfo('template_directory'); ?>/img/noimage.png" alt="" />
		<?php } ?>
		</div>
		<div class="p-tile_item_content">
			<div class="p-tile_item_content_date"><?php the_date(); ?></div>
			<div class="p-tile_item_content_title"><?php the_title(); ?></div>
		</div>
	</a>
</li><!-- #post-<?php the_ID(); ?> -->
