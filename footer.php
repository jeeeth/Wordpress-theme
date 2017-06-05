<!-- footer section -->
<div class="container-fluid footer-menu">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 border-right">
        <?php if ( get_theme_mod( 'themeslug_logo' ) ) : ?>

          <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'>
            <img src='<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'  class="img-responsive " style="max-width:250px;" ></a>

          <?php else : ?>

          <?php endif; ?>

        <br>
        <p class="text-justify">Kural Consulting is an IT Consulting and Services outfit promoted by first generation entrepreneurs with 30 years’ experience in ERP s - SAP, MS Dynamics AX/NAV/CRM and Oracle eBIZ - Education and Knowledge building</p>
        <div class="media">
          <a class="media-left" href="#">
            <i class="fa fa-map-marker"></i>
          </a>
          <div class="media-body">
            <p>Address: Tresa’s 112, <br>
              Ram Nagar 1st Street North Extn.<br>
              (Via) Vijaya Nagar 6th Main Road Velachery,<br>
              Chennai, India – 600 042
            </p>

          </div>
        </div>
        <div class="media">
          <a class="media-left" href="#">
            <i class="fa fa-phone"></i>
          </a>
          <div class="media-body">
            <p><a href="tel:+91 97890 93899">+91 97890 93899</a></p>
          </div>
        </div>
        <div class="media">
          <a class="media-left" href="#">
            <i class="fa fa-envelope-o"></i>
          </a>
          <div class="media-body">
            <a href="mailto:mvelluvaan@kuralconsulting.com">	mvelluvaan@kuralconsulting.com</a>
          </div>
        </div>
        <br>
        <p class="text-justify">Kural acknowledges the proprietary rights of other companies/owners to the trademarks, logos, product names and such other intellectual property rights mentioned in this website. </p>
      </div>
      <div class="col-sm-2  footer-links">
        <h4>LINKS</h4>
        <hr class="hr-footer">

        <div class="bt-links">
          <?php wp_nav_menu_no_ul('footer2'); ?>
          <!-- <li><a href="javascript">SITEMAP</a></li>
          <li><a href="javascript">PRIVACY POLICY</a></li>
          <li><a href="javascript">DISCLAIMER</a></li>
          <li><a href="javascript">WHO WE ARE</a></li>
          <li><a href="javascript">SERVICES</a></li>
          <li><a href="javascript">CONTACT US</a></li> -->
        </div>
      </div>
      <div class="col-sm-4 sap-services border-left">
        <div class="">
          <h4>SHORT LINKS</h4>
          <hr class="hr-footer">
        </div>

        <ul class="list-unstyled">
          <?php wp_nav_menu_no_ul('footer'); ?>


        </ul>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid footer">
  <div class="container">
    <div class="row">
      <div class="col-sm-8" style="vertical-align:middle">
        <p class="text-left " style="margin:0;padding-top:1%">© <?php echo date('Y'); ?> <?php _e( 'KuralConsulting. All Rights Reserved.' ); ?></p>
      </div>
      <div class="col-sm-4">
        <?php echo do_shortcode( '[cn-social-icon selected_icons="1,6,2,4,3,5"]' ); ?>
      </div>
    </div>
  </div>
</div>

</div>
</body>
<?php wp_footer(); ?>
</html>
