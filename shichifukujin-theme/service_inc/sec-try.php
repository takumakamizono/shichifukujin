<?php if( get_field('try-quantity')): ?>
 <div class="try">
 <div class="section-titles">
   <h3 class="main-title"><span><?php the_field('try-quantity'); ?>つの取り組み</span></h3>            
 </div>
    <div class="try__inner">
        <div class="try__block">
            <div class="try__img">
                <div class="try__img-inner ">
                    <div class="try__circle bgBlue"></div>
                <span> <?php the_field('try-label01'); ?></span>
                </div>
            </div>
            <div class="try__txt">
                <h5><?php the_field('try-title01'); ?></h5>
                <p><?php the_field('try-desc01'); ?></p>
            </div>
        </div>
        <div class="try__block">
            <div class="try__img">
                <div class="try__img-inner">
                <div class="try__circle bgOrange"></div>
                <span><?php the_field('try-label02'); ?></span>
                </div>
            </div>
            <div class="try__txt">
                <h5><?php the_field('try-title02'); ?></h5>
                <p><?php the_field('try-desc02'); ?></p>
            </div>
        </div>
        <div class="try__block">
            <div class="try__img">
                <div class="try__img-inner">
                <div class="try__circle bgGreen"></div>
                <span><?php the_field('try-label03'); ?></span>
                </div>
            </div>
            <div class="try__txt">
                <h5><?php the_field('try-title03'); ?></h5>
                <p><?php the_field('try-desc03'); ?></p>
            </div>
        </div>
        <div class="try__block">
            <div class="try__img">
                <div class="try__img-inner">
                <div class="try__circle bgYellow"></div>
                <span><?php the_field('try-label04'); ?></span>
                </div>
            </div>
            <div class="try__txt">
                <h5><?php the_field('try-title04'); ?></h5>
                <p><?php the_field('try-desc04'); ?></p>
            </div>
        </div>
        <div class="try__block">
            <div class="try__img">
                <div class="try__img-inner">
                <div class="try__circle bgPink"></div>
                <span><?php the_field('try-label05'); ?></span>
                </div>
            </div>
            <div class="try__txt">
                <h5><?php the_field('try-title05'); ?></h5>
                <p><?php the_field('try-desc05'); ?></p>
            </div>
        </div>
        <?php if(get_field('try-label06')): ?>
        <div class="try__block">
            <div class="try__img">
                <div class="try__img-inner">
                <div class="try__circle bgPink"></div>
                <span><?php the_field('try-label06'); ?></span>
                </div>
            </div>
            <div class="try__txt">
                <h5><?php the_field('try-title06'); ?></h5>
                <p><?php the_field('try-desc06'); ?></p>
            </div>
        </div>
        <?php endif; ?>

    </div>

 </div>
 <?php endif; ?>