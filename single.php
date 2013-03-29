<?php get_header(); ?>
 
<div class="post-content">
  <div class="post-page">

    <?php if ( have_posts() ) : ?>

        <?php while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'content');?>

        <?php endwhile; ?>

    <?php else : ?>

    	<?php get_template_part( 'content-fail');?>

    <?php endif; ?>

        </div>
    </div>

</section>



<?php get_footer(); ?>