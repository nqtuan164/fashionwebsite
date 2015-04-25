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

		

		<?php 
		$args = array(
            'posts_per_page' => 12,
            'category' => '6,7',
            'offset' => 0,
            'orderby' => 'post_date',
            'order' => 'DESC', 
            'post_status' => 'publish',
            'post_type' => 'products'
        );

        $news = get_posts( $args );

        //setlocale(LC_MONETARY,"vi");
		//echo money_format("The price is %i", $number);

		foreach ( $news as $post ) : 
                setup_postdata( $post ); 
                ?>
                
                <div class="product-list col-md-12 nopadding">
					<div class="col-md-3 col-sm-6 product">
						<div class="col-md-12 product-content">
							<a class="product-img col-md-12 nopadding" href="#">
								<?php 
									if (has_post_thumbnail( get_the_ID() )) : 
										$img = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' );
										$img = $img[0];
									else : 
										$img - "http://placehold.it/404x580";
									endif;
								?>
								<img src="<?php echo $img; ?>" alt="" class="img-responsive">
							</a>
							<h3><?php the_title(); ?></h3>
							<h5><?php echo number_format( get_field('product_price'), 0, ',', '.'); ?>VND</h5>
							<p><a class="btn btnChiTiet btn-default" href="<?php the_permalink(); ?>" role="button">Chi tiết</a></p>
						</div>
					</div>
				</div>
            <?php 
        endforeach;
        ?>

		<!-- <div class="product-list col-md-12 nopadding">
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
		</div> -->
	</div>
	

<?php 
	get_footer(); 
?>