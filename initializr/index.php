<?php
get_header();
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

<section class="margin">
    <div class="cnt relative">
        <div class="cntL">
            <div class="flex flexPc rw">
                <div class="col-3 col colSp1">
                    <ul class="cmNewsListUl mbM3">
                        <?php
                        while (have_posts()) : the_post();
                            get_template_part('parts/post/topics_post_list');
                        endwhile;
                        ?>
                    </ul>
                    <?php get_template_part('parts/pagenation'); ?>
                </div>
                <div class="col col3 colSp1 relative">
                    <?php get_template_part('parts/sidebar'); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>