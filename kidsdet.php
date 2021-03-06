<?php
require_once 'load.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $tbl = 'tbl_kids';
    $col = 'kids_id';
    $getKids = getSingleKids($tbl, $col, $id);
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

    <title>Kids Media</title>
</head>
<body>
    <div class="det-con">
    <?php if (!is_string($getKids)): ?>
        <?php while ($row = $getKids->fetch(PDO::FETCH_ASSOC)): ?>
            <video  id="movie-1" src="video/<?php echo $row['kids_trailer']; ?>" controls autoplay></video>
            <h2><?php echo $row['kids_title']; ?></h2>
            <p><br> <?php echo $row['kids_storyline']; ?></p>
            <iframe src="https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2Flocalhost%2FCollier_V_Roku-php%2Fmusicdet.php%3Fid%3D3&layout=button_count&size=small&width=77&height=20&appId" width="77" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            <a href="kids.php">Back...</a>
        <?php endwhile;?>
    <?php endif;?>
    </div>

</body>
</html>