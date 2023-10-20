<div class="surround-contents ">
    
    <div class="section-titles">
   <h3 class="main-title"><span>施設の紹介</span></h3>            
 </div>
   <div class="surround-contents__inner">
   <div class="surround-contents__box">
    <ul class="image-display">
    <?php if(get_field('img01')): ?>
      <li class="image-display__img">
        <img src="<?php the_field('img01');?>" alt="">
      </li>
      <?php endif; ?>
      <?php if(get_field('img02')): ?>
      <li class="image-display__img">
        <img src="<?php the_field('img02');?>" alt="">
      </li>
      <?php endif; ?>
      <?php if(get_field('img03')): ?>
      <li class="image-display__img">
        <img src="<?php the_field('img03');?>" alt="">
      </li>
      <?php endif; ?>
      <?php if(get_field('img04')): ?>
      <li class="image-display__img">
        <img src="<?php the_field('img04');?>" alt="">
      </li>
      <?php endif; ?>
      <?php if(get_field('img05')): ?>
      <li class="image-display__img">
        <img src="<?php the_field('img05');?>" alt="">
      </li>
      <?php endif; ?>
    </ul>
    </div>
    <div class="surround-contents__box">
    <div class="section-titles">
    <h4 class="main-title"><span>設備概要</span></h4>
  </div>
 
<table class="table01">
<tr>
<th>施設の種類</th>
<td><?php the_field('overview01');?></td>
</tr>
<tr>
<th>契約形態</th>
<td><?php the_field('overview02');?></td>
</tr>
<tr>
<th>構造</th>
<td><?php the_field('overview03');?></td>
</tr>
<tr>
<th>部屋数</th>
<td><?php the_field('overview04');?></td>
</tr>
<tr>
<th>居室設備</th>
<td><?php the_field('overview05');?></td>
</tr>
<tr>
<th>共同施設</th>
<td><?php the_field('overview06');?></td>
</tr>
<tr>
<th>交通</th>
<td><?php the_field('overview07');?></td>
</tr>
<tr>
<th>建物完成</th>
<td><?php the_field('overview08');?></td>
</tr>
<tr>
<th>入居時期</th>
<td><?php the_field('overview09');?></td>
</tr>
<tr>
<th>TEL</th>
<td><?php the_field('access-tel');?></td>
</tr>
<tr>
<th>FAX</th>
<td><?php the_field('access-fax');?></td>
</tr>
</table>
  </div>
  <div class="surround-contents__box">

  <div class="info-with-imgs">
    <div class="section-titles">
    <h4 class="main-title"><span>1日の流れ</span></h4>
  </div>
  <div class="info-with-imgs__desc">
    <p>今までの生活スタイルをそのまま継続します。  <br> 一人ひとり違う生活時間、皆さまの24時間を尊重します。
起床時間や食事の時間は自由です。個別ケアで対応します。</p>
  </div>
  <div class="info-with-imgs__img">
    <img src="<?= get_template_directory_uri(); ?>/images/charge-schedule.jpg" alt="">
  </div>
  </div>
  </div>


  </div> 
  <div class="surround-contents__bg"></div>           
 </div>
