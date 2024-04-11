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
  
    <?php wp_head(); ?>
</head>

<body>
  <header>
    <div class="logo">
      <a href="<?php  echo esc_url(home_url());?>">
        <img src="<?php echo esc_url( get_template_directory_uri() .'/images/logo.png'); ?>" alt="logo">
      </a>
    </div>
    <!-- PC用ナビゲーション -->
    <nav class="nav-pc top-nav-pc">
      <a href="<?php  echo esc_url(home_url());?>">ホーム</a>
      <a href="<?php echo esc_url( home_url( '/about' ) ); ?>">当院について</a>
      <a href="<?php echo esc_url( home_url( '/course' ) ); ?>">コース・料金</a>
      <a href="<?php echo esc_url( home_url( '/news' ) ); ?>">お知らせ</a>
      <a href="<?php echo esc_url( home_url( '/voice' ) ); ?>">お客様の声</a>
      <a class="reservation" href="<?php echo esc_url( home_url( '/contact' ) ); ?>">ご予約・お問い合わせ</a>
    </nav>


    <!-- スマホ用メニューボタン -->
    <img class="menu-sp" src="<?php echo esc_url( get_template_directory_uri() . '/images/button-menu.png') ?>" alt="ナビゲーションを開く">

    <!-- スマホ用ナビゲーション ハンバーガー -->
    <div class="nav-sp">
      <img class="close" src="<?php echo esc_url( get_template_directory_uri() . '/images/button-close.png'); ?>" alt="ナビゲーションを閉じる">
      <nav>
        <a class="logo-sp" href="<?php  echo esc_url(home_url());?>"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/logo.png'); ?>" alt="トップページに戻る"></a>
        <p class="humberger-menu">メニュー</p>
        <a class="menu" href="<?php  echo esc_url(home_url());?>">ホーム</a>
        <a class="menu" href="<?php echo esc_url( home_url( '/about' ) ); ?>">当院について</a>
        <a class="menu" href="<?php echo esc_url( home_url( '/course' ) ); ?>">コース・料金</a>
        <a class="menu" href="<?php echo esc_url( home_url( '/news' ) ); ?>">お知らせ</a>
        <a class="menu" href="<?php echo esc_url( home_url( '/voice' ) ); ?>">お客様の声</a>
        <div class="menu-contact-btn">
          <a class="menu" href="<?php echo esc_url( home_url( '/contact' ) ); ?>">ご予約・お問い合わせ</a>
        </div>
      </nav>
      <div class="hamburger-cover"></div>
    </div>
  </header>