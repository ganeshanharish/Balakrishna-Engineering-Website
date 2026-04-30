<?php include 'includes/header.php'; ?>

<!-- Page Banner -->
<div class="page-banner"
    style="background-image: url('https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&q=80');">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 fw-bold mb-3">Contact Us</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<!-- Contact Section -->
<section class="section-padding">
    <div class="container">
        <div class="row g-5">
            <!-- Contact Info -->
            <div class="col-lg-5">
                <h6 class="text-primary fw-bold text-uppercase tracking-wider mb-2">Get In Touch</h6>
                <h2 class="mb-4 fw-bold">We're Here to Help</h2>
                <p class="text-muted mb-5">Whether you have a question about features, pricing, or need a custom machine
                    built, our team is ready to answer all your questions.</p>

                <div class="d-flex align-items-start mb-4">
                    <div class="bg-primary-light text-primary rounded-circle d-flex align-items-center justify-content-center flex-shrink-0"
                        style="width: 60px; height: 60px;">
                        <i class="bi bi-geo-alt-fill fs-4"></i>
                    </div>
                    <div class="ms-4">
                        <h5 class="fw-bold mb-1">Our Location</h5>
                        <p class="text-muted mb-0">1/93, Chinniampalayam Via,Mylampatti Post,<br>Coimbatore, Tamil Nadu
                            641062,
                            India</p>

                    </div>
                </div>

                <div class="d-flex align-items-start mb-4">
                    <div class="bg-primary-light text-primary rounded-circle d-flex align-items-center justify-content-center flex-shrink-0"
                        style="width: 60px; height: 60px;">
                        <i class="bi bi-telephone-fill fs-4"></i>
                    </div>
                    <div class="ms-4">
                        <h5 class="fw-bold mb-1">Phone Number</h5>
                        <p class="text-muted mb-0">+91 98765 43210<br>Sales: +91 98765 43211</p>
                    </div>
                </div>

                <div class="d-flex align-items-start mb-4">
                    <div class="bg-primary-light text-primary rounded-circle d-flex align-items-center justify-content-center flex-shrink-0"
                        style="width: 60px; height: 60px;">
                        <i class="bi bi-envelope-fill fs-4"></i>
                    </div>
                    <div class="ms-4">
                        <h5 class="fw-bold mb-1">Email Address</h5>
                        <p class="text-muted mb-0">info@balakrishnaengineering.com<br>sales@balakrishnaengineering.com
                        </p>
                    </div>
                </div>

                <div class="mt-5">
                    <h5 class="fw-bold mb-3">Follow Us</h5>
                    <div class="d-flex gap-3">
                        <a href="#"
                            class="btn btn-outline-primary rounded-circle d-flex justify-content-center align-items-center"
                            style="width:45px; height:45px;"><i class="bi bi-facebook"></i></a>
                        <a href="#"
                            class="btn btn-outline-primary rounded-circle d-flex justify-content-center align-items-center"
                            style="width:45px; height:45px;"><i class="bi bi-twitter-x"></i></a>
                        <a href="#"
                            class="btn btn-outline-primary rounded-circle d-flex justify-content-center align-items-center"
                            style="width:45px; height:45px;"><i class="bi bi-linkedin"></i></a>
                        <a href="#"
                            class="btn btn-outline-primary rounded-circle d-flex justify-content-center align-items-center"
                            style="width:45px; height:45px;"><i class="bi bi-instagram"></i></a>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="col-lg-7">
                <div class="bg-white p-5 rounded-4 shadow-sm border h-100">
                    <h3 class="fw-bold mb-4">Send us a Message</h3>
                    <form action="#" method="POST"
                        onsubmit="event.preventDefault(); alert('Thank you for reaching out! Our team will contact you shortly.'); this.reset();">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="name" class="form-label fw-medium">Full Name</label>
                                <input type="text" class="form-control form-control-lg bg-light border-0" id="name"
                                    placeholder="John Doe" required>
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label fw-medium">Email Address</label>
                                <input type="email" class="form-control form-control-lg bg-light border-0" id="email"
                                    placeholder="john@example.com" required>
                            </div>
                            <div class="col-md-6">
                                <label for="phone" class="form-label fw-medium">Phone Number</label>
                                <input type="tel" class="form-control form-control-lg bg-light border-0" id="phone"
                                    placeholder="+91 98765 43210" required>
                            </div>
                            <div class="col-md-6">
                                <label for="interest" class="form-label fw-medium">Interested In</label>
                                <select class="form-select form-select-lg bg-light border-0" id="interest" required>
                                    <option value="" selected disabled>Select Machine</option>
                                    <option value="Chapathi Machine">Chapathi Machine</option>
                                    <option value="Momos Machine">Momos Machine</option>
                                    <option value="Adhirasam Machine">Adhirasam Machine</option>
                                    <option value="Dough Kneading Machine">Dough Kneading Machine</option>
                                    <option value="Custom Requirement">Custom Requirement</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="message" class="form-label fw-medium">Your Message</label>
                                <textarea class="form-control form-control-lg bg-light border-0" id="message" rows="5"
                                    placeholder="Tell us about your requirements..." required></textarea>
                            </div>
                            <div class="col-12 mt-4">
                                <button type="submit"
                                    class="btn btn-primary btn-lg rounded-pill px-5 w-100 fw-bold">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="map-section mt-5">
    <div class="container-fluid px-0">
        <!-- Google Maps Embed (Using a standard Chennai coordinate for demo) -->
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d29774.036464258104!2d77.0638!3d11.076832!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba858526b5c0591%3A0x392452da03f0a40a!2sBalakrishna%20Engineering!5e1!3m2!1sen!2sin!4v1773292737600!5m2!1sen!2sin"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>

    </div>
</section>

<?php include 'includes/footer.php'; ?>