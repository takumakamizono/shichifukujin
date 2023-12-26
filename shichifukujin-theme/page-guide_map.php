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
          <?php if(have_posts()): ?>
            <?php while(have_posts()):the_post(); ?>
            <main>
            <?php  get_template_part('include/warning');?>
         
         
              <?php get_template_part('include/breadcrumb'); ?> 
          
                <div class="page-guide">
                  <div class="page-guide__inner">
                  <div class="page-guide__topTxt">
             
   <h3 class="main-title"><span>七福神がお手伝いできること</span></h3>            

                    <p>利用者様は、もと会社員、公務員、教師､弁護士、役員、自営業、 スポーツ選手、自衛官、警察官、主婦等々、色々な現役時代を過ごしてきた方々がたくさんいらっしゃっています。
利用者様･ご家族様のお困りごとに対して、七福神がお手伝いできることをガイドマップにしました。 それぞれのお困りごとに合ったサービスをご提案いたします。</p>
                  </div>
                  <div class="page-guide__blocks">

 <div class="page-guide__blocks-inner">
 <div class="page-guide__box"> 
<div class="page-guide__box-head">
                      <h4 class="page-guide__box-leftTitle">
                        <span>いつまでも自宅で暮らしたい・・・</span>
                     </h4>
                     </div>
                     <div class="page-guide__box-desc">
                  
                     <dl>
<dd>&#9632; 加齢に伴い体が思うように動かなくなってきたので将来不安</dd>
</dl>
<dl>
<dd>&#9632; 認知症にならないように予防に努めたい</dd>
</dl>
<dl>
<dd>&#9632; 病気の後遺症で体が痛い、動かない、リハビリしたい</dd>
</dl>
<dl>
<dd>&#9632; 今の体の状態を維持したい</dd>
</dl>
<dl>
<dd>&#9632; お風呂が億劫</dd>
</dl>
<dl>
<dd>&#9632; 食事も少ない量なのでバランス良く食べてない</dd>
</dl>
<dl>
<dd>&#9632; 認知症状が出始めた気がする (物忘れ・道に迷う等)</dd>
</dl>
<dl>
<dd>&#9632; 色々な支援を受けても､ 自宅での生活が困難である(薬 食事 お風呂)</dd>
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
<dd><a class="btn"  href="https://729729.jp/service/larashouse/">七福神ララの家へ</a></dd>
</dl>
<dl>
<dd><a class="btn"  href="https://729729.jp/service/chao/">サポートセンターチャオへ</a></dd>
</dl>
<dl>
<dd><a  class="btn" href="https://729729.jp/service/servicecenter/">デイサービスセンター七福神へ</a></dd>
</dl>
<dl>
<dd><a class="btn"  href="https://729729.jp/service/yokana/">デイサービスよかなぁ七福神へ</a></dd>
</dl> 
<dl>
<dd>&#9632; 無料体操教室</dd>
</dl>
<dl>
<dd>&#9632; ケアマネジャー</dd>
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
                        <span>日々の暮らしに不安が増えてきた・・・</span>
                     </h4>
                     </div>
                     <div class="page-guide__box-desc">
                     <dl>
<dd>&#9632; 色々な支援を受けても､ 自宅での生活が困難である(薬 食事 お風呂)</dd>
</dl>
<dl>
<dd>
  &#9632; 認知症状が激しくなってきたのでそろそろプロの手を借りたい
<ul>
  <li>物忘れ</li>
  <li>徘徊</li>
  <li>道に迷う</li>
  <li>昼夜逆転</li>
  <li>幻覚</li>
  <li>幻聴</li>
</ul>
</dd>
</dl>
<dl>
<dd >&#9632; 要介護3以上</dd>
</dl>
<dl>
<dd>※ この状態でデイサービス、訪問看護、 ヘルパー、 訪問給食、 ゴミ回収往診の支援で
一人暮らしされている方もいます。</dd>
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
<dd><span class="page-guide__box-desc-label">介護３以上なら</span></dd>
<dd><a class="btn"  href="https://729729.jp/service/tokuyou/">特別養護老人ホーム七福神へ</a></dd>
<dd><a class="btn"  href="https://729729.jp/service/silkroad/">シルクロード七福神へ</a></dd>
</dl>
<dl>
<dd><span class="page-guide__box-desc-label">認知症なら</span></dd>
<dd><a class="btn"  href="https://729729.jp/service/lalachance/">ララシャンス七福神へ</a></dd>
<dd><a class="btn"  href="https://729729.jp/service/fanfan/">ふぁん2テラス七福神へ</a></dd>
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
<dd>&#9632; 他の家族はこんな時どうしているのかな?</dd>
</dl>
<dl>
<dd>&#9632; 具体的なアドバイスが欲しい</dd>
</dl>
<dl>
<dd>&#9632; お試しできないの?</dd>
</dl>
<dl>
<dd>&#9632; 介護保険のことをもっと詳しく知りたい</dd>
</dl>
<dl>
<dd>&#9632; 介護に疲れた</dd>
</dl>
<dl>
<dd>&#9632; どうやって介護サービスをはじめたらいい?</dd>
</dl>
<dl>
<dd>&#9632; 息抜きして気分をリセットしたい</dd>
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
<dd>&#9632; 職員に気軽に相談</dd>
</dl>
<dl>
<dd>&#9632; 家族会</dd>
</dl>

<dl>
<dd>&#9632; 無料セミナー</dd>
</dl>
<dl>
<dd>&#9632; 介護相談会</dd>
</dl>                      
<dl>
<dd>&#9632; 息抜きショートステイ</dd>
</dl>                      
<dl>
<dd>&#9632; 相談センター (ケアマネジャーが相談対応)</dd>
</dl>                      
                     </div>   
        </div>
        </div>

                  </div>

                </div>          
                </div>
            <?php get_template_part('include/contact'); ?>
            
            </main>
            <?php endwhile; ?>
            <?php endif; ?>
          
          </div>
        </div>
        <?php get_template_part('include/footer'); ?>
  
      </div>
      <?php get_template_part('include/mobile-menu');?>
    </div>
    <?php wp_footer(); ?>
  </body>
</html>
