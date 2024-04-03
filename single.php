<?php get_header(); ?>

<main>
    <!-- ヘッダー下メッセージとヒーローイメージ -->
    <div class="main-vidual">
      <!-- メッセージ -->
      <div class="main-message">
        <p>Information</p>
        <h1>お知らせ</h1>
      </div>
      <!-- ヒーローイメージ -->
      <div class="main-vidual-img">
        <img src="<?php echo get_template_directory_uri(); ?>/images/information/information-mainvidual.png" alt="施術写真">
      </div>
      <!-- スマホ用ヒーローイメージ -->
      <div class="main-vidual-sp-img">
        <img src="<?php echo get_template_directory_uri(); ?>/images/information/information-mainvidual-sp.png" alt="院内写真">
      </div>
    </div>
    <!-- サイトマップ -->
    <p class="site">ホーム &gt; お知らせ &gt; <span>お知らせ詳細</span></p>

    <section class="post">
      <div class="post-container">
        <div class="post-left">
          <div class="post-with-photo">
            <div class="post-title">
              <h2>投稿記事タイトル</h2>
              <div class="post-date">
                <time>2023年2月1日</time>
                <span>営業日時</span>
              </div>
            </div>
            <img class="post-photo" src="images/information/information1.png">
          </div>
          <div class="post-detail">
            <h2>H2見出し</h2>
            <p>
              首都圏での新型コロナウィルス感染増加における対応のため金曜日午後は訪問診療のみ行っております。<br>また、スタッフの人数を最低限に減らし診療をしております。<br>患者様にはご迷惑をおかけ致しますが、ご理解ご協力をよろしくお願いいたします。<br><br>首都圏での新型コロナウィルス感染増加における対応のため,診療時間を一部変更いたします。<br>患者様にはご迷惑をおかけ致しますが、ご理解ご協力をよろしくお願いいたします。
            </p>
            <h3>H3見出し</h3>
            <p>
              首都圏での新型コロナウィルス感染増加における対応のため金曜日午後は訪問診療のみ行っております。<br>また、スタッフの人数を最低限に減らし診療をしております。<br>患者様にはご迷惑をおかけ致しますが、ご理解ご協力をよろしくお願いいたします。<br><br>首都圏での新型コロナウィルス感染増加における対応のため,診療時間を一部変更いたします。<br>患者様にはご迷惑をおかけ致しますが、ご理解ご協力をよろしくお願いいたします。
            </p>
            <h4>H4見出し</h4>
            <p>
              首都圏での新型コロナウィルス感染増加における対応のため金曜日午後は訪問診療のみ行っております。<br>また、スタッフの人数を最低限に減らし診療をしております。<br>患者様にはご迷惑をおかけ致しますが、ご理解ご協力をよろしくお願いいたします。<br><br>首都圏での新型コロナウィルス感染増加における対応のため,診療時間を一部変更いたします。<br>患者様にはご迷惑をおかけ致しますが、ご理解ご協力をよろしくお願いいたします。
            </p>
          </div>
          <div class="page">
            <a class="forward">
                <img src="images/information/icon-left.svg">
                <p>前の記事へ</p>
            </a>
            <a class="list">お知らせ一覧</a>
            <a class="list-sp">一覧</a>
            <a class="next">
              <p>次の記事へ</p>
              <img class="icon-right" src="images/information/icon-left.svg">
            </a>
          </div>
        </div>


        <div class="post-right">
          <p class="category">カテゴリ</p>
          <ul>
            <li>営業日時</li>
            <li>キャンペーン</li>
            <li>その他</li>
          </ul>
        </div>
      </div>

    </section>
  </main>
  
  <?php get_footer( ); ?>