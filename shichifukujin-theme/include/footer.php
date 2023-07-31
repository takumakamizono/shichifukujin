<div class="footer appear up">
          <div class="footer__inner">
            <div class="footer__left">
            <div class="logo item">
            
            <a href="<?= esc_url(home_url('/')); ?>">
            <div class="logo__img">
            <img src="<?= get_template_directory_uri(); ?>/images/logo.png?v2" alt="">
            </div>
            <div class="logo__tit">
              <span>社会福祉法人</span>
           <span>天祐会</span> 
           </div>
           </a>
            </div>
            <ul class="footer__address">
              <li>〒890-0082 鹿児島県鹿児島市紫原５-13-18</li>
              <li>TEL : 099-256-2729</li>
              <li>FAX : 099-256-3729</li>
              <li>
                <a href="<?php the_field('insta01',1241); ?>"target="_blank" rel="noopener" class="footer__address-icon"><i class="fab fa-instagram-square"></i></a> 
                <a href="<?php the_field('facebook',1241); ?>"target="_blank" rel="noopener" class="footer__address-icon"> <i class="fab fa-facebook-square"></i></a>
              </li>
            </ul>    
            </div>
            <div class="footer__right">
              <div class="footer__right-links">
            <div class="footer__sdgs">
            <a href="<?php the_field('sdgs',1241); ?>"target="_blank" rel="noopener">
              <div class="footer__link-txts">
                <p class="footer__link-tit">社会福祉法人天祐会ＳＤＧｓ宣言</p>
                <div class="footer__link-desc">
                当法人は、「持続可能な開発目標（ＳＤＧｓ）」に賛同しています。
                </div>
              </div>
              <div class="footer__link-img">
              <img src="<?= get_template_directory_uri(); ?>/images/sdgs.png" alt="">
              </div>
              </a>
            </div>
            <div class="footer__kurumin">
              <a href="<?php the_field('kurumin',1241); ?>"target="_blank" rel="noopener">
              <div class="footer__link-txts">
                <p class="footer__link-tit">くるみんマークとは</p>
                <div class="footer__link-desc">
                「子育てサポート企業」として、厚生労働大臣の認定を受けた証です。
                </div>
              </div>
              <div class="footer__link-img">
              <img src="<?= get_template_directory_uri(); ?>/images/kurumin.png" alt="">
              </div>
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
        
