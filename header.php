<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>final-practice aboutus当院について</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans&family=Noto+Sans+JP&family=Noto+Serif+JP&family=Shippori+Mincho&display=swap" rel="stylesheet">

  <!-- reset.css modern-css-reset -->
  <link rel="stylesheet" href="https://unpkg.com/modern-css-reset/dist/reset.min.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/top.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/about.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/information.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/informatio-detail.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/voice.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/contact.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/contact-thanks.css">
  <?php wp_head(); ?>
</head>

<body>
  <header>
    <div class="logo">
      <a href="index.html">
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="logo">
      </a>
    </div>
    <!-- PC用ナビゲーション -->
    <nav class="nav-pc">
      <a href="<?php echo home_url(); ?>/front-page">ホーム</a>
      <a href="<?php echo home_url(); ?>/page-about">当院について</a>
      <a href="<?php echo home_url(); ?>/page-course">コース・料金</a>
      <a href="<?php echo home_url(); ?>/home">お知らせ</a>
      <a href="<?php echo home_url(); ?>/archive-voice">お客様の声</a>
      <a class="reservation" href="<?php echo home_url(); ?>/page-contact">ご予約・お問合せ</a>
    </nav>


    <!-- スマホ用メニューボタン -->
    <img class="menu-sp" src="images/button-menu.png" alt="ナビゲーションを開く">

    <!-- スマホ用ナビゲーション ハンバーガー -->
    <div class="nav-sp">
      <img class="close" src="images/button-close.png" alt="ナビゲーションを閉じる">
      <nav>
        <a class="logo-sp" href="index.html"><img src="images/logo.png" alt="トップページに戻る"></a>
        <p class="humberger-menu">メニュー</p>
        <a class="menu" href="<?php echo home_url(); ?>/front-page">ホーム</a>
        <a class="menu" href="<?php echo home_url(); ?>/page-about">当院について</a>
        <a class="menu" href="<?php echo home_url(); ?>/page-course">コース・料金</a>
        <a class="menu" href="<?php echo home_url(); ?>/home">お知らせ</a>
        <a class="menu" href="<?php echo home_url(); ?>/archive-voice">お客様の声</a>
        <div class="menu-contact-btn">
          <a class="menu" href="<?php echo home_url(); ?>/page-contact">ご予約・お問い合わせ</a>
        </div>
      </nav>
      <div class="hamburger-cover"></div>
    </div>
  </header>