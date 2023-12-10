<aside class="side-archive">
	<div class="side-archive__tit">カテゴリ一覧</div>
	<?php
	$cat_slug = 'news';
	$args = array(
		'posts_per_page' => -1,
		'category_name' => $cat_slug,
	);

	$archive_query = new WP_Query($args);
	$archive_list = array();

	while ($archive_query->have_posts()) {
		$archive_query->the_post();
		// 年月毎に記事情報を配列に格納
		$archive_list[get_the_time('Y/n', $post->ID)][] = $post->post_title;
	}
	wp_reset_postdata();
	?>

	<?php if ($archive_list) : ?>
		<ul class="side-archive__list">
			<?php foreach ($archive_list as $year_month => $archive) :
				$year_month_arr = explode('/', $year_month);
			?>
				<li>
					<a href="<?php echo esc_url(home_url('/' . $year_month . '/?cat_slug=' . $cat_slug)) ?>">
						<?php echo $year_month_arr[0] . '年' . $year_month_arr[1] . '月' ?> [<?php echo count($archive) ?>]</a>
				</li>
			<?php endforeach; ?>
		</ul>
	<?php endif; ?>
</aside>