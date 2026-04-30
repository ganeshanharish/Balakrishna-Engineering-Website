<?php 
require 'includes/db.php';
include 'includes/header.php'; 

// Fetch product details based on URL parameter
$slug = isset($_GET['machine']) ? $_GET['machine'] : 'chapathi';

$stmt = $pdo->prepare("SELECT * FROM machines WHERE slug = ?");
$stmt->execute([$slug]);
$product = $stmt->fetch();

// If machine is not found, show a generic 404 block or redirect
if (!$product) {
    echo "<div class='container py-5 text-center mt-5'><h1 class='display-1 text-muted'><i class='bi bi-tools'></i></h1><h2 class='mt-4'>Machine Not Found</h2><p class='lead'>The machine you are looking for does not exist or has been removed.</p><a href='products.php' class='btn btn-primary rounded-pill px-4 mt-3'>Back to Catalog</a></div>";
    include 'includes/footer.php';
    exit;
}

// Decode JSON fields
$features = json_decode($product['features'] ?? '[]', true);
$specs = json_decode($product['specs'] ?? '{}', true);
$image_gallery = []; 
// If you implement multiple image uploads later, decode it here. Right now we use a generic placeholder array if empty.
if(!empty($product['image_gallery'])) {
    $image_gallery = json_decode($product['image_gallery'], true);
} else {
    // defaults just for aesthetic filler if no gallery exist
    $image_gallery = [
        'https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?auto=format&fit=crop&q=80&w=400',
        'https://images.unsplash.com/photo-1565515261924-0c21350a221f?auto=format&fit=crop&q=80&w=400'
    ];
}

$main_img = htmlspecialchars($product['image'] ?? 'https://images.unsplash.com/photo-1589131649666-3d758c082531?auto=format&fit=crop&q=80&w=800');

$whatsapp_msg = urlencode("Hello Balakrishna Engineering, I am interested in the " . $product['machine_name'] . ". Can I get a quote and more details?");
?>

<!-- Page Banner -->
<div class="page-banner py-5" style="background-image: url('https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&q=80'); padding-top: 100px !important;">
    <div class="container text-center mt-5">
        <h1 class="display-5 fw-bold mb-3"><?php echo htmlspecialchars($product['machine_name']); ?></h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="products.php">Machines</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo htmlspecialchars($product['machine_name']); ?></li>
            </ol>
        </nav>
    </div>
</div>

<section class="section-padding bg-secondary">
    <div class="container">
        
        <!-- Top row: Media & Summary -->
        <div class="row gy-5 mb-5 bg-white p-4 p-md-5 rounded-4 shadow-sm border-0">
            <!-- Media Gallery -->
            <div class="col-lg-6">
                <!-- Main Image -->
                <div class="bg-light p-3 rounded-4 shadow-sm d-flex align-items-center justify-content-center mb-3" style="height: 400px; overflow: hidden;">
                    <img src="<?php echo $main_img; ?>" id="mainProductImage" alt="<?php echo htmlspecialchars($product['machine_name']); ?>" class="img-fluid rounded-3" style="object-fit: contain; width: 100%; height: 100%;">
                </div>
                <!-- Thumbnails -->
                <div class="row g-3">
                    <div class="col-4">
                        <div class="bg-light rounded-3 shadow-sm border border-primary border-2 p-1 cursor-pointer thumb-wrapper" style="height: 100px; cursor: pointer;" onclick="document.getElementById('mainProductImage').src='<?php echo $main_img; ?>'; document.querySelectorAll('.thumb-wrapper').forEach(el=>el.classList.remove('border-primary')); this.classList.add('border-primary');">
                            <img src="<?php echo $main_img; ?>" class="img-fluid rounded-2 w-100 h-100" style="object-fit: cover;">
                        </div>
                    </div>
                    <?php foreach($image_gallery as $img): ?>
                    <div class="col-4">
                        <div class="bg-light rounded-3 shadow-sm border border-2 p-1 cursor-pointer thumb-wrapper" style="height: 100px; cursor: pointer;" onclick="document.getElementById('mainProductImage').src='<?php echo htmlspecialchars($img); ?>'; document.querySelectorAll('.thumb-wrapper').forEach(el=>el.classList.remove('border-primary')); this.classList.add('border-primary');">
                            <img src="<?php echo htmlspecialchars($img); ?>" class="img-fluid rounded-2 w-100 h-100" style="object-fit: cover;">
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            
            <!-- Summary Info -->
            <div class="col-lg-6 ps-lg-5">
                <span class="badge bg-primary-light text-primary px-3 py-2 rounded-pill mb-3 fw-bold tracking-wider text-uppercase">Commercial Grade</span>
                <h2 class="display-6 fw-bold mb-3"><?php echo htmlspecialchars($product['machine_name']); ?></h2>
                
                <div class="d-flex align-items-center mb-4">
                     <span class="badge bg-dark fs-6 py-2 px-3 me-3"><i class="bi bi-speedometer2 me-2 text-primary"></i> Capacity: <?php echo htmlspecialchars($product['capacity']); ?></span>
                     <span class="text-warning"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i> (4.9/5)</span>
                </div>
                
                <p class="lead text-muted mb-4"><?php echo nl2br(htmlspecialchars($product['description'])); ?></p>
                
                <h5 class="fw-bold mb-3">Material Build:</h5>
                <p class="text-muted"><i class="bi bi-check-circle-fill text-primary me-2"></i> Food Grade Stainless Steel 304 Contact Parts</p>

                <hr class="my-4">

                <div class="d-flex flex-column flex-sm-row gap-3 mt-4">
                    <a href="https://wa.me/919876543210?text=<?php echo $whatsapp_msg; ?>" target="_blank" class="btn btn-success btn-lg rounded-pill px-4 shadow flex-grow-1 fw-bold hover-lift d-flex align-items-center justify-content-center">
                        <i class="bi bi-whatsapp fs-4 me-2"></i> WhatsApp Enquiry
                    </a>
                    <a href="contact.php" class="btn btn-outline-dark btn-lg rounded-pill px-4 hover-lift">Get Official Quote</a>
                </div>
            </div>
        </div>
        
        <!-- Bottom Row: Tabs for Video & Specs -->
        <div class="row">
            <div class="col-12">
                <div class="bg-white rounded-4 shadow-sm border-0 p-4 p-md-5">
                    
                    <ul class="nav nav-tabs nav-fill mb-4 border-bottom-0" id="productTab" role="tablist">
                        <?php if(!empty($product['video'])): ?>
                        <li class="nav-item border" role="presentation">
                            <button class="nav-link active bg-light text-dark fw-bold border-0 border-bottom border-primary border-4 py-3" id="video-tab" data-bs-toggle="tab" data-bs-target="#video-tab-pane" type="button" role="tab" aria-controls="video-tab-pane" aria-selected="true"><i class="bi bi-play-btn-fill me-2 text-primary"></i> Working Video</button>
                        </li>
                        <?php endif; ?>
                        
                        <li class="nav-item border border-start-0" role="presentation">
                            <button class="nav-link bg-light text-dark fw-bold border-0 py-3 <?php echo empty($product['video']) ? 'active border-bottom border-primary border-4' : ''; ?>" id="features-tab" data-bs-toggle="tab" data-bs-target="#features-tab-pane" type="button" role="tab" aria-controls="features-tab-pane" aria-selected="<?php echo empty($product['video']) ? 'true' : 'false'; ?>"><i class="bi bi-list-check me-2 text-primary"></i> Features</button>
                        </li>
                        <li class="nav-item border border-start-0" role="presentation">
                            <button class="nav-link bg-light text-dark fw-bold border-0 py-3" id="specs-tab" data-bs-toggle="tab" data-bs-target="#specs-tab-pane" type="button" role="tab" aria-controls="specs-tab-pane" aria-selected="false"><i class="bi bi-gear-fill me-2 text-primary"></i> Technical Specs</button>
                        </li>
                    </ul>

                    <div class="tab-content" id="productTabContent">
                        
                        <?php if(!empty($product['video'])): ?>
                        <!-- Working Video Pane -->
                        <div class="tab-pane fade show active py-3" id="video-tab-pane" role="tabpanel" aria-labelledby="video-tab" tabindex="0">
                            <h4 class="fw-bold mb-4">See the <?php echo htmlspecialchars($product['machine_name']); ?> in Action</h4>
                            <div class="ratio ratio-16x9 rounded-4 overflow-hidden shadow">
                                <video controls preload="metadata" style="object-fit: cover;">
                                  <source src="<?php echo htmlspecialchars($product['video']); ?>" type="video/mp4">
                                  Your browser does not support the video tag.
                                </video>
                            </div>
                        </div>
                        <?php endif; ?>

                        <!-- Features Pane -->
                        <div class="tab-pane fade <?php echo empty($product['video']) ? 'show active' : ''; ?> py-3" id="features-tab-pane" role="tabpanel" aria-labelledby="features-tab" tabindex="0">
                            <h4 class="fw-bold mb-4 border-bottom pb-2">Key Highlights</h4>
                            <div class="row g-4 mt-2">
                                <?php if($features): ?>
                                    <?php foreach($features as $feature): ?>
                                    <div class="col-md-6">
                                        <div class="d-flex align-items-start bg-secondary p-3 rounded-3 h-100 border border-light">
                                            <i class="bi bi-check-circle-fill text-primary mt-1 me-3 fs-4"></i> 
                                            <span class="fs-5 text-dark fw-medium"><?php echo htmlspecialchars($feature); ?></span>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <p class="text-muted">No specific features listed.</p>
                                <?php endif; ?>
                            </div>
                        </div>

                        <!-- Specs Pane -->
                        <div class="tab-pane fade py-3" id="specs-tab-pane" role="tabpanel" aria-labelledby="specs-tab" tabindex="0">
                            <h4 class="fw-bold mb-4 border-bottom pb-2">Full Specifications</h4>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover mb-0">
                                    <tbody>
                                        <?php if($specs): ?>
                                            <?php foreach($specs as $key => $val): ?>
                                            <tr>
                                                <th class="w-50 bg-secondary text-dark fw-bold ps-4 py-3" style="width: 30%;"><?php echo htmlspecialchars($key); ?></th>
                                                <td class="ps-4 py-3 text-muted" style="width: 70%;"><?php echo htmlspecialchars($val); ?></td>
                                            </tr>
                                            <?php endforeach; ?>
                                        <?php else: ?>
                                            <tr><td class="text-muted text-center py-4">Detailed specifications are currently unavailable.</td></tr>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                    
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Additional script to handle custom tab border aesthetics -->
<script>
document.addEventListener('DOMContentLoaded', () => {
    const triggerTabList = document.querySelectorAll('#productTab button')
    triggerTabList.forEach(triggerEl => {
        triggerEl.addEventListener('click', event => {
            triggerTabList.forEach(btn => btn.classList.remove('border-bottom', 'border-primary', 'border-4'));
            event.target.classList.add('border-bottom', 'border-primary', 'border-4');
        })
    })
})
</script>

<?php include 'includes/footer.php'; ?>