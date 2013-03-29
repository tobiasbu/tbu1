<?php /* If comments are open, build the respond form */ ?>

<?php $req = get_option('require_name_email'); // Checks if fields are required. ?>

<?php if ( 'open' == $post->comment_status ) : ?>

    <h3><?php comment_form_title( __('Deixe um Comentário', 'your-theme'), __('Deixe uma respota para %s', 'your-theme') ); ?></h3>

        <div id="respond">
                                 
            <div id="cancel-comment-reply"><?php cancel_comment_reply_link() ?></div>
 
            <?php if ( get_option('comment_registration') && !$user_ID ) : ?>

                <p id="login-req"><?php printf(__('You must be <a href="%s" title="Log in">logged in</a> to post a comment.', 'your-theme'),
                get_option('siteurl') . '/wp-login.php?redirect_to=' . get_permalink() ) ?></p>
 
            <?php else : ?>
                                        
            <div class="formcontainer">     
 
                <form id="commentform" action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post">
 
            <?php if ( $user_ID ) : ?>

                <p id="login"><?php printf(__('<span class="loggedin">Logged in as %2$s <a href="%1$s" title="Logged in as %2$s">%2$s</a>.</span> 
                <span class="logout"><a href="%3$s" title="Log out of this account">Log out?</a></span>', 'your-theme'),
                get_option('siteurl') . '/wp-admin/profile.php',
                wp_specialchars($user_identity, true),
                wp_logout_url(get_permalink()) ) ?></p>
 
            <?php else : ?>
     
                <div id="form-section-author" class="form-section">
                                                                
                    <div class="form-input">
                    <label class="input">
                        <span>
                            <label for="author"><?php _e('Nome', 'your-theme') ?></label>
                            <label id='required'><?php if ($req) _e('(obrigatório)', 'your-theme') ?></label>
                        </span>
                        <input id="comment-info" name="author" type="text" value="<?php echo $comment_author ?>" size="30" maxlength="20" tabindex="3" />                    
                    </label>
                    
                    </div>
                </div><!-- #form-section-author .form-section -->
 
                <div id="form-section-email" class="form-section">
                                     
                    <div class="form-input">
                    <label class="input">
                        <span><label for="email"><?php _e('Email', 'your-theme') ?></label>
                             <label id='required'><?php if ($req) _e('(obrigatório)', 'your-theme') ?></label>
                            <label id='not-publish'><?php _e(' (não será publicado)', 'your-theme') ?> 
                            </span>
                        <input id="comment-info" name="email" type="text" value="<?php echo $comment_author_email ?>" size="30" maxlength="50" tabindex="4" />
                    </label>
                    
                    </div>
             
                </div><!-- #form-section-email .form-section -->
 
                <div id="form-section-url" class="form-section">
 
                    <div class="form-input">
                        <label class="input">
                            <span><label for="url"><?php _e('Website', 'your-theme') ?></span>
                            <input id="comment-info" name="url" type="text" value="<?php echo $comment_author_url ?>" size="30" maxlength="50" tabindex="5" />       
                        </label>
                     </div>
                </div><!-- #form-section-url .form-section -->
 
                <?php endif /* if ( $user_ID ) */ ?>

                <div id="form-section-comment" class="form-section">


                    <div class="form-textarea">
                        <label class="input">
                            <span id='input-textarea'><label for="comment"><?php _e('Escreva seu comentário aqui.', 'your-theme') ?></label></span>
                            <textarea id="comment" name="comment" cols="45" rows="8" tabindex="6" ></textarea>
                           
                        </label>
                    </div>
              
              </div><!-- #form-section-comment .form-section -->
 
              <div id="form-allowed-tags" class="form-section">

                    <p><span><?php _e('You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes:', 'your-theme') ?></span>
                    <code><?php echo allowed_tags(); ?></code></p>

              </div>
 
                <?php do_action('comment_form', $post->ID); ?>
 
                <div class="form-submit"><input id="submit" name="submit" type="submit" value="<?php _e('Post Comment', 'your-theme') ?>" tabindex="7" /><input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" /></div>
 
                <?php comment_id_fields(); ?>  
 


                <?php /* Just … end everything. We're done here. Close it up. */ ?>  
 
                </form><!-- #commentform -->
            </div><!-- .formcontainer -->
        <?php endif /* if ( get_option('comment_registration') && !$user_ID ) */ ?>
    </div><!-- #respond -->

<div class='post-frame'></div>
    
<?php endif /* if ( 'open' == $post->comment_status ) */ ?>
