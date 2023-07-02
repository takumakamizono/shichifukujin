<?php
$term = get_queried_object();
$term_id = $term->term_id;
$taxonomy = $term->taxonomy;
$count = get_term($term_id, $taxonomy)->count;
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
            <section class="service">
            <?php get_template_part('include/breadcrumb'); ?> 
             <?php $facility =  get_queried_object(); ?>
                <div class="section-titles">
                  <h2 class="main-title">
                    <span>
                    <?php if ($facility) {
                      echo esc_html ($facility->name);
                     }  ?>
                  </span>
                  </h2>
                  <p class="number-of-facilities"><?= esc_html($facility->name);?><span><?= esc_html($count);?>施設</span>をご紹介します</p>
                </div>
              
            
                <div class="service__inner">
                  
             <?php if(have_posts()): ?>   
              <?php while(have_posts()):the_post(); ?>
                  <?php get_template_part('include/service-inside'); ?>
                  <?php endwhile; ?>
           <?php else: ?>

<div class="service__notInfo">
                      <p>現在、準備中です</p>
                    </div>

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
