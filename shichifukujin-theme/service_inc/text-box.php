<div class="text-box">   
                      <h4 class="text-box__title">
                        <span><?php the_field('text-title01');?></span>
                     </h4>
                     <div class="text-box__desc">
                      <div><?php the_field('text-desc01');?></div>
                     </div>
                </div>
                <?php if(get_field('text-title02')):?>       
<div class="text-box">
                      <h4 class="text-box__title">
                        <span><?php the_field('text-title02');?></span>
                     </h4>
                     <div class="text-box__desc">
                      <div><?php the_field('text-desc02');?></div>
                     </div>    
                </div>
                <?php endif; ?>
