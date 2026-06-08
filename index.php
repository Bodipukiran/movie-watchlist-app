<?php
include "api/tmdb.php";
// Fetch trending movies for the background wall
$trending = searchMovie("Trending"); // Or any keyword to get a mix
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Movie Tracker</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="background-wall">
    <?php foreach(array_slice($trending, 0, 15) as $m): ?>
        <img src="https://image.tmdb.org/t/p/w300<?php echo $m['poster_path']; ?>">
    <?php endforeach; ?>
</div>

<div class="container main-content">
    <h1>🎥 CINEPHILE BOOK</h1>
    <form action="pages/search.php" method="GET">
        <input type="text" name="movie" placeholder="Search for a movie..." required>
        <button type="submit">Search</button>
    </form>
    <p><a href="pages/watchlist.php">Go to My Watchlist →</a></p>
</div>

</body>
</html>