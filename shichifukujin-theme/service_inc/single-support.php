<?php $post_slug = get_post_field('post_name', get_post());?>
<?php get_template_part('service_inc/sec01'); ?>
<?php get_template_part('service_inc/sec-cardinfo'); ?>
<?php if($post_slug === 'support'): ?>
<?php get_template_part('service_inc/sec-txtBocks'); ?>
<?php endif; ?>
 <?php get_template_part('service_inc/sec-summary'); ?>
 <?php get_template_part('service_inc/service-access'); ?>
 