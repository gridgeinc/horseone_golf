//画像パララックス
$(function () {
  const images = document.querySelectorAll(".ukiyo");
  // You can do the loop in any way you like.
  images.forEach((image) => {
    new Ukiyo(image, {
      speed: 4,
      scale: 1,
    });
  });
});

//rellax.js
const mediaQueryList = window.matchMedia("(min-width: 768px)");
const listener = (event) => {
  // リサイズ時に行う処理
  if (event.matches) {
    // 768px以上
    $(function () {
      var rellax = new Rellax(".rellax", {
        center: true,
      });
    });
  } else {
    // 768px未満
  }
};
mediaQueryList.addEventListener("change", listener);
listener(mediaQueryList);

//スムーズスクロール
$(window).on("load resize", function () {
  var w = $(window).width();
  var x = 768;
  var scroll = new SmoothScroll('a[href*="#"]', {
    offset: 90,
    speed: 80,
    easing: "swing",
  });
});

$(function () {
  const hash = location.hash;

  if (hash) {
    setTimeout(function () {
      const target = $(hash);

      const offset = $("header").innerHeight() + 30; // オフセットとして上に10ピクセル
      const position = target.offset().top - offset;

      // 指定の場所までスムーススクロール
      $("html, body").animate({ scrollTop: position }, 0, "swing");
    }, 0); // ここでのタイマーの遅延時間（ミリ秒）
  }
});

//スクロールアニメーション付与
$(window).on("scroll", function () {
  var elem = $(".scrollAnime");
  var isAnimate = "isAnimated";

  elem.each(function () {
    var elemOffset = $(this).offset().top;
    var scrollPos = $(window).scrollTop();
    var wh = $(window).height();

    if (scrollPos > elemOffset - wh + wh / 4) {
      $(this).addClass(isAnimate);
    }
  });
});

$(function () {
  AOS.init({
    duration: 1000,
  });
});

//現在開いてるページのurlと一致すればactiveクラスをつける
$(function () {
  $(".js_aboutSubMenu_ul li a").each(function () {
    var $href = $(this).attr("href");
    if (location.href.match($href)) {
      $(this).addClass("active");
    } else {
      $(this).removeClass("active");
    }
  });
});
$(function () {
  var $body = $("html");
  var w_width = $(window).width();

  console.log(w_width);

  //開閉用ボタンをクリックでクラスの切替え
  $("#js__btn").on("click", function () {
    $body.toggleClass("open");
    $(".menu-trigger").toggleClass("active");
    // $('.overRayBox').slideToggle();
  });

  //メニュー名以外の部分をクリックで閉じる
  /*
    $('#js__nav').on('click', function () {
        $body.removeClass('open');
        $('.menu-trigger').removeClass('active');
    });
    */
});

/*ハンバーガーメニューページ内遷移でも消滅*/
$(function () {
  $('#js__nav a[href*="#"]').click(function () {
    $("html").removeClass("open");
    $(".menu-trigger").removeClass("active");
  });
});

$(function () {
  if (window.matchMedia("(max-width: 767px)").matches) {
    var headerUnitUlLink = $(".hasChild .headerUnitUlLink");
    $(window).on("load", function () {
      headerUnitUlLink.attr("href", "javascript: void(0)");
    });
  }
});
$(function () {
  $(".hasChild .headerUnitUlLink").click(function () {
    $(this).next().slideToggle();
    $(this).toggleClass("on");
  });
});

$(function () {
  //マウスを乗せたら発動
  $(".hasMegaMenu").hover(
    function () {
      $(this).next().addClass("active");
      $(this).parent().addClass("active");
    },
    function () {
      $(this).next().removeClass("active");
      $(this).parent().removeClass("active");
    }
  );

  $(".megaMenu").hover(
    function () {
      $(this).addClass("active");
      $(this).parents(".hasMegaMenuLi").addClass("active");
    },
    function () {
      $(this).removeClass("active");
      $(this).parents(".hasMegaMenuLi").removeClass("active");
    }
  );
});

/*バナー追従コンタクト*/
$(function () {
  var js_headerAlt = $(".js_headerAlt");
  $(window).scroll(function () {
    var sc = $(window).scrollTop();
    if (sc > 300) {
      js_headerAlt.fadeIn();
    } else {
      js_headerAlt.fadeOut();
    }
  });
});

/* アコーディオン*/
$(function () {
  $(".acdTitle").on("click", function () {
    $(this).toggleClass("open");
    $(this).next(".acdBlock").slideToggle();
  });
});

/* スクロールでheaderにクラス付与 */
$(window).on("scroll", function () {
  const mvBottom = $("#mv").offset().top + $("#mv").outerHeight();
  const scrollY = $(window).scrollTop();

  if (scrollY > mvBottom) {
    $("header").addClass("scrl");
  } else {
    $("header").removeClass("scrl");
  }
});

//テキストスライド
class Main {
  constructor() {
    this.init();
  }

  init() {
    this.copyText();
    this.calculateLoopAnimationSpeed();
    this.resizeRefresh();
  }

  //リサイズ時にアニメーションの速度を再計算
  resizeRefresh() {
    const target = document.body;
    const resizeObserver = new ResizeObserver((entries) => {
      entries.forEach((entry) => {
        this.calculateLoopAnimationSpeed();
      });
    });
    resizeObserver.observe(target);
  }

  //アニメーションの速度を計算してCSS変数に
  calculateLoopAnimationSpeed() {
    const targets = document.querySelectorAll(".js-tick");
    if (!targets.length) {
      return;
    }

    const distance = window.innerWidth;
    const mql = window.matchMedia("(min-width: 960px)");
    const time = mql.matches ? 60 : 30;
    const speed = distance / time;

    targets.forEach((target) => {
      const tickElems = target.querySelectorAll(".js-tick-item");
      if (!tickElems.length) {
        return;
      }

      const total = tickElems.length - 1;

      tickElems.forEach((el, i) => {
        const elWidth = el.clientWidth;
        const elTime = Math.floor(elWidth / speed);
        el.style.setProperty("--tick-duration", `${elTime}s`);
        el.style.setProperty("--tick-delay", `${elTime / -2}s`);

        if (i === total) {
          el.parentNode.classList.remove("no-tick");
        }
      });
    });
  }

  //テキストをコピーする
  copyText() {
    const targets = document.querySelectorAll(".js-tick");
    if (!targets.length) {
      return;
    }

    targets.forEach((target) => {
      const tickElems = target.querySelectorAll(".js-tick-item");
      if (!tickElems.length) {
        return;
      }

      let length = 0;
      tickElems.forEach((el) => {
        length += el.clientWidth;
        el.insertAdjacentHTML("afterend", el.outerHTML);
        if (length > window.innerWidth) {
          return;
        }
      });
    });
  }
}
document.addEventListener("DOMContentLoaded", () => {
  new Main();
});

/*高さ合わせる*/
$(function () {
  $(".matchHeight").matchHeight();
});

// MV
$(function () {
  const $img = $('img[src$="mv.jpg"]');

  if ($img[0].complete) {
    // すでに読み込み済みの場合
    $(".fvTxt").addClass("active");
  } else {
    // 読み込み後に実行
    $img.on("load", function () {
      $(".fvTxt").addClass("active");
    });
  }
});
