<section class="sec-price">
   
 <div class="sec-price__inner">
 <div class="sec-price__box">
   <h4 class="sub-title"><span>主な身の回り品として日常生活に必要なもの</span></h4>  
  <div class="table-wrap">
<table class="table02">
  <tr>
    <td>歯ブラシ・入れ歯</td>
    <td>石鹸</td>
    <td>ティッシュ</td>
    <td>化粧品</td>
    <td>衣類</td> 
    <td>お薬</td> 
  </tr>
</table>
<ul class="table-wrap__ul">
<li>その他お気に入りの物 <span>(お箸・湯呑・仏壇等...)</span></li>
</ul>
</div>
</div>
  <div class="sec-price__box">
  <div class="section-titles">
   <h3 class="main-title"><span>料金について</span></h3>            
 </div>
<div class="table-wrap">
  <table class="table02">
  <?php
$levels = [
  'stage2level3', 
  'stage2level4', 
  'stage2level5',
  'stage3_1level3',
  'stage3_1level4',
  'stage3_1level5',
  'stage3_2level3',
  'stage3_2level4',
  'stage3_2level5',
  'stage4level3',
  'stage4level4',
  'stage4level5',
]; // フィールド名の配列
$formatted_values = [];

foreach ($levels as $level) {
  $value = get_field($level);
  if (empty($value)) {
    $value = 0;
  }
  $formatted_value = number_format($value);
  $formatted_values[] = $formatted_value; // 配列に値を追加
 
}
?>
  <tr>
  <th></th>
    <td>要介護度3</td>
    <td>要介護度4</td>
    <td>要介護度5</td>
  </tr>
  <tr>
  <th>第２段階</th>
    <td><?= $formatted_values[0] . '円'; ?></td>
    <td><?= $formatted_values[1] . '円'; ?></td>
    <td><?= $formatted_values[2] . '円'; ?></td>
  </tr>
  <tr>
  <th>第３段階①</th>
    <td><?= $formatted_values[3] . '円'; ?></td>
    <td><?= $formatted_values[4] . '円'; ?></td>
    <td><?= $formatted_values[5] . '円'; ?></td>
  </tr>
  <tr>
  <th>第３段階②</th>
    <td><?= $formatted_values[6] . '円'; ?></td>
    <td><?= $formatted_values[7] . '円'; ?></td>
    <td><?= $formatted_values[8] . '円'; ?></td>
  </tr>
  <tr>
  <th>第４段階</th>
    <td><?= $formatted_values[9] . '円'; ?></td>
    <td><?= $formatted_values[10] . '円'; ?></td>
    <td><?= $formatted_values[11] . '円'; ?></td>
  </tr>
</table>

<div class="table-desc">
  <p>負担割合１割の方の費用（居住費・食費を含む）/月額（概算）</p>
  <span><?php the_field("price_date")?></span>
</div>
</div>
</div>
<div class="sec-price__box">
<h4 class="sub-title"><span>その他の主な費用</span></h4>  
<div class="table-wrap">
<table class="table02">
  <tr>
    <td>理容代</td> 
    <td>往診代</td> 
    <td>薬代</td> 
    <td>外来受診</td> 
</table>
</div>

  <ul class="sec-price__ul">
    <li>日額・月額の自己負担額は第４段階の最高額にて計算しています。（月＝３０日）</li>
    <li>第2段階～第3段階②は介護保険負担限度額認定証の申請により食材料費が軽減されたものになります。</li>
    <li>非課税世帯及び生活保護受給者の料金についてはお問い合わせください。個人の状況により利用料金が異なります。</li>
  </ul>
</div>

 
  <div class="sec-price__box border-frame">
    <h5 class="sec-price__innerTitle">費用負担軽減制度が使える方の場合</h5>
    <div class="sec-price__innerDesc">
      <p>負担限度額認定(特定入所者介護ｻｰﾋﾞｽ費)をご存知でしょうか？ <br>
特養などの介護保険施設に入所している人のうち、年金などの収入・資産が一定以下の人に対して
「自己負担上限額」という基準を設け、それを越えた居住費・食費の負担額が介護保険から支給される制度です。<br>
この支給を受けるためには、お住まいの市町村に申請する必要があります。</p>
    </div>
    <div class="sec-price__innerDesc">
      <span>対象者</span>
      <ul>
        <li>市町村民税が非課税である(世帯全体及び世帯を分離している配偶者を含む)</li>
        <p>収入には非課税年金(遺族年金と障害年金)収入も含まれます。</p>
        <li>一定額以上の預貯金などがない</li>
      </ul>
     
    </div>
    <div class="sec-price__innerDesc">
    <span>非課税世帯２段階の方</span>
    <p>市町村民税非課税世帯のうち合計所得金額と年金収入の合計が８０万円以下の方の費用</p>
    </div>
  </div>
  <div class="sec-price__pdfBtn">
    <a href="<?php the_field("application_pdf")?>" class="btn" target="_blank" rel="noopener noreferrer">申込に関する資料はこちら</a>
  </div>
 </div>
 </section >
