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
<?php if($post_slug === 'yokana'||$post_slug === 'servicecenter'||$post_slug === 'larashouse'): ?>
 <?php get_template_part('service_inc/sec-try'); ?>
 <?php endif; ?>
 <?php if($post_slug === 'servicecenter'): ?>
 <?php get_template_part('service_inc/experience-class'); ?>
    
 <?php endif; ?>
 <?php get_template_part('service_inc/sec-summary'); ?>
 <?php get_template_part('service_inc/googlemap-api'); ?>
 <?php get_template_part('service_inc/service-access'); ?>
 <!-- <?php echo do_shortcode('[custom_map id="map1" lat="31.590504" lng="130.542486" zoom="18" title="マップ1"]'); ?> -->
 