 <div id="respond">
        <h2><?php comment_form_title( '免费预约', 'Leave a Reply to %s' ); ?></h2>
        <div class="cancel-comment-reply">
        <?php cancel_comment_reply_link(); ?>
        </div>

    <?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
    <p>You must be <a href="<?php echo wp_login_url( get_permalink() ); ?>">logged in</a> to post a comment.</p>
    <?php else : ?>

    <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

    <?php if ( is_user_logged_in() ) : ?>
    <p>尊敬的：<a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>
        <!--<a href="<?php echo wp_logout_url(get_permalink()); ?>" >登出</a></p>-->
    <?php else : ?>

    <div>
    <input type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
    <label for="author">您的姓名 <?php if ($req) echo "(必填)"; ?></label>
    </div>

    <div>
    <input type="text" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
    <label for="email">电子邮箱或电话号码<?php if ($req) echo "必填)"; ?></label>
    </div>

    <?php endif; ?>

    <div>
    <textarea name="comment" id="comment" cols="104" rows="6" tabindex="4"></textarea>
    </div>
    <div>
    <input name="submit" type="submit" id="submit" tabindex="5" value="提交" />
    <?php comment_id_fields(); ?>
    </div>

    <?php do_action('comment_form', $post->ID); ?>

    </form>

    <?php endif; // If registration required and not logged in ?>

    </div>
