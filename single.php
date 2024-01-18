<?php get_header(); ?>
<?php 
	$author_id = get_the_author_meta('ID');
	$author_name = get_the_author_meta('display_name');
?>
				
<style>

blockquote::before, blockquote::after,
q::before, q::after {
  content: '';
}
blockquote, q {
    quotes: "" "";
    background: #f5f5f5;
    padding: 2em;
    font-style: italic;
}

   .site-banner{
   background-repeat: no-repeat;
    <?php
        $background_image_url = get_template_directory_uri() . '/assets/images/blog-bg.jpg'; // Replace this with the path to your image
        ?>; 
   height: 567px;
}


.site-banner .banner-content {
    display: flex;
    width: 100%;
    align-items: center;
    height: 450px;
    text-align: center;

}

.margin-large {
  margin-top: 0em;
  margin-bottom: 0em;
}

media only screen and (max-width: 768px) {
  .margin-small,
  .margin-medium,
  .margin-large,
  .margin-xlarge {
    margin-top: 1em;
    margin-bottom: 1em;
  }
</style>

<?php 
	while (have_posts()) :
		the_post();

		
						
		
	endwhile;
	?>	
<div class="site-banner ">
	<div class="banner-content" style="background-image: url('<?php echo esc_url($background_image_url); ?>')" ;>
		<div class="container">
			<div class="row">
				<div class="col-md-12">			
					<div class="text-content text-center">
						<span><i class="icon icon-calendar mr-2"></i> </span>
						<h1 class='display-3' style ="color:white "><?php the_title() ?></h1>
						
						<div class="breadcum-items mt-2 fs-lg" >
							<span class="item text-white"><a style ="color:white " href="/">Home /</a></span>
							<span class="item text-white"><a style ="color:white " href="/blog">Blogs /</a></span>
							<span class="item text-white"><?php the_title() ?></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><!--site-banner-->


<div class="content-area margin-large border-bottom">
	<div class="container">
		<div class="row">

		<main class="main-content col-md-9">
			<div class="post-detail mb-5">
					<!-- <a href="#">
						<img src="<?php echo get_template_directory_uri() ?>/assets/images/blog-post.jpg" alt="blog" class="mb-3">

					</a> -->

					
					<div class="post-content text-hover">
						<?php the_content(); ?>
						
					</div><!--post-content-->


		</main>

			<aside class="right-sidebar col-md-3">
            <?php get_sidebar('blog', array('author_id' =>  $author_id)); ?>
			
	</aside>

		</div>
	</div>
</div><!--content-area-->


<?php get_footer() ?>