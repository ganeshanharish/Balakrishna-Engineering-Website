<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: login.php');
    exit;
}
require '../includes/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_machine'])) {

    $machine_name = $_POST['machine_name'];
    $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $machine_name)));
    $description = $_POST['description'];
    $capacity = $_POST['capacity'];
    $video = $_POST['video'];

    // Process Features (convert textarea to json array)
    $features_raw = explode("\n", $_POST['features']);
    $features = [];
    foreach ($features_raw as $f) {
        if (trim($f) != '')
            $features[] = trim($f);
    }
    $features_json = json_encode($features);

    // Process Specs (Key:Value pairs)
    $specs = [];
    $spec_keys = $_POST['spec_key'] ?? [];
    $spec_vals = $_POST['spec_val'] ?? [];
    for ($i = 0; $i < count($spec_keys); $i++) {
        if (trim($spec_keys[$i]) != '' && trim($spec_vals[$i]) != '') {
            $specs[trim($spec_keys[$i])] = trim($spec_vals[$i]);
        }
    }
    $specs_json = json_encode($specs);

    // Handle Image Upload
    $image = '';
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $upload_dir = '../assets/images/uploads/';
        $filename = time() . '_' . basename($_FILES['image']['name']);
        $target_path = $upload_dir . $filename;
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target_path)) {
            $image = '/bke/assets/images/uploads/' . $filename;
        }
    }

    try {
        $stmt = $pdo->prepare("INSERT INTO machines (slug, machine_name, description, capacity, video, image, features, specs) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->execute([$slug, $machine_name, $description, $capacity, $video, $image, $features_json, $specs_json]);
        header("Location: index.php?msg=added");
        exit;
    } catch (PDOException $e) {
        $error = "Error adding machine: " . $e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Machine - Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <style>
        body {
            background-color: #f1f5f9;
            font-family: sans-serif;
        }
    </style>
</head>

<body>

    <div class="container py-5 max-w-lg" style="max-width: 800px;">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="fw-bold mb-0">Add New Machine</h3>
            <a href="index.php" class="btn btn-outline-secondary"><i class="bi bi-arrow-left me-1"></i> Back to
                Dashboard</a>
        </div>

        <?php if (isset($error)): ?>
            <div class="alert alert-danger py-2">
                <?php echo $error; ?>
            </div>
        <?php endif; ?>

        <div class="card border-0 shadow-sm rounded-4 p-4">
            <form method="POST" action="" enctype="multipart/form-data">

                <h5 class="fw-bold mb-3 border-bottom pb-2">Basic Info</h5>

                <div class="mb-3">
                    <label class="form-label fw-semibold">Machine Name*</label>
                    <input type="text" name="machine_name" class="form-control" required
                        placeholder="e.g. Commercial Chapathi Maker">
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-semibold">Capacity*</label>
                        <input type="text" name="capacity" class="form-control" required
                            placeholder="e.g. 1000 pieces/hr">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-semibold">Working Video URL</label>
                        <input type="text" name="video" class="form-control"
                            placeholder="Direct MP4 URL or generic video link">
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">Main Image*</label>
                    <input type="file" name="image" class="form-control" accept="image/*" required>
                </div>

                <div class="mb-4">
                    <label class="form-label fw-semibold">Description*</label>
                    <textarea name="description" class="form-control" rows="4" required
                        placeholder="Detailed marketing description..."></textarea>
                </div>

                <h5 class="fw-bold mb-3 border-bottom pb-2 mt-5">Features & Highlights</h5>
                <div class="mb-4">
                    <label class="form-label fw-semibold text-muted small">Enter one feature per line.</label>
                    <textarea name="features" class="form-control" rows="5"
                        placeholder="- Food grade stainless steel&#10;- Heavy duty motor&#10;- Low maintenance"></textarea>
                </div>

                <h5 class="fw-bold mb-3 border-bottom pb-2 mt-5">Technical Specifications</h5>
                <div id="specs-container">
                    <div class="row g-2 mb-2 spec-row">
                        <div class="col-5"><input type="text" name="spec_key[]" class="form-control"
                                placeholder="Property (e.g. Motor Power)"></div>
                        <div class="col-6"><input type="text" name="spec_val[]" class="form-control"
                                placeholder="Value (e.g. 2.0 HP)"></div>
                        <div class="col-1 text-end"><button type="button" class="btn btn-outline-danger remove-spec"><i
                                    class="bi bi-x-lg"></i></button></div>
                    </div>
                    <div class="row g-2 mb-2 spec-row">
                        <div class="col-5"><input type="text" name="spec_key[]" class="form-control"
                                placeholder="Property (e.g. Voltage)"></div>
                        <div class="col-6"><input type="text" name="spec_val[]" class="form-control"
                                placeholder="Value (e.g. 220V)"></div>
                        <div class="col-1 text-end"><button type="button" class="btn btn-outline-danger remove-spec"><i
                                    class="bi bi-x-lg"></i></button></div>
                    </div>
                </div>
                <button type="button" id="add-spec" class="btn btn-sm btn-outline-primary mt-2"><i
                        class="bi bi-plus-lg me-1"></i> Add Spec Row</button>

                <hr class="my-5">
                <button type="submit" name="add_machine"
                    class="btn btn-success btn-lg w-100 fw-bold rounded-pill shadow-sm">Save Machine</button>
            </form>
        </div>
    </div>

    <script>
        document.getElementById('add-spec').addEventListener('click', function () {
            const container = document.getElementById('specs-container');
            const newRow = document.createElement('div');
            newRow.className = 'row g-2 mb-2 spec-row';
            newRow.innerHTML = `
        <div class="col-5"><input type="text" name="spec_key[]" class="form-control" placeholder="Property"></div>
        <div class="col-6"><input type="text" name="spec_val[]" class="form-control" placeholder="Value"></div>
        <div class="col-1 text-end"><button type="button" class="btn btn-outline-danger remove-spec"><i class="bi bi-x-lg"></i></button></div>
    `;
            container.appendChild(newRow);
        });

        document.addEventListener('click', function (e) {
            if (e.target.closest('.remove-spec')) {
                e.target.closest('.spec-row').remove();
            }
        });
    </script>
</body>

</html>