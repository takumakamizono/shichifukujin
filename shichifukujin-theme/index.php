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
           
            <main>
            <?php  get_template_part('include/warning');?>
            <?php get_template_part('include/breadcrumb'); ?> 
               <section class="news">
                <?php
                if( !$category_name ) {
                  $category_name = $_GET['cat_slug'];
                }
              
                //記事の取得条件
                $article_args = array(
                  'category_name' => $category_name,
                  'posts_per_page' => 10,
                  'paged' => $paged
                );
                    
                //年月の情報を持っていれば取得条件に追加します。
                if( get_query_var('year') || get_query_var('monthnum') ) {
                  $archive_args = array(
                    'year' => get_query_var('year'),
                    'monthnum' => get_query_var('monthnum'),
                  );
                  $article_args = array_merge( $article_args, $archive_args );
                }
              
                $article_query = new WP_Query( $article_args );
                
                
                
                ?>
              
           
                <div class="news__grid">
                  <?php if($article_query->have_posts()): ?>                
                    <ul class="news__list appear right news__main"> 
                    <?php while($article_query->have_posts()):$article_query->the_post(); ?>
                    <?php get_template_part('include/news-inside'); ?> 
                   <?php endwhile; ?>  
                   <?php if(function_exists('wp_pagenavi')){wp_pagenavi();}  ?>
                </ul>         
                  <?php else: ?>
                    <div class="notice__notinfo">
                      <p>新しい情報はありません</p>
                      <div class="notice__btn">
                      <a class="btn slide-bg" href="<?= esc_url(home_url('/')); ?>">トップページへ戻る</a> 
                      </div>
                    </div> 
                  <?php endif; ?>  
           

                  <?php
	$cat_slug = 'news , event,recruitment-info,others';
	$args = array(
		'category_name' => $cat_slug,
		'posts_per_page' => -1
	);


	//ここからはget_posts()でも
	$archive_query = new WP_Query( $args );

	while ( $archive_query->have_posts() ) {
		$archive_query->the_post();
		//年月毎に記事情報を配列に格納
		$archive_list[ get_the_time( 'Y/n', $post->ID ) ][] = $post->post_title;
	}
	wp_reset_postdata();
	?>
  <?php if( $archive_list ) : ?>
<aside class="archive-list">
<div class="archive-list__block">
  <?php
   $categories = get_terms([
    'taxonomy' => 'category',
    'slug' => ['news', 'event','recruitment-info','others'],
    'orderby' => 'include',
    'include' => array(2, 15, 16, 1),
]);
?>
    <p class="archive-list__tltle">カテゴリ</p>
	<ul>
  <?php foreach ($categories as $category) {
            $category_link = get_term_link($category, 'category');
            ?>
            <li >
                <a  href="<?= esc_url($category_link); ?>"><?= $category->name; ?></a>
            </li>
        <?php } ?>
	
	</ul>
  </div>
  
  <div class="archive-list__block">
    <p class="archive-list__tltle">アーカイブ</p>

    <select class="archive-list__dropdown" onchange="redirectToArchive()">
        <option>月別アーカイブ</option>
        <?php foreach( $archive_list as $year_month => $archive ) :
            $year_month_arr = explode( '/', $year_month );
            $archive_link = esc_url( home_url( $year_month.'/?cat_slug='.$cat_slug ) );
            $archive_count = count( $archive );
            $display_text = $year_month_arr[0].'年'.$year_month_arr[1].'月 ['.$archive_count.']';
        ?>
        <option value="<?php echo $archive_link ?>"><?php echo $display_text ?></option>
        <?php endforeach; ?>
    </select>
</div>



  </aside>

	<?php endif; ?>     
                </div>
              </section>
    
            </main>
          
          </div>
        </div>
        <?php get_template_part('include/footer'); ?>
  
      </div>
      <?php get_template_part('include/mobile-menu');?>
    </div>
    <?php wp_footer(); ?>
  </body>
</html>
