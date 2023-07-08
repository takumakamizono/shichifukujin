<div class="school-content__box">  
<div class="school-content__box-head"> 
                      <h4 class="school-content__box-leftTitle">
                        <span><?php the_field('school-institution-tit01');?></span>
                     </h4>
                     </div>
                     <div class="school-content__box-desc">
                   <?php the_field('school-institution-desc01');?>
                     </div>
                </div>
                <?php if(get_field('school-institution-tit02')):?>       
<div class="school-content__box">
<div class="school-content__box-head">
                      <h4 class="school-content__box-leftTitle">
                        <span><?php the_field('school-institution-tit02');?></span>
                     </h4>
                     </div>
                     <div class="school-content__box-desc">
                   <?php the_field('school-institution-desc02');?>
                     </div>    
                </div>
                <?php endif; ?>
