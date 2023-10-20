<?php if(get_field('img01')): ?>
<div class="image-box">
<?php if(get_field('sec-title')): ?>
  <h4 class="image-box__title"><span><?php the_field('sec-title');?></span> </h4>
  <?php endif; ?>
  <div class="image-box__inner">
  
<?php if(get_field('img01')): ?>
                        <div class="image-box__img">
                          <img src="<?php the_field('img01');?>" alt="">
                          <p><?php the_field('image-title01');?></p>
                        </div>
                        <?php endif; ?>
                        <?php if(get_field('img02')): ?>
                        <div class="image-box__img">
                          <img src="<?php the_field('img02');?>" alt="">
                          <p><?php the_field('image-title02');?></p>
                        </div>
                        <?php endif; ?>
                        <?php if(get_field('img03')): ?>
                        <div class="image-box__img">
                          <img src="<?php the_field('img03');?>" alt="">
                          <p><?php the_field('image-title03');?></p>
                       </div>
                       <?php endif; ?>
                        <?php if(get_field('img04')): ?>
                        <div class="image-box__img">
                          <img src="<?php the_field('img04');?>" alt="">
                          <p><?php the_field('image-title04');?></p>
                       </div>
                       <?php endif; ?>
                        <?php if(get_field('img05')): ?>
                        <div class="image-box__img">
                          <img src="<?php the_field('img05');?>" alt="">
                          <p><?php the_field('image-title05');?></p>
                       </div>
                       <?php endif; ?>
                        <?php if(get_field('img06')): ?>
                        <div class="image-box__img">
                          <img src="<?php the_field('img06');?>" alt="">
                          <p><?php the_field('image-title06');?></p>
                       </div>
                       <?php endif; ?>

                      </div>
                      </div>
                    
                      <?php endif; ?>