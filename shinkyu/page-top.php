<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package shinkyu
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<section class="p-mv">
			<!-- Slider main container -->
			<div class="swiper-container">
					<!-- Additional required wrapper -->
					<div class="swiper-wrapper">
						<!-- Slides -->
						<div class="swiper-slide">
							<img src="<?php echo get_template_directory_uri() . "/img/mv-1.jpg" ?>" alt="">
						</div>
						<div class="swiper-slide">
							<img src="<?php echo get_template_directory_uri() . "/img/mv-2.jpg" ?>" alt="">
						</div>
						<div class="swiper-slide">
							<img src="<?php echo get_template_directory_uri() . "/img/mv-3.jpg" ?>" alt="">
						</div>
					</div>
					<!-- If we need pagination -->
					<div class="swiper-pagination"></div>

					<!-- If we need navigation buttons -->
					<div class="swiper-button-prev"></div>
					<div class="swiper-button-next"></div>

					<!-- If we need scrollbar -->
					<div class="swiper-scrollbar"></div>
			</div>
		</section>

		<section class="p-section">
			<h2 class="p-section_title">
				篠原鍼灸院（仮について
				<span class="p-section_title_sub">About us</span>
			</h2>
			<div class="p-section_eyecatch">
			</div>
			<div class="p-section_content">
				<h3>私たちが大切にしていること</h3>
				<p>親譲りの無鉄砲で小供の時から損ばかりしている。小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。なぜそんな無闇をしたと聞く人があるかも知れぬ。別段深い理由でもない。新築の二階から首を出していたら、同級生の一人が冗談に、いくら威張っても、そこから飛び降りる事は出来まい。弱虫やーい。と囃したからである。</p>
				<p>小使に負ぶさって帰って来た時、おやじが大きな眼をして二階ぐらいから飛び降りて腰を抜かす奴があるかと云ったから、この次は抜かさずに飛んで見せますと答えた。（青空文庫より）</p>
				<div class="p-link">
					<a href="#">詳しく見る</a>
				</div>
			</div>
		</section>

		<section class="p-section">
			<h2 class="p-section_title">
				お知らせ
				<span class="p-section_title_sub">Information</span>
			</h2>
			<ul class="p-tile">
				<li class="p-tile_item">
					<div class="p-tile_item_img">
						<img src="<?php echo get_template_directory_uri() . "/img/dummy-1.jpg" ?>" alt="">
					</div>
					<div class="p-tile_item_content">
						<div class="p-tile_item_content_date">2019.07.03 (Wed)</div>
						<div class="p-tile_item_content_title">なぜ被引用文を引用する必要があるのか</div>
					</div>
				</li>
				<li class="p-tile_item">
					<div class="p-tile_item_img">
						<img src="<?php echo get_template_directory_uri() . "/img/dummy-2.jpg" ?>" alt="">
					</div>
					<div class="p-tile_item_content">
						<div class="p-tile_item_content_date">2019.07.03 (Wed)</div>
						<div class="p-tile_item_content_title">dummy-title is here.</div>
					</div>
				</li>
				<li class="p-tile_item">
					<div class="p-tile_item_img">
						<img src="<?php echo get_template_directory_uri() . "/img/dummy-3.jpg" ?>" alt="">
					</div>
					<div class="p-tile_item_content">
						<div class="p-tile_item_content_date">2019.07.03 (Wed)</div>
						<div class="p-tile_item_content_title">ホームページを公開しました。</div>
					</div>
				</li>
			</ul>
			<div class="p-link">
				<a href="#">お知らせ一覧</a>
			</div>
		</section>

		<section class="p-section">
			<h2 class="p-section_title">
				予約
				<span class="p-section_title_sub">Resevation</span>
			</h2>
			<?php echo do_shortcode('[booking_package id=1]'); ?>

		</section>


		<section class="p-section">
			<h2 class="p-section_title">
				ブログ
				<span class="p-section_title_sub">Blog</span>
			</h2>
			<ul class="p-tile">
				<li class="p-tile_item">
					<div class="p-tile_item_img"></div>
					<div class="p-tile_item_content">
						<div class="p-tile_item_content_date">2019.07.03 (Wed)</div>
						<div class="p-tile_item_content_title">dummy-title is here.</div>
					</div>
				</li>
				<li class="p-tile_item">
					<div class="p-tile_item_img"></div>
					<div class="p-tile_item_content">
						<div class="p-tile_item_content_date">2019.07.03 (Wed)</div>
						<div class="p-tile_item_content_title">dummy-title is here.</div>
					</div>
				</li>
				<li class="p-tile_item">
					<div class="p-tile_item_img"></div>
					<div class="p-tile_item_content">
						<div class="p-tile_item_content_date">2019.07.03 (Wed)</div>
						<div class="p-tile_item_content_title">dummy-title is here.</div>
					</div>
				</li>
				<li class="p-tile_item">
					<div class="p-tile_item_img"></div>
					<div class="p-tile_item_content">
						<div class="p-tile_item_content_date">2019.07.03 (Wed)</div>
						<div class="p-tile_item_content_title">dummy-title is here.</div>
					</div>
				</li>
			</ul>
		</section>

		<ul class="p-grid" data-col="2">
			<li class="p-grid_item">
				<div class="p-grid_img"></div>
				<div class="p-grid_content">
					<h3 class="p-grid_content_title">われわれは宇宙人だ</h3>
					<div class="p-grid_content_text">
						花びらのように舞い散る命短し恋せよ乙女
					</div>
				</div>
			</li>
			<li class="p-grid_item">
				<div class="p-grid_img"></div>
				<div class="p-grid_content">
					<h3 class="p-grid_content_title">われわれは宇宙人だ</h3>
					<div class="p-grid_content_text">
						花びらのように舞い散る命短し恋せよ乙女
					</div>
				</div>
			</li>
		</ul>

		<ul class="p-grid" data-col="1">
			<li class="p-grid_item">
				<div class="p-grid_img">
					<img src="<?php echo get_template_directory_uri() . "/img/dummy-4.jpg" ?>" alt="">
				</div>
				<div class="p-grid_content">
					<h3 class="p-grid_content_title">われわれは宇宙人だ</h3>
					<div class="p-grid_content_text">
						花びらのように舞い散る命短し恋せよ乙女
					</div>
				</div>
			</li>
		</ul>

		<div class="p-nav_bottom">
			<ul>
				<li>
					<a href="">
						ご予約
					</a>
				</li>
				<li>
					<a href="">
						お電話
					</a>
				</li>
				<li>
					<a href="">
						お問い合わせ
					</a>
				</li>
			</ul>
		</div>

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</><!-- #primary -->

<?php
//get_sidebar();
get_footer();
