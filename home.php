
<?php get_header();?>


        <!-- Caption header -->
        <div class="caption-header text-center intro wow slideInUp">
        <style>
    .page-home::before {
        background: linear-gradient(rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.5));
        background-image:  url('<?php echo get_template_directory_uri(); ?>/assets/images/some.webp') !important;
        background-repeat: no-repeat;
        background-size: cover;
        width: 100%;
        height: 100vh;
    }
</style>
          <h5 class="fw-normal">Welcome</h5>
          <h1 class="fs-large mb-4 ">I'm <b class="">Samuel</b> Adedayo</h1>
          <p class="intro-subtitle intro"><span class="text-slider-items">FullStack Software Engineer, Technical Writer, Wordpress Developer</span><strong class="text-slider"></strong></p>
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
                    <img src="assets/images/man.png" class="about-img" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
                </div>
                <div class="about-caption">
                    <p class="section-subtitle">Who Am I ?</p>
                    <h2 class="section-title mb-3">About Me</h2>
                    <p>
                        Hello! I'm a seasoned software engineer and technical writer with a combined experience of 7 years. In that time, I've had the opportunity to collaborate with esteemed companies like, <strong> Ably, FogHorn, and PlanetScale, </strong>contributing to over 300 blogs. I'm proficient in various programming languages, including PHP, Python, and JavaScript. I am a specialist in WordPress, React, and Next projects. My expertise also extends to databases such as SQL and NoSQL, and I'm at ease navigating the complexities of Linux.
                       
                    </p>
                    <p class="my-2">
                        Beyond my technical skills, I'm a passionate problem-solver, leveraging cutting-edge technologies to address real-world challenges. Recognized for effective communication and collaboration, I thrive in team environments where ideas flourish. I'm currently exploring full-time and freelance opportunities and am eager to bring my expertise to exciting new projects. If you're interested in discussing how we can work together to make technology work for you, please don't hesitate to contact me!
                    </p>
                    <button class="btn-rounded btn btn-outline-primary mt-4"><a href="https://docs.google.com/document/d/1HaiyWunBQDNTh6M9i4q8sooPh0SKK7KdFudoVd3diT0/edit?usp=sharing">Download CV</a> </button>
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
                            <img src="assets/images/pencil-case.svg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page" class="icon">
                            <h6 class="title">FullStack Development</h6>
                            <p class="subtitle">I can develop custom fullstack web and mobile application tailored to meet your business needs. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="service-card">
                        <div class="body">
                            <img src="assets/images/responsive.svg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page" class="icon">
                            <h6 class="title">Technical Writing</h6>
                            <p class="subtitle">I create clear and concise technical documentation and articles for all audiences.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="service-card">
                        <div class="body">
                            <img src="assets/images/toolbox.svg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page" class="icon">
                            <h6 class="title">SEO</h6>
                            <p class="subtitle">I can help you optimize your website for search engine making it easy for you to take top spots in search results.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="service-card">
                        <div class="body">
                            <img src="assets/images/analytics.svg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page" class="icon">
                            <h6 class="title">Wordpress Development</h6>
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
                    <a href="#" data-filter=".web" class="active">
                       Web
                    </a>
                    <a href="#" data-filter=".wordpress">
                        WordPress
                    </a>
                    <a href="#" data-filter=".freelance">
                        Freelance
                    </a>
                    <a href="#" data-filter=".backend">
                        Backend
                    </a>
                </div>
                <div class="portfolio-container"> 
                    <div class="col-md-6 col-lg-4 web backend">
                        <div class="portfolio-item" data-toggle="modal" data-target="#myModal">
                            <img src="assets/images/hillpad.webp" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                            <div class="content-holder">
                                <a class="img-popup" href="assets/images/hillpad.webp"></a>
                                <div class="text-holder">
                                    <h6 class="title">HillPad</h6>
                                    <p class="subtitle">An online directory for all schools</p>
                                </div>
                                
                            </div>   
                        </div> 
                        <!-- Modal -->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Project Details</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>The web app makes it easy for students around the world to search for schools and courses in different universities in the world.</p>
                                        <p>Live Link: <a href="https://dev.hillpad.com/" target="_blank">Hillpad</a></p>
                                        <p>Github Link: <a href="https://github.com/Haywhyoh/Hillpad" target="_blank">https://github.com/Haywhyoh/Hillpad</a></p>
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/mKql0beenyU?si=lZ9ZvSKVaVvQuBl4" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                                  
                    </div>
                    <div class="col-md-6 col-lg-4 web wordpress">
                        <div class="portfolio-item" data-toggle="modal" data-target="#myModal2">
                            <img src="assets/images/abbey.webp" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                            <div class="content-holder">
                                <a class="img-popup" href="assets/images/abbey.webp"></a>
                                <div class="text-holder">
                                    <h6 class="title">AbbeyPreciousTouch</h6>
                                    <p class="subtitle">This is a website for a US-based industrial cleaning company. </p>
                                </div>
                            </div> 
                        </div> 
                        
                        <!-- Modal -->
                        <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Project Details</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>This is a website for a US-based industrial cleaning company. Customers are able to request quotes and make enquires about their services. The website was optimized for SEO with contents ranking top pages on Google.</p>
                                        <p>Live Link: <a href="https://abbeyprecioustouch.com/" target="_blank">AbbeyPreciousTouch</a></p>
                                        <!-- <p>Github Link: <a href="http://www.github.com/example" target="_blank">www.github.com/example</a></p> -->
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/bDD26sOlWjU?si=VcRYViTTmXve6RUY" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 web wordpress freelance">
                        <div class="portfolio-item" data-toggle="modal" data-target="#myModal3">
                            <img src="assets/images/beinitiative.webp" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">                         
                            <div class="content-holder">
                                <a class="img-popup" href="assets/images/beinitiative.webp"></a>
                                <div class="text-holder">
                                    <h6 class="title">BEInititative</h6>
                                    <p class="subtitle">An NGO website for environemental Protection in black commuinities</p>
                                </div>
                            </div>    
                        </div>  
                        
                        <!-- Modal -->
                        <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Project Details</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>An Enviromnental NGO Website that receives donations and is integrated with a Leawrning Management System t
                                            that allows instructors upload free and paid courses.
                                        </p>
                                        <p>Live Link: <a href="https://beinitiative.com/" target="_blank">BEInitiative</a></p>
                                        <!-- <p>Github Link: <a href="http://www.github.com/example" target="_blank">www.github.com/example</a></p> -->
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/igzYWhP1TBA?si=bzrQ8iwRGA9BNDlm" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="col-md-6 col-lg-4 web freelance ">
                        <div class="portfolio-item" data-toggle="modal" data-target="#myModal4">
                            <img src="assets/images/dashboard.webp" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                            <div class="content-holder">
                                <a class="img-popup" href="assets/images/dashboard.webp"></a>
                                <div class="text-holder">
                                    <h6 class="title">Admin Dashboard</h6>
                                    <p class="subtitle">An Admin dashboard with messaging capabilities</p>
                                </div>
                            </div>
                        </div>  
                        
                        <!-- Modal -->
                        <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Project Details</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>This is an admin dashboard for Hillpad that makes it easy for data emtry specialist, supervisors and admin to create, update and delete schools, country and courses.</p>
                                        <p>Live Link: <a href="https://staff.hillpad.com" target="_blank">https://staff.hillpad.com</a></p>
                                        <p>Github Link: <a href="https://github.com/Haywhyoh/Hillpad_staff" target="_blank">https://github.com/Haywhyoh/Hillpad_staff</a></p>
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/example" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 web "> 
                        <div class="portfolio-item" data-toggle="modal" data-target="#myModal5">
                            <img src="assets/images/codemygig.webp" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">                               
                            <div class="content-holder">
                                <a class="img-popup" href="assets/images/codemygig.webp"></a>
                                <div class="text-holder">
                                    <h6 class="title">CodeMyGig</h6>
                                    <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                                </div>
                            </div>
                        </div>  
                        
                        <!-- Modal -->
                        <div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Project Details</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>A SaaS website that sells AI marketing tool acess to grow your audience, sales and revenue</p>
                                        <p>Live Link: <a href="https://code-my-gig-82zt.vercel.app/" target="_blank">www.example.com</a></p>
                                        <p>Github Link: <a href="http://www.github.com/example" target="_blank">www.github.com/example</a></p>
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/_DwjhH-iMsA?si=YSC-0TxCtL4Ao0UW" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                    
                      
                </div> 
            </div>  
        </div>            
    </section>
    <!-- End of portfolio section -->
    <section class="section bg-dark py-5">
        <div class="container text-center wow slideInUp">
            <h2 class="text-light mb-5 font-weight-normal">I Am Available For FreeLance</h2>
            <a href="https://www.upwork.com/freelancers/~01a49b6b5c0e817554" target="_blank"><button class="btn bg-primary w-lg" > 
               Hire me
            </button></a>
        </div>
    </section>

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


      <script  src="./assets/js/jquery-3.5.1.min.js"></script>
    
  <script src="./assets/js/bootstrap.bundle.min.js"></script>
    
  <script src="./assets/vendor/owl-carousel/owl.carousel.min.js"></script>
    
  <script src="./assets/vendor/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    
  <script src="./assets/vendor/isotope/isotope.pkgd.min.js"></script>
    
  <script src="./assets/vendor/nice-select/js/jquery.nice-select.min.js"></script>
    
  <script src="./assets/vendor/fancybox/js/jquery.fancybox.min.js"></script>

  <script src="./assets/vendor/wow/wow.min.js"></script>

  <script src="./assets/vendor/animateNumber/jquery.animateNumber.min.js"></script>

  <script src="./assets/vendor/waypoints/jquery.waypoints.min.js"></script>

  <script src="./assets/js/google-maps.js"></script>
    
  <script src="./assets/js/topbar-virtual.js"></script> 
   <script src="./assets/js/minibar-virtual.js"></script>
   <script src="./assets/lib/typed/typed.min.js"></script>



</body>
</html>
