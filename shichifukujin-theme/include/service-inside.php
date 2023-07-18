<div id="post-<?php the_ID(); ?>" class="service__item">
<div class="service__img">
                      <?php if(has_post_thumbnail()): ?>
                     <?php the_post_thumbnail('full'); ?>    
                     <?php else: ?>       
                      <img src="<?php echo get_template_directory_uri(); ?>/images/cover_image.png" alt=""> 
                      <?php endif; ?>
           </div>

            <div class="service__contents">
              <div class="service__titles">
                    <p class="service__subtitle"><?php the_field('kind'); ?></p>
                    <p class="service__title"><?php the_title(); ?></p>              
                </div>
                <div class="service__location">
                  <?php the_field('location');?>
                </div>
               
                <div class="service__btn">
                <?php if (get_field('onoff') ): ?>
                  <a class="btn btn-off">施設詳細はこちら</a>
                <?php  else: ?> 
                  <a class="btn shadow" href="<?php the_permalink(); ?>">施設詳細はこちら</a>
                  <?php endif;?>
                    </div>
                   
              
                    <div class="service__desc">
                      <p><?php the_field('top_comment'); ?></p>
                    </div>
                   
                    </div>
                 
          
                  </div>
