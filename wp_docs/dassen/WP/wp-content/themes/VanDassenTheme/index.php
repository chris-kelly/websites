<?php get_header(); ?>
<div id="content" class="content">
<div id="content">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<br>
<p><?php the_content(__('(more...)')); ?></p></div><hr style="width:1000px; margin:0 auto; max-width:100%" class="line"><?php comments_template(); // Get wp-comments.php template ?>
<?php endwhile; else: ?>
<p><br><?php _e('Sorry, you do not have access to this page. <br><br> If you believe you have received this message in error, please contact <a href="mailto:dassen@vandassen.co.uk?subject=Request for access of restricted pages">dassen@vandassen.com</a>
 '); ?></p><?php endif; ?>

</div>
<div id="delimiter">
</div>
<?php get_footer(); ?>