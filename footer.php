<div id="footer">

<div class="footer_main">
  <div class="f_bq">

    <div class="last_foot">
    <b>电话：</b><span><?php echo get_option('mytheme_tell'); ?></span>
    <b>商务：</b><span><?php echo get_option('mytheme_mail'); ?></span>
    <b>联系地址：</b><span><?php echo get_option('mytheme_dizhi'); ?></span>
    <p>Copyright © <?php echo date("Y"); echo " "; bloginfo('name'); ?>&nbsp; &nbsp;
    <?php if (get_option('mytheme_beian')!=""): ?>
    <?php echo get_option('mytheme_beian'); ?>
    <?php else : ?>
    浙ICP备xx号 </p>
    <?php endif; ?>      
    
    </div>

    
    <div class="f_links">
      <p><a href="http://www.zjfdq.com/sitemap.xml" target="_blank">网站地图</a> | <a href="http://www.zjfdq.com/?page_id=94" target="_blank">联系我们</a> | <a href="http://www.zjfdq.com/?page_id=490" target="_blank">服务条款</a> | <a href="http://www.zjfdq.com/?page_id=478" target="_blank">隐私声明</a> | <a href="http://www.zjfdq.com/ask/" target="_blank">园长论坛</a> | <a href="http://www.zjfdq.com/?page_id=484" target="_blank">建议与意见</a></p>
    <li><h1>友情链接:</h1></li>
    <?php wp_list_bookmarks('title_li=&category=&categorize=0&orderby=rand&limit=11'); ?>
    </div>

</div>
</div>
<script type="text/javascript">
$(document).ready(function(){
    $(".h_weixin").mouseover(function(){
        $(".h_weixin_hover").css("display","block");
    });
    $(".h_weixin").mouseout(function(){
        $(".h_weixin_hover").css("display","none");
    })
})    
</script>
</div>
<?php wp_footer(); ?>
<!-- Don't forget analytics -->
</body>
</html>