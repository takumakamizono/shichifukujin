<!DOCTYPE html>
<html lang="ja">
  <head>
  <?php get_header();?>
  </head>
  <body>
    <div id="global-container">
      <div id="container">
        <div class="mobile-menu__cover"></div>
        <div class="nav-trigger"></div>
        <header class="header">
        <?php get_template_part('include/header'); ?>
        </header>
        <div id="content">
        <?php get_template_part('include/hero'); ?>
          <div id="main-content">
           
            <main>
            <?php  get_template_part('include/warning');?>
            <?php get_template_part('include/breadcrumb'); ?> 
            <section class="sl-custom">
              <div class="sl-custom__inner">
                <?php if(have_posts()): ?>
                  <?php while(have_posts()):the_post(); ?> 
                  <article id="post-<?php the_ID(); ?>" class="sl-service" >
                  <div class="section-titles">
                  <h3 class="main-title"><span><?=  the_title();?>について</span></h3> 
                </div>
                <?php
               
               $terms = get_the_terms(get_the_ID(), 'facility');
               if ($terms && !is_wp_error($terms)):
                foreach ($terms as $term):
                ?>
                  <div class="sl-service__inner">
                    <?php if ($term->slug === 'nursing'):?>
                  <?php get_template_part('service_inc/single-nursing'); ?>
                  <?php elseif($term->slug === 'group'||$term->slug === 'handi-group'): ?>
                  <?php get_template_part('service_inc/single-group'); ?>
                  <?php elseif($term->slug === 'day'): ?>
                  <?php get_template_part('service_inc/single-day'); ?>
                  <?php elseif($term->slug === 'support'|| $term->slug === 'school'|| $term->slug === 'interact'||$term->slug === 'consultation'): ?>
                  <?php get_template_part('service_inc/single-others'); ?>
                  
                 <?php endif; ?> 
                 <?php endforeach; ?> 
                 <?php endif; ?>  
                 <?php
$current_post = get_post(); // 現在の投稿を取得

// 現在の投稿に関連するタームを取得（カスタムタクソノミーの場合）
$terms = get_the_terms($current_post, 'facility');

$term_slugs = array('nursing','group','day','support','interact','school','consultation','handi-group');

if ($terms && !is_wp_error($terms)) {
    foreach ($terms as $term) {
        $term_slugs[] = $term->slug;
    }
    $term = current($terms); // 最初のタームを取得（この部分は必要に応じて変更してください）
    $term_slug_btn = $term->slug; // タームのスラッグを取得
    $term_slug_name = $term->name; // タームのスラッグを取得
   
    $taxonomy_archive_url = get_term_link($term); // タクソノミーアーカイブページへのリンクを取得
 
}


// 前後の投稿を取得（同じタームに属する投稿のみ）
$prev_post = get_adjacent_post(true, '', true, 'facility', $term_slugs);
$next_post = get_adjacent_post(true, '', false, 'facility', $term_slugs);

?>

<div class="service-postLinks">
    <div class="service-postLinks__link service-postLinks__link-prev">
        <?php if ($prev_post) : ?>
            <a href="<?php echo esc_url(get_permalink($prev_post->ID)); ?>">
                <span class="service-postLinks__link-img"><?php echo get_the_post_thumbnail($prev_post->ID, 'thumbnail'); ?></span>
                <span class="service-postLinks__link-txt"><?php echo esc_html($prev_post->post_title); ?></span>
            </a>
        <?php endif; ?>
    </div>

    <div class="service-postLinks__link service-postLinks__link-next">
        <?php if ($next_post) : ?>
            <a href="<?php echo esc_url(get_permalink($next_post->ID)); ?>">
                <span class="service-postLinks__link-img"><?php echo get_the_post_thumbnail($next_post->ID, 'thumbnail'); ?></span>
                <span class="service-postLinks__link-txt"><?php echo esc_html($next_post->post_title); ?></span>
            </a>
        <?php endif; ?>
    </div>
    <div class="service-postLinks__btn">
  <a class="btn" href="<?php echo esc_url($taxonomy_archive_url)?>"> <?php echo esc_html($term_slug_name)  ?>へ戻る</a>
  </div>
</div>
 
                  </div>
                  </article >
                
                  <?php endwhile; ?>   
                <?php endif; ?> 
              </div>
              </section>   
              <?php get_template_part('include/contact'); ?>
            </main>
          
          </div>
        </div>
        <?php get_template_part('include/footer'); ?>
  
      </div>
      <?php get_template_part('include/mobile-menu');?>
    </div>
    <?php wp_footer(); ?>
  </body>
</html>
