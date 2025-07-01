<?php
/*
   Template Name: Home
 */
?>

<?php get_header(); ?>

<section class="hero-section d-flex align-items-center">
  <div class="container d-flex flex-column flex-lg-row align-items-center justify-content-between">
    <div class="text-center text-lg-start">
      <h1>The Best-In Pharmacy <br>Technician Training</h1>
      <p>
        <span style="font-family: Poppins; font-weight: 700; font-size: 24px; line-height: 32px;">
          Labskillpro
        </span>
        <span style="font-family: Poppins; font-weight: 400; font-size: 24px; line-height: 32px;">
          is the resource pharmacies trust<br>
          to prepare pharmacy technicians for certification
        </span>
      </p>
      <button class="btn-inquiry mt-3"><span>BOOK INQUIRY</span></button>
    </div>
    <div class="hero-image-wrapper">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner.png" alt="Pharmacy Technician"
        class="hero-image">
    </div>
  </div>
</section>

<!-- about us section -->


<!-- About Us Section -->
<section class="about-section py-5">
  <div class="container">
    <!-- <div class="about-label mb-3">
      <span>About Us</span>
    </div> -->
    <div class="row align-items-center">
      <div class="col-lg-5">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-us.png" alt="Medical Team"
          class="img-fluid" style="max-width: 100%;">
      </div>
      <div class="col-lg-7">
        <h2 class="about-heading">
          Why <span class="labskill-highlight">Labskillpro</span>is better Choice ?
        </h2>
        <p class="about-text">
          excels in pharmacy education with our exclusive pharmacy expertise and technician-focused design. While other
          online providers may offer certification programs spanning multiple professions, we exclusively focuses on the
          role of a pharmacy technician. This ensures that your techs are prepared to address the specific demands of
          this profession upon completion.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- services section -->

<section class="training-section">
  <div class="container-fluid">
    <div class="row align-items-center">

      <!-- Left Tab Panel with Slanted Background -->
      <div class="col-lg-4 p-0">
        <div class="training-left-box">
          <ul class="nav flex-column training-list" id="trainingTab" role="tablist">
            <li>
              <button class="nav-link active" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#tab1" type="button"
                role="tab">Global Compliance<br>and Ethics</button>
            </li>
            <li>
              <button class="nav-link" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#tab2" type="button"
                role="tab">Onboarding and Talent<br>Retention</button>
            </li>
            <li>
              <button class="nav-link" id="tab3-tab" data-bs-toggle="tab" data-bs-target="#tab3" type="button"
                role="tab">Systems Training</button>
            </li>
            <li>
              <button class="nav-link" id="tab4-tab" data-bs-toggle="tab" data-bs-target="#tab4" type="button"
                role="tab">Patient Centricity</button>
            </li>
            <li>
              <button class="nav-link" id="tab5-tab" data-bs-toggle="tab" data-bs-target="#tab5" type="button"
                role="tab">Product and Sales</button>
            </li>
            <li>
              <button class="nav-link" id="tab6-tab" data-bs-toggle="tab" data-bs-target="#tab6" type="button"
                role="tab">Global Transformation</button>
            </li>
          </ul>
        </div>
      </div>

      <!-- Right Tab Content -->
      <div class="col-lg-8">
        <div class="tab-content" id="trainingTabContent">
          <!-- Tab 1 -->
          <div class="tab-pane fade show active" id="tab1" role="tabpanel">
            <div class="row align-items-center">
              <h2 class="service-title">Make the complex simple.</h2>
              <div class="col-lg-4 text-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services-img.png" alt="Tab 1"
                  class="img-fluid" />
              </div>
              <div class="col-lg-8">

                <p>Content for Global Compliance and Ethics.</p>
                <ul>
                  <li>Policy-based training modules</li>
                  <li>Audit and compliance tracking</li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Tab 2 -->
          <div class="tab-pane fade" id="tab2" role="tabpanel">
            <div class="row align-items-center">
              <div class="col-lg-4 text-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner.png" alt="Tab 2"
                  class="img-fluid" />
              </div>
              <div class="col-lg-8">
                <h2 class="service-title">Make the complex simple.</h2>
                <p>Content for Onboarding and Talent Retention.</p>
                <ul>
                  <li>Interactive employee orientation</li>
                  <li>Retention analytics and feedback</li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Tab 3 -->
          <div class="tab-pane fade" id="tab3" role="tabpanel">
            <div class="row align-items-center">
              <div class="col-lg-4 text-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner.png" alt="Tab 3"
                  class="img-fluid" />
              </div>
              <div class="col-lg-8">
                <h2 class="service-title">Make the complex simple.</h2>
                <p>Make new systems second nature. Our innovative learning experiences transform intimidating
                  software...</p>
                <ul>
                  <li>Interactive system replicas</li>
                  <li>Workflow-based learning</li>
                  <li>User-generated tips</li>
                  <li>Adaptive assessments</li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Additional tabs... -->
          <!-- Tab 4 -->
          <div class="tab-pane fade" id="tab4" role="tabpanel">
            <div class="row align-items-center">
              <div class="col-lg-4 text-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner.png" alt="Tab 1"
                  class="img-fluid" />
              </div>
              <div class="col-lg-8">
                <h2 class="service-title">Make the complex simple.</h2>
                <p>Content for Global Compliance and Ethics.</p>
                <ul>
                  <li>Policy-based training modules</li>
                  <li>Audit and compliance tracking</li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Tab 5 -->
          <div class="tab-pane fade" id="tab5" role="tabpanel">
            <div class="row align-items-center">
              <div class="col-lg-4 text-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner.png" alt="Tab 1"
                  class="img-fluid" />
              </div>
              <div class="col-lg-8">
                <h2 class="service-title">Make the complex simple.</h2>
                <p class="">Content for Global Compliance and Ethics.</p>
                <ul>
                  <li>Policy-based training modules</li>
                  <li>Audit and compliance tracking</li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Tab 6 -->
          <div class="tab-pane fade" id="tab6" role="tabpanel">
            <div class="row align-items-center">
              <div class="col-lg-4 text-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner.png" alt="Tab 1"
                  class="img-fluid" />
              </div>
              <div class="col-lg-8">
                <h2 class="service-title">Make the complex simple.</h2>
                <p>Content for Global Compliance and Ethics.</p>
                <ul>
                  <li>Policy-based training modules</li>
                  <li>Audit and compliance tracking</li>
                </ul>
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>


<!-- Course cards section -->


<section class="courses-section" id="courses">
  <div class="container">
    <h2 class="service-title">Explore Our Courses</h2>
    <p class="course-text">Choose from our expertly designed courses to boost your career and skills.</p>

    <div class="row g-4">
      <!-- Card 1 -->
      <div class="col-md-4">
        <div class="course-card">
          <div class="course-icon"><i class="bi bi-code-slash"></i></div>
          <div class="course-title">Web Development</div>
          <div class="course-desc">HTML, CSS, JS & frameworks to build modern websites.</div>
          <a href="#" class="enroll-btn">Enroll Now</a>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-md-4">
        <div class="course-card">
          <div class="course-icon"><i class="bi bi-phone"></i></div>
          <div class="course-title">App Development</div>
          <div class="course-desc">Learn to create Android & iOS apps with real projects.</div>
          <a href="#" class="enroll-btn">Enroll Now</a>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-md-4">
        <div class="course-card">
          <div class="course-icon"><i class="bi bi-pc-display"></i></div>
          <div class="course-title">UI/UX Design</div>
          <div class="course-desc">Design beautiful and user-friendly interfaces.</div>
          <a href="#" class="enroll-btn">Enroll Now</a>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="col-md-4">
        <div class="course-card">
          <div class="course-icon"><i class="bi bi-bar-chart-line"></i></div>
          <div class="course-title">Data Science</div>
          <div class="course-desc">Master Python, ML, and data visualization.</div>
          <a href="#" class="enroll-btn">Enroll Now</a>
        </div>
      </div>

      <!-- Card 5 -->
      <div class="col-md-4">
        <div class="course-card">
          <div class="course-icon"><i class="bi bi-lock"></i></div>
          <div class="course-title">Cyber Security</div>
          <div class="course-desc">Protect systems and networks from attacks.</div>
          <a href="#" class="enroll-btn">Enroll Now</a>
        </div>
      </div>

      <!-- Card 6 -->
      <div class="col-md-4">
        <div class="course-card">
          <div class="course-icon"><i class="bi bi-globe"></i></div>
          <div class="course-title">Digital Marketing</div>
          <div class="course-desc">Grow brands online with SEO, Ads, and SMM.</div>
          <a href="#" class="enroll-btn">Enroll Now</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 
dropdown section -->

<section class="advantages-section py-5">
  <div class="container">
    <h2 class="dropdown-title mb-4">
      Competitive Advantages
    </h2>

    <div class="accordion" id="advantagesAccordion">
      <!-- Accordion Item 1 -->
      <div class="accordion-item border-0 border-bottom">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button collapsed shadow-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseOne">
            Innovative Tools
          </button>
        </h2>
        <div class="accordion-collapse collapse show" id="collapseOne" data-bs-parent="#advantagesAccordion">
          <div class="accordion-body">
            Unique tools like the digital pill shelf and prescription entry simulator offer hands-on insights into a
            pharmacy technician’s daily tasks.
          </div>
        </div>
      </div>

      <!-- Accordion Item 2 -->
      <div class="accordion-item border-0 border-bottom">
        <h2 class="accordion-header" id="headingTwo">
          <button class="accordion-button collapsed shadow-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseTwo">
            Comprehensive Program Management
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#advantagesAccordion">
          <div class="accordion-body">
            Our program offers end-to-end support, from onboarding to certification, making learning smooth and
            organized.
          </div>
        </div>
      </div>

      <!-- Accordion Item 3 -->
      <div class="accordion-item border-0 border-bottom">
        <h2 class="accordion-header" id="headingThree">
          <button class="accordion-button collapsed shadow-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseThree">
            Enhanced Knowledge Retention
          </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#advantagesAccordion">
          <div class="accordion-body">
            Our design emphasizes retention through structured modules and assessments tailored to reinforce learning.
          </div>
        </div>
      </div>

      <!-- Accordion Item 4 -->
      <div class="accordion-item border-0 border-bottom">
        <h2 class="accordion-header" id="headingFour">
          <button class="accordion-button collapsed shadow-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseFour">
            Interactive Learning
          </button>
        </h2>
        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#advantagesAccordion">
          <div class="accordion-body">
            Our platform blends video, quizzes, simulations, and feedback in one module to enhance practical
            understanding.
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Join Now section  -->

<!-- Join Section -->
<section class="join-section text-white text-center d-flex flex-column justify-content-center align-items-center">
  <div class="container py-5">
    <h2 class="fw-bold mb-4 join-title">Join the Labskillpro</h2>

    <p class="join-subtitle mx-auto">
      Embark on your journey to technical excellence with CodeFirst. Gain the knowledge, skills, and industry exposure
      you need to launch a successful career or take your current one to new heights. Explore our training programs,
      outsourcing services, and other offerings to unlock your potential in the dynamic world of technology.
    </p>

    <a href="#">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/join-button.png" alt="Request A Call Back"
        class="img-fluid callback-btn">
    </a>
  </div>

  <!-- Stats Box -->
  <div class="stats-box  text-dark shadow-lg d-flex flex-wrap justify-content-around align-items-center px-4 py-3 ">
    <div class="text-center m-2">
      <h3 class="counter-no">1K+</h3>
      <p class="mb-0">Hiring Companies</p>
    </div>
    <div class="text-center m-2">
      <h3 class="counter-no">20+</h3>
      <p class="mb-0">Students Trained</p>
    </div>
    <div class="text-center m-2">
      <h3 class="counter-no">12+</h3>
      <p class="mb-0">Expert Instructors</p>
    </div>
    <div class="text-center m-2">
      <h3 class="counter-no">4</h3>
      <p class="mb-0 ">Centers</p>
    </div>
  </div>
</section>


<!-- Testimonial card section  -->
<section class="mt-5">
  <div class="container py-5 user-review">
    <h1 class="background-text1 mb-0">testimonial</h1>
    <h2 class="service-title  text-center mb-4">
      <span class="service-title">▲</span> What people say's about us
    </h2>


    <div id="testimonialCarousel" class="carousel slide mt-2" data-bs-ride="carousel" data-bs-interval="3000">
      <div class="carousel-inner">

        <!-- Slide 1 -->
        <div class="carousel-item active">
          <div class="row align-items-center justify-content-center">

            <!-- Left side image (previous) -->
            <div class="col-md-2 d-none d-md-block">
              <img
                src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80"
                class="profile-img side" alt="Prev">
            </div>

            <!-- Testimonial card -->
            <div class="col-md-8">
              <div class="testimonial-card">
                <div class="row align-items-center">
                  <!-- Left profile image inside card -->
                  <div class="col-md-3 text-center">
                    <img
                      src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&auto=format&fit=crop&w=150&q=80"
                      class="testimonial-img" alt="Main">
                  </div>

                  <!-- Right content -->
                  <div class="col-md-9">
                    <div class="quote-icon">"</div>
                    <p class="testimonial-text">
                      The very first spark of my love for yoga started with you and I am so devoted and in awe of your
                      teaching style. The way you explain each pose makes it so easy to understand and implement. My
                      flexibility and strength have improved tremendously since I started your classes.
                    </p>
                    <div class="testimonial-name">PATRICIE FUXOVA</div>
                    <div class="star-rating">★ ★ ★ ★ ★</div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Right side image (next) -->
            <div class="col-md-2 d-none d-md-block">
              <img
                src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80"
                class="profile-img side" alt="Next">
            </div>

          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
          <div class="row align-items-center justify-content-center">

            <!-- Left side image (previous) -->
            <div class="col-md-2 d-none d-md-block">
              <img
                src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80"
                class="profile-img side" alt="Prev">
            </div>

            <!-- Testimonial card -->
            <div class="col-md-8">
              <div class="testimonial-card">
                <div class="row align-items-center">
                  <!-- Left profile image inside card -->
                  <div class="col-md-3 text-center">
                    <img
                      src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixlib=rb-1.2.1&auto=format&fit=crop&w=150&q=80"
                      class="testimonial-img" alt="Main">
                  </div>

                  <!-- Right content -->
                  <div class="col-md-9">
                    <div class="quote-icon">"</div>
                    <p class="testimonial-text">
                      I've been practicing yoga for years but never experienced such transformative sessions before. The
                      instructor's attention to detail and personalized approach helped me correct my alignment and
                      deepen my practice. The meditation techniques have brought so much peace to my daily life.
                    </p>
                    <div class="testimonial-name">JOHN SMITH</div>
                    <div class="star-rating">★ ★ ★ ★ ★</div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Right side image (next) -->
            <div class="col-md-2 d-none d-md-block">
              <img
                src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80"
                class="profile-img side" alt="Next">
            </div>

          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item">
          <div class="row align-items-center justify-content-center">

            <!-- Left side image (previous) -->
            <div class="col-md-2 d-none d-md-block">
              <img
                src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80"
                class="profile-img side" alt="Prev">
            </div>

            <!-- Testimonial card -->
            <div class="col-md-8">
              <div class="testimonial-card">
                <div class="row align-items-center">
                  <!-- Left profile image inside card -->
                  <div class="col-md-3 text-center">
                    <img
                      src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&auto=format&fit=crop&w=150&q=80"
                      class="testimonial-img" alt="Main">
                  </div>

                  <!-- Right content -->
                  <div class="col-md-9">
                    <div class="quote-icon">"</div>
                    <p class="testimonial-text">
                      As a beginner, I was nervous about joining yoga classes, but the welcoming environment and clear
                      instructions made me feel comfortable immediately. After just a month, I've noticed significant
                      improvements in my posture and stress levels. Highly recommend to anyone looking to start their
                      yoga journey.
                    </p>
                    <div class="testimonial-name">EMILY JOHNSON</div>
                    <div class="star-rating">★ ★ ★ ★ ★</div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Right side image (next) -->
            <div class="col-md-2 d-none d-md-block">
              <img
                src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80"
                class="profile-img side" alt="Next">
            </div>

          </div>
        </div>

      </div>

      <!-- Controls -->
      <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon p-3" aria-hidden="true"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon p-3" aria-hidden="true"></span>
      </button>
    </div>
  </div>

</section>


<!-- form section -->
<section class="contact-hero-section d-flex align-items-center mt-5">
  <div class="container">
    <div class="row justify-content-end">
      <div class="col-md-6 col-lg-5 form-box p-4">
        <h3 class="text-white fw-bold mb-4">Contact us today to get started<br> on your path to success!</h3>
        
        <?php echo do_shortcode('[contact-form-7 id="3ccb470" title="home-page-form"]'); ?>

      </div>
    </div>
  </div>
</section>


<!-- company list logo -->
<section class="hiring-companies-section py-5 text-center">
  <div class="container">
    <h1 class="background-text1 mb-0">GET HIRED</h1>
    <h2 class="service-title mb-4 ">
      <span class="service-title ">▲</span> Our graduates have been Hired by
    </h2>

    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <!-- Slide -->
        <div class="swiper-slide company-logo">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Group 17.png" alt="Infosys" />
        </div>
        <div class="swiper-slide company-logo">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Group 18.png" alt="Tech Mahindra" />
        </div>
        <div class="swiper-slide company-logo">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Group 19.png" alt="Capgemini" />
        </div>
        <div class="swiper-slide company-logo">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Group 20.png" alt="Persistent" />
        </div>
        <div class="swiper-slide company-logo">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Group 21.png" alt="TCS" />
        </div>
        <div class="swiper-slide company-logo">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Group 17.png" alt="Cognizant" />
        </div>
        <!-- Add more if needed -->
      </div>

      <!-- Arrows -->
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
  </div>
</section>





<?php get_footer(); ?>