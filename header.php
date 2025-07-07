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
<style>
  .navbar-nav .nav-link {
  white-space: nowrap; /* Keeps text in one line */
}
</style>
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
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Menu and WhatsApp Button -->
      <div class="collapse navbar-collapse" id="mainNavbar">
        <!-- Menu -->
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center">
        

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="coursesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Courses
            </a>
            <ul class="dropdown-menu" aria-labelledby="coursesDropdown">
              <li><a class="dropdown-item" href="<?php echo site_url('/quality-control'); ?>">QC Professional</a></li>
              <li><a class="dropdown-item" href="<?php echo site_url('/quality-assurance'); ?>">QA Professional</a></li>
              <li><a class="dropdown-item" href="#">QA/QC Professional</a></li>
              <li><a class="dropdown-item" href="#">R&D Professional</a></li>
              <!-- <li><a class="dropdown-item" href="#">GMP & GLP Training</a></li>
              <li><a class="dropdown-item" href="#">Regulatory Affairs</a></li> -->
            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('/about-us'); ?>">About Us</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('/success-stories'); ?>">Success Stories</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('/hiring-partners'); ?>">Hiring Partner</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('/training-partners'); ?>">Traning Partner</a>
          </li>

           <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('/blog'); ?>">Blogs</a>
          </li>


          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('/contact-us'); ?>">Contact</a>
          </li>

          <!-- WhatsApp Button -->
          <li class="nav-item ms-lg-3 mt-3 mt-lg-0">
            <a href="#" onclick="openPopup(); return false;">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Group 3.png" alt="Get Free Demo" style="height: 40px;">
            </a>
          </li>
        </ul>

        <!-- Popup Modal -->
        <div id="popupModal" class="popup-modal">
          <div class="popup-content">
            <span class="close-btn" onclick="closePopup()">&times;</span>
            <a href="https://wa.me/919970611896" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/BEST-COURSE.png" alt="Join WhatsApp" class="img-fluid" />
            </a>
          </div>
        </div>
      </div>
    </div>
  </nav>
</header>
