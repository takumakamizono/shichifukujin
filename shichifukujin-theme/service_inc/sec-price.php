<div class="sec-price">
    <div class="section-titles">
   <h3 class="main-title"><span>料金について</span></h3>            
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
  'pro2nursing5',
  'pro3sup2',
  'pro3nursing1',
  'pro3nursing2',
  'pro3nursing3',
  'pro3nursing4',
  'pro3nursing5'
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
  <tr>
  <th>要介護4</th>
    <td><?= esc_html_e($formatted_values[4] . '円'); ?></td>
  </tr>
  <tr>
  <th>要介護5</th>
    <td><?= esc_html_e($formatted_values[5] . '円'); ?></td>
  </tr>
</table>
<div class="table-desc">
  <p>月額の自己負担額は（月=30日）にて計算しています</p>
  <span><?php the_field("group_price_date")?></span>
</div>
</div>
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
<div class="table-desc">
  <p>月額の自己負担額は（月=30日）にて計算しています</p>
  <span><?php the_field("group_price_date")?></span>
</div>
</div>
</div>
<div class="sec-price__box">
  <div class="l_boader-title ">
    <h4>負担割合3割の方の費用</h4>
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
    <td><?= esc_html_e($formatted_values[12] . '円'); ?></td>
  
  </tr>
  <tr>
  <th>要介護1</th>
    <td><?= esc_html_e($formatted_values[13] . '円'); ?></td>
   
  </tr>
  <tr>
  <th>要介護2</th>
    <td><?= esc_html_e($formatted_values[14] . '円'); ?></td>
   
  </tr>
  <tr>
  <th>要介護3</th>
    <td><?= esc_html_e($formatted_values[15] . '円'); ?></td>
  </tr>
  <th>要介護4</th>
    <td><?= esc_html_e($formatted_values[16] . '円'); ?></td>
  </tr>
  <th>要介護5</th>
    <td><?= esc_html_e($formatted_values[17] . '円'); ?></td>
  </tr>
</table>
<div class="table-desc">
  <p>月額の自己負担額は（月=30日）にて計算しています</p>
  <span><?php the_field("group_price_date")?></span>
</div>
</div>
</div>
<div class="sec-price__box">

<div class="sec-price__desc">
<p class="sub-title"><span>その他の主な費用</span></p>
<div class="table-wrap">
<table class="table02">
  <tr>
    <td>理容代</td> 
    <td>おむつ代</td> 
    <td>往診代</td> 
    <td>薬代</td> 
    <td>外来受診</td> 
</tr>
</table>
</div>
</div>


  </div>
  <div class="sec-price__pdfBtn">
    <a href="<?php the_field("group_application_pdf")?>" class="btn" target="_blank" rel="noopener noreferrer">申込に関する資料はこちら</a>
  </div>
  </div>   
  </div>

  
  
 
 