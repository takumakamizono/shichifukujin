<div class="header__inner appear up">
            <h1 class="logo item">
            
              <a href="<?= esc_url(home_url('/')); ?>">
              <div class="logo__img">
              <img  src="<?= get_template_directory_uri(); ?>/images/logo.png" alt="logo画像">
              </div>
              <div class="logo__tit">
                <span>社会福祉法人</span>
             <span>天佑会</span> 
             </div>
             </a>
          </h1>
            <nav class="header__nav">
            <?php
                $args=[
                  'menu'=>'header-nav',
                  'menu_class'=>'header__ul appear left',
                  'container'=>false,
                
                ];
                wp_nav_menu($args);
                
                ?>     
            </nav>
            <button class="mobile-menu__btn">
              <span></span>
              <span></span>
              <span></span>
              <img src="<?= get_template_directory_uri(); ?>/images/txt_menu01.png" alt="">
            </button>
           
          </div>