    <footer>
      <div class="container">
          <div class="cf">
            <div class="sitemap">
              <h3>訪問者別メニュー</h3>
              <ul class="parent-ul cf">
                <li class="parent-li">
                  <h4>中学生の皆様</h4>
                  <ul class="child-ul">
                    <?php wp_nav_menu( array('menu' => '中学生のみなさまへ' )); ?>
                  </ul>
                </li>
                <li class="parent-li">
                  <h4>一般・卒業生の皆様</h4>
                  <ul class="child-ul">
                    <?php wp_nav_menu( array('menu' => '在校生・保護者の皆様' )); ?>
                  </ul>
                </li>
                <li class="parent-li">
                  <h4>在校生・保護者の皆様</h4>
                  <ul class="child-ul">
                    <?php wp_nav_menu( array('menu' => '一般・卒業生の皆様' )); ?>
                  </ul>
                </li>
              </ul>
            </div>
          <div class="schoolInfo">
            <h2>米原高校</h2>
            <p class="address">〒521-0092 <br>
              滋賀県米原市西円寺1200番地</p>
            <p class="phone"><i class="fas fa-phone"></i> 0749-52-1601</p>
            <p class="fax"><i class="fas fa-fax"></i> 0749-52-1603</p>
          </div>
        </div>
        <div class="copyRight">
          <p>このHPは本校の卒業生も加わっているDandelionという学生企業に作成をお願いしました。</p>
          <p>© 2017 滋賀県立米原高校</p>
        </div>
      </div>
    </footer>
    <?php wp_footer(); ?>
  </body>
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</html>
