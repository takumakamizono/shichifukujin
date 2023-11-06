<?php $post_slug = get_post_field('post_name', get_post());?>
<div class="summary-content">
<?php if($post_slug === 'lalachance'|| $post_slug === 'fanfan' ): ?>
   <?php get_template_part('service_inc/facility-slide'); ?>
   <?php endif; ?>
   <div class="summary-content__inner">
  
   
  
    <div class="summary-content__box">
    <div class="section-titles">
    <?php if($post_slug === 'school'): ?>
    <h4 class="main-title"><span>講座内容</span></h4>
    <?php else: ?>  
    <h4 class="main-title"><span>施設概要</span></h4>
    <?php endif; ?>  
  </div>
 
<table class="table01">
<tr>
<th><?php the_field('summary-tit01');?></th>
<td><?php the_field('summary-desc01');?></td>
</tr>
<tr>
<th><?php the_field('summary-tit02');?></th>
<td><?php the_field('summary-desc02');?></td>
</tr>
<tr>
<th><?php the_field('summary-tit03');?></th>
<td><?php the_field('summary-desc03');?></td>
</tr>
<?php if(get_field('summary-tit04')): ?>
<tr>
<th><?php the_field('summary-tit04');?></th>
<td><?php the_field('summary-desc04');?></td>
</tr>
<?php endif; ?>
<?php if(get_field('summary-tit05')): ?>
<tr>
<th><?php the_field('summary-tit05');?></th>
<td><?php the_field('summary-desc05');?></td>
</tr>
<?php endif; ?>
<?php if(get_field('summary-tit06')): ?>
<tr>
<th><?php the_field('summary-tit06');?></th>
<td><?php the_field('summary-desc06');?></td>
</tr>
<?php endif; ?>
<?php if(get_field('summary-tit07')): ?>
<tr>
<th><?php the_field('summary-tit07');?></th>
<td><?php the_field('summary-desc07');?></td>
</tr>
<?php endif; ?>
<?php if(get_field('summary-tit08')): ?>
<tr>
<th><?php the_field('summary-tit08');?></th>
<td><?php the_field('summary-desc08');?></td>
</tr>
<?php endif; ?>
<?php if(get_field('summary-tit09')): ?>
<tr>
<th><?php the_field('summary-tit09');?></th>
<td><?php the_field('summary-descw09');?></td>
</tr>
<?php endif; ?>
</table>
  </div>  

 </div>
 </div>
