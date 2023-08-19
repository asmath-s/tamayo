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


    <!-- <section class="blogBox">
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
    </section> -->


     <section class="blogMain">
      <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 blogGrid">
                <div class="blog1">
                  <div class="blog1Upper">
                    <a class="blog1Image" href="#">
                      <img
                        width="300"
                        height="200"
                        src="<?php bloginfo('template_directory');?>/assets/images/blog/blog 1.webp"
                        alt=""
                      />
                    </a>
                  </div>
      
                  <div class="blog1-ContentBox inside">
                      <div class="blog1-date">
                          <sapn class="blog1-day"><i class="fa-regular fa-calendar-days" style="color: #000000;"></i> 19 </sapn>
                          <span class="blog1-Month"> Aug </span>
                      </div>
                     <a href="#">
                         <h3 class="blog1contentTitle">               
                             Preparing Medical Students for Real-World Challenges: Clinical Rotations in Affiliated Hospitals
                         </h3>
                         <p class="blog1-Content">
                           Medical education goes beyond textbooks and lectures. The transition 
                           from classrooms to clinical practice is a crucial phase for medical 
                           students, as it prepares them to face the real-world challenges of 
                           patient care. Clinical rotations within affiliated hospitals serve a 
                           crucial purpose by connecting the dots between theoretical understanding 
                           and real-world application. This article will help you know about importance 
                           of these clinical rotations, the advantages they provide, and how they 
                           empower aspiring medical students to evolve into capable healthcare professionals.
                         </p>
                     </a> 
                  <div style="border-top: 1px solid #b3b3b3db;"> 
                      <a class="readBtn" href="#"
                        ><span>Read More</span>
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="1em"
                          height="1em"
                          viewBox="0 0 24 24"
                          fill="currentColor"
                        >
                          <path
                            d="M23.928 11.832c-0.048-0.12-0.12-0.216-0.168-0.264l-7.776-8.16c-0.12-0.144-0.288-0.216-0.48-0.24-0.168 0-0.36 0.048-0.48 0.168-0.288 0.24-0.312 0.672-0.048 0.984l6.648 6.984h-20.904c-0.384 0-0.696 0.312-0.696 0.696s0.312 0.672 0.696 0.672h20.904l-6.624 7.008c-0.12 0.144-0.192 0.312-0.168 0.48 0 0.192 0.096 0.36 0.216 0.48 0.12 0.144 0.312 0.216 0.48 0.216 0.144 0 0.312-0.048 0.48-0.192l7.776-8.16c0 0 0.168-0.264 0.168-0.336 0.024-0.12 0.024-0.216-0.024-0.336z"
                          ></path>
                        </svg>
                      </a>
                  </div>
                  </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 blogGrid">
                <div class="blog1">
                  <div class="blog1Upper">
                    <a class="blog1Image" href="#">
                      <img
                        width="300"
                        height="200"
                        src="<?php bloginfo('template_directory');?>/assets/images/blog/entrance-building.jpg"
                        alt=""
                      />
                    </a>
                  </div>
      
                  <div class="blog1-ContentBox inside">
                      <div class="blog1-date">
                          <sapn class="blog1-day"><i class="fa-regular fa-calendar-days" style="color: #000000;"></i> 19 </sapn>
                          <span class="blog1-Month"> Aug </span>
                      </div>
                     <a href="#">
                         <h3 class="blog1contentTitle">               
                             Reason for Choosing UPH-Dr Jose G. Tamayo Medical University 
                         </h3>
                         <p class="blog1-Content">
                           Are you a medical student or professional looking to further your education? 
                           If so, you might be considering various medical universities to continue your 
                           studies. One institution that stands out in the medical education landscape 
                           is UPH-Dr Jose G. Tamayo Medical University . In this article, we'll delve 
                           nto the compelling reasons why choosing this university could be a game-changer 
                           for your medical career. As a prospective medical student or professional, 
                           the choice of where to pursue your medical education is a crucial decision. 
                           UPH-Dr Jose G. Tamayo Medical University is a name that resonates within the 
                           medical community, known for its commitment to providing an exceptional learning 
                           experience.
                         </p>
                     </a> 
                  <div style="border-top: 1px solid #b3b3b3db;"> 
                      <a class="readBtn" href="#"
                        ><span>Read More</span>
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="1em"
                          height="1em"
                          viewBox="0 0 24 24"
                          fill="currentColor"
                        >
                          <path
                            d="M23.928 11.832c-0.048-0.12-0.12-0.216-0.168-0.264l-7.776-8.16c-0.12-0.144-0.288-0.216-0.48-0.24-0.168 0-0.36 0.048-0.48 0.168-0.288 0.24-0.312 0.672-0.048 0.984l6.648 6.984h-20.904c-0.384 0-0.696 0.312-0.696 0.696s0.312 0.672 0.696 0.672h20.904l-6.624 7.008c-0.12 0.144-0.192 0.312-0.168 0.48 0 0.192 0.096 0.36 0.216 0.48 0.12 0.144 0.312 0.216 0.48 0.216 0.144 0 0.312-0.048 0.48-0.192l7.776-8.16c0 0 0.168-0.264 0.168-0.336 0.024-0.12 0.024-0.216-0.024-0.336z"
                          ></path>
                        </svg>
                      </a>
                  </div>
                  </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 blogGrid">
                <div class="blog1">
                  <div class="blog1Upper">
                    <a class="blog1Image" href="#">
                      <img
                        width="300"
                        height="200"
                        src="<?php bloginfo('template_directory');?>/assets/images/blog/blog 3.webp"
                        alt=""
                      />
                    </a>
                  </div>
      
                  <div class="blog1-ContentBox inside">
                      <div class="blog1-date">
                          <sapn class="blog1-day"><i class="fa-regular fa-calendar-days" style="color: #000000;"></i> 19 </sapn>
                          <span class="blog1-Month"> Aug </span>
                      </div>
                     <a href="#">
                         <h3 class="blog1contentTitle">               
                             Advance Medical Facilities in UPH-Dr. Jose G. Tamayo Medical University
                         </h3>
                         <p class="blog1-Content">
                           In the fast-paced world of medicine, staying up-to-date with the latest 
                           advancements and cutting-edge technologies is crucial for medical students 
                           and professionals. UPH-Dr Jose G. Tamayo Medical University is a beacon of 
                           innovation in the medical field, providing a comprehensive range of advanced 
                           medical facilities that empower the next generation of healthcare practitioners. 
                           This article delves into the exceptional facilities and resources offered by the 
                           university, catering to the unique needs of medical students and professionals.
                         </p>
                     </a> 
                  <div style="border-top: 1px solid #b3b3b3db;"> 
                      <a class="readBtn" href="#"
                        ><span>Read More</span>
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="1em"
                          height="1em"
                          viewBox="0 0 24 24"
                          fill="currentColor"
                        >
                          <path
                            d="M23.928 11.832c-0.048-0.12-0.12-0.216-0.168-0.264l-7.776-8.16c-0.12-0.144-0.288-0.216-0.48-0.24-0.168 0-0.36 0.048-0.48 0.168-0.288 0.24-0.312 0.672-0.048 0.984l6.648 6.984h-20.904c-0.384 0-0.696 0.312-0.696 0.696s0.312 0.672 0.696 0.672h20.904l-6.624 7.008c-0.12 0.144-0.192 0.312-0.168 0.48 0 0.192 0.096 0.36 0.216 0.48 0.12 0.144 0.312 0.216 0.48 0.216 0.144 0 0.312-0.048 0.48-0.192l7.776-8.16c0 0 0.168-0.264 0.168-0.336 0.024-0.12 0.024-0.216-0.024-0.336z"
                          ></path>
                        </svg>
                      </a>
                  </div>
                  </div>
                </div>
            </div>
        </div>
      </div>
    </section>

    <?php get_footer();?>