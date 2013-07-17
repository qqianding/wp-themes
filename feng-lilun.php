<?php  
/* 
Template Name:feng-lilun
*/  
?> 
<?php get_header(); ?>
   <div class="about_bt">
    <div class="about_bt_ka">
      <div class="about_bt_left">
      <h1>冯氏理论</h1>
      <p>冯氏理论</p>
       </div>
       
       <div class="about_bt_right">
        <a href="<?php echo get_option('mytheme_news_title'); ?>"> <img src="<?php bloginfo('template_url'); ?>/images/pages/ziliao.gif" /></a>  
   
   <a href="   <?php 
                      $name = 'contact'; //page别名
                      global $wpdb;
                      $page_id = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_name = '$name'");
                      echo get_page_link( $page_id );?>"><img src="<?php bloginfo('template_url'); ?>/images/pages/lianxi.gif" /></a>
   
       
       </div>
    
    </div>
  </div>
<div class="maim_pages">

   <div class="about_bt2">
    <div class="chicun">
   <?php if (get_option('mytheme_case_title')!=""): ?>
   <img src="<?php echo get_option('mytheme_case_title'); ?>" />
    <?php else : ?>   
 <img src="<?php bloginfo('template_url'); ?>/images/pages/about_tu_07.jpg" />
   <?php endif; ?>
   </div>
  </div>
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
   </div>
    </div>
    <div class="rightmain2">
    <?php include_once("sidebar.php"); ?>
    </div>
   </div>
</div>
<?php get_footer(); ?>
