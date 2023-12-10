<?php if(is_home()): ?>
<div class="hero">
            <div class="swiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="hero__title">
                  <img class="hero__title-img" src="<?= get_template_directory_uri(); ?>/images/hero_title02.png" alt="">
                  </div>                 
              <img class="pc-image" src="<?php the_field('top_img01',310);?>" alt="PC用スライド画像01">
                  <img class="mobile-image" src="<?php the_field('mobile_top_img01',310);?>" alt="モバイル用スライド画像01" />
              
                </div>
                <div class="swiper-slide">
                  <div class="hero__title">
                  <img class="hero__title-img" src="<?= get_template_directory_uri(); ?>/images/hero_title.png" alt="">
                  </div>
                  
              <img src="<?php the_field('top_img02',310);?>" alt="PC用スライド画像02">
                </div>
                <div class="swiper-slide" data-swiper-autoplay="6000">
                  <div class="hero__title">
                  <img class="hero__title-img" src="<?= get_template_directory_uri(); ?>/images/hero_title02.png" alt="">
                  </div>
              <img src="<?php the_field('top_img03',310);?>" alt="PC用スライド画像03">      
                </div>
              </div>
             
            </div>
          </div>


   <?php elseif(is_archive()):?>
   <?php
    $post_type = 'service';
    $post_type_object = get_post_type_object($post_type);
    
    ?>
      <div class="hero-sub">    
        <div class="hero-sub__inner">
              <div class="hero-sub__titles">    
              <?php if(is_category()):  ?>  
                <?php
                  $category = get_queried_object();
                  $cat_slug = $category->category_nicename;
                  $cat_name = $category->cat_name;
                  ?>               
              <h2 class="hero-sub__maintitle "><?=  esc_html($cat_name); ?></h2>
              <?php elseif (is_tax()) :
    $term = get_queried_object();
    ?>
    <h2 class="hero-sub__maintitle"><?= esc_html($term->name); ?></h2>
   

              <?php  elseif($post_type_object):?> 
              <h2 class="hero-sub__maintitle "><?=  post_type_archive_title('', false);?></h2>       
              <?php endif; ?>        
              </div>
              <div class="hero-sub__img"> 
                <?php if(is_category('news') || in_category('news')):  ?>      
                  <img src="<?php the_field('news_img',312);?>" alt="お知らせのヘッダー画像">   
            
                <?php elseif($post_type):  ?>      
                  <img src="<?php the_field('service_img',312);?>" alt="サービス紹介のヘッダー画像">   
            
             <?php endif; ?>
            </div>     
        </div>
      </div>
      <?php elseif(is_single()):?>
        <?php
    $post_type = 'service';
    $post_type_object = get_post_type_object($post_type);
   
    ?>
   
      <div class="hero-sub">    
        <div class="hero-sub__inner">
              <div class="hero-sub__titles">  
              <?php if(is_singular('post')): ?>
    <?php
    $categories = get_the_category();
   
    if (!empty($categories)) {
      $cat_slug = $categories[0]->slug;
      $cat_name = $categories[0]->name;
    }
    ?>
    <h2 class="hero-sub__maintitle"><?= esc_html($cat_name); ?></h2>
              <?php elseif(is_singular('service')):  ?> 
                <?php
               $terms = get_the_terms(get_the_ID(), 'facility'); 
               if ($terms && !is_wp_error($terms)):
                foreach ($terms as $term):
                 ?> 
                <h2 class="hero-sub__maintitle "><?=  esc_html( $term->name);?></h2>
              <?php endforeach;       
               endif;       
               endif; ?>       
              </div>
              <div class="hero-sub__img"> 
                <?php if(is_single()&& get_post_type() === 'post'):  ?>  
                 <img src="<?php the_field('news_img',312);?>" alt="お知らせのヘッダー画像">
                 <?php elseif($post_type):  ?>      
                  <img src="<?php the_field('service_headimage');?>" alt="サービス紹介のヘッダー画像">   
            
             <?php endif; ?>
            </div>     
        </div>
      </div>
      <?php elseif(is_page()) : ?>
        <?php
$page = get_post( get_the_ID() );
?>
        <div class="hero-sub">    
        <div class="hero-sub__inner">
              <div class="hero-sub__titles">
              <h2 class="hero-sub__maintitle "><?php the_title(); ?></h2>
   
              </div>
              <div class="hero-sub__img">                     
              <?php the_post_thumbnail(); ?> 
            </div>     
        </div>
      </div>
      <?php elseif(is_404()): ?>
        <div class="hero-sub">    
        <div class="hero-sub__inner">
              <div class="hero-sub__titles">
              <h2 class="hero-sub__maintitle ">404 NOT FOUND</h2>
              </div>
              <div class="hero-sub__img">            
              <img src="<?php the_field('404_img',312);?>" alt="404ページのヘッダー画像">
            </div>     
        </div>
      </div>
        <?php endif; ?>