<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

	</div><!-- .site-content -->
	
	<!-- FOOTER -->
	<div id="footer" >

		<hr>
		<div class="footer-content container nopadding">
			
			<div class="col-md-6 footer-address nopadding">
				<img class="img-responsive" src="<?php echo get_stylesheet_directory_uri() . '/img/logo-2.png'; ?>" alt="">
				<ul class="list-unstyled">
					<li><b>Địa Chỉ:</b> 31 Lê Minh Xuân , Phường 7 , Quận Tân Bình</li>
					<li><b>Điện thoại:</b> (08) 39716863 / (08) 39712566 / (08)39712656 / 0949999305</li>
				</ul>
			</div>
			<div class="col-md-6 footer-social pull-right nopadding">
				<h4 class="col-md-12 nopadding"><i class="pull-right ">Thương hiệu thời trang uy tín hàng đầu Việt Nam</i></h4>
				<ul class="list-inline pull-right">
					<li><a href=""><span class="glyphicon glyphicon-heart"></span></a></li>
					<li><a href=""><span class="glyphicon glyphicon-heart"></span></a></li>
					<li><a href=""><span class="glyphicon glyphicon-heart"></span></a></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- END of FOOTER -->

	<!-- <footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php
				/**
				 * Fires before the Twenty Fifteen footer text for footer customization.
				 *
				 * @since Twenty Fifteen 1.0
				 */
				do_action( 'twentyfifteen_credits' );
			?>
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentyfifteen' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentyfifteen' ), 'WordPress' ); ?></a>
		</div><!-- .site-info --
	</footer><!-- .site-footer -->

</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>
