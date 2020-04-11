<?php
require_once 'load.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $tbl = 'tbl_music';
    $col = 'music_id';
    $getMusic = getSingleMusic($tbl, $col, $id);
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

    <title>Music</title>
</head>
<body>
    <div class="det-con-mus">
    <?php if (!is_string($getMusic)): ?>
        <?php while ($row = $getMusic->fetch(PDO::FETCH_ASSOC)): ?>
            <audio src="music/<?php echo $row['music_trailer']; ?>" controls autoplay></audio>
            <h2><?php echo $row['music_title']; ?></h2>
            <h4><?php echo $row['music_year']; ?></h4>
            <p><br> <?php echo $row['music_storyline']; ?></p>
            <iframe src="https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2Flocalhost%2FCollier_V_Roku-php%2Fmusicdet.php%3Fid%3D3&layout=button_count&size=small&width=77&height=20&appId" width="77" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            <a href="music.php">Back...</a>
        <?php endwhile;?>
    <?php endif;?>
    </div>
</body>
</html>