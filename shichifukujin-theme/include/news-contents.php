<div class="single__content-header">
  <div class="single__content-meta news__box">
                    <ul class="cat">
                       <?php categories_label(); ?>
                       </ul>
                    <time><?php the_time( get_option( 'date_format' ) ); ?></time>  
                    </div>
                    
                     <h2><?php the_title(); ?></h2>         
                    </div>
                    <div class="single__content-des">
                    <div class="single__content-des-img">
                      <?php if(the_post_thumbnail()): ?>
                      <?php the_post_thumbnail('medium'); ?>
                        <?php endif; ?>
                        </div>
                        <div class="single__content-text">
                      <?php the_content(); ?>
                       </div>
                    </div>
                   