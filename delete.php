<?php
include "../config/db.php";

// 1. Just grab the ID from the URL
$id = $_GET['id'];

// 2. Delete it from the database
$stmt = $conn->prepare("DELETE FROM watchlist WHERE movie_id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();

// 3. Go back to the list
header("Location: ../pages/watchlist.php");
exit();
?>