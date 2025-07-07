<?php
/*
  Template Name: Success Stories
*/
?>

<?php get_header(); ?>
<style>
  .gallery-section {
    padding: 60px 15px;
    background-color: #fff;
  }

  .gallery-title {
    text-align: center;
    font-size: 2rem;
    font-weight: 700;
    margin-bottom: 40px;
    font-family: 'Work Sans', sans-serif;
  }

  .masonry-grid {
    column-count: 3;
    column-gap: 15px;
  }

  @media (max-width: 992px) {
    .masonry-grid {
      column-count: 2;
    }
  }

  @media (max-width: 576px) {
    .masonry-grid {
      column-count: 1;
    }
  }

  .masonry-item {
    break-inside: avoid;
    margin-bottom: 15px;
    overflow: hidden;
    border-radius: 6px;
  }

  .masonry-item img {
    width: 100%;
    display: block;
    height: auto;
    border-radius: 6px;
    transition: transform 0.3s ease;
  }

  .masonry-item img:hover {
    transform: scale(1.05);
  }
</style>


<section class="hero-section12">
  <div class="container">
    <h1>1000+ Students Use LabSkillPro<br>to Level Up Their Skills</h1>
    <p class="breadcrumb-text">Home / Success Stories</p>

    <!-- Tags -->
    <div class="tag tag1">Sagar Deewan <i class="bi bi-person-fill"></i></div>
    <div class="tag tag2">Datta More <i class="bi bi-person-fill"></i></div>
    <div class="tag tag3">Raju Perela <i class="bi bi-person-fill"></i></div>

    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Frame.png" class="main-illustration"
      alt="Student Vector">

    <div class="tag tag4">Yatin Goal <i class="bi bi-person-fill"></i></div>
    <div class="tag tag5">Vinayak Patil <i class="bi bi-person-fill"></i></div>
    <div class="tag tag6">Rajesh Gidwani <i class="bi bi-person-fill"></i></div>
  </div>
</section>

<!-- 
card of student Success -->


<section class="success-section">
  <div class="container">
    <h1 class="background-text1 m5b-0">GET HIRED</h1>
    <h2 class="service-title mb-4 text-center">
      <span class="service-title  ">▲</span>Some of our recent successes stories
    </h2>
    <div class="row mt-5" id="testimonialContainer">
      <!-- Testimonial Card -->
      <div class="col-md-6 d-none testimonial-card-wrapper">
        <div class="testimonial-card mb-3">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tushar.png" class="testimonial-image"
            alt="Student">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Group 17.png" class="testimonial-company"
            alt="Company">
          <h5 class="testimonial-name">Tushar Jadhav</h5>
          <p class="testimonial-role">Angular Developer</p>
          <div class="stars">⭐ ⭐ ⭐ ⭐ ⭐</div>
          <p class="testimonial-text">
            I highly recommend CodeFirst to anyone looking to embark on a journey in software development...
          </p>
        </div>
      </div>

      <div class="col-md-6 d-none testimonial-card-wrapper">
        <div class="testimonial-card mb-3">
          <img src="https://via.placeholder.com/80" class="testimonial-image" alt="Student">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Group 19.png" class="testimonial-company"
            alt="Company">
          <h5 class="testimonial-name">sharad kharat</h5>
          <p class="testimonial-role">Fullstack Developer</p>
          <div class="stars">⭐ ⭐ ⭐ ⭐ ⭐</div>
          <p class="testimonial-text">
            Unlock Your Full Potential in Full-Stack Development at CodeFirst...
          </p>
        </div>
      </div>

      <!-- Add more cards similarly... -->
      <div class="col-md-6 d-none testimonial-card-wrapper ">
        <div class="testimonial-card">
          <img src="https://via.placeholder.com/80" class="testimonial-image" alt="Student">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Frame.png" class="testimonial-company"
            alt="Company">
          <h5 class="testimonial-name">vishal patil</h5>
          <p class="testimonial-role">Fullstack Developer</p>
          <div class="stars">⭐ ⭐ ⭐ ⭐ ⭐</div>
          <p class="testimonial-text">
            Unlock Your Full Potential in Full-Stack Development at CodeFirst...
          </p>
        </div>
      </div>
      <div class="col-md-6 d-none testimonial-card-wrapper">
        <div class="testimonial-card">
          <img src="https://via.placeholder.com/80" class="testimonial-image" alt="Student">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Frame.png" class="testimonial-company"
            alt="Company">
          <h5 class="testimonial-name">piyush</h5>
          <p class="testimonial-role">Fullstack Developer</p>
          <div class="stars">⭐ ⭐ ⭐ ⭐ ⭐</div>
          <p class="testimonial-text">
            Unlock Your Full Potential in Full-Stack Development at CodeFirst...
          </p>
        </div>
      </div>
    </div>

    <!-- Load More Button -->
    <button id="loadMore">Load More</button>
  </div>
</section>


<!-- image-background-slider -->

<section class="position-relative overflow-hidden parallax-section" style="height: 90vh;">
  <div class="position-absolute top-0 start-0 w-100 h-100 parallax-bg"></div>
  <div
    class="container h-100 d-flex flex-column justify-content-center align-items-center text-white position-relative z-1 text-center content1">
    <h2 class="display-4 fw-bold text-white">Your Vision, Our Execution</h2>
    <p class="lead text-white">We bring your ideas to life with design and
      performance.</p>
  </div>
</section>



<!-- About Us Section -->
<section class="about-section py-5">
  <div class="container">
    <!-- <div class="about-label mb-3">
      <span>About Us</span>
    </div> -->
    <div class="row align-items-center">
      <div class="col-lg-5">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/traning-1.png" alt="Medical Team"
          class="img-fluid" style="max-width: 100%;">
      </div>
      <div class="col-lg-7">
        <h2 class="about-heading">
          Why <span class="labskill-highlight">Success Stories</span> That Inspire the Future of Pharmacy ?
        </h2>

        <p class="about-text">
          At <strong>LabSkillPro</strong>, our mission goes beyond training — we shape futures. From aspiring students to certified
          professionals, our graduates have secured roles in top pharmaceutical companies and healthcare institutions
          across India. These inspiring journeys showcase the power of hands-on training, expert mentorship, and a
          commitment to excellence.

         

        </p>
      </div>
    </div>
  </div>
</section>

<!-- succes-gallery-section -->


<section class="success-gallery-section">
  <div class="container">
    <h2><span class="text-light ">▲ </span>1000 Hours of Free Sessions Across Maharashtra</h2>
    <p>
      We’re dedicating 1000+ hours of free training sessions across Maharashtra to fuel career opportunities and drive
      placements.
    </p>

    <div class="gallery-grid">
      <img src="https://via.placeholder.com/600x400?text=Image+1" alt="Gallery Image">
      <img src="https://via.placeholder.com/600x400?text=Image+2" alt="Gallery Image">
      <img src="https://via.placeholder.com/600x400?text=Image+3" alt="Gallery Image">
      <img src="https://via.placeholder.com/600x400?text=Image+4" alt="Gallery Image">
      <img src="https://via.placeholder.com/600x400?text=Image+5" alt="Gallery Image">
      <img src="https://via.placeholder.com/600x400?text=Image+6" alt="Gallery Image">
      <!-- Add more <img> tags as needed -->
    </div>
  </div>
</section>


<!-- student-review and card slider -->

<section class="student-review-section py-5 bg-light">
  <div class="container mb-4">
    <!-- <h1 class="background-text1 m5b-0"></h1> -->
    <h1 class="service-title mb-4 text-center">
      <span class="service-title  ">▲</span>what our student say
    </h1>

    <div class="position-relative">
      <!-- Wrapper -->
      <div class="d-flex overflow-hidden" id="review-slider" style="scroll-behavior: smooth;">
        <!-- Slides -->
        <div class="d-flex flex-nowrap" style="min-width: 100%; gap: 20px;" id="review-cards-container">
          <!-- Each card -->
          <div class="review-card">
            <img src="https://via.placeholder.com/300x230?text=Student+1" />
            <h5>Pratibha Shalake</h5>
            <small>Angular Developer</small>
            <p>CodeFirst’s training bridged the gap between dreams and reality.</p>
          </div>

          <div class="review-card">
            <img src="https://via.placeholder.com/300x230?text=Student+2" />
            <h5>Akshay Pise</h5>
            <small>Angular Developer</small>
            <p>Highly recommended! The skills I gained opened up opportunities.</p>
          </div>

          <div class="review-card">
            <img src="https://via.placeholder.com/300x230?text=Student+3" />
            <h5>Kajal Parchande</h5>
            <small>Fullstack Developer</small>
            <p>Supportive community helped me launch my career.</p>
          </div>

          <div class="review-card">
            <img src="https://via.placeholder.com/300x230?text=Student+4" />
            <h5>Chandani Jadhav</h5>
            <small>Angular Developer</small>
            <p>Hands-on experience helped me unlock my full potential.</p>
          </div>

          <div class="review-card">
            <img src="https://via.placeholder.com/300x230?text=Student+5" />
            <h5>Rohit Bhosale</h5>
            <small>Backend Developer</small>
            <p>Real-world project exposure gave me backend confidence.</p>
          </div>

          <div class="review-card">
            <img src="https://via.placeholder.com/300x230?text=Student+6" />
            <h5>Payal More</h5>
            <small>React Developer</small>
            <p>Quickly got a job after completing my React training.</p>
          </div>
        </div>
      </div>

      <!-- Controls -->
      <button class="btn btn-info text-white position-absolute top-50 start-0 translate-middle-y"
        onclick="slideLeft()">‹</button>
      <button class="btn btn-info text-white position-absolute top-50 end-0 translate-middle-y"
        onclick="slideRight()">›</button>
    </div>
  </div>
</section>



<?php get_footer(); ?>