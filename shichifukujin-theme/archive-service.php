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
                    <span>
                  施設一覧
                  </span>
                  </h2>       
                </div>
                <?php
                $facilitys = get_terms([
                'taxonomy'=>'facility',
                'parent'   => 0,
                'orderby'  => 'description',
                'order'    => 'ASC']);
                if(!empty($facilitys)):
                ?>
                <div class="service-pageNav">
                  <ul>
                    <?php foreach($facilitys as $facility): ?>
                      <li><a class="btn float " href="<?=esc_html(get_term_link($facility)); ?>"> <?= esc_html( $facility->name); ?></a></li>
                     <?php endforeach; ?>
                  </ul>
                </div>
                <?php  endif;?>


              
                    <?php if(!empty($facilitys)):?>
                    <?php foreach($facilitys as $facility):?> 
                      <div class="section-titles">
                        <h3 class="main-title"> <span><?= esc_html($facility->name); ?></span></h3>
                      </div>

                <div class="service__inner">
                <?php
                     $args=[
                       'post_type'=> 'service',
                       'posts_per_page' => -1,
                       
           
                     ];
                     $taxquerysp =['relation'=> 'AND'];
                     $taxquerysp[]=[
                      'taxonomy' => 'facility',
                      'terms'=>$facility -> slug,
                      'field' => 'slug',
                     ];
                     $args['tax_query']= $taxquerysp;
     
                     $the_query = new WP_Query($args);
                    ?>


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
            <?php endforeach; ?>   
         <?php endif; ?>

              
              
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
