<?php
include "../api/tmdb.php";
$query = $_GET['movie'] ?? "";
$movies = searchMovie($query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Search: <?php echo htmlspecialchars($query); ?></title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
        <a href="../index.php">← Back</a>
        <h2>Results for "<?php echo htmlspecialchars($query); ?>"</h2>

        <div class="grid">
            <?php foreach ($movies as $m): ?>
                <div class="card">
                    <img src="https://image.tmdb.org/t/p/w200<?php echo $m['poster_path']; ?>" alt="Poster">
                    <h3><?php echo htmlspecialchars($m['title']); ?></h3>
                    <form action="../actions/add_watchlist.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $m['id']; ?>">
                        <input type="hidden" name="title" value="<?php echo htmlspecialchars($m['title']); ?>">
                        <button type="submit" class="btn-add">+ Add to List</button>
                    </form>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>