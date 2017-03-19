  <?php
/**
 * The header template file
 */
?>
<!DOCTYPE html>
  <html <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <!-- Latest compiled and minified CSS -->
    <?php wp_head(); ?>   
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->  
    
  </head>
  <body <?php body_class(); ?>>
    <header id="site-header" class="banner">
      <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
          </div><!-- navbar-header -->

            <?php
              wp_nav_menu( array(
                'theme_location'  => 'primary',
                'container'       => 'nav',
                'container_class' => 'navbar-collapse collapse',
                'menu_class'      =>  'nav navbar-nav navbar-right'
              ));
            ?>        


        </div><!-- /.container-fluid -->
      </div><!-- navbar navbar-inverse navbar-fixed-top -->
    </header><!-- /header -->    