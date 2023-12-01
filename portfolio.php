
<!DOCTYPE html>
<html lang="en">
<head>
   
    <?php get_header(); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/customcss/style.css" />
</head>

<?php include_once('inc/nav.php'); ?>


    <?php// $category = isset($_GET['cat'])?$_GET['cat']:"all"; ?>
    

  

<main id="main">

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <ol>
      <li><a href="index.html">Home</a></li>
      <li>Portfolio Details</li>
    </ol>
    <h2>Portfolio Details</h2>

  </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Portfolio Details Section ======= -->
<section id="portfolio-details" class="portfolio-details">
  <div class="container">

    <div class="row gy-4">

      <div class="col-lg-8">
        <div class="portfolio-details-slider swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
          <div class="swiper-wrapper align-items-center" id="swiper-wrapper-8d3fb693db451d12" aria-live="off" style="transform: translate3d(-2208px, 0px, 0px); transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="2" role="group" aria-label="3 / 3" style="width: 736px;">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/portfolio-3.jpg" alt="">
            </div>

            <div class="swiper-slide swiper-slide-duplicate-next" data-swiper-slide-index="0" role="group" aria-label="1 / 3" style="width: 736px;">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/portfolio-1.jpg" alt="">
            </div>

            <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="1" role="group" aria-label="2 / 3" style="width: 736px;">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/portfolio-2.jpg" alt="">
            </div>

            <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="2" role="group" aria-label="3 / 3" style="width: 736px;">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/portfolio-3.jpg" alt="">
            </div>

          <div class="swiper-slide swiper-slide-duplicate swiper-slide-next" data-swiper-slide-index="0" role="group" aria-label="1 / 3" style="width: 736px;">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/portfolio-1.jpg" alt="">
            </div></div>
          <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 3" aria-current="true"></span></div>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
      </div>

      <div class="col-lg-4">
        <div class="portfolio-info">
          <h3>Project information</h3>
          <ul>
            <li><strong>Category</strong>: Web design</li>
            <li><strong>Client</strong>: ASU Company</li>
            <li><strong>Project date</strong>: 01 March, 2020</li>
            <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li>
          </ul>
        </div>
        <div class="portfolio-description">
          <h2>This is an example of portfolio detail</h2>
          <p>
            Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
          </p>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Portfolio Details Section -->

</main>
               


 <?php get_footer(); ?>
    
    
    
</body>

</html>