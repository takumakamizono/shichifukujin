
<section class="detailed-info">
               <div class="detailed-info__inner">
                    <div class="detailed-info__block">
                    <div class="detailed-info__tit">
                        ご入居までの流れ
                      </div>
                        <div class="detailed-info__img">
                            <img src="<?= get_template_directory_uri(); ?>/images/670×400_01.png" alt="">
                        </div>
                        <div class="detailed-info__text">
                            <div class="detailed-info__desc">
                        <p>ご入居をお考えの方へご利用までの流れをご説明します。</p>
                        </div>
                        <div class="detailed-info__btn">
                        <a class="btn slide-bg" href="<?= home_url('/procedure/') ?>">
                            詳細はこちら
                       </a>
                       </div>
                       </div>

                    </div>
                    <div class="detailed-info__block">
                    <div class="detailed-info__tit">
                        スタッフインタビュー
                      </div>
                        <div class="detailed-info__img">
                            <img src="<?= get_template_directory_uri(); ?>/images/670×400_02.png" alt="">
                        </div>
                        <div class="detailed-info__text">
                            <div class="detailed-info__desc">
                        <p>各施設の七福神スタッフにインタビューしました。</p>

                            </div>
                           <?php
                            $interview  = get_term_by('slug','interview','category');
                            $interview_link = get_term_link($interview,'category');
                           ?>
                    <div class="detailed-info__btn">
                        <a class="btn slide-bg" href="<?= esc_url($interview_link); ?>" >
                        詳細はこちら
                       </a>
                       </div>
                       </div>

                    </div>
                    <div class="detailed-info__block">
                      <div class="detailed-info__tit">
                        よくある質問
                      </div>
                        <div class="detailed-info__img">
                            <img src="<?= get_template_directory_uri(); ?>/images/670×400_03.png" alt="">
                        </div>
                        <div class="detailed-info__text">
                            <div class="detailed-info__desc">
                            <p>お客様から頂いたよくある質問をまとめました。</p>

                            </div>
                            <div class="detailed-info__btn">
                        <a class="btn slide-bg" href="<?= home_url('/faq/') ?>">
                        詳細はこちら
                       </a>
                       </div>
                       </div>

                    </div>
                </div>
                <div class="detailed-info__bg"></div>
 </section>

