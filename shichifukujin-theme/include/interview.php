<section class="interview">
<div class="section-titles">
                  <h2 class="main-title">
                    <span><?php the_title(); ?></span>    
                    さんにインタビューしました。         
                  </h2>                    
                </div>
    <div class="interview__inner">
        <div class="interview__content">
        <div class="interview__content-inner">
        <div class="interview__img">
        <?php if( get_field('img01')): ?>
            <img src="<?php the_field('img01'); ?>" alt="">
            <?php else: ?>
            <img src="<?php echo get_template_directory_uri(); ?>/images/cover_image.png" alt="">
            <?php endif; ?>

        </div>
        <div class="interview__texts">          
            <div class="interview__texts-inner">
            <div class="interview__texts-desc">
                <h3 class="interview__textsTit"><?php the_field('question01'); ?></h3>
       <p><?php the_field('answer01'); ?></p>
          </div>
          </div>
          </div>
        </div>
        </div>
        <div class="interview__content">
        <div class="interview__texts-desc">
<h3 class="interview__textsTit"><?php the_field('question02'); ?></h3>
<p><?php the_field('answer02'); ?></p>
</div>
       </div>
       <div class="interview__content">
        <div class="interview__content-inner">
        <div class="interview__img">
            
        <?php if( get_field('img02')): ?>
            <img src="<?php the_field('img02'); ?>" alt="">
            <?php else: ?>
            <img src="<?php echo get_template_directory_uri(); ?>/images/cover_image.png" alt="">
            <?php endif; ?>
        </div>
        <div class="interview__texts">          
            <div class="interview__texts-inner">
                <div class="interview__texts-desc">

                <h3 class="interview__textsTit"><?php the_field('question03'); ?></h3>
       <p><?php the_field('answer03'); ?></p>
       </div>
          </div>
          </div>
        </div>
        </div>
        <div class="interview__content">
        <div class="interview__texts-desc">
<h3 class="interview__textsTit"><?php the_field('question04'); ?></h3>
<p><?php the_field('answer04'); ?></p>
</div>
       </div> 
        <div class="interview__content">
        <div class="interview__content-inner">
        <div class="interview__img">
        <?php if( get_field('img03')): ?>
            <img src="<?php the_field('img03'); ?>" alt="">
            <?php else: ?>
            <img src="<?php echo get_template_directory_uri(); ?>/images/cover_image.png" alt="">
            <?php endif; ?>
        </div>
        <div class="interview__texts">          
            <div class="interview__texts-inner">
            <?php if( get_field('question05')): ?>
                <div class="interview__texts-desc">           
                <h3 class="interview__textsTit"> <?php the_field('question05'); ?></h3>          
       <p><?php the_field('answer05'); ?></p>
       </div>
       <?php endif; ?>
            <?php if( get_field('question06')): ?>
                <div class="interview__texts-desc">           
                <h3 class="interview__textsTit"> <?php the_field('question06'); ?></h3>          
       <p><?php the_field('answer06'); ?></p>
       </div>
       <?php endif; ?>
       <?php if( get_field('question07')): ?>
                <div class="interview__texts-desc">

                <h3 class="interview__textsTit"> <?php the_field('question07'); ?></h3>
       <p><?php the_field('answer07'); ?></p>
       </div>
       <?php endif; ?>
       <?php if( get_field('question08')): ?>
                <div class="interview__texts-desc">

                <h3 class="interview__textsTit"><?php the_field('question08'); ?></h3>
       <p><?php the_field('answer08'); ?></p>
       </div>
       <?php endif; ?>
       <?php if( get_field('question09')): ?>
                <div class="interview__texts-desc">

                <h3 class="interview__textsTit"><?php the_field('question09'); ?></h3>
       <p><?php the_field('answer09'); ?></p>
       </div>
       <?php endif; ?>
       <?php if( get_field('question10')): ?>
                <div class="interview__texts-desc">

                <h3 class="interview__textsTit"><?php the_field('question10'); ?></h3>
       <p><?php the_field('answer10'); ?></p>
       </div>
       <?php endif; ?>
       <?php if( get_field('question11')): ?>
                <div class="interview__texts-desc">

                <h3 class="interview__textsTit"><?php the_field('question11'); ?></h3>
       <p><?php the_field('answer11'); ?></p>
       </div>
       <?php endif; ?>
          </div>
          </div>
        </div>
        </div>



    </div>

</section>