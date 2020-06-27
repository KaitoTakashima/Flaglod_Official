<?php get_header(); ?>
   <main>
        <section class="p-News">
            <h2 class="c-news_heading c-news_bg">お知らせ</h2>
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
         <?php endif; ?>

            </section>
        <section class="c-pagination">
            <ul class="c-pagination_btn">
                <li class="c-back_btn"><a href="">前へ</a></li>
                <li class="c-next_btn"><a href="">次へ</a></li>
            </ul>
        </section>
    </main>


<!-- footer.phpを読み込む -->
<?php get_footer();?>