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
  <form action="contact-thanks.html" method="post">
    <div class="form-item">
    <label for="name">氏名（必須）</label> 
    <input type="text" class="blank" placeholder="侍　太郎">
  </div>
    
    <div class="form-item">
    <label for="rubi">フリガナ（必須）</label> 
    <input type="text" class="blank" placeholder="サムライ　タロウ">
  </div>
   
    <div class="form-item">
    <label for="number">電話番号（必須）　半角</label> 
    <input type="number" class="blank" placeholder="12345678">
  </div>
    
    <div class="form-item">
    <label for="email">メールアドレス（必須）　半角英数字</label> 
    <input type="email" class="blank" placeholder="samurai-chiropractic@example.com">
   </div>
   
   <div class="form-item">
    <label for="date">ご予約希望日</label>
    <input type="text" class="blank" placeholder="例）2023年3月1日">
  </div>
   
  <div class="form-item">
    <label for="selectbox">お悩み（必須）</label> 
    <select type="selectbox" class="blank">
      <option value="" selected>お悩みを選択してください</option>
      <option value="youtuu">腰痛</option>
      <option value="katakori">肩こり</option>
    </select>
    </div>
    
    <div class="form-item">
    <label for="message">お問い合わせ内容</label> 
    <textarea name="message" class="blank-textarea" placeholder="できるだけ詳しいお問い合わせ内容を記入してください"></textarea>
    </div>

    <input class="submit" type="submit" value="送信">


  </form>
</div>

</div>
</main>

<?php get_footer(); ?>

