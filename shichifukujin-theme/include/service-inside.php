
<?php $post_slug = get_post_field('post_name', get_post());?>


<div id="post-<?php the_ID(); ?>" class="service__item">
<div class="service__img">
                      <?php if(has_post_thumbnail()): ?>
                     <?php the_post_thumbnail(); ?>    
                     <?php else: ?>       
                      <img src="<?php echo get_template_directory_uri(); ?>/images/cover_image.png" alt=""> 
                      <?php endif; ?>
           </div>
<?php if( $post_slug ==='community'): ?>
  <div class="service__contents">
              <div class="service__titles">
                    <p class="service__subtitle"><?php the_field('kind'); ?></p>            
                </div>
                <div class="service__location">
                  <p><?php the_field('community-location01');?>
                  <span>TEL:<?php the_field('community-tel01');?></span>     
                  </p>
                  <p><?php the_field('community-location02');?>
                  <span>TEL:<?php the_field('community-tel02');?></span>     
                  </p>
                  <p><?php the_field('community-location03');?>
                  <span>TEL:<?php the_field('community-tel03');?></span>     
                  </p>
                  <p><?php the_field('community-location04');?>
                  <span>TEL:<?php the_field('community-tel04');?></span>     
                  </p>
                </div>
               
                <div class="service__btn">
                <?php if (get_field('onoff') ): ?>
                  <a class="btn btn-off">詳細はこちら</a>
                <?php  else: ?> 
                  <a class="btn shadow" href="<?php the_permalink(); ?>">詳細はこちら</a>
                  <?php endif;?>
                    </div> 

  <?php else:?>
            <div class="service__contents">
              <div class="service__titles">
                    <p class="service__subtitle"><?php the_field('kind'); ?></p>
                    <p class="service__title"><?php the_title(); ?></p>              
                </div>
                <div class="service__location">
                  <p><?php the_field('location');?></p>

                  <?php if (get_field('access-tel') ): ?>
                  <p class="service__location-tels"> 
                  <span>TEL:<?php the_field('access-tel');?></span>
                  <?php if (get_field('access-fax') ): ?>
                  <sapn>FAX:<?php the_field('access-fax');?></span>      
                  <?php endif;?>
                  </p>  
                  <?php endif;?>
          
                </div>
               
                <div class="service__btn">
                <?php if (get_field('onoff') ): ?>
                  <a class="btn btn-off">詳細はこちら</a>
                <?php  else: ?> 
                  <a class="btn shadow" href="<?php the_permalink(); ?>">詳細はこちら</a>
                  <?php endif;?>
                    </div> 
                    <?php endif;?>    
                    </div>
                    
                  </div>
