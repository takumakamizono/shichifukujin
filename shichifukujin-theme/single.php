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
              <?php get_template_part('include/breadcrumb'); ?> 
            <section class="single">
              <div class="single__inner">
                <?php if(have_posts()): ?>
                  <?php while(have_posts()):the_post(); ?> 
                  
                <?php if(in_category("interview")): ?>
                  <article id="post-<?php the_ID(); ?>" <?php post_class('single__content ') ?> >
		             <?php get_template_part( "include/interview"); ?>
                 </article >
             <?php else: ?>
              <div class="single__grid">
              <article id="post-<?php the_ID(); ?>" <?php post_class('single__content news__main') ?> >

              <?php get_template_part( 'include/news-contents' ); ?>
              </article >
              <?php get_template_part('include/archive-list'); ?>  
              </div>
           <?php endif; ?>
                
               
                 

                  <?php endwhile; ?>   
                <?php endif; ?> 
               
          
              
              </div>
              <ul class="postLinks">
    
    <?php custom_category_paging_links(); ?>
</ul>
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
