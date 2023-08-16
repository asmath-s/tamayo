<?php get_header(); ?>
<div class="Contact-page-title blog d-flex align-items-center title-align-center title-color-light header-layout-1">
  <div class="Contact-page-title-layer">
    <div class="page-breadcrumb">
      <h1 class="page-title">Blog</h1>
      <ul class="breadcrumb">
        <li>
          <a href="#">Home</a>
        </li>
        <li>>></li>
        <li class="current">Blog Details</li>
      </ul>
    </div>
  </div>
</div>
<section class="blogDetails">
  <div class="container">
    <div class="row">
<div class="col-lg-8 col-md-12">
  <div class="blogContent">
    <article>
      <div class="blogTitle">
        <?php if (has_post_thumbnail()) : ?>
          <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title_attribute(); ?>" />
        <?php endif; ?>
        <div class="blogpara">
          <h6>
            <i class="fa-regular fa-calendar-days"></i> <?php echo get_the_date('F j, Y'); ?>
          </h6>
          
          <?php
            if (have_posts()) {
              while (have_posts()) {
                the_post();
                the_content();
              }
            }
          ?>
        </div>
      </div>
    </article>
  </div>
</div>

      <div class="col-lg-4 col-md-12">
        <div class="blogSlider">
          <h3>Latest Post</h3>
          <div class="row">
            <?php
              $recent_posts = wp_get_recent_posts(array(
                'numberposts' => 4,
                'post_status' => 'publish',
                'exclude'     => get_the_ID() // Exclude the current post from recent posts
              ));

              foreach ($recent_posts as $post) {
                $post_id = $post['ID'];
                $post_title = $post['post_title'];
                $post_image = get_the_post_thumbnail_url($post_id, 'thumbnail');
                  $post_link = get_permalink($post_id);
            ?>
            <div class="col-lg-12 col-md-6 latestpost">
              <a href="<?php echo $post_link; ?>">
                <div class="postImage">
                  <?php if ($post_image) { ?>
                  <img src="<?php echo $post_image; ?>">
                  <?php } ?>
                </div>
                <p><?php echo $post_title; ?></p>
              </a>

            </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>