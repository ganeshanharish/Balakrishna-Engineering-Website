<?php include 'includes/header.php'; ?>

<!-- Video Hero Section -->
<section class="video-hero position-relative overflow-hidden bg-dark text-white"
    style="min-height: 100vh; display: flex; align-items: center;">
    <!-- Stock video of manufacturing / machinery -->
    <video autoplay loop muted playsinline class="position-absolute w-100 h-100"
        style="object-fit: cover; top: 0; left: 0; z-index: 0; filter: brightness(0.4);">
        <source src="https://cdn.coverr.co/videos/coverr-industrial-machine-working-on-a-production-line-7236/1080p.mp4"
            type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <div class="container position-relative z-2 text-center py-5 mt-5">
        <span
            class="badge bg-primary px-3 py-2 rounded-pill mb-4 text-uppercase fw-semibold tracking-wider animate-on-scroll">Premium
            Quality Standards</span>
        <h1 class="display-3 fw-bold mb-3 animate-on-scroll">Balakrishna Engineering</h1>
        <h2 class="h3 fw-light text-white-50 mb-4 animate-on-scroll">Food Processing Machine Manufacturer</h2>
        <p class="lead mb-5 mx-auto animate-on-scroll text-light" style="max-width: 800px;">
            Experience precision, durability, and high-efficiency with our industry-leading commercial food machinery
            solutions for Chapathi, Momos, Adhirasam, and more.
        </p>
        <div class="d-flex flex-wrap gap-3 justify-content-center animate-on-scroll" style="animation-delay: 0.2s;">
            <a href="products.php" class="btn btn-primary btn-lg rounded-pill px-5 fw-bold shadow">Explore Machines</a>
            <a href="contact.php" class="btn btn-outline-light btn-lg rounded-pill px-5 fw-bold">Request a Quote</a>
        </div>
    </div>

    <!-- Scroll Down Indicator -->
    <div class="position-absolute bottom-0 start-50 translate-middle-x mb-4 z-2">
        <a href="#about-preview" class="text-white text-decoration-none">
            <i class="bi bi-chevron-down fs-1 bounce-animation"></i>
        </a>
    </div>
</section>

<!-- About Company Preview -->
<section id="about-preview" class="about-preview section-padding bg-white">
    <div class="container">
        <div class="row align-items-center gy-5">
            <div class="col-lg-6 position-relative ps-lg-4">
                <div class="position-absolute bg-primary-light rounded-4"
                    style="width: 100%; height: 100%; top: -20px; left: -20px; z-index: 0;"></div>
                <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&q=80&w=800"
                    alt="Factory Interior" class="img-fluid rounded-4 shadow-lg position-relative z-1"
                    style="height: 500px; width: 100%; object-fit: cover;">
                <div class="position-absolute bg-white p-4 rounded-4 shadow-lg text-center border-start border-4 border-primary"
                    style="bottom: 30px; right: -30px; z-index: 2;">
                    <h3 class="fw-bold text-primary mb-0 display-6">15+</h3>
                    <p class="mb-0 fw-medium text-dark">Years of Excellence</p>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1 ps-lg-5">
                <h6 class="text-primary fw-bold text-uppercase tracking-wider mb-2">About The Company</h6>
                <h2 class="display-6 fw-bold mb-4">Engineering the Future of Food Processing</h2>
                <p class="lead mb-4 text-dark">We build machines that power commercial kitchens, large scale canteens,
                    and food industries worldwide.</p>
                <p class="text-muted mb-4">Since our inception, Balakrishna Engineering has focused on automating
                    repetitive tasks without compromising on the authentic taste and texture of food. Our high-grade
                    stainless steel machines ensure hygienic operations, minimal maintenance, and unprecedented
                    production speed.</p>

                <ul class="list-unstyled mb-4">
                    <li class="mb-3 d-flex align-items-center"><i
                            class="bi bi-check-circle-fill text-primary me-3 fs-5"></i> Innovative technology reducing
                        manual labor</li>
                    <li class="mb-3 d-flex align-items-center"><i
                            class="bi bi-check-circle-fill text-primary me-3 fs-5"></i> 100% Food-grade SS304 materials
                    </li>
                    <li class="mb-3 d-flex align-items-center"><i
                            class="bi bi-check-circle-fill text-primary me-3 fs-5"></i> Tailored solutions for specific
                        production needs</li>
                </ul>

                <a href="about.php" class="btn btn-outline-primary pt-2 pb-2 px-4 rounded-pill fw-bold">Read Our Full
                    Story <i class="bi bi-arrow-right ms-2"></i></a>
            </div>
        </div>
    </div>
</section>

<!-- Our Machines Preview -->
<section class="products-section section-padding bg-secondary">
    <div class="container">
        <div class="text-center mb-5">
            <h6 class="text-primary fw-bold text-uppercase tracking-wider mb-2">Our Offerings</h6>
            <h2 class="section-title text-center mx-auto">Featured Machines</h2>
            <p class="text-muted mx-auto" style="max-width: 600px;">Explore our highly demanded food processing
                equipment designed for optimal performance and effortless operation.</p>
        </div>

        <div class="row g-4 justify-content-center">
            <!-- Product 1 -->
            <div class="col-lg-3 col-md-6">
                <div class="card product-card h-100 border-0 bg-white">
                    <div class="product-img-wrapper" style="background-color: #fff;">
                        <img src="https://images.unsplash.com/photo-1589131649666-3d758c082531?auto=format&fit=crop&q=80&w=400"
                            alt="Chapathi Machine">
                    </div>
                    <div class="card-body text-center p-4">
                        <h5 class="card-title fw-bold mb-3">Automatic Chapathi Machine</h5>
                        <p class="card-text text-muted small mb-4">High capacity commercial usage. Perfect shape and
                            authentic toast.</p>
                        <a href="product-details.php?machine=chapathi"
                            class="btn btn-outline-primary rounded-pill w-100">View Specifications</a>
                    </div>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="col-lg-3 col-md-6">
                <div class="card product-card h-100 border-0 bg-white">
                    <div class="product-img-wrapper" style="background-color: #fff;">
                        <img src="https://images.unsplash.com/photo-1625938146369-adc83368bda9?auto=format&fit=crop&q=80&w=400"
                            alt="Momos Machine">
                    </div>
                    <div class="card-body text-center p-4">
                        <h5 class="card-title fw-bold mb-3">Momos Making Machine</h5>
                        <p class="card-text text-muted small mb-4">Automated sheeting and filling for rapid, uniform dim
                            sum production.</p>
                        <a href="product-details.php?machine=momos"
                            class="btn btn-outline-primary rounded-pill w-100">View Specifications</a>
                    </div>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="col-lg-3 col-md-6">
                <div class="card product-card h-100 border-0 bg-white">
                    <div class="product-img-wrapper" style="background-color: #fff;">
                        <img src="https://images.unsplash.com/photo-1621091215352-7b1965681c25?auto=format&fit=crop&q=80&w=400"
                            alt="Adhirasam Machine">
                    </div>
                    <div class="card-body text-center p-4">
                        <h5 class="card-title fw-bold mb-3">Adhirasam Machine</h5>
                        <p class="card-text text-muted small mb-4">Specialized traditional sweets making with precise
                            portion control.</p>
                        <a href="product-details.php?machine=adhirasam"
                            class="btn btn-outline-primary rounded-pill w-100">View Specifications</a>
                    </div>
                </div>
            </div>

            <!-- Product 4 -->
            <div class="col-lg-3 col-md-6">
                <div class="card product-card h-100 border-0 bg-white">
                    <div class="product-img-wrapper" style="background-color: #fff;">
                        <img src="https://images.unsplash.com/photo-1589131649666-3d758c082531?auto=format&fit=crop&q=80&w=400"
                            alt="Dough Kneading Machine">
                    </div>
                    <div class="card-body text-center p-4">
                        <h5 class="card-title fw-bold mb-3">Dough Kneading Machine</h5>
                        <p class="card-text text-muted small mb-4">Heavy duty planetary mixer and spiral dough kneader
                            for bakeries.</p>
                        <a href="product-details.php?machine=dough-kneading"
                            class="btn btn-outline-primary rounded-pill w-100">View Specifications</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-5">
            <a href="products.php" class="btn btn-primary btn-lg rounded-pill px-5 shadow">View Full Catalog</a>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="why-choose-us section-padding bg-white">
    <div class="container">
        <div class="row align-items-center mb-5">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h6 class="text-primary fw-bold text-uppercase tracking-wider mb-2">Our Advantage</h6>
                <h2 class="display-6 fw-bold mb-4">Why Choose Balakrishna Engineering?</h2>
                <p class="lead text-muted">We don't just sell machines; we provide comprehensive production solutions
                    backed by rigorous engineering and dedicated support.</p>
                <a href="about.php" class="btn btn-outline-dark mt-3 rounded-pill px-4">Learn More About Us</a>
            </div>
            <div class="col-lg-6">
                <div class="row g-4">
                    <div class="col-sm-6">
                        <div class="p-4 bg-secondary rounded-4 h-100 border-bottom border-primary border-4 hover-lift">
                            <i class="bi bi-gear-fill text-primary fs-1 mb-3"></i>
                            <h5 class="fw-bold">Precision Engineering</h5>
                            <p class="text-muted small mb-0">Built to run flawlessly for years with exact technical
                                tolerances.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="p-4 bg-secondary rounded-4 h-100 border-bottom border-primary border-4 hover-lift">
                            <i class="bi bi-shield-check text-primary fs-1 mb-3"></i>
                            <h5 class="fw-bold">Safety & Hygiene</h5>
                            <p class="text-muted small mb-0">Constructed with high-grade food-safe materials that are
                                easy to clean.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="p-4 bg-secondary rounded-4 h-100 border-bottom border-primary border-4 hover-lift">
                            <i class="bi bi-lightning-charge text-primary fs-1 mb-3"></i>
                            <h5 class="fw-bold">High Efficiency</h5>
                            <p class="text-muted small mb-0">Significantly reduces your operational costs and production
                                times.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="p-4 bg-secondary rounded-4 h-100 border-bottom border-primary border-4 hover-lift">
                            <i class="bi bi-headset text-primary fs-1 mb-3"></i>
                            <h5 class="fw-bold">24/7 Support</h5>
                            <p class="text-muted small mb-0">Our service engineers are always available for maintenance
                                and upgrades.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Customer Reviews -->
<section class="reviews-section section-padding bg-dark text-white position-relative overflow-hidden">
    <div class="position-absolute bg-primary rounded-circle"
        style="width: 500px; height: 500px; top: -250px; right: -250px; opacity: 0.1; filter: blur(60px);"></div>
    <div class="container position-relative z-1">
        <div class="text-center mb-5">
            <h6 class="text-primary fw-bold text-uppercase tracking-wider mb-2">Testimonials</h6>
            <h2 class="section-title text-center mx-auto text-white">Loved by Industry Leaders</h2>
        </div>

        <div class="row g-4 justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="bg-white text-dark p-4 rounded-4 shadow-sm h-100 position-relative hover-lift">
                    <i class="bi bi-quote position-absolute text-primary opacity-25"
                        style="top: 15px; right: 20px; font-size: 3rem;"></i>
                    <div class="d-flex text-warning mb-3">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p class="text-muted mb-4 z-1 position-relative">"The Automatic Chapathi machine completely changed
                        our canteen operations. We now serve 2000 workers fresh chapathis every day with minimal staff."
                    </p>
                    <div class="d-flex align-items-center mt-auto">
                        <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3 fw-bold flex-shrink-0"
                            style="width: 45px; height: 45px;">RK</div>
                        <div>
                            <h6 class="fw-bold mb-0">Rajesh Kumar</h6>
                            <small class="text-muted">Industrial Canteen Manager</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="bg-white text-dark p-4 rounded-4 shadow-sm h-100 position-relative hover-lift">
                    <i class="bi bi-quote position-absolute text-primary opacity-25"
                        style="top: 15px; right: 20px; font-size: 3rem;"></i>
                    <div class="d-flex text-warning mb-3">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p class="text-muted mb-4 z-1 position-relative">"It sped up our production line by 300% and the
                        consistency of the filling and shape is exactly what we needed to standardize our franchise."
                    </p>
                    <div class="d-flex align-items-center mt-auto">
                        <div class="bg-warning text-dark rounded-circle d-flex align-items-center justify-content-center me-3 fw-bold flex-shrink-0"
                            style="width: 45px; height: 45px;">AS</div>
                        <div>
                            <h6 class="fw-bold mb-0">Anita Sharma</h6>
                            <small class="text-muted">Founder, Momo Magic Chain</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-none d-lg-block">
                <div class="bg-white text-dark p-4 rounded-4 shadow-sm h-100 position-relative hover-lift">
                    <i class="bi bi-quote position-absolute text-primary opacity-25"
                        style="top: 15px; right: 20px; font-size: 3rem;"></i>
                    <div class="d-flex text-warning mb-3">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                            class="bi bi-star-fill"></i><i class="bi bi-star-half"></i>
                    </div>
                    <p class="text-muted mb-4 z-1 position-relative">"The heavy duty dough kneader runs 12 hours a day
                        without a hiccup. It is a solid, robust piece of equipment. Excellent after-sales support."</p>
                    <div class="d-flex align-items-center mt-auto">
                        <div class="bg-success text-white rounded-circle d-flex align-items-center justify-content-center me-3 fw-bold flex-shrink-0"
                            style="width: 45px; height: 45px;">KP</div>
                        <div>
                            <h6 class="fw-bold mb-0">Khan & Partners</h6>
                            <small class="text-muted">Wholesale Bakery</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-5">
            <a href="testimonials.php" class="btn btn-outline-light rounded-pill px-5 fw-bold">Read All Reviews</a>
        </div>
    </div>
</section>

<!-- Contact Call-to-Action -->
<section class="cta-section py-5 bg-primary text-white position-relative">
    <div class="container py-4 position-relative z-1">
        <div class="row align-items-center">
            <div class="col-lg-8 mb-4 mb-lg-0 text-center text-lg-start">
                <h2 class="fw-bold mb-2">Ready to Upgrade Your Production?</h2>
                <p class="lead mb-0 opacity-75">Connect with our engineering experts today for a custom quote and
                    machine demonstration.</p>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <a href="contact.php"
                    class="btn btn-light text-primary btn-lg rounded-pill px-4 me-md-2 mb-2 mb-md-0 border-0 fw-bold shadow-sm">Contact
                    Us Now</a>
                <a href="https://wa.me/919876543210" target="_blank"
                    class="btn btn-outline-light btn-lg rounded-pill px-4 mb-2 mb-md-0"><i
                        class="bi bi-whatsapp me-2"></i> Chat</a>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>