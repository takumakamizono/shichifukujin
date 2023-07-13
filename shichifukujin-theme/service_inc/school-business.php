<div class="school-content__box"> 
<div class="school-content__box-head">
                      <h4 class="school-content__box-leftTitle">
                        <span><?php the_field('school-business-tit01');?></span>
                     </h4>
                     </div>
                     <div class="school-content__box-desc">
                  
                      <?php the_field('school-business-desc01');?>
                     </div>
                </div>      
<div class="school-content__box">

                     <div class="school-content__box-desc">
                      <dl>
                        <dt>費用<span class="remarks">テキスト代別・税別</span></dt>
                        <dd>
                     <div class="table-wrap">
                      
  <table class="table05 ">
  <?php
$levels = [
  '3rd-grade',
  '2rd-grade',
  '1rd-grade',
  'basic',
  
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
  <th>訪問介護３級修了者もしくは無資格者</th>
    <td><?= esc_html_e($formatted_values[0] . '円'); ?></td>
  
  </tr>
  <tr>
  <th>訪問介護２級修了者もしくは介護職員初任者研修修了者</th>
    <td><?= esc_html_e($formatted_values[1] . '円'); ?></td>
   
  </tr>
  <tr>
  <th>訪問介護1級修了者</th>
    <td><?= esc_html_e($formatted_values[2] . '円'); ?></td>
   
  </tr>
  <tr>
  <th>介護職員基礎研修修了者</th>
    <td><?= esc_html_e($formatted_values[3] . '円'); ?></td>
  </tr>
</table>
</div>
</dd>
</dl>
</div> 
<div class="school-content__box-head">
                      <h4 class="school-content__box-leftTitle">
                        <span><?php the_field('school-business-tit02');?></span>
                     </h4>
                     </div>
                     <div class="school-content__box-desc">
                     <?php the_field('school-business-desc02');?>
                      
                     </div>   
<div class="school-content__box-head">
                      <h4 class="school-content__box-leftTitle">
                        <span><?php the_field('school-business-tit03');?></span>
                     </h4>
                     </div>
                     <div class="school-content__box-desc">
                     <?php the_field('school-business-desc03');?>
                      
                     </div>   

   
</div>
         

