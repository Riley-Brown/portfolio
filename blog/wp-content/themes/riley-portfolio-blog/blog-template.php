<?php
/*
 *Template Name: Blog Post
 */
?>

<?php define('WP_USE_THEMES', false);
get_header(); ?>

<div class="container">
 
     <h1> test blog </h1>


</div>
<div class="container-fluid">
<?php 
if (have_posts()) {
    while (have_posts()) {
        the_post(); 
                //
                // Post Content here
                //
    } // end while
} // end if
?>

</div>
<?php get_footer(); ?>