<?php get_header(); ?>
<div class="maim_pages">
   <div class="main5"> 
    <div class="chicun2">
    <?php if (get_option('mytheme_lx_title')!=""): ?>
   <img src="<?php echo get_option('mytheme_lx_title'); ?>" />
    <?php else : ?>  <a href="http://zjfdq.com/?page_id=12"> 
   <img src="<?php bloginfo('template_url'); ?>/images/pages/fs-lilun.jpg" /></a>
     <?php endif; ?>
     </div>
    <ul class="all_nav2">
        <li><a href="<?php  bloginfo('url');?>">首页</a> &nbsp;> &nbsp;</li>
        <li><a href=" <?php 
$cat=get_category_by_slug('fs-li-lun'); //获取分类别名为 wordpress 的分类数据
                      echo get_category_link( $cat );?>">冯式理论</a></li>
     </ul>
    <div class="leftmain5">
    <div class="news_show">
      <div class="about_wen2">
    <ul>
     <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
       <li>
             <a class="bt" href="<?php the_permalink() ?>"> <h1><?php the_title(); ?> </h1></a>
             <a class="time" href="#"><?php the_time('m-d-y') ?></a>
         </li>
       <?php endwhile; ?>     
	<?php else : ?>
         <li>
             <a class="bt" href="#"> <h1>举个栗子</h1></a>
             <a class="time" href="#">2013-08-01</a>
         </li>
        <?php  endif; ?>   
    </ul>
    <div class="pager">   <?php par_pagenavi(); ?>  </div>
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
    <li class=""><a href="http://zjfdq.com/?cat=79" target="_blank">冯式理论</a></li>
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