<?php  
/* 
Template Name:biao-dan
*/  
?> 
<?php get_header(); ?>

<style type="text/css" media="screen">
.h_form{width:360px;margin: 20px auto;font-family: "微软雅黑";background: #FAE7AB;color: #fff;}
.h_form h3,.h_form h4{font-style: normal;font-weight: normal;margin: 0px;padding: 10px 0 0 20px;background: #ff6600;}
.h_form h3{font-size: 28px;font-weight: bold}
.h_form h4{font-size: 16px;padding: 0 0 20px 20px;}
</style>


<div class="maim_pages">
 
  <div id="" class="h_form">
    <h3>免费预约试听体验课程</h3>
    <h4>个人信息填写</h4>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile; ?> 
    <?php else : ?>
    <?php  endif; ?>
  </div><!-- / -->



</div>
<?php get_footer(); ?>
