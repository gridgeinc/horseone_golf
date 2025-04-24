<?php
get_header();

?>
<div class="pageFv padding" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/fvContact.jpg)">
    <div class="en fsL3">Thanks</div>
    <h2 class="ja fsM4">送信完了</h2>
</div>
<div class="cnt">
    <div class="cntM">
        <?php get_template_part('parts/breadcrumb'); ?>
    </div>
</div>



<section id="contactBlock" class="margin cnt">
    <div class="cntS">

        <p class="contactMainTx text-center mbS">
            お問い合わせいただきありがとうございます。<br>
            自動返信メールをお送りしておりますので、ご確認をよろしくお願いいたします。<br>
            メールが届いていない場合は、お手数ですが再度フォームより送信をお願いいたします。
        </p>

        <div class="text-center">
            <a href="<?= home_url(); ?>" class="cmnbtn"><span>TOPへ戻る</span></a>
        </div>

        <div class="cntS">
            <div class="contactFormBlock">
                <?php the_content(); ?>
            </div>
        </div>


    </div>
</section>


<?php get_footer(); ?>