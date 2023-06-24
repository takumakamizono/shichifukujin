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

                <div class="section-titles">
                  <h2 class="main-title">
                  施設一覧
                  </h2>       
                </div>
                <?php
                     $args=[
                       'post_type'=> 'service',
                       'posts_per_page' => -1,
                
                       
                     ];
                     $the_query = new WP_Query($args);
                    ?>
                      
                <div class="service__inner">
             <?php if($the_query->have_posts()): ?>   
              <?php while($the_query->have_posts()):$the_query->the_post(); ?>
                  <?php get_template_part('include/service-inside'); ?>
                  <?php endwhile; ?>
           <?php else: ?>

<div class="service__notInfo">
                      <p>現在、準備中です</p>
                    </div>

            <?php endif; ?>

              
                </div>
              </section>   
        
            
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
