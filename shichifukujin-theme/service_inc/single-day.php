<?php $post_slug = get_post_field('post_name', get_post());?>
<?php get_template_part('service_inc/sec01'); ?>

<?php if($post_slug === 'chao'): ?>
 <?php get_template_part('service_inc/sec-try'); ?>
<?php get_template_part('service_inc/sec-cardinfo'); ?>
<?php endif; ?>

<?php if($post_slug === 'yokana'||$post_slug === 'servicecenter'||$post_slug === 'larashouse'): ?>
 <?php get_template_part('service_inc/sec-try'); ?>
 <?php endif; ?>
<?php get_template_part('service_inc/image-box'); ?>   
<?php if($post_slug === 'servicecenter'): ?>
 <?php get_template_part('service_inc/experience-class'); ?>  
 <?php endif; ?>
 <?php get_template_part('service_inc/sec-summary'); ?>
 <?php get_template_part('service_inc/googlemap-api'); ?>
 <?php get_template_part('service_inc/service-access'); ?>
 