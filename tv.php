<?php
require_once 'load.php';

    $tv_table = 'tbl_tv';
    $getTvs = getAll($tv_table);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="sass/main.css">
  <link rel="stylesheet" href="sass/modules/homePage.css">
    <title>Shows</title>
</head>
<body>
<div class="ad-movie-row">
    <?php while ($row = $getTvs->fetch(PDO::FETCH_ASSOC)): ?>
        
        <div class="movie-item">
        <a href="tvdet.php?id=<?php echo $row['tv_id']; ?>"><img src="images/<?php echo $row['tv_cover']; ?>" alt="<?php echo $row['tv_title']; ?>" id="movie-img" /></a>
            <h5><?php echo $row['tv_title']; ?></h5>
            <h4>Movie Released: <?php echo $row['tv_year']; ?></h4>
            
        </div>
        
    <?php endwhile;?>
    </div>
    <?php include 'templates/footer.php';?>
</body>
</html>