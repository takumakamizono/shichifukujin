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
              <li>〒890-0082　鹿児島市紫原５-１３-１８</li>
              <li>TEL : ０９９−２５６−２７２９</li>
              <li>FAX : ０９９−２５６−３７２９</li>
            </ul>    
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
            </div>
            <div class="footer__right">
            <div class="footer__img">
              <a href="https://www.city-kirishima.jp/"target="_blank" rel="noopener">
              <img src="https://placehold.jp/500x280.png" alt="">
              </a>
            </div>
       
          </div> 
        </div>
        <div class="footer__copyright item">Copyright&copy; 社会福祉法人天祐会.<span> All Rights Reserved.</span> </div>
        <div id="page_top"><a href="#"></a></div>
        </div>
        
