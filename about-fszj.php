<?php  
/* 
Template Name:about-fszj
*/  
?> 
<?php get_header(); ?>

<div class="maim_pages">

   <div class="about_bt2">
    <div class="chicun">
     <?php if (get_option('mytheme_bn_img_1')!=""): ?>
<a href="<?php echo get_option('mytheme_bn_url_1') ?>" target="_blank"> <img src="<?php echo get_option('mytheme_bn_img_1'); ?>" alt="<?php echo get_option('mytheme_bn_tit_1')?>" /></a>
    <?php else : ?>   <a href="http://zjfdq.com/?page_id=12">
 <img src="<?php bloginfo('template_url'); ?>/images/pages/about-fszj.jpg" /></a>
   <?php endif; ?>
   </div>
  </div>
   <div class="main5"> 

    <ul class="all_nav2">
        <li><a href="<?php  bloginfo('url');?>">首页</a> &nbsp;> &nbsp;</li>
        <li><a href=" <?php 
            $cat=get_category_by_slug('zjy-jie-shao'); //获取分类别名为 wordpress 的分类数据
            echo get_category_link( $cat );?>">早教园介绍</a> &nbsp;> &nbsp;<a><?php the_title(); ?></a></li>
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
<div id="sidebar" class="">
<div id="text-3" class="widget widget_text">
  <h2>分类目录</h2>      
  <div class="textwidget">
    <div id="categories-2" class="h_fenleimulu">  
  <ul>
    <li class=""><a href="http://zjfdq.com/?page_id=323" target="_blank">关于冯式早教</a></li>
    <li class=""><a href="http://zjfdq.com/?page_id=350" target="_blank">政府合作</a></li>
    <li class=""><a href="http://zjfdq.com/?page_id=330" target="_blank">园区展示</a></li>
  </ul>
    </div>
  </div>
</div>
</div><!-- / -->
<?php include_once("sidebar.php"); ?>
</div><!--rightmain2-->
   </div>
</div>
<?php get_footer(); ?>
