<?php

//              thumbnails

add_theme_support( 'post-thumbnails' ); 

/*-------------------------------------------------------------- */
//              READ MORE - REMOVE SCROLL
/*-------------------------------------------------------------- */

function remove_more_link_scroll( $link ) {
	$link = preg_replace( '|#more-[0-9]+|', '', $link );
	return $link;
}
add_filter( 'the_content_more_link', 'remove_more_link_scroll' );

/*-------------------------------------------------------------- */
//                         MENUS
/*-------------------------------------------------------------- */

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

/*-------------------------------------------------------------- */
//                       new-default-avatar
/*-------------------------------------------------------------- */


add_filter( 'avatar_defaults', 'new_default_avatar' );

function new_default_avatar ( $avatar_defaults ) {
		//Set the URL where the image file for your avatar is located
		$new_avatar_url = get_bloginfo( 'template_directory' ) . '/images/avatar.png';
		//Set the text that will appear to the right of your avatar in Settings>>Discussion
		$avatar_defaults[$new_avatar_url] = 'Your New Default Avatar';
		return $avatar_defaults;
}



/*-------------------------------------------------------------- */
//                         COMMENTS
/*-------------------------------------------------------------- */

function kaltkaffee_comment($comment, $args, $depth) {
		$GLOBALS['comment'] = $comment;
		extract($args, EXTR_SKIP);

		if ( 'div' == $args['style'] ) {
			$tag = 'div';
			$add_below = 'comment';
		} else {
			$tag = 'li';
			$add_below = 'div-comment';
		}
?>
		<<?php echo $tag ?> <?php comment_class(empty( $args['has_children'] ) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">
		<?php if ( 'div' != $args['style'] ) : ?>

		<div id="div-comment-<?php comment_ID() ?>" class="comment-body">
		<?php endif; ?>

		<div class="comment-author vcard">
		<?php if ($args['avatar_size'] != 0) echo get_avatar( $comment, $args['avatar_size'] ); ?>
			<?php printf(__('<cite class="fn">%s</cite> <span class="says">disse:</span>'), get_comment_author_link()) ?>
			<div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
			<?php
				/* translators: 1: date, 2: time */
				printf( __('%1$s - %2$s'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Editar)'),'  ','' );
			?>
			</div>
		</div>

<?php if ($comment->comment_approved == '0') : ?>
		<em class="comment-awaiting-moderation"><?php _e('O seu comentário está aguardando moderação.') ?></em>
		<br />
<?php endif; ?>

		

		<?php comment_text() ?>

		<div class="reply">
		<?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
		</div>
		<?php if ( 'div' != $args['style'] ) : ?>
		</div>
		<?php endif; ?>


<?php
        }