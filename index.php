<?php
/**
 * Template Name: home
 * The main template file
 *
 * This is the most generic template file in a BootstrapMade theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage BootstrapMade
 * @since Twenty Twenty-One 1.0
 */

get_header(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Template Main CSS File -->
  <link href="<?php echo get_template_directory_uri(); ?>/assets/customcss/style.css" rel="stylesheet">
  
  <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">
  <? get_header(); ?>


</head>

<body>

  <!-- ======= Header ======= -->
  <?php include "inc/nav.php" ?>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
          data-aos="fade-up" data-aos-delay="200">
          <h1>
            <?php echo get_field('heroheading') ?>
          </h1>
          <h2>
            <?php echo get_field('herodesc') ?>
          </h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started scrollto">
              <?php echo get_field('getstart') ?>
            </a>
            <a href="<?php echo get_field('watchvedio') ?>" class="glightbox btn-watch-video"><i
                class="bi bi-play-circle"></i><span>
                <?php echo get_field('watchtitle') ?>
              </span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="<?php echo get_field('heroimage'); ?>" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">

        <div class="row" data-aos="zoom-in">
          <?php while (have_rows('client')):
            the_row(); ?>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img src="<?php echo get_sub_field('clientimage') ?>" class="img-fluid" alt="">
            </div>
          <?php endwhile; ?>

          <!-- <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?php echo get_field('client2') ?>" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?php echo get_field('client3') ?>" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?php echo get_field('client4') ?>" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?php echo get_field('client5') ?>" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?php echo get_field('client6') ?>" class="img-fluid" alt="">
          </div> -->

        </div>

      </div>
    </section><!-- End Cliens Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>
            <?php echo get_field('aboutheading') ?>
          </h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
              <?php echo get_field('aboutdesc1') ?>
            </p>
            <ul>
              <?php while (have_rows('aboutdesc1list')):
                the_row(); ?>
                <li><i class="ri-check-double-line"></i>
                  <?php echo get_sub_field('listdesc') ?>
                </li>
                <!-- <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li> -->
              <?php endwhile; ?>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              <?php echo get_field('aboutdesc2') ?>
            </p>
            <a href="#" class="btn-learn-more">
              <?php echo get_field('aboutbutton') ?>
            </a>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content">
              <h3>
                <?php echo get_field('whyusheading') ?><strong>
                  <?php echo get_field('whyusheadingbold') ?>
                </strong>
              </h3>
              <p>
                <?php echo get_field('whyusdesc') ?>
              </p>
            </div>

            <div class="accordion-list">
              <ul>
                <li>
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> Non
                    consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i
                      class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                    <p>
                      Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur
                      gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span>
                    Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i
                      class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet
                      id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est
                      pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt
                      dui.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span>
                    Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i
                      class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar
                      elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque
                      eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis
                      sed odio morbi quis
                    </p>
                  </div>
                </li>

              </ul>
            </div>

          </div>

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img"
            style='background-image: url("<?php echo get_field('whyusimage') ?>");' data-aos="zoom-in"
            data-aos-delay="150">&nbsp;</div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
            <img src="<?php echo get_field('skillimage'); ?>" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
            <h3>
              <?php echo get_field('skillheading'); ?>
            </h3>
            <p class="fst-italic">
              <?php echo get_field('skilldesc'); ?>
            </p>

            <div class="skills-content">

              <div class="progress">
                <span class="skill">
                  <?php echo get_field('htmlhead') ?> <i class="val">
                    <?php echo get_field('htmlpercentage') ?>
                  </i>
                </span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                  <!-- <?php echo get_field('html') ?> -->
                </div>
              </div>

              <div class="progress">
                <span class="skill">
                  <?php echo get_field('csshead') ?> <i class="val">
                    <?php echo get_field('csspercentage') ?>
                  </i>
                </span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                  </div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">
                  <?php echo get_field('jshead') ?> <i class="val">
                    <?php echo get_field('jspercentage') ?>
                  </i>
                </span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                  </div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">
                  <?php echo get_field('photoshophead') ?> <i class="val">
                    <?php echo get_field('photoshoppercentage') ?>
                  </i>
                </span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
                  </div>
                </div>
              </div>

            </div>

          </div>
        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>
            <?php echo get_field('servicehead') ?>
          </h2>
          <p>
            <?php echo get_field('servicedesc') ?>
          </p>
        </div>

        <div class="row">
          <?php while (have_rows('servicecards')):
            the_row(); ?>
            <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon-box">
                <div class="icon"><i class="<?php echo get_sub_field('cardicon') ?>"></i></div>
                <h4><a href="">
                    <?php echo get_sub_field('cardtitle') ?>
                  </a></h4>
                <p>
                  <?php echo get_sub_field('carddesc') ?>
                </p>
              </div>
            </div>
          <?php endwhile; ?>

          <!-- <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Sed ut perspici</a></h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">Magni Dolores</a></h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-layer"></i></div>
              <h4><a href="">Nemo Enim</a></h4>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
          </div> -->

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>
              <?php echo get_field('ctaheading') ?>
            </h3>
            <p>
              <?php echo get_field('ctadesc') ?>
            </p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">
              <?php echo get_field('ctabutton') ?>
            </a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>
            <?php echo get_field('portfoliotitle') ?>
          </h2>
          <p>
            <?php echo get_field('portfoliodesc') ?>
          </p>
        </div>

        <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active">
            <?php echo get_field('portfolioall') ?>
          </li>
          <li data-filter=".filter-app">
            <?php echo get_field('portfolioapp') ?>
          </li>
          <li data-filter=".filter-card">
            <?php echo get_field('portfoliocard') ?>
          </li>
          <li data-filter=".filter-web">
            <?php echo get_field('portfolioweb') ?>
          </li>
        </ul>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <?php while (have_rows('portfolioimages')):
            the_row(); ?>

            <div class="col-lg-4 col-md-6 portfolio-item <?php echo get_sub_field('imgfilter') ?>">
              <div class="portfolio-img"><img src="<?php echo get_sub_field('img1') ?>" class="img-fluid" alt=""></div>
              <div class="portfolio-info">
                <h4>
                  <?php echo get_sub_field('head') ?>
                </h4>
                <p>
                  <?php echo get_sub_field('para') ?>
                </p>
                <a href="<?php echo get_sub_field('img2') ?>" data-gallery="portfolioGallery"
                  class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
                <a href="<?php echo get_site_url(); ?>/portfolio" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          <?php endwhile; ?>

          <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/portfolio-3.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>App 2</h4>
              <p>App</p>
              <a href="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/portfolio-6.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>App 3</h4>
              <p>App</p>
              <a href="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/portfolio-2.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Web 1</h4>
              <p>Web</p>
              <a href="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          


          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/portfolio-5.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Web 2</h4>
              <p>Web</p>
              <a href="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/portfolio-9.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

         

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/portfolio-7.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Card 1</h4>
              <p>Card</p>
              <a href="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          
          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/portfolio-4.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Card 2</h4>
              <p>Card</p>
              <a href="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/portfolio-8.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Card 3</h4>
              <p>Card</p>
              <a href="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div> -->


        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>
            <?php echo get_field('teamtitle') ?>
          </h2>
          <p>
            <?php echo get_field('teamdesc') ?>
          </p>
        </div>

        <div class="row">

          <?php while (have_rows('teamcards')):
            the_row(); ?>

            <div class="col-lg-6 mb-4" data-aos="zoom-in" data-aos-delay="100">
              <div class="member d-flex align-items-start">
                <div class="pic"><img src="<?php echo get_sub_field('cardimg'); ?>" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>
                    <?php echo get_sub_field('cardtitle'); ?>
                  </h4>
                  <span>
                    <?php echo get_sub_field('cardspan'); ?>
                  </span>
                  <p>
                    <?php echo get_sub_field('cardpara'); ?>
                  </p>
                  <div class="social">
                    <a href=""><i class="<?php echo get_sub_field('cardicon1'); ?>"></i></a>
                    <a href=""><i class="<?php echo get_sub_field('cardicon2'); ?>"></i></a>
                    <a href=""><i class="<?php echo get_sub_field('cardicon3'); ?>"></i></a>
                    <a href=""> <i class="<?php echo get_sub_field('cardicon4'); ?>"></i> </a>
                  </div>
                </div>
              </div>
            </div>

          <?php endwhile; ?>

          <!-- <div class="col-lg-6 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/team/team-2.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
                <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/team/team-3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
                <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="400">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/team/team-4.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
                <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div> -->

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>
            <?php echo get_field('pricingtitle') ?>
          </h2>
          <p>
            <?php echo get_field('pricingdesc') ?>
          </p>
        </div>

        <div class="row">
          <?php while (have_rows('pricingcards')):
            the_row(); ?>


            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
              <div class="box">
                <h3>
                  <?php echo get_sub_field('cardtitle') ?>
                </h3>
                <h4><sup>
                    <?php echo get_sub_field('cardsup') ?>
                  </sup>
                  <?php echo get_sub_field('cardprice') ?>
                  <span>
                    <?php echo get_sub_field('cardmonth') ?>
                  </span>
                </h4>
                <ul>
                  <?php while (have_rows('cardchecklist')):
                    the_row(); ?>
                    <li><i class="<?php echo get_sub_field('listicon') ?>"></i>
                      <?php echo get_sub_field('listdesc') ?>
                    </li>
                    <!-- <li><i class="<?php echo get_sub_field('') ?>"></i> <?php echo get_sub_field('') ?></li>
                <li><i class="<?php echo get_sub_field('') ?>"></i> <?php echo get_sub_field('') ?></li>
                <li class="na"><i class="<?php echo get_sub_field('') ?>"></i> <span><?php echo get_sub_field('') ?></span></li>
                <li class="na"><i class="<?php echo get_sub_field('') ?>"></i> <span><?php echo get_sub_field('') ?></span></li> -->
                  <?php endwhile; ?>
                </ul>
                <a href="#" class="buy-btn">Get Started</a>
              </div>
            </div>

          <?php endwhile; ?>


          <!-- <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="box featured">
              <h3>Business Plan</h3>
              <h4><sup>$</sup>29<span>per month</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
                <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
              </ul>
              <a href="#" class="buy-btn">Get Started</a>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="box">
              <h3>Developer Plan</h3>
              <h4><sup>$</sup>49<span>per month</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
                <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
              </ul>
              <a href="#" class="buy-btn">Get Started</a>
            </div>
          </div> -->

        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>
            <?php echo get_field('frequentquestiontitle') ?>
          </h2>
          <p>
            <?php echo get_field('frequentquestiondesc') ?>
          </p>
        </div>

        <div class="faq-list">
          <ul>
            <?php while (have_rows('frequentquestionsaccordian')):
              the_row(); ?>

              <li data-aos="fade-up" data-aos-delay="100">
                <i class="<?php echo get_sub_field('accordionhelpicon') ?>"></i> <a data-bs-toggle="collapse"
                  class="collapse" data-bs-target="#<?php echo get_sub_field('accordionid') ?>">
                  <?php echo get_sub_field('accordiontitle') ?><i class="bx bx-chevron-down icon-show"></i><i
                    class="bx bx-chevron-up icon-close"></i>
                </a>
                <div id="<?php echo get_sub_field('accordionid') ?>" class="collapse close" data-bs-parent=".faq-list">
                  <p>
                    <?php echo get_sub_field('accordiondesc') ?>
                  </p>
                </div>
              </li>
            <?php endwhile; ?>

            <!-- <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="500">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                </p>
              </div>
            </li> -->

          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>
            <?php echo get_field('contacttiltle') ?>
          </h2>
          <p>
            <?php echo get_field('contactdesc') ?>
          </p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="<?php echo get_field('locationicon') ?>"></i>
                <h4>
                  <?php echo get_field('locationlabel') ?>
                </h4>
                <p>
                  <?php echo get_field('address') ?>
                </p>
              </div>

              <div class="email">
                <i class="<?php echo get_field('envelope') ?>"></i>
                <h4>
                  <?php echo get_field('emaillabel') ?>
                </h4>
                <p>
                  <?php echo get_field('emailid') ?>
                </p>
              </div>

              <div class="phone">
                <i class="<?php echo get_field('phoneicon') ?>"></i>
                <h4>
                  <?php echo get_field('phonelabel') ?>
                </h4>
                <p>
                  <?php echo get_field('phonenum') ?>
                </p>
              </div>

              <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <?php //echo do_shortcode('[contact-form-7 id="ec6d3bc" title="Contact form 1"]') ?>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <div class="wpcf7 js php-email-form" id="wpcf7-f201-o1" lang="en-US" dir="ltr">
              <form action="forms/contact.php" method="post" role="form" >
                <div class="screen-reader-response">
                  <p role="status" aria-live="polite" aria-atomic="true"></p>
                  <ul></ul>
                </div>
                <form
                  action="/BootstrapMade/?your-name=aa&amp;your-email=aasws%40gmail.com&amp;your-subject=sws&amp;your-message=sws#wpcf7-f201-o1"
                  method="post" class="wpcf7-form init" aria-label="Contact form" novalidate="novalidate"
                  data-status="init">
                  <div style="display: none;">
                    <input type="hidden" name="_wpcf7" value="201">
                    <input type="hidden" name="_wpcf7_version" value="5.8.3">
                    <input type="hidden" name="_wpcf7_locale" value="en_US">
                    <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f201-o1">
                    <input type="hidden" name="_wpcf7_container_post" value="0">
                    <input type="hidden" name="_wpcf7_posted_data_hash" value="">
                  </div>

                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="name">Your Name</label>
                      <input type="text" name="your-name" class="form-control" id="name" style="border:#d8dde4 solid 1px !important" required>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="name">Your Email</label>
                      <input type="email" class="form-control" name="your-email" id="email" style="border:#d8dde4 solid 1px !important" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="name">Subject</label>
                    <input type="text" class="form-control" name="your-subject" id="subject" style="border:#d8dde4 solid 1px !important" required>
                  </div>
                  <div class="form-group">
                    <label for="name">Message</label>
                    <textarea class="form-control" name="your-message" rows="10" style="border:#d8dde4 solid 1px !important" required></textarea>
                  </div>
                  <div class="my-3 text-center">
                    <span class="wpcf7-spinner "></span>
                    <div class="error-message"></div>
                    <div class="wpcf7-response-output" style="border: 2px solid white !important;" aria-hidden="true"></div>
                  </div>
                  <div class="text-center"><button type="submit" class="wpcf7-submit">Send Message</button></div>

                </form>
              </form>
            </div>

          </div>



        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php get_footer(); ?>
  <!-- End Footer -->



</body>

</html>