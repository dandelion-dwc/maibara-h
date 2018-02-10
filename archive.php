<?php

get_header(); ?>

<section class="newsContainer">
  <div class="container cf">

    <h1 class="h1-title underbar"><?php echo get_the_archive_title(); ?></h1>
      <div class="leftContent">
        <div class="news">
          <?php if ( have_posts() ) : ?>
          <ul class="content">

      			<?php
      			// Start the Loop.
      			while ( have_posts() ) : the_post();

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
          <?php endwhile; else: ?>
            <li>まだ投稿がありません。</li>
          </ul>
        <?php endif; ?>
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

    <div class="rightContent">
      <div class="archive">
        <h2>カテゴリー</h2>
        <?php wp_nav_menu( array('menu' => 'カテゴリー' )); ?>
      </div>
      <div class="archive">
        <h2>アーカイブ</h2>
        <ul>
          <?php wp_get_archives('type=yearly'); ?>
        </ul>
      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>
