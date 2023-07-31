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
            <section class="sl-custom">
            <?php get_template_part('include/breadcrumb'); ?> 
              <div class="sl-custom__inner">
                <?php if(have_posts()): ?>
                  <?php while(have_posts()):the_post(); ?> 
                  <article id="post-<?php the_ID(); ?>" class="sl-service" >
                  <div class="section-titles">
                  <h3 class="main-title"><span><?=  the_title();?>について</span></h3> 
                </div>
                <?php
               
               $terms = get_the_terms(get_the_ID(), 'facility');
               if ($terms && !is_wp_error($terms)):
                foreach ($terms as $term):
                ?>
                  <div class="sl-service__inner">
                    <?php if ($term->slug === 'nursing'):?>
                  <?php get_template_part('service_inc/single-nursing'); ?>
                  <?php elseif($term->slug === 'group'): ?>
                  <?php get_template_part('service_inc/single-group'); ?>
                  <?php elseif($term->slug === 'day'): ?>
                  <?php get_template_part('service_inc/single-day'); ?>
                  <?php elseif($term->slug === 'support'|| $term->slug === 'others'): ?>
                  <?php get_template_part('service_inc/single-support'); ?>
                 <?php endif; ?> 
                 <?php endforeach; ?> 
                 <?php endif; ?>  
                  </div>
                  </article >
                  <?php endwhile; ?>   
                <?php endif; ?> 
              </div>
              </section>   
              <?php get_template_part('include/contact'); ?>
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
