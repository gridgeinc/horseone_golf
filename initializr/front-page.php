<?php get_header(); ?>
<section id="mv">
    <picture>
        <source media="(max-width: 640px)" srcset="<?php echo get_template_directory_uri(); ?>/img/mv--sp.jpg">
        <img src="<?php echo get_template_directory_uri(); ?>/img/mv.jpg" alt="">
    </picture>

    <div class="fvTxt">
        <div class="div">
            <div class="fvLogo mbS2"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-fv.svg" alt="" width="160"></div>
            <p class="txt mbS2 ls_xl">データで発見、数値で変える<br>ゴルフがもっと楽しく、うまくなる</p>
            <a href="<?= home_url(); ?>/contact/?kind=contact1" class="appBtn">
                <p class="ttl mbS3">当日体験OK!</p>
                <div class="flex alignCenter justCenter">
                    <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/ic-calendar.svg" alt="" width="28"></div>
                    <p class="bold white">無料体験お申し込みはこちら</p>
                </div>
            </a>
        </div>
    </div>
</section>


<div class="bgSpecial">
    <div class="bgSpecialIn"></div>
    <section id="special">
        <div class="specialInner relative">
            <div class="specialSlide">
                <div class="swiper-wrapper">
                    <?php
                    $args = [
                        'post_type'      => 'post',
                        'posts_per_page' => -1,
                        'category_name'  => 'special',
                    ];

                    $special_query = new WP_Query($args);

                    if ($special_query->have_posts()) :
                        while ($special_query->have_posts()) : $special_query->the_post();
                            if (has_post_thumbnail()) {
                                $img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                            } else {
                                $img_url = get_template_directory_uri() . '/img/noimage.png';
                            }
                    ?>
                            <div class="swiper-slide">
                                <a href="<?php the_permalink(); ?>">
                                    <img src="<?php echo esc_url($img_url); ?>" alt="<?php the_title_attribute(); ?>" class="mb5">
                                    <p class="text-center bold fsM4 lh_m"><?php the_title_attribute(); ?></p>
                                </a>
                            </div>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
    <section id="news">
        <div class="cnt padding" data-aos="fade">
            <div class="cntS2">
                <h2 class="inter bold subColor fsM mbS ls_m en">News</h2>
                <ul class="topNewsList mbS mbSpM2">
                    <?php
                    $args = [
                        'post_type'      => 'post',
                        'posts_per_page' => 3,
                    ];

                    $news_query = new WP_Query($args);

                    if ($news_query->have_posts()) :
                        while ($news_query->have_posts()) : $news_query->the_post();
                            // カテゴリー取得（最初の一つだけ）
                            $category = get_the_category();
                            $cat_name = !empty($category) ? esc_html($category[0]->name) : '';
                    ?>
                            <li>
                                <a href="<?php the_permalink(); ?>">
                                    <span class="date"><?php echo get_the_date('Y.m.d'); ?></span>
                                    <span class="newsCat"><?php echo $cat_name; ?></span>
                                    <h3 class="ttl"><?php the_title(); ?></h3>
                                </a>
                            </li>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>
                </ul>
                <div class="text-center">
                    <a href="<?= home_url(); ?>/news" class="cmnbtn --center"><span>お知らせ一覧を見る</span></a>
                </div>
            </div>
        </div>
    </section>
</div>
<script>
    const mySwiper = new Swiper('.specialSlide', {
        loop: true,
        slidesPerView: 1.7,
        spaceBetween: 20,
        centeredSlides: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            768: {
                centeredSlides: false,
                slidesPerView: 4,
                spaceBetween: 30,
            }
        }
    });
</script>
<div class="bgConcept">
    <div class="bgConceptIn"></div>
    <div class="cnt padding" data-aos="fade">
        <div class="cntS">
            <div class="choseBox">
                <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/topChose.jpg" alt=""></div>
                <div class="txt bgMainColor">
                    <div>
                        <h2 class="white bold600 fsM lh_m text-center mbS ls_l">ホースワンは<br>このような方に選ばれています</h2>
                        <ul class="checkList fsM4 bold600--all">
                            <li><span><span class="mainColor">自分のペースで</span>確実に上達したい方</span></li>
                            <li><span>趣味として<span class="mainColor">ゴルフを楽しみたい方</span></span></li>
                            <li><span><span class="mainColor">データと分析で</span>、レベルアップを目指したい方</span></li>
                            <li><span><span class="mainColor">はじめてでも不安なく</span>ゴルフを始めたい方</span></li>
                            <li><span>ラウンドに備え、<span class="mainColor">自信をつけたい方</span></span></li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <section id="topConcept">
        <div class="cnt paddingW pt0" data-aos="fade">
            <div class="cntM">
                <div class="topConceptFlex">
                    <div class="txt">
                        <div class="ttlWrap white mbS">
                            <div class="en">Concept</div>
                            <h2 class="ja">想い</h2>
                        </div>
                        <h3 class="white bold600 fsL4 lh_m mbS ls_m">自分らしく、楽しみながら、<br>確実にうまくなるゴルフ空間</h3>
                        <p class="white lh_xxl2">私たちが大切にしているのは、「どんなスイングが正しいか」ではなく、<br class="pc">「どんなゴルフを楽しみたいか」。<br class="pc">型にはめて矯正するのではなく、一人ひとりが持つ力を活かしながら、<br class="pc">自分に合ったスタイルで上達できることを目指しています。<br><br>
                            上達を支える軸には、最新機材と精密なデータがあります。<br><br>
                            感覚と数値をすり合わせながら、気づいたらスコアも、<br class="pc">ゴルフへの想いも変わっていた──<br>そんなレッスンと環境を、ここ岡山からお届けします。
                        </p>
                    </div>
                    <div class="img">
                        <div><img src="<?php echo get_template_directory_uri(); ?>/img/topConcept1.jpg" alt=""></div>
                        <div><img src="<?php echo get_template_directory_uri(); ?>/img/topConcept2.jpg" alt=""></div>
                        <div><img src="<?php echo get_template_directory_uri(); ?>/img/topConcept3.jpg" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<div class="txtSlide">
    <div class="c-text js-tick">
        <div class="c-text__item js-tick-item">HORSE ONE GOLF STUDIO</div>
        <div class="c-text__item js-tick-item">HORSE ONE GOLF STUDIO</div>
    </div>
</div>
<section id="feature">
    <div class="cnt padding" data-aos="fade">
        <div class="cntM">
            <div class="ttlWrap text-center mbS">
                <div class="en subColor ls_m">Feature</div>
                <h2 class="ja">ホースワンゴルフスタジオの特徴</h2>
            </div>
            <div class="featureBox mbM3">
                <a href="<?= home_url(); ?>/facility/#feature1" class="featureBoxItem">
                    <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/topFeature1.jpg" alt=""></div>
                    <div class="txt white bgMainColor matchHeight">
                        <div class="num inter fsS mbS">Feature.01</div>
                        <p class="fsM32 bold600 lh_m ls_m">自分に合った練習方法で、<br class="pc">楽しく・確実にステップアップ</p>
                    </div>
                </a>
                <a href="<?= home_url(); ?>/facility/#feature2" class="featureBoxItem">
                    <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/topFeature2.jpg" alt=""></div>
                    <div class="txt white bgMainColor matchHeight">
                        <div class="num inter fsS mbS">Feature.02</div>
                        <p class="fsM32 bold600 lh_m ls_m">AI×最先端測定で、<br class="pc">“なんとなく”を卒業する</p>
                    </div>
                </a>
                <a href="<?= home_url(); ?>/facility/#feature3" class="featureBoxItem">
                    <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/topFeature3.jpg" alt=""></div>
                    <div class="txt white bgMainColor matchHeight">
                        <div class="num inter fsS mbS">Feature.03</div>
                        <p class="fsM32 bold600 lh_m ls_m">型にはめるのではなく、<br class="pc">個性を引き出すレッスン</p>
                    </div>
                </a>
                <a href="<?= home_url(); ?>/facility/#feature4" class="featureBoxItem">
                    <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/topFeature4.jpg" alt=""></div>
                    <div class="txt white bgMainColor matchHeight">
                        <div class="num inter fsS mbS">Feature.04</div>
                        <p class="fsM32 bold600 lh_m ls_m">岡山駅徒歩圏内。<br>通いやすさも、本気の継続力に</p>
                    </div>
                </a>
                <a href="<?= home_url(); ?>/facility/#feature5" class="featureBoxItem">
                    <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/topFeature5.jpg" alt=""></div>
                    <div class="txt white bgMainColor matchHeight">
                        <div class="num inter fsS mbS">Feature.05</div>
                        <p class="fsM32 bold600 lh_m ls_m">集中と安心の空間、<br>プライベートルームで<br class="pc">本気の1時間を</p>
                    </div>
                </a>
                <a href="<?= home_url(); ?>/facility/#feature6" class="featureBoxItem">
                    <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/topFeature6.jpg" alt=""></div>
                    <div class="txt white bgMainColor matchHeight">
                        <div class="num inter fsS mbS">Feature.06</div>
                        <p class="fsM32 bold600 lh_m ls_m">2025年5月オープン。<br>最新の環境で、<br class="pc">快適にゴルフを楽しめる</p>
                    </div>
                </a>
            </div>
            <div class="text-center">
                <a href="<?= home_url(); ?>/facility/#faciFeature" class="cmnbtn --center"><span>ホースワンゴルフスタジオの<br class="sp">特徴を詳しく見る</span></a>
            </div>
        </div>
    </div>
</section>
<section id="facility">
    <div class="cnt padding" data-aos="fade">
        <div class="cntM">
            <div class="ttlWrap text-center white mbS">
                <div class="en">Facility</div>
                <h2 class="ja">施設紹介</h2>
            </div>
            <h3 class="text-center white bold600 fsL5 lh_m mbS3">プレイスタイルに合わせた空間</h3>
            <p class="text-center white mbS">目的に合わせて選べる、こだわりの練習空間</p>
            <div class="facilityBox" data-aos="fade">
                <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/topFacility1-1.jpg" alt=""></div>
                <div class="txt">
                    <span class="largeEn">Putter</span>
                    <div class="relative">
                        <h3 class="mainColor bold600 fsL35 lh_m mbS mbSpM3">パター練習エリア</h3>
                        <p class="bold600 fsM2 lh_m mbS mbSpS3">感覚と数値、両方から見直せる“パター専用ゾーン”</p>
                        <p class="mbM3 lh_xl">パター一打の精度がスコアを大きく左右するからこそ、感覚任せではなく、見える化された練習が必要です。TOURPUTT CircleとSAM PuttLabを活用し、「理由ある改善」に取り組みます。</p>
                        <div class="facilityBtnWrap --col2 mbS">
                            <a href="<?= home_url(); ?>/facility/#faciPutter-1" class="facilityBtn --dounyuu" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/topFacility1-btn1.jpg);">
                                <p class="en bold600 fsS">ツアーパット・サークル</p>
                                <p class="en bold600 fsM3">TOURPUTT Circle</p>
                                <p>傾斜も再現するパター練習</p>
                            </a>
                            <a href="<?= home_url(); ?>/facility/#faciPutter-2" class="facilityBtn --dounyuu" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/topFacility1-btn2.jpg);">
                                <p class="en bold600 fsS">パットラボ</p>
                                <p class="en bold600 fsM3 lh_s">SAM PuttLab</p>
                                <p>ストロークのクセを見える化</p>
                            </a>
                        </div>
                        <a href="<?= home_url(); ?>/facility/#faciStyle1" class="cmnbtn"><span>パター練習エリアで出来ることを見る</span></a>
                    </div>
                </div>
            </div>
            <div class="facilityBox" data-aos="fade">
                <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/topFacility2-1.jpg" alt=""></div>
                <div class="txt">
                    <span class="largeEn">Secret</span>
                    <div class="relative">
                        <h3 class="mainColor bold600 fsL35 lh_m mbS mbSpM3">個室打席</h3>
                        <p class="bold600 fsM2 lh_m mbS mbSpS3">データで可視化する、<br>本質的なスイング練習</p>
                        <p class="mbM3 lh_xl">お一人での「打ちっぱなし」とは異なり、スイングの軌道やスピン量などの詳細なデータをリアルタイムで可視化し、インストラクターがその数値をもとに的確なアドバイスを行います。感覚に頼らず、根拠ある上達ができる環境です。</p>
                        <div class="facilityBtnWrap --col3 mbS">
                            <a href="<?= home_url(); ?>/facility/#faciSecret-1" class="facilityBtn" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/topFacility2-btn1.jpg);">
                                <p class="en bold600 fsM4 lh_s">２打席あり<br>（個室）</p>
                            </a>
                            <a href="<?= home_url(); ?>/facility/#faciSecret-2" class="facilityBtn" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/topFacility2-btn2.jpg);">
                                <p class="en bold600 fsM4 lh_s">グループ<br>レッスン<br>可能</p>
                            </a>
                            <a href="<?= home_url(); ?>/facility/#faciSecret-3" class="facilityBtn --dounyuu" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/topFacility2-btn3.jpg);">
                                <p class="en bold600 fsS">ジョイゴルフ スマートプラス</p>
                                <p class="en bold600 fsM3">JoyGolf smart+</p>
                                <p class="lh_m">スイングの骨格を自動分析し、<br>打球の軌道やヘッドの動きを再現</p>
                            </a>
                        </div>
                        <a href="<?= home_url(); ?>/facility/#faciStyle2" class="cmnbtn"><span>個室打席で出来ることを見る</span></a>
                    </div>
                </div>
            </div>
            <div class="facilityBox" data-aos="fade">
                <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/topFacility3-1.jpg" alt=""></div>
                <div class="txt">
                    <span class="largeEn">Private</span>
                    <div class="relative">
                        <h3 class="mainColor bold600 fsL35 lh_m mbS mbSpM3">プライベートルーム</h3>
                        <p class="bold600 fsM2 lh_m mbS mbSpS3">精密データと静寂空間で、<br>理想の1本と出会う</p>
                        <p class="mbM3 lh_xl">完全個室のプライベートルームでは、TRACKMANやSLAPなどの最先端機器によって、フォームやクラブ選びを数値で可視化します。600本近くのシャフトを試打でき、フィッティング結果に基づいて、クラフトマンが最適な1本を組み立てます。</p>
                        <div class="facilityBtnWrap --col2 mbS">
                            <a href="<?= home_url(); ?>/facility/#faciPrivate-1" class="facilityBtn --dounyuu" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/topFacility3-btn1.jpg);">
                                <p class="en bold600 fsS">トラックマン</p>
                                <p class="en bold600 fsM3">TRACKMAN</p>
                                <p>軍用技術から生まれた精密解析</p>
                            </a>
                            <a href="<?= home_url(); ?>/facility/#faciPrivate-2" class="facilityBtn --dounyuu" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/topFacility3-btn2.jpg);">
                                <p class="en bold600 fsS">スラップ</p>
                                <p class="en bold600 fsM3">SLAP</p>
                                <p>スイング負荷を数値化する新発想</p>
                            </a>
                        </div>
                        <a href="<?= home_url(); ?>/facility/#faciStyle3" class="cmnbtn"><span>プライベートルームで出来ることを見る</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="equipment">
    <div class="cnt padding pb0" data-aos="fade">
        <div class="cntM">
            <div class="ttlWrap text-center mbS">
                <div class="en subColor">Equipment</div>
                <h2 class="ja">導入機材・システムについて</h2>
            </div>
            <h3 class="text-center bold600 fsL5 lh_m mbS3">すべての一打に根拠を。<br>上達のための測定と可視化環境</h3>
            <div class="cntS">
                <p class="text-center text-left-sp mbS">ホースワンでは、スイング・パッティング・クラブ選びのすべてにおいて、数値と映像による“見える化”を実現。<br>SLAPやTRACKMAN、TOURPUTT Circleといった最先端機材を活用し、感覚だけでは届かなかった「変化の理由」がわかる環境を整えています。<br>
                    プロにしかできなかった調整や分析が、全てのプレーヤーの身近な選択肢に。<br>ゴルフとの向き合い方に、確かな根拠と上達の手応えが生まれます。
                </p>
            </div>
        </div>
    </div>
    <div class="equipBox mbM2 mbSpL3" data-aos="fade">
        <div class="bg"><img src="<?php echo get_template_directory_uri(); ?>/img/bg-topFitting.jpg" alt=""></div>
        <div class="cnt --paddingL relative">
            <div class="cntS paddingS pb0">
                <h3 class="equipTtl fsL3 bold600 white ls_l">フィッティング</h3>
                <p class="fsM35 mbS mbSpM2 white relative z-1">データで読み解き、感覚で整える。スイングが変わる一本へ</p>
                <div class="equipFlex flex justBetween">
                    <div class="en">Fitting</div>
                    <a href="<?php echo home_url('facility/#faciPrivate-2'); ?>" class="equipItem">
                        <div class="dounyu">西日本<br><span>初導入</span></div>
                        <div class="img mbS"><img src="<?php echo get_template_directory_uri(); ?>/img/topFitting1.jpg" alt=""></div>
                        <p class="text-center bold600">スイング負荷を数値化する新発想</p>
                        <h4 class="bold600 fsM2 mainColor text-center mbS2 lh_m">SLAP｜スラップ</h4>
                        <p>スイング中にシャフトへかかる負荷を可視化し、スイング特性にマッチしたシャフトを導き出すフィッティングシステム。スイングデータをもとに、最適な1本を科学的にカスタマイズします。</p>
                    </a>
                    <a href="<?php echo home_url('facility/#faciCustom'); ?>" class="equipItem">
                        <div class="img mbS"><img src="<?php echo get_template_directory_uri(); ?>/img/topFitting2.jpg" alt=""></div>
                        <p class="text-center bold600">スイングの真価を引き出す一本を</p>
                        <h4 class="bold600 fsM2 mainColor text-center mbS2 lh_m">クラフト＆組み立て工房</h4>
                        <p>スイングデータをもとに、600本以上の試打クラブからスイングに最適な1本を選定。クラフトマンが一本一本を手作業で組み上げ、データと感覚の両面から納得のカスタムクラブをご提供します。</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="equipBox mbM2 mbSpL3" data-aos="fade">
        <div class="bg"><img src="<?php echo get_template_directory_uri(); ?>/img/bg-topPatting.jpg" alt=""></div>
        <div class="cnt --paddingL relative">
            <div class="cntS paddingS pb0">
                <h3 class="equipTtl fsL3 bold600 white ls_l">パッティング</h3>
                <p class="fsM35 mbS mbSpM2 white relative z-1">打ち出しと手元を可視化。ストロークに確信を</p>
                <div class="equipFlex flex justBetween">
                    <div class="en">Putting</div>
                    <a href="<?php echo home_url('facility/#faciPutter-1'); ?>" class="equipItem">
                        <div class="dounyu">中国地方<br><span>初導入</span></div>
                        <div class="img mbS"><img src="<?php echo get_template_directory_uri(); ?>/img/topPatting1.jpg" alt=""></div>
                        <p class="text-center bold600">傾斜も再現するパター練習</p>
                        <h4 class="bold600 fsM2 mainColor text-center mbS2 lh_m">TOURPUTT Circle｜<br>ツアーパット・サークル</h4>
                        <p>傾斜・方向・距離の違いを組み合わせた36通りのラインを再現。リアルな転がりを体感しながら、実戦力を養えるシステムです。 </p>
                    </a>
                    <a href="<?php echo home_url('facility/#faciPutter-2'); ?>" class="equipItem">
                        <div class="img mbS"><img src="<?php echo get_template_directory_uri(); ?>/img/topPatting2.jpg" alt=""></div>
                        <p class="text-center bold600">手元とフェースを数値分析し、ストロークを見える化</p>
                        <h4 class="bold600 fsM2 mainColor text-center mbS2 lh_m">SAM PuttLab｜パットラボ</h4>
                        <p>インパクト時の手の動きやフェースの向きを高精度に分析。自分では気づきにくいストロークのクセやズレを数値で可視化します。</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="equipBox mbM2 mbSpL3" data-aos="fade">
        <div class="bg"><img src="<?php echo get_template_directory_uri(); ?>/img/bg-topSimu.jpg" alt=""></div>
        <div class="cnt --paddingL relative">
            <div class="cntS paddingS pb0">
                <h3 class="equipTtl fsL3 bold600 white ls_l">シミュレーター</h3>
                <p class="fsM35 mbS mbSpM2 white relative z-1">リアルなプレイ体験とデータ解析。フォーム改善へつなげるシミュレーション</p>
                <div class="equipFlex flex justBetween">
                    <div class="en">Simulator</div>
                    <a href="<?php echo home_url('facility/#faciSecret-3'); ?>" class="equipItem">
                        <div class="dounyu">個室<br>打席採用</div>
                        <div class="img mbS"><img src="<?php echo get_template_directory_uri(); ?>/img/topSimu1.jpg" alt=""></div>
                        <p class="text-center bold600">臨場感のあるプレイ体験で、楽しみながら上達</p>
                        <h4 class="bold600 fsM2 mainColor text-center mbS2 lh_m">JoyGolf smart+｜<br>ジョイゴルフ スマートプラス</h4>
                        <p>実在のコースを再現し、傾斜やグリーンの速さ、風の影響までも体感できる、臨場感あふれるゴルフシミュレーター。データを可視化しながら、効率的なフォーム改善へつなげます。</p>
                    </a>
                    <a href="<?php echo home_url('facility/#faciPrivate-1'); ?>" class="equipItem">
                        <div class="dounyu">プライ<br>ベート<br>ルーム採用</div>
                        <div class="img mbS"><img src="<?php echo get_template_directory_uri(); ?>/img/topSimu2.jpg" alt=""></div>
                        <p class="text-center bold600">軍用技術から生まれた精密解析</p>
                        <h4 class="bold600 fsM2 mainColor text-center mbS2 lh_m">TRACKMAN｜トラックマン</h4>
                        <p>軍用に使われていたレーダー技術を応用し、スイングや弾道を高精度で解析。打ち出し角、スピン量、キャリー距離、ヘッドの軌道までリアルタイムで計測します。</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="coaching">
    <div class="coachingBg padding pt0">
        <div class="cnt padding" data-aos="fade">
            <div class="cntS">
                <div class="ttlWrap text-center white mbS">
                    <div class="en">Private Coaching</div>
                    <h2 class="ja">個別指導レッスン</h2>
                </div>
                <h3 class="text-center white bold600 fsL5 lh_m">初心者から上級者まで、<br>目的に応じて選べる<br class="sp">個別指導レッスン</h3>
                <div class="coachingLesson paddingS">
                    <div>
                        <div class="ttl">
                            <p class="bold600 text-center white">セミパーソナル（2名まで）｜個室打席でのレッスン</p>
                            <p class="bold600 fsM3 text-center white lh_m2"><span class="fsM15 bold600">個室打席</span>での<br>セミパーソナルレッスン</p>
                        </div>
                        <div class="bottom matchHeight">
                            <div class="img mbS"><img src="<?php echo get_template_directory_uri(); ?>/img/topCoachingLesson1.jpg" alt=""></div>
                            <p>個室打席では、インストラクター1名に対して最大2名まで同時にレッスンを行うセミパーソナル形式を採用しています。レッスンではそれぞれの課題やレベルに合わせた指導を行います。初心者はもちろん、実力アップを目指す中・上級者にもご満足いただける内容です。</p>
                        </div>
                    </div>
                    <div>
                        <div class="ttl">
                            <p class="bold600 text-center white">パーソナルレッスン｜完全個室・マンツーマン</p>
                            <p class="bold600 fsM3 text-center white lh_m2">課題に集中できる、<span class="fsM15 bold600">完全個室</span>の<br>マンツーマンレッスン</p>
                        </div>
                        <div class="bottom matchHeight">
                            <div class="img mbS"><img src="<?php echo get_template_directory_uri(); ?>/img/topCoachingLesson2.jpg" alt=""></div>
                            <p>静かな空間で周囲を気にせず、自分のスイングや課題にじっくり向き合える環境をご用意しました。高精度の解析機器によるデータ分析と、プロの視点による指導を組み合わせることで、より深く、効率的な改善が可能に。「本気で変わりたい」「今の自分に合った練習がしたい」──そんな方におすすめしたい、ホースワンならではのレッスンスタイルです。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="instructor">
            <div class="cnt mbSpL4" data-aos="fade">
                <div class="cntS relative padding">
                    <p class="enTtl">Instructor</p>
                    <div class="instFlex">
                        <div class="text">
                            <div class="name mbS2 flex cg1em alignCenter">
                                <p class="ja bold600 fsM15 lh_m">坂本 一馬</p>
                                <p class="en mainColor">Kazuma Sakamoto</p>
                            </div>
                            <div class="instInfo mbS">
                                <dl class="mbS2">
                                    <dt>経　　歴</dt>
                                    <dd>作陽学園高等学校ゴルフ部 / 東北福祉大学ゴルフ部 </dd>
                                </dl>
                                <p>ツアープロ・奥嶋誠昭氏に師事し、技術と指導姿勢を受け継ぐ。<br>現場でも評価の高い指導スタイルを確立している。</p>
                            </div>
                            <p class="bold600 fsM2 lh_m mbS mbSpS32 ls_m">型にはめずに伸ばす。データを味方に、<br class="pc">楽しく上達の軌道に</p>
                            <p class="lh_xl mbS">スイングを”正解とされる型”にはめるのではなく、その人が持っている力をどう伸ばすかにこだわったレッスンを大切にしています​。</p>
                            <a href="<?= home_url(); ?>/price/#priceCoaching" class="cmnbtn"><span>もっと詳しく知る</span></a>
                        </div>
                        <div class="img">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/instructor.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="comment">
            <div class="cnt paddingS mbS mbSpL4">
                <div class="cntS">
                    <p class="mainColor bold600 inter fsL5 lh_s mbS">Special Comment</p>
                    <div class="commentFlex">
                        <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/comment.jpg" alt=""></div>
                        <div class="text ls_l">
                            <div class="name mbS2 flex cg1em alignCenter">
                                <p class="ja bold600 fsM15 lh_m">奥嶋 誠昭</p>
                                <p class="en mainColor">Tomoaki Okushima</p>
                            </div>
                            <div class="instInfo mbS">
                                <dl class="mbS2">
                                    <dt>経　　歴</dt>
                                    <dd class="fsS">
                                        <p class="mbS2">1980年（昭和55年）3月26日生まれ。<br>
                                            ツアープロコーチ。<br>
                                            ツアープロの稲見萌寧（2021年度賞金女王、東京五輪銀メダル）、<br class="pc">
                                            木下稜介、高橋彩華らのコーチとして活躍。</p>
                                        <p>横浜にある「ノビテックゴルフスタジオ」で、体とクラブの動きを3次元で計測・解析する『GEARS』（ギアーズ）をはじめとする、世界最先端機器を駆使したレッスンを行っている。</p>

                                    </dd>
                                </dl>
                            </div>
                            <p class="lh_xl mbS">坂本インストラクターは、どんな相手にも誠実かつ丁寧に向き合い、年齢や技術レベルを問わず、その人に最適な言葉と方法で導くことのできる稀有な指導者です。<br>ホースワンゴルフスタジオは彼の妥協を許さないこだわりと、ゴルフに対する深い情熱が隅々まで息づいた空間です。<br>
                                <!-- パター、アプローチ、トレーニング、フィッティングに至るまで、あらゆる要素を高精度な設備とデータで網羅したこのスタジオは、西日本において他に類を見ない総合力を誇っています。<br>ゴルフと本気で向き合い、確かな成長を求めるすべてのプレーヤーに、心から推薦いたします。 -->
                            </p>
                            <a href="<?= home_url(); ?>/price/#comment" class="cmnbtn"><span>もっと詳しく知る</span></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>




        <div class="cnt cntL otherInstructorBlock relative">
            <div class="otherInstructorSlide">
                <div class="swiper-wrapper">
                    <div id="other" class="paddingS mbS mbSpL4 swiper-slide">
                        <div class="cntS">
                            <p class="mainColor bold600 inter fsL5 lh_s mbS">Other Instructor</p>
                            <div class="commentFlex">
                                <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/instructorSlide1.jpg" alt=""></div>
                                <div class="text ls_l">
                                    <div class="name mbS2 flex cg1em alignCenter">
                                        <p class="ja bold600 fsM15 lh_m">富永 暁登</p>
                                        <p class="en mainColor">Akito Tominaga</p>
                                    </div>
                                    <div class="instInfo mbS">
                                        <dl class="mbS2">
                                            <dt>得意分野</dt>
                                            <dd class="fsS">
                                                <p class="mbS2">パター／再現性の高いスイングづくり</p>
                                            </dd>
                                        </dl>
                                    </div>
                                    <p class="bold600 fsM2 lh_m mbS mbSpS32 ls_m">上達の近道は、楽しみながら<br class="pc">“繰り返せる動き”を身につけること</p>
                                    <p class="lh_xl mbS">
                                        トラックマンをはじめ、ホースワンには精密にフォームを確認できる設備が揃っています。パター練習に特化したエリアもあるので、「感覚だけじゃなくて数字でも理解したい」という方にぴったりです。上手くなるには“楽しく続けられる”ことが一番。一緒に再現性のあるスイングをつくっていきましょう！
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div id="other" class="paddingS mbS mbSpL4 swiper-slide">
                        <div class="cntS">
                            <p class="mainColor bold600 inter fsL5 lh_s mbS">Other Instructor</p>
                            <div class="commentFlex">
                                <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/instructorSlide2.jpg" alt=""></div>
                                <div class="text ls_l">
                                    <div class="name mbS2 flex cg1em alignCenter">
                                        <p class="ja bold600 fsM15 lh_m">安本 美咲</p>
                                        <p class="en mainColor">Misaki Yasumoto</p>
                                    </div>
                                    <div class="instInfo mbS">
                                        <dl class="mbS2">
                                            <dt>得意分野</dt>
                                            <dd class="fsS">
                                                <p class="mbS2">100ヤード以内／やさしいスイングづくり</p>
                                            </dd>
                                        </dl>
                                    </div>
                                    <p class="bold600 fsM2 lh_m mbS mbSpS32 ls_m">スコアアップの近道は、“自分に合ったスイング”</p>
                                    <p class="lh_xl mbS">
                                        ホースワンの魅力は、スイングを数値で見える化できること。機材を活用して、お客様にとって「一番いいスイング」を一緒に見つけていきます。難しく考えすぎず、楽しみながら、確実にステップアップしていきましょう。短い距離の精度を上げたい方、スコアアップを目指す方もお待ちしています！
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div id="other" class="paddingS mbS mbSpL4 swiper-slide">
                        <div class="cntS">
                            <p class="mainColor bold600 inter fsL5 lh_s mbS">Other Instructor</p>
                            <div class="commentFlex">
                                <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/instructorSlide3.jpg" alt=""></div>
                                <div class="text ls_l">
                                    <div class="name mbS2 flex cg1em alignCenter">
                                        <p class="ja bold600 fsM15 lh_m">花下 苺</p>
                                        <p class="en mainColor">Ichigo Hanashita</p>
                                    </div>
                                    <div class="instInfo mbS">
                                        <dl class="mbS2">
                                            <dt>得意分野</dt>
                                            <dd class="fsS">
                                                <p class="mbS2">ピンを狙うショット／体の使い方指導</p>
                                            </dd>
                                        </dl>
                                    </div>
                                    <p class="bold600 fsM2 lh_m mbS mbSpS32 ls_m">女性の悩みに寄り添いながら、<br class="pc">アグレッシブに上達</p>
                                    <p class="lh_xl mbS">
                                        ツアーパッドなどの最新設備で、パターを細かく分析できるのがホースワンの魅力です。筋肉や身体の使い方を学んできた経験を活かして、ヘッドスピードや体格に合わせた無理のないアドバイスを行っています。女性の方も気軽に来てくださいね。一緒にピンを狙っていきましょう！
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>


        <script>
            const otherInst = new Swiper('.otherInstructorSlide', {
                loop: true,
                slidesPerView: 1,
                spaceBetween: 20,
                centeredSlides: true,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
        </script>


        <div class="paddingS pt0">
            <div class="text-center" data-aos="fade">
                <a href="" class="cmnbtn --white --center --spL"><span>レッスンを予約する</span></a>
            </div>
        </div>
    </div>
</section>
<section id="price">
    <div class="cnt padding pb0">
        <div class="cntM" data-aos="fade">
            <div class="ttlWrap text-center mbS">
                <div class="en subColor">Price</div>
                <h2 class="ja">料金プランについて</h2>
            </div>
            <h3 class="text-center bold600 fsL5 lh_m mbS3">パターからコース戦略まで、目的に合わせたレッスンプラン</h3>
            <p class="text-center mbS">初心者も経験者も、自分のペースで通えるプランをご用意しています。</p>
            <div class="lineTtl mainColor bold600 fsM3 mbS2 text-center">初期費用(入会時)</div>
            <div class="tableWrap mbS mbSpM2">
                <table class="cmnTable --w100">
                    <thead>
                        <tr>
                            <th></th>
                            <th class="text-center">入会金</th>
                            <th class="text-center">月会費</th>
                            <!-- <th class="text-center">内容</th> -->
                        </tr>
                    </thead>
                    <tr>
                        <th>プレミアム会員</th>
                        <td class="text-center">1,100<span class="enS">円</span></td>
                        <td class="text-center">17,600<span class="enS">円</span></td>
                        <!-- <td>プライベートルーム利用OK</td> -->
                    </tr>
                    <tr>
                        <th>ミドル会員</th>
                        <td class="text-center">1,100<span class="enS">円</span></td>
                        <td class="text-center">6,600<span class="enS">円</span></td>
                        <!-- <td>オープン打席利用OK</td> -->
                    </tr>
                    <tr>
                        <th>学生会員（18歳以下）</th>
                        <td class="text-center">―</td>
                        <td class="text-center">3,300<span class="enS">円</span></td>
                        <!-- <td>学生向け特別プラン</td> -->
                    </tr>
                    <tr>
                        <th>ジュニア会員（13歳未満）</th>
                        <td class="text-center">―</td>
                        <td class="text-center">1,100<span class="enS">円</span></td>
                        <!-- <td>ジュニア特別プラン</td> -->
                    </tr>
                    <tr>
                        <th>ビジター会員</th>
                        <td class="text-center">1,100<span class="enS">円</span></td>
                        <td class="text-center">―</td>
                        <!-- <td>ビジタープラン</td> -->
                    </tr>
                </table>
            </div>
            <div class="mbS mbSpM2">
                <img src="<?php echo get_template_directory_uri(); ?>/img/ic-plus-green.svg" width="65" alt="">
            </div>
            <div class="lineTtl mainColor bold600 fsM3 mbS text-center lh_m">目的に合わせたレッスン&<br class="sp">フィッティングプラン</div>
            <div class="lessonFlex mbS">
                <a href="<?= home_url(); ?>/price/#lesson1">
                    <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/topLesson1.jpg" alt=""></div>
                    <div class="txt bgMainColor">
                        <p class="text-center white bold600 fsM2 lh_m fsSpM3">レッスン（通常）</p>
                        <p class="white text-center fsM35 lh_m">60<span class="enS">分</span>　4,400<span class="enS">円〜</span></p>
                    </div>
                </a>
                <a href="<?= home_url(); ?>/price/#lesson2">
                    <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/topLesson2.jpg" alt=""></div>
                    <div class="txt bgMainColor">
                        <p class="text-center white bold600 fsM2 lh_m fsSpM3">ツアーパット<br class="sp">(テスト型)</p>
                        <p class="white text-center fsM35 lh_m">60<span class="enS">分</span> or 120<span class="enS">分</span>　<br class="sp">6,600<span class="enS">円〜</span></p>
                    </div>
                </a>

                <a href="<?= home_url(); ?>/price/#lesson3">
                    <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/topLesson3.jpg" alt=""></div>
                    <div class="txt bgMainColor">
                        <p class="text-center white bold600 fsM2 lh_m fsSpM3">パットラボ</p>
                        <p class="white text-center fsM35 lh_m">60<span class="enS">分</span>　11,000<span class="enS">円〜</span></p>
                    </div>
                </a>

                <a href="<?= home_url(); ?>/price/#lesson4">
                    <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/topLesson4.jpg" alt=""></div>
                    <div class="txt bgMainColor">
                        <p class="text-center white bold600 fsM2 lh_m fsSpM3">パターレッスン</p>
                        <p class="white text-center fsM35 lh_m">30<span class="enS">分</span>　1,100<span class="enS">円〜</span></p>
                    </div>
                </a>

                <a href="<?= home_url(); ?>/price/#lesson5">
                    <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/topLesson5.jpg" alt=""></div>
                    <div class="txt bgMainColor">
                        <p class="text-center white bold600 fsM2 lh_m fsSpM3">コースレッスン<br class="sp">(9ホール)</p>
                        <p class="white text-center fsM35 lh_m">1<span class="enS">回</span>　10,000<span class="enS">円〜</span></p>
                    </div>
                </a>

                <a href="<?= home_url(); ?>/price/#lesson6">
                    <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/topLesson6.jpg" alt=""></div>
                    <div class="txt bgMainColor">
                        <p class="text-center white bold600 fsM2 lh_m fsSpM3">フィッティング</p>
                        <p class="white text-center fsM35 lh_m">90<span class="enS">分</span>　20,900<span class="enS">円〜</span></p>
                    </div>
                </a>
            </div>
            <div class="text-center">
                <a href="<?= home_url(); ?>/price/" class="cmnbtn --center"><span>料金について詳しく見る</span></a>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="cnt padding" data-aos="fade">
        <div class="cntM">
            <div class="otherpageFlex">
                <a href="<?= home_url(); ?>/facility/#faciAmenities" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/otherPage1.jpg);" class="white text-center lh_m">
                    <p class="en bold600 fsM35">Amenities</p>
                    <p class="ja bold600 fsM2">設備案内</p>
                </a>
                <a href="<?= home_url(); ?>/price/#priceFlow" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/otherPage2.jpg);" class="white text-center lh_m">
                    <p class="en bold600 fsM35">Flow</p>
                    <p class="ja bold600 fsM2">入会の流れ</p>
                </a>
                <a href="<?= home_url(); ?>/price/#priceFaq" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/otherPage3.jpg);" class="white text-center lh_m">
                    <p class="en bold600 fsM35">Q&A</p>
                    <p class="ja bold600 fsM2">よくあるご質問</p>
                </a>
            </div>
        </div>
    </div>
</section>
<section id="voice" class="bgCover" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/bg-voice.jpg);">
    <div class="cnt padding" data-aos="fade">
        <div class="cntM">
            <div class="ttlWrap text-center white mbS">
                <div class="en">Voice</div>
                <h2 class="ja">お客様の声</h2>
            </div>
            <h3 class="text-center white bold600 fsL5 lh_m mbS3">積み重ねた努力が、確かな自信に。</h3>
            <p class="text-center white mbS">ホースワンゴルフスタジオをご利用いただいたお客様の声をご紹介いたします。</p>
        </div>
    </div>
</section>

<div class="padding pb0">
    <?php //echo do_shortcode('[trustindex no-registration=google]') 
    ?>
    <div class="cnt relative">
        <div class="voice-btn swiper-button-next"></div>
        <div class="voice-btn swiper-button-prev"></div>
        <div class="cntS">
            <div class="voiceSlide relative">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="matchHeight">
                            <div class="voiceMan">
                                <div><img src="<?php echo get_template_directory_uri(); ?>/img/ic-voice.svg" alt="" width="75"></div>
                                <p class="fsM4 bold600">（30代・男性）</p>
                            </div>
                            <p class="fsM35 bold600">計測の正確さに驚きました</p>
                            <p>計測機器の精度が本当にすごい。スイングの細かい部分まで数値で確認できて、即修正につなげられます。レッスンも的確で、一つひとつ納得できました。</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="matchHeight">
                            <div class="voiceMan">
                                <div><img src="<?php echo get_template_directory_uri(); ?>/img/ic-voice.svg" alt="" width="75"></div>
                                <p class="fsM4 bold600">（60代・男性）</p>
                            </div>
                            <p class="fsM35 bold600">静かな練習場、という印象です</p>
                            <p>ふだんはラウンド中心ですが、最新機器に惹かれて利用しています。クラブ選びをデータで裏付けできるのが新鮮で楽しい。室内も静かで落ち着いていて、集中できる空間だと感じました。 </p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="matchHeight">
                            <div class="voiceMan">
                                <div><img src="<?php echo get_template_directory_uri(); ?>/img/ic-voice.svg" alt="" width="75"></div>
                                <p class="fsM4 bold600">（40代・女性）</p>
                            </div>
                            <p class="fsM35 bold600">女性でも安心して通えました</p>
                            <p>ゴルフスタジオは初めてでしたが、女性スタッフが受付にいて、設備も清潔で安心感がありました。スイングの癖をデータで見ながらレッスンしてもらえたのが新鮮で、続けたいと思えました。</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="matchHeight">
                            <div class="voiceMan">
                                <div><img src="<?php echo get_template_directory_uri(); ?>/img/ic-voice.svg" alt="" width="75"></div>
                                <p class="fsM4 bold600">（30代・男性）</p>
                            </div>
                            <p class="fsM35 bold600">計測の正確さに驚きました</p>
                            <p>計測機器の精度が本当にすごい。スイングの細かい部分まで数値で確認できて、即修正につなげられます。レッスンも的確で、一つひとつ納得できました。</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="matchHeight">
                            <div class="voiceMan">
                                <div><img src="<?php echo get_template_directory_uri(); ?>/img/ic-voice.svg" alt="" width="75"></div>
                                <p class="fsM4 bold600">（60代・男性）</p>
                            </div>
                            <p class="fsM35 bold600">静かな練習場、という印象です</p>
                            <p>ふだんはラウンド中心ですが、最新機器に惹かれて利用しています。クラブ選びをデータで裏付けできるのが新鮮で楽しい。室内も静かで落ち着いていて、集中できる空間だと感じました。 </p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="matchHeight">
                            <div class="voiceMan">
                                <div><img src="<?php echo get_template_directory_uri(); ?>/img/ic-voice.svg" alt="" width="75"></div>
                                <p class="fsM4 bold600">（40代・女性）</p>
                            </div>
                            <p class="fsM35 bold600">女性でも安心して通えました</p>
                            <p>ゴルフスタジオは初めてでしたが、女性スタッフが受付にいて、設備も清潔で安心感がありました。スイングの癖をデータで見ながらレッスンしてもらえたのが新鮮で、続けたいと思えました。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
<script>
    const voiceSlide = new Swiper('.voiceSlide', {
        loop: true,
        slidesPerView: 1.3,
        spaceBetween: 20,
        centeredSlides: true,
        loopAdditionalSlides: 2,
        navigation: {
            nextEl: '.voice-btn.swiper-button-next',
            prevEl: '.voice-btn.swiper-button-prev',
        },
        breakpoints: {
            768: {
                centeredSlides: false,
                slidesPerView: 3,
                spaceBetween: 25,
            }
        }
    });
</script>


<section id="imgSlide" class="paddingS pb0">
    <div id="imgSlideItem" class="imgSlideItemCmn">
        <div></div>
    </div>
    <div id="imgSlideItem--2" class="imgSlideItemCmn">
        <div></div>
    </div>
</section>
<script>
    let streamingImg = document.getElementById('imgSlideItem');
    let bgx = 0;
    let bgy = 0;
    setInterval(function() {
        bgx += -0.9;
        bgy += 0;
        streamingImg.style.backgroundPosition = bgx + "px " + bgy + "px";
    }, 10);
    let streamingImg2 = document.getElementById('imgSlideItem--2');
    let bgx2 = 0;
    let bgy2 = 0;
    setInterval(function() {
        bgx2 += -0.5;
        bgy2 += 0;
        streamingImg2.style.backgroundPosition = bgx2 + "px " + bgy2 + "px";
    }, 10);
</script>
<?php get_footer(); ?>