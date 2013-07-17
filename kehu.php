<?php  
/* 
Template Name:kehu
*/  
?> 
<?php get_header(); ?>
<style type="text/css">
    html,body{margin:0;padding:0;}
    .iw_poi_title {color:#CC5522;font-size:14px;font-weight:bold;overflow:hidden;padding-right:13px;white-space:nowrap}
    .iw_poi_content {font:12px arial,sans-serif;overflow:visible;padding-top:4px;white-space:-moz-pre-wrap;word-wrap:break-word}
</style>
<div class="maim_pages">
   <div class="main3"> 
     <ul class="all_nav">
        <li><a href="<?php  bloginfo('url');?>">首页</a> &nbsp;> &nbsp;</li>
        <li><a href="#">客户汇总</a>></li>
     </ul>
  
       <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="about_wen2">
       <?php the_content(); ?>
       </div>
       <?php endwhile; endif; ?>

      <div class="liuyan">

<?php comments_template(); ?>
			
		</div>		
     </div>
  
   </div>
</div>

<?php get_footer(); ?>
