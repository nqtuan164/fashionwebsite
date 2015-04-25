<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
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
		
		<?php 
			$cat = get_cat_id( single_cat_title("",false));

			$args = array(
            'posts_per_page' => 12,
            'category' => $cat,
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

	</div>
</div>

<?php get_footer(); ?>