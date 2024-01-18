
<style>
    a{
        text-decoration: none;
    }
    .colored {
  color: #FF5757 !important;
    }
    .colored h1 {
        color: #FF5757 !important; 
    }
    .sidebar-box {
    margin-top: 50px;
    width: 100%;
    }

.list-unstyled {
  padding-left: 0;
  list-style: none;
  font-size: 18px;

}
.right-sidebar .search-box input{
    padding: 0.5em;;
}
.right-sidebar .search-box a.btn-search{
    padding: 5px 20px;
    color: #fff;
    font-size: 18px;
}
.categories-box li {
    display: flex;
    justify-content: space-between;
}
.categories-box li a:before {
    content: "\f0da";
    font-family: icomoon;
    font-size: 16px;
    padding-right: 8px;
}
.recent-post-box .post-image {
    margin-right: 15px;
}
.recent-post-box .text-block a {
    line-height: 1;
    display: block;
    font-weight: 700;
}
  
</style>	
<?php 
	if (isset($args['author_id'])) {
		$author_id = $args['author_id'];
		$author_name = get_the_author_meta('display_name', $author_id);
	}

?>
    <div class="container">
	<div class="row">
				<div class="meta-person bg-alabaster p-4 text-center">
					<img src="<?php echo get_template_directory_uri() ?>/assets/images/ceo.jpg" alt="person" class="personImg">
					<h3 class="colored mt-3 fs-4">           
						<?php echo '<p><a href="' . esc_url(get_author_posts_url($author_id)) . '">' . esc_html($author_name) . '</a></p>';
						
					?>
					</h3>
					<?php echo '<p>' . get_the_author_meta('description', $author_id) . '</p>'; ?>
				</div>

				<!-- <div class="sidebar-box">
					<h3>Search</h3>
					<div class="search-box d-flex">
						<input type="text" name="search" class="border" class="mt-3">
						<a href="#" class="btn-search btn-hvr-effects"><i class=" fi-search"></i></a>
					</div> <!--search-box-->
				</div> 

				<!-- <div class="categories-box sidebar-box">
					<h3>Categories</h3>
					<ul class="list-unstyled mt-3 ">
					<?php
						$categories = get_categories();
						foreach ($categories as $category) {
   						
						}
					?>
						<li><a href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->name; ?></a><span><?php echo "(" . $category->count . ")"; ?></span></li>
					</ul>		
				</div>
				 -->
				<!--.categories-box-->

			<!-- <div class="recent-post-box sidebar-box">
				<h3>Recent Posts</h3>
				<?php
					$args = array(
    				'post_type' => 'post',
    				'posts_per_page' => 5, // Number of recent posts to display
					);

					$recent_posts = new WP_Query($args);

					while ($recent_posts->have_posts()) {
    					$recent_posts->the_post();
    					 // Display the post title
    					 // Display the featured image
					}
					wp_reset_postdata(); // Reset the query
				?>
				<div class="d-flex mb-3 mt-3">
					<div class="post-image">
					<?php the_post_thumbnail('thumbnail', array('class' => 'rpImg')); ?>					</div>
					<div class="text-block">
					<a href="#"><?php echo the_title(); ?></a>
					<span class="date">
					<?php echo get_the_date(); ?>
					</span>
					</div>
				</div>

				<?php wp_reset_postdata();  ?>

		</div><!--.recent-post-box-->

		<!-- <div class="post-tags-box sidebar-box">
			<h3>Tags</h3>
			<div class="tags">
			<?php
				$tags = get_the_tags();
				if ($tags) {
    			foreach ($tags as $tag) {
					echo '<a class="pe-2" href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a>';
				}
			}
		
			?>
				</div>
			
		</div><!--.tags-box-->
		</div>
			</div> 
