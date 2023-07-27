<div id="post-<?php the_ID(); ?>"<?php post_class('list-interview__item ') ?>>
    
<a href="<?php the_permalink(); ?>">
    <div class="list-interview__img">
        <?php if(has_post_thumbnail()): ?>
            <?php the_post_thumbnail('full'); ?>    
            <?php else: ?>       
                <img src="https://placehold.jp/440x180.png" alt=""> 
                <?php endif; ?>
            </div>
        </a>
        <div class="list-interview__contents">   
        <p class="list-interview__occu"><span><?php the_field('occu'); ?></span><span><?php the_field('joined-year'); ?>入社</span></p>
        <p class="list-interview__name"><?php the_title(); ?></p>
        </div>
</div>

