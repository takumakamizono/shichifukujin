<?php $post_slug = get_post_field('post_name', get_post());?>
<?php get_template_part('service_inc/sec01'); ?>
<?php if($post_slug === 'support'): ?>
<?php get_template_part('service_inc/philosophy'); ?>
<?php get_template_part('service_inc/sec-cardinfo'); ?>
<?php get_template_part('service_inc/sec-txtBocks'); ?>
<?php get_template_part('service_inc/banner'); ?>
<?php get_template_part('service_inc/sec-summary'); ?>
<?php endif; ?>
<?php if($post_slug === 'orange'): ?>
<?php get_template_part('service_inc/sec-txtBocks'); ?>
<?php get_template_part('service_inc/sec-summary'); ?>
    <?php endif; ?>    

 <?php if($post_slug === 'school'): ?>
    <?php get_template_part('service_inc/school'); ?>
<?php endif; ?>
 <?php get_template_part('service_inc/service-access'); ?>

 