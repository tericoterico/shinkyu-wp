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
							<img class="p-mv_fish" src="<?php echo get_template_directory_uri() . "/img/mv-5.png" ?>" alt="">
							<div class="p-mv_logo">
								<img src="<?php echo get_template_directory_uri() . "/img/logo.svg" ?>" alt="">
							</div>
							<!-- <div class="p-mv_copy">
								改札口を抜けると<br>
								そこには、<br>
								駅前が広がっていた
							</div> -->
						</div>
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
<?php /*
					<!-- If we need scrollbar -->
					<div class="swiper-scrollbar"></div>
*/ ?>
			</div>
		</section>

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
						<div class="p-tile_item_content_title">常識とは十八歳までに身につけた偏見のコレクションのことをいう。</div>
					</div>
				</li>
				<li class="p-tile_item">
					<div class="p-tile_item_img">
						<img src="<?php echo get_template_directory_uri() . "/img/dummy-2.jpg" ?>" alt="">
					</div>
					<div class="p-tile_item_content">
						<div class="p-tile_item_content_date">2019.07.03 (Wed)</div>
						<div class="p-tile_item_content_title">どこに行こうとしているのかわからないのに、決して遠くまで行けるものではない。</div>
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


		<section class="p-section">
			<h2 class="p-section_title">
				ブログ
				<span class="p-section_title_sub">Blog</span>
			</h2>
			<ul class="p-tile">
				<li class="p-tile_item">
					<div class="p-tile_item_img">
						<img src="<?php echo get_template_directory_uri() . "/img/dummy-5.jpg" ?>" alt="">
					</div>
					<div class="p-tile_item_content">
						<div class="p-tile_item_content_date">2019.07.03 (Wed)</div>
						<div class="p-tile_item_content_title">苦しい時でも、とにかく笑っていろ。笑える余裕、ゆとりがないと判断を間違える。</div>
					</div>
				</li>
				<li class="p-tile_item">
					<div class="p-tile_item_img">
						<img src="<?php echo get_template_directory_uri() . "/img/dummy-6.jpg" ?>" alt="">
					</div>
					<div class="p-tile_item_content">
						<div class="p-tile_item_content_date">2019.07.03 (Wed)</div>
						<div class="p-tile_item_content_title">弱いものを救い上げるだけでは十分ではない。その後も支えてやらなければ。</div>
					</div>
				</li>
				<li class="p-tile_item">
					<div class="p-tile_item_img">
						<img src="<?php echo get_template_directory_uri() . "/img/dummy-7.jpg" ?>" alt="">
					</div>
					<div class="p-tile_item_content">
						<div class="p-tile_item_content_date">2019.07.03 (Wed)</div>
						<div class="p-tile_item_content_title">蝶はモグラではない。でも、そのことを残念がる蝶はいないだろう。</div>
					</div>
				</li>
			</ul>
			<div class="p-link">
				<a href="#">ブログ一覧</a>
			</div>
		</section>

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
