<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>
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
		
		<div class="col-md-12 col-xs-12 product-details">
			<?php while ( have_posts() ) : the_post(); ?>
			<!-- PRODUCT DETAILS -->
			<div class="col-md-4 col-xs-12 product-details-img">
				<div class="col-md-12 col-xs-12 product-content product-details-main-img">
					<?php 
						if (has_post_thumbnail( get_the_ID() )) : 
							$img = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' );
						endif;
						//echo $img;
					?>
					<a class="product-img col-md-12 nopadding" rel="group" href="<?php echo $img != "" ? $img[0] : ''; ?>">
						<img src="<?php echo $img != null ? $img[0] : ''; ?>" height="348" width="980" alt="" class="img-responsive" data-toggle="modal" data-target="#main-product-img">
					</a>

				</div>
				<div class="col-md-6 col-xs-6 product-content">
					<a class="product-img col-md-12 col-xs-12 nopadding" rel="group" href="#">
						<img src="img/product1.jpg" alt="" class="img-responsive" data-toggle="modal" data-target="#sub-product-img1">
					</a>
				</div>
				<div class="col-md-6 col-xs-6 product-content">
					<a class="product-img col-md-12 col-xs-12 nopadding" rel="group" href="#">
						<img src="img/product1.jpg" alt="" class="img-responsive" data-toggle="modal" data-target="#sub-product-img2">
					</a>

				</div>

			</div>
			<!-- END of PRODUCT DETAILS -->
			
			<!-- PRODUCT DETAILS INFO -->
			<div class="col-md-8 col-xs-12 product-details-info">
				<div class="col-md-12 product-info">
					<h1 class="text-uppercase"><?php the_title(); ?></h1>
					<h5><?php echo number_format( get_field('product_price'), 0, ',', '.'); ?>VND</h5>
					<span><b>Size:</b>  <?php the_field('product_size'); ?></span>
				</div>
				<div class="col-md-12 product-content product-details-article">
					<p>
						<?php the_content(); ?>
					</p>
				</div>
				<div class="col-md-12 product-details-rating">
					<ul class="list-inline ">
						<li><h5>Đánh giá sản phẩm:</h5></li>
						<li><span class="glyphicon glyphicon-star"></span></li>
						<li><span class="glyphicon glyphicon-star"></span></li>
						<li><span class="glyphicon glyphicon-star"></span></li>
						<li><span class="glyphicon glyphicon-star"></span></li>
						<li><span class="glyphicon glyphicon-star"></span></li>
					</ul>
					<ul class="list-unstyled product-details-address">
						<li><b><h5>Liên hệ mua hàng:</h5></b></li>
						<li><b>Địa Chỉ:</b> <?php echo get_option('quotuts_address'); ?></li>
						<li><b>Điện thoại:</b> <?php echo get_option('quotuts_phone'); ?></li>
					</ul>
				</div>
			</div>
			<!-- END of PRODUCT DETAILS INFO -->

			<?php endwhile; ?>
		</div>
		
	</div><!-- .container -->
</div>
<?php get_footer(); ?>
