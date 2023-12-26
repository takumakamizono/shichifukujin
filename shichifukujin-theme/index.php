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
           

                  <?php get_template_part('include/archive-list'); ?>  
               
                </div>
              </section>
              <?php get_template_part('include/contact'); ?>  
    
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
