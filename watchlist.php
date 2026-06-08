<?php
include "../config/db.php";
$result = $conn->query("SELECT * FROM watchlist ORDER BY added_at DESC");
?>
<!DOCTYPE html>
<html>
<head>
    <title>My Watchlist</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
        <a href="../index.php">← Back to Search</a>
        <h1>My Watchlist</h1>
        
        <?php while($row = $result->fetch_assoc()): ?>
            <div class="watchlist-item">
                <div>
                    <strong><?php echo htmlspecialchars($row['title']); ?></strong> 
                    <span class="status-tag"><?php echo $row['status']; ?></span>
                </div>
                
                <div class="actions">
                    <?php if($row['status'] == 'Plan to Watch'): ?>
                        <a href="../actions/mark_watched.php?id=<?php echo $row['movie_id']; ?>" style="color: #00ff41;">✔ Mark Watched</a>
                    <?php endif; ?>
                    
                    <a href="../actions/delete.php?id=<?php echo $row['movie_id']; ?>" class="delete-link">Remove</a>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</body>
</html>