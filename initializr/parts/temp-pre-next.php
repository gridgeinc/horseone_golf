<?php
$prevpost = get_adjacent_post(true, '', true); //前の記事
$nextpost = get_adjacent_post(true, '', false); //次の記事
if ($prevpost or $nextpost) { //前の記事、次の記事いずれか存在しているとき
?>

    <div class="singleColumnPreNext">
        <div class="flex justBetweenSp">

            <?php
            if ($prevpost) { //前の記事が存在しているとき

                // アイキャッチ画像のIDを取得
                $thumbnail_id = get_post_thumbnail_id($prevpost->ID);
                // mediumサイズの画像内容を取得（引数にmediumをセット）
                $eye_img = wp_get_attachment_image_src($thumbnail_id, 'medium');
                // 取得した画像URLにてイメージタグを出力
                // 更にdata-aliasというHTML5のカスタムデータ属性を追加

                echo '<a href="' . get_permalink($prevpost->ID) . '" class="singlePageLinkBox"><span class="singlePageLink prev">前の記事を見る</span></a>';
            } else { //前の記事が存在しないとき
                echo '<a href="' . network_site_url('/') . '" class="singlePageLink prev">TOPへ戻る</a>';
            }
            if ($nextpost) { //次の記事が存在しているとき

                // アイキャッチ画像のIDを取得
                $thumbnail_id = get_post_thumbnail_id($nextpost->ID);
                // mediumサイズの画像内容を取得（引数にmediumをセット）
                $eye_img = wp_get_attachment_image_src($thumbnail_id, 'medium');
                // 取得した画像URLにてイメージタグを出力
                // 更にdata-aliasというHTML5のカスタムデータ属性を追加

                echo '<a href="' . get_permalink($nextpost->ID) . '" class="singlePageLinkBox next"><span class="singlePageLink next">次の記事を見る</span></a>';
            } else { //次の記事が存在しないとき
                echo '<a href="' . network_site_url('/') . '" class="singlePageLink next">TOPへ戻る</a>';
            }
            ?>

        </div>
    </div>



<?php } ?>