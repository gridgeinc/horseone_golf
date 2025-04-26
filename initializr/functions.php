<?php
/* ==========================================================================
   デフォルト全ページ対応
========================================================================== */

//アイキャッチ画像表示
add_theme_support('post-thumbnails');
function custom_theme_thumbnails()
{
    set_post_thumbnail_size(); // 通常の投稿サムネイル
}
add_action('after_setup_theme', 'custom_theme_thumbnails');

//グローバルメニュー
register_nav_menu('mainmenu', 'メインメニュー');

//メニューの「タイトル属性」を出力させる対応
add_filter('walker_nav_menu_start_el', 'description_in_nav_menu', 10, 4);

function description_in_nav_menu($item_output, $item)
{
    return preg_replace('/(<a.*?>[^<]*?)</', '$1' . "<span>{$item->attr_title}</span><", $item_output);
}

//カテゴリーで親カテゴリー以下で表示を指定する指示
function post_is_in_descendant_category($cats, $_post = null)
{
    foreach ((array) $cats as $cat) {
        $descendants = get_term_children((int) $cat, 'category');
        if ($descendants && in_category($descendants, $_post))
            return true;
    }
    return false;
}

add_filter('the_content', 'wpautop');
add_filter('the_excerpt', 'wpautop');

register_sidebar();

/*絵文字出力削除*/
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles', 10);

/*recentcomment削除*/
function remove_recent_comments_style()
{
    global $wp_widget_factory;
    remove_action('wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style'));
}
add_action('widgets_init', 'remove_recent_comments_style');

/*wp-embed.min.js削除*/
remove_action('wp_head', 'rest_output_link_wp_head');
remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('wp_head', 'wp_oembed_add_host_js');


//Pagenation
function pagination($pages = '', $range = 2)
{
    $showitems = ($range * 2) + 1; //表示するページ数（５ページを表示）

    global $paged; //現在のページ値
    if (empty($paged)) $paged = 1; //デフォルトのページ

    if ($pages == '') {
        global $wp_query;
        $pages = $wp_query->max_num_pages; //全ページ数を取得
        if (!$pages) //全ページ数が空の場合は、１とする
        {
            $pages = 1;
        }
    }

    if (1 != $pages) //全ページが１でない場合はページネーションを表示する
    {
        echo "<div class=\"pagenation\">\n";
        echo "<ul>\n";
        //Prev：現在のページ値が１より大きい場合は表示
        if ($paged > 1) {
            echo "<li class=\"prev\"><a href='" . get_pagenum_link($paged - 1) . "'></a></li>\n";
        }

        for ($i = 1; $i <= $pages; $i++) {
            if (1 != $pages && (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems)) {
                //三項演算子での条件分岐
                echo ($paged == $i) ? "<li class=\"active\">" . $i . "</li>\n" : "<li><a href='" . get_pagenum_link($i) . "'>" . $i . "</a></li>\n";
            }
        }
        //Next：総ページ数より現在のページ値が小さい場合は表示
        if ($paged < $pages) {
            echo "<li class=\"next\"><a href=\"" . get_pagenum_link($paged + 1) . "\"></a></li>\n";
        }
        echo "</ul>\n";
        echo "</div>\n";
    }
}


// 人気記事出力用関数
function getPostViews($postID)
{
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if ($count == '') {
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count . ' Views';
}
// 記事viewカウント用関数
function setPostViews($postID)
{
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if ($count == '') {
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    } else {
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

//mw wp formの引数の日付カスタマイズ
function my_mwform_value($value, $name)
{
    if ($name === 'date' && !empty($_GET['post_id']) && !is_array($_GET['post_id'])) {
        return get_the_date('Y年m月d日', $_GET['post_id']);
    }
    return $value;
}
add_filter('mwform_value_mw-wp-form-22', 'my_mwform_value', 10, 2);



/* the_archive_title 余計な文字を削除 */
add_filter('get_the_archive_title', function ($title) {
    if (is_category()) {
        $title = single_cat_title('', false);
    } elseif (is_tag()) {
        $title = single_tag_title('', false);
    } elseif (is_tax()) {
        $title = single_term_title('', false);
    } elseif (is_post_type_archive()) {
        $title = post_type_archive_title('', false);
    } elseif (is_date()) {
        $title = get_the_time('Y年n月');
    } elseif (is_search()) {
        $title = '検索結果：' . esc_html(get_search_query(false));
    } elseif (is_404()) {
        $title = '「404」ページが見つかりません';
    } else {
    }
    return $title;
});


//予約投稿機能を無効化
add_action('save_post', 'futuretopublish', 99);
add_action('edit_post', 'futuretopublish', 99);
function futuretopublish()
{
    global $wpdb;
    $sql = 'UPDATE `' . $wpdb->prefix . 'posts` ';
    $sql .= 'SET post_status = "publish" ';
    $sql .= 'WHERE post_status = "future"';
    $wpdb->get_results($sql);
}

//子ページの場合はテンプレートをファイルをpage-service_child.phpと記載できるようにする
// add_filter('page_template_hierarchy', 'my_page_templates');
// function my_page_templates($templates)
// {
//     global $wp_query;

//     $template = get_page_template_slug();
//     $pagename = $wp_query->query['pagename'];

//     if ($pagename && !$template) {
//         $pagename = str_replace('/', '_', $pagename);
//         $decoded = urldecode($pagename);

//         if ($decoded == $pagename) {
//             array_unshift($templates, "page-{$pagename}.php");
//         }
//     }

//     return $templates;
// }
add_filter('page_template_hierarchy', 'my_page_templates');
function my_page_templates($templates)
{
    global $wp_query;

    $template = get_page_template_slug();

    // nullチェックを追加
    $pagename = isset($wp_query->query['pagename']) ? $wp_query->query['pagename'] : null;

    if ($pagename && !$template) {
        $pagename = str_replace('/', '_', $pagename);
        $decoded = urldecode($pagename);

        if ($decoded == $pagename) {
            array_unshift($templates, "page-{$pagename}.php");
        }
    }

    return $templates;
}


//連絡先情報追加
function add_user_contact_form($contacts)
{
    return array(
        'twitter'  => 'Twitter',
        'facebook' => 'Facebook',
        'instagram'    => 'Instagram',
        // 'line'    => 'Line',
        'youtube'    => 'youtube'
    );
}
add_filter('user_contactmethods', 'add_user_contact_form');


// プロフィール項目を追加する
function my_user_meta($wb)
{
    //項目の追加
    $wb['position'] = '役職';

    return $wb;
}
add_filter('user_contactmethods', 'my_user_meta', 10, 1);

//高さが2560pxを超えてもリサイズしないように
add_filter('big_image_size_threshold', '__return_false');



//mw wp formの初期値調整
function _my_mwform_value($value, $name)
{
    if ($name === 'inquiry_type' && !empty($_GET['kind']) && !is_array($_GET['kind'])) {
        return $_GET['kind'];
    }
    return $value;
}
add_filter('mwform_value_mw-wp-form-22', '_my_mwform_value', 10, 2);

//mw wp formに迷惑メールバリデーション
if (class_exists('MW_WP_Form_Abstract_Validation_Rule')) {
    class MW_WP_Form_Validation_Rule_Japanese extends MW_WP_Form_Abstract_Validation_Rule
    {
        protected $name = 'japanese';

        public function rule($key, array $options = array())
        {
            $value = $this->Data->get($key);
            if (is_null($value)) {
                return;
            }
            if (preg_match('/[一-龠]+|[ぁ-ん]+|[ァ-ヴー]/u', $value)) {
                return;
            }
            $defaults = array(
                'message' => '日本語で入力してください。'
            );
            $options = array_merge($defaults, $options);
            return $options['message'];
        }

        public function admin($key, $value)
        {
?>
            <label><input type="checkbox" <?php checked($value[$this->getName()], 1); ?> name="<?php echo MWF_Config::NAME; ?>[validation][<?php echo $key; ?>][<?php echo esc_attr($this->getName()); ?>]" value="1" />日本語を含む</label>
<?php
        }
    }

    function mwform_validation_rule_japanese($validation_rules)
    {
        $instance = new MW_WP_Form_Validation_Rule_Japanese();
        $validation_rules[$instance->getName()] = $instance;
        return $validation_rules;
    }

    add_filter('mwform_validation_rules', 'mwform_validation_rule_japanese');
}


// Breacrumb navXT のトップページの表記を書き換える
add_filter('bcn_breadcrumb_title', 'nskw_bcn_breadcrumb_title_filter', 10, 2);
function nskw_bcn_breadcrumb_title_filter($title, $type = null)
{

    if ('home' === $type[0]) {
        $title = 'トップ';
    }

    return $title;
}


/*ユーザー定義関数*/
function info($info)
{
    if ($info == "name") {
        echo "Horse One Golf Studio";
    } elseif ($info == "nameEng") {
        echo "";
    } elseif ($info == "ceo") {
        echo "";
    } elseif ($info == "postalCode") {
        echo "〒700-0903";
    } elseif ($info == "address") {
        echo "岡山市北区幸町7-20 アクタスビル 3F";
    } elseif ($info == "tel") {
        echo ""; // 050-222-222
    } elseif ($info == "telNotHy") {
        echo ""; // 050222222
    } elseif ($info == "fax") {
        echo "";
    } elseif ($info == "mail") {
        echo "";
    } elseif ($info == "gmap") {
        echo "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3281.5755581106027!2d133.91455777619737!3d34.665420585104314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3554064d06be93f9%3A0x34c236c25526cff3!2z44CSNzAwLTAwMjQg5bKh5bGx55yM5bKh5bGx5biC5YyX5Yy66aeF5YWD55S6!5e0!3m2!1sja!2sjp!4v1744702978555!5m2!1sja!2sjp";
    } elseif ($info == "gmapIframe") {
        echo '';
    } elseif ($info == "time") {
        echo "10:00〜21:00";
    } elseif ($info == "holiday") {
        echo "";
    } elseif ($info == "note") {
        echo "";
    } elseif ($info == "line") {
        echo "https://lin.ee/0HSNbAB";
    } elseif ($info == "instagram") {
        echo "";
    } elseif ($info == "facebook") {
        echo "";
    } elseif ($info == "twitter") {
        echo "";
    } elseif ($info == "login") {
        echo "";
    }
}

/* ==========================================================================
    デフォルト全ページ対応ここまで
========================================================================== */
// mw wp form pタグ削除
function mvwpform_autop_filter()
{
    if (class_exists('MW_WP_Form_Admin')) {
        $mw_wp_form_admin = new MW_WP_Form_Admin();
        $forms = $mw_wp_form_admin->get_forms();
        foreach ($forms as $form) {
            add_filter('mwform_content_wpautop_mw-wp-form-' . $form->ID, '__return_false');
        }
    }
}
mvwpform_autop_filter();

// gulpファイル除外
add_filter(
    'ai1wm_exclude_themes_from_export',
    function ($exclude_filters) {
        $exclude_filters[] = 'initializr/gulp';
        return $exclude_filters;
    }
);


// カスタム投稿 表示記事数制限
function change_posts_per_page($query)
{
    if (is_admin() || !$query->is_main_query()) {
        return;
    }

    if ($query->is_post_type_archive('works') || $query->is_tax('works_cate') || $query->is_tax('works_industry') || $query->is_tax('works_area') || $query->is_tax('works_const')) {
        $query->set('posts_per_page', 18);
    }
}
add_action('pre_get_posts', 'change_posts_per_page');
