<?php
$movies_obj = json_decode(file_get_contents("https://reactnative.dev/movies.json"),true);
$movies = $movies_obj["movies"];
?>

<?php foreach($movies as $row){ ?>
    <div><?=$row["id"]?> | <?=$row["releaseYear"]?></div>
     <div><?php echo $row["id"]; ?> | <?php echo $row["releaseYear"]; ?></div>
<?php } ?>