<?php
$term = get_queried_object();
$term_id = $term->term_id;
$taxonomy = $term->taxonomy;
$count = get_term($term_id, $taxonomy)->count;
$slug = $term->slug;
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
           
            <main>
            <?php  get_template_part('include/warning');?>
            <?php get_template_part('include/breadcrumb'); ?> 
            <section class="service">
  
                <div class="section-titles">
                  <h2 class="main-title">
                    <span>
                    <?php if ($term) {
                      echo esc_html ($term->name);
                     }  ?>
                  </span>
                  </h2>
                </div>
                <div class="number-of-facilities">
                  <p class="number-of-facilities__count"><?= esc_html($term->name);?><span><?= esc_html($count);?>つ</span>をご紹介します</p>
                  <?php if ($slug === 'nursing'):?>
                  <p class="number-of-facilities__txt">施設は「家庭的な環境」＋「プロの介護力」が備わった場所です。</p>
                  <?php elseif ($slug === 'group'):?>
                  <p class="number-of-facilities__txt">施設は「家庭的な環境」＋「プロの介護力」が備わった場所です。認知症の症状はお一人おひとり異なります。認知症ケアのプロがチームで協力しながらその方の世界に入り支援しています。</p>

                  <?php endif;?>
                </div>

              
            
                <div class="service__inner">
                <div class="service__blocks">
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
