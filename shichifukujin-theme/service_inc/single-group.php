<?php get_template_part('service_inc/sec01'); ?>
<?php $post_slug = get_post_field('post_name', get_post());?>
<?php if($post_slug === 'lalachance'): ?>
<?php get_template_part('service_inc/sec-txtBocks'); ?>
<?php elseif($post_slug === 'orange'): ?>  
<?php get_template_part('service_inc/sec-listBocks'); ?>
    <?php endif; ?>  
<?php if($post_slug === 'lalachance'): ?>  
<?php get_template_part('service_inc/sec-price'); ?>
<?php endif; ?>  
 <?php get_template_part('service_inc/sec-summary'); ?>
 <?php get_template_part('service_inc/service_access'); ?>
 