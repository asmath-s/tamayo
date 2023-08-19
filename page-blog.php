<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blog - UPH- Dr. Jose. G Tamayo Medical University</title>
    <?php get_header();?>


    <section class="PhilippinesPageHeader">
        <div class="PhilippinesBreadcrumb">
            <h1 class="page-tittle">Blogs</h1>
            <ul class="pageBreadcrumb">
                <li>
                    <a href="https://www.uphdjgtmedicaluniversity.com/">
                        Home</a>
                </li>
                <li>/</li>
                <li>Blogs</li>
            </ul>
        </div>
    </section>


    <section class="blogBox">
        <div class="container">
            <h2>Our <span>Blogs</span></h2>
            <div class="row">
                <?php
            $args = array(
                'post_type'      => 'post',
                'posts_per_page' => -1
            );

            $query = new WP_Query($args);

            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
                    ?>
                <div class="col-lg-4 d-flex">
                    <div class="blimage">
                        <?php the_post_thumbnail(); ?>

                        <div class="blContent">
                            <h3><?php the_title(); ?></h3>
                            <div><?php echo wp_trim_words(get_the_content(), 35, '...'); ?></div>
                        </div>
                        <div class="readmorebtn">
                            <a href="<?php the_permalink(); ?>" class="blbtn">Read More</a>
                        </div>

                    </div>
                </div>
                <?php
                }
                wp_reset_postdata();
            } else {
                echo '<p>No posts found.</p>';
            }
            ?>
            </div>
        </div>
    </section>

    <?php get_footer();?>