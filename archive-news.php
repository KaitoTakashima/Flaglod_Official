<?php get_header(); ?>
   <main>
        <section class="p-News">
            <h1 class="c-news_heading c-news_bg">お知らせ</h1>
            <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post(); ?>
                <div <?php post_class(); ?>>
                <!-- タイトルにリンクを付けて表示 -->
                    <ul>
                            <li class="news_detail">
                                <p class="c-news_day">
                                    <?php the_time('Y/m/d');?>
                                </p>
                            </li>
                            <li class="news_content">
                                <a href="<?php the_permalink(); ?>">
                                    <p class="c-news_title">
                                        <?php the_title();?>
                                    </p>
                                </a>
                            </li>
                    </ul>
                </div>
                <?php endwhile; ?>

            <div class="c-mobile_pagination">
                <?php
                    the_posts_navigation( array(
                        'prev_text'     => '次へ',
                        'next_text'     => '前へ '
                    ) );
                ?>
            </div>
                <div class="c-pc_pagination">
                    <?php if(function_exists('wp_pagenavi')) :
                        wp_pagenavi(); //wp_pagenavi()の呼び出し
                    endif;
                    ?>
                </div>

            <?php endif; ?>

        </section>

    </main>


<!-- footer.phpを読み込む -->
<?php get_footer();?>