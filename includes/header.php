<?php
// Base URL for the project
$base_url = '/bke';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Balakrishna Engineering - Food Processing Machines</title>
    <meta name="description"
        content="Balakrishna Engineering manufactures high-quality food processing machines including Chapathi, Momos, Adhirasam, and Dough Kneading Machines.">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Outfit:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/css/style.css">
</head>

<body>

    <!-- Top Bar -->
    <div class="top-bar bg-primary text-white py-2 d-none d-lg-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <ul class="list-inline mb-0 d-flex gap-4">
                        <li class="list-inline-item"><i class="bi bi-envelope-fill me-2"></i>
                            info@balakrishnaengineering.com</li>
                        <li class="list-inline-item"><i class="bi bi-telephone-fill me-2"></i> +91 98765 43210</li>
                        <li class="list-inline-item"><i class="bi bi-geo-alt-fill me-2"></i> Coimbatore, Tamil Nadu,
                            India
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 text-end">
                    <a href="https://wa.me/919876543210" class="text-white text-decoration-none" target="_blank">
                        <i class="bi bi-whatsapp me-2"></i> WhatsApp Us
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Header -->
    <header class="header sticky-top bg-white">
        <div class="container">
            <nav class="navbar navbar-expand-lg py-3">
                <a class="navbar-brand fw-bold fs-3 text-primary logo-text" href="<?php echo $base_url; ?>/index.php">
                    <span class="text-dark">Balakrishna</span> Engineering
                </a>
                <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse"
                    data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mainNavbar">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-1 gap-lg-3">
                        <li class="nav-item">
                            <a class="nav-link fw-medium" href="<?php echo $base_url; ?>/index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-medium" href="<?php echo $base_url; ?>/about.php">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-medium" href="<?php echo $base_url; ?>/products.php">Machines</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-medium" href="<?php echo $base_url; ?>/gallery.php">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-medium" href="<?php echo $base_url; ?>/testimonials.php">Clients</a>
                        </li>
                        <li class="nav-item ms-lg-2">
                            <a class="btn btn-primary rounded-pill px-4"
                                href="<?php echo $base_url; ?>/contact.php">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>