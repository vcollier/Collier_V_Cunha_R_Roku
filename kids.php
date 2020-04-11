<?php
require_once 'load.php';

    $kids_table = 'tbl_kids';
    $getKids = getAll($kids_table);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="sass/main.css">
  <link rel="stylesheet" href="sass/modules/homePage.css">
    <title>Kids</title>
</head>
<body>
<div class="ad-movie-row">
    <?php while ($row = $getKids->fetch(PDO::FETCH_ASSOC)): ?>
        
        <div class="movie-item">
        <a href="kidsdet.php?id=<?php echo $row['kids_id']; ?>"><img src="images/<?php echo $row['kids_cover']; ?>" alt="<?php echo $row['kids_title']; ?>" id="movie-img" /></a>
            <h5><?php echo $row['kids_title']; ?></h5>
            
        </div>
        
    <?php endwhile;?>
    </div>
    <?php include 'templates/footer.php';?>
</body>
</html>