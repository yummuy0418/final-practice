<?php get_header();?>
  <main>
  <!-- ヘッダー下メッセージとヒーローイメージ -->
  <div class="main-vidual">
    <!-- メッセージ -->
      <div class="main-message">
        <p>About</p>
        <h1>当院について</h1>
    </div>
    <!-- ヒーローイメージ -->
    <div class="main-vidual-img">
      <img src="<?php echo get_template_directory_uri(); ?>/images/about/aboutus-mainvidual.png" alt="施術写真">
    </div>
       <!-- スマホ用ヒーローイメージ -->
       <div class="main-vidual-sp-img">
      <img src="<?php echo get_template_directory_uri(); ?>/images/about/aboutus-mainvidual-sp.png" alt="院内写真">
    </div>
  </div>
  
  
   <!-- サイトマップ -->
   <?php get_template_part('breadcrumb'); ?>

</div>
  <!-- コンセプト -->
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

  <!-- フロー -->
  <div class="bg-person3">
  <section class="flow">
    <div class="flow-flex">
      <div class="flow-left">
        <div class="common-icon-title">
          <img src="<?php echo get_template_directory_uri(); ?>/images/before-title-icon.png" alt="フロー">
          <p>Flow</p>
        </div>
        <p class="common-title-under">施術の流れ</p>
        <div class="flow-catch">
          <ol>
            <li>受付</li>
            <li>問診票のご記入</li>
            <li>カウンセリン</li>
            <li>施術</li>
            <li>アフターカウンセリング</li>
          </ol>
        </div>
      </div>

      <div class="concept-right">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/images/about/flow-right-sp.png" media="(max-width: 767px)" >
        <img src="<?php echo get_template_directory_uri(); ?>/images/about/flow-right.png" alt="施術写真">
      </picture>
      </div>
    </div>
  </section>
</div>

  <section class="point">
    <div class="common-title point-title">
      <div class="common-title-main">
        <img class="title-side-left" src="<?php echo get_template_directory_uri(); ?>/images/title-side.png">
            <h2>根本改善のポイント</h2>
            <img class="title-side-right" src="<?php echo get_template_directory_uri(); ?>/images/title-side.png">
          </div>
          
      </div>
      <div class="point-title-under">
        <p class="point-explain">
          お体の状態や生活習慣、ご要望を丁寧にお伺いします。</p>
          <p class="point-explain">ご自身でできるケアなども含めて施術方針をお作りします。
        </p>
      </div>
      <div class="point-photo">
        <div class="point-photo1">
        <img src="<?php echo get_template_directory_uri(); ?>/images/about/point1.png">
        <p>丁寧なカウンセリング</p>
      </div>
      <div class="point-photo2">
        <img src="<?php echo get_template_directory_uri(); ?>/images/about/point2.png">
        <p>徹底的分析</p>
      </div>
      <div class="point-photo3">
        <img src="<?php echo get_template_directory_uri(); ?>/images/about/point3.png">
        <p>施術計画のご提案</p>
      </div>

      </div>
  </section>
  </main>

  <?php get_footer();?>