<div class="sec-price__box">
  <table class="table04 width-auto ">
  <tr>
    <td><?php the_field('program01'); ?></td>
    <td><?php the_field('program02');?></td>
    <td><?php the_field('program03');?></td>
    <td><?php the_field('program04');?></td>
    <?php if(get_field('program05')): ?>
    <td><?php the_field('program05');?></td>
    <?php endif; ?>
    <?php if(get_field('program06')): ?>
    <td><?php the_field('program06');?></td>
    <?php endif; ?>
    <?php if(get_field('program07')): ?>
    <td><?php the_field('program07');?></td>
    <?php endif; ?>
    <?php if(get_field('program08')): ?>
    <td><?php the_field('program08');?></td>
    <?php endif; ?>
    
  </tr> 
</table >
</div>