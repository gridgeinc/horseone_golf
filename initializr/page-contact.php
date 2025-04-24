<?php
get_header();

?>
<div class="pageFv padding" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/fvContact.jpg)">
    <div class="en fsL3">Contact</div>
    <h2 class="ja fsM4">お問い合わせ</h2>
</div>
<div class="cnt">
    <div class="cntM">
        <?php get_template_part('parts/breadcrumb'); ?>
    </div>
</div>

<section id="contactBlock" class="margin cnt">
    <div class="cntS">
        <div class="contactMainBox">

            <p class="text-center mbS">
                ご入会・無料体験のお申し込みは<br class="sp">下記フォームから受け付けております。<br>お気軽にお問い合わせください。
            </p>
            <div class="mbM">
                <a href="tel:<?php info('telNotHy'); ?>" class="contactTel telLink">
                    <div><img src="<?php echo get_template_directory_uri(); ?>/img/ic-tel-green-wh.svg" alt="" width="45"></div>
                    <div class="text">
                        <p class="num fsL4 bold600 lh_s"><?php info('tel'); ?></p>
                        <p>［受付時間］<?php info('time'); ?></p>
                    </div>
                </a>
            </div>
        </div>


        <div class="cntS3">
            <?= the_content(); ?>

        </div>

    </div>
</section>



<!-- 住所 自動入力 -->
<script src="https://ajaxzip3.github.io/ajaxzip3.js"></script>
<script type="text/javascript">
    $(function() {
        $('#postalcode').keyup(function() {
            AjaxZip3.zip2addr('postalcode', '', 'address', 'address');
        });
    });
</script>



<?php get_footer(); ?>