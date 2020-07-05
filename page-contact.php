<?php
 /*
 Template Name: お問い合わせ用テンプレート
 */
?>

<?php get_header(); ?>

<h1 class="c-contact_heading c-movie_bg">お問い合わせ</h1>
<section class="c-contactform">
    <?php
    if(have_posts()): while(have_posts()): the_post();?>
        <div>
            <?php the_content(); ?>
        </div>

        <?php endwhile; endif; ?>
</section>


<?php get_footer();?>