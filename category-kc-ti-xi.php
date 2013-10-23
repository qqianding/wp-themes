<?php get_header(); ?>

   <div class="main5"> 
    <div class="chicun2">
    <?php if (get_option('mytheme_lx_title')!=""): ?>
   <img src="<?php echo get_option('mytheme_lx_title'); ?>" />
    <?php else : ?>  <a href="http://zjfdq.com/?page_id=12"> 
   <img src="<?php bloginfo('template_url'); ?>/images/pages/kc-ti-xi.jpg" /></a>
     <?php endif; ?>
     </div>
<div id="" class="kc-ti-xi">


<ul class="new_tu h_tx">
 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
       <li>
            <?php if(get_post_meta($post->ID, "推荐",true)):   ?>
              <div class="tuijian "> 
                <img src="<?php bloginfo('template_url'); ?>/images/new-tuijian.png" />
              </div>
              <?php else : ?>
              <?php endif; ?>  
                <a class="h_tx_img" href="<?php the_permalink() ?>" rel="lightbox[set_3]">
                  <span> <?php the_post_thumbnail('medium'); ?> </span> 
                </a>  
                <div class="h_tx_title"> 
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

  
</div><!-- kc-ti-xi/ -->
</div>

<?php get_footer(); ?>
