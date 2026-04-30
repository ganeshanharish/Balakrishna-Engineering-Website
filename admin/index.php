<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: login.php');
    exit;
}
require '../includes/db.php';

// Fetch all machines
$stmt = $pdo->query("SELECT id, machine_name, slug, capacity, created_at FROM machines ORDER BY created_at DESC");
$machines = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard - Balakrishna Engineering</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <style>
        body {
            background-color: #f1f5f9;
            font-family: sans-serif;
        }

        .navbar {
            background-color: #1e293b;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="index.php"><i class="bi bi-gear-fill text-success me-2"></i> BKE Admin
                Panel</a>
            <div class="collapse navbar-collapse justify-content-end">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="../index.php" target="_blank"><i
                                class="bi bi-box-arrow-up-right me-1"></i> View Live Site</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-danger fw-bold ms-3" href="logout.php"><i
                                class="bi bi-box-arrow-left me-1"></i> Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container py-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="fw-bold mb-0">Machine Catalog</h3>
            <a href="add-machine.php" class="btn btn-success fw-bold"><i class="bi bi-plus-lg me-1"></i> Add New
                Machine</a>
        </div>

        <?php if (isset($_GET['msg']) && $_GET['msg'] == 'deleted'): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Machine deleted successfully!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <div class="card border-0 shadow-sm rounded-4">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="bg-light">
                            <tr>
                                <th class="ps-4 py-3">ID</th>
                                <th class="py-3">Machine Name</th>
                                <th class="py-3">Capacity</th>
                                <th class="py-3">Slug (URL)</th>
                                <th class="py-3">Created</th>
                                <th class="pe-4 py-3 text-end">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (count($machines) > 0): ?>
                                <?php foreach ($machines as $m): ?>
                                    <tr>
                                        <td class="ps-4 fw-bold text-muted">#
                                            <?php echo $m['id']; ?>
                                        </td>
                                        <td class="fw-bold">
                                            <?php echo htmlspecialchars($m['machine_name']); ?>
                                        </td>
                                        <td>
                                            <?php echo htmlspecialchars($m['capacity'] ?? '-'); ?>
                                        </td>
                                        <td><span class="badge bg-secondary">
                                                <?php echo htmlspecialchars($m['slug']); ?>
                                            </span></td>
                                        <td class="text-muted small">
                                            <?php echo date('M d, Y', strtotime($m['created_at'])); ?>
                                        </td>
                                        <td class="pe-4 text-end">
                                            <a href="edit-machine.php?id=<?php echo $m['id']; ?>"
                                                class="btn btn-sm btn-outline-primary me-2"><i
                                                    class="bi bi-pencil-square"></i></a>
                                            <a href="delete-machine.php?id=<?php echo $m['id']; ?>"
                                                class="btn btn-sm btn-outline-danger"
                                                onclick="return confirm('Are you sure you want to delete this machine? This action cannot be undone.');"><i
                                                    class="bi bi-trash"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="6" class="text-center py-5 text-muted">No machines found in the database.
                                    </td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>