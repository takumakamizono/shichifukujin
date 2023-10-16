<?php
$count_posts = wp_count_posts('service');
$total_posts = $count_posts->publish;
?>
<section class="about">
<div class="section-titles">
                  <h2 class="main-title">
                    <span>社会福祉法人天祐会とは</span>          
                  </h2>
                 
                </div>
                <div class="about__inner">
                  <div class="about__overview">
                  <div class="about__img cover-slide">
                    <img class="img-zoom" src="<?= get_template_directory_uri(); ?>/images/about.png" />
                  </div>
                  <div class="about__texts appear right">
                    <div class="about__texts-inner">
                      <div class="about__title item">
                        会社紹介
                      </div>
                     
                      <div class="about__description item">
                        <p>
                        七福神グループは日本一多く、その人の<br />「できたらいいなぁ」を実現します。
                        </p>
                       
                      </div>
                      <div class="about__btn item">
                        <a class="btn02" href="<?= esc_url(home_url('about')); ?>">会社紹介へ</a>
                      
                      </div>
                    </div>
                  </div>
                  </div>
                  <div class="about__institution">
                  <div class="about__img cover-slide">
                    <img class="img-zoom" src="<?= get_template_directory_uri(); ?>/images/institution.jpg" />
                  </div>
                  <div class="about__texts appear right">
                    <div class="about__texts-inner">
                      <div class="about__title item">
                        サービス・事業紹介
                      </div>
                      <div class="about__description item">
                      <p>
                      特別養護老人ホームから就労支援センターまで<br />
                        鹿児島市内5つのエリアに<?= esc_html($total_posts);?>の事業所を展開。<br />
                        </p>
                       
                      </div>
                      <div class="about__btn item">
                        <a class="btn02" href="<?= esc_url(home_url('service')); ?>">サービス・事業紹介へ</a>
                      
                      </div>
                    </div>
                  </div>
                  </div>
                </div>
              </section>