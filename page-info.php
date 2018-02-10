<?php get_header(); ?>
<section class="newsContainer">
  <div class="container cf">
    <h1 class="h1-title underbar">新着情報</h1>
    <div class="leftContent">
      <div class="news">
        <ul class="content">
          <?php
            $paged = (int) get_query_var('paged');
            $args = array(
            	'posts_per_page' => 10,
            	'paged' => $paged,
            	'orderby' => 'post_date',
            	'order' => 'DESC',
            	'post_type' => 'post',
            	'post_status' => 'publish'
            );
            $the_query = new WP_Query($args);
            if ( $the_query->have_posts() ) :
            	while ( $the_query->have_posts() ) : $the_query->the_post();
          ?>
          <?php
          $cat = get_the_category();
          $catname = $cat[0]->cat_name; //カテゴリー名
          $date = get_the_date();
          ?>
          <li>
            <a href="<?php the_permalink(); ?>" class="cf">
              <div class="tag">
                <span class="tag_content"><?php echo $catname ?></span>
                <span class="only_sp"><?php echo $date ?></span>
              </div>
              <div class="detail">
                <p class="only_pc">
                  <i class="fas fa-calendar-alt"></i>
                  <?php echo $date ?>
                </p>
                <p class="longString">
                  <?php the_title(); ?>
                </p>
              </div>
            </a>
          </li>
          <?php endwhile; endif; ?>
        </ul>
        <div class="pagenation">
          <?php
          if ($the_query->max_num_pages > 1) {
          	echo paginate_links(array(
          		'base' => get_pagenum_link(1) . '%_%',
          		'format' => 'page/%#%/',
          		'current' => max(1, $paged),
          		'total' => $the_query->max_num_pages
          	));
          }
          ?>
        </div>
      </div>
    </div>

    <?php get_template_part( 'template-parts/post-sidebar', 'page' ); ?>
  </div>
</section>

<?php get_footer(); ?>
