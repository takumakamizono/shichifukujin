<div class="footer appear up">
          <div class="footer__inner">
            <div class="footer__left">
            <div class="logo item">
            
            <a href="<?= esc_url(home_url('/')); ?>">
            <div class="logo__img">
            <img src="<?= get_template_directory_uri(); ?>/images/logo.png" alt="">
            </div>
            <div class="logo__tit">
              <span>社会福祉法人</span>
           <span>天佑会</span> 
           </div>
           </a>
            </div>
            <ul class="footer__address">
              <li>〒890-0082 鹿児島県鹿児島市紫原５-13-18</li>
              <li>TEL : 099-256-2729</li>
              <li>FAX : 099-256-3729</li>
              <li>
                <a href="<?php the_field('insta01',1241); ?>" class="footer__address-icon"><i class="fab fa-instagram-square"></i></a> <a href="<?php the_field('facebook',1241); ?>" class="footer__address-icon"> <i class="fab fa-facebook-square"></i></a></li>
              <li></li>
            </ul>    
            </div>
            <div class="footer__right">
              <div class="footer__right-imgs">
            <div class="footer__img">
              <a href="<?php the_field('sdgs',1241); ?>"target="_blank" rel="noopener">
              <img src="<?= get_template_directory_uri(); ?>/images/sdgs.png" alt="">
              </a>
            </div>
            <div class="footer__img">
              <a href="<?php the_field('kurumin',1241); ?>"target="_blank" rel="noopener">
              <img src="<?= get_template_directory_uri(); ?>/images/kurumin.png" alt="">
              </a>
            </div>
            </div>
          </div> 
        </div>
        
        <nav class="footer__nav">
          <?php
                $args=[
                  'menu'=>'footer-nav',
                  'menu_class'=>'footer__ul appear left',
                  'container'=>false,
                
                ];
                wp_nav_menu($args);
                
                ?>     
           </nav>
        
        <div class="footer__copyright item">Copyright&copy; 社会福祉法人天祐会.<span> All Rights Reserved.</span> </div>
        <div id="page_top"><a href="#"></a></div>
        </div>
        
