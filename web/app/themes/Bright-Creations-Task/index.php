<!DOCTYPE HTML>
<!--
	Strata by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
  <title>Strata by HTML5 UP</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!--[if lte IE 8]><script src="<?php echo get_template_directory_uri(); ?>/assets/js/ie/html5shiv.js"></script><![endif]-->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css" />
  <!--[if lte IE 8]><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/ie8.css" /><![endif]-->
</head>
<body id="top">

<!-- Header -->
<header id="header">
  <div class="inner">
    <a href="#" class="image avatar"><img src="<?php echo get_template_directory_uri(); ?>/images/Bright-Creations-Egypt-4605-og.png" alt="" /></a>
    <h1><strong>Bright Creations Task</strong><br />
      </a></h1>
  </div>
</header>

<!-- Main -->
<div id="main">



  <!-- Two -->
  <section id="two">
    <h2>Movies</h2>
    <div class="row">
      <?php
      $args = array( 'post_type' => 'moviess', 'posts_per_page' => 1000000 );
      $loop = new WP_Query( $args );
      while ( $loop->have_posts() ) : $loop->the_post();
        $title = get_the_title();
        $content = apply_filters('the_content', $post->post_content);
        $image = get_the_post_thumbnail_url();
        $url = get_permalink();
        ?>
        <article class="6u 12u$(xsmall) work-item">
          <a href="<?php echo $image; ?>" class="image fit thumb"><img src="<?php echo $image; ?>" alt="" /></a>
          <a href="<?php echo $url; ?>"><h3><?php echo $title; ?></h3></a>
          <p><?php echo $content; ?></p>
        </article>
        <?php
      endwhile;
      ?>
    </div>
  </section>



  <!-- Two -->
  <section id="two">
    <h2>Articles</h2>
    <div class="row">
      <?php
      $args = array( 'post_type' => 'articles', 'posts_per_page' => 1000000 );
      $loop = new WP_Query( $args );
      while ( $loop->have_posts() ) : $loop->the_post();
        $arttitle = get_the_title();
        $artimage = get_the_post_thumbnail_url();
        $arturl = get_permalink();
        ?>
        <article class="6u 12u$(xsmall) work-item">
          <a href="<?php echo $artimage; ?>" class="image fit thumb"><img src="<?php echo $artimage; ?>" alt="" /></a>
          <a href="<?php echo $arturl; ?>"><h3><?php echo $arttitle; ?></h3></a>
        </article>
        <?php
      endwhile;
      ?>
    </div>
  </section>


</div>

<!-- Footer -->
<footer id="footer">
  <div class="inner">
    <ul class="icons">
      <li><a href="https://github.com/PeterBassemWilliam/creations_task" class="icon fa-github"><span class="label">Github</span></a></li>
    </ul>

  </div>
</footer>

<!-- Scripts -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.poptrox.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/skel.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/util.js"></script>
<!--[if lte IE 8]><script src="<?php echo get_template_directory_uri(); ?>/assets/js/ie/respond.min.js"></script><![endif]-->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>

</body>
</html>
