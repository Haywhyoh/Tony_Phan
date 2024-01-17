
<?php get_header();?>

        <!-- Caption header -->
        <div class="caption-header text-center intro wow slideInUp" style="color:#5E837B">
          <h5 class="fw-normal"><?php echo esc_html(get_theme_mod('sub_text')); ?></h5>
          <h1 class="fs-large mb-4 " style="font-size: 6rem">I'm <b class="" style="color:#F2E5B7">
            <?php echo esc_html(get_theme_mod('big_banner_text')); ?>
            </b>
        </h1>
          <p class="intro-subtitle intro"><span class="text-slider-items"><?php echo esc_html(get_theme_mod('typed_text')); ?></span><strong class="text-slider"></strong></p>
        </div> <!-- End Caption header -->
        <div class="floating-button"><span class="ti-mouse"></span></div>
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
                        <div><a href="">Download CV</a></div>
                        
                    </button>
                    <button class="btn-rounded btn btn-outline-primary mt-4 ml-4">
                    <div><a href="">Portfolio</a></div>
                    </button>
                    </div>
                </div>              
            </div><!-- end of about wrapper -->
        </div><!-- end of container -->
    </section> <!-- end of about section -->

     <!-- service section -->
     <section class="section" id="service">
        <div class="container text-center wow slideInUp">
            <p class="section-subtitle">What I Do ?</p>
            <h6 class="section-title mb-6">Skills</h6>
            <!-- row -->
            <div class="row">
                <?php 
                    $services_query = new WP_Query(array(
                        "post_type" => 'skills',
                        "posts_per_page" => -1
                    ));
                    if($services_query->have_posts()){
                        while($services_query->have_posts()) {
                            $services_query->the_post();
                ?>
                    
                    <div class="col-md-6 col-lg-3">
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
            <h1 class="mb-5"><span class="" style="color:#B79270">My</span> Portfolio</h1>
            <div class="portfolio">
               
                <div class="filters">
                <?php
                $categories = get_terms(array(
                    'taxonomy' => 'category',
                    'hide_empty' => false,
                ));
                $firstIteration = true;
                foreach ($categories as $category) {
                    if ($category->name !== "Uncategorized"){
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
                        while ($projects_query->have_posts()) {
                            $projects_query->the_post();
                            $categories = get_the_category();
                            $category_classes = array_map(function($cat) {
                                return $cat->slug;
                            }, $categories);
                            $category_class_string = implode(' ', $category_classes);
                            ?>
                            <div class="col-md-6 col-lg-4 <?php echo $category_class_string; ?>">
                                <div class="portfolio-item" data-toggle="modal" data-target="#myModal">
                                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-fluid" alt="<?php the_title(); ?>">
                                    <div class="content-holder">
                                        <a class="img-popup" href="<?php echo get_the_post_thumbnail_url(); ?>"></a>
                                        <div class="text-holder">
                                            <h6 class="title"><?php the_title(); ?></h6>
                                            <p class="subtitle"><?php echo substr(get_the_excerpt(), 0, 150); ?></p>
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

    <section id="resume">

    <h1 class="mb-5"><span class="" style="color:#B79270">My</span> Resume</h1>
    <div class="container pt-5" >
        <div class="row">
          <div class="col-md-6 wow fadeInRight">
            <h2 class="fw-normal">Education</h2>
            <ul class="timeline mt-4 pr-md-5">
            <?php 
                    $education_query = new WP_Query(array(
                        "post_type" => 'education',
                        "posts_per_page" => -1
                    ));
                    if($education_query->have_posts()){
                        while($education_query->have_posts()) {
                            $education_query->the_post();
                ?>
              <li>
                <div class="title"><?php echo the_field('start_date') . ' - ' . the_field('end_date') ?></div>
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
                        "posts_per_page" => -1
                    ));
                    if($experience_query->have_posts()){
                        while($experience_query->have_posts()) {
                            $experience_query->the_post();
                ?>
              <li>
                <div class="title"><?php echo the_field('start_date_ex') . ' - ' . the_field('end_date_ex') ?></div>
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

       <!-- testimonial section -->
    <section class="section wow slideInUp" id="testmonial">
        <div class="container text-center">
            <p class="section-subtitle">What Think Client About Me ?</p>
            <h6 class="section-title mb-6">Testmonial</h6>

            <!-- row -->
            <div class="row">
            <?php 
                    $testimonial_query = new WP_Query(array(
                        "post_type" => 'testimonial',
                        "posts_per_page" => -1
                    ));
                    if($testimonial_query->have_posts()){
                        while($testimonial_query->have_posts()) {
                            $testimonial_query->the_post();
                ?>
                <div class="col-md-6">
                    <div class="testimonial-card">
                        <div class="testimonial-card-img-holder">
                            <img src="<?php echo the_field('testimonial_image') ?>" class="testimonial-card-img" alt="">                           
                        </div>
                        <div class="testimonial-card-body">
                            <p class="testimonial-card-subtitle"><?php echo the_field('testimonial') ?></p>
                            <h6 class="testimonial-card-title"><?php echo the_field('reviewer') ?></h6>
                        </div>
                    </div>
                </div>
                <?php
                        }
                    }
                ?>
            </div>
        </div> <!-- end of container -->
    </section> <!-- end of testimonial section -->

     <!-- contact section -->
     <section class="section wow slideInUp" id="contact" ">
        <div class="container text-center">
            <p class="section-subtitle">How can you communicate?</p>
            <h6 class="section-title mb-5">Contact Me</h6>
            <!-- contact form -->
            <form action="" class="contact-form col-md-10 col-lg-8 m-auto">
                <div class="form-row">
                    <div class="form-group col-sm-6">
                        <input type="text" size="50" class="form-control" placeholder="Your Name" required>                 
                    </div>
                    <div class="form-group col-sm-6">
                        <input type="email" class="form-control" placeholder="Enter Email"requried>                 
                    </div>
                    <div class="form-group col-sm-12">
                        <textarea name="comment" id="comment" rows="6"   class="form-control" placeholder="Write Something"></textarea>
                    </div>
                    <div class="form-group col-sm-12 mt-3">
                        <input type="submit" value="Send Message" class="btn btn-outline-primary rounded">                  
                    </div>
                </div>  
            </form><!-- end of contact form -->
        </div><!-- end of container -->
    </section><!-- end of contact section -->

<?php get_footer();?>


</body>
</html>
