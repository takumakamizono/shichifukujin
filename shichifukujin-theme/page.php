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
            <?php  get_template_part('include/warning');?>
            <?php if(have_posts()): ?>
            <?php while(have_posts()):the_post(); ?>
            <div class="page-content">
              <?php get_template_part('include/breadcrumb'); ?> 
              <div class="page-content__inner">
               <?php the_content(); ?>
                </div>
          </div>
          <?php if (is_page('contact')): ?>
          <?php get_template_part('include/facility-list'); ?>
          <?php endif; ?>
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
