<?php get_header(); ?>
<div class="maim_pages">
   <div class="main3"> 
   <img src="<? bloginfo('template_url'); ?>/images/pages/ke-cheng.jpg" />
    <ul class="all_nav2">
         <li><a href="<?php  bloginfo('url');?>">首页</a> &nbsp;> &nbsp;</li>
        <li><a href=" <?php 
            $cat=get_category_by_slug('ke-cheng'); //获取分类别名为 wordpress 的分类数据
            echo get_category_link( $cat );?>">免费试听课</a> &nbsp;> &nbsp;<a><?php the_title(); ?></a></li>
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
<!-- Baidu Button BEGIN -->
<div id="bdshare" class="bdshare_t bds_tools get-codes-bdshare">
<span class="bds_more">分享到：</span>
<a class="bds_qzone"></a>
<a class="bds_tsina"></a>
<a class="bds_tqq"></a>
<a class="bds_renren"></a>
<a class="bds_t163"></a>
<a class="shareCount"></a>
</div>
<script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=6255883" ></script>
<script type="text/javascript" id="bdshell_js"></script>
<script type="text/javascript">
document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000)
</script>
<!-- Baidu Button END -->
            </li>
			</ul>
		</div>
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
    <li class=""><a href="http://zjfdq.com/?cat=5" target="_blank">免费试听课</a></li>
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
