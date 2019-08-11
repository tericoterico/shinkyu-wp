<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package shinkyu
 */
$related = get_field('related');

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		get_template_part( 'template-parts/content', 'header' );
		?>
		<div class="title">
			<h2 class="p-section_title"><?php the_title(); ?>
				<span class="p-section_title_sub"><?php the_field('title-english'); ?></span>
			</h2>
		</div>
	</header><!-- .entry-header -->

	<?php shinkyu_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content();
		?>

		<?php if(isset($related) && $related){ ?>
			<div class="p-related">
			<?php foreach($related as $key => $value){ ?>
				<a href="<?php echo get_permalink( $value->ID ); ?>">
					<?php echo $value->post_title; ?>
				</a>
			<?php } ?>
			</div>
		<?php } ?>

		<?php
			$page = get_post( get_the_ID() );
			$slug = $page->post_name;
			if(is_parent_slug() === 'feature' || $slug === 'feature'){
		?>
			<div class="p-back">
				<a href="/#top-menu">戻る</a>
			</div>
		<?php
			}
		?>

	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
