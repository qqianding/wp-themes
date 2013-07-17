<?php  
/* 
Template Name:bao-ming
*/  
?> 
<?php get_header(); ?>
   <div class="about_bt">
    <div class="about_bt_ka">
      <div class="about_bt_left">
      <h1>报名</h1>
      <p>报名</p>
       </div>
       
       
    </div>
  </div>
<div class="maim_pages">

   
   <div class="main5"> 

    <ul class="all_nav2">
        <li><a href="<?php  bloginfo('url');?>">首页2***</a> &nbsp;> &nbsp;</li>
        <li><a href=" <?php 
$cat=get_category_by_slug('company-news'); //获取分类别名为 wordpress 的分类数据


                      echo get_category_link( $cat );?>"></a></li>
     </ul>
    <div class="leftmain5">
    <div class="news_show">
      <div class="about_wen2">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
     <?php the_content(); ?>
           <?php endwhile; ?> 
	<?php else : ?>
 <?php  endif; ?>   
     </div>

<?php

  if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
    die ('Please do not load this page directly. Thanks!');

  if ( post_password_required() ) { ?>
    This post is password protected. Enter the password to view comments.
  <?php
    return;
  }
?>

<?php if ( have_comments() ) : ?>
  
  

  <div class="navigation">
    <div class="next-posts"><?php previous_comments_link() ?></div>
    <div class="prev-posts"><?php next_comments_link() ?></div>
  </div>

  <ol class="commentlist">
    <?php wp_list_comments(); ?>
  </ol>

  <div class="navigation">
    <div class="next-posts"><?php previous_comments_link() ?></div>
    <div class="prev-posts"><?php next_comments_link() ?></div>
  </div>
  
 <?php else : // this is displayed if there are no comments so far ?>

  <?php if ( comments_open() ) : ?>
    <!-- If comments are open, but there are no comments. -->

   <?php else : // comments are closed ?>
    <p>Comments are closed.</p>

  <?php endif; ?>
  
<?php endif; ?>

<?php if ( comments_open() ) : ?>

<div id="respond">

  <h2><?php comment_form_title( '请准确填写邮箱或手机，以及其他相关信息', 'Leave a Reply to %s' ); ?></h2>

  <div class="cancel-comment-reply">
    <?php cancel_comment_reply_link(); ?>
  </div>

  <?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
    <p>You must be <a href="<?php echo wp_login_url( get_permalink() ); ?>">logged in</a> to post a comment.</p>
  <?php else : ?>

  <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

    <?php if ( is_user_logged_in() ) : ?>

      <p> <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>为登录状态 <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">请登出留言 &raquo;</a></p>

    <?php else : ?>

      <div>
        <input type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
        <label for="author">您的尊称 <?php if ($req) echo "(必填)"; ?></label>
      </div>

      <div>
        <input type="text" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
        <label for="email">电子邮箱 <?php if ($req) echo "必填)"; ?></label>
      </div>

    

    <?php endif; ?>

    <!--<p>You can use these tags: <code><?php echo allowed_tags(); ?></code></p>-->

    <div>
      <textarea name="comment" id="comment" cols="104" rows="6" tabindex="4">
预定的课程：
您的手机号码：
备注（您还可以填写儿女的爱好，学习的目标，身体状况等等）：


      </textarea>
    </div>

    <div>
      <input name="submit" type="submit" id="submit" tabindex="5" value="提交" />
      <?php comment_id_fields(); ?>
    </div>
    
    <?php do_action('comment_form', $post->ID); ?>

  </form>

  <?php endif; // If registration required and not logged in ?>
  
</div>

<?php endif; ?>



   </div>
    </div>
    <div class="rightmain2">
    <?php include_once("sidebar.php"); ?>
    </div>
   </div>
</div>
<?php get_footer(); ?>
