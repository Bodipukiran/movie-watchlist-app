<?php
include "../config/db.php";

$id = $_GET['id'];
$newStatus = "Watched";

// Direct update - no extra guards
$conn->query("UPDATE watchlist SET status = '$newStatus' WHERE movie_id = $id");

header("Location: ../pages/watchlist.php");
exit();
?>