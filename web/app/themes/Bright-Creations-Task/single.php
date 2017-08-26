<?php
if (is_singular('moviess')) {include (TEMPLATEPATH . '/Single-Movie.php');
}
else if(is_singular('articles')) { include (TEMPLATEPATH . '/Single-Article.php');
}
?>
