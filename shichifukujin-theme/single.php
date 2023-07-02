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
           
            <?php get_template_part('include/side-left'); ?>
            <main>
            <section class="single">
              <div class="single__inner">
                  <?php get_template_part('include/breadcrumb'); ?> 
                <?php if(have_posts()): ?>
                  <?php while(have_posts()):the_post(); ?> 
                  <article id="post-<?php the_ID(); ?>" <?php post_class('single__content') ?> >
                <?php if(in_category("interview")): ?>
		             <?php get_template_part( "include/interview"); ?>
             <?php else: ?>
              <?php get_template_part( 'include/news-contents' ); ?>
           <?php endif; ?>
                
                  </article >
                  <?php endwhile; ?>   
                <?php endif; ?> 
                <?php 
$cat = get_the_category(); 
$cat_id = $cat[0]->cat_ID; 
$cat_name =$cat[0]->cat_name;
$link = get_category_link($cat_id);
?>
<div class="single__list-btn">
<a class="btn slide-bg" href="<?= esc_url($link); ?>"><?= esc_html($cat_name); ?>の一覧へ戻る</a> 
</div>
              
              </div>
              </section>     
            </main>
            <?php get_template_part('include/side-right'); ?>
          
          </div>
        </div>
        <?php get_template_part('include/footer'); ?>
  
      </div>
      <?php get_template_part('include/mobile-menu');?>
    </div>
    <?php wp_footer(); ?>
  </body>
</html>
