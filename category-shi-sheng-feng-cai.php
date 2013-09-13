<?php get_header(); ?>

   <div class="main5"> 
    <div class="chicun2">
    <?php if (get_option('mytheme_lx_title')!=""): ?>
   <img src="<?php echo get_option('mytheme_lx_title'); ?>" />
    <?php else : ?>   
   <img src="<?php bloginfo('template_url'); ?>/images/pages/shisheng.jpg" />
     <?php endif; ?>
     </div>
    <ul class="all_nav2">
        <li><a href="<?php  bloginfo('url');?>">首页</a> &nbsp;> &nbsp;</li>
        <li><a href=" <?php $cat=get_category_by_slug('shi-sheng-feng-cai'); //获取分类别名为 wordpress 的分类数据
        echo get_category_link( $cat );?>"></a><a><?php wp_title(''); ?></a></li>
     </ul>
    <div class="leftmain5" style="width:620px;">
    <div>
    
    <div id='container' style="position: relative;" class="h-ssfc">
<ul>
 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

       <li> 
        <div class="ks-waterfall">
                <a href="<?php the_permalink() ?>"> 
                  <span> <?php the_post_thumbnail('medium'); ?> </span> 
                </a>  
                 <div class="title"><h2><a href="<?php the_permalink() ?>">
                    <?php echo mb_strimwidth(strip_tags($post->post_title), 0,40,"... :"); ?>
                  </a></h2></div>
         </div>
         </li>
      
       <?php endwhile; ?>     
  <?php else : ?>
  <p>请发表该分类的文章！</p>
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
        <li class=""><a href="http://zjfdq.com/?cat=2" target="_blank">师生风采</a></li>
      </ul>
        </div>
      </div>
    </div>
</div><!-- / -->
<?php include_once("sidebar.php"); ?>
    </div><!--rightmain2-->
   </div>
<script src="http://g.tbcdn.cn/kissy/k/1.3.1/seed.js" data-config="{combine:true}"></script>
<script type="text/javascript">
  KISSY.use("waterfall", function (S, Waterfall) {
    new Waterfall({
        container: "#container",    //节点容器
        minColCount:3,             //最小列数
        colWidth: 200               //每列的宽度
    });
});
</script>



</div>
<?php get_footer(); ?>
