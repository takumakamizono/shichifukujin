<?php
// Template Name: ご利用までの流れ
// Description:ご利用までの流れについてのテンプレート
// Template Post Type: page

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
<!--            
            <?php get_template_part('include/side-left'); ?> -->
            <main>
            <?php  get_template_part('include/warning');?>
            <?php if(have_posts()): ?>
            <?php while(have_posts()):the_post(); ?>
            <div class="page-content">
              <?php get_template_part('include/breadcrumb'); ?> 
              <div class="page-content__inner">
               <div class="page-procedure">
                <div class="page-procedure__inner">
                   <div class="page-procedure__box">
                    <div class="page-procedure__img">
                    <img src="<?php the_field('step_img01',480);?>" alt="">
                    </div>
                    <div class="page-procedure__texts">
                      <div class="page-procedure__texts-inner">
                      <h4 class="page-procedure__title">
                       <span>まずはご連絡ください。</span>
                     </h4>
                      <div class="page-procedure__desc">
                        <ul>
                          <li>
                            <h5 class="page-procedure__desc-tit">お電話でのお問合せ</h5>
                            <p><?php the_field('step_tel',480);?>までお問い合わせください。</p>
                          </li>
                          <li>
                            <h5 class="page-procedure__desc-tit">メールでのお問合せ</h5>
                            <p>メールフォームよりお問い合わせできます。</p>
                            <div class="page-procedure__btn">
                            <a class="btn" href="<?= home_url('/contact/') ?>">メールフォームはコチラから</a>
                            </div>
                          </li>
                        
                        </ul>

                      </div>

                    </div>
                    </div>
                   </div>
                   <div class="page-procedure__box">
                    <div class="page-procedure__img">
                    <img src="<?php the_field('step_img02',480);?>" alt="">
                    </div>
                    <div class="page-procedure__texts">
                      <div class="page-procedure__texts-inner">
                      <h4 class="page-procedure__title">
                      <span>見学・入居前顔合わせ</span>
                     </h4>
                      <div class="page-procedure__desc">
                      <?php the_field('step_txt02',480);?>
                      </div>

                    </div>
                    </div>
                   </div>
                   <div class="page-procedure__box">
                    <div class="page-procedure__img">
                    <img src="<?php the_field('step_img03',480);?>" alt="">
                    </div>
                    <div class="page-procedure__texts">
                      <div class="page-procedure__texts-inner">
                      <h4 class="page-procedure__title">
                      <span>入居調整会議</span>
                     </h4>
                      <div class="page-procedure__desc">
                      <?php the_field('step_txt03',480);?>
                      </div>
                    </div>
                    </div>
                   </div>
                   <div class="page-procedure__box">
                    <div class="page-procedure__img">
                    <img src="<?php the_field('step_img04',480);?>" alt="">
                    </div>
                    <div class="page-procedure__texts">
                      <div class="page-procedure__texts-inner">
                      <h4 class="page-procedure__title">
                      <span>入居決定</span>
                     </h4>
                      <div class="page-procedure__desc">
                      <?php the_field('step_txt04',480);?>
                      </div>

                    </div>
                    </div>
                   </div>
                   <div class="page-procedure__box">
                    <div class="page-procedure__img">
                    <img src="<?php the_field('step_img05',480);?>" alt="">
                    </div>
                    <div class="page-procedure__texts">
                      <div class="page-procedure__texts-inner">
                      <h4 class="page-procedure__title">
                      <span>契約・入居</span>
                     </h4>
                      <div class="page-procedure__desc">
                      <?php the_field('step_txt05',480);?>                   
                      </div>
                    </div>
                    </div>
                   </div>
                </div>
               </div>
               </div>
               </div>
            <?php endwhile; ?>
            <?php endif; ?>
            
             
         
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
