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
  <link
    href="https://fonts.googleapis.com/css2?family=Merriweather+Sans&family=Noto+Sans+JP&family=Noto+Serif+JP&family=Shippori+Mincho&display=swap"
    rel="stylesheet">

  <!-- reset.css modern-css-reset -->
  <link rel="stylesheet" href="https://unpkg.com/modern-css-reset/dist/reset.min.css" />
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="voice.css">
</head>

<body>
  <header>
    <div class="logo">
      <a href="index.html">
        <img src="images/logo.png" alt="logo">
      </a>
    </div>
    <!-- PC用ナビゲーション -->
    <nav class="nav-pc">

      <a href="index.html">ホーム</a>
      <a href="aboutus.html">当院について</a>
      <a href="course-price.html">コース・料金</a>
      <a href="information.html">お知らせ</a>
      <a href="voice.html">お客様の声</a>

      <a class="reservation" href="contact.html">ご予約・お問合せ</a>

    </nav>


    <!-- スマホ用メニューボタン -->
    <img class="menu-sp" src="images/button-menu.png" alt="ナビゲーションを開く">

    <!-- スマホ用ナビゲーション -->
    <div class="nav-sp">
      <img class="close" src="images/button-close.png" alt="ナビゲーションを閉じる">
      <nav>
        <a class="logo-sp" href="index.html"><img src="images/logo.png" alt="トップページに戻る"></a>
        <p class="humberger-menu">メニュー</p>
        <a class="menu" href="index.html">ホーム</a>
        <a class="menu" href="aboutus.html">当院について</a>
        <a class="menu" href="course.html">コース・料金</a>
        <a class="menu" href="news.html">お知らせ</a>
        <a class="menu" href="voice.html">お客様の声</a>
        <div class="menu-contact-btn">
          <a class="menu" href="contact.html">ご予約・お問い合わせ</a>
        </div>
      </nav>
      <div class="hamburger-cover"></div>
    </div>
  </header>
  <main>
    <!-- ヘッダー下メッセージとヒーローイメージ -->
    <div class="main-vidual">
      <!-- メッセージ -->
      <div class="main-message">
        <p>Voice　</p>
        <h1>お客様の声</h1>
      </div>
      <!-- ヒーローイメージ -->
      <div class="main-vidual-img">
        <img src="images/voice/voice-mainvidual.png" alt="施術写真">
      </div>
      <!-- スマホ用ヒーローイメージ -->
      <div class="main-vidual-sp-img">
        <img src="images/voice/voice-mainvidual-sp.png" alt="院内写真">
      </div>
    </div>
    <!-- サイトマップ -->
    <p class="site">ホーム&gt;お客様の声</p>

    <section class="customer">
      <div class="customer-item">
        <img src="images/voice-customer1.jpg">
        <div class="title-coment">
          <p class="customer-title">S・K様　30代女性</p>
          <p class="customer-coment">
            1ヶ月で腰の痛みが軽減しました。自分で自宅でできるケアも教えていただき、お任せしてよかったです。お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声</p>
        </div>
      </div>
      <div class="customer-item">
        <img src="images/voice-customer2.jpg">
        <div class="title-coment">
          <p class="customer-title">T・M様　40代男性</p>
          <p class="customer-coment">
            マラソンで右膝が痛むので、施術を受けています。なぜ痛みが生じるのかを身体の仕組みから教えていただき、普段の練習メニューも工夫できています。お客様の声お客様の声お客様の声お客様の声お客様の声</p>
        </div>
      </div>
      <div class="customer-item">
        <img src="images/voice-customer3.jpg">
        <div class="title-coment">
          <p class="customer-title">S・T様　60代女性</p>
          <p class="customer-coment">
            転倒して足を骨折したのをきっかけに、痛みの軽減と筋肉の衰えを防ぐための方針を立てていただいています。今は毎日元気に近所を散歩できています。お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声</p>
        </div>
      </div>
      <div class="customer-item">
        <img src="images/voice-customer1.jpg">
        <div class="title-coment">
          <p class="customer-title">S・K様　30代女性</p>
          <p class="customer-coment">
            1ヶ月で腰の痛みが軽減しました。自分で自宅でできるケアも教えていただき、お任せしてよかったです。お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声お客様の声</p>
        </div>
      </div>
      <div class="customer-item">
        <img src="images/voice-customer2.jpg">
        <div class="title-coment">
          <p class="customer-title">T・M様　40代男性</p>
          <p class="customer-coment">
            マラソンで右膝が痛むので、施術を受けています。なぜ痛みが生じるのかを身体の仕組みから教えていただき、普段の練習メニューも工夫できています。お客様の声お客様の声お客様の声お客様の声お客様の声</p>
        </div>
      </div>
    </section>
    <ul class="pager">
      <li><a class="active">1</a></li>
      <li><a>2</a></li>
      <li><a>3</a></li>
      <li><span>•••</span></li>
      <li><a>6</a></li>
    </ul>
  </main>
  <!-- フッター -->
  <footer>
    <div class="footer-frame">
      <img src="images/footer-frame.png">
    </div>
    <div class="footer-content">
      <div class="common-title footer-title">
        <div class="common-title-main">
          <img class="title-side-left" src="images/title-side.png">
          <h2>お気軽にご来院ください</h2>
          <img class="title-side-right" src="images/title-side.png">
        </div>
      </div>
      <div class="footer-flex">
        <div class="footer-left">
          <p class="footer-minutes">JR「秋葉原駅」より徒歩1分</p>
          <p class="footer-adress">〒101-0022<br>東京都千代田区神田練塀町300番地<br>住友不動産秋葉原駅前ビル5F
          </p>
          <p class="footer-tel"><span>tel:</span>03-12334-5678</p>
          <img class="footer-hour" src="images/footer-hour.png">
          <div class="footer-btn">
            <a href="#">ご予約・お問い合わせはこちらから</a>
          </div>
        </div>

        <div class="footer-right">
          <iframe class="iframe"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.0688551383278!2d139.77207231131842!3d35.69992317246687!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188fee13660e23%3A0x77137876edf742ac!2z5L2P5Y-L5LiN5YuV55Sj56eL6JGJ5Y6f6aeF5YmN44OT44Or!5e0!3m2!1sja!2sjp!4v1705736200940!5m2!1sja!2sjp"
            width="509" height="418" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    
    <div class="footer-nav">

      <img class="logo" src="images/logo.png">

      <div class="footer-nav-navi">
        <a href="index.html">TOP</a>
        <a href="aboutus.html">当院について</a>
        <a href="course-price.html">コース・料金</a>
        <a href="information.html">お知らせ</a>
        <a href="voice.html">お客様の声</a>
        <a href="contact.html">ご予約・お問い合わせ</a>
      </div>
    </div>
  </div>
    <div class="copyright">
      <small>&copy;2023 SAMURAI整体院</small>
    </div>
  </footer>
  <!-- トップボタン -->
  <a href="#" id="top-page"><img src="images/return-btn.png"></a>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
  <script src="main.js"></script>
</body>
</html>