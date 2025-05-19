<?php
get_header();

?>
<div class="pageFv padding" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/fvContact.jpg)">
    <div class="en fsL3">404</div>
    <h2 class="ja fsM4">Not Found</h2>
</div>
<div class="cnt">
    <div class="cntM">
        <?php get_template_part('parts/breadcrumb'); ?>
    </div>
</div>

<section class="margin">
    <div class="cnt">
        <div class="text-center mb50">
            <p class="fontEn h00 mainColor lh_s">404</p>
            <p class="fontEn h1 mainColor lh_s mb50">Not Found</p>
            <p class="h3 mb30">お探しのページが見つかりませんでした</p>
            <p>申し訳ありません。お探しのページが見つかりませんでした。<br>お手数ですが、トップページからお探しの情報をお探しください。</p>
        </div>

        <div class="text-center">
            <a href="<?= home_url(); ?>/news" class="cmnbtn --center"><span>TOPへ戻る</span></a>
        </div>
    </div>
</section>

<?php get_footer(); ?>