<?php
require_once 'load.php';

    $music_table = 'tbl_music';
    $getMusic = getAll($music_table);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="sass/main.css">
  <link rel="stylesheet" href="sass/modules/homePage.css">
    <title>Music</title>
</head>
<body>
<div class="ad-movie-row">
    <?php while ($row = $getMusic->fetch(PDO::FETCH_ASSOC)): ?>
        
        <div class="movie-item">
        <a href="musicdet.php?id=<?php echo $row['music_id']; ?>"><img src="images/<?php echo $row['music_cover']; ?>" alt="<?php echo $row['music_title']; ?>" id="movie-img" /></a>
            <h5><?php echo $row['music_title']; ?></h5>
            <h4>Movie Released: <?php echo $row['music_year']; ?></h4>
            
        </div>
        
    <?php endwhile;?>
    </div>
    <?php include 'templates/footer.php';?>
</body>
</html>