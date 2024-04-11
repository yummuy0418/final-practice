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
    <?php echo esc_html ( get_template_part('breadcrumb')); ?>

    <?php if(have_posts()) :?>
  <?php while (have_posts()) : the_post() ; ?>
    <section class="post">
      <div class="post-container">
        <div class="post-left">
          <div class="post-with-photo">
            <div class="post-title">
              <h2><?php the_title(); ?></h2>
              <div class="post-date">
                <time><?php echo esc_html ( get_the_date('Y年m月d日')); ?></time>
                
                <?php
             $cat = get_the_category();
             $catslug = $cat[0]->slug;
             $catname = $cat[0]->cat_name;
           ?>
                <span><?php echo esc_html ( $catname); ?></span>
              </div>
            </div>
            <img class="post-photo" src="<?php the_post_thumbnail_url('thumbnail'); ?>" />
          </div>
          <div class="post-detail">
            <h2><?php the_title(); ?></h2>
            <p>
            <?php echo esc_html ( get_the_content()); ?>
            </p>
            <h3><?php the_title(); ?></h3>
            <p>
            <?php echo esc_html ( get_the_content()); ?>
            </p>
            <h4><?php the_title(); ?></h4>
            <p>
            <?php echo esc_html ( get_the_content()); ?>
            </p>
          </div>
          
          <div class="page">
            
            <?php previous_post_link('%link', '＜　前の記事へ'); ?>
            </a>
            <a class="list" href="<?php echo home_url(); ?>/news">お知らせ一覧</a>
            <a class="list-sp" href="<?php echo home_url(); ?>/news">一覧</a>
            <?php next_post_link('%link', '次の記事へ　＞'); ?>
            </a>
          </div>
        </div>

        <?php get_sidebar(); ?>
        
      </div>

    </section>
    <?php endwhile; ?>
    <?php endif; ?>
  </main>
  
  <?php get_footer( ); ?>