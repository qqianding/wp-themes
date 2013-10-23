<?php get_header(); ?>
<div class="maim_pages">
   <div class="main3"> <a href="http://zjfdq.com/?page_id=12">
   <img src="<? bloginfo('template_url'); ?>/images/pages/shisheng.jpg" /></a>
    <ul class="all_nav2">
         <li><a href="<?php  bloginfo('url');?>">首页</a> &nbsp;> &nbsp;</li>
        <li><a href=" <?php 
            $cat=get_category_by_slug('shi-sheng-feng-cai'); //获取分类别名为 wordpress 的分类数据
            echo get_category_link( $cat );?>">师生风采</a> &nbsp;> &nbsp;<a><?php the_title(); ?></a></li>
     </ul>
    <div class="leftmain5">
    <div class="news_show">
      <div class="about_wen2">

   <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
         <div class="sing_bt">
      <h1><?php the_title(); ?></h1>
         <a><?php the_time('m-d-y') ?></a>
         </div>
      <div class="entry">
        <?php the_content(); ?>
      <ul class="wen_di"> 
            <li><p><?php the_tags( 'Tags: ', ', ', ''); ?></p></li>
            <li>
<!--  Button  -->
<div class="jiathis_style_32x32">
<a class="jiathis_button_qzone"></a>
<a class="jiathis_button_tsina"></a>
<a class="jiathis_button_tqq"></a>
<a class="jiathis_button_renren"></a>
<a class="jiathis_button_kaixin001"></a>
<a href="http://www.jiathis.com/share?uid=1743555" class="jiathis jiathis_txt jiathis_separator jtico jtico_jiathis" target="_blank"></a>
</div>
<script type="text/javascript" >
var jiathis_config={
	data_track_clickback:true,
	summary:"",
	shortUrl:false,
	hideMore:false
}
</script>
<script type="text/javascript" src="http://v3.jiathis.com/code/jia.js?uid=1743555" charset="utf-8"></script>
<!--  Button  -->

            </li>
      </ul>
    </div>

 <div class="h_video_comments"><?php comments_template(); ?></div>    

  <?php endwhile; endif; ?>
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
        <li class=""><a href="http://zjfdq.com/?cat=2" target="_blank">师生风采</a></li>
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
