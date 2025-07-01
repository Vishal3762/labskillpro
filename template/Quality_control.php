<?php
/*
    Template Name:Quality control
*/
?>


<?php get_header(); ?>

<section class="course-hero position-relative text-white py-5">
    <div class="container">
        <div class="row align-items-center">

            <!-- Left Content -->
            <div class="col-lg-8">
                <p class="text-warning mb-2">Quality control – labskillpro </p>
                <h1 class="fw-bold display-5">Quality control</h1>
                <p class="mb-3" style="max-width: 600px;">
                    The course is designed for students and industry professionals who have little or no knowledge in
                    Quality Control . This course will help them understand the fundamental and concepts of Quality
                    Control and Assurance. It will enhance their knowledge and skills in the field of QA QC. AS a
                    Quality control/ Quality assurance officer you will work in Quality department of a pharmaceutical
                    company. The main aim of the department revolves around controlling quality and assuring the best
                    possible product. </p>
                <p class="mb-0">
                    <i class="bi bi-people-fill text-warning me-1"></i> 1000
                    <i class="bi bi-star-fill text-warning ms-4 me-1"></i> Great
                </p>
            </div>

            <!-- Right Card (Floating Card) -->
            <div class="col-lg-4 position-relative">
                <div class="card shadow-lg" style="margin-top: 60px;">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Quality-controll.jpg"
                        class="card-img-top" alt="Course Image">
                    <div class="card-body">
                        <h5 class="fw-bold mb-2">
                            Price: <span class="text-primary">₹20,000</span>
                            <span class="text-muted text-decoration-line-through fs-6">25000</span>
                        </h5>
                        <p class="text-danger mb-3">
                            <i class="bi bi-calendar-event-fill me-2"></i>Batch Start Soon
                        </p>
                        <a href="#" class="enroll-btn w-100" data-bs-toggle="modal" data-bs-target="#inquiryModal">
                            Enroll Today Get Special Discount
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- 
form for enroll -->
<!-- Inquiry Modal -->
<div class="modal fade" id="inquiryModal" tabindex="-1" aria-labelledby="inquiryModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-4">
            <div class="modal-header">
                <h5 class="modal-title" id="inquiryModalLabel">Course Inquiry Form</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>



             <?php echo do_shortcode('[contact-form-7 id="fc85906" title="course-register-form"]'); ?>
            <!-- <form>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="fullname" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="fullname" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" id="phone" required>
                    </div>
                    <div class="mb-3">
                        <label for="course" class="form-label">Course Name</label>
                        <input type="text" class="form-control" id="course" value="Quality Assurance" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" rows="3"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary w-100">Submit Inquiry</button>
                </div>
            </form> -->
        </div>
    </div>
</div>


<!-- overview-about-all-information-section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row g-4">

            <!-- Left Column (Tabs + Content) -->
            <div class="col-lg-8">

                <!-- Tabs -->
                <ul class="nav nav-tabs border-bottom border-2 mb-4" id="courseTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="overview-tab" data-bs-toggle="tab"
                            data-bs-target="#overview" type="button" role="tab">Course Structure</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="topics-tab" data-bs-toggle="tab" data-bs-target="#topics"
                            type="button" role="tab">Course Methodology</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="instructor-tab" data-bs-toggle="tab" data-bs-target="#instructor"
                            type="button" role="tab">Learning outcome</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="feedback-tab" data-bs-toggle="tab" data-bs-target="#feedback"
                            type="button" role="tab">Career Opportunities</button>
                    </li>
                </ul>

                <!-- Tab Content -->
                <div class="tab-content bg-white p-4 rounded shadow-sm" id="courseTabContent">

                    <!-- OVERVIEW -->
                    <div class="tab-pane fade show active" id="overview" role="tabpanel">
                        <h5 class="fw-bold text-dark mb-3"><i
                                class="bi bi-exclamation-triangle-fill text-warning me-2"></i>Quality Assurance Course
                        </h5>
                        <h6 class="fw-semibold mb-3">What You’ll Learn</h6>
                        <ul class="list-unstyled">
                            <li>• Introduction to QC.</li>
                            <li>• Introduction to Instrumentation required for QC</li>
                            <li>• Introduction to Quality Standards.</li>
                            <li>• Excipients, Active Pharmaceutical Ingredients, Dosage forms, Packaging Material.</li>
                            <li>• Quality Documentation and Review Procedure.</li>
                            <li>• Good Manufacturing / Laboratory Practices and Audit.</li>
                            <li>• QC Functions / In process QCfunctions.</li>
                            <li>• Regulatory Aspects of QC.</li>
                        </ul>
                    </div>

                    <!-- TOPICS -->
                    <div class="tab-pane fade" id="topics" role="tabpanel">
                        <h6 class="fw-semibold">Topics You’ll Master</h6>
                        <ul class="list-unstyled">
                            <li>• This is a Distance learning Program – where students participate by filling necessary
                                forms and paying the fees..</li>
                            <li>• Introduction Kit is delivered to participants of the program – this kit will contain
                                study material and all necessary information about the program with important dates.
                            </li>
                            <li>• The Participant is required to complete a Project on an allocated topic during the
                                term of the program, these reports have to be submitted by prescribed dates.</li>
                            <li>• The Participant will be able to interact with other program participant through the
                                use of online blog. Each participant will be given a unique User ID and password for the
                                same.</li>
                            <li>• Participants will be evaluated based on project submitted & final examination held at
                                the end of the term.</li>
                            <li>• The participant will be able to share their views and ask question in the blog openly,
                                this blog will be monitored by RA experts to answer any queries or doubts apart from
                                that timely news and development will also be updated over there.</li>
                        </ul>
                    </div>

                    <!-- INSTRUCTOR -->
                    <div class="tab-pane fade" id="instructor" role="tabpanel">
                        <h6 class="fw-semibold">Learning</h6>
                        <ul class="list-unstyled">
                            <li>• Understand Pharmaceutical Quality related Concepts.</li>
                            <li>• Able to write and review Quality Documents like SOPS,BMR etc.</li>
                            <li>• In process Quality Control.</li>
                            <li>• Establish QC/QA Labs.</li>
                            <li>• Preparation for audits and inspections.</li>
                            <li>• Manufacturing Control.</li>
                            <li>• Chemical and physical analysis.</li>
                            <li>• Instrumental analysis(GC, HPLC, UV, HPTLC, Dissolution)</li>
                            <li>• Standards (RS and WRS) • Good laboratory practices.</li>
                            <li>• Application of microbiology in pharmaceutical testing.</li>
                            <li>• Impurities (known and unknown) : ICH guideline.</li>
                            <li>• Calibration of instruments.</li>
                            <li>• Packing material analysis.</li>
                            <li>• Deviations Planned and Unplanned.</li>
                            <li>• Post release monitoring-complaints, recalls.</li>

                        </ul>
                    </div>

                    <!-- FEEDBACK -->
                    <div class="tab-pane fade" id="feedback" role="tabpanel">
                        <h6 class="fw-semibold">Career Opportunities for Students </h6>
                        <ul class="list-unstyled">
                            <li>• Type of companies hiring RA professionals.</li>
                            <li>• Pharmaceutical</li>
                            <li>• Medical Devices</li>
                            <li>• In Vitro Diagnostics</li>
                            <li>• Biologics and Biotechnology.</li>
                            <li>• Veterinary Products</li>
                            <li>• Clinical Research Organization/ Contract Research Organization </li>
                            <li>• Pharmaceutical consultancy companies </li>
                            <li> • QC/QA professional can get employment as</li>
                            <li>• Quality Control officer </li>
                            <li>• Quality Control head/ Director </li>
                            <li>• Quality Assurance officer </li>
                            <li>• Quality Assurance head </li>
                            <li>• In Process Quality Control Officer </li>
                        </ul>
                    </div>

                </div>
            </div>

            <!-- Right Column (Sticky Card) -->
                <div class="col-lg-4">
                <div class="card shadow-sm " >  <!-- style="top: 50px;" -->
                    <div class="bg-dark text-white px-3 py-2 d-flex justify-content-center align-items-center">
                        <i class="bi bi-exclamation-triangle-fill text-primary me-2"></i>
                        <strong>Quality Control</strong>
                    </div>
                    <div class="card-body">
                        <!-- <h5 class="fw-bold mb-2">Price: <span class="text-primary">₹20,000</span>
              <span class="text-muted text-decoration-line-through fs-6">25000</span>
            </h5>
            <p class="text-danger"><i class="bi bi-calendar-event-fill me-2"></i>Batch Start Soon</p>
            <a href="#" class="btn btn-dark w-100 mb-3" data-bs-toggle="modal" data-bs-target="#inquiryModal">Enroll Today Get Special Discount</a> -->
                        <hr>
                        <p class="mb-2">
                            <i class="bi bi-journal-code text-primary me-2"></i>
                            <strong>Skill level :</strong> Expert
                        </p>

                        <p class="mb-2">
                            <i class="bi bi-translate text-primary me-2"></i>
                            <strong>Language :</strong> English, Hindi, Marathi
                        </p>

                        <p class="mb-0">
                            <i class="bi bi-award-fill text-primary me-2"></i>
                            <strong>Certificate :</strong> Yes
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>



<?php get_footer(); ?>