<div class="newsDetailOther">
    <a href="<?php the_permalink(); ?>" class="newsDetailOtherLink">

        <div class="newsDetailOtherInner">

            <div class="newsDetailOtherImgBox overHidden">
                <?php if (has_post_thumbnail()) : ?>
                    <?php
                    $thumbnail_id = get_post_thumbnail_id();
                    $eye_img = wp_get_attachment_image_src($thumbnail_id, 'full');
                    $eye_img_s = wp_get_attachment_image_src($thumbnail_id, 'thumb_size_s_false', false);
                    ?>
                    <div class="newsDetailOtherImg">
                        <img src="<?php echo $eye_img_s[0]; ?>" alt="">
                    </div>
                <?php else : ?>
                    <div class="newsDetailOtherImg">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/noimage.jpg" alt="">
                    </div>
                <?php endif; ?>
            </div>

            <div class="newsDetailOtherInfoBox">
                <div class="newsDetailOtherInfoHead flex alignCenter mbS2">
                    <span class="newsTime"><?php the_time('Y.m.d'); ?></span>
                    <?php
                    $categories = get_the_category();
                    if ($categories) {
                        foreach ($categories as $category) {
                            echo '<span class="newsCoteGory">' . $category->name . '</span>';
                        }
                    }
                    ?>
                </div>
                <p class="newsDetailOtherTitle"><?php the_title(); ?></p>
            </div>

        </div>

    </a>
</div>