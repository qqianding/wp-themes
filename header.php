<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?> >
<meta http-equiv="X-UA-Compatible" content="IE=edge;chrome=1">
<meta name="renderer" content="webkit">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="keywords" content="<?php
 // 如果是首页和文章列表页面
    if(is_front_page() || is_home()) { 
    echo get_option('mytheme_keywords');

    // 如果是文章详细页面和独立页面
        } else if( is_page()) {

        echo   get_option('mytheme_keywords');
    
    } else if(is_single()) {
    
    $tags = wp_get_post_tags($post->ID);

foreach ($tags as $tag ) {

echo $keywords . $tag->name . ",";}
    
    // 如果是类目页面, 显示类目表述
    } else if(is_category()) {

    echo get_option('mytheme_keywords');
    
 
    // 如果是搜索页面, 显示搜索表述
    } else if(is_search()) {
        echo get_option('mytheme_keywords');
 
    // 如果是标签页面, 显示标签表述
    } else if(is_tag()) {
        echo get_option('mytheme_keywords');
 
    // 如果是日期页面, 显示日期范围描述
    } else if(is_date()) {
    echo get_option('mytheme_keywords');
 
    // 其他页面显示博客标题
    } else {
        echo get_option('mytheme_keywords');
    }
?>" />
 
<meta name="description" content="<?php

 // 如果是首页和文章列表页面
    if(is_front_page() || is_home()) { 
    echo get_option('mytheme_description');
 
    // 如果是文章详细页面和独立页面
    } else if(is_single() ) {
        if($post->post_excerpt) {
        echo  $post->post_excerpt;
    } else {
    
        echo  substr(strip_tags($post->post_content), 0, 220);
    }

    // 如果是类目页面, 显示类目表述
    } else if(is_category()) {

        echo   get_option('mytheme_description');
    
    // 如果是搜索页面, 显示搜索表述
    } else if(is_search()) {
        echo   get_option('mytheme_description');
 
    // 如果是标签页面, 显示标签表述
    } else if(is_tag()) {
        echo   get_option('mytheme_description');
 
    // 如果是日期页面, 显示日期范围描述
    } else if(is_date()) {
    echo   get_option('mytheme_description');
 
    // 其他页面显示博客标题
    } else {
        echo   get_option('mytheme_description');
    }
?>" />
    <?php if (is_search()) { ?>
       <meta name="robots" content="noindex, nofollow" /> 
    <?php } ?>

    <title>
           <?php
              if (function_exists('is_tag') && is_tag()) {
                 single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
              elseif (is_archive()) {
                 wp_title(''); echo ' Archive - '; }
              elseif (is_search()) {
                 echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
              elseif (!(is_404()) && (is_single()) || (is_page())) {
                 wp_title(''); echo ' - '; }
              elseif (is_404()) {
                 echo 'Not Found - '; }
              if (is_home()) {
                 bloginfo('name'); echo ' - '; bloginfo('description'); }
              else {
                  bloginfo('name'); }
              if ($paged>1) {
                 echo ' - page '. $paged; }
           ?>
    </title>
    <link rel="shortcut icon" href="<?php bloginfo('stylesheet_url'); ?>/favicon.ico" type="image/x-icon" />
    
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/pages.css" type="text/css" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
    <?php wp_head(); ?>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/script.js"></script>
    <script type="text/javascript"  charset="utf-8" src="<?php bloginfo('template_url'); ?>/js/lrscroll.js"></script> 

    
  </head>

<body <?php body_class(); ?>>
    
<div id="page-wrap">

<div id="header">
  
      <div id="" class="middle-m">
<?php if (get_option('mytheme_logo')!=""): ?>
<a class="logo"  href="<?php  bloginfo('url');?>" class="logo"> <img src="<?php echo get_option('mytheme_logo'); ?>" /> </a><!--logo-->
<?php else : ?>
<a class="logo"  href="<?php bloginfo('url'); ?> " class="logo"> <img src="<?php bloginfo('template_url'); ?>/images/logo.png" /></a><!--logo-->
<?php endif; ?>
  <div class="top_right">
    <ul>
    <li><a href="http://www.zjfdq.com/?page_id=94" title="" target="_blank">联系我们 </a></li>
    <li><a href="http://www.zjfdq.com/?page_id=481" title="" target="_blank"> | 人才招聘 </a></li>
    <li><a href="http://weibo.com/fengdequanzaojiao" title="" target="_blank"> | 关注微博 <img src="<?php bloginfo('template_url'); ?>/images/weibo.gif" alt="关注我们的微博"></a></li>
    <li class="h_weixin"><a href="#" title="微信" target="_blank"> | 扫扫微信 <img src="<?php bloginfo('template_url'); ?>/images/weixin.gif" alt="微信公众帐号"></a></li>
    <li><a href="http://wpa.qq.com/msgrd?v=3&amp;uin=157779790&amp;site=qq&amp;menu=yes" title="" target="_blank"> | QQ客服 <img src="<?php bloginfo('template_url'); ?>/images/qq.gif" alt="有事您Q我吧"></a></li>
    <li class="h_weixin_hover"><img src="<?php bloginfo('template_url'); ?>/images/weixin-hover.png" alt=""></li>
    </ul>
    <span>加盟热线：0579-8667-5400</span><p>课程咨询：0579-8667-5400</p>
  </div> 
          </div>
      </div><!-- / -->
  <div class="tou"> 
   <div id="navigation"><?php wp_nav_menu(array( 'theme_location' => 'header-menu' ) ); ?></div>
  </div><!--tou-->

</div><!--header-->



