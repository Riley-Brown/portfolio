<?php get_header(); ?>
    
 
<div class="container-fluid">
<div class="row">

<div class="col-md-8 blog-main">
    
    <?php 
    if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div class="blog-post">
        
            <h2 class="blog-post-title"><?php the_title(); ?></h2>
            
	        <p class="blog-post-meta"><?php the_time(get_option('date_format')); ?> by <a href="#"><?php the_author(); ?></a></p>
    
        <!-- post thumbnai; -->
        <?php if (has_post_thumbnail()) : ?>
        <div class="post-thumb">
        <?php the_post_thumbnail(); ?>
        </div>
    <?php endif; ?>
    
    <?php the_content(); ?>
	


<hr> 
</div><!-- /.blog-post -->



<?php
endwhile;
endif;
?>
			

</div> <!-- /.blog-main -->

<?php get_sidebar(); ?>

</div> <!-- /.row -->
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.bundle.min.js" integrity="sha384-lZmvU/TzxoIQIOD9yQDEpvxp6wEU32Fy0ckUgOH4EIlMOCdR823rg4+3gWRwnX1M "
        crossorigin="anonymous"></script> 
	
        <script src="<?php bloginfo('stylesheet_directory'); ?>/js/main.js"></script>
	
		<?php wp_footer(); ?>