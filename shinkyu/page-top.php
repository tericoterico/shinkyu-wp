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
							<img src="<?php echo get_template_directory_uri() . "/img/mv-6.jpg" ?>" alt="">
							<?php get_template_part( 'template-parts/content', 'logo' ); ?>
						</div>
						<div class="swiper-slide">
							<img src="<?php echo get_template_directory_uri() . "/img/mv-7.jpg" ?>" alt="">
							<div class="p-subcopy">
								静寂とこだわりの空間が<br>お出迎えします
							</div>
						</div>
						<div class="swiper-slide slide3">
							<div class="p-fish_circle">
								<img class="p-mv_blackfish" src="<?php echo get_template_directory_uri() . "/img/black-fish.png" ?>" alt="">
								<img class="p-mv_redfish" src="<?php echo get_template_directory_uri() . "/img/red-fish.png" ?>" alt="">
							</div>
							<?php get_template_part( 'template-parts/content', 'logo' ); ?>
						</div>
						<div class="swiper-slide slide4">
							<img src="<?php echo get_template_directory_uri() . "/img/mv-9.png" ?>" alt="">
							<?php get_template_part( 'template-parts/content', 'logo' ); ?>
						</div>

<?php /*
						<div class="swiper-slide">
							<img class="p-mv_blackfish" src="<?php echo get_template_directory_uri() . "/img/black-fish.png" ?>" alt="">
							<img class="p-mv_redfish" src="<?php echo get_template_directory_uri() . "/img/red-fish.png" ?>" alt="">
							<div class="p-mv_logo">
								<img src="<?php echo get_template_directory_uri() . "/img/shinkyu.svg" ?>" alt="">
								<img src="<?php echo get_template_directory_uri() . "/img/logo.svg" ?>" alt="">
							</div>
						</div>
*/ ?>
<?php /*
						<div class="swiper-slide">
							<img src="<?php echo get_template_directory_uri() . "/img/mv-2.jpg" ?>" alt="">
						</div>
						<div class="swiper-slide">
							<img src="<?php echo get_template_directory_uri() . "/img/mv-3.jpg" ?>" alt="">
						</div>
*/ ?>
						</div>
					<!-- If we need pagination -->
					<div class="swiper-pagination"></div>

					<!-- If we need navigation buttons -->
					<div class="swiper-button-prev"></div>
					<div class="swiper-button-next"></div>
<?php /*
					<!-- If we need scrollbar -->
					<div class="swiper-scrollbar"></div>
*/ ?>
			</div>
		</section>

		<?php /*
		<section class="p-section">
			<h2 class="p-section_title">
				良鍼堂について
				<span class="p-section_title_sub">About Ryoshindo</span>
			</h2>
			<div class="p-section_eyecatch">
				<img src="<?php echo get_template_directory_uri() . "/img/title1.jpg" ?>" alt="">
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
		*/ ?>
		<section id="top-menu" class="p-section">
			<div class="p-section_content">
				<?php wp_nav_menu( array('menu' => 'top_first' ) ); ?>
				<?php /*
				<ul class="p-top_menu">
					<?php
					$menu_items = wp_get_nav_menu_items('top_first');  // menu_name: カスタムメニューの名前
					foreach ($menu_items as $menu):
					$page_id = $menu->object_id;
					$thumbnail_id = get_post_thumbnail_id($page_id);
					$image_attributes = wp_get_attachment_image_src($thumbnail_id); 
					$content = get_page($page_id);
					?>
					<li class="<?php echo $content->post_name; ?>">
						<a href="<?php echo get_permalink($page_id); ?>">
						<img src="<?php echo $image_attributes[0]; ?>" alt="" width="<?php echo $image_attributes[1]; ?>" height="<?php echo $image_attributes[2]; ?>" />
						<?php echo $content->post_title; ?>
						</a>
					</li>
					<?php
					endforeach;
					?>
				</ul>
				*/?>
			</div>
		</section>
		<section class="p-section">
			<h2 class="p-section_title">
				お知らせ
				<span class="p-section_title_sub">Information</span>
			</h2>
			<ul class="p-tile">
				<?php echo do_shortcode('[infolist pt="info"]'); ?>
			</ul>
			<div class="p-link">
				<a href="#">お知らせ一覧</a>
			</div>
		</section>
<?php /*
		<section class="p-section">
			<h2 class="p-section_title">
				予約
				<span class="p-section_title_sub">Resevation</span>
			</h2>
			<div class="p-section_eyecatch">
				<img src="<?php echo get_template_directory_uri() . "/img/title1.jpg" ?>" alt="">
			</div>
			<div class="p-section_content">
				<p>完全予約制につき人数に限りがございます。状態によっても治療時間が変わって参りますので、予めご連絡下さい。また、難病の方や原因不明の症状でお悩みの方もお気軽にご相談ください。 相談や問い合わせには一切費用はかかりません。</p>
				<table class="p-schedule">
					<tbody>
						<tr>
							<th>診療時間</th>
							<th>月</th>
							<th>火</th>
							<th>水</th>
							<th>木</th>
							<th>金</th>
							<th>土</th>
							<th>日</th>
						</tr>
    			        <tr>
							<td>09:30-15:00<br><span>(最終受付15:00)</span></td>
							<td>○</td>
							<td>○</td>
							<td>○</td>
							<td>○</td>
							<td>○</td>
							<td>○</td>
							<td>※</td>
			            </tr>
						<tr>
							<td>15:00-19:00<br><span>(最終受付19:00)</span></td>
							<td>○</td>
							<td>○</td>
							<td>○</td>
							<td>○</td>
							<td>○</td>
							<td>※</td>
							<td>※</td>
						</tr>
					</tbody>
				</table>
				<p>休診日：日曜日・祝祭日<br>※ 時間外診療も可能な限り応じますのでお気軽にご相談ください。</p>
				<div class="p-link">
					<a href="#">ご予約はこちら</a>
				</div>
			</div>
		</section>
*/ ?>
<?php /*
		<section class="p-section">
			<h2 class="p-section_title">
				ブログ
				<span class="p-section_title_sub">Blog</span>
			</h2>
			<ul class="p-tile">
				<?php echo do_shortcode('[bloglist pt="blog"]'); ?>
			</ul>
			<div class="p-link">
				<a href="#">ブログ一覧</a>
			</div>
		</section>
*/?>
		<?php /*
		<ul class="p-grid" data-col="2">
			<li class="p-grid_item">
				<div class="p-grid_img">
					<img src="<?php echo get_template_directory_uri() . "/img/dummy-9.jpg" ?>" alt="">
				</div>
				<div class="p-grid_content">
					<h3 class="p-grid_content_title">生きるとは</h3>
					<div class="p-grid_content_text">
						呼吸することではない。行動することだ。
					</div>
				</div>
			</li>
			<li class="p-grid_item">
				<div class="p-grid_img">
					<img src="<?php echo get_template_directory_uri() . "/img/dummy-8.jpg" ?>" alt="">
				</div>
				<div class="p-grid_content">
					<h3 class="p-grid_content_title">休日の過ごし方</h3>
					<div class="p-grid_content_text">
						人間には不幸か、貧乏か、病気が必要だ。
						でないと人間はすぐに思いあがる。
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
					<h3 class="p-grid_content_title">人間のほほえみ</h3>
					<div class="p-grid_content_text">
						人間のほほえみ、人間のふれあいを忘れた人がいます。これはとても大きな貧困です。
					</div>
				</div>
			</li>
		</ul>
*/ ?>


		<ul class="p-grid p-banner" data-col="1">

<?php
	$items = wp_get_nav_menu_items( 'top_banner' );
	// echo('<pre>');
	// var_dump($items);
	// echo('</pre>');
	// exit();
	foreach ($items as $key => $value){
?>

			<li class="p-banner_item">
				<a href="<?php echo($value->url); ?>">
					<img class="" src="<?php echo wp_get_attachment_image_src ($value->thumbnail_id, "full")[0]; ?>" alt="">
					<span><?php echo($value->title); ?></span>
				</a>
			</li>
<?php
	}
?>
		</ul>

		<?php
		while ( have_posts() ) :
			the_post();

			//get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
