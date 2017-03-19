<?php
/**
 * The single blog post template file
 */
get_header();?>

  <div class="container">  
    <div class="row">
      <div class="col-sm-9">        
        <?php
          if ( have_posts()) : 
            while (have_posts()) : the_post(); 
              get_template_part('template-parts/content', 'single'); ?>

              <?php
                if (comments_open() || get_comments_number()) {
                  comments_template();
                }
              ?>
              
            <?php endwhile;
          endif; 
          
          if (is_singular('post')) {
            the_post_navigation(array(
              'next_text' => '<span class="next-post">Next post</span>',
              'prev_text' => '<span class="previous-post">Previous post</span>'
            ));
          }
        ?>             
      </div><!-- col-sm-9 -->
      <div class="col-sm-3">
        <?php get_sidebar(); ?>
      </div><!-- col-sm-3 -->
    </div><!-- row -->
 
  </div><!-- container -->

  
<?php get_footer(); ?>