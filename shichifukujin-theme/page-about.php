<?php
// Template Name: 会社紹介
// Description:会社紹介についてのテンプレート
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
           
            <!-- <?php get_template_part('include/side-left'); ?> -->
            <main>
            <?php  get_template_part('include/warning');?>
            <?php if(have_posts()): ?>
            <?php while(have_posts()):the_post(); ?>
            <div class="page-content">
             
                  <div class="about-page">
                  <?php get_template_part('include/breadcrumb'); ?> 
                        <section class="sentence">
                  
                          <div class="sentence__inner">
                           <div class="sentence__img">
                            <img src="<?= get_template_directory_uri(); ?>/images/about-txt.png" alt="">
                           </div>     
                           <div class="sentence__txt">
                            <p>私たちは、「天祐」という言葉の意味が示す通り、人として正しい行いを毎日誠実に積み重ねることによって初めて,天の助けや力を授かり大きな偉業を成し遂げられると考えます。
もし、お天道様が見ていたら…という意識で、ひとり一人がもつ善い心に従い事にあたる天祐会でありたいと思いつけた社名です。</p>

                           </div>    
                           </div>      
</section>
<section class="greeting">
<div class="section-titles">
                  <h2 class="main-title">
                    <span>ご挨拶</span>             
                  </h2>                    
                </div>
 <div class="greeting__inner">
 <div class="greeting__top">
 <div class="greeting__top-inner">
   <div class="greeting__top-desc">
    <h3>「その人の語り尽くせない人生に寄り添う」と誓った仲間が集まった場所</h3>
  <p>高齢になると、 若い頃にできたことができなくなり、情けなくてそんな自分に苛立ちを感じ、 多くの方が将来への不安や恐れを抱えて生活しています。</p>
<p> 老若男女そして障がいを抱えている方等、 誰しもがその人が暮らしたい場所でその人らしく暮らせる街の実現が必要だと考えています。</p>
<p> 私たちは、“地域ぐるみでお互い様”の関係性づくりを目指し、 まずはできることから活動の輪を広げ、地域社会から愛され親しまれる組織を目指してまいります。</p>
</div>
<div class="greeting__top-img">
  <img src="<?= get_template_directory_uri(); ?>/images/president.png" alt="">
  <p><span>理事長</span>長田 祐里華</p>
</div>
</div>
 </div>
 <div class="greeting__under">

   <div class="greeting__under-desc">
    <h3>ご家族さまへメッセージ</h3>
  <p>わたしの夫は数年前から認知症を患っていますが、 「泣き笑いの暮らし」を楽しんでいます (笑)
    <br>
    最初は受け入れているつもりが、 どこかで “これくらいはできるはず"
と思っている自分がいて、夫が失敗するとイライラしてつい、きつい
口調になっていました。 怒ってはダメと知識ではわかっているのです
が､ 自分の家族となるとそうはいきません(泣)
<br>
老いや病を受け入れることは、こんなにも辛いことだと実感して
います。
  </p>
<p>多くのご家族様も日々葛藤しながら、ご自身の生活も壊れないようにしていかねばならないと頑張っていらっしゃる姿を見るたびに、プロとして支援の無力さを感じます。</p>
<p>私たちは微力ではありますが、 ご家族様からたくさん色々な事を話していただきたいと思っています。 それは、日々の些細な会話からヒントを見つけることができるからです。</p>
<p>ご本人もご家族様も職員も三位一体となり、 最期の時まで共に良い時間になるように“泣き笑い”で過ごす貴重な時となることを祈っています。</p>
</div>
</div>
 
 </div> 
</section>

                  <div class="philosophys">
                  <section class="philosophy">
                
                    <div class="philosophy__inner">
                      <div class="philosophy__wrap">
                      <div class="section-titles">
                  <h2 class="main-title">
                    <span>事業理念</span>             
                  </h2>                    
                </div>
                        <div class="philosophy__wrap-inner">
                      <div class="philosophy__wrap-img">
            <img src="<?= get_template_directory_uri(); ?>/images/overview02.png" alt="">
        </div>
        <div class="philosophy__wrap-texts">
            <div class="philosophy__wrap-texts-inner">
              <h3>その人らしい生命の尊重。</h3>
       <p>
       利用者様の症状は、声にならない身体と心からの叫び。<br> それは、意味あるメッセージ。<br>私たちは、利用者様からのメッセージと共に運命共同体の一員として歩み続けます。
       </p>
     
                    </div>
                    </div>
                    </div>
                    </div>
                    <div class="philosophy__wrap">
                      <div class="section-titles">
                  <h2 class="main-title">
                    <span>ビジョン</span>             
                  </h2>                    
                </div>
                        <div class="philosophy__wrap-inner">
                      <div class="philosophy__wrap-img">
            <img src="<?= get_template_directory_uri(); ?>/images/overview01.png" alt="">
        </div>
        <div class="philosophy__wrap-texts">
            <div class="philosophy__wrap-texts-inner">
              <h3>七福神グループは、日本一多くその人の「できたらいいなぁ」を実現します。</h3>
       <p>
       私たちは、その人がたとえ病気になったり、後遺症が残ったり、今がわからなくなったとしても、いつでも利用者様に寄り添い、その人らしい生活実現をとことん支援し、その人の生きる希望を
一緒に見つけ出します。
そして、“ 地域ぐるみでお互い様、福祉の力を地域へ”世のため人のために貢献します。
       </p>
     
                    </div>
                    </div>
                    </div>
                    </div>
                
                      <div class="philosophy__promise">
                      <div class="section-titles">
                  <h2 class="main-title">
                    <span>お客様とのお約束</span>             
                  </h2>                    
                </div>
                      <div class="philosophy__promise-inner">
                        <div class="philosophy__promise-block">
                        <h4>その人の”生きる希望”を一緒に見つけ出します。</h4>
                        <p>私たちは、その人がたとえ病気になったり、後遺症が残ったり、 今がわからなくなったとしても、いつでも
利用者様に寄り添い、生きる希望を一緒に見つけ出し、日々のケアにあたります。</p>

                        </div>
                        <div class="philosophy__promise-block">
                        <h4>七福神のケアは“利用者様ファースト”</h4>
                        <p>七福神グループの考える介護は、加齢に伴いできなくなってきた身の回りの事をお世話することだけが
介護ではなく、その人らしい暮らしを一緒につくっていくことだと思っています。
ご家族様や利用者様からの要望やクレームを頂くたびに、 ハード面の豪華さよりも、職員から大切に
されていると実感できるケアの方が、 何倍もその人の人生を幸せに包む事ができると感じています。
私たちは、お一人おひとりの利用者様の語り尽くせない人生の歴史に寄り添うと誓った仲間がケアに
あたっています。 まだまだ未熟ですが日々研鑽を積みながら前進向上しようと努力します。</p>

                        </div>

                        </div>
                   

                    </div>  
                 
                    </div>
                  </section>
                  <section class="philosophy">
                    
                  <div class="section-titles-left">
                  <h3 class="content-title">
                  七福神の７２９
                  </h3>
                  <p class="content-subtitle">七福神の７つの心・２つの力・９つの行動</p>
                </div>
                    <div class="philosophy__inner">
                      <div class="philosophy__block">
                      <h4 class="content-subtitle">７つの心</h4>
                    
                    <div class="philosophy__sub">
                        <ul>
                            <li>「はい」「申し訳ございません」という素直な心</li>
                            <li>「おかげさまです」という謙虚な心</li>
                            <li>「大丈夫ですよ」と慈しむ心</li>
                            <li>「はい、喜んで、わたしがします」という奉仕の心</li>
                            <li>「ありがとうございます」という感謝の心</li>
                            <li>より以上を目指し向上する心</li>
                            <li>わくわく楽しむ心</li>
                        </ul>
                    </div>
                    </div>  
                      <div class="philosophy__block">
                        <h4 class="content-subtitle">２つの力</h4>                    
                   <div class="philosophy__sub">
                        <ul>
                            <li>&#9312; 愛の力 認め愛・支え愛・語り愛・喜び愛・許し愛</li>
                            <li>&#9313; チームの力</li>
                        </ul>
                    </div>
                    </div>  
                      <div class="philosophy__block">
                    <h4 class="content-subtitle">９つの行動規範</h4>
                    <div class="philosophy__sub">
                        <ul>
                            <li>&#9312; 仕事を通して自己実現します。</li>
                            <li>&#9313; 利用者様主体のケア(利用者様ファースト)を追求します。</li>
                            <li>&#9314; 質の高いコミュニケーションを取ります。</li>
                            <li>&#9315; 質の高い思考と行動で効果性と効率性をあげます。</li>
                            <li>&#9316; コンプライアンスと社会規範を遵守します。</li>
                            <li>&#9317; クレームやヒヤリハットは情報の宝、真摯に改善につなげます。</li>
                            <li>&#9318; プロフィットコストにするのかロスコストにするのかは自分次第です。</li>
                            <li>&#9319; ”真剣だと知恵が出る いい加減だと愚痴が出る 中途半端だと言い訳が出る”結果は能力の差ではなく意識の差だと考えます。</li>
                            <li>&#9320; 逃げずしゃがまずへこたれず、顔で笑って心で泣いてそれでも前に進みます。</li>
                        </ul>
                    </div>
                    </div>        
                    </div>
                  </section>
                  <div class="philosophy__bg"></div>
                  </div>
                </div>
                </div>
          
            <?php endwhile; ?>
            <?php endif; ?>
            <section class="overview">
                  <div class="section-titles">
                  <h2 class="main-title">
                 <span>会社概要</span> 
                  </h2>
                  
                </div>
 <div class="overview__inner">
 <table class="overview-table">
  <tr>
    <th>法人名</th>
    <td>社会福祉法人天祐会</td>
  </tr>
  <tr>
    <th>設立</th>
    <td>2014年2月17日</td>
  </tr>
  <tr>
    <th>住所</th>
    <td>〒890-0082  鹿児島県鹿児島市紫原５-13-18</td>
  </tr>
  <tr>
    <th>電話番号</th>
    <td>099-256-2729</td>
  </tr>
  <tr>
    <th>FAX番号</th>
    <td>099-256-3729</td>
  </tr> 
  <tr>
    <th>WEBSITE</th>
    <td>https://729729.jp/</td>
  </tr> 
  <tr>
    <th>特別養護老人ホーム七福神</th>
    <td>登録5739077(商願2014-073845)</td>
  </tr> 
  <tr>
    <th>特別養護老人ホームシルクロード七福神</th>
    <td>登録6218989(商願2019-015829)</td>
  </tr> 
</table>
  </div>
 </section> 
            <?php get_template_part('include/news-report'); ?>
            <?php get_template_part('include/facility-list'); ?> 
            <section class="aboutpage-access">
                    <div class="aboutpage-access__inner">
                        <div class="aboutpage-access__map">
    <?php
    $lat_value = get_field('lat');
    $lng_value = get_field('lng'); ?>
    <?= do_shortcode("[custom_map id='map1' lat='{$lat_value}' lng='{$lng_value}']"); ?>
                        </div>
                        <div class="aboutpage-access__text">
                            <div class="aboutpage-access__text-inner">
                            <div class="section-titles-left">
      <h3 class=" main-title"><span>アクセス</span></h3>
      </div>
                           
                            <dl class="aboutpage-access__dl">
                                <dt>本部所在地</dt>
                                <dd><?php the_field('location');?></dd>
                                <dt><?php the_field('type');?>でお越しの方</dt>
                                <dd><?php the_field('transportation');?></dd>
                            </dl>
                        </div>
                        </div>
                    </div>
                  </section>    

      
            <?php get_template_part('include/contact'); ?>
            
            </main>
            <!-- <?php get_template_part('include/side-right'); ?> -->
          
          </div>
        </div>
        <?php get_template_part('include/footer'); ?>
  
      </div>
      <?php get_template_part('include/mobile-menu');?>
    </div>
    <?php wp_footer(); ?>
  </body>
</html>
