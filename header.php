<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>final-practice</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Merriweather+Sans&family=Noto+Sans+JP&family=Noto+Serif+JP&family=Shippori+Mincho&display=swap"
    rel="stylesheet">
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.min.css">

  <link rel="stylesheet" href="https://unpkg.com/modern-css-reset/dist/reset.min.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/top.css">
  <?php wp_head(); ?>
</head>

<body>
  <header>
    <a href="index.html" class="logo">
      <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="logo">
    </a>

    <nav class="nav-pc top-nav-pc">
      <a href="index.html">ホーム</a>
      <a href="aboutus.html">当院について</a>
      <a href="course-price.html">コース・料金</a>
      <a href="information.html">お知らせ</a>
      <a href="voice.html">お客様の声</a>
      <a class="reservation" href="contact.html">ご予約・お問合せ</a>
    </nav>

    <img class="menu-sp" src="<?php echo get_template_directory_uri(); ?>/images/button-menu.png" alt="ナビゲーションを開く">
    <div class="nav-sp">
      <img class="close" src="<?php echo get_template_directory_uri(); ?>/images/button-close.png" alt="ナビゲーションを閉じる">
      <nav>
        <a class="logo-sp" href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="トップページに戻る"></a>
        <p class="humberger-menu">メニュー</p>
        <a class="menu" href="index.html">ホーム</a>
        <a class="menu" href="<?php echo get_template_directory_uri(); ?>/aboutus.html">当院について</a>
        <a class="menu" href="<?php echo get_template_directory_uri(); ?>/course-price.html">コース・料金</a>
        <a class="menu" href="<?php echo get_template_directory_uri(); ?>/information.html">お知らせ</a>
        <a class="menu" href="<?php echo get_template_directory_uri(); ?>/voice.html">お客様の声</a>
        <div class="menu-contact-btn">
          <a class="menu" href="<?php echo get_template_directory_uri(); ?>/contact.html">ご予約・お問い合わせ</a>
        </div>
      </nav>
      <div class="hamburger-cover"></div>
    </div>

  </header>