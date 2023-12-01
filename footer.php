<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage BootstrapMade
 * @since BootstrapMade 1.0
 */

?>
		<!-- ======= Footer ======= -->
    <footer id="footer">

<div class="footer-newsletter">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6 mb-3">
        <h4><?php echo get_field('subscribetitle')?></h4>
        <p><?php echo get_field('subscribedesc')?></p>
        <?php //echo do_shortcode('[email-subscribers-form id="1"]')?>
        <div class="emaillist" id="es_form_f1-n1">
  <form
    action="/BootstrapMade/?your-name=aa&amp;your-email=aasws%40gmail.com&amp;your-subject=sws&amp;your-message=sws#es_form_f1-n1"
    method="post"
    class="es_subscription_form es_shortcode_form es_ajax_subscription_form"
    id="es_subscription_form_65683c5ad7c37"
    data-source="ig-es"
    data-form-id="1"
  >
    <input type="hidden" name="esfpx_form_id" value="1" /><input
      type="hidden"
      name="esfpx_lists[]"
      value="f1245c40db69"
    /><input type="hidden" name="es" value="subscribe" />
    <input type="hidden" name="esfpx_es_form_identifier" value="f1-n1" />
    <input type="hidden" name="esfpx_es_email_page" value="33" />
    <input
      type="hidden"
      name="esfpx_es_email_page_url"
      value="http://localhost/BootstrapMade/"
    />
    <input type="hidden" name="esfpx_status" value="Unconfirmed" />
    <input
      type="hidden"
      name="esfpx_es-subscribe"
      id="es-subscribe-65683c5ad7c37"
      value="657213f497"
    />
    <label
      style="position: absolute; top: -99999px; left: -99999px; z-index: -99"
      aria-hidden="true"
      ><span hidden="">Please leave this field empty.</span
      ><input
        type="email"
        name="esfpx_es_hp_email"
        class="es_required_field"
        tabindex="-1"
        autocomplete="-1"
        value="" /></label
    >
        <form action="" method="post">
          <input type="email" name="esfpx_email"
            autocomplete="off"
            placeholder=""
            id="esfpx_email_0fe74ada6116e"
            class="es-email"><input type="submit" value="Subscribe">
        </form>
      </div>
    </div>
  </div>
</div>

<div class="footer-top">
  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-6 footer-contact">
        <h3> <?php echo ot_get_option('main_logo') ?></h3>
        <p >
        <?php echo ot_get_option('address') ?> <br><br>
          <strong> <?php echo ot_get_option('phn') ?></strong>  <?php echo ot_get_option('phn_number') ?><br>
          <strong> <?php echo ot_get_option('email_label') ?></strong>  <?php echo ot_get_option('email_id') ?><br>
        </p>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4 style="text-align:left;"><?php echo ot_get_option('links') ?></h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="#"><?php echo ot_get_option('links_home') ?></a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#about"><?php echo ot_get_option('links_about') ?></a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#services"><?php echo ot_get_option('links_service') ?></a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#portfolio"><?php echo ot_get_option('links_terms') ?></a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#team"><?php echo ot_get_option('links_privacy') ?></a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4 style="text-align:left;"><?php echo ot_get_option('services') ?></h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="#"><?php echo ot_get_option('design') ?></a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#"><?php echo ot_get_option('development') ?></a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#"><?php echo ot_get_option('product') ?></a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#"><?php echo ot_get_option('marketing') ?></a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#"><?php echo ot_get_option('graphic') ?></a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4><?php echo ot_get_option('social') ?></h4>
        <p><?php echo ot_get_option('social_desc') ?></p>
        <div class="social-links mt-3">
          <a href="#" class="twitter"><i class="<?php echo ot_get_option('twitter_link') ?>"></i></a>
          <a href="#" class="facebook"><i class="<?php echo ot_get_option('facebook_link') ?>"></i></a>
          <a href="#" class="instagram"><i class="<?php echo ot_get_option('instagram_link') ?>"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="<?php echo ot_get_option('linkedin_link') ?>"></i></a>
        </div>
      </div>

    </div>
  </div>
</div>

<div class="container footer-bottom clearfix">
  <div class="copyright">
    &copy; Copyright <strong><span>Arsha</span></strong>. All Rights Reserved
  </div>
  <div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
  </div>
</div>
</footer><!-- End Footer -->


<div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/aos/aos.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>


<?php wp_footer(); ?>

</body>
</html>
