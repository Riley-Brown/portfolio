<?php get_header(); ?>
<div class="container-fluid">
<div class="row">

<div class="col-md-8 blog-main">
    
    <?php 
    if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div class="blog-post">
        <a href="<?php the_permalink(); ?>" style="text-decoration: none; color: #222222">	
            <h2 class="blog-post-title"><?php the_title(); ?></h2>
            </a>
	        <p class="blog-post-meta"><?php the_time(get_option('date_format')); ?> by <a href="#"><?php the_author(); ?></a></p>
    
        <!-- post thumbnai; -->
        <?php if (has_post_thumbnail()) : ?>
        
        <div class="post-thumb">
        <?php the_post_thumbnail(); ?>
        </div>
    <?php endif; ?>
    
    <?php the_excerpt(); ?>
        <div class=" read-more btn btn-primary">
            <a href="<?php the_permalink(); ?>"> Read More </a> 
        </div>
	


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



	
        
        <?php get_footer(); ?>