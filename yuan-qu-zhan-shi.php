<?php  
/* 
Template Name:yuan-qu-zhan-shi
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
   <div class="main3"> 
   
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
         <div class="sing_bt">
			<h1><?php the_title(); ?></h1>
		     <a><?php the_time('m-d-y') ?></a>
         </div>
			<div class="entry entry-p">
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
<style type="text/css" media="screen">
.entry-p{width: 590px;}
</style>
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
