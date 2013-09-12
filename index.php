
<?php get_header(); ?>
 <!--ijaoover-->
<div class="maim">
   <div class="main2">

     <div class="sadnn">
       <div class="news_in">
        <div id="s3" class="scrollDiv">
          <ul>
          <?php $cat=get_category_by_slug('company-news'); //获取分类别名为 wordpress 的分类数据?>
          <?php $posts = get_posts( "category=$cat->term_id&numberposts=12" ); ?>
          <?php if( $posts ) : ?>     
          <?php foreach( $posts as $post ) : setup_postdata( $post ); ?>
          <li>
            <a href="<?php the_permalink() ?>">
              <h1><b>最新动态:</b><?php echo mb_strimwidth(strip_tags($post->post_title), 0,80,"... :"); ?>:</h1>
              <p><?php echo mb_strimwidth(strip_tags($post->post_content), 0,35,"..."); ?></p>
            </a>
          </li>
          <?php endforeach; ?>
          <?php else : ?>
            <li>
              <a href="<?php  bloginfo('url');?>/sample/"><h1><b>NEWS:</b>上下滚动的……</h1>
              <p>新闻...</p>
              </a>
            </li>
          <?php endif; ?>  
          </ul>
        </div><!--scrollDiv-->
        <span id="btn2">下一条>></span> 	
       </div><!--news_in-->

       <div class="seach_header">
        <form action="<?php bloginfo('siteurl'); ?>" id="searchform" method="get">
        <div>
            <label for="s" class="screen-reader-text">Search for:</label>
            <input type="text" onfocus="if (value =='从这里搜索，按enter开始'){value =''}" onblur="if (value ==''){value='从这里搜索，按enter开始'}" id="s" name="s" value="从这里搜索，按enter开始" />
        </div>
        </form>
       </div><!--seach_header-->
     </div><!--sadnn-->

<!--imgPlay-->
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/xuant.js"></script>
<div class="jiao">
  <DIV id="imgPlay">
    <ul class="imgs" id="actor">
        <?php if (get_option('mytheme_about_img6')!=""): ?>
        <li><a href="<?php echo get_option('mytheme_about_url6'); ?>"> <img src="<?php echo get_option('mytheme_about_img6'); ?>" alt="<?php echo get_option('mytheme_about_tit6'); ?>" /> </a></li>  
        <?php else : ?>    
        <li><img src="<?php bloginfo('template_url'); ?>/images/jiao2_05.gif" /></li>
        <li><img src="<?php bloginfo('template_url'); ?>/images/jiao1_05.gif"  /></li>
        <li><img src="<?php bloginfo('template_url'); ?>/images/jiao2_05.gif"  /></li>
        <li><img src="<?php bloginfo('template_url'); ?>/images/jiao1_05.gif"  /></li>
        <li><img src="<?php bloginfo('template_url'); ?>/images/jiao2_05.gif"  /></li>
        <?php endif; ?>
        <?php if (get_option('mytheme_about_img7')!=""): ?>
        <li> <a href="<?php echo get_option('mytheme_about_url7'); ?>"><img src="<?php echo get_option('mytheme_about_img7'); ?>" alt="<?php echo get_option('mytheme_about_tit7'); ?>" /></a></li>  
        <?php else : ?>  
        <?php endif; ?>
        <?php if (get_option('mytheme_about_img8')!=""): ?>
        <li> <a href="<?php echo get_option('mytheme_about_url8'); ?>"><img src="<?php echo get_option('mytheme_about_img8'); ?>" alt="<?php echo get_option('mytheme_about_tit8'); ?>" /></a></li>  
        <?php else : ?>  
        <?php endif; ?>
        <?php if (get_option('mytheme_about_img9')!=""): ?>
        <li> <a href="<?php echo get_option('mytheme_about_url9'); ?>"><img src="<?php echo get_option('mytheme_about_img9'); ?>" alt="<?php echo get_option('mytheme_about_tit9'); ?>" /></a></li>  
        <?php else : ?>  
        <?php endif; ?>
        <?php if (get_option('mytheme_about_img0')!=""): ?>
        <li> <a href="<?php echo get_option('mytheme_about_url0'); ?>"><img src="<?php echo get_option('mytheme_about_img0'); ?>" alt="<?php echo get_option('mytheme_about_tit0'); ?>" /></a></li>  
       <?php else : ?>  
       <?php endif; ?>
    </UL>
    <DIV class=prev><img src="<?php bloginfo('template_url'); ?>/images/prev.png" /></DIV>
    <DIV class=next><img src="<?php bloginfo('template_url'); ?>/images/next.png" /></DIV>
  </DIV> 
</div>
<!--imgPlay-->
<?php if (get_option('mytheme_about_tit1')!=""): ?>

<!--guanyu-->
<div class="guanyu">
  <ul class="pinpai">
    <li class="m_title">
    <span><?php echo get_option('mytheme_about_tit1'); ?></span>
    <a href="<?php $name = 'about-us'; //page别名
    global $wpdb;
    $page_id = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_name = '$name'");
    echo get_page_link( $page_id );?>" title="">详细</a>
    </li>
    <li>
    <p><?php echo get_option('mytheme_about_text1'); ?></p>
    <a href="<?php $name = 'about-us'; //page别名
    global $wpdb;
    $page_id = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_name = '$name'");
    echo get_page_link( $page_id );?>"><img src="<?php bloginfo('template_url'); ?>/images/pinpai.jpg"/></a>
    </li>
  </ul><!-- / -->
  <ul class="xinwen">
    <li class="m_title">
    <span>新闻资讯</span> 
    <a href="<?php $cat=get_category_by_slug('company-news'); //获取分类别名为 wordpress 的分类数据
    echo get_category_link( $cat );?>" title="">更多</a>
    </li>
    <li class="m_neirong">

    <?php $cat=get_category_by_slug('company-news');?>
    <?php $posts = get_posts( "category=$cat->term_id&numberposts=8" ); ?>
    <?php if( $posts ) : ?>     
    <?php foreach( $posts as $post ) : setup_postdata( $post ); ?>
    <a href="<?php the_permalink() ?>" title="<?php echo mb_strimwidth(strip_tags($post->post_content),18,60,"... :"); ?>">    
    <?php echo mb_strimwidth(strip_tags($post->post_content),8,28,"..."); ?>
    </a>
    <?php endforeach; ?>
    <?php endif; ?>   
    </li><a href="<?php $cat=get_category_by_slug('company-news');
        echo get_category_link( $cat );?>">
    <img src="<?php bloginfo('template_url'); ?>/images/xinwen.jpg"/></a>
  </ul><!-- / -->
  <ul class="kecheng">
    <li class="m_title">
    <span>示范课程</span>
    <a href="<?php $cat=get_category_by_slug('ke-cheng'); 
    echo get_category_link( $cat );?>" title="">更多</a>
    </li>
    <li class="m_neirong">

    <?php $cat=get_category_by_slug('ke-cheng');?>
    <?php $posts = get_posts( "category=$cat->term_id&numberposts=8" ); ?>
    <?php if( $posts ) : ?>     
    <?php foreach( $posts as $post ) : setup_postdata( $post ); ?>
      <a href="<?php the_permalink() ?>" title="<?php echo mb_strimwidth(strip_tags($post->post_content),18,60,"... :"); ?>">    
      <?php echo mb_strimwidth(strip_tags($post->post_content),8,28,"..."); ?>
      </a>
    <?php endforeach; ?>
    <?php endif; ?> 
    </li><a href="<?php $cat=get_category_by_slug('ke-cheng');
        echo get_category_link( $cat );?>">
    <img src="<?php bloginfo('template_url'); ?>/images/kecheng.jpg"/></a>
  </ul><!-- / -->
<?php else : ?>
<?php endif; ?> 
</div><!--guanyu-->

         <!--dongtai-->
         <!--kehuhuizong-->

<div id="" class="zj_fenlei">
  <ul id="" class="">
    <li class="fsll">
      <a href=""></a></li>
    <li class="kctx">
      <a href=""></a></li>
    <li class="yybm">
      <a href="http://zjfdq.com/?page_id=12" target="_blank"></a></li>
    <li class="jchd">
      <a href="http://zjfdq.com/?cat=4" target="_blank"></a></li>
    <li class="yhtc">
      <a href=""></a></li>
    <li class="jzdy">
      <a href="http://zjfdq.com/?cat=6" target="_blank"></a></li>

  </ul><!-- / -->
</div><!-- bk_fenlei -->
  </div>

</div>
<div class="clear"></div><!-- / -->
<?php get_footer(); ?>
