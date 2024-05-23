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
            if ($testimonial_query->have_posts()) {
                while ($testimonial_query->have_posts()) {
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
</section>