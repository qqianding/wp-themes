<?php  
/* 
Template Name:you-hui-quan
*/  
?> 
<?php get_header(); ?>

<div class="maim_pages">

   <div class="about_bt2">
    <div class="chicun">
  <?php if (get_option('mytheme_bn_img_8')!=""): ?>
<a href="<?php echo get_option('mytheme_bn_url_8') ?>" target="_blank"> <img src="<?php echo get_option('mytheme_bn_img_8'); ?>" alt="<?php echo get_option('mytheme_bn_tit_8')?>" /></a>
    <?php else : ?>   <a href="http://zjfdq.com/?page_id=12">
 <img src="<?php bloginfo('template_url'); ?>/images/pages/about-fszj.jpg" /></a>
   <?php endif; ?>
   </div>
  </div>
   <div class="main5"> 

    <ul class="all_nav2">
        <li><a href="<?php  bloginfo('url');?>">首页</a> &nbsp;> &nbsp;</li>
        <li><a href="http://www.zjfdq.com/?page_id=544">优惠信息</a></li>
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
   </div>
    </div>
    <div class="rightmain2">
    <?php include_once("sidebar.php"); ?>
    </div>
   </div>
</div>
<?php get_footer(); ?>
