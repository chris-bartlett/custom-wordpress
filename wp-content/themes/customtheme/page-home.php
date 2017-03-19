<?php
/**
 * Template Name: Home
 * The home page template file
 */
get_header();?>

  <div class="jumbotron">
    <h1>Hello, world!</h1>
    <p>...</p>
    <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
  </div>
      
  <div class="container">

    <?php
      if ( have_posts()) : 
        while (have_posts()) : the_post(); ?>
          <h1><?php the_title(); ?></h1>
          <?php the_content();  ?> 
        <?php endwhile;
      endif; 
    ?>    
  </div>

  
<?php get_footer(); ?>
