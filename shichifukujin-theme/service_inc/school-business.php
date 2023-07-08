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
                        <dt>費用</dt>
                        <dd>
                     <div class="table-wrap">
                      
  <table class="table05 ">
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
<dl>
  <dt>留意事項、特徴、受講者へのメッセージ</dt>
  <dd>
    <p>当法人がこの研修を開講する目的は、急激な高齢化が進む現代において、多様化する介護ニーズに対応した適切で質の高い介護サービスを提供する為、個別性を重んじた対人援助の基礎となる理念、倫理観を醸成し、且つ専門職としての基本姿勢・知識・技術等を修得させ、広く 社会福祉に貢献できる介護職員を養成する事にあります。</p>
  <p>通信制ですので離職せずに"働きながら受講できる"ことや、ｅラーニングを活用して気軽に空いた時間を活用しての学習も可能となります。
また、就職先を探していらっしゃる方には、七福神グループの各事業所も含めて就職相談にも応じています。
面倒見のイイ学校「かいごのがっこう七福神」で一緒に学び、国家資格を取得しませんか？</p>
  </dd>
</dl>
                     </div>    
                </div>
         
