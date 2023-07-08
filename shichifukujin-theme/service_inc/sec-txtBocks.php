<?php $post_slug = get_post_field('post_name', get_post());?>
   <div class="table-blocks">
    <div class="table-blocks__inner">
    <?php get_template_part('service_inc/text-box'); ?>
    <?php if(!$post_slug === 'support'): ?>
    <?php get_template_part('service_inc/image-box'); ?>   
    <?php endif; ?>  
</div>
</div>