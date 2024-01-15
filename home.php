
<?php get_header();?>

        <!-- Caption header -->
        <div class="caption-header text-center intro wow slideInUp">
          <h5 class="fw-normal"><?php echo esc_html(get_theme_mod('sub_text')); ?></h5>
          <h1 class="fs-large mb-4 ">I'm <b class="">
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
            <h6 class="section-title mb-6">Service</h6>
            <!-- row -->
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="service-card">
                        <div class="body">
                            <img src="assets/images/pencil-case.svg" alt="Service 1" class="icon">
                            <h6 class="title">Campaigns</h6>
                            <p class="subtitle">I can develop custom fullstack web and mobile application tailored to meet your business needs. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="service-card">
                        <div class="body">
                            <img src="assets/images/responsive.svg" alt="Service 2" class="icon">
                            <h6 class="title">Social</h6>
                            <p class="subtitle">I create clear and concise technical documentation and articles for all audiences.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="service-card">
                        <div class="body">
                            <img src="assets/images/toolbox.svg" alt="Service 3" class="icon">
                            <h6 class="title">Analytics</h6>
                            <p class="subtitle">I can help you optimize your website for search engine making it easy for you to take top spots in search results.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="service-card">
                        <div class="body">
                            <img src="assets/images/analytics.svg" alt="Service 4" class="icon">
                            <h6 class="title">Production</h6>
                            <p class="subtitle">I offer custom Wordpress Plugin and Theme development and customization. </p>
                        </div>
                    </div>
                </div>
            </div><!-- end of row -->
        </div>
    </section><!-- end of service section -->

    <!-- Portfolio Section -->
    <section class="section bg-custom-gray" id="portfolio">
        <div class="container">
            <h1 class="mb-5"><span class="text-danger">My</span> Portfolio</h1>
            <div class="portfolio">
               
                <div class="filters">
                <?php
                $categories = get_terms(array(
                    'taxonomy' => 'category',
                    'hide_empty' => false,
                ));
                $firstIteration = true;
                foreach ($categories as $category) {
                    $activeClass = $firstIteration ? ' active' : '';
                    echo '<a href="#" data-filter=".' . $category->slug . '" class="' . $activeClass . '">' . $category->name . '</a>';
                    $firstIteration = false;
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

   
    <div class="container pt-5" >
        <div class="row">
          <div class="col-md-6 wow fadeInRight">
            <h2 class="fw-normal">Education</h2>
            <ul class="timeline mt-4 pr-md-5">
              <li>
                <div class="title">2022</div>
                <div class="details">
                  <h5>Software Engineering</h5>
                  <small class="fg-theme">Holberton x ALX</small>
                  <p>An intensive one-year 70-hour per week intensive software engineering programme with backend specialization.</p>
                </div>
              </li>
              <li>
                <div class="title">2021</div>
                <div class="details">
                  <h5>Electronics and Electrical Engineering</h5>
                  <small class="fg-theme">Obafemi Awolowo University</small>
                  <p>A 5-year engineering programme in the best university in Nigeria.</p>
                </div>
              </li>
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
              <li>
                <div class="title">6/2023 - Current</div>
                <div class="details">
                  <h5>Software Engineer</h5>
                  <small class="fg-theme">Hux Ventures</small>
                  <p>I worked on various portfolio porjects like HillPad, Nexnoon, Worknoon etc.</p>
                </div>
              </li>
              <li>
                <div class="title">3/2021 - 5/2023</div>
                <div class="details">
                  <h5>Backend Engineer</h5>
                  <small class="fg-theme">CodeMyGig</small>
                  <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered</p>
                </div>
              </li>
              <!-- <li>
                <div class="title">2011</div>
                <div class="details">
                  <h5>Specialize of course</h5>
                  <small class="fg-theme">University of Study</small>
                  <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered</p>
                </div>
              </li> -->
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
                <div class="col-md-6">
                    <div class="testimonial-card">
                        <div class="testimonial-card-img-holder">
                            <img src="assets/images/avatar2.jpg" class="testimonial-card-img" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">                           
                        </div>
                        <div class="testimonial-card-body">
                            <p class="testimonial-card-subtitle">Samuel knows what he is doing. I gave him instructions and assets and he got it right right away. Literately had no change requests because he clearly understood the vision and did it. That is exactly what we all want from designers. Strongly recommend and will hire him again.</p>
                            <h6 class="testimonial-card-title">Nao Charles</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="testimonial-card">
                        <div class="testimonial-card-img-holder">
                            <img src="assets/images/avatar3.jpg" class="testimonial-card-img" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">                        
                        </div>
                        <div class="testimonial-card-body">
                            <p class="testimonial-card-subtitle">Samuel is the best web developer I’ve worked with on any platform. His website designs are modern and well optimized for search engine. I can vouch for his works cos I’m a repeat buyer. He is really good, professional and never disappoint. </p>
                            <h6 class="testimonial-card-title">Emily Reb</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end of container -->
    </section> <!-- end of testimonial section -->

     <!-- contact section -->
     <section class="section" id="contact wow slideInUp">
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
