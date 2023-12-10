<?php
// Template Name: ご利用までの流れ
// Description:ご利用までの流れについてのテンプレート
// Template Post Type: page

?>
<!DOCTYPE html>
<html lang="ja">
  <head>
  <?php get_header();?>
  </head>
  <body>
    <div id="global-container">
      <div id="container">
        <div class="mobile-menu__cover"></div>
        <div class="nav-trigger"></div>
        <header class="header">
        <?php get_template_part('include/header'); ?>
        </header>
        <div id="content">
        <?php get_template_part('include/hero'); ?>
          <div id="main-content">

            <main>
            <?php  get_template_part('include/warning');?>
            <?php if(have_posts()): ?>
            <?php while(have_posts()):the_post(); ?>
            <?php get_template_part('include/breadcrumb'); ?> 
         
               <div class="page-procedure">
                
                <h3 class="page-procedure__mainTit">施設とは<br><span>「家庭的な環境＋プロの介護力」</span>が備わった場所です</h3>
                <div class="page-procedure__inner">
                  <div class="page-procedure__wrap">
                  <div class="page-procedure__block">
                 
             
                  <div class="page-procedure__block-inner">
                  <div class="page-procedure__block-desc">
                  <div class="section-titles">
                  <h4 class="main-title">
                    <span>入居施設サービスとは？</span>             
                  </h4>                    
                </div>
                    <p> 施設は、「家庭的な環境+プロの介護力」が備わっており、その人らしい暮らしをつくっていける場所です。</p>
<p> 施設のイメージが悪いと敬遠されがちですが、 一度入居してみると施設での生活を満喫していらっしゃる利用者様がほとんどです。 ご家族様からも
「迷ったけど施設にお願いした方が良かったです」というお言葉を頂くことも多いです。</p>
<p>ご家族様の中には、施設を利用することに対して「介護放棄」 のような暗くマイナスのイメージを持っている方も多く見受けられますが、 施設入居は、
利用者様とご家族様にとって良い方法を見つけていくためのひとつの選択肢としてお考えいただけたらと思います。</p>
<p>一度見学にいらっしゃるとガラッとイメージが変わると思います。</p>
                    </div>
                    <div class="page-procedure__block-img">
                    <img src="<?= get_template_directory_uri(); ?>/images/procedure01.png" alt="">
                    </div>
                  </div>
                  </div>

                  <div class="page-procedure__block">
                
                 
                  <div class="page-procedure__block-inner">
                  <div class="page-procedure__block-desc">
                  <div class="section-titles">
                  <h4 class="main-title">
                    <span>通いのサービスとは？</span>             
                  </h4>                    
                </div>
                    <p>自宅から通いながら自分ライフを満喫できるだけ長くご自宅での生活が継続出来るように様々な角度から支援させていただきます。</p>
<p>利用者様がデイサービスに通っている時間はご家族様は自分の時間を使うことで、介護との両立が可能です。</p>
<p>何よりもご家族様が心にゆとりをもち、体も気持ちも元気でいてくださることが大事ですので、息抜きショートステイを大いに活用してください｡</p>
                    </div>
                    <div class="page-procedure__block-img">
                    <img src="<?= get_template_directory_uri(); ?>/images/procedure02.png?v2" alt="">
                    </div>
                  </div>
                  </div>
                  </div>
                  <div class="page-procedure__flow">
                  <div class="section-titles">
                  <h4 class="main-title">
                    <span>施設ご利用までの流れ</span>             
                  </h4> 
                </div>
                <div class="page-procedure__flow-inner">
                <div class="page-procedure__block-descFlow">
<p> 特別養護老人ホーム 七福神、特別養護老人ホームシルクロード七福神、ララシャンス七福神、ふぁん2テラス七福神の利用をお考えの方に
向けた、 入居までの流れをご紹介いたします。</p>
</div>
<div class="page-procedure__block-flowStep">
  <div class="page-procedure__block-flowOrder">
    <div class="page-procedure__block-flowNumber"><span>STEP1</span> <span>問い合わせ</span></div>
<p>各施設の窓口または居宅介護支援事業所にお電話ください。 サービス内容や各種料金のご相談等など、お気軽にご連絡ください。</p>
</div>
</div>
<div class="page-procedure__block-flowStep">
  <div class="page-procedure__block-flowOrder">
    <div class="page-procedure__block-flowNumber"><span>STEP2</span> <span>見学</span></div>
<p>施設内を見学していただきます。 実際に生活するイメージがわいてきます。</p>
</div>
</div>
<div class="page-procedure__block-flowStep">
  <div class="page-procedure__block-flowOrder">
    <div class="page-procedure__block-flowNumber"><span>STEP3</span> <span>サービス前顔合わせ</span></div>
<p>こちらから、 入居前にご自宅や入院先へお伺いし、スタッフと顔合わせを行います。</p>
</div>
</div>
<div class="page-procedure__block-flowStep">
  <div class="page-procedure__block-flowOrder">
    <div class="page-procedure__block-flowNumber"><span>STEP4</span> <span>サービス日決定・契約</span></div>
<p>具体的な入居日をご相談し契約。</p>
</div>
</div>
<div class="page-procedure__block-flowStep">
  <div class="page-procedure__block-flowOrder">
    <div class="page-procedure__block-flowNumber"><span>STEP5</span> <span>サービス開始</span></div>
<p>新しい生活がスタートします。</p>
</div>
</div>
</div>

                </div>
                </div>
               </div>
              
            <?php endwhile; ?>
            <?php endif; ?>
            
             
         
            <?php get_template_part('include/contact'); ?>
            
            </main>
          
          </div>
        </div>
        <?php get_template_part('include/footer'); ?>
  
      </div>
      <?php get_template_part('include/mobile-menu');?>
    </div>
    <?php wp_footer(); ?>
  </body>
</html>
