<?php $post_slug = get_post_field('post_name', get_post());?>
<?php get_template_part('service_inc/sec01'); ?>
<?php if($post_slug === 'yokana'|| $post_slug === 'servicecenter'): ?>
<?php get_template_part('service_inc/sec-program'); ?>
<?php endif; ?>

<?php if($post_slug === 'residence'||$post_slug === 'larashouse'): ?>
<?php get_template_part('service_inc/sec-txtBocks'); ?>
<?php endif; ?>
<?php if($post_slug === 'chao'): ?>
<?php get_template_part('service_inc/sec-cardinfo'); ?>
<?php endif; ?>
<?php if($post_slug === 'yokana'||$post_slug === 'servicecenter'): ?>
 <?php get_template_part('service_inc/sec-try'); ?>
 <?php endif; ?>
 <?php if($post_slug === 'servicecenter'): ?>
 <?php get_template_part('service_inc/experience-class'); ?>
 <?php get_template_part('service_inc/sec-txtBocks'); ?>      
 <?php endif; ?>
 <?php get_template_part('service_inc/sec-summary'); ?>
 <?php get_template_part('service_inc/service_access'); ?>
 