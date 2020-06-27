<!-- header.phpを読み込む -->
<?php get_header(); ?>
    <main>
        <section class="main_visual">
            <div class="c-scroll_nav">
                <p>SCROLL</p>
            </div>
        </section>
        <section class="p-News c-fadein">
            <h2 class="c-news_heading c-news_bg">お知らせ</h2>
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
                <div class="c-more_btn">
                    <a class="button" href="<?php echo get_post_type_archive_link('news');?>">MORE</a>
                </div>
            </section>

            <!-- <section class="p-News c-fadein">
                <h2 class="c-news_heading c-news_bg">お知らせ</h2>
                <ul>
                    <li class="news_detail">
                        <p class="c-news_day">2020.06.19</p>
                    </li>
                    <li class="news_content">
                        <a href=""><p class="c-news_title">文章が入ります。文章が入ります。</p></a>
                    </li>
                </ul>
                <ul>
                    <li class="news_detail">
                        <p class="c-news_day">2020.06.19</p>
                    </li>
                    <li class="news_content">
                        <a href=""><p class="c-news_title">文章が入ります。文章が入ります。</p></a>
                    </li>
                </ul>
                <ul>
                    <li class="news_detail">
                        <p class="c-news_day">2020.06.19</p>
                    </li>
                    <li class="news_content">
                        <a href=""><p class="c-news_title">文章が入ります。文章が入ります。</p></a>
                    </li>
                </ul>
                <div class="c-more_btn">
                    <a class="button" href="#">MORE</a>
                </div>
            </section> -->

            <section class="p-movie_works c-fadein">
                <h2 class="c-movie_works_heading c-movie_bg c-fadein">映像</h2>
                <?php $args = array(
                           'numberposts' => 1,                //表示（取得）する記事の数
                           'post_type' => 'movie'    //投稿タイプの指定
                          );
                $posts = get_posts( $args );
                if( $posts ) : foreach( $posts as $post ) : setup_postdata( $post );
                ?>
                    <ul class="p-movie_works_content">
                        <li class="c-movie_works_thumbnail">
                        <?php the_post_thumbnail(); ?>
                        </li>
                        <li class="p-movie_work_textbox">
                            <ul class="p-movie_works_information right_information">
                                <li class="c-movie_works_title vertical"><?php the_title();?></li>
                                <li class="c-movie_works_subtitle vertical"><?php the_field('theme');?></li>
                            </ul>

                            <ul class="p-movie_works_information p-left_information">
                                <li class="c-composer vertical">作詞・作曲 <?php the_field( 'composer' );?></li>
                                <li class="c-arrange vertical">編曲 <?php the_field( 'arrange' );?></li>
                                <li class="c-art vertical">絵 <?php the_field( 'art' );?></li>
                            </ul>
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

                <div class="c-more_btn">
                    <a class="button" href="<?php echo get_post_type_archive_link('movie');?>">MORE</a>
                </div>
            </section>
    </main>

<!-- footer.phpを読み込む -->
<?php get_footer();?>