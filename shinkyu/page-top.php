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
<?php /*
						<div class="swiper-slide slide4">
							<img src="<?php echo get_template_directory_uri() . "/img/mv-9.png" ?>" alt="">
							<?php get_template_part( 'template-parts/content', 'logo' ); ?>
						</div>
*/?>
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
		<section id="top-menu" class="p-section hide">
			<div class="p-section_content">
				<?php /* wp_nav_menu( array('menu' => 'top_first' ) ); */ ?>
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

		<section class="p-section">
			<h2 class="p-section_title">
				ご挨拶
				<span class="p-section_title_sub">Greeting</span>
			</h2>
			<div class="p-greeting">
				<img src="<?php echo get_template_directory_uri() . "/img/greeting.jpg" ?>" alt="">
				東大阪市河内花園の鍼灸院 良鍼堂です。<br>
				当院は、東洋医学の理論を根拠にした治療を行いますが、症状によっては西洋医学の理論や知見を取り入れて、いち早く完全治癒を目指していきます。
				<div class="p-link">
					<a href="/about/">良鍼堂について</a>
				</div>
			</div>
		</section>

		<ul class="p-shortcut p-grid" data-col="1">
			<li class="p-grid_item">
				<a href="#">
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
				<a href="#">
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
				<a href="#">お知らせ一覧</a>
			</div>
		</section>
		<section class="p-section">
			<a href="http://shinkyu.night-and-day.org/oriental/about/" class="p-hasu_wrapper">
				<img class="p-hasu_image1" src="/wp-content/themes/shinkyu/img/hana.png" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
				<img class="p-hasu_image2" src="/wp-content/themes/shinkyu/img/hasu.png" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
				<img class="p-hasu_image3" src="/wp-content/themes/shinkyu/img/kumo1.png" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
				<img class="p-hasu_image4" src="/wp-content/themes/shinkyu/img/kumo2.png" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
			</a>
			<div class="p-link">
				<a href="#">東洋医学について</a>
			</div>
		</section>

		<section class="p-section">
			<a href="http://shinkyu.night-and-day.org/oriental/about/" class="p-hasu_wrapper">
				<img class="p-hasu_image1" src="/wp-content/themes/shinkyu/img/hana.png" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
				<img class="p-hasu_image2" src="/wp-content/themes/shinkyu/img/hasu.png" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
				<img class="p-hasu_image3" src="/wp-content/themes/shinkyu/img/kumo1.png" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
				<img class="p-hasu_image4" src="/wp-content/themes/shinkyu/img/kumo2.png" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
			</a>
			<div class="p-link">
				<a href="#">ブログ</a>
			</div>
		</section>
		<section class="p-section mb-0">
			<div class="p-gmap">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2320.507707084428!2d135.61801321978984!3d34.662443439063075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f4!3m3!1m2!1s0x6001208b5e42ab6d%3A0xd16e42266a65ea42!2z44CSNTc4LTA5Mzcg5aSn6Ziq5bqc5p2x5aSn6Ziq5biC6Iqx5ZyS5pys55S677yR5LiB55uu77yR4oiS77yU77yT!5e0!3m2!1sja!2sjp!4v1567689166387!5m2!1sja!2sjp" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
			</div>
		</section>

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
