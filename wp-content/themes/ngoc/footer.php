<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
			<footer id="site-footer" role="contentinfo" class="header-footer-group">

				<div class="section-inner">

					<div class="footer-credits">

						<p class="footer-copyright">&copy;
							<?php
							echo date_i18n(
								/* translators: Copyright date format, see https://www.php.net/date */
								_x( 'Y', 'copyright date format', 'twentytwenty' )
							);
							?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
						</p><!-- .footer-copyright -->

						<p class="powered-by-wordpress">
							<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentytwenty' ) ); ?>">
								<?php _e( 'Powered by WordPress', 'twentytwenty' ); ?>
							</a>
						</p><!-- .powered-by-wordpress -->

					</div><!-- .footer-credits -->

					<a class="to-the-top" href="#site-header">
						<span class="to-the-top-long">
							<?php
							/* translators: %s: HTML character for up arrow. */
							printf( __( 'To the top %s', 'twentytwenty' ), '<span class="arrow" aria-hidden="true">&uarr;</span>' );
							?>
						</span><!-- .to-the-top-long -->
						<span class="to-the-top-short">
							<?php
							/* translators: %s: HTML character for up arrow. */
							printf( __( 'Up %s', 'twentytwenty' ), '<span class="arrow" aria-hidden="true">&uarr;</span>' );
							?>
						</span><!-- .to-the-top-short -->
					</a><!-- .to-the-top -->

				</div><!-- .section-inner -->

			</footer><!-- #site-footer -->

		<?php wp_footer(); ?>

	<script type="text/javascript" >
	jQuery(document).ready(function($) {
		



		// Bắt click button load more
		
		// Kiểm tra đang ở page bao nhiêu?
		// Lấy đúng gửi ajax lên cho wp
		// Dùng getpost lấy đúng page của dữ liệu
		// Tạo html trả về cho ajax
		// Ajax render dữ liệu lên màn hình
		var ajax_url = "<?php echo admin_url( 'admin-ajax.php') ?>";
		var paged = 1;

		// $( "#load-more" ).on( "click", function() {
  //       paged = paged + 1;
  //       var ul  = $(this).parent().find('ul');
  //       var loadmore = $(this);
    //     var data = {
    //         'action': 'loadmore',
    //         'paged': paged,
    //         'number': loadmore.attr('rel-sobai'),
    //         'loaibai': loadmore.attr('rel-post_type')
    //     };
    //     var request = $.ajax({
    //         url: ajax_url,
    //         method: "POST",
    //         data: data,
    //         dataType: "json"
    //     });
    //     request.done(function( data ) {
    //         if(data.hide_load_more){
    //             loadmore.hide('show');
    //         }
    //         ul.append(data.html);
    //     });
    //     request.fail(function( jqXHR, textStatus ) {
    //     });
    // });


        $('#danhmuc,#loai').on('change', function() {
		  	var data = {
	            'action': 'filterCategory',
	            'paged': 1,
	            'number': 5,
	            'loaibai': 'service',
	            'topic':$('#danhmuc').val(),
	            'service_category':$('#loai').val()
	        };
	        console.log(data);
	        var request = $.ajax({
	            url: ajax_url,
	            method: "POST",
	            data: data,
	            dataType: "json"
	        });
	        request.done(function( data ) {
	        	console.log(data);
	            // if(data.hide_load_more){
	            //     loadmore.hide('show');
	            // }
	            $('.renderitems').append(data.html);
	        });
	        request.fail(function( jqXHR, textStatus ) {
	        });
		});

	});
	</script>

	<script type="text/javascript">
		
	</script>
	
	</body>
</html>
