  <!--imgPlay-->
       <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/xuant.js"></script>
   <div class="jiao">
   <DIV id="imgPlay">
<UL class="imgs" id="actor">
<?php if (get_option('mytheme_about_img6')!=""): ?>
  <LI><a href="<?php echo get_option('mytheme_about_url6'); ?>"> <img src="<?php echo get_option('mytheme_about_img6'); ?>" alt="<?php echo get_option('mytheme_about_tit6'); ?>" /> </a></LI>  
 <?php else : ?>    
 <LI><img src="<?php bloginfo('template_url'); ?>/images/jiao2_05.gif" /></LI>
 <LI><img src="<?php bloginfo('template_url'); ?>/images/jiao1_05.gif"  /></LI>
 <LI> <img src="<?php bloginfo('template_url'); ?>/images/jiao2_05.gif"  /></LI>
 <LI><img src="<?php bloginfo('template_url'); ?>/images/jiao1_05.gif"  /></LI>
  <LI><img src="<?php bloginfo('template_url'); ?>/images/jiao2_05.gif"  /></LI>
  <?php endif; ?>
 <?php if (get_option('mytheme_about_img7')!=""): ?>
   <LI> <a href="<?php echo get_option('mytheme_about_url7'); ?>"><img src="<?php echo get_option('mytheme_about_img7'); ?>" alt="<?php echo get_option('mytheme_about_tit7'); ?>" /></a></LI>  
 <?php else : ?>  
<?php endif; ?>
  <?php if (get_option('mytheme_about_img8')!=""): ?>
   <LI> <a href="<?php echo get_option('mytheme_about_url8'); ?>"><img src="<?php echo get_option('mytheme_about_img8'); ?>" alt="<?php echo get_option('mytheme_about_tit8'); ?>" /></a></LI>  
 <?php else : ?>  
 <?php endif; ?>
  <?php if (get_option('mytheme_about_img9')!=""): ?>
   <LI> <a href="<?php echo get_option('mytheme_about_url9'); ?>"><img src="<?php echo get_option('mytheme_about_img9'); ?>" alt="<?php echo get_option('mytheme_about_tit9'); ?>" /></a></LI>  
 <?php else : ?>  
 <?php endif; ?>
  <?php if (get_option('mytheme_about_img0')!=""): ?>
   <LI> <a href="<?php echo get_option('mytheme_about_url0'); ?>"><img src="<?php echo get_option('mytheme_about_img0'); ?>" alt="<?php echo get_option('mytheme_about_tit0'); ?>" /></a></LI>  
 <?php else : ?>  
 <?php endif; ?>
</UL>
<DIV class=prev><img src="<?php bloginfo('template_url'); ?>/images/prev.png" /></DIV>
<DIV class=next><img src="<?php bloginfo('template_url'); ?>/images/next.png" /></DIV></DIV> 
   </div>
   <!--imgPlay-->
   <?php if (get_option('mytheme_about_tit1')!=""): ?>
