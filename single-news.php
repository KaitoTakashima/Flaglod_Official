<?php get_header(); ?>
    <main>
        <section class="p-News">
        <?php if ( have_posts() ): while( have_posts() ): the_post(); ?>
          <ul>
                <li class="news_detail">
                    <p class="c-news_day"><?php the_time('Y/m/d');?></p>
                </li>
                <li class="news_content">
                    <a href=""><h1 class="c-news_title"><?php the_title();?></h1></a>
                </li>
            </ul>
            <div class="c-news_text">
                <?php the_content();?>
            </div>
        <?php endwhile; endif; ?>
            <!-- <ul>
                <li class="news_detail">
                    <p class="c-news_day">2020.06.19</p>
                </li>
                <li class="news_content">
                    <a href=""><h2 class="c-news_title">文章が入ります。文章が入ります。</h2></a>
                </li>
            </ul>
            <div class="c-news_text">
                <p> 文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。
                    文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。
                    文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。
                </p>

                <p> 文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。
                    文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。
                    文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。
                </p>
            </div> -->
        </section>
        <section class="p-News c-fadein">
            <h2 class="c-news_heading c-news_bg">最新のお知らせ</h2>
            <?php $args = array(
                           'numberposts' => 3,                //表示（取得）する記事の数
                           'post_type' => 'news'    //投稿タイプの指定
                          );
                $posts = get_posts( $args );
                if( $posts ) : foreach( $posts as $post ) : setup_postdata( $post );
            ?>
                <ul>
                    <li class="news_detail">
                        <p class="c-news_day"><?php the_time('Y/m/d');?></p>
                    </li>
                    <li class="news_content">
                        <a href="<?php the_permalink(); ?>">
                            <p class="c-news_title">
                                <?php the_title(); ?>
                            </p>
                        </a>
                    </li>
                 </ul>

                <?php endforeach; ?>
                <?php else : //記事が無い場合 ?>
                    <li>
                        <p>記事はまだありません。</p>
                    </li>
                <?php endif;
                    wp_reset_postdata(); //クエリのリセット
                ?>
            </section>
    </main>
<!-- footer.phpを読み込む -->
<?php get_footer();?>