<div class="warning">
    <div class="warning__inner">
    <?php
                  $page_id = 1428;
                  $alternative_post = get_post( $page_id );      
                  echo apply_filters('the_content', $alternative_post->post_content); //固定ページの内容                     
                  ?>
    </div>
</div>

