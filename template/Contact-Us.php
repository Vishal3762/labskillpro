<?php
/*
	   Template Name:Contact-Us
   */
?>

<!-- <style>
  .contact-section h2 {
	font-size: 2.5rem;
  }
  .contact-section .form-control:focus {
	box-shadow: none;
	border-color: #007BFF;
  }
 
</style> -->

<?php get_header(); ?>




<section class="contact-section1 text-white text-center d-flex flex-column justify-content-center align-items-center">
	<div class="container">
		<h1>
			Contact Labskillpro Academy Kolhapur
		</h1>
	 <h6 class="breadcrumb-text mt-4">
      <a href="/" class="text-white text-decoration-none">HOME</a> 
      <span class="mx-2"> > </span> 
      <span>CONTACT US</span>
</h6>

    </div>
</section>

<!-- Contact Us Section -->
<section class="contact-section py-5 bg-light" id="contact">
	<div class="container">
		<div class="text-center mb-5">
			<h1 class="service-title">Contact Us</h1>
			<p class="text-muted">Welcome to the contact page of labskillpro Academy Kolhapur. Whether you have questions about our IT training programs, placements, or anything else, we are here to help you. Get in touch with us today!</p>
		</div>

		<div class="row g-4">

			<!-- Contact Info -->
			<div class="col-md-6">
				<div class="bg-white shadow-sm rounded p-4 h-100">
					<h5 class="fw-bold mb-3">Get in Touch</h5>
					<p class="mb-3"><i class="bi bi-geo-alt-fill me-2 text-primary"></i>123 Main Road, Kolhapur,
						Maharashtra</p>
					<p class="mb-3"><i class="bi bi-telephone-fill me-2 text-primary"></i>+91 98765 43210</p>
					<p class="mb-3"><i class="bi bi-envelope-fill me-2 text-primary"></i>labskillpro@gmail.com</p>

					<!-- Optional: Google Map -->
					<div class="ratio ratio-16x9 mt-4">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d122283.68866764156!2d74.15646483006233!3d16.708616657835826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc1000cdec07a29%3A0xece8ea642952e42f!2sKolhapur%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1749713706864!5m2!1sen!2sin" style="border:0;"
							allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
						</iframe>
					</div>
				</div>
			</div>
			<!-- Contact Form -->
			<div class="col-md-6">
				
				<?php echo do_shortcode('[contact-form-7 id="fed3c9f" title="contact-us-page-form"]'); ?>

			</div>
		</div>
	</div>
</section>



<?php get_footer(); ?>