<?php get_header(); ?>
<section class="articleContainer">
  <div class="container cf">
    <?php if(have_posts()): while(have_posts()):the_post(); ?>
    <div class="leftContent">
      <div class="articleWrapper">

        <?php
        $cat = get_the_category();
        $catname = $cat[0]->cat_name; //カテゴリー名
        ?>
        <div class="imgZone">
          <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>">
          <div class="overRay"></div>
          <h1><?php the_title(); ?></h1>
        </div>
        <div class="contentZone">
          <?php the_content(); ?>
        </div>
        <?#php previous_post_link('%link','古い記事へ'); ?>
        <?#php next_post_link('%link','新しい記事へ'); ?>
      </div>
    </div>

    <div class="rightContent">
      <?php
      $slug = explode('/', $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
      $navi = ($slug[1] == '') ? 'home' : $slug[1];
      $page = wc_get_page_by_slug($navi);
      $page_name = $page->post_title
      ?>
      <div class="archive">
        <h2><?php echo $page_name ?></h2>
        <ul>
          <?php wp_nav_menu( array('menu' => $navi )); ?>
        </ul>
      </div>
    </div>
  <?php endwhile; endif; ?>
  </div>
</section>
<?php get_footer(); ?>


<!-- メモ
お知らせのところだけを動的に変更する要素にして後の要素はベタ書き
基本的にtopページは変更の静的なページで問題なさそう
それ以外のページは動的に変更できるように
参考: https://ferret-plus.com/3774
 -->
