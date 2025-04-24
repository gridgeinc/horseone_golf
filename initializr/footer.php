</main>
<?php if(!is_page(array('contact','confirm','thanks'))): ?>
<section class="padding pb0">
    <div class="cnt">
        <div class="cntM">
            <div class="cv">
                <div class="ttlWrap text-center white mbS2 mbSpS">
                    <div class="en">Contact</div>
                    <h2 class="ja">お問い合わせ</h2>
                </div>
                <p class="text-center white bold600 fsM15 lh_m mbS mbSpM2">ゴルフを始めたい方も、<br class="sp">もっと上達したい方も、<br>まずはお気軽にご相談ください！</p>
                <div class="cvFlex mbS2 mbSpM3">
                    <?= get_template_part('parts/assets/spMenuItem'); ?>
                </div>
                <div class="cvTel">
                    <a href="tel:<?php info('telNotHy'); ?>"><div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/ic-h-tel.svg" alt=""></div><span class="bold600 white fsM3"><?php info('tel'); ?></span><span class="fsM4 white">［受付時間］<?php info('time'); ?></span></a>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="float">
    <a href="<?= home_url(); ?>/contact/?kind=contact1" class="appBtn">
        <p class="ttl mbS3">当日体験OK!</p>
        <div class="flexSp">
            <div class="img mbM3 mbSp0"><img src="<?php echo get_template_directory_uri(); ?>/img/ic-calendar.svg" alt="" width="22"></div>
            <p class="bold600 white lh_s text-center">無料体験<br>お申し込み<span class="spNone bold600">は<br>こちら</span></p>
        </div>
    </a>
</div>
<div class="sp">
    <a href="<?= info('login'); ?>" target="_blank" class="spLogin">
        <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/ic-login-white.svg" width="16" alt=""></div>
        <p class="white">打席予約ログイン</p>
    </a>
</div>
<?php endif; ?>
<div class="scroll-infinity paddingS">
    <div class="scroll-infinity__wrap">
        <ul class="scroll-infinity__list scroll-infinity__list--left">
            <li class="scroll-infinity__item"><img src="<?php echo get_template_directory_uri(); ?>/img/topSlide1.jpg" /></li>                        
            <li class="scroll-infinity__item"><img src="<?php echo get_template_directory_uri(); ?>/img/topSlide2.jpg" /></li>
            <li class="scroll-infinity__item"><img src="<?php echo get_template_directory_uri(); ?>/img/topSlide3.jpg" /></li>
            <li class="scroll-infinity__item"><img src="<?php echo get_template_directory_uri(); ?>/img/topSlide1.jpg" /></li>                        
            <li class="scroll-infinity__item"><img src="<?php echo get_template_directory_uri(); ?>/img/topSlide2.jpg" /></li>
            <li class="scroll-infinity__item"><img src="<?php echo get_template_directory_uri(); ?>/img/topSlide3.jpg" /></li>
        </ul>
    </div>
</div>
<script>
   document.addEventListener('DOMContentLoaded', () => {
        const list = document.querySelector('.scroll-infinity__list--left');
        if (list) {
            const clone = list.cloneNode(true); // 同じリストを複製
            list.parentNode.appendChild(clone); // wrapの中に2セット並べる
        }
    });
 
</script>

<footer>
    <div class="cnt">
        <div class="cntS">
            <div class="footerInner paddingS">
                <div class="footerLeft" id="footerinfo">
                    <div class="footerLeftTop mbM3">
                        <div class="logo"><p class="fsS3">岡山でインドアゴルフなら</p><img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="" width="185"></div>
                        <div class="footerSns">
                            <?= get_template_part('parts/assets/snsblock'); ?>
                        </div>
                    </div>
                    <div class="footerLeftBottom">
                        <?= get_template_part('parts/assets/info'); ?>
                    </div>
                </div>
                <div class="footerRight" id="access">
                    <iframe src="<?php info('gmap'); ?>"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <ul class="footerMenu mbS">
                <?= get_template_part('parts/assets/menu'); ?>
                <li>
                    <a href="<?= info('login'); ?>" target="_blank">打席予約ログイン</a>
                </li>
            </ul>
        </div>
    </div>
    <p class="copyright">copyright Horse One Golf Studio co.,ltd. All right reserved.</p>
</footer>
    <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>

<script>
    // aos
    $(function() {
        AOS.init({
            duration: 1000
        });
    });

    // Lenis（なめらかスクロールにしたい場合使用）
    // const lenis = new Lenis();

    // function raf(time) {
    //     lenis.raf(time);
    //     requestAnimationFrame(raf);
    // }

    // requestAnimationFrame(raf);

   
</script>


<?php wp_footer(); ?>

</body>

</html>