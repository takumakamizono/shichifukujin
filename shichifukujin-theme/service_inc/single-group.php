
<?php get_template_part('service_inc/sec01'); ?>
<?php $post_slug = get_post_field('post_name', get_post());?>

<?php get_template_part('service_inc/text-box'); ?>
<?php get_template_part('service_inc/sec-try'); ?>
<?php if($post_slug === 'lalachance' || $post_slug === 'fanfan' ): ?>
   <?php get_template_part('service_inc/facility-slide'); ?>
   <?php get_template_part('service_inc/sec-price'); ?>
   <?php endif; ?>

<?php get_template_part('service_inc/image-box'); ?>   
  

 <?php get_template_part('service_inc/sec-summary'); ?>
 <?php get_template_part('service_inc/service-access'); ?>