<div class="news">
    <div class="news__inner">
    <?php
    $categories = ['settlement','improvement', 'reward', 'teikan'];

    foreach ($categories as $category) {
        $category_object = get_category_by_slug($category);
        $category_name = $category_object->name;
        ?>
        <div class="news-report">
            <h3 class="news-report__title"><span><?= ucfirst($category_name) ?></span></h3>
            <?php if ($category === 'settlement'): ?>
                <?php
                $thisyear = date('Y'); // 現在の西暦年を取得
                $era_dictionary = [
                    'reiwa' => ['start' => 2019, 'era' => '令和'],
                    'heisei' => ['start' => 1989, 'era' => '平成'],
                    // 必要に応じて他の元号を追加してください
                ];
                ?>
                <?php for ($year = $thisyear; $year >= 2000; $year--): ?>
                    <?php $era = ''; ?>
                    <?php foreach ($era_dictionary as $era_key => $era_value): ?>
                        <?php if ($year >= $era_value['start']): ?>
                            <?php $era = $era_key; ?>
                            <?php break; ?>
                        <?php endif; ?>
                    <?php endforeach; ?>

                    <?php if ($era != ''): ?>
                        <?php $era_year = $year - $era_dictionary[$era]['start'] + 1; ?>
                        <?php $era_year_label = ($era_year === 1) ? '元' : $era_year; ?>
                        <?php $start_date = date('Y-m-d', strtotime($year . '-04-01')); ?>
                        <?php $end_date = date('Y-m-d', strtotime(($year + 1) . '-03-31')); ?>

                        <?php $args = [
                            'category_name' => $category,
                            'posts_per_page' => -1,
                            'date_query' => [
                                'after' => $start_date,
                                'before' => $end_date,
                                'inclusive' => true,
                            ],
                            'order' => 'ASC'
                        ]; ?>
                        <?php $query = new WP_Query($args); ?>

                        <?php if ($query->have_posts()): ?>
                            <ul class="news__list news-report__list">
                                <h4 class="news-report__year"><span><?= $era_dictionary[$era]['era'] . $era_year_label ?>年度</span></h4>
                                <?php while ($query->have_posts()): ?>
                                    <?php $query->the_post(); ?>
                                    <li class="news__box news-report__pdf"><a href="<?= esc_url(get_permalink()) ?>"><?= get_the_title() ?></a></li>
                                <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>

                        <?php wp_reset_postdata(); ?>
                    <?php endif; ?>
                <?php endfor; ?>
            <?php else: ?>
                <?php
                $args = [
                    'category_name' => $category,
                    'posts_per_page' => -1,
                    'order' => 'ASC'
                ];
                $query = new WP_Query($args);

                if ($query->have_posts()): ?>
                    <ul class="news__list news-report__list">
                        <?php while ($query->have_posts()): ?>
                            <?php $query->the_post(); ?>
                            <li class="news__box news-report__pdf"><a href="<?= esc_url(get_permalink()) ?>"><?= get_the_title() ?></a></li>
                        <?php endwhile; ?>
                    </ul>
                <?php endif;

                wp_reset_postdata();
                ?>
            <?php endif; ?>
        </div>
    <?php
    }
    ?>
    </div>
</div>