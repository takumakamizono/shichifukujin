<?php if(get_field('text-title01')): ?>
  <div class="text-box">
<div class="text-box__wrap">   
<h4 class="text-box__title">
                        <span><?php the_field('text-title01');?></span>
                     </h4>
 <div class="text-box__inner">
         <div class="text-box__desc">
                      <?php the_field('text-desc01');?>
                     </div>
                </div>
                </div>
                <?php if(get_field('text-title02')):?>       
<div class="text-box__wrap">
                      <h4 class="text-box__title">
                        <span><?php the_field('text-title02');?></span>
                     </h4>
                     <div class="text-box__inner">
                     <div class="text-box__desc">
                      <?php the_field('text-desc02');?>
                     </div>    
                     
                    </div>
                    </div>
              
               
               
                <?php endif; ?>
                
                </div>
                <?php endif; ?>
