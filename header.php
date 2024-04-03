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

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.min.css">

  <!-- reset.css modern-css-reset -->
  <link rel="stylesheet" href="https://unpkg.com/modern-css-reset/dist/reset.min.css" />
  <?php if(is_front_page()) { ?>
        <link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet ">
        <link href="<?php echo get_template_directory_uri(); ?>/css/top.css" rel="stylesheet ">
        <?php }?>
  <?php if(is_page('about')) { ?>
        <link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet ">
        <link href="<?php echo get_template_directory_uri(); ?>/css/about.css" rel="stylesheet ">
        <?php }?>
  <?php if(is_page('course')) { ?>
        <link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet ">
        <link href="<?php echo get_template_directory_uri(); ?>/css/course-price.css" rel="stylesheet ">
        <?php }?>
  <?php if(is_home()) { ?>
        <link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet ">
        <link href="<?php echo get_template_directory_uri(); ?>/css/information.css" rel="stylesheet ">
        <?php }?>
  <?php if(is_archive()) { ?>
        <link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet ">
        <link href="<?php echo get_template_directory_uri(); ?>/css/voice.css" rel="stylesheet ">
        <?php }?>
  <?php if(is_single()) { ?>
        <link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet ">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/informatio.css">  
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/informatio-detail.css">
        <?php }?>
    <?php if(is_page('contact')) { ?>
        <link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet ">   
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/contact.css">
        <?php }?>
  
        <!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/contact-thanks.css"> -->  
  <?php wp_head(); ?>
</head>

<body>
  <header>
    <div class="logo">
      <a href="<?php echo home_url(); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="logo">
      </a>
    </div>
    <!-- PC用ナビゲーション -->
    <nav class="nav-pc top-nav-pc">
      <a href="<?php echo home_url(); ?>">ホーム</a>
      <a href="<?php echo home_url(); ?>/about">当院について</a>
      <a href="<?php echo home_url(); ?>/course">コース・料金</a>
      <a href="<?php echo home_url(); ?>/news">お知らせ</a>
      <a href="<?php echo home_url(); ?>/voice">お客様の声</a>
      <a class="reservation" href="<?php echo home_url(); ?>/contact">ご予約・お問い合わせ</a>
    </nav>


    <!-- スマホ用メニューボタン -->
    <img class="menu-sp" src="<?php echo get_template_directory_uri(); ?>/images/button-menu.png" alt="ナビゲーションを開く">

    <!-- スマホ用ナビゲーション ハンバーガー -->
    <div class="nav-sp">
      <img class="close" src="<?php echo get_template_directory_uri(); ?>/images/button-close.png" alt="ナビゲーションを閉じる">
      <nav>
        <a class="logo-sp" href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="トップページに戻る"></a>
        <p class="humberger-menu">メニュー</p>
        <a class="menu" href="<?php echo home_url(); ?>">ホーム</a>
        <a class="menu" href="<?php echo home_url(); ?>/about">当院について</a>
        <a class="menu" href="<?php echo home_url(); ?>/course">コース・料金</a>
        <a class="menu" href="<?php echo home_url(); ?>/news">お知らせ</a>
        <a class="menu" href="<?php echo home_url(); ?>/voice">お客様の声</a>
        <div class="menu-contact-btn">
          <a class="menu" href="<?php echo home_url(); ?>/contact">ご予約・お問い合わせ</a>
        </div>
      </nav>
      <div class="hamburger-cover"></div>
    </div>
  </header>