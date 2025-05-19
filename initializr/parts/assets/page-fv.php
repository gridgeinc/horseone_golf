<section id="pageHeader">
    <div class="pageHeader bgGrayColor">
        <div class="cntL">

            <div class="pageHeaderInner">
                <div class="pageHeaderTitleBox">
                    <div class="pageHeaderTitleBoxInner">
                        <p class="pageHeaderTitleEn fontEn textStroke"><?php echo $args['pageName']['en_ttl']; ?></p>
                        <h2 class="pageHeaderTitleJp"><?php echo $args['pageName']['jp_ttl'] ?: the_title(); ?></h2>
                    </div>
                </div>

                <?php if (!empty($args['pageImg'])) : ?>
                    <div class="pageHeaderImgBox">
                        <div class="pageHeaderImg"><img src="<?php echo get_template_directory_uri(); ?>/img/<?php echo $args['pageImg']['pageMainImg']; ?>" alt="<?php echo $args['pageName']['jp_ttl'] ?: the_title(); ?>"></div>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
</section>


<div class="cntL"><?php get_template_part('parts/breadcrumb'); ?></div>