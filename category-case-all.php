<?php get_header(); ?>

<div class="maim_pages">

   <div class="main3" style=" background: url(<?php bloginfo('template_url'); ?>/images/case_bj.png);>"> 

    <ul class="all_nav2">
          <li><a href="<?php  bloginfo('url');?>">首页</a></li>
        <li><a href=" <?php 
$cat=get_category_by_slug('company-case'); //获取分类别名为 wordpress 的分类数据


                      echo get_category_link( $cat );?>"></a>&nbsp;><a><?php wp_title(''); ?></a></li>
     </ul>
     <div class="chicun2">
  <?php if (get_option('mytheme_lx_cititle')!=""): ?>
   <img src="<?php echo get_option('mytheme_lx_cititle'); ?>" />
    <?php else : ?>   
   <img src="<?php bloginfo('template_url'); ?>/images/pages/anli-fuwu.jpg" />
     <?php endif; ?>
     </div>
   <ul class="new_tu" style="width:900px;">
       
          <?php
$cat=get_category_by_slug('company-case'); //获取分类别名为 wordpress 的分类数据

?>
             
             
<?php if( $posts ) : ?>     
<?php foreach( $posts as $post ) : setup_postdata( $post ); ?>

   <li>
   <?php if(get_post_meta($post->ID, "推荐",true)):   ?>
       <div class="tuijian"> <img src="<?php bloginfo('template_url'); ?>/images/new-tuijian.png" /></div>
       <?php else : ?>
        <?php endif; ?>  
        <a class="new_tu_img" href="<?php the_permalink() ?>"  rel="lightbox[set_3]" > <span> 

<?php the_post_thumbnail('medium'); ?>

 </span> </a>  
        <div class="shuom"> <h1><a href="<?php the_permalink() ?>"><?php echo mb_strimwidth(strip_tags($post->post_title), 0,40,"... :"); ?></a></h1>
         <p><?php echo mb_strimwidth(strip_tags($post->post_content), 24,40,"... :"); ?></p> </div> 
         </li>

    <?php endforeach; ?>
    
    <?php else : ?>
       
        <li>
        <div class="tuijian"> <img src="<?php bloginfo('template_url'); ?>/images/new-tuijian.png" /></div>
        <a class="new_tu_img" href="<?php bloginfo('template_url'); ?>/images/ohters/index_25.gif"  rel="lightbox[set_3]" > <span> <img src="<?php bloginfo('template_url'); ?>/images/ohters/index_25.gif" /></span> </a>  
       <div class="shuom"><h1><a>产品标题</a></h1>
       <p>这里自动截取您的产品简介，可以让用户在首页看到从而点击...</p>
       
       </div> 
         </li>
         
       
        <?php endif; ?>
      </ul>
      <div class="pager">   <?php par_pagenavi(); ?>  </div>



<div class="clear"></div>
<div class="al_kehu">
<h3>思考与设计的方法</h3>
<p>
我们坚持与客户一起思考，用设计的方法解决问题，发现机会。<br />
我们简单有效的设计方法历经众多本地与国际项目检验，针对不同的需求演绎多种可能。
</p>
<img src="<?php bloginfo('template_url'); ?>/images/kehu/02.gif" />

<h3>每个梦想，我们鼎力相助</h3>
<p>我们与全球最具影响力的品牌合作，也全力协助新兴品牌。</p>
<p>我们帮助客户实现用户体验价值突破。</p>
<img src="<?php bloginfo('template_url'); ?>/images/kehu/03.gif" />
<dl>
<dt>移动设备</dt>
<dd>HTC</dd>
<dd>SHARP</dd>
<dd>华为</dd>
<dd>华硕</dd>
<dd>魅族</dd>
<dd>OPPO</dd>
<dd>步步高</dd>
<dd>中兴</dd>
<dd>联想</dd>
<dd>酷派</dd>
<dd>联发科</dd>
<dd>中国电信</dd>
<dd>Creative</dd>
<dd>e人e本</dd>
</dl>
<dl>
<dt>互联网</dt>
<dd>Google</dd>
<dd>新浪</dd>
<dd>淘宝网</dd>
<dd>阿里巴巴</dd>
<dd>腾讯</dd>
<dd>网易</dd>
<dd>优酷</dd>
<dd>人人网</dd>
<dd>奇虎360</dd>
<dd>搜狐</dd>
<dd>盛大</dd>
<dd>VeryCD</dd>
<dd>POCO</dd>
<dd>风行</dd>
<dd>Cnbeta</dd>
<dd>21CN</dd>
</dl>
<dl>
<dt>软件开发</dt>
<dd>Microsoft</dd>
<dd>HP</dd>
<dd>Autodesk</dd>
<dd>Opera</dd>
<dd>Firefox</dd>
<dd>搜狗</dd>
<dd>金山软件</dd>
<dd>Foxmail</dd>
<dd>中科大洋</dd>
<dd>脱兔</dd>
<dd>超级兔子</dd>
<dd>Avega Systems</dd>
<dd>UUSEE</dd>
<dd>Articulate</dd>
<dd>Incredimail</dd>
<dd>Cibecs</dd>
<dd>Iomatic</dd>
</dl>
<dl>
<dt>汽车</dt>
<dd>BMW</dd>
<dd>荣威汽车</dd>
<dd>大陆汽车</dd>
<dd>长安汽车</dd>
<dd>Land Rover</dd>
<dd>凯立德</dd>
</dl>
<dl>
<dt>移动应用</dt>
<dd>Weico</dd>
<dd>新浪微博</dd>
<dd>掌中新浪</dd>
<dd>携程旅游</dd>
<dd>淘宝网</dd>
<dd>旺信</dd>
<dd>支付宝</dd>
<dd>蘑菇街</dd>
<dd>捕鱼达人</dd>
<dd>鲜果阅读</dd>
<dd>蚂蜂窝</dd>
<dd>触宝拨号</dd>
<dd>酷云</dd>
<dd>天翼空间</dd>
<dd>MSN四方</dd>
<dd>金山词霸</dd>
<dd>365日历</dd>
<dd>个信</dd>
<dd>财金汇</dd>
</dl>
<dl style="width: 180px;">
<dt>家电 / 物流 / 安全存储 / 医疗 等</dt>
<dd>苏宁</dd>
<dd>中国航信</dd>
<dd>顺丰快递</dd>
<dd>中国电信</dd>
<dd>海信</dd>
<dd>Technicolor</dd>
<dd>创维</dd>
<dd>长虹</dd>
<dd>九阳</dd>
<dd>华为赛门铁克</dd>
<dd>全时</dd>
</dl>
</div>

   </div>
</div>
<?php get_footer(); ?>
