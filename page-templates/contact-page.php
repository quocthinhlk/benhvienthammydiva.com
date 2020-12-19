<?php
/**
 * template name: Liên hệ
 */
?>

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

<div class="wt-contact-wrap row equal-wraper">
	<div class="contact-left-part equal-col" style="height: 815px;">
		<div class="gmap-outline">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.83517468708!2d106.68989251536605!3d10.823922692289305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529880d907a5b%3A0xcb969eed355d26df!2zVmnhu4duIFRo4bqpbSBN4bu5IERJVkEgLSBHw5IgVuG6pFA!5e0!3m2!1svi!2s!4v1608353492224!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>  
		</div>
	</div>
	<div class="contact-right-part equal-col" style="height: 815px;">
		<div class="p-a30  wt-box">
			<h4 class="text-uppercase">Contact Detail </h4>
			<div class="wt-separator-outer m-b30">
				<div class="wt-separator style-icon">
					<i class="fa fa-leaf text-black"></i>
					<span class="separator-left bg-primary"></span>
					<span class="separator-right bg-primary"></span>
				</div>                            
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-12 col-sm-12 m-b30">
					<div class="wt-icon-box-wraper center p-a30 bdr-2 bdr-gray-light">
						<div class="wt-icon-box-sm bg-primary m-b20">
							<span class="icon-cell text-white">
								<i class="fa fa-phone"></i>
							</span>
						</div>
						<div class="icon-content">
							<h5>Phone</h5>
							<p>+91 564 548 4854</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-12 col-sm-12 m-b30">
					<div class="wt-icon-box-wraper center p-a30 bdr-2 bdr-gray-light">
						<div class="wt-icon-box-sm bg-primary m-b20">
							<span class="icon-cell text-white">
								<i class="fa fa-envelope"></i>
							</span>
						</div>
						<div class="icon-content">
							<h6>Email</h6>
							<p>demo@gmail.com</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-12 col-sm-12 m-b30">
					<div class="wt-icon-box-wraper center p-a30 bdr-2 bdr-gray-light">
						<div class="wt-icon-box-sm bg-primary m-b20">
							<span class="icon-cell text-white">
								<i class="fa fa-map-marker"></i>
							</span>
						</div>
						<div class="icon-content">
							<h5>Address</h5>
							<p>252 W 43rd St New York, NY</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="p-lr30">
			<h4 class="text-uppercase">Contact Form </h4>
			<div class="wt-separator-outer m-b30">
				<div class="wt-separator style-icon">
					<i class="fa fa-leaf text-black"></i>
					<span class="separator-left bg-primary"></span>
					<span class="separator-right bg-primary"></span>
				</div>                            
			</div>
		</div>
		<div class="m-a30 wt-box border-2">
			<form class="cons-contact-form" method="post" action="form-handler.php">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-user"></i></span>
								<input name="username" type="text" required="" class="form-control" placeholder="Name">
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
								<input name="email" type="text" class="form-control" required="" placeholder="Email">
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon v-align-m"><i class="fas fa-pencil-alt"></i></span>
								<textarea name="message" rows="4" class="form-control " required="" placeholder="Message"></textarea>
							</div>
						</div>
					</div>
					<div class="col-md-12 text-right">
						<button name="submit" type="submit" value="Submit" class="site-button  m-r15">Submit  <i class="fa fa-angle-double-right"></i></button>
						<button name="Resat" type="reset" value="Reset" class="site-button ">Reset  <i class="fa fa-angle-double-right"></i></button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<?php get_footer(); ?>