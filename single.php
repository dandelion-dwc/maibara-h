<?php get_header(); ?>
<section class="articleContainer">
  <div class="container cf">
    <div class="leftContent">
      <div class="articleWrapper">
        <?php if(have_posts()): while(have_posts()):the_post(); ?>

        <?php
        $cat = get_the_category();
        $catname = $cat[0]->cat_name; //カテゴリー名
        ?>
        <div class="titleZone">
          <h1><?php the_title(); ?></h1>
          <div class="addInfo">
            <span>掲載日： <?php the_date(); ?></span>
            <span>カテゴリー：<a href="letter.html"><?php echo $catname ?></a></span>
          </div>
        </div>
        <div class="contentZone">
          <?php the_content(); ?>
        </div>
        <?#php previous_post_link('%link','古い記事へ'); ?>
        <?#php next_post_link('%link','新しい記事へ'); ?>
      <?php endwhile; endif; ?>
      </div>
    </div>

    <div class="rightContent">
      <div class="archive">
        <h2>カテゴリー</h2>
        <ul>
          <li><a href="letter.html">お知らせ</a></li>
          <li><a href="letter.html">図書館だより</a></li>
          <li><a href="letter.html">保健だより</a></li>
          <li><a href="letter.html">進路指導課通信「まいしん」</a></li>
          <li><a href="obog.html">同窓会</a></li>
          <li><a href="shinro.html">進路指導課行事</a></li>
        </ul>
      </div>
      <div class="archive">
        <h2>アーカイブ</h2>
        <ul>
          <li><a href="letter.html">2018年度</a></li>
          <li><a href="letter.html">2017年度</a></li>
          <li><a href="letter.html">2016年度</a></li>
          <li>とりあえず全部図書館だよりに飛びます。</li>
        </ul>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>


<!-- メモ
お知らせのところだけを動的に変更する要素にして後の要素はベタ書き
基本的にtopページは変更の静的なページで問題なさそう
それ以外のページは動的に変更できるように
参考: https://ferret-plus.com/3774
 -->
