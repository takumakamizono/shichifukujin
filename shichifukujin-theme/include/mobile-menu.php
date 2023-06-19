<nav class="mobile-menu">
<div class="logo item">
            
            <a href="<?= esc_url(home_url('/')); ?>">
            <div class="logo__img">
            <img  src="<?= get_template_directory_uri(); ?>/images/logo.png" alt="">
            </div>
            <div class="logo__tit">
              <span>社会福祉法人</span>
           <span>天佑会</span> 
           </div>
           </a>
          </div>
        <?php
                $args=[
                  'menu'=>'mobile-nav',
                  'menu_class'=>'mobile-menu__main',
                  'container'=>false,
                
                ];
                wp_nav_menu($args);
                
                ?>
           
      </nav>


