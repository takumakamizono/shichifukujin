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
           
            <?php get_template_part('include/side-left'); ?>
            <main>
            <?php if(have_posts()): ?>
            <?php while(have_posts()):the_post(); ?>
            <div class="page-content">
              <div class="page-content__inner">
                  <?php get_template_part('include/breadcrumb'); ?> 
                  <div class="about-page">
               
                        <section class="sentence">
                           <div class="sentence__img">
                            <img src="<?= get_template_directory_uri(); ?>/images/about-txt.png" alt="">
                           </div>     
                           <div class="sentence__txt">
                            <p>私たちは、「天祐」という言葉の意味が示す通り、
人として正しい行いを毎日誠実に積み重ねることによって初めて,
天の助けや力を授かり大きな偉業を成し遂げられると考えます。 </p>
<p>
もし、お天道様が見ていたら…という意識で
ひとり一人がもつ善心の羅針盤に従い、事にあたる…
まさに“天祐は道を正して待つべし”の言葉を体現した組織でありたいと願い
“天祐会”と名付けました。 </p>
<p>
私たち天祐会は、
お一人おひとりの生きてきた歴史に謙虚に向き合い共感したいと考え、
その人が歩んだ体験に寄り添いながら、
残された人生にお邪魔させていただき、
共に泣き笑いの時間を過ごし、
最期の時を「よか人生じゃったなぁ」と思ってもらいたいと想っています。
そして、老若男女誰もがその人の暮したい場所で、その人らしい暮らしが叶うよう
「地域ぐるみでお互い様、福祉の力を地域へ」を合い言葉に、
私たちは、おひとりお一人の生命のバトンをつなぎ、幸せの縁を広げます。 </p>
<p>
七福神グループは、創業の精神“その人の語り尽くせない人生に寄り添う”と、事業理念を“その人らしい生命(いのち)の尊重”と定め、この精神に共感した仲間が集まっています。
まず、私たちのできることからひとつずつ取り組み更なる貢献を達成しつつ、地域に愛され親しまれる組織を目指し社会に貢献し続けます。</p>
                           </div>    
                      
</section>
<section class="overview">
                  <div class="section-titles">
                  <h2 class="main-title">
                  会社概要
                  </h2>
                  <p class="sub-title tween-animate-title">
                  about
                  </p>
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
</table>
  </div>
 </section> 
                  <section class="aboutpage-access">
                    <div class="aboutpage-access__inner">
                        <div class="aboutpage-access__map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3399.605209873307!2d130.52531497605608!3d31.5624475450612!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x353e67a86e544787%3A0x33f7f3b20c88956a!2z54m55Yil6aSK6K236ICB5Lq644Ob44O844OgIOOCt-ODq-OCr-ODreODvOODieS4g-emj-elng!5e0!3m2!1sja!2sjp!4v1687245784190!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <div class="aboutpage-access__text">
                            <div class="aboutpage-access__text-inner">
                            <h3 class="aboutpage-access__title">アクセス</h3>
                            <dl class="aboutpage-access__dl">
                                <dt>所在地</dt>
                                <dd>〒890-0082 鹿児島県鹿児島市紫原５-13-18</dd>
                                <dt>お車でお越しの方</dt>
                                <dd>住宅地の中にあり、外観もマンションのような佇まいです。「KTS」「焼き鳥信玄」「お寿司のまどか」が目印です。</dd>
                            </dl>
                        </div>
                        </div>
                    </div>
                  </section>
                  <section class="philosophy">
                  <div class="section-titles-left">
                  <h2 class="content-title">
                  事業理念
                  </h2>
                </div>
                    <div class="philosophy__inner">
                      <div class="philosophy__block">
                    <div class="philosophy__main">
                        <p class="content-subtitle">その人らしい生命いのちの尊重。</p>
                    </div>
                    <div class="philosophy__sub">
                    <p>利用者様の症状は、声にならない身体と心からの叫び。それは、意味あるメッセージ。私たちは、利用者様からのメッセージと共に運命共同体の一員として歩み続けます。</p>
                    </div>
                    </div>  
                      <div class="philosophy__block">
                    <div class="philosophy__main">
                        <p class="content-subtitle">ビジョン</p>
                    </div>
                    <div class="philosophy__sub">
                    <p>七福神グループは、日本一多く、その人の「できたらいいなぁ」を実現します。</p>
                    </div>
                    </div>  
                      <div class="philosophy__block">
                    <div class="philosophy__main">
                        <p class="content-subtitle">ミッションステートメント</p>
                    </div>
                    <div class="philosophy__sub">
                        <ul>
                            <li>&#9312; 私は、自分の親や大切な人を誇りをもって紹介したいと思える事業所をつくります。</li>
                            <li>&#9313; 私は、介護・福祉業界のイメージアップ新 3K(感謝・感動・カッコイイ)に貢献します。</li>
                            <li>&#9314; 私は、全職員の物心両面の豊かさと幸せを実現します。</li>
                        </ul>
                    </div>
                    </div>  
                      <div class="philosophy__block">
                    <div class="philosophy__main">
                        <p class="content-subtitle">利用者様とのお約束</p>
                    </div>
                    <div class="philosophy__sub">
                    <p>その人の生きる希望を一緒に見つけ出します。</p>
                    </div>
                    </div>  
                      <div class="philosophy__block">
                    <div class="philosophy__main">
                        <p class="content-subtitle">教育理念</p>
                    </div>
                    <div class="philosophy__sub">
                    <ul>
                            <li>思考に気をつけなさい それはいつか言葉になるから</li>
                            <li>言葉に気をつけなさい それはいつか行動になるから</li>
                            <li>行動に気をつけなさい それはいつか習慣になるから</li>
                            <li>習慣に気をつけなさい それはいつか性格になるから</li>
                            <li>性格に気をつけなさい それはいつか運命になるから</li>
                    </ul>
                    <p>健全な価値観が誇り高き人生を創ります。</p>
                    </div>
                    </div>  
                    </div>
                  </section>
                  <section class="philosophy">
                  <div class="section-titles-left">
                  <h2 class="content-title">
                  七福神の７２９
                  </h2>
                  <p class="content-subtitle">七福神の７つの心・２つの力・９つの行動</p>
                </div>
                    <div class="philosophy__inner">
                      <div class="philosophy__block">
                    <div class="philosophy__main">
                        <p class="content-subtitle">７つの心</p>
                    </div>
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
                    <div class="philosophy__main">
                        <p class="content-subtitle">２つの力</p>
                    </div>
                    <div class="philosophy__sub">
                        <ul>
                            <li>&#9312; 愛の力 認め愛・支え愛・語り愛・喜び愛・許し愛</li>
                            <li>&#9313; チームの力</li>
                        </ul>
                    </div>
                    </div>  
                      <div class="philosophy__block">
                    <div class="philosophy__main">
                        <p class="content-subtitle">９つの行動規範</p>
                    </div>
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

                </div>
                </div>
          </div>
            <?php endwhile; ?>
            <?php endif; ?>
            
             
         
            <?php get_template_part('include/contact'); ?>
            
            </main>
            <?php get_template_part('include/side-right'); ?>
          
          </div>
        </div>
        <?php get_template_part('include/footer'); ?>
  
      </div>
      <?php get_template_part('include/mobile-menu');?>
    </div>
    <?php wp_footer(); ?>
  </body>
</html>
