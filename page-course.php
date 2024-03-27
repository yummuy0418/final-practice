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
  <link rel="stylesheet" href="course-price.css">
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
        <a class="menu" href="course-price.css">コース・料金</a>
        <a class="menu" href="information.html">お知らせ</a>
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
        <p>Price</p>
        <h1>コース・料金</h1>
      </div>
      <!-- ヒーローイメージ -->
      <div class="main-vidual-img">
        <img src="images/price/price-mainvidual.png" alt="施術写真">
      </div>
      <!-- スマホ用ヒーローイメージ -->
      <div class="main-vidual-sp-img">
        <img src="images/price/price-mainvidual-sp.png" alt="院内写真">
      </div>
    </div>
    <!-- サイトマップ -->
    <p class="site">ホーム &gt; <span>コース・料金</span></p>
    <!-- コース・料金 -->
    <section class="course-price">
      <div class="course-frame">
        <img src="images/footer-frame.png">
      </div>
      <div class="course-content">
        <div class="common-title">
          <div class="common-title-main">
            <img class="title-side-left" src="images/title-side.png">
            <h2>コース・料金</h2>
            <img class="title-side-right" src="images/title-side.png">
          </div>
          <p>
            当院では保険診療、自費診療<span>ともにご対応しております</span>
          </p>
        </div>

        <div class="course-flex">
          <div class="course-left">
            <img src="images/course-img1.jpg" alt="施術ベッド">
            <p class="course-title">保険診療</p>
            <ul class="course-item">
              <li>骨折・打撲・捻挫・脱臼</li>
              <li>スポーツ診療</li>
              <li>交通事故</li>
            </ul>
          </div>


          <div class="course-right">
            <img src="images/course-img2.jpg" alt="施術ベッド">
            <p class="course-title">自費診療</p>
            <ul class="course-item">
              <li>腰痛・肩こり</li>
              <li>冷え性・だるさ</li>
              <li>骨盤・骨盤・背骨矯正</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    
    <!-- 保険診療 -->
    <section class="insurance-selfpay">
      <div class="insurance-selfpay-left">
        <div class="common-icon-title">
          <img src="images/before-title-icon.png">
          <p>Insurance</p>
        </div>
        <p class="common-title-under">保険診療</p>
        <div class="insurance-selfpay-explain">
          <p>健康保険の適用は、慢性化していない、急性のけがのみが対象となります。<br>「負傷原因が急性または亜急性（急性に準ずる）の外傷性の負傷」のみです。</p>
          <ul>
            <li>骨折・打撲・捻挫・脱臼</li>
            <li>スポーツ診療</li>
            <li>交通事故</li>
          </ul>
        </div>
      </div>
      <div class="insurance-selfpay-right">
        <img src="images/price/price1.png">
      </div>
    </section>

    <!-- 自費診療 -->
    <section class="insurance-selfpay">
      <div class="insurance-selfpay-left">
        <div class="common-icon-title">
          <img src="images/before-title-icon.png">
          <p>Self-pay</p>
        </div>
        <p class="common-title-under">自費診療</p>
        <div class="insurance-selfpay-explain">
          <p>慢性的なご症状、日常生活の疲労やご年齢により生じる痛み緩和の施術は健康保険の適用がなく、全額自己負担となります。</p>
          <ul>
            <li>腰痛・肩こり</li>
            <li>冷え性・だるさ</li>
            <li>骨盤・背骨矯正</li>
          </ul>
        </div>
        <p class="selfpay-price">
          初回　<span>8,800円（税込） /50分</span><br>
          2回目以降　<span>6,600円（税込） /30分</span>
        </p>
      </div>
      <div class="insurance-selfpay-right">
        <img src="images/price/price2.png">
      </div>
    </section>

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
          <h2>ご気軽にご来院ください</h2>
          <img class="title-side-right" src="images/title-side.png">
        </div>
        </div>
        <div class="footer-flex">
          <div class="footer-left">
            <p class="footer-minutes">JR「秋葉原駅」より徒歩1分</p>
            <p class="footer-adress">〒101-0022<br>東京都千代田区神田練塀町300番地<br>住友不動産秋葉原駅前ビル5F
            </p>
            <p class="footer-tel"><span>tel:</span>03-12334-5678</p>
            <table class="footer-hour">
              <tr>
                <th style="border-radius: 4px 0 0 0;">営業時間</th>
                <th>月</th>
                <th>火</th>
                <th>水</th>
                <th>木</th>
                <th>金</th>
                <th>土</th>
                <th style="border-radius: 0 4px 0 0;">日</th>
              </tr>
              <tr class="am">
                <td>9:00〜12:30</td>
                <td>⚫︎</td>
                <td>⚫︎</td>
                <td>-</td>
                <td>⚫︎</td>
                <td>⚫︎</td>
                <td>⚫︎</td>
                <td>⚫︎</td>
              </tr>
              <tr class="pm">
                <td style="border-radius: 0 0 0 4px;">15:30〜20:00</td>
                <td>⚫︎</td>
                <td>⚫︎</td>
                <td>-</td>
                <td>⚫︎</td>
                <td>⚫︎</td>
                <td>⚫︎</td>
                <td style="border-radius: 0 0 4px 0;">⚫︎</td>
              </tr>

            </table>


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