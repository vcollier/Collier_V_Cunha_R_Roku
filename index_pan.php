<?php
require_once 'load.php';

if (isset($_GET['filter'])) {
    //Filter
    $args = array(
        'tbl' => 'tbl_movies',
        'tbl2' => 'tbl_genre',
        'tbl3' => 'tbl_mov_genre',
        'col' => 'movies_id',
        'col2' => 'genre_id',
        'col3' => 'genre_name',
        'filter' => $_GET['filter'],
    );
    $getMovies = getMoviesByFilter($args);
} else {
    $movie_table = 'tbl_movies';
    $getMovies = getAll($movie_table);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="sass/main.css">
  <link rel="stylesheet" href="sass/modules/homePage.css">
    <title>Movies</title>
</head>
<body>
<div class="ad-movie-row">
    <?php while ($row = $getMovies->fetch(PDO::FETCH_ASSOC)): ?>
        
        <div class="movie-item">
        <a href="details.php?id=<?php echo $row['movies_id']; ?>"><img src="images/<?php echo $row['movies_cover']; ?>" alt="<?php echo $row['movies_title']; ?>" id="movie-img" /></a>
            <h5><?php echo $row['movies_title']; ?></h5>
            <h4><?php echo $row['movies_year']; ?></h4>
            
        </div>
        
    <?php endwhile;?>
    </div>
    <?php include 'templates/footer.php';?>
</body>
</html>