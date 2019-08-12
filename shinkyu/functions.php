<?php
/**
 * shinkyu functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package shinkyu
 */

if ( ! function_exists( 'shinkyu_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function shinkyu_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on shinkyu, use a find and replace
		 * to change 'shinkyu' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'shinkyu', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'shinkyu' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'shinkyu_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'shinkyu_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function shinkyu_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'shinkyu_content_width', 640 );
}
add_action( 'after_setup_theme', 'shinkyu_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function shinkyu_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'shinkyu' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'shinkyu' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'shinkyu_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function shinkyu_scripts() {
	wp_enqueue_style( 'shinkyu-style?date=20190821', get_stylesheet_uri() );

	wp_enqueue_script( 'shinkyu-sakura-webfont', '//webfonts.sakura.ne.jp/js/sakura.js', array(), '20190810', true );

	wp_enqueue_script( 'shinkyu-jquery', 'https://code.jquery.com/jquery-3.4.1.min.js', array(), '20190810', true );
	wp_enqueue_script( 'shinkyu-swiper', get_template_directory_uri() . '/js/libs/swiper.min.js', array(), '20190810', true );

	wp_enqueue_script( 'shinkyu-tw', get_template_directory_uri() . '/js/libs/TweenMax.min.js', array(), '20190810', true );
	wp_enqueue_script( 'shinkyu-sm', get_template_directory_uri() . '/js/libs/ScrollMagic.min.js', array(), '20190810', true );
	wp_enqueue_script( 'shinkyu-sm-animation', get_template_directory_uri() . '/js/libs/animation.gsap.min.js', array(), '20190810', true );
	wp_enqueue_script( 'shinkyu-sm-debug', get_template_directory_uri() . '/js/libs/debug.addIndicators.min.js', array(), '20190810', true );

	wp_enqueue_script( 'shinkyu-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20190810', true );

	wp_enqueue_script( 'shinkyu-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20190810', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'shinkyu_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

class mySettingPage{
	public static $key='my_option_name';//オプションへの保存、呼び出しキー
  
	private $html_title='共通情報設定';//HTMLのタイトル（管理ページのtitleタグ）
	private $page_title='共通情報設定';//ページのタイトル
	private $page_slug='my_option_page';
  
	private $options;
	private $group='my_option_group';
	private $section='my_setting_admin';
  
	//ここにキーとタイトル、コールバックをセットにして
	public static function getFields(){
  
	  return array(
		// array(
		//   'type'=>'section',//区切りを入れるときはtypeをセクションにする
		//   'name'=>'section1',
		//   'title'=>'入力してください',
		//   'callback'=>'section_callback',
		// ),
		array(
		  'type'=>'field',//フィールドかセクション　お好みに合わせて追加
		  'name'=>'tel',//名前
		  'title'=>'電話番号',//タイトル
		  'callback'=>'text_callback',//コールバック
		),
		array(
		  'type'=>'field',
		  'name'=>'fax',
		  'title'=>'FAX',
		  'callback'=>'text_callback',
		),
		array(
		  'type'=>'field',
		  'name'=>'address',
		  'title'=>'住所',
		  'callback'=>'text_callback',
		),
		array(
		  'type'=>'section',//区切りを入れるときはtypeをセクションにする
		  'name'=>'section2',
		  'title'=>'',
		  'callback'=>'section_callback',
		),
		array(
		  'type'=>'field',
		  'name'=>'holiday',
		  'title'=>'休診日',
		  'callback'=>'text_callback',
		),
	  );
	}
  
	//初期化
	public function __construct(){
		add_action('admin_menu',array($this,'add_my_option_page'));
		add_action('admin_init',array($this,'page_init'));
	}
  
	//キーを取得（外部から呼び出せるようにする）
	public static function getKey(){
	  return self::$key;
	}
  
	//設定
	public function add_my_option_page(){
		add_menu_page(
			$this->html_title,//ダッシュボードのメニューに表示するテキスト
			$this->page_title,//ページのタイトル
			'edit_themes',
			$this->page_slug,//ページスラッグ
			array( $this, 'create_admin_page' ),
			null,
			10
		);
	}
  
	//フォームの外観作成
	public function create_admin_page(){
		// Set class property
		$this->options = get_option($this->getKey());
		?>
		<div class="wrap">
			<?php screen_icon(); ?>
			<h2><?php echo $this->page_title;?></h2>
			<form method="post" action="options.php">
			<?php
				// This prints out all hidden setting fields
				settings_fields($this->group);
				do_settings_sections($this->section);
				submit_button();
			?>
			</form>
		</div>
		<?php
	}
  
	//フォームの部品組み立て
	public function page_init(){
	  register_setting(
		$this->group, // Option group
		$this->getKey(), // Option name
		array( $this, 'sanitize' ) // Sanitize
	  );
  
	  $fields=$this->getFields();
	  $section_id='';
	  foreach($fields AS $field){
		if($field['type']=='field'){
		  add_settings_section(
			$field['name'], // ID
			$field['title'], // Title
			array($this,$field['callback']), // Callback
			$this->section, // Page
			$section_id
		  );
		}else{
		  add_settings_section(
			$field['name'], // ID
			$field['title'], // Title
			array($this,$field['callback']), // Callback
			$this->section // Page
		  );
		  $section_id=$field['name'];
		}
	  }
	}
  
	//保存前のサニタイズ
	public function sanitize($input){
  
	  $new_input = array();
	  foreach($this->getFields() AS $field){
		if(isset($input[$field['name']])){
		  $new_input[$field['name']] = sanitize_text_field($input[$field['name']]);
		}
	  }
	  return $new_input;
	}
  
	//セクション表示関数
	public function section_callback(array $args){
	  echo '<hr>';
	}
  
	//テキストフィール表示関数
	public function text_callback(array $args){
	  $name=$args['id'];
	  printf(
		'<input type="text" id="'.$name.'" name="'.$this->getKey().'['.$name.']" value="%s" />',
		isset( $this->options[$name] ) ? esc_attr( $this->options[$name]) : ''
	  );
	}
  
  
  }
  
  if(is_admin())
	  $my_settings_page = new mySettingPage();

//

function custom_archive_title($title){
	$titleParts=explode(': ',$title);
	if($titleParts[1]){
		return $titleParts[1];
	}
	return $title;
}
add_filter('get_the_archive_title','custom_archive_title');

/*
* スラッグ名が日本語だったら自動的に投稿タイプ＋id付与へ変更（スラッグを設定した場合は適用しない）
*/
function auto_post_slug( $slug, $post_ID, $post_status, $post_type ) {
    if ( preg_match( '/(%[0-9a-f]{2})+/', $slug ) ) {
        $slug = utf8_uri_encode( $post_type ) . '-' . $post_ID;
    }
    return $slug;
}
add_filter( 'wp_unique_post_slug', 'auto_post_slug', 10, 4  );

/**/

//news
function get_blog_list( $atts ){
	extract(
		shortcode_atts(
			array(
				'pt' => null
			),
			$atts
		)
	);

	$the_pt = get_post ( $pt ); 

	$args = array(
		'posts_per_page' => 3,
		'post_type' => $pt,
	);
	 
	$the_query = new WP_Query( $args );
		while ( $the_query->have_posts() ): $the_query->the_post();
		$psttype_list .= '<li class="p-tile_item">';
		$psttype_list .= '<a href="'. get_permalink() .'">';
		$psttype_list .= '<div class="p-tile_item_img">';
		$psttype_list .= '<img src="'. get_the_post_thumbnail_url(get_the_ID(), 'thumbnail') . '" alt="">';
		$psttype_list .= '</div>';
		$psttype_list .= '<div class="p-tile_item_content">';

		$psttype_list .= '<div class="p-tile_item_content_date">'. get_the_date() .'</div>';
		$psttype_list .= '<div class="p-tile_item_content_title">'. get_the_title() .'</div>';
		$psttype_list .= '</div>';
		$psttype_list .= '</a>';
		$psttype_list .= '</li>';
   
	endwhile;
   
	return $psttype_list;
}
   
add_shortcode('bloglist', 'get_blog_list');

//info
function get_info_list( $atts ){
	extract(
		shortcode_atts(
			array(
				'pt' => null
			),
			$atts
		)
	);

	$the_pt = get_post ( $pt ); 

	$args = array(
		'posts_per_page' => 3,
		'post_type' => $pt,
	);
	 
	$the_query = new WP_Query( $args );
		while ( $the_query->have_posts() ): $the_query->the_post();
		$psttype_list .= '<li class="p-tile_item">';
		$psttype_list .= '<a href="'. get_permalink() .'">';
		$psttype_list .= '<div class="p-tile_item_img">';
		$psttype_list .= '<img src="'. get_the_post_thumbnail_url(get_the_ID(), 'thumbnail') . '" alt="">';
		$psttype_list .= '</div>';
		$psttype_list .= '<div class="p-tile_item_content">';

		$psttype_list .= '<div class="p-tile_item_content_date">'. get_the_date() .'</div>';
		$psttype_list .= '<div class="p-tile_item_content_title">'. get_the_title() .'</div>';
		$psttype_list .= '</div>';
		$psttype_list .= '</a>';
		$psttype_list .= '</li>';
   
	endwhile;
   
	return $psttype_list;
}
   
add_shortcode('infolist', 'get_info_list');

/* 親のslug取得 */

function is_parent_slug() {
	global $post;
	if ($post->post_parent) {
		$post_data = get_post($post->post_parent);
		return $post_data->post_name;
	}
}

/* 東洋医学とはの表示順 */

function change_sort_order( $query ) {
	// echo('<pre>');
	// var_dump($query);
	// echo('</pre>');
	// exit();
	if ( is_admin() || ! $query->is_main_query() ) {
		return;
	}
	
	if ($query->is_post_type_archive( 'oriental' )){
		$query->set('meta_key', 'disp_order');
		$query->set('orderby', 'meta_value_num');
		$query->set('order', 'ASC');
	}

	if ( $query->is_home() ) {
		$query->set( 'order', 'ASC' );
		$query->set( 'orderby', 'title' );
	}
}

add_action( 'pre_get_posts', 'change_sort_order' );