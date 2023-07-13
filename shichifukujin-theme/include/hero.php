<?php if(is_home()): ?>
<div class="hero">
            <div class="swiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="hero__title">
                  <img class="hero__title-img" src="<?= get_template_directory_uri(); ?>/images/hero_title.png" alt="">
                  </div>
                <?php if(get_field('top_img01',310)): ?>      
              <img src="<?php the_field('top_img01',310);?>" alt="スライド画像01">
              <?php else: ?>
                  <img src="https://placehold.jp/1400x930.png" alt="トップスライド画像" />
              <?php endif; ?>
                </div>
                <div class="swiper-slide">
                  <div class="hero__title">
                  <img class="hero__title-img" src="<?= get_template_directory_uri(); ?>/images/hero_title.png" alt="">
                  </div>
                  <?php if(get_field('top_img02',310)): ?>      
              <img src="<?php the_field('top_img02',310);?>" alt="スライド画像02">
              <?php else: ?>
                  <img src="https://placehold.jp/1400x930.png" alt="トップスライド画像" />
              <?php endif; ?>
                </div>
                <div class="swiper-slide" data-swiper-autoplay="6000">
                  <div class="hero__title">
                  <img class="hero__title-img" src="<?= get_template_directory_uri(); ?>/images/hero_title.png" alt="">
                  </div>
                 
                  <?php if(get_field('top_img03',310)): ?>      
              <img src="<?php the_field('top_img03',310);?>" alt="スライド画像03">
              <?php else: ?>
                  <img src="https://placehold.jp/1400x930.png" alt="トップスライド画像" />
              <?php endif; ?>
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
              <p class="hero-sub__subtitle"><?=  esc_html($cat_slug); ?></p>
              <?php  elseif($post_type_object):?> 
                <?php
                $menu_name = $post_type_object->labels->menu_name;
                $name = $post_type_object->labels->name;
                
                 ?> 
              <h2 class="hero-sub__maintitle "><?=  esc_html($menu_name); ?></h2>
              <p class="hero-sub__subtitle"><?=  esc_html($name); ?></p>
              <?php endif; ?>        
              </div>
              <div class="hero-sub__img"> 
                <?php if(is_category('news') || in_category('news')):  ?>      
                  <img src="<?php the_field('news_img',312);?>" alt="お知らせのヘッダー画像">   
            
                <?php elseif($post_type):  ?>      
                  <img src="<?php the_field('service_img',312);?>" alt="施設紹介のヘッダー画像">   
            
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
    <p class="hero-sub__subtitle"><?= esc_html($cat_slug); ?></p>

            
              <?php elseif($post_type_object):  ?> 
                <?php
                $menu_name = $post_type_object->labels->menu_name;
                $name = $post_type_object->labels->name;
                 ?> 
                <h2 class="hero-sub__maintitle "><?=  esc_html($menu_name)?></h2>
              <p class="hero-sub__subtitle"><?=  esc_html($name); ?></p>  
       
               
              <?php endif; ?>       
              </div>
              <div class="hero-sub__img"> 
                <?php if(is_category('news') || in_category('news')):  ?>  
                 <img src="<?php the_field('news_img',312);?>" alt="お知らせのヘッダー画像">
                 <?php elseif($post_type):  ?>      
                  <img src="<?php the_field('service_img',312);?>" alt="施設紹介のヘッダー画像">   
            
        
             <?php endif; ?>
            </div>     
        </div>
      </div>
      <?php elseif(is_page()) : ?>
        <?php
$page = get_post( get_the_ID() );
$slug = $page->post_name;
?>
        <div class="hero-sub">    
        <div class="hero-sub__inner">
              <div class="hero-sub__titles">
              <h2 class="hero-sub__maintitle "><?php the_title(); ?></h2>
              <p class="hero-sub__subtitle"><?= strtoupper($post->post_name); ?></p>
              </div>
              <div class="hero-sub__img"> 
              <?php if(has_post_thumbnail()): ?>        
              <?php the_post_thumbnail(); ?> 
              <?php else: ?>
                <img src="https://placehold.jp/1400x700.png" alt="noimage画像" />
               <?php endif; ?>
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
                <?php if(get_field('404_img',312)): ?>      
              <img src="<?php the_field('404_img',312);?>" alt="404ページのヘッダー画像">
              <?php else: ?>
                <img src="https://placehold.jp/1400x700.png" alt="noimage画像" />
               <?php endif; ?>
            </div>     
        </div>
      </div>
        <?php endif; ?>