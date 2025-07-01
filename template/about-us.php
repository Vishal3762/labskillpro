<?php
/*
       Template Name:About-us
   */
?>

<?php get_header(); ?>

<section>
    <!-- <section class="contact-section1 text-white text-center d-flex flex-column justify-content-center align-items-center"> -->
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
                <!-- <h1 class="background-text1 mb-0">About Us</h1> -->
                <h2 class="about-heading">
                    Why Choose <span class="labskill-highlight">Labskillpro</span> For Pharmacy Education?
                </h2>
                <p class="about-text">
                    At LabSkillPro, we specialize exclusively in pharmacy education—designed with a clear focus on
                    pharmacy technicians. Unlike other platforms that offer generic healthcare certifications, our
                    programs are tailored specifically to meet the real-world demands of pharmacy practice. This focused
                    approach ensures that learners gain practical, job-ready skills to succeed confidently as pharmacy
                    technicians.
                </p>
            </div>
        </div>
    </div>
</section>


<!-- counter of student enrollment -->

<section class="about-us-counter py-3 mb-3 mt-3 rounded-5">
    <div class="container">
        <div class="row text-center">
            <div class="col-6 col-md-3 mb-4 mb-md-0">
                <h2 class="text-light">1K+</h2>
                <p class="stat-label1">Hiring Companies</p>
            </div>
            <div class="col-6 col-md-3 mb-4 mb-md-0">
                <h2 class="text-light">20+</h2>
                <p class="stat-label1">Students Trained</p>
            </div>
            <div class="col-6 col-md-3 mb-4 mb-md-0">
                <h2 class="text-light">12+</h2>
                <p class="stat-label1">Expert Instructors</p>
            </div>
            <div class="col-6 col-md-3">
                <h2 class="text-light">4</h2>
                <p class="stat-label1">Centers</p>
            </div>
        </div>
    </div>
</section>

<!-- mission and vision section  -->

<section class="vision-mission py-2">
    <div class="container">

        <!-- Vision Block -->
        <div class="row align-items-center mb-2">
            <div class="col-md-6 text-center text-md-start">
                <h5 class="subheading">— OUR VISION</h5>
                <h3 class="main-heading">Empowering Future Pharmacy Professionals</h3>
                <p class="description">
                    At LabSkillPro, our vision is to become a leading force in pharmacy education by creating a learning
                    environment where students gain practical, hands-on experience. We aim to shape confident, skilled
                    pharmacy technicians ready to serve healthcare communities with excellence.
                </p>
            </div>
            <div class="col-md-6 text-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/vision.png" alt="Vision"
                    class="img-fluid rounded">
            </div>
        </div>

        <!-- Mission Block -->
        <div class="row align-items-center flex-md-row-reverse">
            <div class="col-md-6 text-center text-md-start">
                <h5 class="subheading">— OUR MISSION</h5>
                <h3 class="main-heading">Focused, Career-Oriented Training</h3>
                <p class="description">
                    Our mission is to deliver specialized pharmacy education through expert-led training, updated
                    curriculum, and real-world practice modules. LabSkillPro ensures that every learner is
                    industry-ready and confident to take on roles in the dynamic healthcare field.
                </p>
            </div>
            <div class="col-md-6 text-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mission.png" alt="Mission"
                    class="img-fluid rounded">
            </div>
        </div>

    </div>
</section>

<section class="training-cta-section text-white d-flex align-items-center" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/Group 541.png'); background-size: cover; background-position: center; padding: 60px 20px;">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-8">
        <h2 class="mb-0">Explore Our Training Courses</h2>
        <p class="mb-0">Get job-ready with industry-endorsed curriculum and hands-on pharmaceutical training.</p>
      </div>
      <div class="col-md-4 text-md-end mt-3 mt-md-0">
        <a href="<?php echo site_url('/home'); ?>" class="btn btn-light  text-black">Go to Courses</a>
      </div>
    </div>
  </div>
</section>


<!-- Our guild section for page -->

<section class="our-guild-section py-5">
    <div class="container">
        <div class="text-center mb-5">
             <h1 class="background-text1 mb-0">Mentors</h1>
            <h2 class="main-heading"><span class="service-title ">▲</span>Our Guild</h2>
            <p class="sub-title">Meet the mentors who guide and shape our pharmacy professionals</p>
        </div>

        <div class="row g-4">
            <!-- Card 1 -->
            <div class="col-12 col-md-4">
                <div class="guild-card text-center p-4 h-100 shadow rounded-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tushar.png" alt="Guild Member 1" class="guild-img mb-3">
                    <h5 class="guild-name">Dr. Tushar Jadhav</h5>
                    <p class="guild-description">Senior Pharmacology Trainer with 10+ years of experience.</p>
                </div>
            </div>

            <!-- Repeat for 5 more cards -->
            <div class="col-12 col-md-4">
                <div class="guild-card text-center p-4 h-100 shadow rounded-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/vishalpatil.jpeg" alt="Guild Member 2" class="guild-img mb-3">
                    <h5 class="guild-name">Mr. Vishal Patil</h5>
                    <p class="guild-description">Clinical pharmacist and industry expert in drug therapy.</p>
                </div>
            </div>

            <!-- Add 4 more cards similarly -->
            <!-- ... -->
            <div class="col-12 col-md-4">
                <div class="guild-card text-center p-4 h-100 shadow rounded-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sharadkharat.jpeg" alt="Guild Member 2" class="guild-img mb-3">
                    <h5 class="guild-name">Dr. Sharad Kharat</h5>
                    <p class="guild-description">Clinical pharmacist and industry expert in drug therapy.</p>
                </div>
            </div>


            <div class="col-12 col-md-4">
                <div class="guild-card text-center p-4 h-100 shadow rounded-4">
                    <img src="guild2.jpg" alt="Guild Member 2" class="guild-img mb-3">
                    <h5 class="guild-name">Mr. Ajay Patil</h5>
                    <p class="guild-description">Clinical pharmacist and industry expert in drug therapy.</p>
                </div>
            </div>


            <div class="col-12 col-md-4">
                <div class="guild-card text-center p-4 h-100 shadow rounded-4">
                    <img src="guild2.jpg" alt="Guild Member 2" class="guild-img mb-3">
                    <h5 class="guild-name">Mr. Ajay Patil</h5>
                    <p class="guild-description">Clinical pharmacist and industry expert in drug therapy.</p>
                </div>
            </div>


            <div class="col-12 col-md-4">
                <div class="guild-card text-center p-4 h-100 shadow rounded-4">
                    <img src="guild2.jpg" alt="Guild Member 2" class="guild-img mb-3">
                    <h5 class="guild-name">Mr. Ajay Patil</h5>
                    <p class="guild-description">Clinical pharmacist and industry expert in drug therapy.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<?php get_footer(); ?>