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
    <?php get_template_part('breadcrumb'); ?>
    
    <?php
               $args = array(
                   'post_type' => 'voice',
                   'posts_per_page' => 5,
               );
               $posts = get_posts($args);
               ?>
    <section class="customer">
    <?php foreach($posts as $post): ?>
    <?php setup_postdata($post); ?>
      <div class="customer-item">
      <?php the_post_thumbnail(); ?>
        <div class="title-coment">
          <p class="customer-title"><?php the_title(); ?></p>
          <p class="customer-coment">
          <?php echo wp_trim_words(get_the_content(), 100, '...'); ?></p>
        </div>
        </div>
        <?php endforeach; ?>
        <?php wp_reset_postdata(); ?>
      
    </section>
    
    <div class="pagination">
      <?php
  echo paginate_links(
    array(
      'mid_size' => 1,
      'prev_next' => false,
    )
  );
?>
</div>
  </main>
  
  <?php get_footer(); ?>