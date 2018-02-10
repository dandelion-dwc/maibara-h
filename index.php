<?php get_header(); ?>
    <div class="mainPic">
      <img src="<?php echo esc_url(get_template_directory_uri()).'/image/main_pic.jpg' ?>" alt="メイン画像">
    </div>

    <section class="news">
      <h1 class="h1-title underbar">新着情報</h1>
      <ul class="content">
        <?php
          $paged = (int) get_query_var('paged');
          $args = array(
          	'posts_per_page' => 3,
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
      <div class="inlineFlexWrapper">
        <a href="<?php echo esc_url(get_home_url()).'/info' ?>" class="about-btn">さらに見る</a>
      </div>
    </section>

    <section id="menuePerViwer">
      <div class="container">
        <h1 class="h1-title underbar">訪問者別メニュー</h1>
        <div class="blockFlex">
          <div class="shadow">
            <h2 class="first">中学生のみなさまへ</h2>
            <ul>
              <?php wp_nav_menu( array('menu' => 'for-junior' )); ?>
            </ul>
          </div>
          <div class="shadow">
            <h2 class="second">在校生・保護者の皆様</h2>
            <ul>
              <li class="child-li"><a href="#">感染病（伝染病）の出席停止</a></li>
              <li class="child-li"><a href="#">特別警報・暴風警報の発令時</a></li>
              <li class="child-li"><a href="#">奨学金のご案内</a></li>
            </ul>
          </div>
          <div class="shadow">
            <h2 class="third">一般・卒業生の皆様</h2>
            <ul>
              <li class="child-li"><a href="#">各種証明書について</a></li>
              <li class="child-li"><a href="#">転・編入学情報</a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section id="about">
      <div class="gradient"></div>
      <div class="img">
        <div class="imgWrapper">
          <img src="<?php echo esc_url(get_template_directory_uri()).'/image/normal.jpg' ?>">
        </div>
      </div>
      <div class="container cf">
        <div class="left">
        </div>
        <div class="right">
          <h1 class="h1-title serif">清純敦厚</h1>
          <p>開校以来、米原高校の教育の基本となっています。 <br>
            「敦厚」とは「真心があって人情深い」ことです。 <br>
            一人ひとりの個性と能力を伸ばし、 <br>
            生徒・保護者の期待に応える教育を目指しています。
          </p>
          <div class="inlineFlexWrapper">
            <a href="<?php echo esc_url(get_home_url()).'/about' ?>" class="about-btn">学校概要</a>
          </div>
        </div>
      </div>
    </section>

    <section id="curse">
      <div class="container">
        <h1 class="h1-title underbar">コース</h1>
        <ul class="cf blockFlex">
          <li>
            <a href="<?php echo esc_url(get_home_url()).'/education/normal-course' ?>">
              <div class="innerWrapper">
                <div class="img">
                  <div>
                    <img src="<?php echo esc_url(get_template_directory_uri()).'/image/normal.jpg' ?>" alt="">
                    <div class="overRay"></div>
                  </div>
                </div>
                <div class="box">
                  <div class="boxInner">
                    <p class="inner"><span class="text">普通科 普通類型</span></p>
                  </div>
                </div>
              </div>
            </a>
          </li>
          <li>
            <a href="<?php echo esc_url(get_home_url()).'/education/english-course' ?>">
              <div class="innerWrapper">
                <div class="img">
                  <div>
                    <img src="<?php echo esc_url(get_template_directory_uri()).'/image/english_sample.jpg' ?>" alt="">
                    <div class="overRay"></div>
                  </div>
                </div>
                <div class="box">
                  <div class="boxInner">
                    <p class="inner"><span class="text">普通科 英語コース</span></p>
                  </div>
                </div>
              </div>
            </a>
          </li>
          <li>
            <a href="<?php echo esc_url(get_home_url()).'/education/science-course' ?>">
              <div class="innerWrapper">
                <div class="img">
                  <div>
                    <img src="<?php echo esc_url(get_template_directory_uri()).'/image/risuka.jpg' ?>" alt="">
                    <div class="overRay"></div>
                  </div>
                </div>
                <div class="box">
                  <div class="boxInner">
                    <p class="inner"><span class="text">理数科</span></p>
                  </div>
                </div>
              </div>
            </a>
          </li>
        </ul>
      </div>
      <div class="background"></div>
    </section>


    <section id="access">
      <h1 class="h1-title underbar">アクセス</h1>
      <div class="container cf">
        <div class="map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3931.7828622319794!2d136.29710720937794!3d35.31987640801778!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x804345b95e1f0c27!2z5ruL6LOA55yM56uL57Gz5Y6f6auY562J5a2m5qCh!5e0!3m2!1sja!2sjp!4v1517552117972" width="100%" height="299" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="accessInfo">
          <table>
            <tr>
              <th>徒歩</th>
              <td>JR・近江鉄道米原駅(東口) から 約15分</td>
            </tr>
            <tr>
              <th>バス</th>
              <td>JR・近江鉄道米原駅(東口)から 約5分</td>
            </tr>
            <tr>
              <th>タクシー</th>
              <td>JR・近江鉄道米原駅(東口)から 約5分</td>
            </tr>
            <tr>
              <th>自動車</th>
              <td>名神高速道路・北陸自動車道 米原JCT から 約5分</td>
            </tr>
          </table>
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
