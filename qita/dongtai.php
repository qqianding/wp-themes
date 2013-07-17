      <div class="cp_index"><!-- 产品动态 -->
          <div class="cp_index_bt">
            <h1>Lumi  卢米电商的最新动态</h1> 
            <a  href=" 
            <?php $cat=get_category_by_slug('company-case'); //获取分类别名为 wordpress 的分类数据
              echo get_category_link( $cat );?>"> 
            </a>
          </div>

          <ul class="new_tu">
                <?php $cat=get_category_by_slug('company-case'); //获取分类别名为 wordpress 的分类数据?>
                     
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
      </div><!-- 产品动态 -->