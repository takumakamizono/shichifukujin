<?php
// Template Name: お困りごとマップ
// Description:お困りごとマップのテンプレート
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
          
                <div class="page-guide">
                  <div class="page-guide__inner">
                  <div class="page-guide__topTxt">
                  <div class="section-titles">
   <h3 class="main-title"><span>七福神がお手伝いできること</span></h3>            
 </div>
                    <p>利用者様は、もと会社員、公務員、教師､弁護士、役員、自営業、 スポーツ選手、自衛官、警察官、主婦等々、色々な現役時代を過ごしてきた方々がたくさんいらっしゃっています。
利用者様･ご家族様のお困りごとに対して、七福神がお手伝いできることをガイドマップにしました。 それぞれのお困りごとに合ったサービスをご提案いたします。</p>
                  </div>
                  <div class="page-guide__blocks">

 <div class="page-guide__blocks-inner">
 <div class="page-guide__box"> 
<div class="page-guide__box-head">
                      <h4 class="page-guide__box-leftTitle">
                        <span>利用者様のお困りごと その１</span>
                     </h4>
                     </div>
                     <div class="page-guide__box-desc">
                  
                     <dl>
<dd><span>&#9632;</span>加齢に伴い体が思うように動かなくなってきたので将来不安</dd>
</dl>
<dl>
<dd><span>&#9632;</span>認知症にならないように予防に努めたい</dd>
</dl>
<dl>
<dd><span>&#9632;</span>病気の後遺症で体が痛い、動かない、リハビリしたい</dd>
</dl>
<dl>
<dd><span>&#9632;</span>今の体の状態を維持したい</dd>
</dl>
<dl>
<dd><span>&#9632;</span>お風呂が億劫</dd>
</dl>
<dl>
<dd><span>&#9632;</span>食事も少ない量なのでバランス良く食べてない</dd>
</dl>
<dl>
<dd><span>&#9632;</span>認知症状が出始めた気がする (物忘れ・道に迷う等)</dd>
</dl>
<dl>
<dd><span>&#9632;</span>色々な支援を受けても､ 自宅での生活が困難である(薬 食事 お風呂)</dd>
</dl>
                     </div>
                </div>      
<div class="page-guide__box">

                    
<div class="page-guide__box-head">
                      <h4 class="page-guide__box-leftTitle">
                        <span>通いのサービス</span><span>をおすすめします</span>
                     </h4>
                     </div>
                     <div class="page-guide__box-desc">
                     <dl>
<dd><span>&#9632;</span>七福神ララの家</dd>
</dl>
<dl>
<dd><span>&#9632;</span>サポートセンターチャオ</dd>
</dl>
<dl>
<dd><span>&#9632;</span>デイサービスセンター七福神</dd>
</dl>
<dl>
<dd><span>&#9632;</span>デイサービスよかなぁ七福神</dd>
</dl>
<dl>
<dd><span>&#9632;</span>ケアマネジャー</dd>
</dl>
                     </div>   
                
        </div>
        </div>
                  </div>
             
                <div class="page-guide__blocks">
 <div class="page-guide__blocks-inner">
 <div class="page-guide__box"> 
<div class="page-guide__box-head">
                      <h4 class="page-guide__box-leftTitle">
                        <span>利用者様のお困りごと その２</span>
                     </h4>
                     </div>
                     <div class="page-guide__box-desc">
                     <dl>
<dd><span>&#9632;</span>加齢に伴い体が思うように動かなくなってきたので将来不安</dd>
</dl>
<dl>
<dd><span>&#9632;</span>認知症にならないように予防に努めたい</dd>
</dl>
<dl>
<dd><span>&#9632;</span>病気の後遺症で体が痛い、動かない、リハビリしたい</dd>
</dl>
<dl>
<dd><span>&#9632;</span>今の体の状態を維持したい</dd>
</dl>
<dl>
<dd><span>&#9632;</span>お風呂が億劫</dd>
</dl>
<dl>
<dd><span>&#9632;</span>食事も少ない量なのでバランス良く食べてない</dd>
</dl>
<dl>
<dd><span>&#9632;</span>認知症状が出始めた気がする (物忘れ・道に迷う等)</dd>
</dl>
<dl>
<dd><span>&#9632;</span>色々な支援を受けても､ 自宅での生活が困難である(薬 食事 お風呂)</dd>
</dl>
                     </div>
                </div>      
<div class="page-guide__box">      
<div class="page-guide__box-head">
                      <h4 class="page-guide__box-leftTitle">
                        <span>入居のサービス</span><span>をおすすめします</span>
                     </h4>
                     </div>
                     <div class="page-guide__box-desc">
                     <dl>
<dd><span>&#9632;</span>七福神ララの家</dd>
</dl>
<dl>
<dd><span>&#9632;</span>サポートセンターチャオ</dd>
</dl>
<dl>
<dd><span>&#9632;</span>デイサービスセンター七福神</dd>
</dl>
<dl>
<dd><span>&#9632;</span>デイサービスよかなぁ七福神</dd>
</dl>
<dl>
<dd><span>&#9632;</span>ケアマネジャー</dd>
</dl>
                     </div>          
        </div>
        </div>
                  </div>
                
                <div class="page-guide__blocks">
<div class="page-guide__blocks-inner">
 <div class="page-guide__box"> 
<div class="page-guide__box-head">
                      <h4 class="page-guide__box-leftTitle">
                        <span>ご家族様のお困りごと</span>
                     </h4>
                     </div>
                     <div class="page-guide__box-desc">
                  
                     <dl>
<dd><span>&#9632;</span>加齢に伴い体が思うように動かなくなってきたので将来不安</dd>
</dl>
<dl>
<dd><span>&#9632;</span>認知症にならないように予防に努めたい</dd>
</dl>
<dl>
<dd><span>&#9632;</span>病気の後遺症で体が痛い、動かない、リハビリしたい</dd>
</dl>
<dl>
<dd><span>&#9632;</span>今の体の状態を維持したい</dd>
</dl>
<dl>
<dd><span>&#9632;</span>お風呂が億劫</dd>
</dl>
<dl>
<dd><span>&#9632;</span>食事も少ない量なのでバランス良く食べてない</dd>
</dl>
<dl>
<dd><span>&#9632;</span>認知症状が出始めた気がする (物忘れ・道に迷う等)</dd>
</dl>
<dl>
<dd><span>&#9632;</span>色々な支援を受けても､ 自宅での生活が困難である(薬 食事 お風呂)</dd>
</dl>
                     </div>
                </div>      
<div class="page-guide__box">

                    
<div class="page-guide__box-head">
                      <h4 class="page-guide__box-leftTitle">
                        <span>相談会や職員へご相談ください</span>
                     </h4>
                     </div>
                     <div class="page-guide__box-desc">
                     <dl>
<dd><span>&#9632;</span>七福神ララの家</dd>
</dl>
<dl>
<dd><span>&#9632;</span>サポートセンターチャオ</dd>
</dl>
<dl>
<dd><span>&#9632;</span>デイサービスセンター七福神</dd>
</dl>
<dl>
<dd><span>&#9632;</span>デイサービスよかなぁ七福神</dd>
</dl>
<dl>
<dd><span>&#9632;</span>ケアマネジャー</dd>
</dl>                      
                     </div>   
        </div>
        </div>

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
