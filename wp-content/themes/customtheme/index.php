<?php
/**
 * The main template file
 */
get_header();?>

  
  <div class="container">

  
    <?php
      if ( have_posts()) : 
        while (have_posts()) : the_post(); ?>
         <?php the_title( sprintf('<a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a>'); ?>
          <?php the_excerpt();  ?> 
        <?php endwhile;
      endif; 
    ?>    
    
    <?php get_sidebar(); ?>
  </div><!-- container -->

  
<?php get_footer(); ?>
