

<section class="comments-template">

<?php // You can start editing here -- including this comment! ?>

<?php get_template_part( 'comments-form');?>

<?php if ( have_comments() ) : ?>
		


<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-above">
			<h1 class="assistive-text"><?php _e( 'Comment navigation', 'twentyeleven' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'twentyeleven' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'twentyeleven' ) ); ?></div>
		</nav>

<?php endif; // check for comment navigation ?>

		<h3>
			<?php
				printf( _n( '%1$s comentário:', '%1$s comentários:', get_comments_number(), 'twentyeleven' ),
					number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
			?>
		</h3>

	<ul class="commentlist">
		<?php wp_list_comments('type=comment&callback=kaltkaffee_comment'); ?>
	</ul>
			

<?php endif; // check for comment navigation ?>




</section>