<section class="family-page">
  <div class="family-page__inner">
<div class="section-titles">
                  <h2 class="main-title">
                    <span>ご入居様ご家族ページ</span>                
                  </h2>         
                </div>
       <div class="family-page__btn">
       <?php if (get_field('onoff',1241)): ?>
        <a class="btn shadow02 btn-off" href="">ご家族ページは準備中です。</a>
        <?php  else: ?> 
        <a class="btn shadow02" href="<?php the_field('url',1241); ?>">ご家族ページはコチラから</a>
        <?php endif;?>
        </div>
        </div>
</section>