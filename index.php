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
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="top.css">
  
</head>

<body>
  <header>
    <a href="index.html" class="logo">
      <img src="images/logo.png" alt="logo">
    </a>

    <nav class="nav-pc top-nav-pc">
      <a href="index.html">ホーム</a>
      <a href="aboutus.html">当院について</a>
      <a href="course-price.html">コース・料金</a>
      <a href="information.html">お知らせ</a>
      <a href="voice.html">お客様の声</a>
      <a class="reservation" href="contact.html">ご予約・お問合せ</a>
    </nav>

    <img class="menu-sp" src="images/button-menu.png" alt="ナビゲーションを開く">
    <div class="nav-sp">
      <img class="close" src="images/button-close.png" alt="ナビゲーションを閉じる">
      <nav>
        <a class="logo-sp" href="index.html"><img src="images/logo.png" alt="トップページに戻る"></a>
        <p class="humberger-menu">メニュー</p>
        <a class="menu" href="index.html">ホーム</a>
        <a class="menu" href="aboutus.html">当院について</a>
        <a class="menu" href="course-price.html">コース・料金</a>
        <a class="menu" href="information.html">お知らせ</a>
        <a class="menu" href="voice.html">お客様の声</a>
        <div class="menu-contact-btn">
          <a class="menu" href="contact.html">ご予約・お問い合わせ</a>
        </div>
      </nav>
      <div class="hamburger-cover"></div>
    </div>

  </header>

  
  <!-- ヘッダー下メッセージとヒーローイメージ -->
  <div class="top-main-vidual">
    <!-- 縦書きメッセージ -->
   
    <h1 class="top-main-message"><span>根本的な症状改善を<br>サポートします</span></h1>

    <!-- ヒーローイメージ -->
    <ul class="slider">
      <li class="top-main-vidual-img">
        <picture>
          <source srcset="images/hero-sp1.png" media="(max-width: 767px)" type="image/png">
        <img src="images/hero1.png" alt="院内写真">
      </picture>
      </li>
      <li class="top-main-vidual-img">
        <picture>
          <source srcset="images/hero-sp2.png" media="(max-width: 767px)" type="image/png">
        <img src="images/hero2.png" alt="院内写真">
      </picture>
      </li>
      <li class="top-main-vidual-img">
        <picture>
          <source srcset="images/hero-sp3.png" media="(max-width: 767px)" type="image/png">
        <img src="images/hero3.png" alt="院内写真">
      </picture>
      </li>
      <li class="top-main-vidual-img">
        <picture>
          <source srcset="images/hero-sp4.png" media="(max-width: 767px)" type="image/png">
        <img src="images/hero4.png" alt="院内写真">
      </picture>
      </li>
    </ul>
  </div>


  <section class="news">
    <div class="news-main">
      <div class="news-subject">
        <p>News</p>
        <p>お知らせ</p>
      </div>
      <div class="news-date-info">
        <div class="news-date">
          <time>2022/12/21</time>
          <span>営業日時</span>
        </div>
        <div class="news-info">
          <p>年末年始の営業時間に<span>ついて</span></p>
        </div>
      </div>
    </div>
    <a>→お知らせ一覧へ</a>
  </section>
 


  <div class="bg-person">
    <section class="concept">
      <div class="concept-flex">
        <div class="concept-left">
          <div class="common-icon-title">
            <img src="images/before-title-icon.png" alt="コンセプト">
            <p>Concept</p>
          </div>
          <p class="common-title-under">特長</p>
          <p class="concept-catch">日々変化する<br>カラダと心を癒す<br>パーソナル<br>トレーナーとして</p>
          <p class="concept-explain">
            当院では、問診にてお客様の症状や生活スタイル、ご希望を丁寧にお伺いした上で営業方針を立てていきます。<br><br>また、根本的に症状を改善するために、お客様ご自身で行えるケアやストレッチもお伝えします。<br><br>ご不安な点や疑問点などお気軽にご相談くださいませ。
          </p>
          <a class="concept-btn" href="aboutus.html">→当院について</a>
        </div>

        <div class="concept-right">
          <img src="images/concept-right-img.png" alt="施術写真">
        </div>
      </div>
    </section>
  </div>


  <div class="bg-person2">
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
        <div class="course-btn">
          <a href="#">→コース・料金詳細へ</a>
        </div>
      </div>

    </section>
  </div>

  <section class="voice">
    <div class="voice-head">
      <img class="voice-img-pc" src="images/voice-img.png">
      <img class="voice-img-sp" src="images/voice-sp-img.png">

      <div class="common-title voice-title">
        <div class="common-title-main voice-title-main">
          <img class="title-side-left" src="images/title-side.png">
          <h2>お客様の声</h2>
          <img class="title-side-right" src="images/title-side.png">
        </div>
        <p>痛みの改善に加えて自分で予防<span>もできるようになりました</span></p>
      </div>
    </div>
    <div class="customer">
      <div class="customer-item">
        <img src="images/customer1.png">
        <p class="customer-title">S・K様　30代女性</p>
        <p class="customer-coment">1ヶ月で腰の痛みが軽減しました。自分で自宅でできるケアも教えていただき、お任せしてよかったです。</p>
      </div>
      <div class="customer-item">
        <img src="images/customer2.png">
        <p class="customer-title">T・M様　40代男性</p>
        <p class="customer-coment">マラソンで右膝が痛むので、施術を受けています。なぜ痛みが生じるのかを身体の仕組みから教えていただき、普段の練習メニューも工夫できています。</p>
      </div>
      <div class="customer-item">
        <img src="images/customer3.png">
        <p class="customer-title">S・T様　60代女性</p>
        <p class="customer-coment">転倒して足を骨折したのをきっかけに、痛みの軽減と筋肉の衰えを防ぐための方針を立てていただいています。今は毎日元気に近所を散歩できています。</p>
      </div>
    </div>
    <div class="voice-btn">
      <a href="#">→お客様の声一覧へ</a>
    </div>
  </section>

  
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
    <div class="copyright">
      <small>&copy;2023 SAMURAI整体院</small>
    </div>
  </footer>
  
  <a href="#" id="top-page"><img src="images/return-btn.png"></a>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script src="main.js"></script>
  <script>
    $('.slider').slick({
      autoplay: true,
      dots: false,
      fade: true,
    speed: 1500,
    arrows: false,
    });
  </script>
   
</body>

</html>