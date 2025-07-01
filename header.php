<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pharmaceutical Tuition Academy | Expert Pharma Courses & Training</title>
  <meta name="description"
    content="Join the leading pharmaceutical tuition academy offering expert faculty, industry-recognized courses, and career growth opportunities in pharma education." />
  <meta name="keywords"
    content="pharmaceutical tuition, pharma courses, pharma training, pharma education, pharmaceutical academy" />

  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

  <!-- Header Top Strip -->
  <div class="top-strip">
    <marquee behavior="scroll" direction="left">💻 Our training programs are approved by NABL and FDA, ensuring the highest standards in pharmacy education and certification. &nbsp;&nbsp;&nbsp;
      📅 New QA and QC Weekend 9:30 AM Batch Starting From 01st Aug</marquee>
  </div>

  <!-- Header -->
  <header class="bg-white shadow-sm sticky-top">
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <!-- Logo -->
        <a class="navbar-brand fw-bold text-success" href="<?php echo home_url(); ?>">
          <?php if (has_custom_logo()) {
            the_custom_logo();
          } else {
            bloginfo('name');
          } ?>
        </a>
        <!-- Toggle button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Menu -->
        <div class="collapse navbar-collapse" id="mainNavbar">
          <?php
          wp_nav_menu(array(
            'theme_location' => 'primary-menu',
            'container' => false,
            'menu_class' => 'navbar-nav ms-auto',
            'fallback_cb' => '__return_false',
            'items_wrap' => '<ul class="%2$s">%3$s</ul>',
            'depth' => 1,
            'walker' => new bootstrap_5_wp_nav_menu_walker()
          ));
          ?>
          <a href="#" class="ms-lg-3" onclick="openPopup(); return false;">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Group 3.png" alt="Get Free Demo"
              style="height: 40px;">
          </a>
          <div id="popupModal" class="popup-modal">
            <div class="popup-content">
              <span class="close-btn" onclick="closePopup()">&times;</span>
              <a href="https://wa.me/919970611896" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/BEST-COURSE.png"
                  alt="Join WhatsApp" class="img-fluid" />
              </a>
            </div>
          </div>

        </div>
      </div>

    </nav>
  </header>