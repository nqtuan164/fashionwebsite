<?php 

if ( !defined('ABSPATH')) exit;


/**
 * Full Content Template
 *
 * Template Name:  Contact Page
 *
 * @file           template-home.php
 * @package        Leopalace 21
 * @author         Lee Yool
 *
 */

get_header();

?>
<div id="main-content" class="row">
	<div class="container">
		<div class="col-md-12 col-xs-12 nopadding hidden-xs">
			<ul class="breadcrumb-details">
				<?php if(function_exists('bcn_display'))
				{
					bcn_display();
				} ?>
			</ul>
		</div>
		

		<!-- SLIDE BANNER -->
		<div class="slide-banner col-md-12 nopadding">
			<?php 
			// Start the loop.
			while ( have_posts() ) : the_post();
				the_content();
			endwhile;
			?>
		</div>
	</div>
</div>

<?php get_footer(); ?>