<?php
/*
    Template Name:Quality Assurance
*/
?>


<?php get_header(); ?>

<section class="course-hero position-relative text-white py-5">
    <div class="container">
        <div class="row align-items-center">

            <!-- Left Content -->
            <div class="col-lg-8">
                <p class="text-warning mb-2">Quality Assurance – labskillpro </p>
                <h1 class="fw-bold display-5">Quality Assurance</h1>
                <p class="mb-3" style="max-width: 600px;">
                    The Pharmaceutical Quality Assurance program combines theoretical knowledge with hands-on skills in
                    all areas that impact drug quality. The program is innovative and unique in offering in-depth,
                    hands-on learning provided by full-time research faculty with both academic and industry experience.
                    The student will gain valuable experience in pharmaceutical analytical instrumentation,
                    documentation, GMP compliance, auditing, technical writing and quality assurance processes and
                    procedures.
                </p>
                <p class="mb-0">
                    <i class="bi bi-people-fill text-warning me-1"></i> 1000
                    <i class="bi bi-star-fill text-warning ms-4 me-1"></i> Great
                </p>
            </div>

            <!-- Right Card (Floating Card) -->
            <div class="col-lg-4 position-relative">
                <div class="card shadow-lg" style="margin-top: 60px;">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Quality-Assurance.jpg"
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
                            <li>• Introduction to QA.</li>
                            <li>• Introduction to Instrumentation required for QA</li>
                            <li>• Introduction to Quality Standards.</li>
                            <li>• Excipients, Active Pharmaceutical Ingredients, Dosage forms, Packaging Material.</li>
                            <li>• Quality Documentation and Review Procedure.</li>
                            <li>• Good Manufacturing / Laboratory Practices and Audit.</li>
                            <li>• QC Functions / In process QASfunctions.</li>
                            <li>• Regulatory Aspects of QA.</li>
                        </ul>
                    </div>

                    <!-- TOPICS -->
                    <div class="tab-pane fade" id="topics" role="tabpanel">
                        <h6 class="fw-semibold">Topics You’ll Master</h6>
                        <ul class="list-unstyled">
                            <li>• Learn the requirements of quality assurance, compliance, and good manufacturing
                                practices applicable to the regulated pharmaceutical industry.</li>
                            <li>• Understand the unique aspects of documentation and its importance to quality work
                                including industry specific concepts such as deviations, change control,
                                out-of-specification, risk assessment, and corrective and preventative actions.</li>
                            <li>• Acquire skills and knowledge that will help them gain employment in the regulated
                                pharmaceutical industry. Additionally, their knowledge of this area would provide skills
                                transferable to other industries with quality and compliance requirements.</li>
                            <li>• Learn variety of topics related to the up-to-date regulations, analytical monographs,
                                working knowledge of analytical instrumental techniques (HPLC, UV-Vis, FT-IR, TLC, GC
                                and dissolution), computerized integrators and troubleshooting techniques in the
                                pharmaceutical area.</li>

                        </ul>
                    </div>

                    <!-- INSTRUCTOR -->
                    <div class="tab-pane fade" id="instructor" role="tabpanel">
                        <h6 class="fw-semibold">Scope</h6>
                        <p>Pharma quality assurance remains extremely important and specialists in this field will
                            continue to be needed, because of automation, more tasks that once fell to quality assurance
                            engineers can be handled by production workers. There are probably more opportunities in
                            other sectors of the economy, particularly in health care where quality assessment is a
                            relatively new idea.</p>
                    </div>

                    <!-- FEEDBACK -->
                    <div class="tab-pane fade" id="feedback" role="tabpanel">
                        <h6 class="fw-semibold">Career Opportunities for Students </h6>
                        <ul class="list-unstyled">
                            <li>• Quality assurance technicians or analysts.</li>
                            <li>• Quality assurance or control managers</li>
                            <li>• Quality Researcher</li>
                            <li>• Quality Assurance Executive.</li>
                            <li>• Quality Assistant.</li>
                            <li>• Regulatory Executive</li>

                        </ul>
                    </div>

                </div>
            </div>

            <!-- Right Column (Sticky Card) -->
            <div class="col-lg-4">
                <div class="card shadow-sm " >  <!-- style="top: 50px;" -->
                    <div class="bg-dark text-white px-3 py-2 d-flex justify-content-center align-items-center">
                        <i class="bi bi-exclamation-triangle-fill text-primary me-2"></i>
                        <strong>Quality Assurance</strong>
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