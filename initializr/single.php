<?php
get_header();
?>


<?php
// while (have_posts()) : the_post();
?>

<?php
$category = get_the_category();
$cat_id   = $category[0]->cat_ID;
$cat_name = $category[0]->cat_name;
$cat_slug = $category[0]->category_nicename;
?>
<div class="pageFv padding" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/fvNews.jpg)">
    <div class="en fsL3">News</div>
    <h2 class="ja fsM4">お知らせ</h2>
</div>
<div class="cnt">
    <div class="cntM">
        <?php get_template_part('parts/breadcrumb'); ?>
    </div>
</div>

<section class="mtS">
    <div class="cnt relative">
        <div class="cntL">
            <div class="rw flexPc flex">
                <div class="col col-3 colSp1">


                    <div class="mbM2 mbSpM">
                        <div class="">
                            <article class="singleColumnArticle">
                                <ul class="singleColumnInfoUl inlineBlockUl mb10">
                                    <li class="date ls_s"><?php the_time('Y.m.d'); ?></li>

                                    <?php
                                    $categories = get_the_category();
                                    if ($categories) {
                                        echo '<ul class="cateUl">';
                                        foreach ($categories as $category) {
                                            echo '<li class="' . $category->slug . '">' . $category->name . '</li>';
                                        }
                                        echo '</ul>';
                                    }
                                    ?>

                                    <div class="sidebarTagWrap">
                                        <?php the_tags('<ul><li>', '</li><li>', '</li></ul>'); ?>
                                    </div>

                                </ul>
                                <h2 class="singleColumnTitle bold"><?php the_title(); ?></h2>
                                <div class="singleColumnArticleContent">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php
                                        // アイキャッチ画像のIDを取得
                                        $thumbnail_id = get_post_thumbnail_id();
                                        // mediumサイズの画像内容を取得（引数にmediumをセット）
                                        $eye_img = wp_get_attachment_image_src($thumbnail_id, 'full');
                                        $eye_img_s = wp_get_attachment_image_src($thumbnail_id, 'thumb_size_s_false', false);
                                        ?>
                                        <img class="mb30 w100" src="<?php echo $eye_img_s[0]; ?>">
                                    <?php else : ?>
                                    <?php endif; ?>

                                    <div class="entry"><?php the_content(); ?></div>

                                </div>
                            </article>
                        </div>

                        <div class="">
                            <?php get_template_part('parts/temp-pre-next'); ?>
                        </div>
                    </div>


                    <!-- 関連記事セクションの開始 -->
                    <?php
                    $args = array(
                        'posts_per_page' => 3,
                        "post__not_in" => [$post->ID],
                    );
                    $wp_query = new WP_Query($args);
                    if ($wp_query->have_posts()) :
                    ?>

                        <div class="otherNewsBlock">
                            <div class="otherNewsBlockTitle mbS">
                                他の関連記事を見る
                            </div>

                            <div class="otherNewsBlockInner mbS mbSpM">
                                <?php while ($wp_query->have_posts()) : $wp_query->the_post();
                                    get_template_part('parts/post/top_topics_list');
                                endwhile;
                                wp_reset_postdata(); ?>
                            </div>

                        </div>
                    <?php endif; ?>
                    <!-- 関連記事セクションの終了 -->


                </div>


                <div class="col col3 colSp1 relative">
                    <?php get_template_part('parts/sidebar'); ?>

                </div>
            </div>

        </div>
    </div>
</section>

<?php
// endwhile;
?>

<?php get_footer(); ?>