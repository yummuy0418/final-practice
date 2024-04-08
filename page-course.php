<?php get_header();?>
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
        <img src="<?php echo get_template_directory_uri(); ?>/images/price/price-mainvidual.png" alt="施術写真">
      </div>
      <!-- スマホ用ヒーローイメージ -->
      <div class="main-vidual-sp-img">
        <img src="<?php echo get_template_directory_uri(); ?>/images/price/price-mainvidual-sp.png" alt="院内写真">
      </div>
    </div>
    <!-- サイトマップ -->
    <?php get_template_part('breadcrumb'); ?>
    <!-- コース・料金 -->
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
      </div>
    </section>
    
    <!-- 保険診療 -->
    <section class="insurance-selfpay">
      <div class="insurance-selfpay-left">
        <div class="common-icon-title">
          <img src="<?php echo get_template_directory_uri(); ?>/images/before-title-icon.png">
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
        <img src="<?php echo get_template_directory_uri(); ?>/images/price/price1.png">
      </div>
    </section>

    <!-- 自費診療 -->
    <section class="insurance-selfpay">
      <div class="insurance-selfpay-left">
        <div class="common-icon-title">
          <img src="<?php echo get_template_directory_uri(); ?>/images/before-title-icon.png">
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
        <img src="<?php echo get_template_directory_uri(); ?>/images/price/price2.png">
      </div>
    </section>

  </main>
  <?php get_footer();?>