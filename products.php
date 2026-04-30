<?php
require 'includes/db.php';
include 'includes/header.php';

// Fetch all machines from DB
$stmt = $pdo->query("SELECT * FROM machines ORDER BY created_at ASC");
$machines = $stmt->fetchAll();
?>

<!-- Page Banner -->
<div class="page-banner"
    style="background-image: url('https://images.unsplash.com/photo-1589131649666-3d758c082531?auto=format&fit=crop&q=80');">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 fw-bold mb-3">Our Machines</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Machines & Products</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<!-- Products Grid -->
<section class="section-padding bg-secondary">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto text-center">
                <h6 class="text-primary fw-bold text-uppercase tracking-wider mb-2">Our Products</h6>
                <h2 class="section-title text-center mx-auto">High-Performance Food Machinery</h2>
                <p class="text-muted">Browse our catalog of industry-leading machines designed for durability, ease of
                    use, and maximum output.</p>
            </div>
        </div>

        <div class="row g-4 justify-content-center">

            <?php if (count($machines) > 0): ?>
                <?php foreach ($machines as $machine): ?>
                    <div class="col-lg-6 col-md-12">
                        <div
                            class="card product-card h-100 border-0 flex-md-row flex-column align-items-center bg-white shadow-sm hover-lift">
                            <div class="product-img-wrapper flex-shrink-0" style="width: 250px; background-color: #fff;">
                                <img src="<?php echo htmlspecialchars($machine['image'] ?? 'https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&q=80&w=400'); ?>"
                                    alt="<?php echo htmlspecialchars($machine['machine_name']); ?>">
                            </div>
                            <div class="card-body p-4 text-center text-md-start">
                                <h4 class="card-title fw-bold mb-3"><?php echo htmlspecialchars($machine['machine_name']); ?>
                                </h4>
                                <p class="card-text text-muted small mb-3"
                                    style="display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden;">
                                    <?php echo htmlspecialchars($machine['description']); ?>
                                </p>
                                <div class="mb-4">
                                    <span class="badge bg-primary-light text-primary fs-6 py-2 px-3 shadow-sm rounded-pill"><i
                                            class="bi bi-speedometer2 me-2"></i> Capacity:
                                        <?php echo htmlspecialchars($machine['capacity']); ?></span>
                                </div>
                                <a href="product-details.php?machine=<?php echo htmlspecialchars($machine['slug']); ?>"
                                    class="btn btn-outline-primary rounded-pill px-4 fw-bold">View Details <i
                                        class="bi bi-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col-12 text-center py-5">
                    <h3 class="text-muted">No machines currently available.</h3>
                    <p>Check back later or contact us for custom orders.</p>
                </div>
            <?php endif; ?>

        </div>
    </div>
</section>

<!-- Consult Banner -->
<section class="py-5 border-top bg-white">
    <div class="container text-center py-4">
        <h3 class="fw-bold mb-3">Looking for Customized Machinery?</h3>
        <p class="text-muted mb-4 mx-auto" style="max-width: 600px;">We also provide bespoke food processing solutions
            tailored specifically to your unique recipes and production scale.</p>
        <a href="contact.php" class="btn btn-primary btn-lg rounded-pill px-5">Consult an Engineer</a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>