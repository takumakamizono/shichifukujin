<?php
define("DIRE", get_template_directory_uri());
function add_async_defer_script($url) {
    if (strpos($url, '#async'))
    return str_replace('#async', '', $url)."' async='async";
    elseif (strpos($url, '#defer'))
      return str_replace('#defer', '', $url)."' defer='defer";
    else
      return $url;
  }
  add_filter('clean_url', 'add_async_defer_script', 11, 1);


  function enqueue_scripts() {
    $version = '1.0.0';

    $style_version = filemtime(get_stylesheet_directory() . '/style.css');
    $script_version = filemtime(get_stylesheet_directory() . '/scripts/main.min.js');

    wp_enqueue_style('css-reset',DIRE.'/styles/vendors/css-reset.css',array(), $version);
    wp_enqueue_style('fonts-googleapis','https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c:wght@400;800|family=Noto+Sans+JP:wght@400;600|family=Noto+Serif+JP:wght@900&display=swap', false);
    wp_enqueue_style('swiper-bundle.min.css',DIRE.'/styles/vendors/swiper-bundle.min.css',array(), $version);
    wp_enqueue_style('style.css',DIRE.'/style.css',array(),$style_version);
    wp_enqueue_script('google-maps-api', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyAg5LKfmVKJjTlwupDtGGFGRPuxtbj2YdE');
    wp_enqueue_script('fontawesome','https://kit.fontawesome.com/2bf622374b.js', false);
    wp_enqueue_script('jquery-min', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js', false);
    wp_enqueue_script('jquery.js', DIRE.  '/scripts/libs/jquery.min.js#defer', array(), $version);
    wp_enqueue_script('scroll-polyfill.js', DIRE.  '/scripts/vendors/scroll-polyfill.js#defer', array(), $version);
    wp_enqueue_script('gsap.min.js', DIRE.  '/scripts/vendors/gsap.min.js#defer', array(), $version);
    wp_enqueue_script('swiper-bundle.min.js', DIRE.  '/scripts/vendors/swiper-bundle.min.js#defer', array(), $version);
    wp_enqueue_script('hero-slider.js', DIRE.  '/scripts/libs/hero-slider.min.js#defer', array(), $version);
    wp_enqueue_script('scroll.js', DIRE.  '/scripts/libs/scroll.min.js#defer', array(), $version);
    wp_enqueue_script('text-animation.js', DIRE.  '/scripts/libs/text-animation.min.js#defer', array(), $version);
    wp_enqueue_script('mobile-menu.js', DIRE.  '/scripts/libs/mobile-menu.min.js#defer', array(), $version);
    wp_enqueue_script('main.js', DIRE.  '/scripts/main.min.js#defer', array(), $script_version);
  }
  add_action('wp_enqueue_scripts', 'enqueue_scripts');
  
  

add_theme_support('title-tag');
add_filter('document_title_separator','my_document_title_separator');
function my_document_title_separator($sepatator){
    $sepatator = '|';
    return $sepatator;
}
add_filter('document_title_parts','my_document_title_parts');
function my_document_title_parts($title){
 if(is_home()){
  unset($title['tagline']);
  $title['title']= '社会福祉法人天祐会七福神';
 }
 return $title;
}



add_theme_support('menus');
add_theme_support('post-thumbnails');

//category-label
function categories_label() {
  $cats = get_the_category();
foreach($cats as $cat){
  if($cat->parent == 0){
        echo '<li>';
        echo esc_html($cat->name);
        echo '</li>';
    }
  }
}
/**
 * Contact Form 7 "フリガナ"のバリデーション追加
 */
function custom_wpcf7_validate_kana($result,$tag)
{
    $tag   = new WPCF7_Shortcode($tag);
    $name  = $tag->name;
    $value = isset($_POST[$name]) ? trim(wp_unslash(strtr((string) $_POST[$name], "\n", " "))) : "";
 
    //全角カタカナ又は平仮名の入力チェック
    if ($name === "your-kana") {
        if(!preg_match("/^[ア-ヶーぁ-ん]+$/u", $value)) {
            $result->invalidate( $tag,"全角カタカナ又は平仮名で入力してください。");
        }
    }
    return $result;
}
add_filter('wpcf7_validate_text', 'custom_wpcf7_validate_kana', 11, 2);
add_filter('wpcf7_validate_text*', 'custom_wpcf7_validate_kana', 11, 2);

//お問い合わせと送信完了（固定ページ）のスラッグをセットする
$contact = 'contact';
$thanks = 'thanks';

//お問い合わせフォームの送信後にサンクスページへ飛ばす
add_action( 'wp_footer', 'redirect_thanks_page' );
function redirect_thanks_page() {
  global $contact;
  global $thanks;
  ?>
  <?php if( is_page($contact)):?>
  <script>
    document.addEventListener( 'wpcf7mailsent', function( event ) {
      location = '<?php echo home_url('/'.$thanks); ?>'; // 遷移先のURL
    }, false );
  </script>
<?php endif; ?>

<?php

}

function twpp_change_excerpt_length( $length ) {
  return 100; 
}
add_filter( 'excerpt_length', 'twpp_change_excerpt_length', 999 );

function twpp_change_excerpt_more( $more ) {
  $html = '<a href="' . esc_url( get_permalink() ) . '">[...続きを読む]</a>';
  return $html;
}

add_filter( 'excerpt_more', 'twpp_change_excerpt_more' );



add_filter('use_block_editor_for_post',function($use_block_editor,$post){
  if($post->post_type==='page'){
      if(in_array($post->post_name,['top_slide','sub_topimg','sitemap','procedure','about','each_url'])){
          remove_post_type_support('page','editor');
          return false;
      }
  }
  return $use_block_editor;
},10,2);






function taxonomy_orderby_description( $orderby, $args ) {
  if ( $args['orderby'] == 'description' ) {
    $orderby = 'tt.description';
  }
  return $orderby;
}
add_filter( 'get_terms_orderby', 'taxonomy_orderby_description', 10, 2 );




add_action( 'admin_init', function() {
  $taxonomy = 'facility'; 
  $term_slug = ['nursing','group','day','support'
  ];
  $post_type = 'service'; 

  global $pagenow;

  if ( $pagenow === 'post.php' && isset( $_GET['post'] ) ) {
      $post_id = $_GET['post'];  
      if ( has_term( $term_slug, $taxonomy, $post_id ) ) {
          $post = get_post( $post_id );     
          if ( $post && $post->post_type === $post_type ) {
              remove_post_type_support( $post_type, 'editor' );
          }
      }
  }
} );


add_action( 'admin_init', function() {
  $taxonomy = 'category'; 
  $term_slugs = ['improvement', 'reward', 'settlement', 'teikan'];
  $post_type = 'post'; 

  global $pagenow;

  if ( $pagenow === 'post.php' && isset( $_GET['post'] ) ) {
      $post_id = $_GET['post'];  
      $post_terms = wp_get_post_terms( $post_id, $taxonomy, array( 'fields' => 'slugs' ) );
      
      if ( ! empty( $post_terms ) && array_intersect( $term_slugs, $post_terms ) ) {
          $post = get_post( $post_id );     
          if ( $post && $post->post_type === $post_type ) {
              remove_post_type_support( $post_type, 'editor' );
          }
      }
  }
} );





function initialize_custom_map($atts) {
  // ショートコードの属性をデフォルト値とマージ
  $a = shortcode_atts(
    array(
      'lat' => 31.590504,
      'lng' => 130.542486,
      'zoom' => 18,
      'title' => '七福神グループ',
    ),
    $atts
  );

  ob_start();
  ?>
  <div class="map-canvas" style="width: 100%; height: 100%;"></div>
  <script>
    function initialize() {
      var latlng = new google.maps.LatLng(<?= $a['lat'] ?>, <?= $a['lng'] ?>);
      var myOptions = {
        zoom: <?= $a['zoom'] ?>,
        center: latlng,
        mapTypeControlOptions: { mapTypeIds: ['sample', google.maps.MapTypeId.ROADMAP] },
      };
      var map = new google.maps.Map(document.querySelector('.map-canvas'), myOptions);
      var icon = new google.maps.MarkerImage('<?= get_template_directory_uri(); ?>/images/map-pin.png',
        new google.maps.Size(84, 104),
        new google.maps.Point(0, 0)
      );
      var markerOptions = {
        position: latlng,
        map: map,
        icon: icon,
        title: '<?= $a['title'] ?>',
      };
      var marker = new google.maps.Marker(markerOptions);
    }
    google.maps.event.addDomListener(window, 'load', initialize);
  </script>
  <?php
  return ob_get_clean();
}
add_shortcode('custom_map', 'initialize_custom_map');