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
            <?php if(have_posts()): ?>
            <?php while(have_posts()):the_post(); ?>
            <div class="page-content">
              <?php get_template_part('include/breadcrumb'); ?> 
              <div class="page-content__inner">
               <div class="page-procedure">
                <div class="page-procedure__inner">
                   <div class="page-procedure__box">
                    <div class="page-procedure__img">
                          <img src="https://placehold.jp/670x400.png" alt="">
                    </div>
                    <div class="page-procedure__texts">
                      <div class="page-procedure__texts-inner">
                      <h4 class="page-procedure__title">
                        まずはご連絡ください。
                     </h4>
                      <div class="page-procedure__desc">
                        <ul>
                          <li>
                            <h5 class="page-procedure__desc-tit">お電話でのお問合せ</h5>
                            <p>099-256-2729までお問い合わせください。</p>
                          </li>
                          <li>
                            <h5 class="page-procedure__desc-tit">メールでのお問合せ</h5>
                            <p>メールフォームよりお問い合わせできます。</p>
                            <a href="">メールフォームはコチラから</a>
                          </li>
                          <li>

                          </li>
                        </ul>

                      </div>

                    </div>
                    </div>
                   </div>
                   <div class="page-procedure__box">
                    <div class="page-procedure__img">
                    <img src="https://placehold.jp/670x400.png" alt="">
                    </div>
                    <div class="page-procedure__texts">
                      <div class="page-procedure__texts-inner">
                      <h4 class="page-procedure__title">
                        見学・入居前顔合わせ
                     </h4>
                      <div class="page-procedure__desc">
                       <p>こちらから、入居前にご自宅や入院先へお伺いしスタッフと顔合わせを行ないます。</p>
                      </div>

                    </div>
                    </div>
                   </div>
                   <div class="page-procedure__box">
                    <div class="page-procedure__img">
                    <img src="https://placehold.jp/670x400.png" alt="">
                    </div>
                    <div class="page-procedure__texts">
                      <div class="page-procedure__texts-inner">
                      <h4 class="page-procedure__title">
                        入居調整会議
                     </h4>
                      <div class="page-procedure__desc">
                       <p>ご入居頂くに際して、専門スタッフ同士でミーティングを行い十分な支援が可能かどうが検討</p>
                      </div>
                    </div>
                    </div>
                   </div>
                   <div class="page-procedure__box">
                    <div class="page-procedure__img">
                    <img src="https://placehold.jp/670x400.png" alt="">
                    </div>
                    <div class="page-procedure__texts">
                      <div class="page-procedure__texts-inner">
                      <h4 class="page-procedure__title">
                        入居決定
                     </h4>
                      <div class="page-procedure__desc">
                       <p>検討の結果をご連絡させていただいたのち、具体的な入居日を、ご相談しながら調整いたします。</p>

                      </div>

                    </div>
                    </div>
                   </div>
                   <div class="page-procedure__box">
                    <div class="page-procedure__img">
                    <img src="https://placehold.jp/670x400.png" alt="">
                    </div>
                    <div class="page-procedure__texts">
                      <div class="page-procedure__texts-inner">
                      <h4 class="page-procedure__title">
                        契約・入居
                     </h4>
                      <div class="page-procedure__desc">
                       <p>契約を行い、入居がスタートします。</p>
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
