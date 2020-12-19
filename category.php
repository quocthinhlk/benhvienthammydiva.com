<?php get_header(); ?>
<div class="wt-bnr-inr overlay-wraper" style="background-image:url(http://thewebmax.com/spa/images/banner/blog-banner.jpg);">
    <div class="overlay-main bg-black opacity-07"></div>
    <div class="container">
        <div class="wt-bnr-inr-entry">
            <h1 class="text-white">Category</h1>
        </div>
    </div>
</div>

<div class="bg-gray-light p-tb20">
    <div class="container">
        <ul class="wt-breadcrumb breadcrumb-style-2">
            <li><a href=""><i class="fa fa-home"></i> Home</a></li>
             <span>»</span>
            <li>Category</li>
        </ul>
    </div>
</div>

<div class="section-full p-t80 p-b50">
	<div class="container">
		<div class="blog-post blog-md date-style-1 clearfix">
			<div class="wt-post-media wt-img-effect zoom-slow">
				<a href="javascript:void(0);"><img src="http://thewebmax.com/spa/images/blog/grid/pic4.jpg" alt=""></a>
			</div>
			<div class="wt-post-info">
				<div class="wt-post-title ">
					<h3 class="post-title"><a href="">Blogpost With Image</a></h3>
				</div>
				<div class="wt-post-meta ">
					<ul>
						<li class="post-date"> <i class="fa fa-calendar"></i>20 Dec 2017 </li>
						<li class="post-author"><i class="fa fa-user"></i><a href="">By <span>John</span></a> </li>
					</ul>
				</div>
				<div class="wt-post-text">
					<p>Asperiores, tenetur, blanditiis, quaerat odit ex exercitationem pariatur quibusdam veritatis quisquam laboriosam esse beatae hic perferendis velit deserunt soluta iste repellendus officia in neque veniam debitis</p> 
				</div>
				<div class="clearfix">
					<div class="wt-post-readmore pull-left">
						<a href="" title="READ MORE" rel="bookmark" class="site-button-link">Read More</a>
					</div>
					<div class="widget_social_inks pull-right">
						<ul class="social-icons social-radius social-dark m-b0">
							<li><a href="" class="fab fa-facebook-f"></a></li>
							<li><a href="" class="fab fa-twitter"></a></li>
							<li><a href="" class="fab fa-youtube"></a></li>
							<li><a href="" class="fab fa-instagram"></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="pagination-bx">
			<?php
			global $wp_query;
			$big = 999999999;
			echo paginate_links( array(
				'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format' => '?paged=%#%',
				'prev_text'    => __('<i class="fas fa-chevron-left"></i>'),
				'next_text'    => __('<i class="fas fa-chevron-right"></i>'),
				'current' => max( 1, get_query_var('paged') ),
				'total' => $wp_query->max_num_pages
			) );
			?>
		</div>
	</div>
</div>

<?php get_footer(); ?>