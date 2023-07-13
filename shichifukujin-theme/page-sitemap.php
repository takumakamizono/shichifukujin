<?php
/*
Template Name: サイトマップ
// Description:サイトマップのテンプレート
Template Post Type: page

*/

?>
<!DOCTYPE html>
<html lang="ja">
  <head>
  <?php get_header();?>
  </head>
  <body>
    <div id="global-container">
      <div id="container">
        <div class="mobile-menu__cover"></div>
        <div class="nav-trigger"></div>
        <header class="header">
        <?php get_template_part('include/header'); ?>
        </header>
        <div id="content">
        <?php get_template_part('include/hero'); ?>
          <div id="main-content">
           
            <!-- <?php get_template_part('include/side-left'); ?> -->
            <main>
            <?php if(have_posts()): ?>
            <?php while(have_posts()):the_post(); ?>
            <div class="page-content">
              <?php get_template_part('include/breadcrumb'); ?> 
              <div class="page-content__inner">
                  <div class="site-map">
                  <div class="site-map__box">   
<div class="site-map__top">               
  <p><a href="<?php echo home_url(); ?>">TOPページ</a></p>
  </div> 
 
  
  <?php
$slugs = ['thanks']; // 除外ページをスラッグで指定.
?>
<ul class="sm-list sm-list-page">
<?php
$ids = [];
foreach ( $slugs as $page_slug ) {
  $page = get_page_by_path( $page_slug );
  array_push( $ids, $page->ID );
}

$exclude_ids = implode( ',', $ids );

wp_list_pages(
 [
    'title_li' => '', // タイトルなし.
    'exclude'  => $exclude_ids, // 除外ページIDの配列を指定.
 ]
);
?>
</ul>

  </div> 
  <div class="site-map__box">   
  <?php
    $args=[
      
      'exclude'=>3,
      'orderby' => 'name',
      'order' => 'ASC'
    ];
    $categories=get_categories($args);
    foreach($categories as $category) {
      echo '<h2><a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '"' . '>' . $category->name.'</a></h2>';
  ?>
    <ul class="sm-list sm-list-post">
      <?php
      global $post;
      $myposts = get_posts('numberposts=100&category=' . $category->term_id);
      foreach($myposts as $post) : setup_postdata($post);
      ?>
      <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
      <?php endforeach; ?>
      <?php wp_reset_postdata(); ?>
    </ul>
  <?php }; ?>
  </div> 

  <div class="site-map__box">
  <?php
  $args = array(
    'post_type' => 'service',
    'posts_per_page' => -1,
    'orderby' => 'name',
    'order' => 'ASC'
  );
  $post_type = 'service';
  $post_type_object = get_post_type_object($post_type);
  
  $services = get_posts($args);
  if ($services) {
    if ($post_type_object) {
  $post_type_name = $post_type_object->labels->menu_name;
  $post_type_link = get_post_type_archive_link($post_type);
  echo '<h2><a href="' . esc_url($post_type_link) . '">'. $post_type_name .'</a></h2>';
} else {
  echo '<h2><a href=""></a>Custom Post Type</h2>';
}
echo '<ul class="sm-list sm-list-post">';
    foreach ($services as $post) {
      setup_postdata($post);
      echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
    }
    echo '</ul>';
    wp_reset_postdata();
  } else {
    echo '<p>No services found.</p>';
  }
  ?>
</div>
<div class="site-map__box">
  <?php
  $category_slug = 'interview'; // 取得するカテゴリのスラッグ
  $category = get_category_by_slug($category_slug);
  if ($category) {
    echo '<h2><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></h2>';
    $myposts = get_posts(array(
      'numberposts' => -1,
      'category' => $category->term_id
    ));
    if ($myposts) {
      echo '<ul class="sm-list sm-list-post">';
      foreach ($myposts as $post) {
        setup_postdata($post);
        echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
      }
      echo '</ul>';
      wp_reset_postdata();
    }
  }
  ?>
</div>
 
</div>
                </div>
          </div>
            <?php endwhile; ?>
            <?php endif; ?>
            
                   
            </main>
            <!-- <?php get_template_part('include/side-right'); ?> -->
          
          </div>
        </div>
        <?php get_template_part('include/footer'); ?>
  
      </div>
      <?php get_template_part('include/mobile-menu');?>
    </div>
    <?php wp_footer(); ?>
  </body>
</html>

