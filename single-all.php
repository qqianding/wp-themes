<?php get_header(); ?>
 <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/xuant2.js"></script>
<div class="maim_pages">
   <div class="main3" > 

    <ul class="all_nav2">
        <li><a href="<?php  bloginfo('url');?>">首页</a> &nbsp;> &nbsp;</li>
        <li><a href=" <?php 
          $cat=get_category_by_slug('company-case'); //获取分类别名为 wordpress 的分类数据
                      echo get_category_link( $cat );?>">案例</a>&nbsp;>&nbsp;<a><?php the_title(); ?></a></li>
     </ul>

   <div class="new_tu2" style="width:905px;">
   
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
         <div class="sing_bt">
			<h1><?php the_title(); ?></h1>
		     <a><?php the_time('m-d-y') ?></a>
         </div>
			<div class="entry">
				
				<?php the_content(); ?>	
<p><?php the_tags( 'Tags: ', ', ', ''); ?></p>
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

          
		</div>
	<?php endwhile; endif; ?>
   </div>
                </div>
</div>
<?php get_footer(); ?>
