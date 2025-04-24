<?php
get_header();
?>

<div class="pageFv padding" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/fvContact.jpg)">
    <div class="en fsL3">Privacy Policy</div>
    <h2 class="ja fsM4">個人情報保護方針</h2>
</div>
<div class="cnt">
    <div class="cntM">
        <?php get_template_part('parts/breadcrumb'); ?>
    </div>
</div>


<section class="margin">
    <div class="cnt">
        <div class="cntS">
            <div class="textBox">
                <p class="mb30"><?= info('name'); ?>（以下「当社」といいます）は、以下のとおり個人情報保護方針を定め、個人情報保護の仕組みを構築し、全従業員に個人情報保護の重要性の認識と取組みを徹底させることにより、個人情報の保護を推進致します。</p>

                <h3 class="fsM5 bold mbS4">個人情報の管理</h3>
                <p class="mb30">当社は、お客さまの個人情報を正確かつ最新の状態に保ち、個人情報への不正アクセス・紛失・破損・改ざん・漏洩などを防止するため、セキュリティシステムの維持・管理体制の整備・社員教育の徹底等の必要な措置を講じ、安全対策を実施し個人情報の厳重な管理を行います。</p>
                <h3 class="fsM5 bold mbS4">個人情報の利用目的</h3>
                <p class="mb30">お客さまからお預かりした個人情報は、当社からのご連絡や業務のご案内やご質問に対する回答として、電子メールや資料のご送付に利用いたします。</p>
                <h3 class="fsM5 bold mbS4">個人情報の第三者への開示・提供の禁止</h3>
                <p class="mb10">当社は、お客さまよりお預かりした個人情報を適切に管理し、次のいずれかに該当する場合を除き、個人情報を第三者に開示いたしません。</p>

                ・お客さまの同意がある場合<br>
                ・お客さまが希望されるサービスを行なうために当社が業務を委託する業者に対して開示する場合<br>
                ・法令に基づき開示することが必要である場合<br><br>
                <h3 class="fsM5 bold mbS4">個人情報の安全対策</h3>
                <p class="mb30">当社は、個人情報の正確性及び安全性確保のために、セキュリティに万全の対策を講じています。</p>
                <h3 class="fsM5 bold mbS4">ご本人の照会</h3>
                <p class="mb30">お客さまがご本人の個人情報の照会・修正・削除などをご希望される場合には、ご本人であることを確認の上、対応させていただきます。</p>
                <h3 class="fsM5 bold mbS4">法令、規範の遵守と見直し</h3>
                <p class="mb30">当社は、保有する個人情報に関して適用される日本の法令、その他規範を遵守するとともに、本ポリシーの内容を適宜見直し、その改善に努めます。</p>
                <h3 class="fsM5 bold mbS4">お問い合せ</h3>
                <p class="mb10">当社の個人情報の取扱に関するお問い合せは下記までご連絡ください。</p>
                <?= info('name'); ?><br>
                TEL : <?= info('tel'); ?><br>
                <?= info('postalCode'); ?> <?= info('address'); ?>
            </div>

        </div>
    </div>
</section>

<?php get_footer(); ?>