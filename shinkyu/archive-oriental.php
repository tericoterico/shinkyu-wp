<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package shinkyu
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<?php if ( have_posts() ) : ?>
			<header class="page-header">
				<?php
				get_template_part( 'template-parts/content', 'header' );
				?>

				<?php
					$term = get_queried_object();
				?>
				<div class="title">
					<h2 class="p-section_title"><?php the_archive_title(); ?>
						<span class="p-section_title_sub"><?php echo ucfirst($term->rewrite["slug"]); ?></span>
					</h2>
				</div>

				<?php
				//the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->
			<div class="p-archive">
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;
			?>
			</div>
			
			<?php
			// the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();