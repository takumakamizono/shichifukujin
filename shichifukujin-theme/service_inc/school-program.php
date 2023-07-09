<div class="school-content">
<div class="school-content__inner">
<div class="text-box">   
<div class="section-titles">
                      <h4 class="main-title">
                        <span><?php the_field('school-program-title01');?></span>
                     </h4>
                     </div>
                     <div class="text-box__desc">
                   <?php the_field('school-program-desc01');?>
                     </div>
                </div>
                <div class="img-box">
                <ul class="school-programImg">
   
      <li class="school-programImg__img">
        <img src="<?php the_field('school-program-topimg');?>" alt="">
      </li>
   
      <?php if(get_field('school-program-img01')): ?>
      <li class="school-programImg__img">
        <img src="<?php the_field('school-program-img01');?>" alt="">
      </li>
      <?php endif; ?>
      <?php if(get_field('school-program-img02')): ?>
      <li class="school-programImg__img">
        <img src="<?php the_field('school-program-img02');?>" alt="">
      </li>
      <?php endif; ?>
      <?php if(get_field('school-program-img03')): ?>
      <li class="school-programImg__img">
        <img src="<?php the_field('school-program-img03');?>" alt="">
      </li>
      <?php endif; ?>
    </ul>
                </div>

                   
<div class="text-box">
               
                     <div class="text-box__desc">
                   <div class="school-point"><?php the_field('school-program-desc02');?></div>
                     </div>    
                </div>
              

</div>
</div>
