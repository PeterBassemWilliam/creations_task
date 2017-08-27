<?php
error_reporting(0);
$id  = get_the_id();
$image = get_the_post_thumbnail_url();
$excerpt = get_field('excerpt');
$author = get_field('author');
$publish_date = get_field('publish_date');
$url = get_permalink();
$title = get_the_title($id);
$content = apply_filters('the_content', $post->post_content);
?>
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



    <!-- One -->
    <section id="one">
        <header class="major">
            <img src="<?php echo $image;?>" width="200"><br>
            <h2><?php echo $title; ?></h2>
        </header>
        <p><?php echo $content; ?></p><br>
        <p><strong>Excerpt : <?php echo $excerpt;?></strong></p>
        <p><strong>Author : <?php echo $author;?></strong></p>
        <p><strong>Publish Date : <?php echo $publish_date;?></strong></p>
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
