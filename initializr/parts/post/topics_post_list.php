<?php
$category = get_the_category();
$category = $category[0];
?>
<li>
    <a href="<?= the_permalink(); ?>" class="topicsCard">

        <div class="topicsItemImgBox mbS">
            <?php if (has_post_thumbnail()) : ?>
                <?php
                // アイキャッチ画像のIDを取得
                $thumbnail_id = get_post_thumbnail_id();
                // mediumサイズの画像内容を取得（引数にmediumをセット）
                $eye_img = wp_get_attachment_image_src($thumbnail_id, 'full');
                $eye_img_s = wp_get_attachment_image_src($thumbnail_id, 'thumb_size_s_false', false);
                ?>
                <img src="<?= $eye_img_s[0]; ?>" alt="">
            <?php else : ?>
                <img src="<?= get_template_directory_uri(); ?>/img/noimage.png" alt="">
            <?php endif; ?>
        </div>
        <div class="topicsItemBox">
            <div class="flex flexWrap alignCenter mbS">
                <p class="topTopicsItemTime"><?= the_time('Y.m.d'); ?></p>
                <div class="topTopicsItemCate cateCss"><?= $category->cat_name; ?></div>
            </div>
            <h2 class="topTopicsItemTitle fsM32 bold600 lh_m"><?= the_title(); ?></h2>
        </div>

    </a>
</li>