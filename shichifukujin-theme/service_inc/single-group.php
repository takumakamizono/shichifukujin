<?php get_template_part('service_inc/sec01'); ?>
<?php $post_slug = get_post_field('post_name', get_post());?>

<?php get_template_part('service_inc/sec-txtBocks'); ?>

<?php if($post_slug === 'lalachance'): ?>  
<?php get_template_part('service_inc/sec-price'); ?>
<?php endif; ?>  

 <?php get_template_part('service_inc/sec-try'); ?>
 <?php get_template_part('service_inc/sec-summary'); ?>
 <?php get_template_part('service_inc/service-access'); ?>
 