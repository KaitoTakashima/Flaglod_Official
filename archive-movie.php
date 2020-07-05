<?php get_header(); ?>
    <main>
        <section class="p-movie_works">
            <h1 class="c-movie_works_heading c-movie_bg">映像</h1>

            <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
            <div <?php post_class(); ?>>
            <!-- タイトルにリンクを付けて表示 -->
                <ul class="p-movie_works_content">
                    <li class="c-movie_works_thumbnail">
                      <?php the_post_thumbnail(); ?>
                    </li>
                    <li class="p-movie_work_textbox">
                        <ul class="p-movie_works_information right_information">
                            <li class="c-movie_works_title vertical"><?php the_title();?></li>
                            <li class="c-movie_works_subtitle vertical"><?php the_field( 'theme' );?></li>
                        </ul>

                        <ul class="p-movie_works_information p-left_information">
                            <li class="c-composer vertical">作詞・作曲 <?php the_field( 'composer' );?></li>
                            <li class="c-arrange vertical">編曲 <?php the_field( 'arrange' );?></li>
                            <li class="c-art vertical">絵 <?php the_field( 'art' );?></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <?php endwhile; ?>
         <?php endif; ?>
        </section>
    </main>

<!-- footer.phpを読み込む -->
<?php get_footer();?>
