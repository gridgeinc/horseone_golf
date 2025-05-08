<?php get_header(); ?>
<div class="pageFv padding" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/fvPrice.jpg)">
    <div class="en fsL3">Service＆Price</div>
    <h2 class="ja fsM4">サービス・料金</h2>
</div>
<div class="cnt">
    <div class="cntM">
        <?php get_template_part('parts/breadcrumb'); ?>
    </div>
</div>
<div class="paddingS">
    <div class="cnt">
        <div class="cntM">
            <ul class="guide">
                <li><a href="#price" class="cmnbtn"><span>料金プラン</span></a></li>
                <li><a href="#priceCoaching" class="cmnbtn"><span>インストラクター紹介</span></a></li>
                <li><a href="#priceFlow" class="cmnbtn"><span>入会の流れ</span></a></li>
                <li><a href="#priceFaq" class="cmnbtn"><span>よくあるご質問</span></a></li>
            </ul>
        </div>
    </div>
</div>
<section id="price">
    <div class="cnt padding">
        <div class="cntM">
            <div class="ttlWrap text-center mbS">
                <div class="en subColor">Service&Price</div>
                <h2 class="ja">料金プラン</h2>
            </div>
            <h3 class="text-center bold600 fsM15 lh_m mbS3">スイングからコース戦略まで、<br class="sp">目的に合わせたレッスンプラン</h3>
            <p class="text-center mbM3">初心者も経験者も、自分のペースで通えるプランをご用意しています。</p>
            <ul class="checkList fsM4 bold600--all --color mbM3 widthFit mlr">
                <li><span>基礎から応用まで、一人ひとりに合ったスイング指導。</span></li>
                <li><span>ミスの傾向を分析し、より正確なショットを目指します。</span></li>
            </ul>

            <div class="lineTtl mainColor bold600 fsM3 mbS2 text-center">初期費用(入会時)</div>
            <div class="tableWrap mbS mbSpM2">
                <table class="cmnTable --w100">
                    <thead>
                        <tr>
                            <th></th>
                            <th class="text-center">入会金</th>
                            <th class="text-center">月会費</th>
                            <!-- <th class="text-center">内容</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>プレミアム会員</th>
                            <td class="text-center">1,100<span class="enS">円</span></td>
                            <td class="text-center">17,600<span class="enS">円</span></td>
                            <!-- <td>プライベートルーム利用OK</td> -->
                        </tr>
                        <tr>
                            <th>ミドル会員</th>
                            <td class="text-center">1,100<span class="enS">円</span></td>
                            <td class="text-center">6,600<span class="enS">円</span></td>
                            <!-- <td>オープン打席利用OK</td> -->
                        </tr>
                        <tr>
                            <th>学生会員（18歳以下）</th>
                            <td class="text-center">―</td>
                            <td class="text-center">3,300<span class="enS">円</span></td>
                            <!-- <td>学生向け特別プラン</td> -->
                        </tr>
                        <tr>
                            <th>ジュニア会員（13歳未満）</th>
                            <td class="text-center">―</td>
                            <td class="text-center">1,100<span class="enS">円</span></td>
                            <!-- <td>ジュニア特別プラン</td> -->
                        </tr>
                        <tr>
                            <th>ビジター会員</th>
                            <td class="text-center">1,100<span class="enS">円</span></td>
                            <td class="text-center">―</td>
                            <!-- <td>ビジタープラン</td> -->
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="mbS mbSpM2">
                <img src="<?php echo get_template_directory_uri(); ?>/img/ic-plus-green.svg" width="65" alt="">
            </div>
            <div class="lineTtl mainColor bold600 fsM3 mbS text-center lh_m">目的に合わせたレッスン&<br class="sp">フィッティングプラン</div>
            <div class="lessonplan mbS" id="lesson1">
                <div class="lessonplanMain mbS">
                    <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/priceSwing.jpg" alt=""></div>
                    <div class="txt">
                        <h3 class="mainColor bold600 lh_m fsL6 mbS3 ls_m">レッスン（通常）</h3>
                        <p class="bold600 lh_m fsM2 mbS3">ススイングを整え、ショットの安定と再現性を高める</p>
                        <ul class="checkList fsM4 bold600--all mbS subColor --normal">
                            <li><span>最新機器とプロの視点で、フォームのクセや改善点を可視化</span></li>
                            <li><span>一人ひとりの課題に応じて、基本から丁寧に指導します</span></li>
                        </ul>
                    </div>
                </div>
                <div class="tableWrap">
                    <table class="cmnTable --w100 --bgWhite">
                        <thead>
                            <tr>
                                <th class="text-center">コース</th>
                                <th class="text-center">プレミアム</th>
                                <th class="text-center">ミドル</th>
                                <th class="text-center">学生</th>
                                <th class="text-center">ジュニア</th>
                                <th class="text-center">ビジター</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>個別レッスン(60分)</th>
                                <td class="text-center">4,500<span class="enS">円</span></td>
                                <td class="text-center">―</td>
                                <td class="text-center">―</td>
                                <td class="text-center">―</td>
                                <td class="text-center">―</td>
                            </tr>
                            <tr>
                                <th>通常レッスン(60分)</th>
                                <td class="text-center">―</td>
                                <td class="text-center">3,850<span class="enS">円</span></td>
                                <td class="text-center">2,200<span class="enS">円</span></td>
                                <td class="text-center">1,100<span class="enS">円</span></td>
                                <td class="text-center">5,500<span class="enS">円</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="lessonplan mbS" id="lesson2">
                <div class="lessonplanMain mbS">
                    <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/priceLesson2.jpg" alt=""></div>
                    <div class="txt">
                        <h3 class="mainColor bold600 lh_m fsL6 mbS3 ls_m">ツアーパット（テスト型）</h3>
                        <p class="bold600 lh_m fsM2 mbS3">今の自分を知る、パター傾向テスト</p>
                        <ul class="checkList fsM4 bold600--all mbS subColor --normal">
                            <li><span>傾斜・方向・距離を組み合わせた36通りのラインを再現</span></li>
                            <li><span>パターのクセをスコア化し、狙って修正できる</span></li>
                        </ul>
                    </div>
                </div>
                <div class="tableWrap">
                    <table class="cmnTable --bgWhite">
                        <thead>
                            <tr>
                                <th class="text-center">コース</th>
                                <th class="text-center">プレミアム</th>
                                <th class="text-center">ミドル</th>
                                <th class="text-center">学生・ジュニア</th>
                                <th class="text-center">ビジター</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>ツアーパット(60分)</th>
                                <td class="text-center">6,600<span class="enS">円</span></td>
                                <td class="text-center">8,800<span class="enS">円</span></td>
                                <td class="text-center">5,500<span class="enS">円</span></td>
                                <td class="text-center">―</td>
                            </tr>
                            <tr>
                                <th>ツアーパット(120分)</th>
                                <td class="text-center">11,000<span class="enS">円</span></td>
                                <td class="text-center">16,500<span class="enS">円</span></td>
                                <td class="text-center">9,900<span class="enS">円</span></td>
                                <td class="text-center">19,800<span class="enS">円</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="lessonplan mbS" id="lesson3">
                <div class="lessonplanMain mbS">
                    <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/priceLesson3.jpg" alt=""></div>
                    <div class="txt">
                        <h3 class="mainColor bold600 lh_m fsL6 mbS3 ls_m">パットラボ（解析型）</h3>
                        <p class="bold600 lh_m fsM2 mbS3">ストロークのクセを数値で見直す</p>
                        <ul class="checkList fsM4 bold600--all mbS subColor --normal">
                            <li><span>手の動きやフェースの向きをセンサーで高精度に分析</span></li>
                            <li><span>見えづらいズレを可視化し、感覚に頼らない修正ができる</span></li>
                        </ul>
                    </div>
                </div>
                <div class="tableWrap">
                    <table class="cmnTable --bgWhite">
                        <thead>
                            <tr>
                                <th class="text-center">コース</th>
                                <th class="text-center">プレミアム</th>
                                <th class="text-center">ミドル</th>
                                <th class="text-center">学生・ジュニア</th>
                                <th class="text-center">ビジター</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>パットラボ(60分)</th>
                                <td class="text-center">11,000<span class="enS">円</span></td>
                                <td class="text-center">16,500<span class="enS">円</span></td>
                                <td class="text-center">9,900<span class="enS">円</span></td>
                                <td class="text-center">19,800<span class="enS">円</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="lessonplan mbS2" id="lesson4">
                <div class="lessonplanMain mbS">
                    <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/priceLesson4.jpg" alt=""></div>
                    <div class="txt">
                        <h3 class="mainColor bold600 lh_m fsL6 mbS3 ls_m">パターレッスン</h3>
                        <p class="bold600 lh_m fsM2 mbS3">見えるからわかる。データで支えるパター上達</p>
                        <ul class="checkList fsM4 bold600--all mbS subColor --normal">
                            <li><span>ストロークやフェースの動きを数値で“見える化”</span></li>
                            <li><span>軌道や傾向を分析し、苦手なラインを的確に修正</span></li>
                        </ul>
                    </div>
                </div>
                <div class="tableWrap">
                    <table class="cmnTable --bgWhite">
                        <thead>
                            <tr>
                                <th class="text-center">コース</th>
                                <th class="text-center">プレミアム</th>
                                <th class="text-center">ミドル</th>
                                <th class="text-center">学生・ジュニア</th>
                                <th class="text-center">ビジター</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>パターレッスン(30分)</th>
                                <td class="text-center">1,100<span class="enS">円</span></td>
                                <td class="text-center">1,650<span class="enS">円</span></td>
                                <td class="text-center">1,100<span class="enS">円</span></td>
                                <td class="text-center">2,200<span class="enS">円</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="lessonplan mbS2" id="lesson5">
                <div class="lessonplanMain mbS">
                    <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/priceLesson5.jpg" alt=""></div>
                    <div class="txt">
                        <h3 class="mainColor bold600 lh_m fsL6 mbS3 ls_m">コースレッスン</h3>
                        <p class="bold600 lh_m fsM2 mbS3">実際のラウンドで学ぶ、戦略と判断力</p>
                        <ul class="checkList fsM4 bold600--all mbS subColor --normal">
                            <li><span>実地のコースに出て、状況に応じたプレイと選択を身につける</span></li>
                            <li><span>傾斜・風・距離感への対応を体験し、スコアにつながる判断力を磨く</span></li>
                        </ul>
                    </div>
                </div>
                <div class="tableWrap">
                    <table class="cmnTable --bgWhite">
                        <thead>
                            <tr>
                                <th class="text-center">コース</th>
                                <th class="text-center">プレミアム</th>
                                <th class="text-center">ミドル</th>
                                <th class="text-center">学生・ジュニア</th>
                                <th class="text-center">ビジター</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>コースレッスン(9ホール)</th>
                                <td class="text-center">10,000<span class="enS">円</span></td>
                                <td class="text-center">10,000<span class="enS">円</span></td>
                                <td class="text-center">10,000<span class="enS">円</span></td>
                                <td class="text-center">―</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="lessonplan mbS2" id="lesson6">
                <div class="lessonplanMain mbS">
                    <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/priceLesson6.jpg" alt=""></div>
                    <div class="txt">
                        <h3 class="mainColor bold600 lh_m fsL6 mbS3 ls_m">フィッティング</h3>
                        <p class="bold600 lh_m fsM2 mbS3">スイング特性に合った1本で、精度と再現性を高める</p>
                        <ul class="checkList fsM4 bold600--all mbS subColor --normal">
                            <li><span>シャフトの挙動や打球データを解析し、相性の良いスペックを導き出す</span></li>
                            <li><span>試打と比較を重ね、クラフトマンが最適なクラブをカスタム対応</span></li>
                        </ul>
                    </div>
                </div>
                <div class="tableWrap">
                    <table class="cmnTable --bgWhite">
                        <thead>
                            <tr>
                                <th class="text-center">コース</th>
                                <th class="text-center">プレミアム</th>
                                <th class="text-center">ミドル</th>
                                <th class="text-center">学生・ジュニア</th>
                                <th class="text-center">ビジター</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>フィッティング(90分)</th>
                                <td class="text-center">20,900<span class="enS">円</span></td>
                                <td class="text-center">25,300<span class="enS">円</span></td>
                                <td class="text-center">24,200<span class="enS">円</span></td>
                                <td class="text-center">27,500<span class="enS">円</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <p class="fsS">※キャンセルポリシー <br>
                <!-- • レッスン前日までのキャンセル：550円（※90分以上のレッスンは 1,100円）<br>
                • レッスン当日キャンセル：1,100円　　（※90分以上のレッスンは 2,200円） -->
                予約の変更は予約日時の3時間前までに行うものとし、それ以降の変更・キャンセルは認められません。
            </p>
        </div>
    </div>
</section>
<section id="priceCoaching">
    <div class="coachingBg padding pt0">
        <div class="cnt padding" data-aos="fade">
            <div class="cntS">
                <div class="ttlWrap text-center white mbS">
                    <div class="en">Instructor</div>
                    <h2 class="ja">インストラクターのご紹介</h2>
                </div>
                <p class="text-center bold600 fsM15 white">経験豊富なインストラクターが、<br class="sp">一人ひとりの特徴を見極め、<br>実践的な指導で<br class="sp">確かな上達へ導きます。</p>
            </div>
        </div>
        <div id="instructor">
            <div class="cnt mbSpL4" data-aos="fade">
                <div class="cntS relative padding custumPadding">
                    <p class="enTtl">Instructor</p>
                    <div class="instFlex">
                        <div class="text">
                            <div class="name mbS2 flex alignCenter cg1em">
                                <p class="ja bold600 fsM15 lh_m">坂本 一馬</p>
                                <p class="en mainColor">Kazuma Sakamoto</p>
                            </div>
                            <div class="instInfo">
                                <dl class="mbS2">
                                    <dt>経　　歴</dt>
                                    <dd>作陽学園高等学校ゴルフ部 / 東北福祉大学ゴルフ部 </dd>
                                </dl>
                                <p>ツアープロ・奥嶋誠昭氏に師事し、技術と指導姿勢を受け継ぐ。<br>現場でも評価の高い指導スタイルを確立している。</p>
                            </div>
                        </div>
                        <div class="img">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/instructor.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="paddingS pt0">
            <div class="cnt" data-aos="fade">
                <div class="cntS">
                    <div class="instructorMessage mbM3">
                        <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/instructor2.jpg" alt=""></div>
                        <div class="txt">
                            <p class="bold600 fsM2 white lh_m mbS">型にはめずに伸ばす。<br>データを味方に、楽しく上達の軌道に</p>
                            <p class="lh_xl white">ホースワンメインインストラクターの坂本一馬です。<br>
                                ホースワンでは、スイングを”正解とされる型”にはめるのではなく、その人が持っている力をどう伸ばすかにこだわったレッスンを大切にしています。<br>
                                初心者の方には、まず楽しむことから。たくさん打つ楽しさを通じて、ゴルフに夢中になってもらえたらと思っています。そして「もっと上手くなりたい」と思ったタイミングで、基本やフォーム、クラブの選び方を少しずつご案内していきます。<br>
                                また経験者の方には、数値を使った分析や戦略的な思考を交えながら、「こうすればもっと伸びる」という気づきと実感をお届けします。<br>
                                このスタジオには、岡山ではまだ珍しい分析機器やカスタム環境が整っています。<br>
                                ゴルフを楽しみたい方だけでなく、もっと深く知りたい方、自分の可能性を追求したい方は、ぜひ一度、お気軽に見学にお越しください。<br>
                                このスタジオでは、皆様それぞれの理想のゴルフを極めていただけると信じています。
                            </p>
                        </div>
                    </div>
                    <div class="text-center mbS">
                        <a href="" class="cmnbtn --white --center"><span>レッスンを予約する</span></a>
                    </div>
                </div>
            </div>
        </div>
        <div id="comment">
            <div class="cnt paddingS mbS">
                <div class="cntS">
                    <p class="mainColor bold600 inter fsL5 lh_s mbS">Special Comment</p>
                    <div class="commentFlex">
                        <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/comment.jpg" alt=""></div>
                        <div class="text ls_l">
                            <div class="name mbS2 flex cg1em alignCenter">
                                <p class="ja bold600 fsM15 lh_m">奥嶋 誠昭</p>
                                <p class="en mainColor">Tomoaki Okushima</p>
                            </div>
                            <div class="instInfo mbS">
                                <dl class="mbS2">
                                    <dt>経　　歴</dt>
                                    <dd class="fsS">
                                        <p class="mbS2">1980年（昭和55年）3月26日生まれ。<br>
                                            ツアープロコーチ。<br>
                                            ツアープロの稲見萌寧（2021年度賞金女王、東京五輪銀メダル）、<br class="pc">
                                            木下稜介、高橋彩華らのコーチとして活躍。</p>
                                        <p>横浜にある「ノビテックゴルフスタジオ」で、体とクラブの動きを3次元で計測・解析する『GEARS』（ギアーズ）をはじめとする、世界最先端機器を駆使したレッスンを行っている。</p>

                                    </dd>
                                </dl>
                            </div>
                            <p class="lh_xl mbS">坂本インストラクターは、どんな相手にも誠実かつ丁寧に向き合い、年齢や技術レベルを問わず、その人に最適な言葉と方法で導くことのできる稀有な指導者です。<br>ホースワンゴルフスタジオは彼の妥協を許さないこだわりと、ゴルフに対する深い情熱が隅々まで息づいた空間です。<br>
                                パター、アプローチ、トレーニング、フィッティングに至るまで、あらゆる要素を高精度な設備とデータで網羅したこのスタジオは、西日本において他に類を見ない総合力を誇っています。<br>ゴルフと本気で向き合い、確かな成長を求めるすべてのプレーヤーに、心から推薦いたします。</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>




        <div class="cnt cntL otherInstructorBlock relative">
            <div class="otherInstructorSlide">
                <div class="swiper-wrapper">
                    <div id="other" class="paddingS mbS mbSpL4 swiper-slide">
                        <div class="cntS">
                            <p class="mainColor bold600 inter fsL5 lh_s mbS">Other Instructor</p>
                            <div class="commentFlex">
                                <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/instructorSlide1.jpg" alt=""></div>
                                <div class="text ls_l">
                                    <div class="name mbS2 flex cg1em alignCenter">
                                        <p class="ja bold600 fsM15 lh_m">富永 暁登</p>
                                        <p class="en mainColor">Akito Tominaga</p>
                                    </div>
                                    <div class="instInfo mbS">
                                        <dl class="mbS2">
                                            <dt>得意分野</dt>
                                            <dd class="fsS">
                                                <p class="mbS2">パター／再現性の高いスイングづくり</p>
                                            </dd>
                                        </dl>
                                    </div>
                                    <p class="bold600 fsM2 lh_m mbS mbSpS32 ls_m">上達の近道は、楽しみながら<br class="pc">“繰り返せる動き”を身につけること</p>
                                    <p class="lh_xl mbS">
                                        トラックマンをはじめ、ホースワンには精密にフォームを確認できる設備が揃っています。パター練習に特化したエリアもあるので、「感覚だけじゃなくて数字でも理解したい」という方にぴったりです。上手くなるには“楽しく続けられる”ことが一番。一緒に再現性のあるスイングをつくっていきましょう！
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div id="other" class="paddingS mbS mbSpL4 swiper-slide">
                        <div class="cntS">
                            <p class="mainColor bold600 inter fsL5 lh_s mbS">Other Instructor</p>
                            <div class="commentFlex">
                                <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/instructorSlide2.jpg" alt=""></div>
                                <div class="text ls_l">
                                    <div class="name mbS2 flex cg1em alignCenter">
                                        <p class="ja bold600 fsM15 lh_m">安本 美咲</p>
                                        <p class="en mainColor">Misaki Yasumoto</p>
                                    </div>
                                    <div class="instInfo mbS">
                                        <dl class="mbS2">
                                            <dt>得意分野</dt>
                                            <dd class="fsS">
                                                <p class="mbS2">100ヤード以内／やさしいスイングづくり</p>
                                            </dd>
                                        </dl>
                                    </div>
                                    <p class="bold600 fsM2 lh_m mbS mbSpS32 ls_m">スコアアップの近道は、“自分に合ったスイング”</p>
                                    <p class="lh_xl mbS">
                                        ホースワンの魅力は、スイングを数値で見える化できること。機材を活用して、お客様にとって「一番いいスイング」を一緒に見つけていきます。難しく考えすぎず、楽しみながら、確実にステップアップしていきましょう。短い距離の精度を上げたい方、スコアアップを目指す方もお待ちしています！
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div id="other" class="paddingS mbS mbSpL4 swiper-slide">
                        <div class="cntS">
                            <p class="mainColor bold600 inter fsL5 lh_s mbS">Other Instructor</p>
                            <div class="commentFlex">
                                <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/instructorSlide3.jpg" alt=""></div>
                                <div class="text ls_l">
                                    <div class="name mbS2 flex cg1em alignCenter">
                                        <p class="ja bold600 fsM15 lh_m">花下 苺</p>
                                        <p class="en mainColor">Ichigo Hanashita</p>
                                    </div>
                                    <div class="instInfo mbS">
                                        <dl class="mbS2">
                                            <dt>得意分野</dt>
                                            <dd class="fsS">
                                                <p class="mbS2">ピンを狙うショット／体の使い方指導</p>
                                            </dd>
                                        </dl>
                                    </div>
                                    <p class="bold600 fsM2 lh_m mbS mbSpS32 ls_m">女性の悩みに寄り添いながら、<br class="pc">アグレッシブに上達</p>
                                    <p class="lh_xl mbS">
                                        ツアーパッドなどの最新設備で、パターを細かく分析できるのがホースワンの魅力です。筋肉や身体の使い方を学んできた経験を活かして、ヘッドスピードや体格に合わせた無理のないアドバイスを行っています。女性の方も気軽に来てくださいね。一緒にピンを狙っていきましょう！
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>

        <script>
            const otherInst = new Swiper('.otherInstructorSlide', {
                loop: true,
                slidesPerView: 1,
                spaceBetween: 20,
                centeredSlides: true,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
        </script>

    </div>
</section>
<section id="priceFlow">
    <div class="cnt padding pb0" data-aos="fade">
        <div class="cntS">
            <div class="ttlWrap text-center mbS">
                <div class="en subColor">Flow</div>
                <h2 class="ja">ご入会までの流れ</h2>
            </div>
            <h3 class="text-center bold600 fsM15 lh_m mbS3 ls_l2">簡単3ステップで、<br class="sp">すぐにゴルフを始められる！</h3>
            <p class="text-center mbM3">目的に合わせて選べる、こだわりの練習空間</p>
            <ul class="flowList mbS">
                <li>
                    <div class="num">
                        STEP<span>01</span>
                    </div>
                    <div class="txtBlock">
                        <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/priceFlow1.png" alt=""></div>
                        <div class="txt">
                            <p class="bold600 fsM2 mbS2 lh_m">体験・見学（任意）</p>
                            <p class="mbM3">ご希望の方は、施設やシミュレーターの見学・体験が可能です（約60分）。<br>
                                お申し込み前に雰囲気を知っておきたい方におすすめです。<br>※見学・体験をせずにそのままご入会いただくことも可能です。</p>
                            <a href="<?php echo home_url('contact/?kind=contact1'); ?>" class="cmnbtn"><span>無料体験を予約する</span></a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="num">
                        STEP<span>02</span>
                    </div>
                    <div class="txtBlock">
                        <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/priceFlow2.png" alt=""></div>
                        <div class="txt">
                            <p class="bold600 fsM2 mbS2 lh_m">入会手続き</p>
                            <p class="mbM3">専用サイトからご希望のプランを選んでお申し込みいただけます。<br>
                                お支払いはクレジットカードのみ対応となります。</p>
                            <a href="#price" class="cmnbtn"><span>月額プランの詳細を見る</span></a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="num">
                        STEP<span>03</span>
                    </div>
                    <div class="txtBlock">
                        <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/priceFlow3.png" alt=""></div>
                        <div class="txt">
                            <p class="bold600 fsM2 mbS2 lh_m">ご予約</p>
                            <p class="mbM3">ご入会後は、専用の予約サイトからレッスンや練習のご予約が可能です。<br>完全予約制のため、待ち時間なくご利用いただけます。</p>
                            <a href="" target="_blank" class="cmnbtn"><span>打席を予約する</span></a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="num">
                        STEP<span>04</span>
                    </div>
                    <div class="txtBlock">
                        <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/priceFlow4.png" alt=""></div>
                        <div class="txt">
                            <p class="bold600 fsM2 mbS2 lh_m">プレイ開始</p>
                            <p class="">初回は施設の使い方やシミュレーターの操作方法をご説明します。<br>
                                不安な点があってもスタッフが丁寧にサポートしますので、すぐに練習を始められます。</p>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="text-center">
                <a href="<?= home_url(); ?>/contact/?kind=contact2" class="cmnbtn --center"><span>ご入会はこちらから</span></a>
            </div>
        </div>
    </div>
</section>
<section id="priceFaq">
    <div class="cnt padding pb0" data-aos="fade">
        <div class="cntS">
            <div class="ttlWrap text-center mbS">
                <div class="en subColor">Q&A</div>
                <h2 class="ja">よくあるご質問</h2>
            </div>
            <div class="faqTtl">初心者・未経験者からの質問</div>
            <dl class="faq">
                <dt class="acdTitle">
                    <p class="in">ゴルフをやったことがないのですが、利用できますか？<span class="plus"></span></p>
                </dt>
                <dd class="acdBlock">はい、まったくの未経験でも安心してご利用いただけます。初心者の方には「まずは楽しむこと」をモットーに、やさしく丁寧にサポートいたします。</dd>
            </dl>
            <dl class="faq">
                <dt class="acdTitle">
                    <p class="in">予約は必要ですか？飛び込みでも使えますか？<span class="plus"></span></p>
                </dt>
                <dd class="acdBlock">基本は完全予約制です。ただし、空きがある場合はその場でご案内できることもあります。</dd>
            </dl>
            <dl class="faq mbM3">
                <dt class="acdTitle">
                    <p class="in">ゴルフのルールや打ち方がわからなくても大丈夫？<span class="plus"></span></p>
                </dt>
                <dd class="acdBlock">はい、問題ありません。ルールや打ち方がわからない方には、スタッフが基本から丁寧にサポートしますのでご安心ください。</dd>
            </dl>

            <div class="faqTtl">施設・設備に関する質問</div>
            <dl class="faq">
                <dt class="acdTitle">
                    <p class="in">シミュレーターはどんなことができますか？<span class="plus"></span></p>
                </dt>
                <dd class="acdBlock">実在のコースを再現したラウンド体験から、スイングや弾道の数値分析まで、幅広く活用できます。フォーム改善やフィッティングにも対応しています。</dd>
            </dl>
            <dl class="faq">
                <dt class="acdTitle">
                    <p class="in">どんな服装で行けばいいですか？<span class="plus"></span></p>
                </dt>
                <dd class="acdBlock">動きやすい服装であれば問題ありません。更衣室も完備していますので、着替えてからのご利用も可能です。</dd>
            </dl>
            <dl class="faq mbM3">
                <dt class="acdTitle">
                    <p class="in">更衣室やロッカーはありますか？<span class="plus"></span></p>
                </dt>
                <dd class="acdBlock">はい、更衣室はございます。ロッカーは着替え中の荷物置き場としてご利用いただけます。貴重品は自己管理をお願いしています。</dd>
            </dl>

            <div class="faqTtl">利用時間・アクセスに関する質問</div>
            <dl class="faq">
                <dt class="acdTitle">
                    <p class="in">営業時間や定休日は？<span class="plus"></span></p>
                </dt>
                <dd class="acdBlock">詳細な営業時間や定休日については、施設の予約ページまたはお問い合わせにてご確認ください。</dd>
            </dl>
            <dl class="faq mbM3">
                <dt class="acdTitle">
                    <p class="in">駐車場はありますか？駅からどのくらい？<span class="plus"></span></p>
                </dt>
                <dd class="acdBlock">スタジオのすぐそばに専用駐車場（3台分）を完備しています。岡山駅から徒歩約7分と、アクセスも便利です。</dd>
            </dl>

            <div class="faqTtl">レッスン・スタッフについて</div>
            <dl class="faq">
                <dt class="acdTitle">
                    <p class="in">レッスンは誰でも受けられますか？年齢制限は？<span class="plus"></span></p>
                </dt>
                <dd class="acdBlock">はい、どなたでもご利用いただけます。年齢に関係なく、初心者から経験者まで幅広く対応しています。</dd>
            </dl>
            <dl class="faq">
                <dt class="acdTitle">
                    <p class="in">インストラクターの指名はできますか？<span class="plus"></span></p>
                </dt>
                <dd class="acdBlock">はい、指名可能です。ご予約の際にご相談ください。</dd>
            </dl>
            <dl class="faq">
                <dt class="acdTitle">
                    <p class="in">スタッフのサポートはありますか？使い方が不安です。<span class="plus"></span></p>
                </dt>
                <dd class="acdBlock">はい、スタッフが常駐しており、シミュレーターの使い方や練習方法などを丁寧にサポートします。初心者の方でも安心してご利用いただけます。</dd>
            </dl>

        </div>
    </div>
</section>

<?php
while (have_posts()) : the_post();
?>
    <?php the_content(); ?>
    <?php //get_template_part('content'); 
    ?>
<?php
endwhile;
?>


<?php get_footer(); ?>