<!DOCTYPE html>
<html lang="<?php language_attributes() ?>">

<head>

  <?php get_header() ?>

</head>

<body>

  <?php get_template_part("./includes/header") ?>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1><?php bloginfo("name") ?></h1>
            <span class="subheading"><?php bloginfo("description") ?></span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post() ?>
            <div class="post-preview">
              <a href="<?php the_permalink() ?>">
                <h2 class="post-title">

                  <?php the_title() ?>

                </h2>
                <h3 class="post-subtitle">
                  <?php the_excerpt() ?>
                </h3>
              </a>
              <p class="post-meta">Posted by
                <?php the_author() ?>
                on <?php the_time("Y/m/d") ?>
              </p>
            </div>
            <hr>
          <?php endwhile ?>
          <!-- Pager -->
          <div class="clearfix">
            <?php
            $link = get_previous_posts_link("新しい記事へ &larr;");
            if ($link) {
              $link = str_replace("<a", '<a class="btn btn-primary float-left"', $link);
              echo $link;
            }
            ?>
            <?php
            $link = get_next_posts_link("古い記事へ &rarr;");
            if ($link) {
              $link = str_replace("<a", '<a class="btn btn-primary float-right"', $link);
              echo $link;
            }
            ?>

          </div>
        <?php else : ?>
          <p>ページが見つかりませんでした。</p>
        <?php endif; ?>
      </div>
    </div>
  </div>

  <hr>
  <?php get_template_part("./includes/footer") ?>

  <? get_footer() ?>
</body>

</html>
