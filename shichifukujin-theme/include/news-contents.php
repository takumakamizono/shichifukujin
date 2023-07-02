<div class="single__content-header">
                    <time><?php the_time( get_option( 'date_format' ) ); ?></time>  
                    
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
                    <div class="postLinks">
                      <div class="postLinks__link postLinks__link-prev"><?php previous_post_link('戻る%link','%title',true,'') ?></div>
                      <div class="postLinks__link postLinks__link-next"><?php next_post_link('次へ%link','%title',true,'') ?></div>
                    </div>