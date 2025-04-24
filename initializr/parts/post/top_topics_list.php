<?php
// $categories = get_the_category();
// if ($categories) {
//     foreach ($categories as $category) {
//         echo '<span class="newsCoteGory">' . $category->name . '</span>';
//     }
// }
?>

<div class="topTopicsItem">
    <a href="<?= the_permalink(); ?>" class="topTopicsItemLink">
        <div class="topTopicsItemInner">

            <div class="topTopicsItemImgBox">
                <?php if (has_post_thumbnail()) : ?>
                    <?php
                    $thumbnail_id = get_post_thumbnail_id();
                    $eye_img = wp_get_attachment_image_src($thumbnail_id, 'full');
                    $eye_img_s = wp_get_attachment_image_src($thumbnail_id, 'thumb_size_s_false', false);
                    ?>
                    <img src="<?php echo $eye_img_s[0]; ?>" alt="">
                <?php else : ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/noimage.png" alt="">
                <?php endif; ?>
            </div>
            <div class="topTopicsItemBox">
                <div class="flex alignCenter cg1em">
                <p class="topTopicsItemTime"><?= the_time('Y.m.d') ?></p>
                                    <?php
                $categories = get_the_category();
                if ($categories) {
                    foreach ($categories as $category) {
                        echo '<div class="topTopicsItemCate cateCss">' . $category->name . '</div>';
                    }
                }
                ?>

                </div>
                <h2 class="topTopicsItemTitle bold600 fsM4"><?= the_title(); ?></h2>
            </div>
        </div>
    </a>
</div>