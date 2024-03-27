<?php get_header();?>
<main>
  <!-- ヘッダー下メッセージとヒーローイメージ -->
  <div class="top-main-vidual">
    <!-- 縦書きメッセージ -->
   
    <h1 class="top-main-message"><span>根本的な症状改善を<br>サポートします</span></h1>

    <!-- ヒーローイメージ -->
    <ul class="slider">
      <li class="top-main-vidual-img">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/images/hero-sp1.png" media="(max-width: 767px)" type="image/png">
        <img src="<?php echo get_template_directory_uri(); ?>/images/hero1.png" alt="院内写真">
      </picture>
      </li>
      <li class="top-main-vidual-img">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/images/hero-sp2.png" media="(max-width: 767px)" type="image/png">
        <img src="<?php echo get_template_directory_uri(); ?>/images/hero2.png" alt="院内写真">
      </picture>
      </li>
      <li class="top-main-vidual-img">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/images/hero-sp3.png" media="(max-width: 767px)" type="image/png">
        <img src="<?php echo get_template_directory_uri(); ?>/images/hero3.png" alt="院内写真">
      </picture>
      </li>
      <li class="top-main-vidual-img">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/images/hero-sp4.png" media="(max-width: 767px)" type="image/png">
        <img src="<?php echo get_template_directory_uri(); ?>/images/hero4.png" alt="院内写真">
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
          <a href="information-detail.html">年末年始の営業時間に<span>ついて</span></a>
        </div>
      </div>
    </div>
    <a href="information.html">→お知らせ一覧へ</a>
  </section>
 


  <div class="bg-person">
    <section class="concept">
      <div class="concept-flex">
        <div class="concept-left">
          <div class="common-icon-title">
            <img src="<?php echo get_template_directory_uri(); ?>/images/before-title-icon.png" alt="コンセプト">
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
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/images/concept-right-sp.png" media="(max-width: 767px)" >
          <img src="<?php echo get_template_directory_uri(); ?>/images/concept-right.png" alt="施術写真">
        </picture>
        </div>
      </div>
    </section>
  </div>


  <div class="bg-person2">
    <section class="course-price">
      <div class="course-frame">
        <img src="<?php echo get_template_directory_uri(); ?>/images/footer-frame.png">
      </div>
      <div class="course-content">
        <div class="common-title">
          <div class="common-title-main">
            <img class="title-side-left" src="<?php echo get_template_directory_uri(); ?>/images/title-side.png">
            <h2>コース・料金</h2>
            <img class="title-side-right" src="<?php echo get_template_directory_uri(); ?>/images/title-side.png">
          </div>
          <p>
            当院では保険診療、自費診療<span>ともにご対応しております</span>
          </p>
        </div>

        <div class="course-flex">
          <div class="course-left">
            <img src="<?php echo get_template_directory_uri(); ?>/images/course-img1.jpg" alt="施術ベッド">
       
            <p class="course-title">保険診療</p>
            <ul class="course-item">
              <li>骨折・打撲・捻挫・脱臼</li>
              <li>スポーツ診療</li>
              <li>交通事故</li>
            </ul>

          </div>
          <div class="course-right">
            <img src="<?php echo get_template_directory_uri(); ?>/images/course-img2.jpg" alt="施術ベッド">
            <p class="course-title">自費診療</p>
            <ul class="course-item">
              <li>腰痛・肩こり</li>
              <li>冷え性・だるさ</li>
              <li>骨盤・骨盤・背骨矯正</li>
            </ul>

          </div>
        </div>
      
          <a class="course-btn" href="course-price.html">→コース・料金詳細へ</a>
      
      </div>

    </section>
  </div>

  <section class="voice">
    <div class="voice-head">
      <img class="voice-img-pc" src="<?php echo get_template_directory_uri(); ?>/images/voice-img.png">
      <img class="voice-img-sp" src="<?php echo get_template_directory_uri(); ?>/images/voice-sp-img.png">

      <div class="common-title voice-title">
        <div class="common-title-main voice-title-main">
          <img class="title-side-left" src="<?php echo get_template_directory_uri(); ?>/images/title-side.png">
          <h2>お客様の声</h2>
          <img class="title-side-right" src="<?php echo get_template_directory_uri(); ?>/images/title-side.png">
        </div>
        <p>痛みの改善に加えて自分で予防<span>もできるようになりました</span></p>
      </div>
    </div>
    <div class="customer">
      <div class="customer-item">
        <img src="<?php echo get_template_directory_uri(); ?>/images/voice-customer1.jpg">
        <p class="customer-title">S・K様　30代女性</p>
        <p class="customer-coment">1ヶ月で腰の痛みが軽減しました。自分で自宅でできるケアも教えていただき、お任せしてよかったです。</p>
      </div>
      <div class="customer-item">
        <img src="<?php echo get_template_directory_uri(); ?>/images/voice-customer2.jpg">
        <p class="customer-title">T・M様　40代男性</p>
        <p class="customer-coment">マラソンで右膝が痛むので、施術を受けています。なぜ痛みが生じるのかを身体の仕組みから教えていただき、普段の練習メニューも工夫できています。</p>
      </div>
      <div class="customer-item">
        <img src="<?php echo get_template_directory_uri(); ?>/images/voice-customer3.jpg">
        <p class="customer-title">S・T様　60代女性</p>
        <p class="customer-coment">転倒して足を骨折したのをきっかけに、痛みの軽減と筋肉の衰えを防ぐための方針を立てていただいています。今は毎日元気に近所を散歩できています。</p>
      </div>
    </div>

      <a class="voice-btn" href="voice.html">→お客様の声一覧へ</a>
   
  </section>
  </main>
  <?php get_footer();
  