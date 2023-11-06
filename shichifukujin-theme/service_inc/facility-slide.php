<?php if(get_field('slide01')): ?>
<div class="section-titles">
   <h3 class="main-title"><span>施設の紹介</span></h3>            
 </div>
 <div class="slide-items__wrap">
    <ul class="slider">
  <li class="slider__li">
    <img src="<?php the_field('slide01');?>" alt="">
    <p><?php the_field('title01');?></p>
</li>
  <li class="slider__li">
    <img src="<?php the_field('slide02');?>" alt="">
    <p><?php the_field('title02');?></p>
</li>
  <li class="slider__li">
    <img src="<?php the_field('slide03');?>" alt="">
     <p><?php the_field('title03');?></p>
</li>
  <li class="slider__li">
    <img src="<?php the_field('slide04');?>" alt="">
     <p><?php the_field('title04');?></p>
</li>
  <li class="slider__li">
    <img src="<?php the_field('slide05');?>" alt="">
     <p><?php the_field('title05');?></p>
</li>
<?php if(get_field('slide06')): ?>
  <li class="slider__li">
    <img src="<?php the_field('slide06');?>" alt="">
     <p><?php the_field('title06');?></p>
</li>
<?php endif; ?>
<?php if(get_field('slide07')): ?>
  <li class="slider__li">
    <img src="<?php the_field('slide07');?>" alt="">
     <p><?php the_field('title07');?></p>
</li>
<?php endif; ?>
<?php if(get_field('slide08')): ?>
  <li class="slider__li">
    <img src="<?php the_field('slide08');?>" alt="">
     <p><?php the_field('title08');?></p>
</li>
<?php endif; ?>
<?php if(get_field('slide09')): ?>
  <li class="slider__li">
    <img src="<?php the_field('slide09');?>" alt="">
     <p><?php the_field('title09');?></p>
</li>
<?php endif; ?>
<?php if(get_field('slide10')): ?>
  <li class="slider__li">
    <img src="<?php the_field('slide10');?>" alt="">
     <p><?php the_field('title10');?></p>
</li>
<?php endif; ?>
</ul>
  </div>
  <?php endif; ?>
  <?php if(get_field('planimg01')): ?>
<div class="surround-contents__box">
<h4 class="sub-title ">
                        <span>施設の館内図</span>
                     </h4>
    <ul class="image-display">
    
      <li class="image-display__img">
        <img src="<?php the_field('planimg01');?>" alt="">
      </li>
      
      <?php if(get_field('planimg02')): ?>
      <li class="image-display__img">
        <img src="<?php the_field('planimg02');?>" alt="">
      </li>
      <?php endif; ?>
      
    </ul>
    </div>
    <?php endif; ?>
   