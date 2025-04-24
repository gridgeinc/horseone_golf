<?php
get_header();

$pageName = [
    'jp_ttl' => '404',
    'en_ttl' => 'NOT FOUND',
];

$pageImg = [
    'pageMainImg' => 'contactHeader.jpg',
];

get_template_part('parts/assets/page-fv', null, ['pageName' => $pageName, 'pageImg' => $pageImg]);
?>

<section class="margin">
    <div class="cnt">
        <div class="text-center mb50">
            <p class="fontEn h00 mainColor lh_s">404</p>
            <p class="fontEn h1 mainColor lh_s mb50">Not Found</p>
            <p class="h3 mb30">お探しのページが見つかりませんでした</p>
            <p>申し訳ありません。お探しのページが見つかりませんでした。<br>お手数ですが、トップページからお探しの情報をお探しください。</p>
        </div>

        <div class="text-center">
            <a href="<?= home_url(); ?>" class="commonBtn">
                <span class="commonBtnTx">TOPへ戻る</span>
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>