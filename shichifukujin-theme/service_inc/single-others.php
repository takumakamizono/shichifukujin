<?php $post_slug = get_post_field('post_name', get_post());?>
<?php get_template_part('service_inc/sec01'); ?>
<?php if($post_slug === 'residence'): ?>
<?php get_template_part('service_inc/sec-try'); ?>
<?php get_template_part('service_inc/text-box'); ?>
<?php get_template_part('service_inc/sec-summary'); ?>

<?php endif; ?>
<?php if($post_slug === 'support'): ?>
<?php get_template_part('service_inc/sec-cardinfo'); ?>
<?php get_template_part('service_inc/text-box'); ?>
<?php get_template_part('service_inc/image-box'); ?>   
<?php get_template_part('service_inc/banner'); ?>
<?php get_template_part('service_inc/sec-summary'); ?>
<?php endif; ?>
<?php if($post_slug === 'community'): ?>
<?php get_template_part('service_inc/text-box'); ?>
<?php get_template_part('service_inc/image-box'); ?>     

    <?php endif; ?>    

 <?php if($post_slug === 'school'): ?>
    <?php get_template_part('service_inc/school'); ?>
<?php endif; ?>
<?php if($post_slug !== 'community'): ?>
 <?php get_template_part('service_inc/service-access'); ?>

 <?php endif; ?>
 