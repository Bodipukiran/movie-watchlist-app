<?php
include "../config/db.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $status = "Plan to Watch";

    // Prepared Statement (Secure)
    $stmt = $conn->prepare("INSERT INTO watchlist (movie_id, title, status) VALUES (?, ?, ?)");
    $stmt->bind_param("iss", $id, $title, $status);
    $stmt->execute();

    header("Location: ../pages/watchlist.php");
    exit();
}
?>
