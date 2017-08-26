<?php
error_reporting(0);
$id  = get_the_id();
$image = get_the_post_thumbnail_url();
$release_date = get_field('release_date');
$budget = get_field('budget');
$profit = get_field('profit');
$gross = get_field('gross');
$language = get_field('language');
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
        <p><strong>Release Date : <?php echo $release_date;?></strong></p>
        <p><strong>Budget : <?php echo $budget;?></strong></p>
        <p><strong>Profit : <?php echo $profit;?></strong></p>
        <p><strong>Gross : <?php echo $gross;?></strong></p>
        <p><strong>Language : <?php echo $language;?></strong></p>
    </section>


    <?php
    if( have_rows('actors') ):
        ?>




    <!-- One -->
    <section id="one">
        <header class="major">
            <h2>Actors</h2>
        </header>
        <?php
        while ( have_rows('actors') ) : the_row();
            $bio = get_sub_field('bio');
            $age = get_sub_field('age');
            $awards = get_sub_field('awards');
            ?>
            <p><strong>Bio : <?php echo $bio;?></strong></p>
            <p><strong>Age : <?php echo $age;?></strong></p>
            <p><strong>Awards : <?php echo $awards;?></strong></p>
            <?php
        endwhile;
        ?>

        <?php
        endif;
        ?>
    </section>

</div>

<!-- Footer -->
<footer id="footer">
    <div class="inner">
        <ul class="icons">
            <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
            <li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
            <li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
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
