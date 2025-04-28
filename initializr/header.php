<?php session_start(); ?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="屋内ゴルフ,データ分析,初心者,ゴルフスタジオ">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- キャッシュクリア用の記述▼ -->
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <!-- キャッシュクリア用の記述▲ -->
    <meta name="format-detection" content="telephone=no">
    <title><?php wp_title('', true); ?><?php if (wp_title('', false)) { ?> | <?php } ?><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/import.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/c05e859e75.js" crossorigin="anonymous"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.matchHeight-min.js"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/rellax/rellax.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/ukiyo.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/ScrollTrigger.min.js"></script>

    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-ui/jquery-ui.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/mixitup/mixitup.min.js"></script>

    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
    <script src="https://ajaxzip3.github.io/ajaxzip3.js"></script>

    <script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@1.0.19/bundled/lenis.min.js"></script>



    <!-- swiper start -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- swiper end -->
    <!-- scrollhint start -->
    <link rel="stylesheet" href="https://unpkg.com/scroll-hint@latest/css/scroll-hint.css">
    <script src="https://unpkg.com/scroll-hint@latest/js/scroll-hint.min.js"></script>
    <script>
        window.addEventListener('DOMContentLoaded', function() {
            if (window.innerWidth <= 767) {
                new ScrollHint('.tableWrap', {
                    i18n: {
                        scrollable: 'スクロールできます'
                    }
                });
            }
        });
    </script>
    <!-- scrollhint end -->


</head>

<body <?php body_class(); ?>>

    <header <?php if (!is_front_page()): ?>class="page" <?php endif; ?>>
        <div class="headerInner">
            <a href="<?= home_url(); ?>" class="headerLogo">
                <p class="logoTtl">岡山でインドアゴルフなら</p>
                <h1 class="logo">horse One Golf studio</h1>
            </a>
            <div class="headerMenu">
                <div class="headerMenuLeft">
                    <div class="headerMenuLeftTop">
                        <?= get_template_part('parts/assets/snsblock'); ?>
                        <!-- <a href="tel:<?php info('telNotHy'); ?>" class="headerTel">
                            <div class="img"></div>
                            <div class="txt">
                                <div class="num"><?php info('tel'); ?></div>
                                <div class="open">［受付時間］<?php info('time'); ?></div>
                            </div>
                        </a> -->
                        <a href="<?= info('login'); ?>" target="_blank" class="headerLogin">打席予約ログイン</a>
                        <a href="<?= home_url(); ?>/contact" class="headerContact">ご相談・お問い合わせ</a>
                    </div>
                    <ul class="headerMenuLeftBottom">
                        <?= get_template_part('parts/assets/menu'); ?>
                    </ul>
                </div>
                <a href="<?= home_url(); ?>/contact/?kind=contact1" class="appBtn">
                    <p class="ttl">当日体験OK!</p>
                    <div class="flex alignCenter">
                        <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/ic-calendar.svg" alt="" width="28"></div>
                        <p class="bold white">無料体験<br>お申し込み</p>
                    </div>
                </a>
            </div>
        </div>
        <a href="tel:<?php info('telNotHy'); ?>" class="spTel"><img src="<?php echo get_template_directory_uri(); ?>/img/ic-h-tel-sp.svg" alt=""></a>
        <button class="menu-btn" id="js__btn">
            <div class="menu-trigger" href="#">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>

        <nav id="js__nav" class="overRayBox menu">
            <div class="overRayBlock">
                <ul class="headerListMenu">
                    <?= get_template_part('parts/assets/menu'); ?>
                </ul>
                <div class="spMenuItemWrap">
                    <a href="tel:<?php info('tel'); ?>" class="spMenuItem --tel">
                        <p class="name">お電話はこちら</p>
                        <div class="flex">
                            <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/ic-h-tel-green.svg" alt="" width="28"></div>
                            <div class="txt">
                                <div class="num">050-222-222</div>
                                <div class="open">［受付時間］10:00〜21:00</div>
                            </div>
                        </div>
                    </a>
                    <?= get_template_part('parts/assets/spMenuItem'); ?>
                </div>
                <div class="spMenuInfo">
                    <div class="headerLogo">
                        <p class="logoTtl">岡山でインドアゴルフなら</p>
                        <div class="logo"></div>
                    </div>
                    <?= get_template_part('parts/assets/info'); ?>
                    <?= get_template_part('parts/assets/snsblock'); ?>


                </div>
            </div>
        </nav>
    </header>


    <main <?php if (!is_front_page()): ?>class="page" <?php endif; ?>>