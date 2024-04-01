<?php get_header(); ?>
  <main>
    <!-- ヘッダー下メッセージとヒーローイメージ -->
    <div class="main-vidual">
      <!-- メッセージ -->
      <div class="main-message">
        <p>Voice　</p>
        <h1>お客様の声</h1>
      </div>
      <!-- ヒーローイメージ -->
      <div class="main-vidual-img">
        <img src="<?php echo get_template_directory_uri(); ?>/images/voice/voice-mainvidual.png" alt="施術写真">
      </div>
      <!-- スマホ用ヒーローイメージ -->
      <div class="main-vidual-sp-img">
        <img src="<?php echo get_template_directory_uri(); ?>/images/voice/voice-mainvidual-sp.png" alt="院内写真">
      </div>
    </div>
    <!-- サイトマップ -->
    <p class="site">ホーム&gt;お客様の声</p>
    
    <section class="customer">
    <?php if (have_posts()) : ?>
               <?php while (have_posts()) : the_post() ?>
      <div class="customer-item">
      <?php the_post_thumbnail(); ?>
        <div class="title-coment">
          <p class="customer-title"><?php the_title(); ?></p>
          <p class="customer-coment">
          <?php echo wp_trim_words(get_the_content(), 100, '...'); ?></p>
        </div>
      </div>
      <?php endwhile; ?>
             <?php endif; ?>
    </section>
    
    <ul class="pager">
      <li><a class="active">1</a></li>
      <li><a>2</a></li>
      <li><a>3</a></li>
      <li><span>•••</span></li>
      <li><a>6</a></li>
    </ul>
  </main>
  
  <?php get_footer(); ?>