<?php
/* Template Name: Index Template */
get_header();
?>
<div class="main">
    <div id="mainvisual">
      <?php echo do_shortcode("[crellyslider alias=home-page-slider] "); ?>
    </div>
    <div class="content">
      <div class="contentLeft">
        <!--ban tin trung tam-->
        <div id="jvca-news">
          <h2 class="block-title"><i class="fa fa-bullhorn icon_title" aria-hidden="true"></i>BẢN TIN TRUNG TÂM</h2>
          <?php $popular_posts_query = new WP_Query( array(
              'category_name' => 'thong-tin-trung-tam',
              'showposts' => 4
            ) );
          ?>
            <?php if ( $popular_posts_query->have_posts() ) : $popular_posts_query->the_post(); ?>
              <article class="feature-post module-item">
                <figure>
                  <?php
                    if(has_post_thumbnail()){
                  ?>
                      <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                        <?php echo get_the_post_thumbnail(get_the_ID(),'newlarge-385x209'); ?>
                      </a>
                  <?php
                    }
                  ?>
                </figure>
                <h3 class="post-title">
                  <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                </h3>
                <div class="entry-content">
                  <p><?php
                  if(has_excerpt()){
                    echo the_excerpt();
                  }else{
                    echo mb_substr(the_content(),0,170,'UTF-8').'...';
                  }
                  ?></p>
                </div>
                <a class="more btnSquare" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="alternate"><span>Xem thêm</span></a>
              </article>

              <section class="more-post module-item newsList">
              <?php while($popular_posts_query->have_posts()) : $popular_posts_query->the_post(); ?>
                <article>
                  <figure>
                    <?php
                      if(has_post_thumbnail()){
                    ?>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                          <?php echo get_the_post_thumbnail(get_the_ID(),'nanosmall'); ?>
                        </a>
                    <?php
                      }
                    ?>
                  </figure>
                  <h4 class="post-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
                  <div class="entry-content">
                    <p>
                      <?php
                      if(has_excerpt()){
                        echo the_excerpt();
                      }else{
                        echo mb_substr(the_content(),0,170,'UTF-8').'...';
                      }
                      ?>
                    </p>
                  </div>
                </article>
              <?php endwhile; ?>

              </section>
            <?php else: ?>
              <?php echo 'sorry, no post not found'; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
          <div class="clearfix"></div>
        </div>
        <!--ban tin trung tam-->
        <!-- tuyen sinh -->
        <div id="jvca-admissions">
          <h2 class="block-title"><i class="fa fa-book icon_title" aria-hidden="true"></i>TUYỂN SINH</h2>
          <section class="admissions-list">
            <?php $admiss_query = new WP_Query(array(
              'category_name' => 'thong-tin-tuyen-sinh',
              'showposts' => 8
            )); ?>
            <?php if ( $admiss_query->have_posts() ): ?>

              <?php while($admiss_query->have_posts()) : $admiss_query->the_post(); ?>
                <article>
                  <figure>
                    <?php if(has_post_thumbnail()): ?>
                      <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                        <?php echo get_the_post_thumbnail(get_the_ID(),'newmedium-200x124'); ?>
                      </a>
                    <?php else: ?>
                      <img class="attachment-post-thumbnail" src="<?php  echo get_template_directory_uri();?>/images/no_image.png" alt="no image">
                    <?php endif;?>
                  </figure>
                  <h3 class="post-title">
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?>
                      <span class="new">
                        <?php
                          $post_time = get_the_time('U');
                          $last_week = time() - (7 * 24 * 60 * 60);
                          if($post_time > $last_week):
                        ?>
                          <img src="<?php echo get_template_directory_uri(); ?>/images/new.gif" alt="<?php the_title_attribute(); ?>">
                        <?php endif; ?>
                      </span>
                    </a>
                  </h3>
                  <div class="post_date"><?php the_time('d/m/Y g:i'); ?></div>
                  <div class="entry-content">
                    <p><?php
                    if(has_excerpt()){
                      echo the_excerpt();
                    }else{
                      echo mb_substr(the_content(),0,170,'UTF-8').'...';
                    }
                    ?></p>
                  </div>
                </article>
              <?php endwhile; ?>

            <?php
              else:
                echo 'sorry, no post not found';
              endif;
            ?>
            <?php wp_reset_postdata(); ?>
          </section>
        </div>
        <!-- tuyen sinh -->
        
      </div>
      <div class="sidebar">
        <?php get_sidebar(); ?>
      </div>
      <div class="clearfix"></div>
    </div>
    <!-- comment -->
    <?php //echo do_shortcode("[nuitruc-comment]"); ?>
    <!-- comment -->
    <div class="sidebar-widget">
  		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
  	</div>
</div>
<?php
get_footer();
?>
