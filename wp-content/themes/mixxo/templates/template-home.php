<?php 

if ( !defined('ABSPATH')) exit;


/**
 * Full Content Template
 *
 * Template Name:  Home Page
 *
 * @file           template-home.php
 * @package        Leopalace 21
 * @author         Lee Yool
 *
 */

get_header();

?>
	

	<div class="container">
		<!-- SLIDE BANNER -->
		<div class="slide-banner col-md-12 nopadding">
			<?php 
			// Start the loop.
			while ( have_posts() ) : the_post();
				the_content();
			endwhile;
			?>
		</div>



		<div class="product-list col-md-12 nopadding">
			<div class="col-md-3 col-sm-6 product">
				<div class="col-md-12 product-content">
					<a class="product-img col-md-12 nopadding" href="#">
						<img src="http://placehold.it/404x580" alt="" class="img-responsive">
					</a>
					<h3>Váy màu trắng bi</h3>
					<h5>500.000VND</h5>
					<p><a class="btn btnChiTiet btn-default" href="product-details.php" role="button">Chi tiết</a></p>
				</div>
			</div>
		</div>
	</div>
	

<?php 
	get_footer(); 
?>