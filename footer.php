<footer>
  <div class="footer-frame">
    <img src="<?php echo get_template_directory_uri(); ?>/images/footer-frame.png">
  </div>
  <div class="footer-content">
    <div class="common-title footer-title">
      <div class="common-title-main">
        <img class="title-side-left" src="<?php echo get_template_directory_uri(); ?>/images/title-side.png">
        <h2>ご気軽にご来院ください</h2>
        <img class="title-side-right" src="<?php echo get_template_directory_uri(); ?>/images/title-side.png">
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
          <a href="contact.html">ご予約・お問い合わせはこちらから</a>
        </div>
      </div>

      <div class="footer-right">
        <iframe class="iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.0688551383278!2d139.77207231131842!3d35.69992317246687!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188fee13660e23%3A0x77137876edf742ac!2z5L2P5Y-L5LiN5YuV55Sj56eL6JGJ5Y6f6aeF5YmN44OT44Or!5e0!3m2!1sja!2sjp!4v1705736200940!5m2!1sja!2sjp" width="509" height="418" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>

    <div class="footer-nav">

      <img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.png">

      <div class="footer-nav-navi">
        <a href="<?php echo home_url(); ?>/front-page">TOP</a>
        <a href="<?php echo home_url(); ?>/about">当院について</a>
        <a href="<?php echo home_url(); ?>/course">コース・料金</a>
        <a href="<?php echo home_url(); ?>/home">お知らせ</a>
        <a href="<?php echo home_url(); ?>/archive-voice">お客様の声</a>
        <a href="<?php echo home_url(); ?>/page-contact">ご予約・お問い合わせ</a>
      </div>
    </div>
  </div>
  <div class="copyright">
    <small>&copy;2023 SAMURAI整体院</small>
  </div>
</footer>

<a href="#" id="top-page"><img src="<?php echo get_template_directory_uri(); ?>/images/return-btn.png"></a>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/main.js"></script>
<script>
  $('.slider').slick({
    autoplay: true,
    dots: false,
    fade: true,
    speed: 1500,
    arrows: false,
  });
</script>
<?php wp_footer(); ?>
</body>

</html>