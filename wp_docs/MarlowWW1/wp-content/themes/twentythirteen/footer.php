<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

		</div><!-- #main -->
		<footer id="colophon" class="site-footer" role="contentinfo">


<div style="width:100%; background-color: black; color:white; text-align:center"><div style="width: 100%; max-width: 684px; margin:0 auto; display:block; position:relative">
<br />Marlow Remembers <br />
A Not-for-Profit Organisation formed to Commemorate and Record the effects of the First World War (1914-1918) on the communities
of Marlow Town, Marlow Bottom, Great Marlow, Little Marlow, Medmenham and Bisham. <br /><small><span style="color:rgb(90,90,90)">website originated by: <a href="http://www.palmer-rose.co.uk/" target="_blank">The Palmer & Rose Partnership</a></span></small><br /><br />
<img src="http://marlowww1.org.uk/wp-content/uploads/2016/03/heritage_lottery_fund_logo-white-out1.png" alt="Heritage Lottery Fund" /><br /><br /></div>
</div>
			<div class="site-info" style="text-align:center">
				<?php do_action( 'twentythirteen_credits' ); ?>
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentythirteen' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentythirteen' ); ?>"><?php printf( __( 'Constructed in %s', 'twentythirteen' ), 'WordPress' ); ?></a>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>