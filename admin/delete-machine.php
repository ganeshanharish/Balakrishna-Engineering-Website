<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: login.php');
    exit;
}
require '../includes/db.php';

if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];
    $stmt = $pdo->prepare("DELETE FROM machines WHERE id = ?");
    $stmt->execute([$id]);
}

header('Location: index.php?msg=deleted');
exit;
?>