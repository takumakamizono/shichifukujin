<div class="sl-service__sec01">
                      <div class="sl-service__sec01-texts">
                        <div class="sl-service__sec01-texts-inner">
                        <?php if(get_field('title')): ?>
                          <h4 class="sl-service__sec01-title">
                          <?php the_field('title'); ?>
                          </h4>
                          <?php endif; ?>
                        
                          <div class="sl-service__sec01-desc">
                            <p>                       
                            <?php the_field('top_comment'); ?>
                            </p>
                          </div>
                        </div>  
                      </div>
                      <div class="sl-service__sec01-img">
                        <div class="sl-service__sec01-img-inner">
                      <?php if(has_post_thumbnail()): ?>
                     <?php the_post_thumbnail('full'); ?>    
                     <?php else: ?>       
                      <img src="<?php echo get_template_directory_uri(); ?>/images/cover_image.png" alt=""> 
                      <?php endif; ?>
                      </div>
                      </div>
                    </div>