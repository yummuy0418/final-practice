<?php get_header(); ?>
  <main>
   <!-- ヘッダー下メッセージとヒーローイメージ -->
   <div class="main-vidual">
    <!-- メッセージ -->
    <div class="main-message">
      <p>Contact</p>
      <h1>ご予約・お問い合わせ</h1>
  </div>
    <!-- ヒーローイメージ -->
    <div class="main-vidual-img">
      <img src="<?php echo get_template_directory_uri(); ?>/images/contact/contact-mainvidual.png" alt="施術写真">
    </div>
       <!-- スマホ用ヒーローイメージ -->
       <div class="main-vidual-sp-img">
      <img src="<?php echo get_template_directory_uri(); ?>/images/contact/contact-mainvidual-sp.png" alt="院内写真">
    </div>
  </div>
   <!-- サイトマップ -->
   <p class="site">ホーム &gt; <span>ご予約・お問い合わせ</span></p>
<div class="contact-container">
<div class="contact-tel">
  <p>お電話でのご予約・お問い合わせ</p>
  <p class="adress">〒101-0022<br>東京都千代田区神田練塀町300番地<br>住友不動産秋葉原駅前ビル5F
  </p>
  <p class="tel"><span>tel:</span>03-12334-5678</p>
</div>

<div class="contact-form">
  <p class="contact-form-title">ご予約・お問い合わせフォオーム</p>
  <p class="contact-form-remark">※2
    営業日以内にご返信いたします。
  </p>
  <?php the_content(); ?>
</div>

</div>
</main>

<?php get_footer(); ?>

