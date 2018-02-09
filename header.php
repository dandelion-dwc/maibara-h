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
        <h1 class="serif"><a href="index.html">米原高校</a></h1>
        <p class="only_sp">
          <label for="modal-trigger-full"><i class="fas fa-bars fa-5x"></i>  </label></p>
         <nav class="only_pc">
           <ul class="cf">
             <li><a href="news.html" class="nav_link">新着情報</a></li>
             <li><a href="about.html" class="nav_link">学校概要</a></li>
             <li><a href="study.html" class="nav_link">本校の教育</a></li>
             <li><a href="school_days.html" class="nav_link">学校生活</a></li>
             <li><a href="test.html" class="nav_link">中学生のみなさまへ</a></li>
             <li><a href="obog.html" class="nav_link">同窓会</a></li>
           </ul>
         </nav>
      </div>
    </header>

    <div class="modal only_sp">
      <input id="modal-trigger-full" class="checkbox" type="checkbox">
      <div class="modal-overlay">
        <label for="modal-trigger-full" class="o-close"></label>
        <div class="modal-wrap full">
          <label for="modal-trigger-full" class="close"><i class="fas fa-times fa-2x"></i></label>
          <ul class="grobal-menue">
            <li><a href="news.html" class="nav_link">新着情報</a></li>
            <li><a href="about.html" class="nav_link">学校概要</a></li>
            <li><a href="study.html" class="nav_link">本校の教育</a></li>
            <li><a href="school_days.html" class="nav_link">学校生活</a></li>
            <li><a href="test.html" class="nav_link">中学生のみなさまへ</a></li>
            <li><a href="obog.html" class="nav_link">同窓会</a></li>
            <li><label for="modal-trigger-full" class="custom-close">閉じる</label></li>
          </ul>
        </div>
      </div>
    </div>
