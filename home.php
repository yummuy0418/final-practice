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
        <img src="<?php echo esc_url( get_template_directory_uri() .'/images/information/information-mainvidual.png'); ?>" alt="施術写真">
      </div>
      <!-- スマホ用ヒーローイメージ -->
      <div class="main-vidual-sp-img">
        <img src="<?php echo esc_url( get_template_directory_uri() .'/images/information/information-mainvidual-sp.png'); ?>" alt="院内写真">
      </div>
    </div>
    <!-- サイトマップ -->
    <?php echo esc_html (get_template_part('breadcrumb')); ?>

    <section class="post">
      <div class="post-container">
        <div class="post-left">
        <?php if (have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>
          <a href="<?php the_permalink(); ?>" class="post-with-photo">

            <img class="post-photo" src="<?php the_post_thumbnail_url('full'); ?>" />
            <div class="post-title">
              <h2><?php the_title(); ?></h2>
              <div class="post-date">
                <time><?php echo get_post_time('Y年m月d日'); ?></time>
                <span><?php echo get_the_category()[0]->name; ?></span>
              </div>
            </div>
          </a>
          <?php endwhile; ?>
          <?php endif; ?>
          </div>
      
          <?php get_sidebar(); ?>    
    
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
</div>

    </section>
  </main>
  <?php get_footer(); ?>