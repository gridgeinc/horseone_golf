<?php
get_header();

?>
<div class="pageFv padding" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/fvContact.jpg)">
    <div class="en fsL3">Confirm</div>
    <h2 class="ja fsM4">確認画面</h2>
</div>
<div class="cnt">
    <div class="cntM">
        <?php get_template_part('parts/breadcrumb'); ?>
    </div>
</div>



<section id="contactBlock" class="margin cnt">
    <div class="cntS">

        <p class="contactMainTx text-center mbS mbSpM">
            入力内容をご確認の上、<br>
            問題なければ「送信する」ボタンを押してください。
        </p>

        <div class="cntS3">

            <div class="contactFormBlock">
                <?php the_content(); ?>
            </div>

        </div>


    </div>
</section>

<?php get_footer(); ?>