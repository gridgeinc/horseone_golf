<div id="sidebar">
    <aside>
        <div class="sidebarBox">
            <p class="sidebarTitle"><span class="inter">NEWS</span>最新の投稿</p>
            <ul class="sidebarNewsUl">
                <?php
                $args = array('posts_per_page' => 5,);
                $postslist = get_posts($args);
                foreach ($postslist as $post) :
                    setup_postdata($post); ?>
                    <li class="cat-item">
                        <a href="<?php the_permalink(); ?>">
                            <p class="title"><?php the_title(); ?></p>

                            <div class="flex alignCenter">
                                <p class="date"><?php echo get_the_date('Y.m.d'); ?></p>
                                <?php
                                $categories = get_the_category();
                                if ($categories) {
                                    echo '<ul class="cmNewsListInfoUl ml1">';
                                    foreach ($categories as $category) {
                                        echo '<li class="' . $category->slug . '">' . $category->name . '</li>';
                                    }
                                    echo '</ul>';
                                } ?>
                            </div>
                        </a>
                    </li>
                <?php
                endforeach;
                wp_reset_postdata();
                ?>
            </ul>
        </div>
    </aside>


    <aside>
        <div class="sidebarBox">
            <p class="sidebarTitle"><span class="inter">CATEGORY</span>カテゴリー</p>
            <div class="sidebarCategoryBlock">
                <?php wp_list_categories('title_li='); ?>
            </div>
        </div>
    </aside>


    <!--
    <aside>
        <div class="sidebarBox">
            <p class="sidebarTitle"><span class="fontEn">Tag</span>タグ</p>
            <div class="sidebarTagWrap">
                <?php wp_tag_cloud(); ?>
            </div>
        </div>
    </aside>
    -->

    <aside>
        <div class="sidebarBox">
            <p class="sidebarTitle"><span class="inter">ARCHIVE</span>アーカイブ</p>

            <select name="archive-dropdown" onChange='document.location.href=this.options[this.selectedIndex].value;'>
                <option value=""><?php echo attribute_escape(__('Select Month')); ?></option>
                <?php wp_get_archives('type=monthly&format=option&show_post_count=1'); ?>
            </select>

        </div>
    </aside>

</div>