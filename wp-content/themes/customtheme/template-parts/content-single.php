<?php
/**
 * The template partial for displaying single blog posts content
 *
 * @package CustomeTheme
 * @since Custom Theme 1.0
 */
?>
<!-- add post id and class extra post info to the div tag -->
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <h1><?php the_title(); ?></h1>
    <p><?php the_date(); ?></p>
    <p><?php the_category(); ?></p>
    <?php the_content();  ?> 

    <?php 
      //breaks the page up into multiple pages
      // need to add <!--nextpage--> in text mode in post body itself.
      wp_link_pages(array(
        'before'      => '<div class="page-links"><span class="page-links-title">'. __('Read more &raquo;', 'customtheme') . '</span>',
        'after'       => '</div>',
        'link_before' => '<span>',
        'link_after'  => '</span>',
        'pagelink'    => '<span class="screen-reader-text">'. __('Page', 'customtheme').'</span>%',
        'separator'   => '<span class="screen-reader-text">, </span>'
      )); 
    ?>
  </div>