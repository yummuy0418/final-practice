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
        <img src="images/contact/contact-mainvidual-sp.png" alt="院内写真">
      </div>
    </div>
    <!-- サイトマップ -->
    <p class="site">ホーム &gt; <span>ご予約・お問い合わせ</span></p>
    <div class="border">
      <p class="submit">お問い合わせ内容を送信しました</p>
      <p class="thanks">ありがとうございます。2営業日以内にご返信いたします。</p>
      <div class="button">
        <a href="<?php echo home_url(); ?>">戻る</a>
      </div>
    </div>
  </main>
  <?php get_footer(); ?>