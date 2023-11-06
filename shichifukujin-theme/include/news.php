<section class="news" >
            <div class="section-titles">
                  <h2 class="main-title">
                    <span>お知らせ</span>           
                  </h2>            
                </div>
                <div  class="news__inner news__flex">
                <?php
                     $args=[
                       'post_type'=> 'post',
                       'category_name' => 'news,event ,recruitment-info,others',
                       'posts_per_page' => 5,        
                     ];
                     $the_query = new WP_Query($args);
                    ?>
                  <?php if($the_query->have_posts()): ?>  
               
                  <ul class="news__list news__flex-list appear right"> 
              <?php while($the_query->have_posts()):$the_query->the_post(); ?>
            <?php get_template_part('include/news-inside'); ?>
            <?php endwhile; ?>
                  </ul>
                  <div class="news__btn news__flex-btn appear up">
    <?php
    
    $categories = get_terms([
        'taxonomy' => 'category',
        'slug' => ['news', 'event','recruitment-info','others'],
        'orderby' => 'include',
        'include' => array(2, 15, 16, 1),
    ]);
    ?>
    <ul class="btn-list">
        <?php foreach ($categories as $category) {
            $category_link = get_term_link($category, 'category');
            ?>
            <li class="btn-item">
                <a class="btn slide-bg item" href="<?= esc_url($category_link); ?>"><?= $category->name; ?>一覧へ</a>
            </li>
        <?php } ?>
    </ul>
</div>    
  
                  <?php else: ?>
                    <div class="notice__notinfo">
                      <p>新しい情報はありません</p>
                     
                      <div class="notice__btn">
                      <a class="btn slide-bg" href="<?= esc_url(home_url('/')); ?>">トップページへ戻る</a> 
                      </div>
                    </div>
           <?php endif; ?>
             <?php wp_reset_postdata(); ?>                
                </div>
            
              </section>
