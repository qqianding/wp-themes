<?php get_header(); ?>

   <div class="main5"> 
    <div class="chicun2">
   <?php if (get_option('mytheme_bn_img_5')!=""): ?>
<a href="<?php echo get_option('mytheme_bn_url_5') ?>" target="_blank"> <img src="<?php echo get_option('mytheme_bn_img_5'); ?>" alt="<?php echo get_option('mytheme_bn_tit_5')?>" /></a>
    <?php else : ?>   <a href="http://zjfdq.com/?page_id=12">
 <img src="<?php bloginfo('template_url'); ?>/images/pages/about-fszj.jpg" /></a>
   <?php endif; ?>
     </div>
    <ul class="all_nav2">
        <li><a href="<?php  bloginfo('url');?>">首页</a> &nbsp;> &nbsp;</li>
        <li><a href=" <?php $cat=get_category_by_slug('exciting-activities'); //获取分类别名为 wordpress 的分类数据
        echo get_category_link( $cat );?>"></a><a><?php wp_title(''); ?></a></li>
     </ul>
    <div class="leftmain5">
    <div class="news_show">
  
    
      <div class="about_wen2">

<ul class="new_tu h_hd">


 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
       <li>
            <?php if(get_post_meta($post->ID, "推荐",true)):   ?>
              <div class="tuijian "> 
                <img src="<?php bloginfo('template_url'); ?>/images/new-tuijian.png" />
              </div>
              <?php else : ?>
              <?php endif; ?>  
                <a class="new_tu_img" href="<?php the_permalink() ?>" rel="lightbox[set_3]"> 
                  <span> <?php the_post_thumbnail('medium'); ?> </span> 
                </a>  
                <div class="h_hd_title"> 
                  <h2><a href="<?php the_permalink() ?>">
                    <?php echo mb_strimwidth(strip_tags($post->post_title), 0,40,"... :"); ?>
                  </a></h2>
                  
                  
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
        <li class=""><a href="http://zjfdq.com/?cat=4" target="_blank">精彩活动</a></li>
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
