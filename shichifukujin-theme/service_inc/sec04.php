<div class="sl-service__sec04">
    <div class="section-titles">
   <h3 class="main-title"><span>ご料金について</span></h3>            
 </div>
 <div class="sl-service__sec04-inner">
  <div class="sl-service__sec04-box">
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
  <span>2021年8月現在</span>
</div>
</div>
<div class="sl-service__sec04-desc">
  <ul class="sl-service__sec04-ul">
    <li>日額・月額の自己負担額は第４段階の最高額にて計算しています。（月＝３０日）</li>
    <li>第2段階～第3段階①は介護保険負担限度額認定証の申請により食材料費が軽減されたものになります。</li>
    <li>非課税世帯の方の料金についてはお問い合わせください。加算の状況によって利用料金が異なります。</li>
  </ul>
</div>
<div class="sl-service__sec04-desc">
  
  <div class="table-wrap">
  <p>主な身の回り品として日常生活に必要なもの</p>
<table class="table02">
 
  <tr>
    <td>歯ブラシ</td>
    <td>石鹸</td>
    <td>ティッシュ</td>
    <td>化粧品</td>
  </tr>
 
</table>
<p>主な利用者の希望の教養娯楽費</p>
<table class="table02">
  <tr>
    <td>茶道</td>
    <td>陶芸</td>
    <td>色塗り</td>
    
  </tr>
  </table>
<p>その他の主な費用</p>
<table class="table02">
  <tr>
    <td>理容代</td> 
    <td>通院の交通費</td> 
    <td>往診代</td> 
    <td>薬代</td> 
    <td>外来受診</td> 
</table>
</div>
</div>
  </div>
  <div class="sl-service__sec04-box border-frame">
    <h5 class="sl-service__sec04-innerTitle">費用負担軽減制度が使える方の場合</h5>
    <div class="sl-service__sec04-innerDesc">
      <p>負担限度額認定(特定入所者介護ｻｰﾋﾞｽ費)をご存知でしょうか？ <br>
特養などの介護保険施設に入所している人のうち、年金などの収入・資産が一定以下の人に対して
「自己負担上限額」という基準を設け、それを越えた居住費・食費の負担額が介護保険から支給される制度です。<br>
この支給を受けるためには、お住まいの市区町村に申請する必要があります。</p>
    </div>
    <div class="sl-service__sec04-innerDesc">
      <span>対象者</span>
      <ul>
        <li>市町村民税が非課税である(世帯全体及び世帯を分離している配偶者を含む)</li>
        <li>一定額以上の預貯金などがない</li>
      </ul>
      <p>収入には非課税年金(遺族年金と障害年金)収入も含まれます。</p>
    </div>
    <div class="sl-service__sec04-innerDesc">
    <span>非課税世帯２段階の方</span>
    <p>市町村民税非課税世帯のうち合計所得金額と年金収入の合計が８０万円以下の方の費用</p>
    </div>
  </div>
 </div>
 </div>