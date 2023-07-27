<section class="interview">
<div class="section-titles">
                  <h2 class="main-title">
                    <?php the_title(); ?> 
                    さんにインタビューしました。         
                  </h2>                    
                </div>
    <div class="interview__inner">
    <div class="interview__topImg">
    <?php if(the_post_thumbnail()): ?>
     
                      <?php the_post_thumbnail("full"); ?>            
      <?php endif; ?>
</div>
        <?php if( get_field('youtube') ):?>   
 <div class="interview__video">
   <?php echo $embed_code = wp_oembed_get( get_field('youtube') ); ?>
</div>
<?php endif; ?>
      
       <div class="interview__content">
       <?php the_content(); ?>
      
        </div>
      
    </div>
</section>