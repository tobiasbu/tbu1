<?php
/**
 * CONTENT - page for:
 *
 *  - single and page
 * 
 */
?>

	<article class="post" id="post-<?php the_ID(); ?>">	

		
		<h2><?php the_title(); ?></h2>

			<?php if ( is_page() ) : ?>
				<small id='no-date'></small>
			<?php else : ?>
				<small class='date'><?php the_time( 'j \d\e F \d\e Y' ); ?></small>
			<?php endif; ?>

		<?php the_content(); ?>

	</article>

	<?php if ( is_page() ) : ?>

		<div id='no-bottom'></div>

	<?php else : ?>
	
		<div class='post-frame'></div>

           		<section class="cat-tags">
           			<span class="cat-links">Categorias: <?php the_category( ', ' ); ?></span>
               		<span class="cat-links"><?php the_tags(); ?></span>
           		</section>

           		<section class="share">

           			<div class="social-network">
						<a href="https://twitter.com/share" class="twitter-share-button" data-via="_kalt_kaffee" data-lang="pt_BR">Tweet</a>
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
					</div>

           			<div class="social-network" id="fb">
           				<div id="fb-root"></div>
           				<script src="http://connect.facebook.net/pt_BR/all.js#xfbml=1"></script>
           				<fb:like href="<?php echo get_permalink(); ?>" data-layout="button_count" show_faces="false" width="150"></fb:like>
           			</div>

           		</section>

           		<div class='post-frame'></div>
           		           			
						<?php comments_template(); ?>
					
					<!-- end .content -->
	<?php endif; ?>
		