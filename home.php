<?php get_header(); ?>
<?php get_template_part('includes/navbar', 'content'); ?>

<!-- Caption header -->
<div class="caption-header text-center intro wow slideInUp" style="color: #E2F0F7; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/triangle.svg'); background-size: 32%; background-position: center 30%; background-repeat: no-repeat;">
    <h5 class="fw-normal"><?php echo esc_html(get_theme_mod('sub_text')); ?></h5>
    <h1 class="fs-large mb-0" style="font-size: 8rem"><b class="" style="color: #E2F0F7">
            <?php echo esc_html(get_theme_mod('big_banner_text')); ?><span style="color: #EB4511">.</span>
        </b>
    </h1>
    <p class="intro-subtitle intro"><span class="text-slider-items"><?php echo esc_html(get_theme_mod('typed_text')); ?></span><strong class="text-slider"></strong></p>
</div>
<!-- End Caption header -->

<a href="#about">
    <div class="scroll-down"></div>
</a>
</div>

<!-- about section -->
<section class="section pt-5 " id="about">
    <!-- container -->
    <div class="container text-center">
        <!-- about wrapper -->
        <div class="about wow slideInUp">
            <div class="about-img-holder">
                <img src="<?php echo esc_url(get_theme_mod('about_image')) ?>" class="about-img" alt="About Image">
            </div>
            <div class="about-caption">
                <p class="section-subtitle">Who Am I ?</p>
                <h2 class="section-title mb-3">About Me</h2>
                <p>
                    <?php echo nl2br(esc_html(get_theme_mod('about_me'))); ?>
                </p>
                <div class="d-flex gap-x-4">
                    <button class="btn-rounded btn btn-outline-primary mt-4">
                        <div><a href="<?php echo esc_url(get_theme_mod('cv_pdf_file')); ?>" download>Download CV</a></div>
                    </button>
                </div>
            </div>
        </div><!-- end of about wrapper -->
    </div><!-- end of container -->
</section> <!-- end of about section -->

<!-- service section -->
<section class="section" id="service">
    <div class="container text-center wow slideInUp">
        <!-- <p class="section-subtitle">What I Do ?</p> -->
        <h6 class="section-title mb-6">Core Skills</h6>
        <!-- row -->
        <div class="row">
            <?php
            $services_query = new WP_Query(array(
                "post_type" => 'skills',
                "posts_per_page" => -1
            ));
            if ($services_query->have_posts()) {
                while ($services_query->have_posts()) {
                    $services_query->the_post();
            ?>

                    <div class="col-md-6 col-lg-3 pb-3">
                        <div class="service-card">
                            <div class="body">
                                <img src="<?php echo the_field('skill_icon') ?>" alt="<?php echo the_field('skill_name'); ?>" class="icon">
                                <h6 class="title"><?php the_field('skill_name'); ?></h6>
                                <p class="subtitle"><?php the_field('skill_detail'); ?></p>
                            </div>
                        </div>
                    </div>
            <?php
                }
            }
            ?>

        </div><!-- end of row -->
    </div>
</section><!-- end of service section -->

<!-- Portfolio Section -->
<section class="section bg-custom-gray" id="portfolio">
    <div class="container">
        <h1 class="mb-5"><span class="" style="color:#EB4511">My</span> Portfolio</h1>
        <div class="portfolio">

            <div class="filters">
                <?php
                $categories = get_terms(array(
                    'taxonomy' => 'category',
                    'hide_empty' => false,
                ));
                $firstIteration = true;
                foreach ($categories as $category) {
                    if ($category->name !== "Uncategorized") {
                        $activeClass = $firstIteration ? ' active' : '';
                        echo '<a href="#" data-filter=".' . $category->slug . '" class="' . $activeClass . '">' . $category->name . '</a>';
                        $firstIteration = false;
                    }
                }
                ?>
            </div>
            <div class="portfolio-container">
                <?php
                $args = array(
                    'post_type' => 'project',
                    'posts_per_page' => -1, // To retrieve all posts
                );

                $projects_query = new WP_Query($args);

                if ($projects_query->have_posts()) {
                    $count = 0;
                    while ($projects_query->have_posts()) {
                        $count = $count + 1;
                        $unique_id = 'modal_' . $count; // Yo
                        $projects_query->the_post();
                        $categories = get_the_category();
                        $category_classes = array_map(function ($cat) {
                            return $cat->slug;
                        }, $categories);
                        $category_class_string = implode(' ', $category_classes);
                ?>
                        <div class="col-md-6 col-lg-4 <?php echo $category_class_string; ?>">
                            <?php
                            echo '<div class="portfolio-item" data-toggle="modal" data-target="#' . $unique_id . '">';
                            ?>
                            <?php if (get_field('youtube')) : ?>
                                <iframe style="width: 100%; height: auto; aspect-ratio: 16 / 9;" src="<?php echo get_field('youtube'); ?>" allowfullscreen></iframe>
                            <?php else : ?>
                                <img src="<?php echo get_field('project_image'); ?>" class="img-fluid" alt="<?php the_title(); ?>">
                            <?php endif; ?>
                            <div class="content-holder">
                                <a class="img-popup" href="<?php the_field('skill_name'); ?>"></a>
                                <div class="text-holder">
                                    <h6 class="title"><?php echo the_field('project_name'); ?></h6>
                                    <p class="subtitle"><?php echo the_field('project_exercpt'); ?></p>
                                </div>
                            </div>
                        </div>
                        <?php
                        echo '<div class="modal fade" id="' . $unique_id . '" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">';
                        ?>
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Project Details</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <?php if (get_field('youtube')) : ?>
                                        <iframe style="width: 100%; height: auto; aspect-ratio: 16 / 9;" src="<?php echo get_field('youtube'); ?>" allowfullscreen></iframe>
                                    <?php else : ?>
                                        <img src="<?php echo get_field('project_image'); ?>" class="img-fluid" alt="<?php the_title(); ?>">
                                    <?php endif; ?>

                                    <p><?php echo the_field('project_description'); ?></p>
                                    <p> <a href="<?php echo '/' . the_field('project_slug'); ?>" target="_blank" style="color:red">Click to Learn More</a></p>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
            </div>
        </div>
<?php
                    }
                    // wp_reset_postdata(); 
                }
?>



    </div>
    </div>
    </div>
</section>
<!-- End of portfolio section -->
<!-- <section class="section bg-dark py-5">
        <div class="container text-center wow slideInUp">
            <h2 class="text-light mb-5 font-weight-normal">I Am Available For FreeLance</h2>
            <a href="https://codemygig.com" target="_blank"><button class="btn bg-primary w-lg" > 
               Hire me
            </button></a>
        </div>
    </section> -->

<section class="container">
    <h1 class="mb-2"><span class="" style="color:#EB4511">Portfolio </span>Links</h1>
    <h4 class="animate-x">Check out these exciting links for a glimpse of my work</h4>
    <div class="row mt-5">


        <div class="col-md-6 col-lg-3  mb-4">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/advertising-3.jpg'" class="img-fluid" alt="">
            <h3>Rundowns</h3>
            <p>Join me for a three-hour special newscast and take a behind-the-scenes tour of the beautifully restored Hotel Syracuse. You won't want to miss this historic adventure!</p>

            <a style="color:#EB4511" href="https://uploads.strikinglycdn.com/files/122ca522-9aca-4213-9f0f-8da0fe7a8e9b/hotel%20syr%20special.pdf">Read</a>
        </div>
        <div class="col-md-6 col-lg-3 ">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/advertising-3.jpg'" class="img-fluid" alt="">

            <h3>Amber Alert Maddox
            </h3>
            <p>When breaking news strikes, I'm ready to take charge. See how my team and I tackled technical issues and provided top-notch coverage of the Amber Alert for Maddox.
            </p>

            <a style="color:#EB4511" href="https://uploads.strikinglycdn.com/files/122ca522-9aca-4213-9f0f-8da0fe7a8e9b/hotel%20syr%20special.pdf">Read</a>
        </div>
        <div class="col-md-6 col-lg-3 ">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/advertising-3.jpg'" class="img-fluid" alt="">

            <h3>Live Musical Act</h3>
            <p>Wake up to a newscast like no other! Enjoy the sweet sounds of a live band throughout the morning as we deliver the latest news and information to start your day.</p>

            <a style="color:#EB4511" href="https://uploads.strikinglycdn.com/files/122ca522-9aca-4213-9f0f-8da0fe7a8e9b/hotel%20syr%20special.pdf">Read</a>
        </div>
        <div class="col-md-6 col-lg-3 ">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/advertising-3.jpg'" class="img-fluid" alt="">

            <h3>Writing Samples</h3>
            <p>Whether it's a breaking news alert or a feature story, I have the skills to write headlines, teases, Vo/Sot, and more. Check out my diverse collection of writing samples, including scripts for showcasing and sportscasts. </p>

            <a style="color:#EB4511" href="https://www.scribd.com/document/333507538/Samples">Read</a>
        </div>

    </div>
</section>

<section class="container">
    <h1 class="mb-4"><span class="" style="color:#EB4511">Web </span>Articles</h1>

    <div class="latest-blog-area pt-80 pb-120 gray-bg">
        <div class="container">
            <div class="custom-row">
                <div class="blog-active dot-style">
                    <div class="col-xl-12 col-lg-12">
                        <div class="blog-wrapper">
                            <div class="blog-inner">
                                <span class="tag-blog"><a href="#">CNY Central</a></span>
                                <h4><a href="#">Fighting fires can be dangerous, as one brave firefighter found out firsthand.</a></h4>
                                <p>Read about their heroic efforts and the minor injury they suffered in this gripping article.</p>
                                <div class="blog-meta">
                                    <span class="f-left">
                                        Jan 29, 2016
                                    </span>
                                    <span class="f-right blog-more-btn">
                                        <a href="https://cnycentral.com/news/local/one-firefighter-suffers-minor-injury-while-fighting-late-night-fire"><i class="fas fa-long-arrow-alt-right"></i> <span class="blog-more"> Read Article</span></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12">
                        <div class="blog-wrapper">
                            <div class="blog-inner">
                                <span class="tag-blog"><a href="#">CNY Central</a></span>
                                <h4><a href="#">Driving under the influence is a serious offense, and state police are cracking down on those who do.</a></h4>
                                <p>Find out more about their efforts to keep our roads safe in this informative article.</p>
                                <div class="blog-meta">
                                    <span class="f-left">
                                        Jul 1, 2016
                                    </span>
                                    <span class="f-right blog-more-btn">
                                        <a href="http://cnycentral.com/news/local/state-police-cracking-down-on-impaired-driving-this-weekend"><i class="fas fa-long-arrow-alt-right"></i> <span class="blog-more"> Read Article</span></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12">
                        <div class="blog-wrapper">
                            <div class="blog-inner">
                                <span class="tag-blog"><a href="#">Vavel</a></span>
                                <h4><a href="#">Get ready for the ultimate showdown!</a></h4>
                                <p>In this exciting preview, I break down the USA vs Germany World Cup match and give you an inside look at what to expect from these two powerhouse teams.</p>
                                <div class="blog-meta">
                                    <span class="f-left">
                                        Jun 25, 2014
                                    </span>
                                    <span class="f-right blog-more-btn">
                                        <a href="https://www.vavel.com/en-us/soccer/363555-world-cup-preview-usa-vs-germany.html"><i class="fas fa-long-arrow-alt-right"></i> <span class="blog-more"> Read Article</span></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12">
                        <div class="blog-wrapper">
                            <div class="blog-inner">
                                <span class="tag-blog"><a href="#">Vavel</a></span>
                                <h4><a href="#">Major League Soccer just signed a new TV deal, and soccer fans everywhere are buzzing with excitement.</a></h4>
                                <p>Read more about this groundbreaking agreement and what it means for the future of the sport in this in-depth article.</p>
                                <div class="blog-meta">
                                    <span class="f-left">
                                        May 12, 2014
                                    </span>
                                    <span class="f-right blog-more-btn">
                                        <a href="https://www.vavel.com/en-us/soccer/350027-mls-announces-new-tv-deal.html"><i class="fas fa-long-arrow-alt-right"></i> <span class="blog-more"> Read Article</span></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<section id="resume">

    <div class="container">
        <h1 class="section bg-custom-gray"><span class="" style="color:#EB4511">My</span> Resume</h1>

        <div class="row">
            <div class="col-md-6 wow fadeInRight">
                <h2 class="fw-normal">Certification</h2>
                <ul class="timeline mt-4 pr-md-5">
                    <?php
                    $education_query = new WP_Query(array(
                        "post_type" => 'education',
                        "posts_per_page" => -1
                    ));
                    if ($education_query->have_posts()) {
                        while ($education_query->have_posts()) {
                            $education_query->the_post();
                    ?>
                            <li>
                                <div class="title"><?php echo get_field('start_date') . ' - ' . get_field('end_date') ?></div>
                                <div class="details">
                                    <h5><?php echo the_field('course_of_study') ?></h5>
                                    <small class="fg-theme"><?php echo the_field('school_name') ?></small>
                                    <p><?php echo the_field('course_about') ?></p>
                                </div>
                            </li>
                    <?php
                        }
                    }
                    ?>
                    <!-- <li>
                <div class="title">2021</div>
                <div class="details">
                  <h5>Electronics and Electrical Engineering</h5>
                  <small class="fg-theme">Obafemi Awolowo University</small>
                  <p>A 5-year engineering programme in the best university in Nigeria.</p>
                </div>
              </li> -->
                    <!-- <li>
                <div class="title">2008</div>
                <div class="details">
                  <h5>Specialize of course</h5>
                  <small class="fg-theme">University of Study</small>
                  <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered</p>
                </div>
              </li> -->
                </ul>
            </div>
            <div class="col-md-6 wow fadeInRight" data-wow-delay="200ms">
                <h2 class="fw-normal">Experience</h2>
                <ul class="timeline mt-4 pr-md-5">
                    <?php
                    $experience_query = new WP_Query(array(
                        "post_type" => 'experience',
                        "posts_per_page" => -1,
                        "meta_key" => 'order',
                        "order_by" => 'meta_value_num',
                        "order" => 'ASC'
                    ));
                    if ($experience_query->have_posts()) {
                        while ($experience_query->have_posts()) {
                            $experience_query->the_post();
                    ?>
                            <li>
                                <div class="title"><?php echo get_field('start_date_ex') . ' - ' . get_field('end_date_ex') ?></div>
                                <div class="details">
                                    <h5><?php the_field('role') ?></h5>
                                    <small class="fg-theme"><?php the_field('company_name') ?></small>
                                    <p><?php the_field('about') ?></p>
                                </div>
                            </li>
                    <?php
                        }
                    }
                    ?>

                </ul>
            </div>
        </div>

    </div>
</section>

<!-- contact section -->
<section class="section wow slideInUp" id="contact" ">
        <div class=" container text-center">
    <!-- <p class="section-subtitle">How can you communicate?</p> -->
    <h6 class="section-title mb-5">Contact Me</h6>
    <!-- contact form -->
    <div class="contact-form col-md-10 col-lg-8 m-auto">
        <?php echo do_shortcode('[wpforms id="94" title="false"]'); ?>
    </div>

    </div><!-- end of container -->
</section><!-- end of contact section -->

<?php get_footer(); ?>


</body>

</html>