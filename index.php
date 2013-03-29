<?php
/*
 * MAIN PAGE 
 *
 */
?>


<?php get_header(); ?>

<div class="post-content">
	<div class="post-page">

		 <?php if ( have_posts() ) : ?>

		 	<?php global $more; $more = -1; //declare and set $more before The Loop ?>

			<?php while ( have_posts() ) : the_post(); ?> 
				
			<article class="post" id="post-<?php the_ID(); ?>">

				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<small class='date'><?php the_time( 'j \d\e F \d\e Y' ); ?></small>
					
				<?php if ( has_post_thumbnail() ) : ?>

					<div class='post-thumbnail'>
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
					</div>

				<?php endif; ?>

				<?php if ($more == -1) {
								
					the_content();
					$more = 0; //prevent this from happening again. use the more tag from now on.

    			} else {

    				the_content('<div class="post-bottom"><span class="post-link">Leia mais</span></div>'); 

    			}?>

    			</article>

    			<div class='post-frame'></div>

				<?php endwhile; ?>

			<?php else : ?>

					<?php get_template_part( 'content-fail');?>

	<?php endif; ?>

	<?php /* Navegação*/ ?>
		<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) : ?>

			<section class='nav-bottom'>
				<div class='nav'>
     			<div class='nav-button1'><?php next_posts_link(__( 'Post mais antigos >>' , 'your-theme' )) ?></div>
     			<div class='nav-button2'><?php previous_posts_link(__( 'Posts mais novos <<', 'your-theme' )) ?></div>

			</div>
    		
		<?php else : ?> 

		<div id='mini-bottom'></div>

		<?php endif; ?>

	</div>
</div>

<!-- end .content -->

<?php get_footer(); ?>