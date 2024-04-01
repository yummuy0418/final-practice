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
    <p class="site">ホーム &gt; <span>お知らせ</span></p>

    <section class="post">
      <div class="post-container">
        <div class="post-left">
        <?php if (have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>
          <a href="<?php the_permalink(); ?>" class="post-with-photo">
            <img class="post-photo" src="<?php echo get_template_directory_uri(); ?>/images/information/information1.png">
            <div class="post-title">
              <h2><?php the_title(); ?></h2>
              <div class="post-date">
                <time><?php echo get_post_time('Y年m月d日'); ?></time>
                <span>営業日時</span>
              </div>
            </div>
          </a>
          <?php endwhile; ?>
          <?php endif; ?>
        <?php get_sidebar(); ?>
      
      <ul class="pager">
        <li><a class="active">1</a></li>
        <li><a>2</a></li>
        <li><a>3</a></li>
        <li><span>•••</span></li>
        <li><a>6</a></li>
      </ul>
      </div>

  
<?php the_posts_pagination(
  array(
      'mid_size'      => 2, // 現在ページの左右に表示するページ番号の数
      'prev_next'     => true, // 「前へ」「次へ」のリンクを表示する場合はtrue
      'prev_text'     => ('<'), // 「前へ」リンクのテキスト
      'next_text'     => ('>'), // 「次へ」リンクのテキスト
      'type'          => 'list', // 戻り値の指定 (plain/list)
  )
); ?>

    </section>
  </main>
  <?php get_footer(); ?>