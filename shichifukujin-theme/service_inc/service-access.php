<div class="sl-service__access">
  <div class="sl-service__access-inner">
    <div class="sl-service__access-map">
    <!-- <iframe src="<?php echo esc_url(get_field('googlemap')); ?>"></iframe> -->
    <!-- <div id="map_canvas"></div> -->
    <?php
    $lat_value = get_field('lat');
    $lng_value = get_field('lng'); 
    
    ?>
    <?= do_shortcode("[custom_map id='map1' lat='{$lat_value}' lng='{$lng_value}']"); ?>
    
    
    </div>
    <div class="sl-service__access-texts">
      <div class="sl-service__access-texts-inner">
        <div class="section-titles-left">
      <h3 class=" main-title"><span>アクセス</span></h3>
      </div>
      <dl class="sl-service__access-dl">
        <dt>所在地</dt>
        <dd><?php the_field('location');?></dd>
        <dt><?php the_field('type');?>でお越しの方</dt>
        <dd><?php the_field('transportation');?></dd>
      </dl>
      </div>
    </div>
  </div>
</div>