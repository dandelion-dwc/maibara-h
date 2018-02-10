<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>米原高校</title>
    <!-- Compiled and minified CSS -->
     <?php
        wp_enqueue_style(
          'base-style',
          esc_url( get_stylesheet_uri() ),
          array(),
          '1.0',
          'all'
        );
     ?>
     <?php wp_head(); ?>
  </head>
  <body>
    <header>
      <div class="container cf">
        <h1 class="serif"><a href="<?php echo esc_url(get_home_url()); ?>">米原高校</a></h1>
        <p class="only_sp">
          <label for="modal-trigger-full"><i class="fas fa-bars fa-5x"></i>  </label></p>
         <nav class="only_pc">
           <?php wp_nav_menu( array('menu' => 'ヘッダー' )); ?>
         </nav>
      </div>
    </header>

    <div class="modal only_sp">
      <input id="modal-trigger-full" class="checkbox" type="checkbox">
      <div class="modal-overlay">
        <label for="modal-trigger-full" class="o-close"></label>
        <div class="modal-wrap full">
          <label for="modal-trigger-full" class="close"><i class="fas fa-times fa-2x"></i></label>
          <?php wp_nav_menu( array('menu' => 'ヘッダー', 'menu_class' => 'grobal-menue' )); ?>
          <li><label for="modal-trigger-full" class="custom-close">閉じる</label></li>
        </div>
      </div>
    </div>
