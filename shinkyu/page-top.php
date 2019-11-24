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

//slide画像を取得
$slide1 = get_field('slide1');
$slide2 = get_field('slide2');

?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<div class="p-mv-logo">
			<img src="<?php echo get_template_directory_uri() . "/img/mv-logo.svg" ?>" alt="">
		</div>

		<section class="p-mv">
			<!-- Slider main container -->
			<div class="swiper-container">
					<!-- Additional required wrapper -->
					<div class="swiper-wrapper">
						<!-- Slides -->
						<div class="swiper-slide slide3">
							<div class="p-fish_circle">
								<img class="p-mv_blackfish" src="<?php echo get_template_directory_uri() . "/img/black-fish.png" ?>" alt="">
								<img class="p-mv_redfish" src="<?php echo get_template_directory_uri() . "/img/red-fish.png" ?>" alt="">
							</div>
							<?php get_template_part( 'template-parts/content', 'logo' ); ?>
						</div>
						<div class="swiper-slide">
							<img src="<?php echo $slide1['url'] ?>" alt="">
							<?php get_template_part( 'template-parts/content', 'logo' ); ?>
						</div>
						<div class="swiper-slide">
							<img src="<?php echo $slide2['url'] ?>" alt="">
						</div>
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
				ご挨拶
				<span class="p-section_title_sub">Greeting</span>
			</h2>
			<div class="p-greeting">
				<img src="<?php echo get_template_directory_uri() . "/img/greeting.jpg" ?>" alt="">
				東大阪市河内花園の鍼灸院・良鍼堂です。 <br>
				良鍼堂は簡素な作りで、余分な装飾を削ぎ落とした小さな鍼灸院です。<br class="for-pc">
				素っ気ないほど簡素ですが、空間を美しく隅々まで気持ちを行き届かせ、<br class="for-pc">
				東洋医学 の理論を根拠に、いかに『治す』かの一点に集中しております。<br class="for-pc">
				もしお身体の不具合などありましたら、足を運んでみてはいかがでしょうか。
				<div class="p-link">
					<a href="/about/">良鍼堂について</a>
				</div>
			</div>
		</section>

		<ul class="p-shortcut p-grid" data-col="1">
			<li class="p-grid_item">
				<a href="/about/feature/">
					<div class="p-grid_content">
						<h3 class="p-grid_content_title">良鍼堂の治療</h3>
						<div class="p-grid_content_text">
							自己治癒力を阻害している要因を取り除き<br>
							お身体を正常な状態に導きます。<br>
							あらゆる方・あらゆる病気に対応<br>
							<span>詳しく見る</span>
						</div>
					</div>
				</a>
			</li>
			<li class="p-grid_item">
				<a href="/about/flow/">
					<div class="p-grid_content">
						<h3 class="p-grid_content_title">診察の流れ</h3>
						<div class="p-grid_content_text">
							問診に時間を頂くため、<br>予約された方が優先となります。<br>
							一人一人に合わせた治療プランを提案いたします。<br>
							<span>詳しく見る</span>
						</div>
					</div>
				</a>
			</li>
		</ul>

		<section class="p-section">
			<h2 class="p-section_title">
				お知らせ
				<span class="p-section_title_sub">Information</span>
			</h2>
			<ul class="p-tile">
				<?php echo do_shortcode('[infolist pt="info"]'); ?>
			</ul>
			<div class="p-link">
				<a href="/info/">お知らせ一覧</a>
			</div>
		</section>
		<section class="p-section p-linkbox">
			<a href="/oriental/" class="p-hasu_wrapper">
				<img class="p-hasu_image1" src="/wp-content/themes/shinkyu/img/hana.png" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
				<img class="p-hasu_image2" src="/wp-content/themes/shinkyu/img/hasu.png" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
				<img class="p-hasu_image3" src="/wp-content/themes/shinkyu/img/kumo1.png" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
				<img class="p-hasu_image4" src="/wp-content/themes/shinkyu/img/kumo2.png" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
			</a>
			<div class="p-link">
				<a href="/oriental/">東洋医学について</a>
			</div>
		</section>

		<section class="p-section p-linkbox">
			<a href="/blog/" class="p-hasu_wrapper">
				<img class="p-hasu_image1" src="/wp-content/themes/shinkyu/img/hana.png" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
				<img class="p-hasu_image2" src="/wp-content/themes/shinkyu/img/hasu.png" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
				<img class="p-hasu_image3" src="/wp-content/themes/shinkyu/img/kumo1.png" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
				<img class="p-hasu_image4" src="/wp-content/themes/shinkyu/img/kumo2.png" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
			</a>
			<div class="p-link">
				<a href="/blog/">ブログ</a>
			</div>
		</section>
		<section class="p-section mb-0 is-full">
			<div class="p-gmap">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2320.507707084428!2d135.61801321978984!3d34.662443439063075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f4!3m3!1m2!1s0x6001208b5e42ab6d%3A0xd16e42266a65ea42!2z44CSNTc4LTA5Mzcg5aSn6Ziq5bqc5p2x5aSn6Ziq5biC6Iqx5ZyS5pys55S677yR5LiB55uu77yR4oiS77yU77yT!5e0!3m2!1sja!2sjp!4v1567689166387!5m2!1sja!2sjp" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
			</div>
		</section>
*/ ?>
		<ul class="p-grid p-banner hide" data-col="1">

<?php
	$items = wp_get_nav_menu_items( 'top_banner' );
	// echo('<pre>');
	// var_dump($items);
	// echo('</pre>');
	// exit();
	foreach ($items as $key => $value){
?>
<?php /* 

			<li class="p-banner_item">
				<a href="<?php echo($value->url); ?>">
					<img class="" src="<?php echo wp_get_attachment_image_src ($value->thumbnail_id, "full")[0]; ?>" alt="">
					<span><?php echo($value->title); ?></span>
				</a>
			</li>
*/ ?>
<?php
	}
?>
		</ul>

		<?php
		while ( have_posts() ) :
			the_post();
			the_content();
	
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
