<div class="sec-price">
    <div class="section-titles">
   <h3 class="main-title"><span>ご料金について</span></h3>            
 </div>
 <div class="sec-price__inner">

  <div class="sec-price__box">
  <div class="l_boader-title ">
    <h4>負担割合１割の方の費用</h4>
  </div>
<div class="table-wrap">
  <table class="table02 width-auto ">
  <?php
$levels = [
  'pro1sup2',
  'pro1nursing1',
  'pro1nursing2',
  'pro1nursing3',
  'pro1nursing4',
  'pro1nursing5',
  'pro2sup2',
  'pro2nursing1',
  'pro2nursing2',
  'pro2nursing3',
  'pro2nursing4',
  'pro2nursing5'
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
  <th>要支援2</th>
    <td><?= esc_html_e($formatted_values[0] . '円'); ?></td>
  
  </tr>
  <tr>
  <th>要介護1</th>
    <td><?= esc_html_e($formatted_values[1] . '円'); ?></td>
   
  </tr>
  <tr>
  <th>要介護2</th>
    <td><?= esc_html_e($formatted_values[2] . '円'); ?></td>
   
  </tr>
  <tr>
  <th>要介護3</th>
    <td><?= esc_html_e($formatted_values[3] . '円'); ?></td>
  </tr>
  <th>要介護4</th>
    <td><?= esc_html_e($formatted_values[4] . '円'); ?></td>
  </tr>
  <th>要介護5</th>
    <td><?= esc_html_e($formatted_values[5] . '円'); ?></td>
  </tr>
</table>
</div>

<div class="sec-price__box">
  <div class="l_boader-title ">
    <h4>負担割合2割の方の費用</h4>
  </div>
<div class="table-wrap">
  <table class="table02 width-auto ">
  <?php
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
  <th>要支援2</th>
    <td><?= esc_html_e($formatted_values[6] . '円'); ?></td>
  
  </tr>
  <tr>
  <th>要介護1</th>
    <td><?= esc_html_e($formatted_values[7] . '円'); ?></td>
   
  </tr>
  <tr>
  <th>要介護2</th>
    <td><?= esc_html_e($formatted_values[8] . '円'); ?></td>
   
  </tr>
  <tr>
  <th>要介護3</th>
    <td><?= esc_html_e($formatted_values[9] . '円'); ?></td>
  </tr>
  <th>要介護4</th>
    <td><?= esc_html_e($formatted_values[10] . '円'); ?></td>
  </tr>
  <th>要介護5</th>
    <td><?= esc_html_e($formatted_values[11] . '円'); ?></td>
  </tr>
</table>
</div>

<div class="sec-price__desc">
<p>自己負担額の中には、居住費・食費・管理費(水道光熱費)が含まれています。</p>
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
    <td>色塗り</td>
    
  </tr>
  </table>
<p>その他の主な費用</p>
<table class="table02">
  <tr>
    <td>理容代</td> 
    <td>おむつ代</td> 
    <td>通院の交通費</td> 
    <td>往診代</td> 
    <td>薬代</td> 
    <td>外来受診</td> 
</tr>
</table>
</div>
</div>
  </div>
  </div>
  
 </div>
 </div>