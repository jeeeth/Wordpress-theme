<!DOCTYPE html>
<html lang="<?php  bloginfo( 'language' ); ?>">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title><?php the_title(); ?> - <?php bloginfo( 'name' ); ?> </title>
  <!-- fonts links -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body>
  <!-- main container -->
  <div class="main-container">
    <!-- top header section -->
    <div class="container-fluid top-header" style="background-color:#000">

      <div class="">
        <div class="row">
          <div class="col-sm-3" style="background-color:#fff">
            <?php if ( get_theme_mod( 'themeslug_logo' ) ) : ?>

              <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'>
                <img src='<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'  class="img-responsive center-block " style="max-width:250px;" ></a>

              <?php else : ?>

              <?php endif; ?>

            </div>
            <div class="col-sm-2 address">
              <div class="media">
                <a class="media-left media-middle" href="#">
                  <i class="fa fa-map-marker fa-2x"></i>
                </a>
                <div class="media-body">
                  <p>Tresa’s 112, Ram Nagar <br>1st Street North Extn. <br>Velachery, Chennai–42</p>
                </div>
              </div>

            </div>
            <div class="col-sm-2 timing " style="color:#fff">
              <div class="media">
                <a class="media-left media-middle" href="#">
                  <i class="fa fa-clock-o fa-2x"></i>
                </a>
                <div class="media-body">
                  <p>9am-8pm <br>Mon - Sat</p>

                </div>
              </div>
            </div>
            <div class="col-sm-3 col-xs-12  contact">
              <div class="media ">
                <a class="media-left media-middle" href="#">
                  <i class="fa fa-files-o fa-2x "></i>
                </a>
                <div class="media-body">
                  <a href="mailto:mvelluvaan@kuralconsulting.com">mvelluvaan@kuralconsulting.com</a> <br>
                  <a href="tel:+91 97890 93899">+91 97890 93899</a>
                </div>
              </div>

            </div>
            <div class="col-sm-2 contact-link">
              <button type="button" name="button" class="btn btn-info btn-md">GET A CALL BACK</button>
            </div>
          </div>
        </div>
      </div>
      <!-- menu section -->
      <nav class="navbar navbar-default menu-section " role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
              <span class="sr-only">Toggle navigation</span>
              <i class="fa fa-bars fa-2x"></i>
            </button>
            <a class="navbar-brand" href="#"></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="navbar">

            <?php
            wp_nav_menu( array(
              'menu'              => 'primary',
              'theme_location'    => 'primary',
              'depth'             => 2,
              'menu_class'        => 'nav navbar-nav navbar-left ',
              'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
              'walker'            => new wp_bootstrap_navwalker())
            );
            ?>

            <!-- <form role="form" class="navbar-form navbar-right" id="header">
              <div class="input-group add-on">
                <input class="form-control" placeholder="" name="srch-term" id="srch-term" type="text">
                <div class="input-group-btn">
                  <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                </div>
              </div>
            </form> -->
            <div class="" id="header">
              <?php get_search_form(); ?>
            </div>

          </div>
          <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
      </nav>
