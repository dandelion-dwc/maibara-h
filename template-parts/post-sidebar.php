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
