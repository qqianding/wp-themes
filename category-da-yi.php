<?php get_header(); ?>
<div class="maim_pages">

   <div class="main5"> 
    <div class="chicun2">
    <?php if (get_option('mytheme_lx_title')!=""): ?>
   <img src="<?php echo get_option('mytheme_lx_title'); ?>" />
    <?php else : ?>   
   <img src="<?php bloginfo('template_url'); ?>/images/pages/anli-fuwu.jpg" />
     <?php endif; ?>
     </div>
    <ul class="all_nav2">
        <li><a href="<?php  bloginfo('url');?>">首页</a> &nbsp;> &nbsp;</li>
        <li><a href=" <?php $cat=get_category_by_slug('da-yi'); //获取分类别名为 wordpress 的分类数据
        echo get_category_link( $cat );?>"></a><a><?php wp_title(''); ?></a></li>
     </ul>
    <div class="leftmain5">
    <div class="news_show">
  
    
      <div class="about_wen2">

    <ul class="new_tu">
                <?php $cat=get_category_by_slug('ruyuan'); //获取分类别名为 wordpress 的分类数据?>
                     
                <?php $posts = get_posts( "category=$cat->term_id&numberposts=8" ); ?>
                <?php if( $posts ) : ?>     
                <?php foreach( $posts as $post ) : setup_postdata( $post ); ?>
            <li>
              <?php if(get_post_meta($post->ID, "推荐",true)):   ?>
              <div class="tuijian"> 
                <img src="<?php bloginfo('template_url'); ?>/images/new-tuijian.png" />
              </div>
              <?php else : ?>
              <?php endif; ?>  
                <a class="new_tu_img" href="<?php the_permalink() ?>" rel="lightbox[set_3]"> 
                  <span> <?php the_post_thumbnail('medium'); ?> </span> 
                </a>  
                <div class="shuom"> 
                  <h1><a href="<?php the_permalink() ?>">
                    <?php echo mb_strimwidth(strip_tags($post->post_title), 0,40,"... :"); ?>
                  </a></h1>
                  <a href="<?php the_permalink() ?>">    
                    <p><?php echo mb_strimwidth(strip_tags($post->post_content),24,40,"... :"); ?></p>
                  </a> 
                </div> 
            </li>
                 <?php endforeach; ?>
                 <?php endif; ?>  
          </ul>     


              <ul class="new_tu">
                <?php $cat=get_category_by_slug('xuexi'); //获取分类别名为 wordpress 的分类数据?>
                     
                <?php $posts = get_posts( "category=$cat->term_id&numberposts=8" ); ?>
                <?php if( $posts ) : ?>     
                <?php foreach( $posts as $post ) : setup_postdata( $post ); ?>
            <li>
              <?php if(get_post_meta($post->ID, "推荐",true)):   ?>
              <div class="tuijian"> 
                <img src="<?php bloginfo('template_url'); ?>/images/new-tuijian.png" />
              </div>
              <?php else : ?>
              <?php endif; ?>  
                <a class="new_tu_img" href="<?php the_permalink() ?>" rel="lightbox[set_3]"> 
                  <span> <?php the_post_thumbnail('medium'); ?> </span> 
                </a>  
                <div class="shuom"> 
                  <h1><a href="<?php the_permalink() ?>">
                    <?php echo mb_strimwidth(strip_tags($post->post_title), 0,40,"... :"); ?>
                  </a></h1>
                  <a href="<?php the_permalink() ?>">    
                    <p><?php echo mb_strimwidth(strip_tags($post->post_content),24,40,"... :"); ?></p>
                  </a> 
                </div> 
            </li>
                 <?php endforeach; ?>
                 <?php endif; ?>  
          </ul>  


              <ul class="new_tu">
                <?php $cat=get_category_by_slug('shenghuo'); //获取分类别名为 wordpress 的分类数据?>
                     
                <?php $posts = get_posts( "category=$cat->term_id&numberposts=8" ); ?>
                <?php if( $posts ) : ?>     
                <?php foreach( $posts as $post ) : setup_postdata( $post ); ?>
            <li>
              <?php if(get_post_meta($post->ID, "推荐",true)):   ?>
              <div class="tuijian"> 
                <img src="<?php bloginfo('template_url'); ?>/images/new-tuijian.png" />
              </div>
              <?php else : ?>
              <?php endif; ?>  
                <a class="new_tu_img" href="<?php the_permalink() ?>" rel="lightbox[set_3]"> 
                  <span> <?php the_post_thumbnail('medium'); ?> </span> 
                </a>  
                <div class="shuom"> 
                  <h1><a href="<?php the_permalink() ?>">
                    <?php echo mb_strimwidth(strip_tags($post->post_title), 0,40,"... :"); ?>
                  </a></h1>
                  <a href="<?php the_permalink() ?>">    
                    <p><?php echo mb_strimwidth(strip_tags($post->post_content),24,40,"... :"); ?></p>
                  </a> 
                </div> 
            </li>
                 <?php endforeach; ?>
                 <?php endif; ?>  
          </ul>  


              <ul class="new_tu">
                <?php $cat=get_category_by_slug('wsbj'); //获取分类别名为 wordpress 的分类数据?>
                     
                <?php $posts = get_posts( "category=$cat->term_id&numberposts=8" ); ?>
                <?php if( $posts ) : ?>     
                <?php foreach( $posts as $post ) : setup_postdata( $post ); ?>
            <li>
              <?php if(get_post_meta($post->ID, "推荐",true)):   ?>
              <div class="tuijian"> 
                <img src="<?php bloginfo('template_url'); ?>/images/new-tuijian.png" />
              </div>
              <?php else : ?>
              <?php endif; ?>  
                <a class="new_tu_img" href="<?php the_permalink() ?>" rel="lightbox[set_3]"> 
                  <span> <?php the_post_thumbnail('medium'); ?> </span> 
                </a>  
                <div class="shuom"> 
                  <h1><a href="<?php the_permalink() ?>">
                    <?php echo mb_strimwidth(strip_tags($post->post_title), 0,40,"... :"); ?>
                  </a></h1>
                  <a href="<?php the_permalink() ?>">    
                    <p><?php echo mb_strimwidth(strip_tags($post->post_content),24,40,"... :"); ?></p>
                  </a> 
                </div> 
            </li>
                 <?php endforeach; ?>
                 <?php endif; ?>  
          </ul>  


              <ul class="new_tu">
                <?php $cat=get_category_by_slug('jygy'); //获取分类别名为 wordpress 的分类数据?>
                     
                <?php $posts = get_posts( "category=$cat->term_id&numberposts=8" ); ?>
                <?php if( $posts ) : ?>     
                <?php foreach( $posts as $post ) : setup_postdata( $post ); ?>
            <li>
              <?php if(get_post_meta($post->ID, "推荐",true)):   ?>
              <div class="tuijian"> 
                <img src="<?php bloginfo('template_url'); ?>/images/new-tuijian.png" />
              </div>
              <?php else : ?>
              <?php endif; ?>  
                <a class="new_tu_img" href="<?php the_permalink() ?>" rel="lightbox[set_3]"> 
                  <span> <?php the_post_thumbnail('medium'); ?> </span> 
                </a>  
                <div class="shuom"> 
                  <h1><a href="<?php the_permalink() ?>">
                    <?php echo mb_strimwidth(strip_tags($post->post_title), 0,40,"... :"); ?>
                  </a></h1>
                  <a href="<?php the_permalink() ?>">    
                    <p><?php echo mb_strimwidth(strip_tags($post->post_content),24,40,"... :"); ?></p>
                  </a> 
                </div> 
            </li>
                 <?php endforeach; ?>
                 <?php endif; ?>  
          </ul>         

          <h1><a href="http://www.zjfdq.com/?page_id=10" title="" target="_blank">更多问题，请猛击这里</a> </h1>
             
    <div class="pager">   <?php par_pagenavi(); ?>  </div>     
     </div>
   </div>
    </div>
    <div class="rightmain2">
    <?php include_once("sidebar.php"); ?>
    </div>
   </div>
</div>




<?php get_footer(); ?>
